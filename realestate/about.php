<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/page-about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:19:14 GMT -->

<head>

    <?php
    session_start();
     
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
      header("location:index.php");
    }
    else{
        if($_SESSION['firm']=="consultancy"){
            header("location:../consultancy");
        }
    }
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>PR Group - Architectural Interior Design HTML Template</title>
    <meta name="description" content="A Template for Architectural Interior Design company website.">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/flickity.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/fontawesome-all.min.css" rel="stylesheet">

    <link href="assets/css/magnific-popup.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap">
</head>

<body>

    <?php require 'partial/header.php'?>

    <article class="entry">
        <div class="entry-content">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12"><img src="assets/images/about-us/a1.jpg" alt="about-us"></div>
                </div>
            </div>

            <div class="container">
                <div class="my-lg-8 my-md-7 my-6">
                    <div class="row gx-lg-5">
                        <div class="col-lg-6 mb-lg-0 mb-md-5 mb-5 order-lg-1"><img src="assets/images/about-us/a2.jpg"
                                alt="about-us"></div>
                        <div class="col-lg-6">
                            <div class="pr-lg-9 pr-md-7 pr-6">
                                <h2 class="mb-4">We are Team in New York Who Help You to Find Highest Quality Real
                                    Estate</h2>
                            </div>
                            <div class="mb-4">
                                <p class="mb-4">Maecenas convallis ut arcu eget iaculis. Morbi pulvinar risus sit amet
                                    fringilla pellentesque. Vestibulum bibendum leo neque, sit amet viverra turpis
                                    vulputate eget tristique ullamcorper quis euismod. </p>
                                <p class="mb-4">Curabitur consequat, nibh, dolor ex facilisis lectus, at scelerisque est
                                    est vitae ligula. Morbi est dui, maximus nec ligula sed, aliquet dapibus neque.
                                    Vestibulum quam lacus, tempus non ex sed, vulputate viverra turpis. Duis sem lectus,
                                    bibendum maximus lorem sed, viverra nisi.</p>
                                <blockquote>
                                    <div class="border-left-1 pl-4">
                                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                            inceptos himenaeos. Nullam ac urna eu felis dapibus condimentum sit amet a
                                            augue. Sed non neque elit</p>
                                        <cite class="font-weight-bold text-silver-chalice"> John Doe</cite>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-cornflower-blue">
                <div class="container">
                    <div class="py-lg-8 py-md-7 py-6">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="text-center">
                                    <h1 class="mb-3 text-white">Ready to get started?</h1>
                                    <div class="pt-3">
                                        <p class="px-lg-6 mb-5 text-white">Enim ad minim veniam, quis nostrud
                                            exercitation ullamc laboris nisi ut aliquip ex ea commodo consequat. Donec
                                            ornare orci est, a condimentum elit varius eu.</p>
                                    </div><a class="btn btn-white text-cornflower-blue" href="page-contact.html">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

<?php require "partials/footer.php"; ?>



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/lozad.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/aos.js"></script>

    <script src="assets/js/flickity.pkgd.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/jquery.countdown.js"></script>

    <script src="assets/js/jquery.countTo.js"></script>

    <script src="assets/js/masonry.pkgd.min.js"></script>

    <script src="assets/js/global.js"></script>
</body>

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/page-about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:19:19 GMT -->

</html>