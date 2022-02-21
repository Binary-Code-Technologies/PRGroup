<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/page-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:19:09 GMT -->

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
                                    <h1 class="mb-3 text-white mt-n1">How We Can Help You</h1>
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

            <div class="bg-light-gray">
                <div class="py-lg-8 py-md-7 py-6">
                    <div class="container mt-2">
                        <div class="row gx-lg-5">
                            <div class="col-lg-4">
                                <div class="bg-white">
                                    <div class="px-4 py-5">
                                        <div class="px-2"> <i
                                                class="fas fa-shield-alt icon-border bg-cornflower-blue"></i>
                                            <h4 class="mb-3">Easy and Safe</h4>
                                            <p class="mb-0"> Aptent taciti sociosqud ad litora torquent per con ubia nos
                                                inceptos himenaeos. Pellentesque eget scelerisque turpis. consequat
                                                enim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-lg-0 mt-md-4 mt-3">
                                <div class="bg-white">
                                    <div class="px-4 py-5">
                                        <div class="px-2"><i
                                                class="px-3 fas fa-handshake icon-border bg-light-gray text-cornflower-blue"></i>
                                            <h4 class="mb-3">Easy and Safe</h4>
                                            <p class="mb-0"> Aptent taciti sociosqud ad litora torquent per con ubia nos
                                                inceptos himenaeos. Pellentesque eget scelerisque turpis. consequat
                                                enim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-lg-0 mt-md-4 mt-3">
                                <div class="bg-white">
                                    <div class="px-4 py-5">
                                        <div class="px-2"><i
                                                class="px-4 fas fa-file-contract icon-border bg-brilliant-rose text-white"></i>
                                            <h4 class="mb-3">Easy and Safe</h4>
                                            <p class="mb-0">Aptent taciti sociosqud ad litora torquent per con ubia nos
                                                inceptos himenaeos. Pellentesque eget scelerisque turpis. consequat
                                                enim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-lg-5 mt-lg-5 mt-md-4 mt-3">
                            <div class="col-lg-4">
                                <div class="bg-white">
                                    <div class="px-4 py-5">
                                        <div class="px-2"> <i
                                                class="fas fa-search-dollar icon-border bg-light-gray text-cornflower-blue"></i>
                                            <h4 class="mb-3">Price Correctly</h4>
                                            <p class="mb-0">Aptent taciti sociosqud ad litora torquent per con ubia nos
                                                inceptos himenaeos. Pellentesque eget scelerisque turpis. consequat
                                                enim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-lg-0 mt-md-4 mt-3">
                                <div class="bg-white">
                                    <div class="px-4 py-5">
                                        <div class="px-2"><i
                                                class="px-3 fas fa-bullhorn icon-border bg-light-gray text-gamboge"></i>
                                            <h4 class="mb-3">Market The Property</h4>
                                            <p class="mb-0">Aptent taciti sociosqud ad litora torquent per con ubia nos
                                                inceptos himenaeos. Pellentesque eget scelerisque turpis. consequat
                                                enim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-lg-0 mt-md-4 mt-3">
                                <div class="bg-white">
                                    <div class="px-4 py-5">
                                        <div class="px-2"><i
                                                class="px-3 fas fa-users icon-border bg-cornflower-blue text-white"></i>
                                            <h4 class="mb-3">The Best Terms</h4>
                                            <p class="mb-0">Aptent taciti sociosqud ad litora torquent per con ubia nos
                                                inceptos himenaeos. Pellentesque eget scelerisque turpis. consequat
                                                enim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-lg-8 mt-md-6 mt-6">
                <div class="row gx-lg-5">
                    <div class="col-lg-6 order-lg-1"><img src="assets/images/home/h2.jpg" alt="service"></div>
                    <div class="col-lg-6 col-md-12 pb-lg-4 my-auto">
                        <div class="mt-lg-0 mt-md-5 mt-4">
                            <div class="pr-lg-9 pr-md-7 pr-3">
                                <h1 class="mt-3 mb-4">Buying and Selling All in One Place</h1>
                                <p class="mb-lg-5 mb-md-4 mb-4">Curabitur metus risus, mollis sollicitudin vulputate
                                    volutpat risus. Etiam in sem ac nulla eleifend volutpat. Morbi nec posuere orci.
                                    Suspendisse enim velit, venenatis quis arcu sed, convallis euismod risus.</p>
                                <ul class="list-unstyled list-inlinetrue">
                                    <li class="list-inline-item mb-4"><i class="fas fa-check pr-3"></i>Phasellus
                                        ullamcorper lectus efficitur lacus elementum, nec vulputate arcu faucibus
                                        tristique urna ut</li>
                                    <li class="list-inline-item mb-4"><i class="fas fa-check pr-3"></i>Phasellus
                                        ullamcorper lectus efficitur lacus elementum, nec vulputate arcu faucibus
                                        tristique urna ut</li>
                                    <li class="list-inline-item"><i class="fas fa-check pr-3"></i>Phasellus ullamcorper
                                        lectus efficitur lacus elementum, nec vulputate arcu faucibus tristique urna ut
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-lg-8 my-md-6 my-5">
                <div class="row gx-lg-5">
                    <div class="col-lg-6"><img src="assets/images/services/s1.jpg" alt="service"></div>
                    <div class="col-lg-6 col-md-12 pb-lg-4 my-auto">
                        <div class="mt-lg-0 mt-md-5 mt-4">
                            <div class="pr-lg-9 pr-md-7 pr-4">
                                <h1 class="mt-3 mb-4">Helping You Buying and Selling Smart</h1>
                                <p class="mb-4">Curabitur metus risus, mollis sollicitudin vulputate volutpat ete risus.
                                    Etiam in sem ac nulla eleifend volutpat. Morbi nectom posuere orci. Suspendisse enim
                                    velit, venenatis quis arcu sed, convallis euismod risus. Sed mollis purus a nisl
                                    consequat pellentesque. Morbi eget porttitor augue.</p>
                                <p>Suspendisse enim velit, venenatis quis arcu sed, convallis euismod risus. Sed mollis
                                    purus a nisl consequat pellentesque. Morbi eget porttitor augue.</p>
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

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/page-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:19:14 GMT -->

</html>