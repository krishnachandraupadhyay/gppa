<?php
include("Admin/connect.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="assets/css/remixicon.css">

    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/dark.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="icon" type="image/png" href="image/LOGO PHOOLPUR AZAMGARH.png">
    <style>
        .logo {
            height: 10vh;
            width: 10vh;
            border-radius: 100%;
        }

        .collegename {
            font-size: 18px;
            color: white;
        }
    </style>
</head>

<body>

    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>
    <div class="top-header-area bg-primary">
        <div class="container">
            <div class="row  align-items-center">
                <img src="image/gpppalog.png" alt="GPA logo" srcset="">
               
            </div>
        </div>
    </div>


    <div class="navbar-area nav-bg-1">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="index.php">
                            <img src="image/LOGO PHULPUR AZAMGARH.jpg" class="main-logo" lt="logo">
                            <img src="assets/images/white-logo.png" class="white-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="faculty.php" class="nav-link">
                                    Faculty
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    About Us
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="diploma-admission.php" class="nav-link">Diploma Admission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="campus-life.php" class="nav-link">Campus Life</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                          Message
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="messagegpp.php" class="nav-link">About Government Private Partnership</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="message.php" class="nav-link">Message from Member</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                            Latest News
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="latest-news.php" class="nav-link">Our Latest News</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="news-details.php" class="nav-link">News Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.php" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                            Facility
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="hostel.php" class="nav-link">Hostel</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="library.php" class="nav-link">Library</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="sports.php" class="nav-link">Sports</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="transport .php" class="nav-link">Transport</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="lab.php" class="nav-link">Labs</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.php" class="nav-link">Terms And Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="courses.php" class="nav-link ">
                                    Courses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Placement Cell
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="placement.php" class="nav-link">Placement Cell</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="placement-detail.php" class="nav-link">Placement Cell Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Events
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="events.php" class="nav-link">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="events-details.php" class="nav-link">Events Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact-us.php" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                        <div class="others-options">
                            <div class="icon">
                                <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="icon">
                            <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
                <div class="modal-body">
                    <a href="index.php">
                    <img src="image/LOGO PHULPUR AZAMGARH.jpg" alt="logo" class="logo">
                    </a>
                    <div class="sidebar-content">
                        <h3>About Us</h3>
                        <p>Government polytechnic Phoolpur Azamgarh is aggremented 62.5% Seat (38 Seat)under Fully
                            Governmented(JEECUP Code-4900)
                            and 37.5 % Seat (22) under PPP category Self Financev Mode(JEECUP Code-4901) of Each
                            Specilization.My heartiest wishes
                            to the students who aspire to join the Government Polytechnic Phulpur Azamgarh,
                            I extend my full support to the Government Polytechnic Phulpur Azamgarh team in taking the
                            vision forward.</p>
                        <div class="sidebar-btn">
                            <a href="contact-us.php" class="default-btn">Let’s Talk</a>
                        </div>
                    </div>
                    <div class="sidebar-contact-info">
                        <h3>Contact Information</h3>
                        <ul class="info-list">
                            <li><i class="ri-phone-fill"></i> <a href="tel:9335645272">9335645272,9415776340</a></li>
                            <li><i class="ri-mail-line"></i><a
                                    href="/cdn-cgi/l/email-protection#0d65686161624d7e6c6378236e6260"><span
                                        class="__cf_email__"
                                        data-cfemail="274f424b4b4867544649520944484a">admission@gpppa.aicceds.org</span></a>
                            </li>
                            <li><i class="ri-map-pin-line"></i> Government Polytechnic Phoolpur Azamgarh</li>
                        </ul>
                    </div>
                    <ul class="sidebar-social-list">
                        <li>
                            <a href="https://www.facebook.com" target="_blank"><i class="flaticon-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com" target="_blank"><i class="flaticon-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                    class="flaticon-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/?lang=en" target="_blank"><i
                                    class="flaticon-instagram"></i></a>
                        </li>
                    </ul>
                    <div class="contact-form">
                        <h3>Ready to Get Started?</h3>
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-3">
                                    <div class="form-group mb-20">
                                        <input type="text" name="name" class="form-control" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Your email address">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control"
                                            placeholder="Your phone number">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" cols="30" rows="6"
                                            placeholder="Write your message..."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <input type="submit" class="default-btn" name="btn" Value="Send Message">
                                    <div class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
if(isset($_POST['btn']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile_no=$_POST['phone_number'];
 $messages=$_POST['message'];
$query="insert into tbl_query(name,email,mobile_no,messages,status,dor)
            Value('$name','$email','$mobile_no','$messages','N',now())";
mysqli_query($conn,$query);
echo"<script>alert('Query is successfully Solve');</script>";
}
?>