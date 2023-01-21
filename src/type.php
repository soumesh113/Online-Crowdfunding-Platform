<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="./soumesh.css" rel="stylesheet">

</head>

<body>
    <div class="navbar">
        <a href="vansh.php">HOME</a>
        <a href="#">TOP FUNDED PROJECTS</a>
        <a href="#">MEET EXPERTS</a>
        <a href="#">MORE INFORMATION</a>
        <a href="">CONTACT US</a>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $user_type = $_POST['user_type'];
        if ($user_type == 'investor') {
            header("Location: investor_reg.php");
        } else if ($user_type == 'enterpreneur') {
            header("Location: enterpr_reg.php");
        } else {
            header("Location: expert_reg.php");
        }
    }
    ?>

    <div class="form-container">

        <form action="" method="post">
            <h3>register type</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <select name="user_type">
                <option value="">Select type</option>
                <option value="enterpreneur">Enterpreneur</option>
                <option value="investor">Investor</option>
                <option value="experts">Experts</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a></p>
        </form>

    </div>

    <?php include "footer.php" ?>