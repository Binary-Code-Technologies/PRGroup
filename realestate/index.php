<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:18:20 GMT -->

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

<?php require 'partial/header.php'; ?>

    <article class="entry">
        <div class="entry-content">

            <div class="seventy-five-percent-bg">
                <div class="pt-lg-6 pb-lg-0 pt-md-6 pb-md-7 pt-5 pb-5">
                    <div class="container mt-2 mb-lg-7">
                        <div class="row">
                            <div class="col-lg-6 mn-7 order-lg-1"><img src="assets/images/home/h1.jpg" alt="home"></div>
                            <div class="col-lg-6 col-md-12 pb-lg-4 my-auto">
                                <div class="mt-lg-0 mt-md-5 mt-4">
                                    <div class="pr-lg-6 pr-md-6">
                                        <h1 class="mt-3 mb-4 text-white">Help You to Find Highest Qualityq Real Estate
                                        </h1>
                                        <div class="pt-2">
                                            <p class="lead mb-4 text-white">Enim ad minim veniam, quis nostrud
                                                exercitation ullamc laboris nisi ut aliquip ex ea commodo consequat.
                                                Donec ornare orci est, a condimentum elit varius eu.</p>
                                        </div><a class="btn btn-white text-cornflower-blue mt-4"
                                            href="page-about-us.html">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-lg-8 pb-lg-5 pt-md-6 pb-md-5 pt-5 pb-4">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="pr-lg-5">
                            <h1>We Provide Expert Insight to make buying a Home smart.</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-2">
                <div class="row gx-lg-5">
                    <div class="col-lg-4">
                        <div class="bg-athens-gray">
                            <div class="px-4 py-5">
                                <div class="px-2"> <i class="fas fa-shield-alt icon-border bg-cornflower-blue"></i>
                                    <h4 class="mb-3">Easy and Safe</h4>
                                    <p class="mb-0">Aptent taciti sociosqud ad litora torquent per con ubia nos inceptos
                                        himenaeos. Pellentesque eget scelerisque turpis. consequat enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-4 mt-3">
                        <div class="bg-cornflower-blue">
                            <div class="px-4 py-5">
                                <div class="px-2"><i
                                        class="px-3 fas fa-handshake icon-border bg-white text-cornflower-blue"></i>
                                    <h4 class="mb-3 text-white">Easy and Safe</h4>
                                    <p class="mb-0 text-white">Aptent taciti sociosqud ad litora torquent per con ubia
                                        nos inceptos himenaeos. Pellentesque eget scelerisque turpis. consequat enim.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-4 mt-3">
                        <div class="bg-brilliant-rose">
                            <div class="px-4 py-5">
                                <div class="px-2"><i
                                        class="px-4 fas fa-file-contract icon-border bg-white text-brilliant-rose"></i>
                                    <h4 class="mb-3 text-white">Easy and Safe</h4>
                                    <p class="mb-0 text-white">Aptent taciti sociosqud ad litora torquent per con ubia
                                        nos inceptos himenaeos. Pellentesque eget scelerisque turpis. consequat enim.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-lg-8 mt-md-6 mt-5">
                <div class="row gx-lg-5">
                    <div class="col-lg-6 order-lg-1"><img src="assets/images/home/h2.jpg" alt="home"></div>
                    <div class="col-lg-6 col-md-12 pb-lg-4 my-auto">
                        <div class="mt-lg-0 mt-md-5 mt-3">
                            <div class="pr-lg-9 pr-md-7 pr-4">
                                <h1 class="mt-3 mb-4">Buying and Selling All in One Place</h1>
                                <p class="mb-lg-5 mb-md-4 mb-4">Curabitur metus risus, mollis sollicitudin vulputate
                                    volutpat risus. Etiam in sem ac nulla eleifend volutpat. Morbi nec posuere orci.
                                    Suspendisse enim velit, venenatis quis arcu sed, convallis euismod risus.</p><a
                                    class="btn btn-cornflower-blue" href="page-contact.html">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-lg-7 mb-lg-5 mt-md-6 mb-md-4 mt-5 mb-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="mb-4">Featured Properties</h1>
                        <div class="pr-6">
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
                                Aenean accumsan lectus magna</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row gx-lg-5 property-block">
                    <div class="col-lg-4">
                        <article class="property-item">
                            <div class="content-image"><img src="assets/images/property/pf1.jpg" alt="property"></div>
                            <h5 class="content-title"><a href="#">1511 Ridge Ave, Evanston</a></h5>
                            <div class="content-price">$8201,00</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths </span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><img src="assets/images/property/pf2.jpg" alt="property"></div>
                            <h5 class="content-title"><a href="#">310 S Federal St, Chicago</a></h5>
                            <div class="content-price">$409,900</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5 mt-5">
                        <article class="property-item">
                            <div class="content-image"><img src="assets/images/property/pf3.jpg" alt="property"></div>
                            <h5 class="content-title"><a href="#">Modern villa Land , Chicago</a></h5>
                            <div class="content-price">$357,000</div><span class="content-meta"><span class="pr-3"><i
                                        class="fas fa-ruler-combined pr-3"> </i>300 sq ft</span>| <span class="px-3"><i
                                        class="fas fa-bed pr-3"> </i>3 beds</span>|<span class="pl-3"><i
                                        class="fas fa-bath pr-3"> </i>2 baths</span></span>
                        </article>
                    </div>
                </div>
            </div>
            <div class="container text-center"><a class="btn btn-athens-gray text-ebonny-clay"
                    href="page-property-list.html">Find more property</a></div>

            <div class="bg-athens-gray mt-lg-8 mt-md-7 mt-6">
                <div class="py-lg-8 py-md-6 py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="mb-4">Meet Our Agents</h1>
                                <div class="pr-6">
                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                        Curae. Aenean accumsan lectus magna</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-lg-5 mt-md-4 mt-4">
                        <div class="row gx-lg-5 gy-5">
                            <div class="col-lg-4 mt-lg-5">
                                <div class="member-image"><img src="assets/images/team/t1.jpg" alt="team"></div>
                                <div class="member-content">
                                    <div class="member-text">
                                        <h5 class="member-name">Hester Taylor</h5>
                                        <div class="member-tag"><span class="member-role">Agent</span></div>
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
                            <div class="col-lg-4 mt-lg-4 mt-lg-5 mt-md-6 mt-5">
                                <div class="member-image"><img src="assets/images/team/t2.jpg" alt="team"></div>
                                <div class="member-content">
                                    <div class="member-text">
                                        <h5 class="member-name">Henry Grantham</h5>
                                        <div class="member-tag"><span class="member-role">Agent</span></div>
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
                            <div class="col-lg-4 mt-lg-4 mt-lg-5 mt-md-6 mt-5">
                                <div class="member-image"><img src="assets/images/team/t3.jpg" alt="team"></div>
                                <div class="member-content">
                                    <div class="member-text">
                                        <h5 class="member-name">Reda McClain</h5>
                                        <div class="member-tag"><span class="member-role">Agent</span></div>
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
                    <div class="container text-center mt-5"><a class="btn btn-white text-ebonny-clay"
                            href="page-agents.html">View Members</a></div>
                </div>
            </div>

            <div class="container my-lg-9 my-md-7 my-5">
                <div class="row gx-lg-0">
                    <div class="col-lg-6"><img src="assets/images/home/h3.jpg" alt="member"></div>
                    <div class="col-lg-6 mn-6 bg-livender my-auto">
                        <div class="py-lg-6 px-lg-6 py-md-6 px-md-5 py-5 px-4"><i
                                class="mb-4 h2 display-5 fas fa-quote-left text-cornflower-blue"></i>
                            <p class="paragraph-extend mb-lg-5 mb-md-4 mb-3">We are so happy to have found PR Group and do
                                not know how we could have made it through buying process without them.</p>
                            <h5>Daniel J. Carr</h5>
                            <p class="mb-0">Professional Content creator</p>
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


<?php require "partial/footer.php"; ?>


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

<!-- Mirrored from www.energeticthemes.com/templates/PR Group/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 19:18:38 GMT -->

</html>