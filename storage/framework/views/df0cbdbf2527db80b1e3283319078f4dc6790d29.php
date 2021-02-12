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
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>Fairfax - Loan Process</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

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
        </style>
    </head>

    <body data-spy="scroll" data-offset="70">
        <!-- Preloader -->
        <!-- <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div> -->
        <!-- End Preloader -->

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
                                <a class="nav-link" href="<?php echo e(url('loan-progress')); ?>">Loan Process</a>
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
        <div id="home" class="three-banner-area two-banner-area loan-banner banner-img two-banner-wrap">
            <!-- <div class="banner-img">
                <img src="assets\img\home-six\banner-shape.png" alt="Banner">
            </div> -->
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-sm-7 col-12">
                                <div class="text text-padding-top">
                        <h2 class="sec-title mb-0 animateMe animated fadeInUp text-white text-left " data-animation="fadeInUp">Loan Process</h2>
                        <p class="animateMe animated fadeInLeft text-white text-left mt-3" style="padding-right:20px;" data-animation="fadeInLeft">Buying or refinancing a home takes time, patience, and a lot of paperwork. We are changing that with innovative technology!</p>
                     </div>
                        <!--        <div class="banner-content">-->
                        <!--    <h1 class="sec-title">Loan Process</h1>-->
                        <!--    <p class="text-white">Buying or refinancing a home takes time, patience, and, traditionally, a lot of paperwork. We’ve dismantled the old mortgage infrastructure and replaced it with innovative technology and far fewer hurdles.</p>-->
                        <!--</div>-->
                            </div>
                            
                            <div class="col-lg-5 col-sm-5 col-12 text-right">
                                <img src="<?php echo asset('public\assets\img\loan-procees-mobile.png'); ?>" alt="mobile" style="width: 365px; object-fit: revert;">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>         
        </div>
        <!-- End Banner -->

        <!-- About Us Section -->

        <!-- Service -->
        <!-- <section id="loanProcess" class="one-service-area two-service-area ptb-100">
            <div class="container">
                <div class="one-section-title">
                    <span class="sub-title">The VA Loan Process.</span>
                    <h2>The starting point on your journey home</h2>                    
                </div>
                <p>For Veterans and military homebuyers, this journey doesn’t look much different than the process for other types of home loans. The big differences come in more when you look at the advantages VA loans offer, from $0 down payment and no mortgage insurance to flexible credit guidelines and the industry’s lowest average interest rates.</p>

            </div>
        </section> -->
        <!-- End Service -->
        <!-- Service -->
        <section id="loanProcess" class="one-service-area two-service-area ptb-100">
            <div class="container">
                <div class="one-section-title">
                    <span class="sub-title">Loan process step by step.</span>
                    <h2>Loan process has five key steps:</h2>
                </div>
                <!-- <div class="timeline">
                  <ul>
                    <span class="default-line"></span>
                    <span class="draw-line"></span>
                      <li>
                        <div class="left">
                            <section>
                                <h3>Determination of Dust Classification (OSHA)</h3>
                                <p>This procedure is used to determination of whether a combustible dust meets the criteria of a Class II dust as defined by OSHA Explosion Severity criteria. Sample size: 200 g.</p>
                            </section>
                        </div> 
                      </li>
                      <li>
                        <div class="right">
                            <section>
                                <h3>Determination of Dust Classification (OSHA)</h3>
                                <p>This procedure is used to determination of whether a combustible dust meets the criteria of a Class II dust as defined by OSHA Explosion Severity criteria. Sample size: 200 g.</p>
                            </section>
                        </div> 
                      </li>
                      <li>
                        <div class="left">
                            <section>
                                <h3>Determination of Dust Classification (OSHA)</h3>
                                <p>This procedure is used to determination of whether a combustible dust meets the criteria of a Class II dust as defined by OSHA Explosion Severity criteria. Sample size: 200 g.</p>
                            </section>
                        </div> 
                      </li>
                      <li>
                        <div class="right">
                            <section>
                                <h3>Determination of Dust Classification (OSHA)</h3>
                                <p>This procedure is used to determination of whether a combustible dust meets the criteria of a Class II dust as defined by OSHA Explosion Severity criteria. Sample size: 200 g.</p>
                            </section>
                        </div> 
                      </li>
                      <li>
                        <div class="left">
                            <section>
                                <h3>Determination of Dust Classification (OSHA)</h3>
                                <p>This procedure is used to determination of whether a combustible dust meets the criteria of a Class II dust as defined by OSHA Explosion Severity criteria. Sample size: 200 g.</p>
                            </section>
                        </div> 
                      </li>
                  </ul>
                </div> -->

                <!-- sss -->
                <div class="wrapper">
                    <section class="block">
                        <div class="each-year">
                            <div class="each-event">
                              <i class="fas fa-clipboard-check"></i>
                              <div class="event-description">  
                                <h4>Step 1</h4>
                                <h2> Loan Application.</h2>
                                <p>
                                Fill out an application over the phone or online! We recommend using our online application. This makes the process quick and easy.</p>
                              </div>
                            </div>
                      
                            <div class="each-event">                                
                                <i class="fas fa-search"></i>
                                <div class="event-description">
                                    <h4>Step 2</h4>
                                    <h2>Processing.</h2>
                                    <p>
                                      Our team will review your application and collect all the necessary documentation. This includes ordering the appraisal and the title work. For the fastest closing, please respond quickly to our team!
                                    </p>
                                </div>
                            </div>
                              
                            <div class="each-event">
                                <i class="fas fa-piggy-bank"></i>
                                <div class="event-description">
                                    <h4>Step 3</h4>
                                    <h2>Underwriting.</h2>
                                    <p>
                                        Your final package will be submitted to underwriting. Underwriting generally takes 1-2 business days. We will try to collect all documents before underwriting to close quicker!
                                    </p>
                                </div>
                            </div>
                              
                            <div class="each-event">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <div class="event-description">
                                    <h4>Step 4</h4>
                                    <h2>Final Loan Documents.</h2>
                                    <p>
                                        After we get a clear-to-close, we will send you a final closing document. This will contain all the final numbers.
                                    </p>
                                </div>
                            </div>
                              
                            <div class="each-event">
                                <i class="fas fa-home"></i>
                                <div class="event-description">
                                    <h4>Step 5</h4>
                                    <h2>Schedule Closing.</h2>
                                  <p>
                                    The Final Stage! Everything is clear and good to go. Now all you have to do is sign the final documents with a closing specialist. Congrats!
                                </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </section>
        <!-- End Service -->

                
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
        <script src="<?php echo asset('public\assets\js\contact-form-script.js'); ?>"></script>
        <!-- Mixitup JS -->
        <script src="<?php echo asset('public\assets\js\jquery.mixitup.min.js'); ?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo asset('public\assets\js\custom.js'); ?>"></script>
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script> -->
        <script>
            // Timeline Scroll Section
            // --------------------------------------------------------------
            // var items = $(".timeline li"),
            // timelineHeight = $(".timeline ul").height(),
            // greyLine = $('.default-line'),
            // lineToDraw = $('.draw-line');

            // // sets the height that the greyLine (.default-line) should be according to `.timeline ul` height

            // // run this function only if draw line exists on the page
            // if(lineToDraw.length) {
            //   $(window).on('scroll', function () {

            //     // Need to constantly get '.draw-line' height to compare against '.default-line'
            //     var redLineHeight = lineToDraw.height(),
            //     greyLineHeight = greyLine.height(),
            //     windowDistance = $(window).scrollTop(),
            //     windowHeight = $(window).height() / 2,
            //     timelineDistance = $(".timeline").offset().top;

            //     if(windowDistance >= timelineDistance - windowHeight) {
            //       line = windowDistance - timelineDistance + windowHeight;

            //       if(line <= greyLineHeight) {
            //         lineToDraw.css({
            //           'height' : line + 20 + 'px'
            //         });
            //       }
            //     }

            //     // This takes care of adding the class in-view to the li:before items
            //     var bottom = lineToDraw.offset().top + lineToDraw.outerHeight(true);
            //     items.each(function(index){
            //       var circlePosition = $(this).offset();

            //       if(bottom > circlePosition.top) {             
            //         $(this).addClass('in-view');
            //       } else {
            //         $(this).removeClass('in-view');
            //       }
            //     }); 
            //   });
            // }

        </script>

        <script type="text/javascript">
            var $element=$('.each-event, .title');
                var $window = $(window);
                $window.on('scroll resize', check_for_fade);
                $window.trigger('scroll');
                function check_for_fade() { 
                    var window_height = $window.height();
                    
                    $.each($element, function (event) {
                        var $element = $(this);
                        var element_height = $element.outerHeight();
                        var element_offset = $element.offset().top;
                        space = window_height - (element_height + element_offset -$(window).scrollTop());
                        if (space < 60) {
                            $element.addClass("non-focus");
                        } else {
                            $element.removeClass("non-focus");
                        }
                 
                    });
                };
        </script>
    </body>
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/loan_process.blade.php ENDPATH**/ ?>