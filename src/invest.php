<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {

    $amount = $_POST['amount'];
    $project_id = $_POST['p_id'];




    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $project_id = mysqli_real_escape_string($conn, $project_id);

    if ($_SESSION['type'] == 'investor') {

        $the_email = $_SESSION['email'];

        $query = "SELECT * FROM investors WHERE inv_email = '$the_email'";
        $the_run = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($the_run);

        $inv_name = $row['inv_name'];
    }


    $select = " UPDATE projects SET project_funding = project_funding + $amount WHERE project_id = $project_id";
    $run = mysqli_query($conn, $select);

    $select = "UPDATE investors SET fund_raised = fund_raised + $amount WHERE inv_name = '$inv_name'";
    $run = mysqli_query($conn, $select);
    header("Location: test.php?amt=$amount");
}


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
        <a href="topfundedprojects.php">TOP FUNDED PROJECTS</a>
        <a href="meet_projects.php">MEET EXPERTS</a>
        <a href="more_info.php">MORE INFORMATION</a>
        <a href="contact.php">CONTACT US</a>
    </div>


    <div class="form-container">

        <form action="" method="post">
            <h3>Invest now</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="p_id" required placeholder="enter project id">
            <input type="text" name="amount" required placeholder="enter amount">
            <input id="rzp-button1" type="submit" name="submit" value="invest now" class="form-btn">
        </form>



    </div>
    <?php include "footer.php"; ?>