<?php session_start(); ?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>
<?php
// if (isset($_SESSION['admin_name']))
//     include "admin_navigation.php";
// else
//     include "user_navigation.php";
?>

<?php

// @include 'config.php';


if (isset($_POST['add'])) {

    $project_name = $_POST['name'];
    $project_type = $_POST['category'];
    $project_descript = $_POST['descript'];

    $query = " INSERT INTO projects(project_name,project_type,project_descript) VALUES('{$project_name}','$project_type','{$project_descript}') ";

    $result = mysqli_query($conn, $query);
    $prev_Id = mysqli_insert_id($conn);
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

    <div class="form-container">

        <form action="" method="post">
            <h3>Add Project</h3>
            <input type="text" name="name" required placeholder="Project name">
            <select name="category">
                <option value="">Select Category</option>
                <option value="Software based">Software based</option>
                <option value="Pharmcy based">Pharmcy based</option>
                <option value="Daily use">Daily use</option>
                <option value="business related">business related</option>
                <option value="other">other</option>
            </select>
            <input type="text" size="200px" name="descript" required placeholder="Project Description">
            <input type="submit" name="add" value="Add" class="form-btn">
            <p> <a href="vansh.php">Close</a></p>
        </form>

    </div>
    <?php include "footer.php"; ?>