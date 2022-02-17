<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from template.hasthemes.com/consor/consor/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:46:41 GMT -->
<head>
<?php
session_start();
 
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location:index.php");
}
else{
    if($_SESSION['firm']=="realestate"){
        header("location:../realestate");
    }
}
?>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Consor - Business Consulting Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

  <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
<link rel="manifest" href="../site.webmanifest">
  <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
<link rel="manifest" href="../site.webmanifest">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li>
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="services.php">Services</a></li>
                        <li><a href="services-details.php">Services Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages </a>
                    <ul class="sub-menu">
                        <li><a href="cases.php">Cases</a></li>
                        <li><a href="cases-details.php">Cases Details</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="404-error.php">404 Error</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="blog-details.php">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

        </div>
        <!-- Mobile Menu End -->

    </div>
    <!-- Mobile Menu End -->

    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg);">
        <div class="container">

            <!-- Page Banner Section Start -->
            <div class="page-banner-content">
                <h3 class="title">About Us</h3>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
            <!-- Page Banner Section End -->

        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-02 mt-n10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- About Images Start -->
                    <div class="about-images" data-aos="fade-right" data-aos-delay="200">
                        <div class="image">
                            <img src="assets/images/about.jpg" alt="About">
                        </div>
                        <div class="about-icon">
                            <img src="assets/images/icon/icon-4.png" alt="Icon">
                        </div>
                    </div>
                    <!-- About Images End -->

                </div>
                <div class="col-lg-6">

                    <!-- About Content Start -->
                    <div class="about-content" data-aos="fade-left" data-aos-delay="200">

                        <!-- About Title Start -->
                        <div class="about-title">
                            <h6 class="sub-title">About Our <span>Company</span></h6>
                            <h2 class="main-title"><strong>Fasted improving</strong> your business with consor.</h2>
                        </div>
                        <!-- About Title End -->

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

                        <p>Lorem Ipsum is simply dummy text of the printing and typesettin has been the industry's standard dummy text ever since the 150 printer took a galley of type scrambled.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesettin has been the industry's standard.</p>

                    </div>
                    <!-- About Content End -->

                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Video Section Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Video title Start -->
            <div class="video-title">
                <h2 class="title">You get perfect advice <br> from consor for <span>your business</span> <br> and others plan.</h2>
            </div>
            <!-- Video title End -->

            <!-- video Section Start -->
            <div class="video-wrapper" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/images/video-2.jpg" alt="Video">

                <a class="play video-popup" href="https://www.youtube.com/watch?v=_OXPoubiFF0"><i class="icofont-ui-play"></i></a>
            </div>
            <!-- video Section End -->

        </div>
    </div>
    <!-- Video Section End -->

    <!-- Consultant Section Start -->
    <div class="section section-padding bg-color-01">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape text-center">
                <h5 class="sub-title">Our <span> Consultant</span></h5>
                <h2 class="main-title">Experienced Consultant</h2>
            </div>
            <!-- Section Title End -->

            <!-- Consultant Wrapper Start -->
            <div class="consultant-wrapper consultant-active" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Single Consultant Start -->
                        <div class="single-consultant swiper-slide">
                            <div class="consultant-images">
                                <img src="assets/images/consultant/consultant-1.jpg" alt="Consultant">
                            </div>
                            <div class="consultant-content">
                                <ul class="social">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                                <h3 class="name"><a href="#">Krista Simmons</a></h3>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <!-- Single Consultant End -->

                        <!-- Single Consultant Start -->
                        <div class="single-consultant swiper-slide">
                            <div class="consultant-images">
                                <img src="assets/images/consultant/consultant-2.jpg" alt="Consultant">
                            </div>
                            <div class="consultant-content">
                                <ul class="social">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                                <h3 class="name"><a href="#">Krista Simmons</a></h3>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <!-- Single Consultant End -->

                        <!-- Single Consultant Start -->
                        <div class="single-consultant swiper-slide">
                            <div class="consultant-images">
                                <img src="assets/images/consultant/consultant-3.jpg" alt="Consultant">
                            </div>
                            <div class="consultant-content">
                                <ul class="social">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                                <h3 class="name"><a href="#">Krista Simmons</a></h3>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <!-- Single Consultant End -->

                        <!-- Single Consultant Start -->
                        <div class="single-consultant swiper-slide">
                            <div class="consultant-images">
                                <img src="assets/images/consultant/consultant-1.jpg" alt="Consultant">
                            </div>
                            <div class="consultant-content">
                                <ul class="social">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                                <h3 class="name"><a href="#">Krista Simmons</a></h3>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <!-- Single Consultant End -->

                        <!-- Single Consultant Start -->
                        <div class="single-consultant swiper-slide">
                            <div class="consultant-images">
                                <img src="assets/images/consultant/consultant-2.jpg" alt="Consultant">
                            </div>
                            <div class="consultant-content">
                                <ul class="social">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                                <h3 class="name"><a href="#">Krista Simmons</a></h3>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <!-- Single Consultant End -->

                        <!-- Single Consultant Start -->
                        <div class="single-consultant swiper-slide">
                            <div class="consultant-images">
                                <img src="assets/images/consultant/consultant-3.jpg" alt="Consultant">
                            </div>
                            <div class="consultant-content">
                                <ul class="social">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                                <h3 class="name"><a href="#">Krista Simmons</a></h3>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <!-- Single Consultant End -->

                    </div>
                </div>

                <div class="consultant-btn-pagination">
                    <div class="consultant-btn">
                        <a href="#" class="btn btn-outline-primary">Join With Us <i class="icofont-double-right"></i></a>
                    </div>
                    <div class="consultant-pagination">
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <!-- Consultant Wrapper End -->

        </div>
    </div>
    <!-- Consultant Section End -->

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

    <!-- Call to Action Section Start -->
    <div class="section call-to-action-section-02">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Call to Action Content Start -->
                    <div class="call-to-action-contact-02">
                        <h3 class="title">If you need any advice! <span>Just write a line.</span></h3>
                    </div>
                    <!-- Call to Action Content Start -->

                </div>
                <div class="col-lg-6">

                    <!-- Call to Action btn Start -->
                    <div class="call-to-action-btn-02">
                        <a href="#" class="btn btn-outline-light">Get In Touch <i class="icofont-double-right"></i></a>
                    </div>
                    <!-- Call to Action btn Start -->

                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action Section End -->

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


<!-- Mirrored from template.hasthemes.com/consor/consor/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:46:43 GMT -->
</html>