<?php
@include 'config.php';
if (isset($_POST['submit'])) {

    $exp_name = $_POST['exp_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $profile = $_POST['profile'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM experts WHERE exp_email = '$email' && exp_name = '$exp_name' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';
    } else {

        if ($pass != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO experts(exp_name,name, exp_email,exp_details, exp_password) VALUES('$exp_name','$name','$email','$profile',' $pass')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="./soumesh.css" rel="stylesheet">

</head>

<body>
    <div>
        <h1 class="text-white text-6xl hover:text-black bg-red-600 text-center">REGISTRATION</h1>
    </div>
    <div class="navbar">
        <a href="vansh.php">HOME</a>
        <a href="top_funded_projects.php">TOP FUNDED PROJECTS</a>
        <a href="meet_projects.php">MEET EXPERTS</a>
        <a href="more_info.php">MORE INFORMATION</a>
        <a href="contact.php">CONTACT US</a>
    </div>


    <div class="form-container">

        <form action="" method="post">
            <h3>register now</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="username" required placeholder="enter username">
            <input type="text" name="name" required placeholder="enter your name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="url" name="profile" required placeholder="enter your linkedln/github link">
            <select name="user_type">
                <option value="experts">Experts</option>
            </select>
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a></p>
        </form>

    </div>
    <?php include "footer.php"; ?>