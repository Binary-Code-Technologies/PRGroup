<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:19:19 GMT -->

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
            <div class="container mb-lg-8 mb-md-7 mb-5">
                <div class="container-fluid p-0">
                    <div class="map-responsive">
                        <iframe id="gmap_canvas" width="100" height="100"
                            src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>

            <div class="container mb-lg-7 mb-md-6 mb-5">
                <div class="ml-lg-10">
                    <div class="div pl-lg-9">
                        <h1>Our Offices</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="ml-lg-10 mr-lg-10">
                    <div class="px-lg-9">
                        <div class="ml-1">
                            <h4 class="mb-5">New York </h4>
                            <div class="border-bottom border-athens-gray">
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <h5 class="text-silver-chalice">Address</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="lead">1st Floor 73 Wallis Street TAMARAMA NSW 2026</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <h5 class="text-silver-chalice">Email</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="lead"><a
                                                href="https://www.energeticthemes.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="b4dad1c3cddbc6dff4ded5d3d3d59ad7dbd9">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <h5 class="text-silver-chalice">Phone</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="lead">+51 853 458 243</p>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-4">
                                        <h5 class="text-silver-chalice">Social</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="ml-2">
                                            <ul class="list-unstyled list-inlinetrue">
                                                <li class="list-inline-item"><a class="pr-2 text-ebony-clay" href="#"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a class="pr-2 text-ebony-clay" href="#"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a class="pr-2 text-ebony-clay" href="#"><i
                                                            class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="ml-lg-10 mr-lg-10">
                    <div class="px-lg-9">
                        <div class="ml-1">
                            <h4 class="mb-5">Amsterdam </h4>
                            <div class="border-bottom border-athens-gray">
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <h5 class="text-silver-chalice">Address</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="lead">3rd Floor 66 Queen Street BROOKVALE NSW 2100</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <h5 class="text-silver-chalice">Email</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="lead"><a
                                                href="https://www.energeticthemes.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="35545846415047515458755f545252541b565a58">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <h5 class="text-silver-chalice">Phone</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="lead">+51 853 458 243</p>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-4">
                                        <h5 class="text-silver-chalice">Social</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="ml-2">
                                            <ul class="list-unstyled list-inlinetrue">
                                                <li class="list-inline-item"><a class="pr-2 text-ebony-clay" href="#"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a class="pr-2 text-ebony-clay" href="#"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a class="pr-2 text-ebony-clay" href="#"><i
                                                            class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 mb-lg-8 mb-md-7 mb-5">
                <div class="ml-lg-10 mr-lg-10">
                    <div class="px-lg-9">
                        <div class="ml-1">
                            <h4 class="mb-5">Chicago </h4>
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <h5 class="text-silver-chalice">Address</h5>
                                </div>
                                <div class="col-lg-4">
                                    <p class="lead">4th Floor 3918 Randall Drive Moanalua, HI 96819</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <h5 class="text-silver-chalice">Email</h5>
                                </div>
                                <div class="col-lg-4">
                                    <p class="lead"><a href="https://www.energeticthemes.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="f6959e9f95979199b69c97919197d895999b">[email&#160;protected]</a>
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <h5 class="text-silver-chalice">Phone</h5>
                                </div>
                                <div class="col-lg-4">
                                    <p class="lead">+51 853 458 243</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <h5 class="text-silver-chalice">Social</h5>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ml-2">
                                        <ul class="list-unstyled list-inlinetrue">
                                            <li class="list-inline-item"><a class="pr-2 text-ebony-clay" href="#"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a class="pr-2 text-ebony-clay" href="#"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a class="pr-2 text-ebony-clay" href="#"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
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

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:19:22 GMT -->

</html>