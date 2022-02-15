<?php 
  session_start();
  if($_SESSION['firm']!='realestate'|| $_SESSION['loggedin']==false){
    header("location:../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/myhome/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:54:36 GMT -->

<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="myHOME - real estate template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="A.styles%2c%2c_bootstrap-4.1.2%2c%2c_bootstrap.min.css%2bplugins%2c%2c_font-awesome-4.7.0%2c%2c_css%2c%2c_font-awesome.min.css%2cMcc.XrACKigGzR.css.pagespeed.cf.mwMGq_rPWL.css" />
    <link rel="stylesheet" type="text/css"
        href="styles/contact.css%2bcontact_responsive.css.pagespeed.cc.8bp3CPWyPa.css" />
    <script>(function (w, d) { !function (a, e, t, r, z) { a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = { deferred: [] }; var s = e.getElementsByTagName("title")[0]; s && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.dataLayer = a.dataLayer || [], a.zaraz.track = (e, t) => { for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key] }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => { a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r]) }, a.dataLayer.push({ "zaraz.start": (new Date).getTime() }), a.addEventListener("DOMContentLoaded", (() => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r); z.defer = !0, z.src = "../../cdn-cgi/zaraz/sd0d9.html?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t) })) }(w, d, 0, "script"); })(window, document);</script>
</head>

<body>
    <div class="super_container">
        <div class="super_overlay"></div>
        <?php include("partials/header.php"); ?>

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
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="listings.html">Listings</a></li>
                        <li><a href="blog.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="home">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg"
                data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">Contact</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_subtitle">the best deals</div>
                            <div class="section_title">
                                <h1>Get in touch</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact_row">

                    <div class="col-lg-4 contact_col">
                        <div class="logo"><a href="#">my<span>home</span></a></div>
                        <div class="contact_text">
                            <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                                dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo
                                cursus in.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 contact_col">
                        <div class="contact_info">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div><img src="images/placeholder_2.svg" alt=""></div>
                                    </div>
                                    <span>Main Str, no 23, New York</span>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div><img src="images/phone-call-2.svg" alt=""></div>
                                    </div>
                                    <span>+546 990221 123</span>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div><img src="images/envelope-2.svg" alt=""></div>
                                    </div>
                                    <span><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="3c54534f4855525b7c5f5352485d5f48125f5351">[email&#160;protected]</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 contact_col">
                        <div class="contact_image d-flex flex-column align-items-center justify-content-center">
                            <img src="images/contact_image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row contact_form_row">
                    <div class="col">
                        <div class="contact_form_container">
                            <form action="#" class="contact_form text-center" id="contact_form">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="text" class="contact_input" placeholder="Your name" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="email" class="contact_input" placeholder="Your e-mail" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="contact_input" placeholder="Subject" required>
                                    </div>
                                </div>
                                <textarea class="contact_textarea contact_input" placeholder="Message"
                                    required></textarea>
                                <button class="contact_button">send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact_map_container">
            <div class="map">
                <div id="google_map" class="google_map">
                    <div class="map_container">
                        <div id="map"></div>
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
        src="plugins%2c_greensock%2c_TimelineMax.min.js%2bplugins%2c_scrollmagic%2c_ScrollMagic.min.js%2bplugins%2c_greensock%2c_animation.gsap.min.js%2bplugins%2c_greensock%2c_ScrollToPlugin.min.js%2bplugins%2c_easing%2c_e"></script>
    <script>eval(mod_pagespeed_DvdcV2Hb40);</script>
    <script>eval(mod_pagespeed_8kPkQC$_Hi);</script>
    <script>eval(mod_pagespeed_ln2CihNlUB);</script>
    <script>eval(mod_pagespeed_tuYG4fsJOa);</script>
    <script>eval(mod_pagespeed_jGAjaMH7Ma);</script>
    <script>eval(mod_pagespeed_kbBQAFOE25);</script>
    <script>eval(mod_pagespeed_v2VbOu3qeT);</script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script>eval(mod_pagespeed_lBqt6wdzY_);</script>

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
        data-cf-beacon='{"rayId":"6dc020790e208a02","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/myhome/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:54:38 GMT -->

</html>