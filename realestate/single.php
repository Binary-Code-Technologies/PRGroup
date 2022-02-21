<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/property-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:21:38 GMT -->

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

            <div class="px-0 property-featured-img">
                <div class="container position-relative">
                    <div class="iframe-video-icon"><a class="iframe-trigger far fa-play-circle"
                            href="https://www.youtube.com/watch?v=P6GtCcP5TLA"></a></div>
                </div>
            </div>
            <div class="container mt-5 pt-4">
                <div class="row">
                    <div class="col-lg-8 col-md-12 offset-lg-2">
                        <div class="pl-lg-5">
                            <div class="property-block mb-0">
                                <article class="property-item">
                                    <h2 class="content-title"><a href="#">1511 Ridge Ave, Evanston</a></h2>
                                    <div class="content-price">$8201,00</div><span class="content-meta"><span
                                            class="pr-3"><i class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>|
                                        <span class="px-3"><i class="fas fa-bed pr-3"> </i>3 beds</span>|<span
                                            class="pl-3"><i class="fas fa-bath pr-3"> </i>2 baths </span></span>
                                </article>
                            </div>
                            <p class="mt-5 mb-4">Suspendisse tellus nisl, porta et elementum ac, maximus quis justo.
                                Phasellus sodales tincidunt odio non laoreet. Orci varius natoque penatibus et magnis
                                dis parturient montes, nascetur ridiculus mus. Vestibulum vitae commodo ipsum.
                                Pellentesque ac metus a sapien rutrum interdum at in tellus. Ut vel vulputate justo.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Morbi vitae orci in mi finibus feugiat. Ut aliquet orci felis.</p>
                            <div class="mt-5 js-masonry small-gallery-gutters popup-gallery" data-masonry-options="{ }">
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/1.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/2.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/3.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/4.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/5.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/6.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/7.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/8.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/9.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/10.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/11.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/12.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/13.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/14.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/15.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/16.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/17.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/18.jpg" alt="Image"></div>
                                <div class="w-50 p-2"><img src="assets/images/singleproperty/19.jpg" alt="Image"></div>
                            </div>
                            <h3 class="mt-5">Location</h3>
                            <div class="map-responsive mt-4 mb-lg-8 mb-md-7 mb-5">
                                <iframe id="gmap_canvas" width="100" height="100"
                                    src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
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

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/property-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:22:05 GMT -->

</html>