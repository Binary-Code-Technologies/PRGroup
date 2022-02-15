<?php 
  session_start();
  if($_SESSION['firm']!='consultancy' || $_SESSION['loggedin']==false){
    header("location:../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from template.hasthemes.com/consor/consor/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:46:16 GMT -->
<head>
    <?php
session_start();
 
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
  header("location:index.php");
  exit;
}

?>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Consor - Business Consulting Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/icofont.min.css"> -->

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css"> -->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

    <!-- Header Start  -->
    <?php require 'partial/header.php'?>
    <!-- Header End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu">

        <!-- Menu Close Start -->
        <a class="menu-close" href="javascript:void(0)">
            <i class="icofont-close-line"></i>
        </a>
        <!-- Menu Close End -->

        <!-- Mobile Button Start -->
        <div class="mobile-btn">
            <a href="#" class="btn btn-primary btn-hover-secondary">Get A Quote <i class="icofont-double-right"></i></a>
        </div>
        <!-- Mobile Button End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-items">
            <ul class="nav-menu">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li>
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="services.html">Services</a></li>
                        <li><a href="services-details.html">Services Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages </a>
                    <ul class="sub-menu">
                        <li><a href="cases.html">Cases</a></li>
                        <li><a href="cases-details.html">Cases Details</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="404-error.html">404 Error</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </div>
        <!-- Mobile Menu End -->

    </div>
    <!-- Mobile Menu End -->

    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- Slider Section Start -->
    <div class="section slider-section slider-active">

        <div class="slider-shape-01"></div>
        <div class="slider-shape-02">
            <img src="assets/images/slider/shape-1.png" alt="shape">
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01">

                    <!-- Slider Left Start -->
                    <div class="slider-left">

                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <div class="content-wrapper">
                                <h5 class="sub-title">OVER 28+ YEARS OF EXPERIENCE</h5>
                                <h1 class="main-title"> <strong>Consulting</strong> for your future plan</h1>
                                <a class="btn btn-outline-light" href="#">All Solution <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- Slider Content End -->

                    </div>
                    <!-- Slider Left End -->

                    <!-- Slider Right Start -->
                    <div class="slider-right">

                        <!-- Slider Images Start -->
                        <div class="slider-images">
                            <img src="assets/images/slider/slider-1.png" alt="Slider Images">
                        </div>
                        <!-- Slider Images End -->

                    </div>
                    <!-- Slider Right End -->

                </div>
                <!-- Single Slider End -->

                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01">

                    <!-- Slider Left Start -->
                    <div class="slider-left">

                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <div class="content-wrapper">
                                <h5 class="sub-title">OVER 28+ YEARS OF EXPERIENCE</h5>
                                <h1 class="main-title"> <strong>Consulting</strong> for your future plan</h1>
                                <a class="btn btn-outline-light" href="#">All Solution <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- Slider Content End -->

                    </div>
                    <!-- Slider Left End -->

                    <!-- Slider Right Start -->
                    <div class="slider-right">

                        <!-- Slider Images Start -->
                        <div class="slider-images">
                            <img src="assets/images/slider/slider-2.png" alt="Slider Images">
                        </div>
                        <!-- Slider Images End -->

                    </div>
                    <!-- Slider Right End -->

                </div>
                <!-- Single Slider End -->

                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01">

                    <!-- Slider Left Start -->
                    <div class="slider-left">

                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <div class="content-wrapper">
                                <h5 class="sub-title">OVER 28+ YEARS OF EXPERIENCE</h5>
                                <h1 class="main-title"> <strong>Consulting</strong> for your future plan</h1>
                                <a class="btn btn-outline-light" href="#">All Solution <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- Slider Content End -->

                    </div>
                    <!-- Slider Left End -->

                    <!-- Slider Right Start -->
                    <div class="slider-right">

                        <!-- Slider Images Start -->
                        <div class="slider-images">
                            <img src="assets/images/slider/slider-3.png" alt="Slider Images">
                        </div>
                        <!-- Slider Images End -->

                    </div>
                    <!-- Slider Right End -->

                </div>
                <!-- Single Slider End -->
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <!-- Slider Section End -->

    <!-- Service Section Start -->
    <div class="section section-padding service-section">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape text-center">
                <h5 class="sub-title">Consulting <span> Services</span></h5>
                <h2 class="main-title">Consor Services</h2>
            </div>
            <!-- Section Title End -->

            <!-- Services Wrapper Start -->
            <div class="services-wrapper">
                <div class="row gx-10">
                    <div class="col-lg-4 col-md-6">

                        <!-- Services Wrapper Start -->
                        <div class="single-service" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-images">
                                <a href="services-details.html"><img src="assets/images/services/services-1.jpg" alt="Services"></a>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="services-details.html">Human Resources</a></h4>
                                <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                                <a href="services-details.html" class="btn">Details +</a>
                                <div class="shape"></div>
                            </div>
                        </div>
                        <!-- Services Wrapper end -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Services Wrapper Start -->
                        <div class="single-service" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-images">
                                <a href="services-details.html"><img src="assets/images/services/services-2.jpg" alt="Services"></a>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="services-details.html">Business Planning</a></h4>
                                <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                                <a href="services-details.html" class="btn">Details +</a>
                                <div class="shape"></div>
                            </div>
                        </div>
                        <!-- Services Wrapper end -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Services Wrapper Start -->
                        <div class="single-service" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-images">
                                <a href="services-details.html"><img src="assets/images/services/services-3.jpg" alt="Services"></a>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="services-details.html">Insurance Consulting</a></h4>
                                <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                                <a href="services-details.html" class="btn">Details +</a>
                                <div class="shape"></div>
                            </div>
                        </div>
                        <!-- Services Wrapper end -->

                    </div>
                </div>
            </div>
            <!-- Services Wrapper End -->

        </div>
    </div>
    <!-- Service Section End -->

    <!-- Call to Action Section Start -->
    <div class="section section-padding overflow-hidden call-to-action-section bg-color-01">
        <div class="container">

            <!-- Call to Action title Start -->
            <div class="call-to-action-title">
                <h2 class="title">You get perfect advice <br> from consor for <span>your business</span> <br> and others plan.</h2>
            </div>
            <!-- Call to Action title End -->

            <!-- Call to Action Wrapper Start -->
            <div class="call-to-action-wrapper" data-aos="fade-up" data-aos-delay="200">
                <div class="row gx-0">
                    <div class="col-lg-6">

                        <!-- Call to Action Video Start -->
                        <div class="call-to-action-video" style="background-image: url(assets/images/cta.jpg);">
                            <a class="play video-popup" href="https://www.youtube.com/watch?v=_OXPoubiFF0"><i class="icofont-ui-play"></i></a>
                        </div>
                        <!-- Call to Action Video End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- Call to Action Contact Start -->
                        <div class="call-to-action-contact">
                            <img class="cta-icon" src="assets/images/telephone.png" alt="Telephone">

                            <div class="contact-wrapper-02 text-center">
                                <h3 class="title">Contact Us</h3>
                                <p>+88 957 436 97</p>
                            </div>
                        </div>
                        <!-- Call to Action Contact End -->

                    </div>
                </div>
            </div>
            <!-- Call to Action Wrapper End -->

            <!-- Call to Action button Start -->
            <div class="call-to-action-btn text-center">
                <a class="btn btn-primary btn-hover-secondary" href="#">Our Speaker <i class="icofont-double-right"></i></a>
            </div>
            <!-- Call to Action button End -->

        </div>
    </div>
    <!-- Call to Action Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="section section-padding why-choose-section mt-n10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content" data-aos="fade-right" data-aos-delay="200">

                        <!-- Why Choose Title Start -->
                        <div class="why-choose-title">
                            <h6 class="sub-title">Why Choose <span>Us?</span></h6>
                            <h2 class="main-title"> <span>Fasted improving</span> your business with consor.</h2>
                        </div>
                        <!-- Why Choose Title End -->

                        <!-- Why Choose Items Start -->
                        <div class="why-choose-items">

                            <!-- Single Items Start -->
                            <div class="single-item">
                                <div class="item-icon">
                                    <img src="assets/images/icon/icon-1.png" alt="Icon">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><span>3000+</span> Trusted Customer</h4>
                                    <p>Lorem Ipsum is simply dummy text the printing and typesetting industry the industry.</p>
                                </div>
                            </div>
                            <!-- Single Items End -->

                            <!-- Single Items Start -->
                            <div class="single-item">
                                <div class="item-icon">
                                    <img src="assets/images/icon/icon-2.png" alt="Icon">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><span>190+</span> Experienced Speaker</h4>
                                    <p>Lorem Ipsum is simply dummy text the printing and typesetting industry the industry.</p>
                                </div>
                            </div>
                            <!-- Single Items End -->

                            <!-- Single Items Start -->
                            <div class="single-item">
                                <div class="item-icon">
                                    <img src="assets/images/icon/icon-3.png" alt="Icon">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><span>24/7</span> Customer Support</h4>
                                    <p>Lorem Ipsum is simply dummy text the printing and typesetting industry the industry.</p>
                                </div>
                            </div>
                            <!-- Single Items End -->

                        </div>
                        <!-- Why Choose Items End -->

                    </div>
                    <!-- Why Choose Content End -->

                </div>
                <div class="col-lg-6">

                    <!-- Why Choose Content Start -->
                    <div class="why-choose-images" data-aos="fade-left" data-aos-delay="200">
                        <div class="choose-images">
                            <img src="assets/images/why.png" alt="Why Choose">
                        </div>
                        <div class="choose-shape"></div>
                        <img class="choose-arrow" src="assets/images/arrow-1.png" alt="arrow">
                    </div>
                    <!-- Why Choose Content End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Cases Section Start -->
    <div class="section section-padding bg-color-01">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape text-center">
                <h5 class="sub-title">Complete <span> Cases</span></h5>
                <h2 class="main-title">Our Successful Cases</h2>
            </div>
            <!-- Section Title End -->

            <!-- Cases Wrapper Start -->
            <div class="cases-wrapper cases-active" data-aos="fade-up" data-aos-delay="200">

                <img class="arrow-shape" src="assets/images/cases/arrow.png" alt="arrow">

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="single-cases swiper-slide">
                            <img src="assets/images/cases/cases-1.jpg" alt="Cases">

                            <div class="cases-content">
                                <h3 class="title"><a href="cases-details.html">Business Consulting</a></h3>
                                <span class="tags">business / company</span>
                            </div>
                        </div>
                        <div class="single-cases swiper-slide">
                            <img src="assets/images/cases/cases-2.jpg" alt="Cases">

                            <div class="cases-content">
                                <h3 class="title"><a href="cases-details.html">Fiancial Management</a></h3>
                                <span class="tags">business / company</span>
                            </div>
                        </div>
                        <div class="single-cases swiper-slide">
                            <img src="assets/images/cases/cases-3.jpg" alt="Cases">

                            <div class="cases-content">
                                <h3 class="title"><a href="cases-details.html">Business Imvesment</a></h3>
                                <span class="tags">business / company</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Swiper Arrows Start -->
                <div class="swiper-arrows">
                    <!-- Add Arrows -->
                    <div class="swiper-button-prev"><i class="icofont-double-left"></i></div>
                    <div class="swiper-button-next"><i class="icofont-double-right"></i></div>
                </div>
                <!-- Swiper Arrows End -->

            </div>
            <!-- Cases Wrapper End -->

        </div>
    </div>
    <!-- Cases Section End -->

    <!-- Brand Section Start -->
    <div class="section brand-section">
        <div class="container">
            <div class="row gx-0 row-cols-2 row-cols-sm-4 ">
                <div class="col">
                    <div class="single-brand">
                        <div class="brand-logo">
                            <img src="assets/images/brand-logo/brand-1-1.png" alt="Brand">
                            <img class="hover" src="assets/images/brand-logo/brand-2-1.png" alt="Brand">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <div class="brand-logo">
                            <img src="assets/images/brand-logo/brand-1-2.png" alt="Brand">
                            <img class="hover" src="assets/images/brand-logo/brand-2-2.png" alt="Brand">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <div class="brand-logo">
                            <img src="assets/images/brand-logo/brand-1-3.png" alt="Brand">
                            <img class="hover" src="assets/images/brand-logo/brand-2-3.png" alt="Brand">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <div class="brand-logo">
                            <img src="assets/images/brand-logo/brand-1-4.png" alt="Brand">
                            <img class="hover" src="assets/images/brand-logo/brand-2-4.png" alt="Brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section End -->

    <!-- Customer Section Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape text-center">
                <h5 class="sub-title">Happy <span> Customer</span></h5>
                <h2 class="main-title">They are say about us!</h2>
            </div>
            <!-- Section Title End -->

            <div class="customer-wrapper customer-active" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Single Customer Start -->
                        <div class="single-customer swiper-slide">
                            <div class="customer-author">
                                <img src="assets/images/author/author-1.jpg" alt="Author">
                            </div>
                            <div class="customer-content">
                                <p>Lorem Ipsum is simply dummy text printing typesetting industry has the industry standar dummy text ever also the leap into electronic typesetting remaining.</p>
                                <h4 class="name">Mertie Kinney </h4>
                                <span class="designation">UI/UX Designer</span>
                            </div>
                        </div>
                        <!-- Single Customer End -->

                        <!-- Single Customer Start -->
                        <div class="single-customer swiper-slide">
                            <div class="customer-author">
                                <img src="assets/images/author/author-2.jpg" alt="Author">
                            </div>
                            <div class="customer-content">
                                <p>Lorem Ipsum is simply dummy text printing typesetting industry has the industry standar dummy text ever also the leap into electronic typesetting remaining.</p>
                                <h4 class="name">Mertie Kinney </h4>
                                <span class="designation">UI/UX Designer</span>
                            </div>
                        </div>
                        <!-- Single Customer End -->

                        <!-- Single Customer Start -->
                        <div class="single-customer swiper-slide">
                            <div class="customer-author">
                                <img src="assets/images/author/author-3.jpg" alt="Author">
                            </div>
                            <div class="customer-content">
                                <p>Lorem Ipsum is simply dummy text printing typesetting industry has the industry standar dummy text ever also the leap into electronic typesetting remaining.</p>
                                <h4 class="name">Mertie Kinney </h4>
                                <span class="designation">UI/UX Designer</span>
                            </div>
                        </div>
                        <!-- Single Customer End -->

                        <!-- Single Customer Start -->
                        <div class="single-customer swiper-slide">
                            <div class="customer-author">
                                <img src="assets/images/author/author-4.jpg" alt="Author">
                            </div>
                            <div class="customer-content">
                                <p>Lorem Ipsum is simply dummy text printing typesetting industry has the industry standar dummy text ever also the leap into electronic typesetting remaining.</p>
                                <h4 class="name">Mertie Kinney </h4>
                                <span class="designation">UI/UX Designer</span>
                            </div>
                        </div>
                        <!-- Single Customer End -->

                    </div>
                </div>

                <div class="customer-pagination-arrow">
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Swiper Arrows Start -->
                    <div class="swiper-arrows">
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"><i class="icofont-double-left"></i></div>
                        <div class="swiper-button-next"><i class="icofont-double-right"></i></div>
                    </div>
                    <!-- Swiper Arrows End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Customer Section End -->


    <!-- Footer Start -->
    <?php include 'partial/footer.php'; ?>
    <!-- Footer End -->

    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icofont-simple-up"></i>
    </a>
    <!--Back To End-->




    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <!-- <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/validate.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script> -->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <script src="assets/js/plugins.min.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from template.hasthemes.com/consor/consor/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:46:38 GMT -->
</html>