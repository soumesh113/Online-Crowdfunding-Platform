<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_GET['type'])) {
  if ($_GET['type'] == 'enterpreneur') {
    $p_id = $_GET['type'];
  } else {
    $p_id = "";
  }
} else {
  $p_id = "";
}
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="/dist/output.css" rel="stylesheet">
  <link href="./soumesh.css" rel="stylesheet">
  <script src="./vansh1.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="bg-red-600">
    <a class="pl-20 text-white"> customer care: 7906548043 | follow us on social media</a>
    <a href="https://twitter.com/Easyfunds77" class="fa fa-twitter text-white px-4 hover:text-slate-500 cursor-pointer"></a>
    <a href="https://instagram.com/easyfunds77?igshid=YmMyMTA2M2Y=" class="fa fa-instagram text-white px-4 hover:text-slate-500 cursor-pointer"></a>
    <a href="https://www.youtube.com/channel/UCAljPe31iDPTyZTYqjZr01Q" class="fa fa-youtube text-white px-4 hover:text-slate-500 cursor-pointer"></a>
    <a href="login_form.php" class="float-right px-4 text-white hover:text-black">login</a>
    <a class="float-right text-white">|</a>
    <a href="type.php" class="float-right px-4 text-white hover:text-black">register</a>
  </div>
  <div class="pt-10 flex">
    <img src="img-2.png" alt="logo" class="h-24 pl-10">
    <form class="example pt-10 px-4">
      <input type="text" placeholder="Search projects,investors,experts....  " name="search" size="40">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <div class="flex">
      <img src="image1.png" alt="certifications" class="pl-5" width="200">
      <button class="px-10 bg-red-600 text-white hover:text-black"> <a href="projects.php">PROJECTS</a></button>
      <button class="px-10 bg-red-600 text-white hover:text-black"><a href="topInvestors.php">TOP INVESTORS</a></button>
    </div>
  </div>
  <div class="navbar">
    <a href="">HOME</a>
    <?php if ($p_id == 2)
      echo "<a href='addProject.php'>ADD PROJECTS</a>";
    ?>
    <a href="topFundedProjects.php">TOP FUNDED PROJECTS</a>
    <a href="meet_experts.php">MEET EXPERTS</a>
    <a href="#news">MORE INFORMATION</a>
    <a href="">CONTACT US</a>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="i2.jpeg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="i3.jpeg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="i4.jpeg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="i2.jpeg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div>
    <h1>MY FELLOW FRIENDS,</h1>
    <p class=" para ">In the current age, India is one its way to becoming not only the most populated nation in the world, but also having one of the youngest populations in the entire world. However, in terms of technical expertise and availability, our country is still lacking far behind others in similar fields.
    </p>
    <p class=" para ">Still, the future is full of hope as our young population enables many to become pioneers in their areas of interest, not only in India but also in the entire world. The age of entrepreneurs in India has arrived, and over the past few years most of the most successful and useful products are being developed and sold by start-ups that have risen from the ground.</p>
    <p class=" para ">This revolution is what inspired our team at easyfunds.com, to provide an online platform that we hope will fulfill the dreams of thousands of up and coming entrepreneurs, as they obtain their required funds and guidance from investors and renowned industry experts. So, we invite entrepreneurs from all over the nation to display their ideas and pitching skills, and make their dreams into reality</p>
    <p class=" para">An entrepreneur is an individual who creates a new business, bearing most of the risks and enjoying most of the rewards. The process of setting up a business is known as entrepreneurship. The entrepreneur is commonly seen as an innovator, a source of new ideas, goods, services, and business/or procedures.</p>
    <p class="para ">Entrepreneurs play a key role in any economy, using the skills and initiative necessary to anticipate needs and bring good new ideas to market. Entrepreneurship that proves to be successful in taking on the risks of creating a startup is rewarded with profits, fame, and continued growth opportunities. Entrepreneurship that fails results in losses and less prevalence in the markets for those involved.</p>

  </div>
  <div class="container my-5">
    <footer class="text-center text-lg-start text-white" style="background-color: red">
      <div class="container p-4 pb-0">
        <section class="">
          <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                easyfunds.com
              </h6>
              <p>
                easyfunds.com gives power to brillent minds to change ideas into reality
              </p>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Pages</h6>
              <p>
                <a class="text-white">TOP INVESTORS</a>
              </p>
              <p>
                <a href="topFundedProjects.php" class="text-white">TOP FUNDED PROJECTS</a>
              </p>
              <p>
                <a class="text-white">MEET EXPERTS</a>
              </p>
              <p>
                <a class="text-white">CONTACT US</a>
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                Useful links
              </h6>
              <p>
                <a class="text-white">Your Account</a>
              </p>
              <p>
                <a class="text-white">Become an expert</a>
              </p>
              <p>
                <a class="text-white">new registration</a>
              </p>
              <p>
                <a class="text-white">Help</a>
              </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> NIT KURUKSHETRA</p>
              <p><i class="fas fa-envelope mr-3"></i> fundeasy@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 91 9876543210</p>
              <p><i class="fas fa-print mr-3"></i> + 91 7906548043</p>
            </div>
            <!-- Grid column -->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-twitter"></i></a>

              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-google"></i></a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of
</body>

</html>