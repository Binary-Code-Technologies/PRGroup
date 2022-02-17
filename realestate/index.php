<!DOCTYPE html>
<html lang="en">
  
<head>
  <title>PR Group | Real Estate</title>
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
  <meta name="description" content="PR Group | Real Estate">
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
    href=" A.styles%2c%2c_bootstrap-4.1.2%2c%2c_bootstrap.min.css%2bplugins%2c%2c_font-awesome-4.7.0%2c%2c_css%2c%2c_font-awesome.min.css%2bplugins%2c%2c_OwlCarousel2-2.3.4%2c%2c_owl.carousel.css%2bplugins%2c%2c_OwlCarousel2-2.3.4%2c" />
  <link rel="stylesheet" type="text/css"
    href="styles/A.main_styles.css%2bresponsive.css%2cMcc.ltR0vo7B4j.css.pagespeed.cf.EnuqxFQ8zV.css" />
  <script>(function (w, d) { !function (a, e, t, r, z) { a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = { deferred: [] }; var s = e.getElementsByTagName("title")[0]; s && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.dataLayer = a.dataLayer || [], a.zaraz.track = (e, t) => { for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key] }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => { a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r]) }, a.dataLayer.push({ "zaraz.start": (new Date).getTime() }), a.addEventListener("DOMContentLoaded", (() => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r); z.defer = !0, z.src = "../../cdn-cgi/zaraz/sd0d9.php?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t) })) }(w, d, 0, "script"); })(window, document);</script>
</head>

<body>
  <div class="super_container">
    <div class="super_overlay"></div>
    <?php include 'partials/header.php'; ?>
    <div class="home">
      
      <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

          <div class="slide">
            <div class="background_image" style="background-image:url(images/index.jpg)"></div>
            <div class="home_container">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="home_content">
                      <div class="home_title">
                        <h1>1243 Main Avenue Left Town</h1>
                      </div>
                      <div class="home_price_tag">$ 482 900</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="background_image" style="background-image:url(images/index.jpg)"></div>
            <div class="home_container">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="home_content">
                      <div class="home_title">
                        <h1>1243 Main Avenue Left Town</h1>
                      </div>
                      <div class="home_price_tag">$ 482 900</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="background_image" style="background-image:url(images/index.jpg)"></div>
            <div class="home_container">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="home_content">
                      <div class="home_title">
                        <h1>1243 Main Avenue Left Town</h1>
                      </div>
                      <div class="home_price_tag">$ 482 900</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
      </div>
    </div>

    <div class="featured">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title_container text-center">
              <div class="section_subtitle">the best deals</div>
              <div class="section_title">
                <h1>Featured Properties</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row featured_row">

          <div class="col-lg-4">
            <div class="listing">
              <div class="listing_image">
                <div class="listing_image_container">
                  <img src="images/xlisting_1.jpg.pagespeed.ic.ToWZJDbbgp.jpg" alt="">
                </div>
                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                  <div class="tag tag_house"><a href="listings.php">house</a></div>
                  <div class="tag tag_sale"><a href="listings.php">for sale</a></div>
                </div>
                <div class="tag_price listing_price">$ 217 346</div>
              </div>
              <div class="listing_content">
                <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                  <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                  <a href="single.php">280 Doe Meadow Drive Landover, MD 20785</a>
                </div>
                <div class="listing_info">
                  <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                    <li class="property_area d-flex flex-row align-items-center justify-content-start">
                      <img src="images/xicon_2.png.pagespeed.ic.ugq4efdEbH.png" alt="">
                      <span>2500 sq ft</span>
                    </li>
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

          <div class="col-lg-4">
            <div class="listing">
              <div class="listing_image">
                <div class="listing_image_container">
                  <img src="images/xlisting_2.jpg.pagespeed.ic.4D9aIbu5st.jpg" alt="">
                </div>
                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                  <div class="tag tag_house"><a href="listings.php">house</a></div>
                  <div class="tag tag_rent"><a href="listings.php">for rent</a></div>
                </div>
                <div class="tag_price listing_price">$ 515 957</div>
              </div>
              <div class="listing_content">
                <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                  <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                  <a href="single.php">4812 Haul Road Saint Paul, MN 55102</a>
                </div>
                <div class="listing_info">
                  <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                    <li class="property_area d-flex flex-row align-items-center justify-content-start">
                      <img src="images/xicon_2.png.pagespeed.ic.ugq4efdEbH.png" alt="">
                      <span>1234 sq ft</span>
                    </li>
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

          <div class="col-lg-4">
            <div class="listing">
              <div class="listing_image">
                <div class="listing_image_container">
                  <img src="images/xlisting_3.jpg.pagespeed.ic.SGlkK8C6Go.jpg" alt="">
                </div>
                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                  <div class="tag tag_house"><a href="listings.php">house</a></div>
                  <div class="tag tag_sale"><a href="listings.php">for sale</a></div>
                </div>
                <div class="tag_price listing_price">$ 375 255</div>
              </div>
              <div class="listing_content">
                <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                  <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                  <a href="single.php">4067 Wolf Pen Road Mountain View, CA 94041</a>
                </div>
                <div class="listing_info">
                  <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                    <li class="property_area d-flex flex-row align-items-center justify-content-start">
                      <img src="images/xicon_2.png.pagespeed.ic.ugq4efdEbH.png" alt="">
                      <span>2000 sq ft</span>
                    </li>
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

    <div class="map_section container_reset">
      <div class="container">
        <div class="row row-xl-eq-height">

          <div class="col-xl-7 order-xl-1 order-2">
            <div class="map">
              <div id="google_map" class="google_map">
                <div class="map_container">
                  <div id="map"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-5 order-xl-2 order-1">
            <div class="map_section_content">
              <div class="map_overlay">
                <svg fill="#55407d" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                  <path d="M100,0 a-200,150 0 0 0 -100,100 h100 v-100 z" />
                </svg>
              </div>
              <div class="section_title_container">
                <div class="section_subtitle">the best deals</div>
                <div class="section_title">
                  <h1>Choose a location</h1>
                </div>
              </div>
              <div class="locations_list d-flex flex-column align-items-start justify-content-start">
                <label class="location_contaner" data-lat="25.794923" data-lng="-80.133661">
                  <input type="radio" name="location_radio">
                  <span></span>
                  Downtown Miami
                </label>
                <label class="location_contaner" data-lat="41.872883" data-lng="-87.660943">
                  <input type="radio" name="location_radio">
                  <span></span>
                  Chicago
                </label>
                <label class="location_contaner" data-lat="40.779528" data-lng="-73.960561">
                  <input type="radio" name="location_radio" checked>
                  <span></span>
                  Manhattan - New York
                </label>
                <label class="location_contaner" data-lat="34.082539" data-lng="-118.380126">
                  <input type="radio" name="location_radio">
                  <span></span>
                  West Hollywood
                </label>
                <label class="location_contaner" data-lat="38.910263" data-lng="-77.020496">
                  <input type="radio" name="location_radio">
                  <span></span>
                  Washington
                </label>
                <label class="location_contaner" data-lat="39.296713" data-lng="-76.634918">
                  <input type="radio" name="location_radio">
                  <span></span>
                  Maryland
                </label>
                <label class="location_contaner" data-lat="37.806964" data-lng="-122.411291">
                  <input type="radio" name="location_radio">
                  <span></span>
                  San Francisco
                </label>
                <label class="location_contaner" data-lat="33.627738" data-lng="-117.909449">
                  <input type="radio" name="location_radio">
                  <span></span>
                  Orange County
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hot">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title_container text-center">
              <div class="section_subtitle">the best deals</div>
              <div class="section_title">
                <h1>Today's Hot Deal</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row hot_row row-eq-height">

          <div class="col-lg-6">
            <div class="hot_image">
              <div class="background_image" style="background-image:url(images/hot.jpg)"></div>
              <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                <div class="tag tag_house"><a href="listings.php">house</a></div>
                <div class="tag tag_sale"><a href="listings.php">for sale</a></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hot_content">
              <div class="hot_deal">
                <div class="tag_price">$ 562 346</div>
                <div class="hot_title"><a href="#">Villa for sale</a></div>
                <div class="prop_location d-flex flex-row align-items-start justify-content-start">
                  <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                  <span>280 Doe Meadow Drive Landover, MD 20785</span>
                </div>
                <div class="prop_text">
                  <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum.
                    Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
                </div>
                <div class="prop_agent d-flex flex-row align-items-center justify-content-start">
                  <div class="prop_agent_image"><img src="images/xagent_1.jpg.pagespeed.ic.gCNOaRuBhu.jpg" alt=""></div>
                  <div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
                </div>
              </div>
              <div class="prop_info">
                <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <img src="images/xicon_2_large.png.pagespeed.ic.e-_GZoZn2h.png" alt="">
                    <div>
                      <div>1234</div>
                      <div>sq ft</div>
                    </div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <img src="images/xicon_3_large.png.pagespeed.ic.zjbLwUPwj9.png" alt="">
                    <div>
                      <div>2</div>
                      <div>baths</div>
                    </div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <img src="images/xicon_4_large.png.pagespeed.ic.aHTxfa_mtp.png" alt="">
                    <div>
                      <div>5</div>
                      <div>beds</div>
                    </div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <img src="images/xicon_5_large.png.pagespeed.ic.rL_DSyNlpO.png" alt="">
                    <div>
                      <div>2</div>
                      <div>garages</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials container_reset">
      <div class="container">
        <div class="row row-eq-height">

          <div class="col-xl-6">
            <div class="testimonials_image">
              <div class="background_image" style="background-image:url(images/testimonials.jpg)"></div>
              <div class="testimonials_image_overlay"></div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="testimonials_content">
              <div class="section_title_container">
                <div class="section_subtitle">the best deals</div>
                <div class="section_title">
                  <h1>Clients testimonials</h1>
                </div>
              </div>

              <div class="testimonials_slider_container">
                <div class="owl-carousel owl-theme test_slider">

                  <div class="test_slide">
                    <div class="test_quote">"They helped us find our home"</div>
                    <div class="test_text">
                      <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                        dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.
                        Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                        dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.
                      </p>
                    </div>
                    <div class="test_author"><a href="#">Cristinne Smith</a>, Client</div>
                  </div>

                  <div class="test_slide">
                    <div class="test_quote">"They helped us find our home"</div>
                    <div class="test_text">
                      <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                        dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.
                        Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                        dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.
                      </p>
                    </div>
                    <div class="test_author"><a href="#">Cristinne Smith</a>, Client</div>
                  </div>

                  <div class="test_slide">
                    <div class="test_quote">"They helped us find our home"</div>
                    <div class="test_text">
                      <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                        dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.
                        Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
                        dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.
                      </p>
                    </div>
                    <div class="test_author"><a href="#">Cristinne Smith</a>, Client</div>
                  </div>
                </div>
              </div>
            </div>
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
    src=" plugins%2c_easing%2c_easing.js%2bplugins%2c_progressbar%2c_progressbar.min.js%2bplugins%2c_parallax-js-master%2c_parallax.min.js%2bjs%2c_custom.js.pagespeed.jc.MQVpxMmL9O.js"></script>
  <script>eval(mod_pagespeed_jGAjaMH7Ma);</script>
  <script>eval(mod_pagespeed_kbBQAFOE25);</script>
  <script>eval(mod_pagespeed_v2VbOu3qeT);</script>
  <script
    src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
  <script>eval(mod_pagespeed_I4oe0NbM_O);</script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
    integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
    data-cf-beacon='{"rayId":"6dc01f7a6f708afa","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/myhome/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:54:16 GMT -->

</html>