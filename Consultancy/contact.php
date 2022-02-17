<?php 
  session_start();
  if($_SESSION['firm']!='Consultancy' || $_SESSION['loggedin']==false){
    header("location:../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from template.hasthemes.com/consor/consor/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:46:49 GMT -->
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
<link rel="manifest" href="../site.webmanifest">    <!-- CSS
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
                <h3 class="title">Contact Us</h3>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
            <!-- Page Banner Section End -->

        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Contact Info Section Start -->
    <div class="section contact-info-section">
        <div class="container-fluid custom-container">

            <!-- Contact Info Wrapper Start -->
            <div class="contact-info-wrapper">
                <div class="row">
                    <div class="col-lg-4">

                        <!-- Single Contact Info Start -->
                        <div class="single-contact-info contact-info-color-01" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info">
                                <div class="info-icon">
                                    <div class="icon-wrapper">
                                        <img src="assets/images/icon/icon-5.png" alt="Icon">
                                    </div>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Phone:</h4>
                                    <div class="line"></div>
                                    <p><a href="tel:00123456789">00 - 123 - 456 - 789</a></p>
                                    <p><a href="tel:00123456789">00 - 123 - 456 - 789</a></p>
                                </div>
                            </div>
                            <p>Lorem Ipsum is simply dummy text typesetting indust printer took agalley of type and scrambled it to make book. It has surveved n ot only five centuries.</p>
                        </div>
                        <!-- Single Contact Info End -->

                    </div>
                    <div class="col-lg-4">

                        <!-- Single Contact Info Start -->
                        <div class="single-contact-info contact-info-color-02" data-aos="fade-up" data-aos-delay="300">
                            <div class="contact-info">
                                <div class="info-icon">
                                    <div class="icon-wrapper">
                                        <img src="assets/images/icon/icon-6.png" alt="Icon">
                                    </div>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email:</h4>
                                    <div class="line"></div>
                                    <p><a href="mailto:emo@example.com">emo@example.com</a></p>
                                    <p><a href="mailto:emo@example.com">emo@example.com</a></p>
                                </div>
                            </div>
                            <p>Lorem Ipsum is simply dummy text typesetting indust printer took agalley of type and scrambled it to make book. It has surveved n ot only five centuries.</p>
                        </div>
                        <!-- Single Contact Info End -->

                    </div>
                    <div class="col-lg-4">

                        <!-- Single Contact Info Start -->
                        <div class="single-contact-info contact-info-color-03" data-aos="fade-up" data-aos-delay="400">
                            <div class="contact-info">
                                <div class="info-icon">
                                    <div class="icon-wrapper">
                                        <img src="assets/images/icon/icon-7.png" alt="Icon">
                                    </div>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Address:</h4>
                                    <div class="line"></div>
                                    <p>01. Your address here.</p>
                                    <p>02. Your address here.</p>
                                </div>
                            </div>
                            <p>Lorem Ipsum is simply dummy text typesetting indust printer took agalley of type and scrambled it to make book. It has surveved n ot only five centuries.</p>
                        </div>
                        <!-- Single Contact Info End -->

                    </div>
                </div>
            </div>
            <!-- Contact Info Wrapper End -->

        </div>
    </div>
    <!-- Contact Info Section End -->

    <!-- Contact Section Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Contact title Start -->
            <div class="contact-title text-center">
                <h2 class="title"><strong>If you need any help!</strong> <br> You can contact now</h2>
            </div>
            <!-- Contact title Start -->

            <!-- Contact Wrapper Start -->
            <div class="contact-wrapper" data-aos="fade-up" data-aos-delay="200">
                <form id="contact-form" action="https://htmlmail.hasthemes.com/humayun/consor-contact.php" method="POST">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <input type="text" name="name" placeholder="First Name" required>
                            </div>
                            <!-- Single Form End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <input type="text" name="lname" placeholder="Last Name" required>
                            </div>
                            <!-- Single Form End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <input type="text" name="phone" placeholder="Phone" required>
                            </div>
                            <!-- Single Form End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <!-- Single Form End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <input type="text" name="website" placeholder="Website" required>
                            </div>
                            <!-- Single Form End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>
                            <!-- Single Form End -->
                        </div>
                        <div class="col-lg-12">
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <textarea name="message" placeholder="Type your comment" required></textarea>
                            </div>
                            <!-- Single Form End -->
                        </div>
                        <p class="form-message"></p>
                        <div class="col-lg-12">
                            <!-- Single Form Start -->
                            <div class="single-form text-center">
                                <button type="submit" class="btn btn-primary btn-hover-secondary">Send Now <i class="icofont-double-right"></i></button>
                            </div>
                            <!-- Single Form End -->
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Wrapper End -->

        </div>
    </div>
    <!-- Contact Section End -->

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
    <?php require 'partial/footer.php'; ?>
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


<!-- Mirrored from template.hasthemes.com/consor/consor/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:46:50 GMT -->
</html>