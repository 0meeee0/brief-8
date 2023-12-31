<?php

session_start(); // Start the session
include 'connection.php'; // Include your database connection file
require_once("categoryDAO.php");

$Category = new CategoryDAO();
$Categories = $Category->get_category();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha256-hk1J8HZqEW/p7zC0xjYYr4EhGtYszmJdz21pKBC7ROU=" crossorigin="anonymous" />

    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="img/electric.png">
</head>

<body>
    <!--Write your code here -->

    <div id="upp" class="bg-danger text-light text-center">
        <a href="#" class="navbar-brand py-4">tkhfidat katwsl l 90% !!!!</a>
    </div>
    <?php
  include("nav.php")
  ?>

    <section class="lwl">
        <div class="pt-5 container d-flex gap-5">

            <div id="hah" class="pt-5 "><br>
                <h6>#1 Store in Morocco</h6>
                <h5>Mar7ba bljami3</h5>
                <h1>ElectroNacer</h1>
                <p>Welcome to Electronacer, your destination for cutting-edge electronics! Discover a curated selection
                    of top-tier gadgets and accessories that redefine innovation. Elevate your lifestyle with premium
                    electronic essentials.</p>
                <div>
                    <a class=" btn btn-outline-light rounded-5" href="products.php">Products</a>
                    <!-- <a class=" btn rounded-5" href="">About</a> -->
                </div>
            </div>
            <div>
                <img class="pss" src="img/tlata.png" alt="">
            </div>
        </div>
        <div class="">
            <a class="wt" href="#upp"></a>
        </div>
    </section>

    <!-- <div class="waw text-center">
        <h3>?</h3>
    </div> -->

    <section class="ts">
        <div class="text-center text-light pt-5">
            <h1 class="display-2">What Makes Us Different</h1>
            <p class="opacity-50 w-75 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque officiis
                numquam, ipsam explicabo tenetur dolorem temporibus impedit esse iure corporis asperiores quia. Numquam
                dolore quidem maiores aperiam perspiciatis quos et.</p>
        </div>
        <div class="box pt-3">
            <div class="">
                <div class="row gap-3 justify-content-center text-center">
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 bg-light b1">
                        <div class="title py-3">
                            <h4>S Phones Galore</h4>
                        </div>
                        <div class="text">
                            <p>Discover the latest in mobile technology with our extensive range of smartphones. From
                                cutting-edge features to sleek designs, find the perfect device to keep you connected
                                and in style.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 bg-white b1">
                        <div class="title py-3">
                            <h4>Versatile Laptops</h4>
                        </div>
                        <div class="text">
                            <p>Boost your productivity with our collection of powerful laptops. Whether you're a
                                professional, a student, or a casual user, we have the right laptop to meet your
                                requirements. Explore now and redefine your computing experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 bg-light b1">
                        <div class="title py-3">
                            <h4>Capture Moment</h4>
                        </div>
                        <div class="text">
                            <p>Unleash your creativity with our range of digital cameras and accessories. Whether you're
                                a photography enthusiast or a beginner, we have the perfect tools to help you capture
                                and cherish every moment.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 bg-white b1">
                        <div class="title py-3">
                            <h4>X Gaming Gear</h4>
                        </div>
                        <div class="text">
                            <p>Step into the world of gaming with our extensive collection of gaming consoles,
                                accessories, and peripherals. Elevate your gaming experience with cutting-edge
                                technology</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 bg-light b1">
                        <div class="title py-3">
                            <h4>Powerful Laptops</h4>
                        </div>
                        <div class="text">
                            <p>Boost your productivity with our collection of powerful laptops. Whether you're a
                                professional, a student, or a casual user, we have the right laptop to meet your
                                requirements</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 bg-white b1">
                        <div class="title py-3">
                            <h4>Smart Solutions</h4>
                        </div>
                        <div class="text">
                            <p>Make your home smarter and more efficient with our range of smart home devices. From
                                smart thermostats to security cameras</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="two">
        <div class="text-center text-white py-5">
            <h1>Best Selling Products</h1>
        </div>
        <div class="container d-flex justify-content-around ">
            <img class="sdw" width="400" src="img/bwm.png" alt="bwm">
            <img class="rounded-5 kask" width="400" src="img/kask.jpg" alt="kask">
        </div>
        <!-- <div style="background-color: rgb(255, 255, 255);">-</div>
        <div class="container d-flex justify-content-around py-5">
            <img class="rounded-5 kask" width="400" src="img/kask.jpg" alt="kask">
            <img class="sd" width="400" src="img/bwm.png" alt="bwm">
        </div>
        <div class="container d-flex justify-content-around pt-5">
            <img class="sd" width="400" src="img/bwm.png" alt="bwm">
            <img class="rounded-5 kask" width="400" src="img/kask.jpg" alt="kask">
        </div> -->
    </section>
    <?php
  $query = "SELECT imag_category FROM Categories";
//   $result = mysqli_query($conn, $query);

  ?>

    <section class="three py-5">
        <div class="text-center pb-5">
            <h1 class="display-1">Categories</h1>
        </div>

        <div class="aw d-flex flex-wrap justify-content-around w-100 gap-5 py-5">
             <?php
    //   while ($row = mysqli_fetch_assoc($result)) {
    //     $imagePath = $row['imag_category'];

    //     echo '<img class="opa" width="350" src="img/' . $imagePath . '" alt="oui">';
    //   }
        foreach ($Categories as $Category) {
                        echo '<div class="list-group-item checkbox">
                                <label>
                                    <input type="checkbox" class="common_selector category" value="' . $Category->getCatname() . '">
                                    <img src="img/' . $Category->getImgs() . '" alt="Category Image" style="width: 50px; height: 50px;">
                                    ' . $Category->getCatname() . '
                                </label>
                            </div>';
                            }


      ?> 
        </div>
    </section>


    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            ElectroNacer
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Colaborators</h6>
                        <p>
                            <a class="text-white">Wail</a>
                        </p>
                        <p>
                            <a class="text-white">Mehdi</a>
                        </p>
                        <p>
                            <a class="text-white">Khalid</a>
                        </p>
                        <p>
                            <a class="text-white">Mohmmed</a>
                        </p>
                        <p>
                            <a class="text-white">Hind</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Categories
                        </h6>
                        <p>
                            <a class="text-white">Laptops</a>
                        </p>
                        <p>
                            <a class="text-white">Phones</a>
                        </p>
                        <p>
                            <a class="text-white">Accessories</a>
                        </p>
                        <p>
                            <a class="text-white">shi 7aja akhra zayda</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> Safi, 14 Av. Zerktouni</p>
                        <p><i class="fas fa-envelope mr-3"></i> electronacer@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
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
                            © 2023 Copyright:
                            <a class="text-white" href="https://mdbootstrap.com/">electronacer.com</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">Facebook</a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">Twitter</a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">Instagram</a>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>
    <!-- Footer -->

    <?php include("footer.php"); ?>