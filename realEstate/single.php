<?php 
  session_start();
  if($_SESSION['firm']!='realestate'|| $_SESSION['loggedin']==false){
    header("location:../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/myhome/single.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:54:38 GMT -->

<head>
    <?php
        if($_COOKIE['token']!=="realEstate"){
            header("Location: ../index.php");
        }
    ?>
    <title>PR Group | Real Estate | Listing</title>
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
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/single.css">
    <link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
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
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/listings.jpg"
                data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">Listings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="search">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="search_container">
                            <div class="search_form_container">
                                <form action="#" class="search_form" id="search_form">
                                    <div
                                        class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                        <div
                                            class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                            <input type="text" class="search_input" placeholder="Property type"
                                                required>
                                            <input type="text" class="search_input" placeholder="No rooms" required>
                                            <input type="text" class="search_input" placeholder="Location" required>
                                        </div>
                                        <button class="search_button">submit listing</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="listing_container">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="listing_image"><img src="images/listing.jpg" alt=""></div>

                        <div class="listing_tabs d-flex flex-row align-items-start justify-content-between flex-wrap">

                            <div class="tab">
                                <input type="radio" id="tab_1" name="listing_tabs" checked>
                                <label for="tab_1"></label>
                                <div
                                    class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                    <div class="tab_icon"><img src="images/house.svg" class="svg" alt=""></div>
                                    <span>open house</span>
                                </div>
                            </div>

                            <div class="tab">
                                <input type="radio" id="tab_2" name="listing_tabs">
                                <label for="tab_2"></label>
                                <div
                                    class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                    <div class="tab_icon"><img src="images/houses.svg" class="svg" alt=""></div>
                                    <span>features</span>
                                </div>
                            </div>

                            <div class="tab">
                                <input type="radio" id="tab_3" name="listing_tabs">
                                <label for="tab_3"></label>
                                <div
                                    class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                    <div class="tab_icon"><img src="images/house2.svg" class="svg" alt=""></div>
                                    <span>photos</span>
                                </div>
                            </div>

                            <div class="tab">
                                <input type="radio" id="tab_4" name="listing_tabs">
                                <label for="tab_4"></label>
                                <div
                                    class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                    <div class="tab_icon"><img src="images/camera.svg" class="svg" alt=""></div>
                                    <span>video</span>
                                </div>
                            </div>

                            <div class="tab">
                                <input type="radio" id="tab_5" name="listing_tabs">
                                <label for="tab_5"></label>
                                <div
                                    class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                    <div class="tab_icon"><img src="images/directions.svg" class="svg" alt=""></div>
                                    <span>nearby amenities</span>
                                </div>
                            </div>

                            <div class="tab">
                                <input type="radio" id="tab_6" name="listing_tabs">
                                <label for="tab_6"></label>
                                <div
                                    class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                    <div class="tab_icon"><img src="images/location.svg" class="svg" alt=""></div>
                                    <span>location</span>
                                </div>
                            </div>

                            <div class="tab">
                                <input type="radio" id="tab_7" name="listing_tabs">
                                <label for="tab_7"></label>
                                <div
                                    class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
                                    <div class="tab_icon"><img src="images/contract.svg" class="svg" alt=""></div>
                                    <span>contact</span>
                                </div>
                            </div>
                        </div>

                        <div class="about">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="property_info">
                                        <div class="tag_price listing_price">$ 562 346</div>
                                        <div class="listing_name">
                                            <h1>Villa for sale</h1>
                                        </div>
                                        <div
                                            class="listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <span>280 Doe Meadow Drive Landover, MD 20785</span>
                                        </div>
                                        <div class="listing_list">
                                            <ul>
                                                <li>Property ID: 643682</li>
                                                <li>Posted on: September 22, 2018</li>
                                                <li>Off plan</li>
                                            </ul>
                                        </div>
                                        <div
                                            class="prop_agent d-flex flex-row align-items-center justify-content-start">
                                            <div class="prop_agent_image"><img
                                                    src="images/xagent_1.jpg.pagespeed.ic.gCNOaRuBhu.jpg" alt=""></div>
                                            <div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
                                        </div>
                                        <div class="prop_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_2_large.png.pagespeed.ic.e-_GZoZn2h.png"
                                                        alt="">
                                                    <div>
                                                        <div>1234</div>
                                                        <div>sq ft</div>
                                                    </div>
                                                </li>
                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_3_large.png.pagespeed.ic.zjbLwUPwj9.png"
                                                        alt="">
                                                    <div>
                                                        <div>2</div>
                                                        <div>baths</div>
                                                    </div>
                                                </li>
                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_4_large.png.pagespeed.ic.aHTxfa_mtp.png"
                                                        alt="">
                                                    <div>
                                                        <div>5</div>
                                                        <div>beds</div>
                                                    </div>
                                                </li>
                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_5_large.png.pagespeed.ic.rL_DSyNlpO.png"
                                                        alt="">
                                                    <div>
                                                        <div>2</div>
                                                        <div>garages</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about_text">
                                        <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent
                                            vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla
                                            lobortis justo, ut tempor leo cursus in. Nullam fermentum egestas quam nec
                                            malesuada. Donec non ligula non risus luctus mattis non non diam. Integer
                                            placerat velit at vestibulum vulputate. Donec lacinia vitae libero sed
                                            ultricies. Donec egestas dictum dolor ac sagittis. Nunc facilisis iaculis
                                            est, ut aliquet lorem. Nam imperdiet convallis imperdiet. Nam libero arcu,
                                            porttitor sed sapien nec, commodo accumsan nulla. Praesent pretium neque nec
                                            dictum venenatis. Mauris nec metus vitae massa maximus malesuada. Quisque
                                            cursus leo nec nulla dignissim, ut pulvinar diam porttitor.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="listing_features">
                                        <div class="listing_title">
                                            <h3>Features</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul>
                                                    <li>2 car garages</li>
                                                    <li>3 bedrooms</li>
                                                    <li>heated floors</li>
                                                    <li>contemporary architecture</li>
                                                    <li>swimming pool</li>
                                                    <li>exercise room</li>
                                                    <li>formal entry</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul>
                                                    <li>patio</li>
                                                    <li>close to stores</li>
                                                    <li>ocean view</li>
                                                    <li>spa</li>
                                                    <li>sprinklers</li>
                                                    <li>garden</li>
                                                    <li>alley</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="listing_video">
                                        <div class="listing_title">
                                            <h3>Video</h3>
                                        </div>
                                        <div
                                            class="video_container d-flex flex-column align-items-center justify-content-center">
                                            <img src="images/video.jpg" alt="">
                                            <div class="video_button"><a class="youtube"
                                                    href="https://www.youtube.com/embed/IV3ueyrp5M4?autoplay=1"><i
                                                        class="fa fa-play" aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="google_map_container">
                            <div class="map">
                                <div id="google_map" class="google_map">
                                    <div class="map_container">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-6 footer_col">
                            <div class="footer_about">
                                <div class="footer_logo"><a href="#">my<span>home</span></a></div>
                                <div class="footer_text">
                                    <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate
                                        bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut
                                        tempor leo cursus in.</p>
                                </div>
                                <div class="social">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="footer_submit"><a href="#">submit listing</a></div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 footer_col">
                            <div class="footer_column">
                                <div class="footer_title">Information</div>
                                <div class="footer_info">
                                    <ul>

                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div><img src="images/phone-call.svg" alt=""></div>
                                            <span>+546 990221 123</span>
                                        </li>

                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div><img src="images/placeholder.svg" alt=""></div>
                                            <span>Main Str, no 23, New York</span>
                                        </li>

                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div><img src="images/envelope.svg" alt=""></div>
                                            <span><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="4921263a3d20272e092a26273d282a3d672a2624">[email&#160;protected]</a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer_links usefull_links">
                                    <div class="footer_title">Usefull Links</div>
                                    <ul>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Listings</a></li>
                                        <li><a href="#">Featured Properties</a></li>
                                        <li><a href="#">Contact Agents</a></li>
                                        <li><a href="#">About us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 footer_col">
                            <div class="footer_links">
                                <div class="footer_title">Properties Types</div>
                                <ul>
                                    <li><a href="#">Properties for rent</a></li>
                                    <li><a href="#">Properties for sale</a></li>
                                    <li><a href="#">Commercial</a></li>
                                    <li><a href="#">Homes</a></li>
                                    <li><a href="#">Villas</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Residential</a></li>
                                    <li><a href="#">Appartments</a></li>
                                    <li><a href="#">Off plan</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 footer_col">
                            <div class="footer_title">Featured Property</div>
                            <div class="listing_small">
                                <div class="listing_small_image">
                                    <div>
                                        <img src="images/xlisting_1.jpg.pagespeed.ic.ToWZJDbbgp.jpg" alt="">
                                    </div>
                                    <div
                                        class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <div class="listing_small_tag tag_house"><a href="listings.php">house</a></div>
                                        <div class="listing_small_tag tag_sale"><a href="listings.php">for sale</a>
                                        </div>
                                    </div>
                                    <div class="listing_small_price">$ 562 346</div>
                                </div>
                                <div class="listing_small_content">
                                    <div
                                        class="listing_small_location d-flex flex-row align-items-start justify-content-start">
                                        <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                        <a href="single.php">280 Doe Meadow Drive Landover, MD 20785</a>
                                    </div>
                                    <div class="listing_small_info">
                                        <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                            <li class="d-flex flex-row align-items-center justify-content-start">
                                                <img src="images/xicon_3.png.pagespeed.ic.q6VYeznCjX.png" alt="">
                                                <span>2</span>
                                            </li>
                                            <li class="d-flex flex-row align-items-center justify-content-start">
                                                <img src="images/xicon_4.png.pagespeed.ic.XYqQSLPe79.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li class="d-flex flex-row align-items-center justify-content-start">
                                                <img src="images/xicon_5.png.pagespeed.ic.ZlD8Fj5sc6.png" alt="">
                                                <span>2</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                                <div class="copyright order-md-1 order-2">
                                    Copyright &copy;
                                    <script data-cfasync="false"
                                        src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                    This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                        href="https://colorlib.com/" target="_blank">Colorlib</a>
                                </div>
                                <nav class="footer_nav order-md-2 order-1 ml-md-auto">
                                    <ul
                                        class="d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About us</a></li>
                                        <li><a href="listings.php">Listings</a></li>
                                        <li><a href="blog.php">News</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="styles/bootstrap-4.1.2/popper.js"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="js/single.js"></script>

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
        data-cf-beacon='{"rayId":"6dc020818c3e8a1a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/myhome/single.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:54:42 GMT -->

</html>