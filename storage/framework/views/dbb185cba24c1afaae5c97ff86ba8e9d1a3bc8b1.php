<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\bootstrap.min.css'); ?>">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\boxicons.min.css'); ?>">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\magnific-popup.css'); ?>">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\owl.carousel.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\owl.theme.default.min.css'); ?>">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\nice-select.css'); ?>">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\style.css'); ?>">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\responsive.css'); ?>">

        <title>Fairfax - Contact Us</title>

        <link rel="icon" type="image/png" href="<?php echo asset('public\assets\img\home-two\banner-icon.png'); ?>">
        <style type="text/css">
            .one-service-area nav .nav-tabs .nav-default{
                flex: 0 0 33.33333333%;
                max-width: 33.33333333%;
            }
            .one-service-area nav .nav-tabs .nav-default.active .service-item i {
                color: #ffffff!important;
            }
            .one-service-area nav .nav-tabs .nav-default.active .service-item span {
                color: #ffffff!important;
            }
            .one-service-area nav .nav-tabs .nav-default.active .service-item{
                background: -webkit-gradient(linear, left top, right top, color-stop(23%, #d42238), color-stop(64%, #1f4495));
                background: linear-gradient(90deg, #d42238 23%, #1f4495 64%);
            }
            .three-contact-area:before{
                background-color:#f1f1f1;
            }
        </style>
    </head>

    <body data-spy="scroll" data-offset="70">

        <!-- Header Top -->
        <div class="one-header-top two-header-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-1">
                        <div class="header-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/fairfaxlending/?ref=bookmarks" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/fairfaxlending/?viewAsMember=true" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="header-partner">
                            <p>We recognize this is a difficult time for many people. Call us to learn more about how we are responding to Covid-19.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-call">
                            <ul>
                                <li>
                                    <span>Call Us:</span>
                                    <a href="tel:1-888-878-1131">1-888-878-1131</a>
                                </li>
                                <li>
                                    <span>Mail Us:</span>
                                    <a href="mailto:info@fairfaxlending.com">info@fairfaxlending.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-light-two sticky-top">
            <a class="navbar-brand" href="<?php echo e(url('home')); ?>">
                <img src="<?php echo asset('public\assets\img\Fairfax_logo.png'); ?>" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('home_purchase')); ?>">Purchase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('home_refinance')); ?>">Refinance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('aboutus')); ?>">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">Resources <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('loan-program')); ?>">Loan Programs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('loan-process')); ?>">Loan Process</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('faq')); ?>">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('blog')); ?>">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('location')); ?>">Location</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('contact')); ?>">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="side-nav">
                <a class="side-nav-right" href="https://www.blink.mortgage/app/signup/p/fairfaxlending/pawanguptam" target="_blank">
                    <i class='bx bx-link-external'></i>
                    Apply Now
                </a>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Banner -->
        <!--<div id="home" class="three-banner-area two-banner-area contact-us banner-img two-banner-wrap">-->
        <!--    <div class="d-table">-->
        <!--        <div class="d-table-cell">-->
        <!--            <div class="container">-->
        <!--                <div class="banner-content">-->
        <!--                    <h1>Contact Us</h1>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>         -->
        <!--</div>-->
        <!-- End Banner -->
        
        <div class="mapSec">
            <ul>
                <li>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="550" id="gmap_canvas" src="https://maps.google.com/maps?q=6094%20Franconia%20Rd%2C%20Alexandria%2C%20VA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                        <style>.mapouter{position:relative;text-align:right;height:550px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:550px;width:100%;}</style>
                    </div>
                </li>
                <li>
                    <div class="one-section-title" id="contact">
                        <!-- <span class="sub-title">Lorem ipsum doller sit amet.</span> -->
                        <h2>Fairfax Lending, Inc.</h2>
                        <!--<p class="black">We review and accept business requests on a 24/7 basis.</p>-->
                        <div class="advisor-content">
                            <p class="black"><i class="bx bx-home"></i>
                                <span><font style="color:#ccc;display:block;width:100%;">Address</font>6094 Franconia Road,<br> Suite A Alexandria,<br> Virginia 22310</span>
                            </p>
                        </div>
                        <p class="black"><i class="bx bx-phone"></i> <span><font style="color:#ccc;display:block;width:100%;">Phone</font>1-888-878-1131 (Toll Free)</span></p>
                        <p class="black"><i class="bx bxs-mobile"></i> <span><font style="color:#ccc;display:block;width:100%;">Fax</font>(703) 349-0343</span></p>
                        <p class="black"><i class="bx bx-mail-send"></i> <span><font style="color:#ccc;display:block;width:100%;">Email</font><a href="mailto:info@fairfaxlending.com">info@fairfaxlending.com</span></a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- About Us Section -->

        <!-- Service -->
        <!-- End Service -->
        <div class="one-contact-area three-contact-area six-contact-area pb-100 pt-30" style="background:#f1f1f1!important;">
            <div class="container">
                <div class="contact-content" id="myForm">
                    <form id="contactForm" novalidate="true" action="<?php echo e(url('submitcontactdata')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="one-section-title three-section-title">
                            <span class="sub-title"># LET’S CONNECT</span>
                            <h2>Contact Us</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bx-user"></i>
                                    </label>
                                    <input type="text" name="Fname" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="First Name" onkeypress="return /[a-z]/i.test(event.key)">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bx-user"></i>
                                    </label>
                                    <input type="text" name="Lname" id="name" class="form-control" required="" data-error="Please enter your last name" placeholder="Last Name" onkeypress="return /[a-z]/i.test(event.key)">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bx-mail-send"></i>
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bxs-home-circle"></i>
                                    </label>
                                    <input type="text" name="add" id="phone_number" required="" data-error="Please enter your address" class="form-control" placeholder="Address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bx-phone-call"></i>
                                    </label>
                                    <input type="text" name="Pno" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Phone" onkeypress="return AllowOnlyNumbers(event);" onpaste="return AllowOnlyNumbers(event);" minlength="9" maxlength="13">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bx-phone-call"></i>
                                    </label>
                                    <input type="text" name="AlPno" id="alt_phone_number" required="" data-error="Please enter your alternate number" class="form-control" placeholder="Alternate Phone" onkeypress="return AllowOnlyNumbers(event);" onpaste="return AllowOnlyNumbers(event);" minlength="9" maxlength="13">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bx-user"></i>
                                    </label>
                                    <input type="text" name="city" id="city" class="form-control" required="" data-error="Please enter your last name" placeholder="City" onkeypress="return /[a-z]/i.test(event.key)">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bxs-building-house"></i>
                                    </label>
                                    <select name="state" id="state" required="" data-error="Please select your State" class="form-control" placeholder="Select your state">
                                        <option selected="" disabled="">Select Your State..</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="District of Columbia">District of Columbia</option>
                                        <option value="West Virginia">West Virginia</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bx-phone-call"></i>
                                    </label>
                                    <select name="bestTime" id="contact-time" required="" data-error="Select Best time to contact" class="form-control" placeholder="Select Best time to contact">
                                        <option selected="" disabled="">Select Best time to contact..</option>
                                        <option value="Morning">Morning</option>
                                        <option value="Noon">Noon</option>
                                        <option value="Evening">Evening</option>
                                        <option value="Night">Night</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bx-phone-call"></i>
                                    </label>
                                    <select name="contactBy" id="contact-by" required="" data-error="Select Contact me by" class="form-control" placeholder="Select Contact me by">
                                        <option selected="" disabled="">Select Contact me by..</option>
                                        <option value="Morning">Morning</option>
                                        <option value="Noon">Noon</option>
                                        <option value="Evening">Evening</option>
                                        <option value="Night">Night</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>
                                        <i class="bx bx-message-square-detail"></i>
                                    </label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required="" data-error="Write your message" placeholder="Message"></textarea>
                                        <div class="help-block with-errors">
                                            
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-12 col-lg-12">
                                <div class="row m-0">
                                    <div class="col-lg-12 pl-0">
                                        <button type="submit" class="contact-btn btn disabled" style="pointer-events: all; cursor: pointer;">
                                            Submit
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End About Us -->

        <!-- Footer -->
        <footer id="contact" class="one-footer-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <a href="#">
                                    <img src="<?php echo asset('public\assets\img\Fairfax_logo.png'); ?>" alt="Logo">
                                </a>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/fairfaxlending/?ref=bookmarks" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/fairfaxlending/?viewAsMember=true" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-quick">
                                <h3>About Us</h3>
                                
                                <!--<p>Fairfax Lending is dedicated to providing a superior digital mortgage experience through one word: Transparency.</p>-->
                                <!--<p>We have been helping customers afford the home of their dreams for many years and we love what we do.</p>-->
                                 <p>We are a digital mortgage lender focussed on changing the home financing industry. We pride ourselves on transparent, efficient, and high quality services!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-quick">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(url('legal')); ?>">Legal</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('loan-program')); ?>">Loan Programs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('loan-process')); ?>">Loan Process</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('faq')); ?>">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('blog')); ?>">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-address">
                                <h3>Address</h3>
                                <ul>
                                    <li>
                                        <i class='bx bx-phone-call'></i>
                                        <a href="tel:1-888-878-1131">1-888-878-1131</a>
                                    </li>
                                    <!-- <li>
                                        <i class='bx bx-phone-call'></i>
                                        <a href="tel:+5498586560350">+549 858 656 0350</a>
                                    </li> -->
                                    <li>
                                        <i class='bx bx-message-square-detail'></i>
                                        <a href="mailto:info@fairfaxlending.com">info@fairfaxlending.com</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-mobile'></i>
                                        <a href="fax:703-349-0343">Fax - 703-349-0343</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-current-location'></i>
                                        6094 Franconia Road, Suite A, Alexandria, Virginia 22310.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-6 col-xs-12">
                            <div class="copyright-item">
                                <ul>
                                    <li>
                                        <a href="<?php echo e(url('home')); ?>" style="color:#ffffff;">
                                           Home 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('home_purchase')); ?>" style="color:#ffffff;">
                                            Purchase
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('home_refinance')); ?>" style="color:#ffffff;">
                                            Refinance
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('aboutus')); ?>" style="color:#ffffff;">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('contact')); ?>" style="color:#ffffff;">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-xs-12">
                            <div class="copyright-item" style="text-align:right;">
                                <ul>
                                    <li>
                                        <a href="https://nmlsconsumeraccess.org/" target="_blank" style="color:#ffffff;">Company NMLS: 1692413</a>
                                    </li>
                                    <!--<li>-->
                                    <!--    <a href="https://nmlsconsumeraccess.org/" target="_blank" style="color:#ffffff;">Company NMLS: 1692413</a>-->
                                    <!--</li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- Essential JS -->
        <script src="<?php echo asset('public\assets\js\jquery-3.5.1.min.js'); ?>"></script>
        <script src="<?php echo asset('public\assets\js\popper.min.js'); ?>"></script>
        <script src="<?php echo asset('public\assets\js\bootstrap.min.js'); ?>"></script>
        <!-- Magnific Popup JS -->
        <script src="<?php echo asset('public\assets\js\jquery.magnific-popup.min.js'); ?>"></script>
        <!-- Owl Carousel JS -->
        <script src="<?php echo asset('public\assets\js\owl.carousel.min.js'); ?>"></script>
        <!-- Form Ajaxchimp JS -->
        <script src="<?php echo asset('public\assets\js\jquery.ajaxchimp.min.js'); ?>"></script>
        <!-- Form Validator JS -->
        <script src="<?php echo asset('public\assets\js\form-validator.min.js'); ?>"></script>
        <!-- Contact JS -->
        <!--<script src="<?php echo asset('public\assets\js\contact-form-script.js'); ?>"></script>-->
        <!-- Mixitup JS -->
        <script src="<?php echo asset('public\assets\js\jquery.mixitup.min.js'); ?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo asset('public\assets\js\custom.js'); ?>"></script>
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script> -->
         <script type="text/javascript">

       function AllowOnlyNumbers(e) {

                e = (e) ? e : window.event;
                var clipboardData = e.clipboardData ? e.clipboardData : window.clipboardData;
                var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
                var str = (e.type && e.type == "paste") ? clipboardData.getData('Text') : String.fromCharCode(key);
            
                return (/^\d+$/.test(str));
            }


    </script> 
    </body>
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/contact.blade.php ENDPATH**/ ?>