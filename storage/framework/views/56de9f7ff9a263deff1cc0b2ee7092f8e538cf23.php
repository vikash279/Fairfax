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

        <!-- Other css -->

        <!-- <link rel="stylesheet" href="assets\css\style1.css"> -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\responsive1.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\custom1.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('public\assets\css\cus_responsive1.css'); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!-- Close -->

        <title>Fairfax Lending | Refinance Home</title>

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
        
        <!-- End Navbar -->
        <!--<div class="bottom-left-triangle">-->
      <!--   <img src="http://younggeeks.co.in/fairfax/public\assets\img\topBanner.jpg">-->
      <!--</div>-->
      <!-- Banner -->
      <!--<div id="home" class="three-banner-area two-banner-area purchase-home banner-img two-banner-wrap" style="--bg-color: #244c5a; --text-color: #ffffff;--after-gradient: linear-gradient(to left, rgba(36,76,90,1) 0%, rgba(36,76,90,0) 70%);" -->
      <!--ie-style="--bg-color: #244c5a;--text-color: #ffffff; --after-gradient: linear-gradient(to left, rgba(36,76,90,1) 0%, rgba(36,76,90,0) 70%);">-->
      <!--    <div class="row mob1">-->
      <!--        <div class="col-md-6 col-xs-12">-->
      <!--            <h1 id="font-banner">Purchasing a Home… Redefined</h1>-->
      <!--            <p id="p">Let a seasoned lending professional dedicated to your community provide support throughout the entire homebuying process.</p>-->
      <!--        </div>-->
      <!--        <div class="col-md-6 col-xs-12 pos_a">-->
      <!--            <img src="http://younggeeks.co.in/fairfax/public\assets\img/purchase-home.jpg">-->
      <!--        </div>-->
      <!--    </div>-->
      <!--</div>-->
      <section id="refinancing" data-title="Refinancing" class="text-image-section reverse auto-linked hg-500" style="background:#1f4495;">
         <div class="container">
            <div class="section-content">
               <div class="row">
                  <div class="col-lg-6 col-xs-12 form group">
                     <div class="text top-80">
                        <h2 class="sec-title mb-0 animateMe" data-animation="fadeInLeft" data-animation-delay="0.5s" style="color:#fff;">Refinance</h2>
                        <p class="animateMe" data-animation="fadeInRight" data-animation-duration="1500" style="color:#fff;">Refinancing your current loan could be a great option and save you money every month. The process will result in getting a new loan with new terms. Fill out an application now!</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-xs-12 form group">
                    <div class="rightImg animateMe" data-animation="bounceIn" data-animation-delay="0.5s">
                        <img src="http://younggeeks.co.in/fairfax/public/assets/img/rfnc-img.png" class="imgR">
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
        <!-- End Banner -->

        <!-- Content area -->

        <!-- Body Start -->
      <div class="content_body pad-50">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="bot-30 box gray">
                     <h3 class="font-22 cusH3">Get Loan</h3>
                     <ul class="sideUl">
                        <li>
                           <a href="<?php echo e(url('home_refinance')); ?>" class="sideMenu re_bt red">Refinance</a>
                        </li>
                        <li>
                           <a href="<?php echo e(url('home_purchase')); ?>" class="sideMenu pr_bt">Purchase</a>
                        </li>
                     </ul>
                  </div>
                  <div class="bot-30 box">
                     <h3 class="font-22 cusH3">Opening Hours</h3>
                     <ul class="sideUl">
                        <li>
                           <span class="left">Mon - Fri</span> 
                           <span class="right">09:00 AM - 06:00 PM EST</span>
                        </li>
                     </ul>
                  </div>
                  <div class="bot-30 box gray">
                     <a href="https://fairfaxlending.youcanbook.me/" target="_blank" class="btn btn-success cusH3 form-group">Book An Appointment</a>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12">
                  <div class="mortgageBox bot-30">
                  <div class="redLayer">
                     <form action="<?php echo e(url('/store_home_refinance_data')); ?>" method="POST">
                         <?php echo csrf_field(); ?>  
                        <div id="demo" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <h4><!--Get your VA Home Loan quote in minutes-->Get your quote:</h4>
                                 <div class="buttonBox">
                                    <a href="javascript:void(0);" class="mrgBtn" data-target="#demo" data-slide="next">
                                      <input type="radio" name="refinaceHome" id="refinaceHome" checked="checked" value = "Refinace Home">
                                    <i class="fas fa-arrow-alt-circle-right"></i> I want to refinance a home
                                    </a>
                                 </div>
                                 <p class="white" style="color:#ffffff;">
                                    98% Customer Recommendation Rating!
                                 </p>
                                 <p class="bot-10"><span><i class="fas fa-sun"></i></span> 
                                    <span class="progress">
                                    <span class="progress-done" data-done="98"></span>
                                    </span>
                                 </p>
                                 <p class="white bot-0" style="color:#ffffff;">Average Satisfaction Rating</p>
                                 <p class="white" style="color:#ffffff;">Based on 33 reviews from Fairfax Lending customers!</p>
                                 <div class="sliderControl">
                                    <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <h4 class="white bot-50">SELECT PROPERTY TYPE</h4>
                                 <a href="javascript:void(0);" class="sldBtn firstForm">
                                 <input type="radio" name="property_type" id="property_type" value ="Single Family"  >
                                 <i class="fas fa-arrow-alt-circle-right"></i> Single Family
                                 </a>
                                 <a href="javascript:void(0);" class="sldBtn firstForm">
                                 <input type="radio" name="property_type" id="property_type" value ="Multi- Family">
                                 <i class="fas fa-arrow-alt-circle-right"></i> Multi- Family
                                 </a>
                                 <a href="javascript:void(0);" class="sldBtn firstForm">
                                 <input type="radio" name="property_type" id="property_type" value ="Condominium">
                                 <i class="fas fa-arrow-alt-circle-right"></i> Condominium
                                 </a>
                                 <a href="javascript:void(0);" class="sldBtn firstForm">
                                 <input type="radio" name="property_type" id="property_type" value ="Townhouse">
                                 <i class="fas fa-arrow-alt-circle-right"></i> Townhouse
                                 </a>
                                 <a href="javascript:void(0);" class="sldBtn firstForm">
                                 <input type="radio" name="property_type" id="property_type" value ="Manufactured Home">
                                 <i class="fas fa-arrow-alt-circle-right"></i> Manufactured Home
                                 </a>
                                 <div class="sliderControl">
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">
                                    <i class="fas fa-arrow-alt-circle-left"></i>
                                    </a>
                                    <a class="carousel-control-next firstBtn disabled" href="javascript:void(0);" data-target="#demo" data-slide="next">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <h4 class="white form-group bot-50">WHAT IS THE PROPERTY USE</h4>
                                 <a href="javascript:void(0);" class="sldBtn mar-12">
                                 <input type="radio" name="property_use" id="id6" value ="Primary Residence">
                                 <i class="fas fa-arrow-alt-circle-right"></i> Primary Residence
                                 </a>
                                 <a href="javascript:void(0);" class="sldBtn mar-12">
                                 <input type="radio" name="property_use" id="id7" value ="Vacation Home">
                                 <i class="fas fa-arrow-alt-circle-right"></i> Vacation Home
                                 </a>
                                 <a href="javascript:void(0);" class="sldBtn mar-12">
                                 <input type="radio" name="property_use" id="id8" value ="Investment">
                                 <i class="fas fa-arrow-alt-circle-right"></i> Investment
                                 </a>
                                 <div class="sliderControl">
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">
                                    <i class="fas fa-arrow-alt-circle-left"></i>
                                    </a>
                                    <a class="carousel-control-next secondtBtn disabled" href="javascript:void(0);" data-target="#demo" data-slide="next">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <h4 class="white bot-50">HOW IS YOUR CREDIT?</h4>
                                 <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12  offset-md-3 offset-sm-3">
                                       <main>
                                          <div class="sldForm" >
                                             <div class="range">
                                                <input name="credit_range" type="range" id="rangeSlider" class="centered" min="300" max="850" step="1" value="300" oninput="updateValue(this.value)" onchange="updateValue(this.value)">
                                                <div class="range-output">
                                                   <output class="output" id="output" name="output" for="range">
                                                   300
                                                   </output>
                                                </div>
                                             </div>
                                       </main>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12  offset-md-3 offset-sm-3">
                                          <a href="javascript:void(0);" class="mrgBtn" data-target="#demo" data-slide="next" id="range11">
                                          <i class="fas fa-arrow-alt-circle-right"></i> Proceed
                                          </a>
                                       </div>
                                    </div>
                                    <div class="sliderControl">
                                       <!-- Left and right controls -->
                                       <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">
                                       <i class="fas fa-arrow-alt-circle-left"></i>
                                       </a>
                                       <!-- thirdBtn disabled-->
                                       <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next" id="next11">
                                       <i class="fas fa-arrow-alt-circle-right"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="carousel-item">
                                    <h4 class="white bot-70">MILITARY SERVICE?</h4>
                                    <a href="javascript:void(0);" class="sldBtn text-center">
                                    <input type="radio" name="military_service" id="id11" value = "Yes">
                                    Yes
                                    </a>
                                    <a href="javascript:void(0);" class="sldBtn text-center">
                                    <input type="radio" name="military_service" id="id12" value = "No">
                                    No
                                    </a>
                                    <a href="javascript:void(0);" class="sldBtn seventhBtn disabled" id="bot-86" data-target="#demo" data-slide="next">
                                    <i class="fas fa-arrow-alt-circle-right"></i> Proceed
                                    </a>
                                    <div class="sliderControl">
                                       <!-- Left and right controls -->
                                       <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">
                                       <i class="fas fa-arrow-alt-circle-left"></i>
                                       </a>
                                       <a class="carousel-control-next seventhBtn disabled" href="javascript:void(0);" data-target="#demo" data-slide="next">
                                       <i class="fas fa-arrow-alt-circle-right"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="carousel-item">
                                    <h4 class="white bot-40">PROPERTY ADDRESS</h4>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <input type="text" name="pAdd" class="form-control dubSel validateFld" placeholder="Property Address">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <input type="text" name="zip" class="form-control dubSel validateFld" onkeypress="return AllowOnlyNumbers(event);" onpaste="return AllowOnlyNumbers(event);" placeholder="Zip Code" maxlength="8">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group"> 
                                          <input type="text" name="city" class="form-control dubSel validateFld" placeholder="City" onkeypress="return /[a-z]/i.test(event.key)">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <input type="text" name="state" class="form-control dubSel validateFld" placeholder="State" onkeypress="return /[a-z]/i.test(event.key)">
                                       </div>
                                       <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                          <a href="javascript:void(0);" class="sldBtn nineBtn disabled" data-target="#demo" data-slide="next">
                                          <i class="fas fa-arrow-alt-circle-right"></i> Proceed
                                          </a>
                                       </div>
                                    </div>
                                    <div class="sliderControl">
                                       <!-- Left and right controls -->
                                       <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">
                                       <i class="fas fa-arrow-alt-circle-left"></i>
                                       </a>
                                       <a class="carousel-control-next nineBtn disabled" href="javascript:void(0);" data-target="#demo" data-slide="next">
                                       <i class="fas fa-arrow-alt-circle-right"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="carousel-item">
                                    <h4 class="white bot-40">CONTACT INFORMATION</h4>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <select class="form-control" name ="contact_time">
                                             <option>Best Time To Contact</option>
                                             <option>ASAP</option>
                                             <option>Afternoon</option>
                                             <option>Morning</option>
                                             <option>Evening</option>
                                          </select>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <input type="text" name="Fname" class="form-control" placeholder="First Name" onkeypress="return /[a-z]/i.test(event.key)">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <input type="text" name="Lname" class="form-control" placeholder="Last Name" onkeypress="return /[a-z]/i.test(event.key)">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <input type="text" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <input type="text" name="phone" class="form-control" onkeypress="return AllowOnlyNumbers(event);" onpaste="return AllowOnlyNumbers(event);" minlength="9" maxlength="13" placeholder="Phone" required>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                          <input type="text" name="al_phone" class="form-control" onkeypress="return AllowOnlyNumbers(event);" onpaste="return AllowOnlyNumbers(event);" minlength="9" maxlength="13" placeholder="Alternate Phone(Optional)">
                                       </div>
                                       <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                         
                                          <input type="submit" class="sldBtn text-center" value="Submit">
                                       </div>
                                    </div>
                                    <div class="sliderControl">
                                       <!-- Left and right controls -->
                                       <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">
                                       <i class="fas fa-arrow-alt-circle-left"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     </form>
                     </div>
                  </div>
                  <div class="bot-30">
                     <h3 class="bot-16">How does a refinance work?</h3>
                     <p>
                        Refinancing is the process of replacing an existing mortgage with a new loan. In a refinance, a borrower will typically have one objective: to reduce their monthly payments, lower their interest rate, or change their loan program.
                     </p>
                     <p>
                        In other situations, borrowers may need access to cash to pay off debt, fund renovations, or some other use. In these cases, a borrower can tap into the equity of their home to obtain a cash-out refinance.
                     </p>
                  </div>
                  <div class="bot-30 featurBox">
                     <h3 class="bot-16">Why Refinance with us?</h3>
                     <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                           <p class="ftrIcon"><i class="far fa-copy"></i></p>
                           <h4 class="font-16">Quick<br>Approval</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                           <p class="ftrIcon"><i class="fas fa-hand-holding-usd"></i></p>
                           <h4 class="font-16">Fast<br>Closing</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                           <p class="ftrIcon"><i class="fas fa-search-dollar"></i></p>
                           <h4 class="font-16">100%<br>Transparency</h4>
                        </div>
                     </div>
                  </div>
                  <div class="bot-30">
                     <h3 class="bot-16">Home Refinance Process</h3>
                     <ul id="progress">
                        <div class="wrapper">
                           <ul class="StepProgress">
                              <li class="StepProgress-item current">
                                 <strong>Loan Application</strong>
                                 This is the first step in refinancing your home loan. By filling out this application, you will provide us with information regarding your current loan, creditworthiness, and financial situation. This will help us determine the best rate and terms of your refinance.
                              </li>
                              <li class="StepProgress-item current">
                                 <strong>Processing</strong>
                                 Once you agree to the terms and conditions, we’ll need to collect all the necessary assets, income, and identification documents. This is important because we’ll submit this all to underwriting!
                              </li>
                              <li class="StepProgress-item current">
                                 <strong>Underwriting</strong>
                                 Underwriting your loan generally takes 2-3 business days.
                              </li>
                              <li class="StepProgress-item current">
                                 <strong>Final Loan Documents</strong>
                                 After we get a clear-to-close, we will send you a final closing document. This will contain all the final numbers. You will review those documents and ensure they are accurate.
                              </li>
                              <li class="StepProgress-item current">
                                 <strong>Schedule Closing</strong>
                                 This is the final stage! Everything is clear and good to go. Now all you have to do is sign the final documents with a closing specialist. Congrats!
                              </li>
                           </ul>
                        </div>
                     </ul>
                     <a href="https://www.blink.mortgage/app/signup/p/fairfaxlending/pawanguptam" target="_blank" class="applyNow btn btn-success">Apply Now</a>
                  </div>
               </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer start -->

        <!-- End -->

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
        <!-- Other Js -->
        <script src="<?php echo asset('public\assets\js\jquery.easing.1.3.js'); ?>"></script>        
        <script src="<?php echo asset('public\assets\js\jquery.stellar.min.js'); ?>"></script>
        <!-- <script src="assets\js\main1.js"></script> -->
        <script src="<?php echo asset('public\assets\js\custom1.js'); ?>"></script>
        <!-- End -->
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
        <script src="<?php echo asset('public\assets\js\contact-form-script.js'); ?>"></script>
        <!-- Mixitup JS -->
        <script src="<?php echo asset('public\assets\js\jquery.mixitup.min.js'); ?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo asset('public\assets\js\custom.js'); ?>"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script>
            $('ul.nav li.dropdown').hover(function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });
        </script>
        <script>
            function scrollWaypointInit( items, trigger ) {
              items.each( function() {
                var element = $(this),
                    osAnimationClass = element.data("animation"),
                    osAnimationDelay = element.attr('data-animation-delay');
             
                element.css({
                    '-webkit-animation-delay':  osAnimationDelay,
                    '-moz-animation-delay':     osAnimationDelay,
                    'animation-delay':          osAnimationDelay
                });
             
                var trigger = ( trigger ) ? trigger : element;
             
                trigger.waypoint(function() {
                    element.addClass('animated').addClass(osAnimationClass);
                },{
                   // triggerOnce: true,
                    offset: '80%'
                });
              });
            }
            
            //Call the init
            
            $(document).ready(function(){
            
            scrollWaypointInit( $('.animateMe') );
            
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
 
      <script type="text/javascript">
        function updateValue(newValue){
             document.getElementById("output").innerHTML = newValue;
            //  $('.thirdBtn').removeClass('disabled');
         }
          function updateValue1(newValue1){ 
              document.getElementById("rangeValue1").value = newValue1 + "%";
              
              if ($('#rangeValue1').val() !== '0%') {
                $('.sixth').removeClass('disabled');
            }
            else {
              $('.sixth').addClass('disabled');
            }
          }
          
         $('.carousel').carousel({
         interval: false
         }); 
         
         function AllowOnlyNumbers(e) {

                e = (e) ? e : window.event;
                var clipboardData = e.clipboardData ? e.clipboardData : window.clipboardData;
                var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
                var str = (e.type && e.type == "paste") ? clipboardData.getData('Text') : String.fromCharCode(key);
            
                return (/^\d+$/.test(str));
            }
            $(document).ready(function(){
            $('#noBtn').click(function(){
                $('.validateFld').addClass('noEdit');
                $('.validateFld').val('');
                $('.nineBtn').removeClass('disabled');
                $('.noText').show();
            });
            $('#yesBtn').click(function(){
                $('.validateFld').removeClass('noEdit');
                $('.nineBtn').addClass('disabled');
                $('.noText').hide();
            });
              
            });
            
             $(document).ready(function(){
                setInterval(function(){
                    $val = document.getElementById("output").innerHTML;
                   // alert($val);
                    if($val <= 300){
                        document.getElementById("next11").style.pointerEvents="none";
                        document.getElementById("next11").style.cursor="default";
                        document.getElementById("range11").style.display="none";
                        
                    }else{
                        document.getElementById("next11").style.pointerEvents="auto";
                        document.getElementById("next11").style.cursor="pointer";
                       document.getElementById("range11").style.display="block";  
                       
                    }
              
                }, 100);
        });
      </script>

    </body>
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/refinance.blade.php ENDPATH**/ ?>