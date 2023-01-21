<?php
@include 'config.php';
if (isset($_POST['submit'])) {

   $entrp_name = $_POST['username'];
   $name = $_POST['name'];
   $entrp_email = $_POST['email'];
   $entrp_profile = $_POST['profile'];
   $entrp_pass = $_POST['password'];
   $entrp_cpass = $_POST['cpassword'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $user_name = mysqli_real_escape_string($conn, $_POST['username']);
   $entrp_email = mysqli_real_escape_string($conn, $_POST['email']);
   $entrp_profile = mysqli_real_escape_string($conn, $_POST['profile']);
   $user_pass = mysqli_real_escape_string($conn, $_POST['password']);
   $user_cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);

   $select = " SELECT * FROM enterpreneur WHERE entrp_email = '$entrp_email' && entrp_name = '$entrp_name' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user already exist!';
   } else {

      if ($entrp_pass != $entrp_cpass) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO enterpreneur(entrp_name,name, entrp_email,entrp_detail,entrp_password) VALUES('$entrp_name','$name','$entrp_email','$entrp_profile','$entrp_pass')";
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
         <input type="url" name="profile" required placeholder="enter your linkedln">
         <select name="user_type">
            <option value="enterpreneur">enterpreneur</option>
         </select>
         <input type="password" name="password" required placeholder="enter your password">
         <input type="password" name="cpassword" required placeholder="confirm your password">
         <input type="text" name="user_descript" required placeholder="enter description">
         <input type="submit" name="submit" value="register now" class="form-btn">
         <p>already have an account? <a href="login_form.php">login now</a></p>
      </form>

   </div>
   <?php include "footer.php"; ?>