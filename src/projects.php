<html lang="en">
<?php include "config.php"; ?>
<?php
if (isset($_POST['submit'])) {
    $hint = $_POST['search'];
    header("Location: project.php?hint=$hint");
}
if (isset($_POST['submit_C'])) {
    $hint = $_POST['search_C'];
    header("Location: project_by_cat.php?hint=$hint");
}
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="/dist/output.css" rel="stylesheet">
    <link href="soumesh.css" rel="stylesheet">

    <title>home</title>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="project.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"   />
    <style>
        * {
            box-sizing: border-box;
        }

        /* Style the search field */
        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid black;
            float: left;
            width: 35%;
            background: white;
        }

        /* Style the submit button */
        form.example button {
            float: left;
            width: 10%;
            padding: 15px;
            background: red;
            color: white;
            font-size: 17px;
            border: 1px solid black;
            border-left: none;
            /* Prevent double borders */
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        /* Clear floats */
        form.example::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_6XUCrUumpAQMFP", // Enter the Key ID generated from the Dashboard
            "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "easyfunds.com",
            "description": "Investment",
            "image": "https://example.com/your_logo",
            "order_id": "order_L6z22oCHkSsez0", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
            "prefill": {
                "name": "Gaurav Kumar",
                "email": "gaurav.kumar@example.com",
                "contact": "9000090000"
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>






</head>


<body>
    <div>
        <h1 class="text-white text-6xl hover:text-black bg-red-600 text-center">PROJECTS </h1>
    </div>
    <div class="navbar">
        <a href="vansh.php">HOME</a>
        <a href="addProject.php">ADD PROJECTS</a>
        <a href="#news">TOP FUNDED PROJECTS</a>
        <a href="meet_experts.php">MEET EXPERTS</a>
        <a href="#news">MORE INFORMATION</a>
        <a href="">CONTACT US</a>
    </div>
    <div><img src="i3.jpeg" class="my-5 mx-5 rounded-3xl"></div>
    <form class="example" action="" method="post">
        <input type="text" placeholder="Search Project.." name="search">
        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
    </form>
    <form class="example" action="" method="post">
        <input type="text" placeholder="Search Project by Category.." name="search_C">
        <button type="submit" name="submit_C"><i class="fa fa-search"></i></button>
    </form>


    <form action="" method="post" class="py-28'>
        <form class=" example pt-10 px-4">


        <div class="flex-wrap main">
            <?php
            $query = "SELECT * FROM projects";
            $select_posts = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($select_posts)) {
                $project_name = $row['project_name'];
                $project_type = $row['project_type'];
                $project_descript = $row['project_descript'];
                $project_image = $row['project_image'];
                $project_user = $row['project_user'];
                $user_email = $row['user_email'];

            ?>
                <div class=" org max-w-sm rounded overflow-hidden shadow-lg px-16 bg-red-600 text-white mx-5 my-3">
                    <?php echo  "<img src=" . $project_image . ' class="my-3 rounded" width=100px height="100px">'; ?>
                    <div class="font-bold text-xl mb-2"><?php echo "{$project_name}"; ?></div>
                    <div class="px-6 py-4">
                        <p class="text-w text-base">
                            <?php echo "{$project_descript}"; ?>
                        </p>
                    </div>
                    <div class="font-bold text-xl mb-2"><?php echo "{$project_user}"; ?></div>
                    <div class="font-bold text-xl mb-2"><?php echo "{$user_email}"; ?></div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-white hover:bg-slate-400 hover:text-black text-slate-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><button id="rzp-button1">Invest</button>
                        </span>

                        <span class="inline-block bg-white hover:bg-slate-400 hover:text-black text-slate-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="proj_det.php?p_id=<?php echo $row['project_id']; ?>">Detail</a></span>
                    </div>
                </div>

            <?php
            } ?>
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
                                        <a href="topInvestors.php" text-white">TOP INVESTORS</a>
                                    </p>
                                    <p>
                                        <a href="topFundedProjects.php" class="text-white">TOP FUNDED PROJECTS</a>
                                    </p>
                                    <p>
                                        <a href="meet_experts.php" class="text-white">MEET EXPERTS</a>
                                    </p>
                                    <p>
                                        <a href="contactus.php" class="text-white">CONTACT US</a>
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
                                        <a href="profile.php" text-white">Your Account</a>
                                    </p>

                                    <p>
                                        <a href="type.php" text-white">new registration</a>
                                    </p>
                                    <p>
                                        <a href="contactus.php" class="text-white">Help</a>
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
                                        <a class="text-white" href="https://mdbootstrap.com/">easyfunds.com</a>
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
        </div>


</body>

</html>


<?php include "footer.php" ?>