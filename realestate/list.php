<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/page-property-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:21:23 GMT -->

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

            <div class="bg-cornflower-blue">
                <div class="container">
                    <div class="py-lg-8 py-md-7 py-6">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="text-center">
                                    <h1 class="mb-3 text-white mt-n1">Properties</h1>
                                    <div class="pt-3">
                                        <p class="px-lg-6 text-white mb-2">Aecenas metus lacus, viverra vitae urna a,
                                            facilisis faucibus leo. Sed sagittis ipsum id lacus pharetra accumsan
                                            placerat. Nunc facilisis fringilla maximus sagittis. Donec tortor sed dolor
                                            aliquam sodales id ac nisi. Cras semper lectus augue.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-lg-8 my-md-7 my-6">
                <div class="row gx-lg-5 property-block">
                    <div class="col-lg-4">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf1.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">1511 Ridge Ave, Evanston</a></h5>
                            <div class="content-price">$8201,00</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths </span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf2.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">310 S Federal St, Chicago</a></h5>
                            <div class="content-price">$409,900</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf3.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">Modern villa Land , Chicago</a>
                            </h5>
                            <div class="content-price">$357,000</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
                    </div>
                </div>
                <div class="row gx-lg-5 property-block">
                    <div class="col-lg-4">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf4.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">Royal Resort Land , Chicago</a>
                            </h5>
                            <div class="content-price">$10201,00</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths </span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf5.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">946 Stockton, San Francisco</a>
                            </h5>
                            <div class="content-price">$709,900</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-5"></div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf6.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">2405 Folsom, San Francisco</a></h5>
                            <div class="content-price">$457,000</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
                    </div>
                </div>
                <div class="row gx-lg-5 property-block">
                    <div class="col-lg-4">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf7.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">257 N Lake Merced, Chicago</a></h5>
                            <div class="content-price">$8275,00</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths </span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf8.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">83 McAllister St, Chicago</a></h5>
                            <div class="content-price">$652,900</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf9.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">11 W House, Manhattan</a></h5>
                            <div class="content-price">$997,000</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
                    </div>
                </div>
                <div class="row gx-lg-5 property-block">
                    <div class="col-lg-4">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf10.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">5759 Enfield Ave, Encino</a></h5>
                            <div class="content-price">$8256,00</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths </span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf11.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">18411 Hatteras, Tarzana</a></h5>
                            <div class="content-price">$409,900</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><a href="property-single.html"><img
                                        src="assets/images/property/pf12.jpg" alt="property"></a></div>
                            <h5 class="content-title"><a href="property-single.html">8906 Yorktown, Los Angeles</a></h5>
                            <div class="content-price">$357,000</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
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

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/page-property-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:21:38 GMT -->

</html>