<?php 
  session_start();
  if($_SESSION['firm']!='Consultancy' || $_SESSION['loggedin']==false){
    header("location:../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from template.hasthemes.com/consor/consor/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:46:43 GMT -->
<head>
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
                <h3 class="title">Services</h3>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
            <!-- Page Banner Section End -->

        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Service Section Start -->
    <div class="section section-padding-02 mt-n6 service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <!-- Services Wrapper Start -->
                    <div class="single-service" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-images">
                            <a href="services-details.php"><img src="assets/images/services/services-1.jpg" alt="Services"></a>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="services-details.php">Human Resources</a></h4>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                            <a href="services-details.php" class="btn">Details +</a>
                            <div class="shape"></div>
                        </div>
                    </div>
                    <!-- Services Wrapper end -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Services Wrapper Start -->
                    <div class="single-service" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-images">
                            <a href="services-details.php"><img src="assets/images/services/services-2.jpg" alt="Services"></a>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="services-details.php">Business Planning</a></h4>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                            <a href="services-details.php" class="btn">Details +</a>
                            <div class="shape"></div>
                        </div>
                    </div>
                    <!-- Services Wrapper end -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Services Wrapper Start -->
                    <div class="single-service" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-images">
                            <a href="services-details.php"><img src="assets/images/services/services-3.jpg" alt="Services"></a>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="services-details.php">Insurance Consulting</a></h4>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                            <a href="services-details.php" class="btn">Details +</a>
                            <div class="shape"></div>
                        </div>
                    </div>
                    <!-- Services Wrapper end -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Services Wrapper Start -->
                    <div class="single-service" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-images">
                            <a href="services-details.php"><img src="assets/images/services/services-1.jpg" alt="Services"></a>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="services-details.php">Financial Consultancy</a></h4>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                            <a href="services-details.php" class="btn">Details +</a>
                            <div class="shape"></div>
                        </div>
                    </div>
                    <!-- Services Wrapper end -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Services Wrapper Start -->
                    <div class="single-service" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-images">
                            <a href="services-details.php"><img src="assets/images/services/services-2.jpg" alt="Services"></a>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="services-details.php">Organisational</a></h4>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                            <a href="services-details.php" class="btn">Details +</a>
                            <div class="shape"></div>
                        </div>
                    </div>
                    <!-- Services Wrapper end -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Services Wrapper Start -->
                    <div class="single-service" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-images">
                            <a href="services-details.php"><img src="assets/images/services/services-3.jpg" alt="Services"></a>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="services-details.php">Solicitory Consultancy</a></h4>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                            <a href="services-details.php" class="btn">Details +</a>
                            <div class="shape"></div>
                        </div>
                    </div>
                    <!-- Services Wrapper end -->

                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->

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


<!-- Mirrored from template.hasthemes.com/consor/consor/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:46:43 GMT -->
</html>