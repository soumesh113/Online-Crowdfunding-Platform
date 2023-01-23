<?php include "config.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link href="./soumesh.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>


</head>


<body>
    <div class="bg-red-600">
        <a class="pl-20 text-white"> customer care: 7906548043 | follow us on social media</a>
        <a href="#" class="fa fa-facebook text-white px-4 hover:text-slate-500 cursor-pointer"></a>
        <a href="#" class="fa fa-twitter text-white px-4 hover:text-slate-500 cursor-pointer"></a>
        <a href="#" class="fa fa-instagram text-white px-4 hover:text-slate-500 cursor-pointer"></a>
        <a href="#" class="fa fa-youtube text-white px-4 hover:text-slate-500 cursor-pointer"></a>
    </div>
    <div class="navbar">
        <a href="vansh.php">HOME</a>
        <a href="topfundedprojects.php">TOP FUNDED PROJECTS</a>
        <a href="meet_experts.php">MEET EXPERTS</a>
        <a href="moreinfo.php">MORE INFORMATION</a>
        <a href="contactus.php">CONTACT US</a>
    </div>
    <?php
    if (isset($_SESSION['type'])) {
        $type = $_SESSION['type'];
        $email = $_SESSION['email'];
        if ($type == 'investor') {
            $query = "SELECT * FROM investors WHERE inv_email = '$email'";
            $run = mysqli_query($conn, $query);
        } else if ($type == 'expert') {
            $query = "SELECT * FROM experts WHERE exp_email='$email'";
            $run = mysqli_query($conn, $query);
        } else {
            $query = "SELECT * FROM enterpreneur WHERE entrp_email='$email'";
            $run = mysqli_query($conn, $query);
        }
        while ($row = mysqli_fetch_array($run)) {
            if ($type == 'investor') {
                $user_name = $row['inv_name'];
            } else if ($type = 'experts') {
                $user_name = $row['exp_name'];
            } else {
                $user_name = $row['entrp_name'];
            }
            $name = $row['name'];
        }
    ?>
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-red-600 my-10 text-white ml-48 ">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2"><?php echo "$user_name"; ?></div>
                <div class="font-bold text-xl mb-2"><?php echo "$name"; ?></div>
                <div class="font-bold text-xl mb-2"><?php echo "$email"; ?></div>
                <p class="text-white text-base">
                    Funding is the act of providing resources to finance a need, program, or project. While this is usually in the form of money, it can also take the form of effort or time from an organization or company.
                </p>
            </div>

        </div>
    <?php
    } else {
        header("Location: vansh.php");
    }
    if ($type == 'enterpreneur') {
    ?>
        <div class="navbar">
            <a href="">MY PROJECTS</a>
        </div>
    <?php
    }
    ?>
</body>

</html>