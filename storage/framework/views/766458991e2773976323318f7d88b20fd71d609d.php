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

        <title>Fairfax - Lending</title>

        <link rel="icon" type="image/png" href="<?php echo asset('public\assets\img\home-two\banner-icon.png'); ?>">
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
        <!--class="three-banner-area six-banner-area two-banner-area two-banner-wrap"-->
        <!--<div id="home" class="two-banner-wrap">-->
        <!--     <div class="banner-img">-->
        <!--        <img src="assets\img\home-six\banner-shape.png" alt="Banner">-->
        <!--    </div>-->
        <!--    <div class="d-table">-->
        <!--        <div class="d-table-cell">-->
        <!--            <div class="container">-->
        <!--                <div class="banner-content">-->
        <!--                            <h1>Buy A Home By Confidence</h1>-->
        <!--                            <div class="banner-btn">-->
        <!--                                <a class="cmn-banner-btn" href="https://www.blink.mortgage/app/signup/p/fairfaxlending/pawanguptam" target="_blank">-->
        <!--                                    <i class="bx bx-note"></i>-->
        <!--                                    Apply Now-->
        <!--                                </a>-->
        <!--                                 <a class="banner-right-btn" href="#" target="_blank">-->
        <!--                                    <i class="bx bx-calculator"></i>-->
        <!--                                    Calculator-->
        <!--                                </a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="container-fluid">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-5 p-0">-->
        <!--                <div class="banner-time-left">-->
        <!--                    <ul>-->
        <!--                        <li class="text-left">-->
        <!--                            <i class='bx bx-globe'></i>-->
        <!--                            <span>6094 Franconia Road Suite A</span>-->
        <!--                            <p>Alexandria, Virginia 22310.</p>-->
        <!--                        </li>-->
        <!--                        <li class="text-left">-->
        <!--                            <i class='bx bx-phone-call'></i>-->
        <!--                            <span>Call Us</span>-->
        <!--                            <a href="tel:1-888-878-1131"> 1-888-878-1131</a>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-7 p-0">-->
        <!--                <div class="banner-time-right">-->
        <!--                    <ul>-->
        <!--                        <li class="text-left">-->
        <!--                            <i class='bx bx-timer'></i>-->
        <!--                            <span>Opens</span>-->
        <!--                            <p>Mon-Fri (8am - 6pm)</p>-->
        <!--                        </li>-->
        <!--                        <li class="text-left">-->
        <!--                            <i class='bx bxs-contact'></i>-->
        <!--                            <span>Contact us </span>-->
        <!--                            <a href="mailto:info@fairfaxlending.com">info@fairfaxlending.com</a>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>            -->
        <!--</div>-->
        <!-- End Banner -->
        <!-- Banner -->
        <div id="home" class="two-banner-wrap">
            <div class="two-banner-slider owl-theme owl-carousel">
                <div class="two-banner-area two-banner-one">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="banner-content">
                                    <h1>Buy A Home With Confidence</h1>
                                    <div class="banner-btn">
                                        <a class="cmn-banner-btn" href="https://www.blink.mortgage/app/signup/p/fairfaxlending/pawanguptam" target="_blank">
                                            <i class="bx bx-note"></i>
                                            Apply Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two-banner-area two-banner-two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="banner-content">
                                    <h1>Buy A Home With Confidence</h1>
                                    <div class="banner-btn">
                                        <a class="cmn-banner-btn" href="https://www.blink.mortgage/app/signup/p/fairfaxlending/pawanguptam" target="_blank">
                                            <i class="bx bx-note"></i>
                                            Apply Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two-banner-area two-banner-three">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="banner-content">
                                    <h1>Buy A Home With Confidence</h1>
                                    <div class="banner-btn">
                                        <a class="cmn-banner-btn" href="https://www.blink.mortgage/app/signup/p/fairfaxlending/pawanguptam" target="_blank">
                                            <i class="bx bx-note"></i>
                                            Apply Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 p-0" style="background-color: hsl(0deg 0% 0% / 67%);">
                        <div class="banner-time-left">
                            <ul>
                                <!--<li class="text-left">-->
                                <!--    <i class='bx bx-globe'></i>-->
                                <!--    <span>6094 Franconia Road Suite A</span>-->
                                <!--    <p>Alexandria, Virginia 22310.</p>-->
                                <!--</li>-->
                                <li class="text-left">
                                    <i class='bx bx-phone-call'></i>
                                    <span>Call Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="tel:1-888-878-1131"> 1-888-878-1131</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 p-0">
                        <div class="banner-time-right">
                            <ul>
                                <li class="text-left">
                                    <i class='bx bx-timer'></i>
                                    <span>We are open</span>
                                    <p>Mon-Fri (9am - 6pm)</p>
                                </li>
                                <li class="text-left">
                                    <i class='bx bxs-contact'></i>
                                    <span>Contact Us </span>
                                    <a href="mailto:info@fairfaxlending.com">info@fairfaxlending.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- End Banner -->
        <!-- Get a Quote start -->
   <!--     <div class="five-quote-area six-quote-area">-->
			<!--<div class="container">-->
			<!--	<div class="row align-items-center">-->
			<!--		<div class="col-lg-5">-->
			<!--			<div class="quote-content">-->
			<!--				<div class="one-section-title three-section-title">-->
								<!-- <span class="sub-title"># GET A QUOTE</span> -->
			<!--					<h2>Get Mortgage Quote If You Have Any Doubt About It</h2>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--		<div class="col-lg-7">-->
			<!--			<div class="quote-wrap">-->
			<!--				<div class="quote-btn">-->
			<!--					<a class="quote-btn-left" href="#" target="_blank">-->
			<!--						<i class="bx bxs-quote-right"></i>-->
			<!--						Get a quote-->
			<!--					</a>-->
			<!--					<a class="quote-btn-right" href="#" target="_blank">-->
			<!--					 	<i class="bx bx-donate-heart"></i>-->
			<!--						Join community-->
			<!--					</a>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->
			<!--</div>-->
        <!-- Close -->

        <!-- Introduction section -->
        <!-- Mission -->
        <div id="about" class="two-mission-area ptb-100">
            <div class="container">
                <div class="one-section-title">
                    <span class="sub-title">FAIRFAX LENDING</span>
                    <h2>We Care Deeply For Our Clients</h2>
                </div>
                <div class="mission-content">
                    <img src="<?php echo asset('public\assets\img\home-two\mission.jpg'); ?>" alt="Mission">
                    <div class="mission-bottom">
                        <ul class="align-items-center">
                            <li>
                                <a href="https://www.youtube.com/embed/qQq3b1aLJ80?rel=0&controls=0&showinfo=0" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                                <!--<p>Intro With Company</p>-->
                            </li>
                            <li>
                                
                                <a href="https://fairfaxlending.youcanbook.me/" target="_blank">
                                    
                                    <div class="mission-item">
                                        <i class='bx bxs-user'></i>
                                        <span>Speak With Loan Officer</span>
                                    </div>
                                </a>
                                
                            </li>
                            <li>
                                <a href="<?php echo e(url('loan-process')); ?> ">
                                
                                <div class="mission-item">
                                    <i class='bx bx-certification'></i>
                                    <span>The <br>Process</span>
                                </div>
                                
                                </a>
                                
                            </li>
                            <li>
                                <a href="https://www.blink.mortgage/app/signup/p/fairfaxlending/pawanguptam" target="_blank">
                                <div class="mission-item">
                                    <i class='bx bxs-hand-right'></i>
                                    <span>Get Started Today</span>
                                </div>
                                 </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('home_purchase')); ?> ">
                                
                                <div class="mission-item">
                                    <i class='bx bxs-home-circle'></i>
                                    <span>Check The Rate</span>
                                </div>
                                
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mission -->
        <!-- End -->
        <!-- Loan -->
        <!-- <section class="three-loan-area five-loan-area six-loan-area ptb-100">
            <div class="container">
                <div class="five-loan-slider owl-theme owl-carousel">
                    <div class="loan-item">
                        <i class='bx bx-home'></i>
                        <h3>A  Conventional Home Loan</h3>
                        <p>Migration do amet contur diisci velit suia nonnua</p>
                        <a href="#" target="_blank">
                            READ MORE
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>  
                    <div class="loan-item">
                        <i class='bx bx-wrench'></i>
                        <h3>Homeready Fannie Mortgage</h3>
                        <p>Fyigration do amet contur diisci velit suia nonnua</p>
                        <a href="#" target="_blank">
                            READ MORE
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>  
                    <div class="loan-item">
                        <i class='bx bx-dollar-circle'></i>
                        <h3>High Balance Mortgage</h3>
                        <p>Wigration do amet contur diisci velit suia nonnua</p>
                        <a href="#" target="_blank">
                            READ MORE
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>  
                    <div class="loan-item">
                        <i class='bx bx-donate-heart'></i>
                        <h3>Renovation Loans For Buyers</h3>
                        <p>Migration do amet contur diisci velit suia nonnua</p>
                        <a href="#" target="_blank">
                            READ MORE
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>  
                    <div class="loan-item">
                        <i class='bx bx-home'></i>
                        <h3>A  Conventional Home Loan</h3>
                        <p>Migration do amet contur diisci velit suia nonnua</p>
                        <a href="#" target="_blank">
                            READ MORE
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>  
                    <div class="loan-item">
                        <i class='bx bx-wrench'></i>
                        <h3>Homeready Fannie Mortgage</h3>
                        <p>Fyigration do amet contur diisci velit suia nonnua</p>
                        <a href="#" target="_blank">
                            READ MORE
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>  
                    <div class="loan-item">
                        <i class='bx bx-dollar-circle'></i>
                        <h3>High Balance Mortgage</h3>
                        <p>Wigration do amet contur diisci velit suia nonnua</p>
                        <a href="#" target="_blank">
                            READ MORE
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>  
                    <div class="loan-item">
                        <i class='bx bx-donate-heart'></i>
                        <h3>Renovation Loans For Buyers</h3>
                        <p>Migration do amet contur diisci velit suia nonnua</p>
                        <a href="#" target="_blank">
                            READ MORE
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>  
                </div>
            </div>
        </section> -->
        <!-- End Loan -->

        <!-- About -->
        <div id="about" class="three-about-area four-about-area six-about-area ptb-100">
            <div class="about-shape">
                <img src="<?php echo asset('public\assets\img\home-six\about4.png'); ?>" alt="Shape">
            </div>
            <div class="container-fluid p-0">
                <div class="row align-items-center m-0">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <!-- <div class="one-section-title three-section-title">
                                <span class="sub-title"># ABOUT US</span>
                                <h2>We Are Fully Dedicated To Support You</h2>
                            </div> -->
                            <div class="about-mission">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-default active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                            <i class='bx bx-bullseye'></i>
                                            ABOUT US
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-default" id="pills-profile-tab" data-toggle="pill" href="#pills-goal" role="tab" aria-controls="pills-goal" aria-selected="false">
                                            <i class='bx bx-show'></i>
                                            OUR MISSION
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-default" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                            <i class='bx bx-show-alt'></i>
                                            OUR VISION
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <p>We are a digital mortgage lender focussed on changing the home financing industry. We pride ourselves on transparent, efficient, and high quality services!</p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-goal" role="tabpanel" aria-labelledby="pills-goal-tab">
                                        <p>To close your loan within 14 days.</p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <p>To make home financing the most quick, easy, and efficient transaction possible!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pr-0">
                        <div class="about-img">
                            <img src="<?php echo asset('public\assets\img\home-six\about1.png'); ?>" alt="About">
                            <img src="<?php echo asset('public\assets\img\home-six\about2.png'); ?>" alt="About">
                            <img src="<?php echo asset('public\assets\img\home-six\about3.png'); ?>" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About -->

        <!-- Quote -->
        <div class="five-quote-area six-quote-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="quote-content">
                            <div class="one-section-title three-section-title">
                                <!--<span class="" style="color:#fff!important;">ABOUT OUR COMPANY</span>-->
                                <h2>Why Work With Us?</h2>
                                <p id="text" style="color:#fff;">We have been helping customers afford the home of their dreams for many years and we love what we do.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-7">
                        <div class="quote-wrap">
                            <div class="quote-btn">
                                <a class="quote-btn-left" href="#" target="_blank">
                                    <i class='bx bxs-quote-right'></i>
                                    Get a quote
                                </a>
                                <a class="quote-btn-right" href="#" target="_blank">
                                    <i class='bx bx-donate-heart'></i>
                                    Join community
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End Quote -->
        <!-- Contact -->
        <div class="one-contact-area three-contact-area six-contact-area ptb-100">
            <div class="container">
                <div class="contact-content">
                    <form id="contactForm" action="<?php echo e(url('submitdata')); ?>" method="post">
							<?php echo csrf_field(); ?>
                        <div class="one-section-title three-section-title">
                            <span class="sub-title"># LET’S CONNECT</span>
                            <h2>Contact Us</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class='bx bx-user'></i>
                                    </label>
                                    <input type="text" name="first_name" id="name" onkeypress="return /[a-z]/i.test(event.key)" class="form-control" required="" data-error="Please enter your name" placeholder="First Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class='bx bx-user'></i>
                                    </label>
                                    <input type="text" name="last_name" id="name" onkeypress="return /[a-z]/i.test(event.key)" class="form-control" required="" data-error="Please enter your last name" placeholder="Last Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class='bx bx-mail-send'></i>
                                    </label>
                                    <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class='bx bx-phone-call'></i>
                                    </label>
                                    <input type="text" name="phone" id="phone_number" required="" onkeypress="return AllowOnlyNumbers(event);" onpaste="return AllowOnlyNumbers(event);" minlength="9" maxlength="13" data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <i class='bx bx-phone-call'></i>
                                    </label>
                                    <select name="state" id="state" required="" data-native-menu="false" data-error="Please select your State" class="form-control" placeholder="Select your state">
                                        <option selected disabled>Select Your State..</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="District of Columbia">District of Columbia</option>
                                        <option value="West Virginia">West Virginia</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6 multiselect">
                                <div class="form-group">
                                    <label>
                                        <i class='bx bx-phone-call'></i>
                                    </label>
                                    <select class="form-control " name="loanPurpose[]" id="multiple-checkboxes1" multiple="multiple">
                                        <option value="Lower My Rate">Lower My Rate</option>
                                        <option value="Get Cash">Get Cash</option>
                                        <option value="Consolidate Debt">Consolidate Debt</option>
                                        <option value="Purchase Home">Purchase Home</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">                                    
                                <p>Submitting this form online will automatically authorize Fairfax Lending to contact you via text message or phone at the number provided.
                                If you do not wish to receive a phone call or text message, please do not submit this online form and instead contact us at <span class="red">1-888-878-1131</span> to complete your loan request.</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="row m-0">
                                    <div class="col-lg-12 pl-0">
                                        <button type="submit" class="contact-btn btn">
                                            Submit
                                            <i class='bx bx-right-arrow-alt'></i>
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
        <!-- End Contact -->

        <!-- Counter -->
        <!-- <div class="six-counter-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <ul>
                                <li>
                                    <div class="progress blue">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <i class='bx bxs-bulb'></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-content">
                                        <h3>90</h3>
                                        <p>Years Of Experience</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <ul>
                                <li>
                                    <div class="progress yellow">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <i class='bx bxs-home-smile'></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-content">
                                        <h3>69</h3>
                                        <p>VETERAN HOMES COMPLETED</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <ul>
                                <li>
                                    <div class="progress pink">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <i class='bx bxs-user'></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-content">
                                        <h3>56</h3>
                                        <p>VOLUNTEERS PARTICIPATED</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <ul>
                                <li>
                                    <div class="progress pink">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <i class='bx bx-world'></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-content">
                                        <h3>19</h3>
                                        <p>CUSTOMER WORLDWIDE</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Counter -->

        <!-- Step -->
        <div id="service" class="four-step-area five-step-area six-step-area ptb-100">
            <div class="container-fluid">
                <div class="one-section-title three-section-title">
                    <span class="sub-title"># STEPS & PROCESS</span>
                    <!--<h2>Refinance with guaranteed!</h2>-->
                    <!--<p>We are with the client for every step throughout the refinance process. With us, you just need to sit back and let us do what we do best.</p>-->
                </div>
                <div class="four-step-slider-two owl-theme owl-carousel">
                    <div class="step-item step-one">
                        <div class="step-span">
                            <span>01</span>
                        </div>
                        <h3>Loan Application</h3>
                        <p>Fill out an application over the phone or online! We recommend using our online application. This makes the process quick and easy.</p>
                    </div>
                    <div class="step-item">
                        <div class="step-span">
                            <span>02</span>
                        </div>
                        <h3> Processing</h3>
                        <p>Our team will review your application and collect all the necessary documentation. This includes ordering the appraisal and the title work. For the fastest closing, please respond quickly to our team!</p>
                    </div>
                    <div class="step-item step-one">
                        <div class="step-span">
                            <span>03</span>
                        </div>
                        <h3>Underwriting</h3>
                        <p>Your final package will be submitted to underwriting. Underwriting generally takes 1-2 business days. We will try to collect all documents before underwriting to close quicker!</p>
                    </div>
                    <div class="step-item">
                        <div class="step-span">
                            <span>04</span>
                        </div>
                        <h3>Final Loan Documents</h3>
                        <p>After we get a clear-to-close, we will send you a final closing document. This will contain all the final numbers.</p>
                    </div>
                    <div class="step-item step-one">
                        <div class="step-span">
                            <span>05</span>
                        </div>
                        <h3>Schedule Closing</h3>
                        <p>The Final Stage! Everything is clear and good to go. Now all you have to do is sign the final documents with a closing specialist. Congrats!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Step -->
        <section class="five-step-area pb-100">
            <div class="custSection" id="counter">
               <div class="w-l-50 posRel">
                  <div class="container">
                     <div class="row par">
                        <div class="col-md-12 text-left pad-0">
                           <span class="Txt">Over <span class="count" data-count="20">0</span> years of experience </span>
                        </div>
                     </div>
                  </div>
                  <span class="bc_6"></span>
               </div>
               <div class="w-r-50 posRel">
                  <div class="container">
                     <div class="row par">
                        <div class="col-md-12 text-left pad-0">
                           <span class="Txt" id="mobTx">On average we take <span class="count" data-count="14">0</span> days to close</span>
                        </div>
                     </div>
                  </div>
                  <span class="bc_7"></span>
               </div>
            </div>
        </section>

        <!-- Loan -->
        <section class="three-loan-area seven-loan-area" style="background:#fff;">
            <div class="container">
                <div class="one-section-title three-section-title">
                    <span class="sub-title">WHAT WE OFFER</span>
                    <h2 style="color:#000;">Our Core Services</h2>
                </div>
                <div id="Container" class="row">
                    <div class="col-sm-6 col-lg-6 col-xs-12">
                        <div class="loan-item text-center">
                            <a href="<?php echo e(url('home_purchase')); ?>" target="_blank">
                            <!-- <span>Purchase</span> -->
                            <i class="bx bxs-home-smile font-150"></i>
                            <h3>Purchase</h3>
                            <!-- <p>Lorem Ipsum doller sit amet.</p> -->
                            <!-- 
                                READ MORE
                                <i class='bx bx-right-arrow-alt'></i> -->
                            </a>
                        </div>  
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xs-12">
                        <div class="loan-item text-center">
                            <a href="<?php echo e(url('home_refinance')); ?>" target="_blank">
                                <i class="bx bxs-home-heart font-150"></i>
                            <!-- <span>Refinance</span> -->
                            <h3>Refinance</h3>
                            <!-- <p>Lorem Ipsum doller sit amet.</p>
                                READ MORE
                                <i class='bx bx-right-arrow-alt'></i> -->
                            </a>
                        </div>  
                    </div>
                    <!-- <div class="col-sm-6 col-lg-3 mix web">
                        <div class="loan-item">
                            <span>High Balance</span>
                            <h3>High Balance Mortgage</h3>
                            <p>Wigration do amet contur diisci velit suia nonnua</p>
                            <a href="#" target="_blank">
                                READ MORE
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>  
                    </div>
                    <div class="col-sm-6 col-lg-3 mix tyre web">
                        <div class="loan-item">
                            <span>Renovation Loans</span>
                            <h3>Renovation Loans For Buyers</h3>
                            <p>Migration do amet contur diisci velit suia nonnua</p>
                            <a href="#" target="_blank">
                                READ MORE
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>  
                    </div>
                    <div class="col-sm-6 col-lg-3 mix web">
                        <div class="loan-item">
                            <span>VA Loans</span>
                            <h3>VA Loans For Military</h3>
                            <p>Migration do amet contur diisci velit suia nonnua</p>
                            <a href="#" target="_blank">
                                READ MORE
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>  
                    </div>
                    <div class="col-sm-6 col-lg-3 mix tyre">
                        <div class="loan-item">
                            <span>Jumbo Loans</span>
                            <h3>When You Need Conforming Limit</h3>
                            <p>Fyigration do amet contur diisci velit suia nonnua</p>
                            <a href="#" target="_blank">
                                READ MORE
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>  
                    </div>
                    <div class="col-sm-6 col-lg-3 mix web">
                        <div class="loan-item">
                            <span>Purchase Loans</span>
                            <h3>Down Payment Has Stalled </h3>
                            <p>Wigration do amet contur diisci velit suia nonnua</p>
                            <a href="#" target="_blank">
                                READ MORE
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>  
                    </div>
                    <div class="col-sm-6 col-lg-3 mix tyre">
                        <div class="loan-item">
                            <span>Condo Loans</span>
                            <h3>Loans For Condo Support</h3>
                            <p>Migration do amet contur diisci velit suia nonnua</p>
                            <a href="#" target="_blank">
                                READ MORE
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>  
                    </div> -->
                </div>
            </div>
        </section>
        <!-- End Loan -->

        <!-- Time -->
        <!-- <div class="two-banner-wrap three-banner-wrap four-banner-wrap">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-lg-6 p-0">
                        <div class="banner-time-left">
                            <ul>
                                <li>
                                    <i class='bx bx-money'></i>
                                    <span>What is price?</span>
                                    <p>Mortgage Rates</p>
                                </li>
                                <li>
                                    <i class='bx bx-calculator'></i>
                                    <span>Get calculated?</span>
                                    <a href="#" target="_blank">Calculators</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="banner-time-right">
                            <ul>
                                <li>
                                    <i class='bx bx-dollar-circle'></i>
                                    <span>What’s paying?</span>
                                    <p>Payment By Credit Card</p>
                                </li>
                                <li>
                                    <i class='bx bxs-contact'></i>
                                    <span>Faq Or ask?</span>
                                    <span>Get Quick Information</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Time -->
        
        <!-- FAQ -->
        <!-- <div class="one-faq-area four-faq-area six-faq-area pt-100 pb-70">
            <div class="faq-shape">
                <img src="assets\img\home-six\faq4.png" alt="FAQ">
            </div>
            <div class="container-fluid p-0">
                <div class="row align-items-center m-0">
                    <div class="col-lg-6 pl-0">
                        <div class="faq-img">
                            <img src="assets\img\home-six\faq1.png" alt="Faq">
                            <img src="assets\img\home-six\faq2.png" alt="Faq">
                            <img src="assets\img\home-six\faq3.png" alt="Faq">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <ul class="accordion">
                                <li>
                                    <a>How do you qualify for a loan?</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam</p>
                                </li>
                                <li>
                                    <a>A Good Lender Will Clearly Explain Mortgage?</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam</p>
                                </li>
                                <li>
                                    <a>Can You Get A Mortgage Without A Credit Score?</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam</p>
                                </li>
                                <li>
                                    <a>How Much Home Can You Afford?</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End FAQ -->
        <!-- Among -->
        <!--<div class="one-among-area two-among-area pt-100">-->
        <!--    <div class="container">-->
        <!--        <div class="one-section-title">-->
        <!--            <span class="sub-title">WHY CHOOSE US</span>-->
        <!--            <h2>We Offer You</h2>-->
        <!--            <p>A complete solution for all your refinancing needs. We are best at what we do and that’s to make sure that you get the best service. </p>-->
        <!--        </div>-->
        <!--        <div class="row">-->
        <!--            <div class="col-sm-6 col-lg-4">-->
        <!--                <div class="among-item">-->
        <!--                    <div class="among-top">-->
        <!--                        <img src="<?php echo asset('public\assets\img\home-two\among1.png'); ?>" alt="Among">-->
        <!--                        <div class="among-icon">-->
        <!--                            <i class='bx bxs-badge-dollar'></i>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="among-bottom">-->
        <!--                        <h3>The Benefits of an Efficient Home</h3>-->
        <!--                        <p>Summer weather has already turned up the heat. </p>-->
        <!--                        <a href="<?php echo e(url('blogdetails1')); ?>">-->
        <!--                            READ MORE-->
        <!--                            <i class="bx bx-right-arrow-alt"></i>-->
        <!--                        </a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-sm-6 col-lg-4">-->
        <!--                <div class="among-item">-->
        <!--                    <div class="among-top">-->
        <!--                        <img src="<?php echo asset('public\assets\img\home-two\among2.png'); ?>" alt="Among">-->
        <!--                        <div class="among-icon">-->
        <!--                            <i class='bx bx-bulb'></i>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                     <div class="among-bottom">-->
        <!--                        <h3>Options For Non-Standard Homebuyers</h3>-->
        <!--                        <p>For many, owning a home is the pinnacle of what is considered the American Dream.</p>-->
        <!--                        <a href="<?php echo e(url('blogdetails2')); ?>">-->
        <!--                            READ MORE-->
        <!--                            <i class="bx bx-right-arrow-alt"></i>-->
        <!--                        </a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-sm-6 col-lg-4">-->
        <!--                <div class="among-item">-->
        <!--                    <div class="among-top">-->
        <!--                        <img src="<?php echo asset('public\assets\img\home-two\among3.png'); ?>" alt="Among">-->
        <!--                        <div class="among-icon">-->
        <!--                            <i class='bx bx-money'></i>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="among-bottom">-->
        <!--                        <h3>How and Why to Refinance Your Mortgage</h3>-->
        <!--                        <p>Definition of mortgage refinance </p>-->
        <!--                        <a href="<?php echo e(url('blogdetails3')); ?>">-->
        <!--                            READ MORE-->
        <!--                            <i class="bx bx-right-arrow-alt"></i>-->
        <!--                        </a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-sm-6 col-lg-4">-->
        <!--                <div class="among-item">-->
        <!--                    <div class="among-top">-->
        <!--                        <img src="<?php echo asset('public\assets\img\home-two\among4.png'); ?>" alt="Among">-->
        <!--                        <div class="among-icon">-->
        <!--                            <i class='bx bx-user'></i>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="among-bottom">-->
        <!--                        <h3>Do I Need a Real Estate Agent?</h3>-->
        <!--                        <p>It’s a question as old as the real estate business.</p>-->
        <!--                        <a href="<?php echo e(url('blogdetails4')); ?>">-->
        <!--                            READ MORE-->
        <!--                            <i class="bx bx-right-arrow-alt"></i>-->
        <!--                        </a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-sm-6 col-lg-4">-->
        <!--                <div class="among-item">-->
        <!--                    <div class="among-top">-->
        <!--                        <img src="<?php echo asset('public\assets\img\home-two\among5.png'); ?>" alt="Among">-->
        <!--                        <div class="among-icon">-->
        <!--                            <i class='bx bx-message-alt-detail'></i>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="among-bottom">-->
        <!--                        <h3>Is Building A Custom Home a Good Idea in 2020? Here’s What You Need To Know</h3>-->
        <!--                        <p>The cost of building a new home has decreased in 2020, </p>-->
        <!--                        <a href="<?php echo e(url('blogdetails5')); ?>">-->
        <!--                            READ MORE-->
        <!--                            <i class="bx bx-right-arrow-alt"></i>-->
        <!--                        </a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-sm-6 col-lg-4">-->
        <!--                <div class="among-item">-->
        <!--                    <div class="among-top">-->
        <!--                        <img src="<?php echo asset('public\assets\img\home-two\among6.png'); ?>" alt="Among">-->
        <!--                        <div class="among-icon">-->
        <!--                            <i class='bx bx-home'></i>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="among-bottom">-->
        <!--                        <h3>What are Mortgage Points?</h3>-->
        <!--                        <p>The mortgage process is full of unfamiliar terms for most buyers. </p>-->
        <!--                        <a href="<?php echo e(url('blogdetails6')); ?>">-->
        <!--                            READ MORE-->
        <!--                            <i class="bx bx-right-arrow-alt"></i>-->
        <!--                        </a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- End Among -->
        <!-- Lover -->
        <section class="two-lover-area five-lover-area six-lover-area ptb-100">
            <div class="container">
                <div class="one-section-title three-section-title">
                    <span class="sub-title">TESTIMONIALS</span>
                    <h2>What Clients Are Saying</h2>
                </div>
                <div class="six-lover-slider owl-theme owl-carousel">
                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Ade</h3>
                                    <p>Very knowledgeable and patient, they are very savvy and they make you feel very important.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Oluwatimileyin</h3>
                                    <p>Great services, great team. I’m a happy customer and I’m definitely coming back when I’m buying another home.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Gladys</h3>
                                    <p>I would 100% recommend Fairfax Lending to anyone looking to buy or refinance a home. Pawan and Nikki were super helpful, friendly and extremely diligent.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Joe</h3>
                                    <p>Excellent customer service and follow up. I received a very good quote. I would recommend them for refinancing or purchases. Great folks to work with.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Nana</h3>
                                    <p>Being first time Home buyers my husband I worked closely with Mr. Gupta and Nikki and they were both phenomenal! Being that we were first time home buyers they educated us and were there every step of the way.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Iman</h3>
                                    <p>I was fortunate to find them and glad I did! They made the process a lot easier and shorter than anyone I have dealt with in the past. I finished dealing with Penny Mac which is an awful company to deal with.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Brian</h3>
                                    <p>Pawan and team knocked it out of the park.  Extremly fast close as promised, great rates, and awesome communication.  Would recommend them to anyone in the DMV looking for a trustworthy lender!!!</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Saiprabha</h3>
                                    <p>I am a very pleased customer and would do business with them again. They closed on my mortgage in just a little over a week as I had an emergency in the family and had to travel internationally at short notice. Very professional and timely communication.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Michael</h3>
                                    <p>Did a great job with my refinancing. Thanks guys.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Dr. Rigil</h3>
                                    <p>I come with this message to thank the whole team of fairfax lending for the quality work and the professionalism that you see shown.  Despite the Covid19 and despite the whim of some bank.  you managed to close my file in one month.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="lover-item">
                        <ul>
                            <li>
                                <div class="lover-content">
                                    <h3>Vanessa</h3>
                                    <p>I recently purchased my first home that was made possible by the patience, persistence, and guidance of  Mr. Pawan Gupta, Nikki Kumar the entire fairfax lending team. Mr. Gupta and Nikki made the overwhelming, frustrating home buying experience manageable and understandable.</p>
                                    <ul>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star checked'></i>
                                        </li>
                                    </ul>
                                    <div class="lover-icon">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Lover -->

        <!-- Subscribe -->
        <!-- <section class="one-subscribe-area five-subscribe-area six-subscribe-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="subscribe-wrap">
                            <h2>Don't Miss Our Update Use This Subscription</h2>
    
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
        
                                <button class="btn subscribe-btn" type="submit">
                                    Subscribe now
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                            <div class="sub-img">
                                <img src="assets\img\home-six\sub-main.png" alt="Subscribe">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Subscribe -->

        <!-- Map -->
        <!-- <div class="four-map-area">
            <div class="container-fluid p-0">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779284!2d62.17507173408573!3d23.728204508550373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1592754785579!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div> -->
        <!-- End Map -->

        <!-- Hour -->
        <!-- <div class="six-hour-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-lg-4">
                        <div class="hour-item">
                            <i class='bx bxs-time'></i>
                            <div class="hour-inner">
                                <h3>Opening Time</h3>
                                <span>Mon-Fri (8AM - 6PM EST)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-lg-4">
                        <div class="hour-item">
                            <i class='bx bxs-phone-call'></i>
                            <div class="hour-inner">
                                <h3>Call Us:</h3>
                                <a href="tel:1-888-878-1131">1-888-878-1131</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-lg-4">
                        <div class="hour-item hour-right">
                            <i class='bx bx-message-detail'></i>
                            <div class="hour-inner">
                                <h3>Contact Us</h3>
                                <a href="mailto: info@fairfaxlending.com"> info@fairfaxlending.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Hour -->

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
                                        <a href="<?php echo e(url('/home')); ?>" style="color:#ffffff;">
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
        <script>
            $('ul.nav li.dropdown').hover(function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });
        </script>
        <script>
        $(document).ready(function() {
            $('#multiple-checkboxes1').multiselect({
                includeSelectAllOption: true,
                nonSelectedText:'Select Your Loan Purpose....'
            });
        });

            function AllowOnlyNumbers(e) {

            e = (e) ? e : window.event;
            var clipboardData = e.clipboardData ? e.clipboardData : window.clipboardData;
            var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
            var str = (e.type && e.type == "paste") ? clipboardData.getData('Text') : String.fromCharCode(key);

            return (/^\d+$/.test(str));
          }
          
         
        </script>

        <script>
        	var counted = 0;
				$(window).scroll(function() {

				  var oTop = $('#counter').offset().top - window.innerHeight;
				  if (counted == 0 && $(window).scrollTop() > oTop) {
				    $('.count').each(function() {
				      var $this = $(this),
				        countTo = $this.attr('data-count');
				      $({
				        countNum: $this.text()
				      }).animate({
				          countNum: countTo
				        },

				        {

				          duration: 4000,
				          easing: 'swing',
				          step: function() {
				            $this.text(Math.floor(this.countNum));
				          },
				          complete: function() {
				            $this.text(this.countNum);
				            //alert('finished');
				          }

				        });
				    });
				    counted = 1;
				  }

				});
        </script>

    </body>
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/index.blade.php ENDPATH**/ ?>