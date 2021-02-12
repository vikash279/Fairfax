<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{!!asset('public\assets\css\bootstrap.min.css')!!}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{!!asset('public\assets\css\boxicons.min.css')!!}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{!!asset('public\assets\css\magnific-popup.css')!!}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{!!asset('public\assets\css\owl.carousel.min.css')!!}">
        <link rel="stylesheet" href="{!!asset('public\assets\css\owl.theme.default.min.css')!!}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{!!asset('public\assets\css\nice-select.css')!!}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{!!asset('public\assets\css\style.css')!!}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{!!asset('public\assets\css\responsive.css')!!}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <title>Fairfax - About Us</title>

        <link rel="icon" type="image/png" href="{!!asset('public\assets\img\home-two\banner-icon.png')!!}">
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
            <a class="navbar-brand" href="{{ url('home')}}">
                <img src="{!!asset('public\assets\img\Fairfax_logo.png')!!}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home_purchase')}}">Purchase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home_refinance')}}">Refinance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('aboutus')}}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">Resources <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('loan-program')}}">Loan Programs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('loan-process')}}">Loan Process</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('faq')}}">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('blog')}}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('location')}}">Location</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact')}}">Contact</a>
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
        <!-- About Us Section -->

        <!-- Service -->
        <section id="service" class="one-service-area two-service-area pb-100 pt-30">
            <div class="container">
                <!--<div class="one-section-title">-->
                <!--    <img src="{!!asset('public\assets\img\home-two\banner-icon.png')!!}" class="topB-icon animateMe" data-animation="rollIn">-->
                <!--    <p class="animateMe" id="who_we" data-animation="fadeInUpBig">Who We Are</p>-->
                <!--    <p id="who_we" class="animateMe" data-animation="fadeInUpBig">We have an experienced team serving the customers for a long time. Our aim is to make sure that our customers are satisfied with the process and have complete transparency.</p>-->
                <!--</div>-->
                <div class="pb-100 pt-30">
                    <div class="row" id="row-rev">
                        <div class="col-md-6 col-xs-12 form-group">
                            <div class="advisor-content" id="c">
                                <h2 class="animateMe" data-animation="fadeInUpBig">Our Mission</h2><br>
                                <p class="animateMe" data-animation="fadeInDownBig">To close your loan within 14 days.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 form-group">
                            <div class="advisor-img animateMe" data-animation="bounceIn" id="d">
                                <img src="{!!asset('public\assets\img\home-one\advisor.jpg')!!}" alt="Advisor">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-30">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 form-group">
                            <div class="advisor-img animateMe" data-animation="bounceIn" id="d">
                                <img src="{!!asset('public\assets\img\home-one\advisor2.jpg')!!}" alt="Advisor">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 form-group one-service-area service-advisor" style="box-shadow:0px 0px;">
                            <div class="advisor-content" id="c">
                                <h2 class="animateMe" data-animation="fadeInUpBig">Loan Programs</h2><br>
                                <ul>
                                    <li class="animateMe" data-animation="fadeInUpBig">
                                        <i class='bx bxs-chevrons-right'></i>
                                        VA
                                    </li>
                                    <li class="animateMe" data-animation="fadeInUpBig">
                                        <i class='bx bxs-chevrons-right'></i>
                                        FHA
                                    </li>
                                    <li class="animateMe" data-animation="fadeInUpBig">
                                        <i class='bx bxs-chevrons-right'></i>
                                        CONV
                                    </li>
                                    <li class="animateMe" data-animation="fadeInUpBig">
                                        <i class='bx bxs-chevrons-right'></i>
                                        USDA
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-100 pt-30">
                    <div class="row" id="row-rev">
                        <div class="col-md-6 col-xs-12 form-group">
                            <div class="advisor-content"id="c">
                                <h2 class="animateMe" data-animation="fadeInUpBig">Our Vision</h2><br>
                                <p class="animateMe" data-animation="fadeInUpBig">To make home financing the most quick, easy, and efficient transaction possible!</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 form-group">
                            <div class="advisor-img animateMe" data-animation="bounceIn" id="d">
                                <img src="{!!asset('public\assets\img\home-one\advisor.jpg')!!}" alt="Advisor">
                            </div>
                        </div>
                    </div>
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
                                    <img src="{!!asset('public\assets\img\Fairfax_logo.png')!!}" alt="Logo">
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
                                        <a href="{{ url('legal')}}">Legal</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('privacy-policy')}}">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('loan-program')}}">Loan Programs</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('loan-process')}}">Loan Process</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('faq')}}">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog')}}">Blog</a>
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
                                        <a href="{{ url('/home')}}" style="color:#ffffff;">
                                           Home 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('home_purchase')}}" style="color:#ffffff;">
                                            Purchase
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('home_refinance')}}" style="color:#ffffff;">
                                            Refinance
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('aboutus')}}" style="color:#ffffff;">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact')}}" style="color:#ffffff;">
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
        <script src="{!!asset('public\assets\js\jquery-3.5.1.min.js')!!}"></script>
        <script src="{!!asset('public\assets\js\popper.min.js')!!}"></script>
        <script src="{!!asset('public\assets\js\bootstrap.min.js')!!}"></script>
        <!-- Magnific Popup JS -->
        <script src="{!!asset('public\assets\js\jquery.magnific-popup.min.js')!!}"></script>
        <!-- Owl Carousel JS -->
        <script src="{!!asset('public\assets\js\owl.carousel.min.js')!!}"></script>
        <!-- Form Ajaxchimp JS -->
        <script src="{!!asset('public\assets\js\jquery.ajaxchimp.min.js')!!}"></script>
        <!-- Form Validator JS -->
        <script src="{!!asset('public\assets\js\form-validator.min.js')!!}"></script>
        <!-- Contact JS -->
        <script src="{!!asset('public\assets\js\contact-form-script.js')!!}"></script>
        <!-- Mixitup JS -->
        <script src="{!!asset('public\assets\js\jquery.mixitup.min.js')!!}"></script>
        <!-- Custom JS -->
        <script src="{!!asset('public\assets\js\custom.js"></script>
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script> -->
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
        
    </body>
</html>