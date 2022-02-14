<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/myhome/listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:54:27 GMT -->

<head>
    <title>Listings</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="myHOME - real estate template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="A.styles%2c%2c_bootstrap-4.1.2%2c%2c_bootstrap.min.css%2bplugins%2c%2c_font-awesome-4.7.0%2c%2c_css%2c%2c_font-awesome.min.css%2bplugins%2c%2c_OwlCarousel2-2.3.4%2c%2c_owl.carousel.css%2bplugins%2c%2c_OwlCarousel2-2.3.4%2c" />
    <link rel="stylesheet" type="text/css"
        href="styles/listings.css%2blistings_responsive.css.pagespeed.cc.27f4KDLAV1.css" />
    <script>(function (w, d) { !function (a, e, t, r, z) { a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = { deferred: [] }; var s = e.getElementsByTagName("title")[0]; s && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.dataLayer = a.dataLayer || [], a.zaraz.track = (e, t) => { for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key] }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => { a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r]) }, a.dataLayer.push({ "zaraz.start": (new Date).getTime() }), a.addEventListener("DOMContentLoaded", (() => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r); z.defer = !0, z.src = "../../cdn-cgi/zaraz/sd0d9.html?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t) })) }(w, d, 0, "script"); })(window, document);</script>
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
                            <div class="extra_search_buttons d-flex flex-row align-items-start justify-content-start">
                                <div class="extra_search_button search_button_1"><a href="#">Detailed Search</a></div>
                                <div class="extra_search_button search_button_2"><a href="#">Show Map</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="listings">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="sorting d-flex flex-md-row flex-column align-items-start justify-content-start">

                            <div class="listing_tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li><a href="#">2 beds<span>x</span></a></li>
                                    <li><a href="#">2 baths<span>x</span></a></li>
                                    <li><a href="#">garage<span>x</span></a></li>
                                    <li><a href="#">swimming pool<span>x</span></a></li>
                                    <li><a href="#">patio<span>x</span></a></li>
                                    <li><a href="#">heated floors<span>x</span></a></li>
                                    <li><a href="#">garden<span>x</span></a></li>
                                </ul>
                            </div>

                            <div class="sorting_container">
                                <div class="sort">
                                    <span>Sort By</span>
                                    <ul>
                                        <li class="sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>
                                            Default</li>
                                        <li class="sorting_button" data-isotope-option='{ "sortBy": "price" }'>Price
                                        </li>
                                        <li class="sorting_button" data-isotope-option='{ "sortBy": "area" }'>Area</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="listings_container">

                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="images/xlisting_1.jpg.pagespeed.ic.ToWZJDbbgp.jpg" alt="">
                                        </div>
                                        <div
                                            class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="listings.html">house</a></div>
                                            <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
                                        </div>
                                        <div class="tag_price listing_price">$ 217 346</div>
                                    </div>
                                    <div class="listing_content">
                                        <div
                                            class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li
                                                    class="property_area d-flex flex-row align-items-center justify-content-start">
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

                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="images/xlisting_2.jpg.pagespeed.ic.4D9aIbu5st.jpg" alt="">
                                        </div>
                                        <div
                                            class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="listings.html">house</a></div>
                                            <div class="tag tag_rent"><a href="listings.html">for rent</a></div>
                                        </div>
                                        <div class="tag_price listing_price">$ 515 957</div>
                                    </div>
                                    <div class="listing_content">
                                        <div
                                            class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <a href="single.html">4812 Haul Road Saint Paul, MN 55102</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li
                                                    class="property_area d-flex flex-row align-items-center justify-content-start">
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

                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="images/xlisting_3.jpg.pagespeed.ic.SGlkK8C6Go.jpg" alt="">
                                        </div>
                                        <div
                                            class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="listings.html">house</a></div>
                                            <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
                                        </div>
                                        <div class="tag_price listing_price">$ 375 255</div>
                                    </div>
                                    <div class="listing_content">
                                        <div
                                            class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <a href="single.html">4067 Wolf Pen Road Mountain View, CA 94041</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li
                                                    class="property_area d-flex flex-row align-items-center justify-content-start">
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

                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="images/listing_4.jpg" alt="">
                                        </div>
                                        <div
                                            class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="listings.html">house</a></div>
                                            <div class="tag tag_rent"><a href="listings.html">for rent</a></div>
                                        </div>
                                        <div class="tag_price listing_price">$ 122 350</div>
                                    </div>
                                    <div class="listing_content">
                                        <div
                                            class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li
                                                    class="property_area d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_2.png.pagespeed.ic.ugq4efdEbH.png" alt="">
                                                    <span>1750 sq ft</span>
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

                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="images/listing_5.jpg" alt="">
                                        </div>
                                        <div
                                            class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="listings.html">house</a></div>
                                            <div class="tag tag_rent"><a href="listings.html">for rent</a></div>
                                        </div>
                                        <div class="tag_price listing_price">$ 59 251</div>
                                    </div>
                                    <div class="listing_content">
                                        <div
                                            class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li
                                                    class="property_area d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_2.png.pagespeed.ic.ugq4efdEbH.png" alt="">
                                                    <span>750 sq ft</span>
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

                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="images/listing_6.jpg" alt="">
                                        </div>
                                        <div
                                            class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="listings.html">house</a></div>
                                            <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
                                        </div>
                                        <div class="tag_price listing_price">$ 715 114</div>
                                    </div>
                                    <div class="listing_content">
                                        <div
                                            class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li
                                                    class="property_area d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_2.png.pagespeed.ic.ugq4efdEbH.png" alt="">
                                                    <span>2780 sq ft</span>
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

                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="images/listing_7.jpg" alt="">
                                        </div>
                                        <div
                                            class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="listings.html">house</a></div>
                                            <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
                                        </div>
                                        <div class="tag_price listing_price">$ 325 520</div>
                                    </div>
                                    <div class="listing_content">
                                        <div
                                            class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li
                                                    class="property_area d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_2.png.pagespeed.ic.ugq4efdEbH.png" alt="">
                                                    <span>1325 sq ft</span>
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

                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="images/listing_8.jpg" alt="">
                                        </div>
                                        <div
                                            class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="listings.html">house</a></div>
                                            <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
                                        </div>
                                        <div class="tag_price listing_price">$ 154 487</div>
                                    </div>
                                    <div class="listing_content">
                                        <div
                                            class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li
                                                    class="property_area d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_2.png.pagespeed.ic.ugq4efdEbH.png" alt="">
                                                    <span>950 sq ft</span>
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

                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="images/listing_9.jpg" alt="">
                                        </div>
                                        <div
                                            class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="listings.html">house</a></div>
                                            <div class="tag tag_rent"><a href="listings.html">for rent</a></div>
                                        </div>
                                        <div class="tag_price listing_price">$ 95 085</div>
                                    </div>
                                    <div class="listing_content">
                                        <div
                                            class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/xicon_1.png.pagespeed.ic.QA6TsfCPEY.png" alt="">
                                            <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul
                                                class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li
                                                    class="property_area d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/xicon_2.png.pagespeed.ic.ugq4efdEbH.png" alt="">
                                                    <span>690 sq ft</span>
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
                        <div class="load_more">
                            <div class="button ml-auto mr-auto"><a href="#">load more</a></div>
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
        src="plugins%2c_easing%2c_easing.js%2bplugins%2c_progressbar%2c_progressbar.min.js%2bplugins%2c_parallax-js-master%2c_parallax.min.js%2bplugins%2c_Isotope%2c_isotope.pkgd.min.js%2bjs%2c_listings.js.pagespeed.jc.s6"></script>
    <script>eval(mod_pagespeed_jGAjaMH7Ma);</script>
    <script>eval(mod_pagespeed_kbBQAFOE25);</script>
    <script>eval(mod_pagespeed_v2VbOu3qeT);</script>
    <script>eval(mod_pagespeed_TeWcullUsp);</script>
    <script>eval(mod_pagespeed_kHWyEETFXY);</script>

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
        data-cf-beacon='{"rayId":"6dc02074ce498a02","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/myhome/listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:54:30 GMT -->

</html>