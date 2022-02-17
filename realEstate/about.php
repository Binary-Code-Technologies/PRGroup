realEstate<?php
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
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/myhome/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:54:21 GMT -->

<head>
    <title>PR Group | Real Estate | About</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="myHOME - real estate template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
<link rel="manifest" href="../site.webmanifest">
  <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
<link rel="manifest" href="../site.webmanifest">
    <link rel="stylesheet" type="text/css"
        href="A.styles%2c%2c_bootstrap-4.1.2%2c%2c_bootstrap.min.css%2bplugins%2c%2c_font-awesome-4.7.0%2c%2c_css%2c%2c_font-awesome.min.css%2bplugins%2c%2c_OwlCarousel2-2.3.4%2c%2c_owl.carousel.css%2bplugins%2c%2c_OwlCarousel2-2.3.4%2c" />
    <link rel="stylesheet" type="text/css"
        href="styles/A.about.css%2babout_responsive.css%2cMcc.-5VOofN5if.css.pagespeed.cf.z7JJhrKuf9.css" />
    <script>(function (w, d) { !function (a, e, t, r, z) { a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = { deferred: [] }; var s = e.getElementsByTagName("title")[0]; s && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.dataLayer = a.dataLayer || [], a.zaraz.track = (e, t) => { for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key] }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => { a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r]) }, a.dataLayer.push({ "zaraz.start": (new Date).getTime() }), a.addEventListener("DOMContentLoaded", (() => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r); z.defer = !0, z.src = "../../cdn-cgi/zaraz/sd0d9.php?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t) })) }(w, d, 0, "script"); })(window, document);</script>
</head>

<body>
    <div class="super_container">
        <div class="super_overlay"></div>

        <?php include 'partials/header.php'; ?>

        <div class="menu text-right">
            <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="menu_log_reg">
                <div class="log_reg d-flex flex-row align-items-center justify-content-end">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
                <nav class="menu_nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="listings.php">Listings</a></li>
                        <li><a href="blog.php">News</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="home">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg"
                data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">About us</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro">
            <div class="container">
                <div class="row row-eq-height">

                    <div class="col-lg-6">
                        <div class="intro_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">the best deals</div>
                                <div class="section_title">
                                    <h1>Who we are</h1>
                                </div>
                            </div>
                            <div class="intro_text">
                                <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate
                                    bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut
                                    tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at.
                                    Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla
                                    lobortis justo, ut tempor leo cursus in.</p>
                            </div>
                            <div class="button intro_button"><a href="#">read more</a></div>
                        </div>
                    </div>

                    <div class="col-lg-6 intro_col">
                        <div class="intro_image">
                            <div class="background_image" style="background-image:url(images/intro.jpg)"></div>
                            <img src="images/intro.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_subtitle">the best deals</div>
                            <div class="section_title">
                                <h1>Services</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row services_row">

                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div
                                class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/service_1.png" alt="">
                                </div>
                                <div class="service_title">
                                    <h3>Consulting</h3>
                                </div>
                            </div>
                            <div class="service_text">
                                <p>Nulla aliquet bibendum sem, non placer risus venenatis at. Prae sent vulputate
                                    bibendum dictum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div
                                class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/service_2.png" alt="">
                                </div>
                                <div class="service_title">
                                    <h3>Real estate sales</h3>
                                </div>
                            </div>
                            <div class="service_text">
                                <p>Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                                    dictum. Cras at vehicula.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div
                                class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/service_3.png" alt="">
                                </div>
                                <div class="service_title">
                                    <h3>Renting</h3>
                                </div>
                            </div>
                            <div class="service_text">
                                <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate
                                    bibendum dictum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div
                                class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/service_4.png" alt="">
                                </div>
                                <div class="service_title">
                                    <h3>Meditation</h3>
                                </div>
                            </div>
                            <div class="service_text">
                                <p>Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                                    dictum. Cras at vehicula.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div
                                class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/service_5.png" alt="">
                                </div>
                                <div class="service_title">
                                    <h3>Evaluation</h3>
                                </div>
                            </div>
                            <div class="service_text">
                                <p>Bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum.
                                    Cras at vehicula.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div
                                class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/service_6.png" alt="">
                                </div>
                                <div class="service_title">
                                    <h3>Price Consulting</h3>
                                </div>
                            </div>
                            <div class="service_text">
                                <p>Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                                    dictum. Cras at vehicula.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="milestones">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-md-6 milestone_col">
                        <div
                            class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/duplex.svg" alt="">
                                </div>
                                <div class="milestone_counter" data-end-value="425">0</div>
                                <div class="milestone_text">homes sold</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 milestone_col">
                        <div
                            class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/prize.svg" alt="">
                                </div>
                                <div class="milestone_counter" data-end-value="18">0</div>
                                <div class="milestone_text">awards</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 milestone_col">
                        <div
                            class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/home.svg" alt="">
                                </div>
                                <div class="milestone_counter" data-end-value="25" data-sign-after="k">0</div>
                                <div class="milestone_text">followers</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 milestone_col">
                        <div
                            class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="images/rent.svg" alt="">
                                </div>
                                <div class="milestone_counter" data-end-value="1265">0</div>
                                <div class="milestone_text">rentals</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="agents">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_subtitle">the best deals</div>
                            <div class="section_title">
                                <h1>Our Realtors</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row agents_row">

                    <div class="col-lg-4 agent_col">
                        <div class="agent">
                            <div class="agent_image"><img src="images/realtor_1.jpg" alt=""></div>
                            <div class="agent_content">
                                <div class="agent_name"><a href="#">Michael Smith</a></div>
                                <div class="agent_title">Buying Agent</div>
                                <div class="agent_list">
                                    <ul>
                                        <li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="d0bdb9b3b8b1b5bc90bda9b8bfbdb5a4b5bda0feb3bfbd">[email&#160;protected]</a>
                                        </li>
                                        <li>+45 27774 5653 267</li>
                                    </ul>
                                </div>
                                <div class="social">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 agent_col">
                        <div class="agent">
                            <div class="agent_image"><img src="images/realtor_2.jpg" alt=""></div>
                            <div class="agent_content">
                                <div class="agent_name"><a href="#">Jane Williams</a></div>
                                <div class="agent_title">Buying Agent</div>
                                <div class="agent_list">
                                    <ul>
                                        <li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="b2dfdbd1dad3d7def2dfcbdadddfd7c6d7dfc29cd1dddf">[email&#160;protected]</a>
                                        </li>
                                        <li>+45 27774 5653 267</li>
                                    </ul>
                                </div>
                                <div class="social">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 agent_col">
                        <div class="agent">
                            <div class="agent_image"><img src="images/realtor_3.jpg" alt=""></div>
                            <div class="agent_content">
                                <div class="agent_name"><a href="#">Carla Brown</a></div>
                                <div class="agent_title">Buying Agent</div>
                                <div class="agent_list">
                                    <ul>
                                        <li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="7d10141e151c18113d1004151210180918100d531e1210">[email&#160;protected]</a>
                                        </li>
                                        <li>+45 27774 5653 267</li>
                                    </ul>
                                </div>
                                <div class="social">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact_row">
                    <div class="col">
                        <div class="button ml-auto mr-auto"><a href="#">contact us</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="styles/bootstrap-4.1.2/popper.js"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script
        src="plugins/greensock%2c_TimelineMax.min.js%2bscrollmagic%2c_ScrollMagic.min.js%2bgreensock%2c_animation.gsap.min.js%2bgreensock%2c_ScrollToPlugin.min.js.pagespeed.jc.L5MY9aES0V.js"></script>
    <script>eval(mod_pagespeed_DvdcV2Hb40);</script>
    <script>eval(mod_pagespeed_8kPkQC$_Hi);</script>
    <script>eval(mod_pagespeed_ln2CihNlUB);</script>
    <script>eval(mod_pagespeed_tuYG4fsJOa);</script>
    <script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
    <script
        src="plugins%2c_easing%2c_easing.js%2bplugins%2c_progressbar%2c_progressbar.min.js%2bplugins%2c_parallax-js-master%2c_parallax.min.js%2bjs%2c_about.js.pagespeed.jc.tjZzVLLSyk.js"></script>
    <script>eval(mod_pagespeed_jGAjaMH7Ma);</script>
    <script>eval(mod_pagespeed_kbBQAFOE25);</script>
    <script>eval(mod_pagespeed_v2VbOu3qeT);</script>
    <script>eval(mod_pagespeed_uYUos0Qc1g);</script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6dc02072bb328a1a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/myhome/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:54:27 GMT -->

</html>