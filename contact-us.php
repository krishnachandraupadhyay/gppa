<?php
include("header.php");
?>
<title>Contact Us</title>
<link rel="icon"  type="image/png" href="image/gpppalog.png">
<style>
    .page-banner-area.bg-2{
     background-image:url("image/cm6.jpg");
    }
</style>
    <div class="page-banner-area bg-2">
        <div class="container">
            <div class="page-banner-content">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-us-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contacts-form">
                        <h3>Leave a message</h3>
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Your name</label>
                                        <input type="text" name="name1" id="name" class="form-control" required
                                            data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Your email</label>
                                        <input type="email" name="email1" id="email" class="form-control" required
                                            data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Your phone</label>
                                        <input type="text" name="phone_number1" id="phone_number" required
                                            data-error="Please enter your number" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="msg_subject1" id="msg_subject" class="form-control"
                                            required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your message</label>
                                        <textarea name="message1" class="form-control" id="message" cols="30" rows="8"
                                            required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input name="gridCheck" value="I agree to the terms and privacy policy."
                                            class="form-check-input" type="checkbox" id="gridCheck" required>
                                        <label class="form-check-label" for="gridCheck">
                                            I agree to the <a href="terms-conditions.php">terms</a> and <a
                                                href="privacy-policy.php">privacy policy</a>
                                        </label>
                                        <div class="help-block with-errors gridCheck-error"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <input type="submit" name="send" value="submit" class="btn default-btn" >
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <?php

if (isset($_POST["send"])) {
    $name=$_POST['name1'];
    $email=$_POST['email1'];
    $phone=$_POST['phone_number1'];
    $mess=$_POST['message1'];
    $sub=$_POST['msg_subject1'];
    $query1="insert into tbl_contactus(name,email,mobile,subject,message,status,dor) Values('$name','$email','$phone','$sub','$mess','N',now())";
    mysqli_query($conn,$query1);
    echo "<script>alert('Message is Successfully Added');</script>";
}
?>




                <div class="col-lg-6">
                    <div class="contact-and-address">
                        <h2>Let's Contact Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tem incididunt ut
                            labore et dolore magna aliquat enim minim veniam quis nostr exercitation labore et dolore
                            magna aliquat </p>
                        <div class="contact-and-address-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact-card">
                                        <div class="icon">
                                            <i class="ri-phone-line"></i>
                                        </div>
                                        <h4>Contact</h4>
                                        <p>Mobile: <a href="tel:+919335645272">9335645272,9415776340</a></p>
                                        <p>Mail: <a href="mailto:admission@gpppa.aicceds.org"><span class="__cf_email__"
                                                    data-cfemail="3744565942775253425a565e5b1954585a">admission@gpppa.aicceds.org</span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact-card">
                                        <div class="icon">
                                            <i class="ri-map-pin-line"></i>
                                        </div>
                                        <h4>Address</h4>
                                        <p>Government Polytechnic Phoolpur</p>
                                        <p>Phoolpur, Azamgarh, Uttar Pradesh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-media">
                            <h3>Social Media</h3>
                            <p>It is the some social media where Government polytechnic Atrauliya account are active</p>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com" target="_blank"><i
                                            class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com" target="_blank"><i
                                            class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/?lang=en" target="_blank"><i
                                            class="flaticon-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                            class="flaticon-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
include("footer.php");
?>