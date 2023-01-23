<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $email = $_POST['email'];
   $type = $_POST['type'];
   $pass = $_POST['password'];
   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);

   if ($type == 'enterpreneur') {

      $select = " SELECT * FROM enterpreneur WHERE entrp_email = '$email' && entrp_password = '$pass' ";
   } else if ($type == 'investor') {

      $select = " SELECT * FROM investors WHERE inv_email = '$email' && inv_password = '$pass' ";
   } else {

      $select = " SELECT * FROM experts WHERE exp_email = '$email' && exp_password = '$pass' ";
   }

   $result = mysqli_query($conn, $select);


   if (mysqli_num_rows($result) > 0) {


      $row = mysqli_fetch_array($result);

      if ($type == 'admin') {

         $_SESSION['admin_name'] = $row['user_name'];
         header("Location: vansh.php");
      } else if ($type == 'investor') {

         $_SESSION['type'] = 'investor';
         $_SESSION['email'] = $email;
         header("Location: vansh.php?p_id=1");
      } else if ($type == 'enterpreneur') {

         $_SESSION['type'] = 'enterpreneur';
         $_SESSION['email'] = $email;
         header("Location: vansh.php?p_id=2");
      } else {
         $_SESSION['type'] = 'expert';
         $_SESSION['email'] = $email;
         header("Location: vansh.php?p_id=3");
      }
   } else {
      header("Location: vansh.php");
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
   <script>
      function myFunction() {
         alert("you have been registered as a extrepeneur welcome to easyfund.com");
      }
   </script>

</head>

<body>
   <div>
      <h1 class="text-white text-6xl hover:text-black bg-red-600 text-center">LOGIN NOW</h1>
   </div>
   <div class="navbar">
      <a href="vansh.php">HOME</a>
      <a href="#">TOP FUNDED PROJECTS</a>
      <a href="#">MEET EXPERTS</a>
      <a href="#">MORE INFORMATION</a>
      <a href="">CONTACT US</a>
   </div>



   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
            };
         };
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <select name="type">
            <option value="">Select type</option>
            <option value="enterpreneur">Enterpreneur</option>
            <option value="investor">Investor</option>
            <option value="experts">Experts</option>
         </select>
         <input type="password" name="password" required placeholder="enter your password">
         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="type.php">register now</a></p>
         <p> <a href="reset_form.php">forgot password?</a></p>
      </form>

   </div>

</body>

</html>