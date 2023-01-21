<?php
@include 'config.php';
if (isset($_POST['submit'])) {

    $inv_name = $_POST['username'];
    $name = $_POST['name'];
    $inv_email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $inv_orgname = $_POST['org_name'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $user_name = mysqli_real_escape_string($conn, $_POST['username']);
    $user_email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_pass = mysqli_real_escape_string($conn, $_POST['password']);
    $user_cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $org_name = mysqli_real_escape_string($conn, $_POST['org_name']);

    $select = " SELECT * FROM investors WHERE inv_email = '$inv_email' && inv_name = '$inv_name' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';
    } else {

        if ($pass != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO investors(inv_name,name, inv_password,inv_email,inv_orgname) VALUES('$inv_name','$name','$pass','$inv_email','$inv_orgname')";
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
            <select name="user_type">
                <option value="investor">Investor</option>
            </select>
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <input type="text" name="org_name" required placeholder="enter organization name">
            <input type="text" name="user_descript" required placeholder="enter description">
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a></p>
        </form>

    </div>
    <?php include "footer.php"; ?>