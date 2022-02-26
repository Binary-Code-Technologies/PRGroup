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