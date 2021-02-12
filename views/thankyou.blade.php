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

        <!-- Other css -->

        <!-- <link rel="stylesheet" href="assets\css\style1.css"> -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="{!!asset('public\assets\css\responsive1.css')!!}">
        <link rel="stylesheet" href="{!!asset('public\assets\css\custom1.css')!!}">
        <link rel="stylesheet" href="{!!asset('public\assets\css\cus_responsive1.css')!!}">
        <!-- Close -->

        <title>Fairfax Lending | Purchase Home</title>

        <link rel="icon" type="image/png" href="{!!asset('public\assets\img\home-two\banner-icon.png')!!}">
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
      <!-- Close header section -->
      <!-- Body Start -->
      <div class="content_body pad-50">
         <div class="container">
            <!-- Thank you message -->
            <div class="thnkDiv">
               <img src="https://icon-library.com/images/checked-icon/checked-icon-6.jpg" class="thnk_img">
               <p>
                  Thank you for submitting this information! A representative will reach out shortly.
               </p>
            </div>
            <!-- End -->
            <!-- <h2 class="text-center bot-10 red">Thank you for inquiring with fairfaxlending.com</h2>
               <h3 class="text-center bot-30">Next Step: We'll be calling you shortly. Please stay by your Phone</h3>
               
               
               
               <h4 class="red text-center bot-30"><u>If you inquired about a VA Purchase:</u> <span>We will help you</span></h4>
               
               
               
               <ul class="text-center bot-30">
               
               
               
                   <li>
               
               
               
                       <p>Check your Eligibility for a VA Home Loan</p>
               
               
               
                   </li>
               
               
               
                   <li>
               
               
               
                       <p>Calculate how much you Qualify for</p>
               
               
               
                   </li>
               
               
               
                   <li>
               
               
               
                       <p>Answer any questions you may have</p>
               
               
               
                   </li>
               
               
               
                   <li>
               
               
               
                       <p>Discuss Rate and Term options</p>
               
               
               
                   </li>
               
               
               
               </ul>
               
               
               
               <h4 class="red text-center bot-30"><u>If you inquired about a VA Refinance:</u> <span>We will help you</span></h4>
               
               
               
               <ul class="text-center">
               
               
               
                   <li>
               
               
               
                       <p>Calculate your New Monthly payment</p>
               
               
               
                   </li>
               
               
               
                   <li>
               
               
               
                       <p>Answer any questions you may have</p>
               
               
               
                   </li>
               
               
               
                   <li>
               
               
               
                       <p>Discuss Rates and Savings</p>
               
               
               
                   </li>
               
               
               
                   <li>
               
               
               
                       <p>Check if you Qualify</p>
               
               
               
                   </li>
               
               
               
               </ul>
               
               
               
               <div class="text-center">
               
               
               
                   <img src="img/thankers.jpg" alt="thanks to you" class="img-responsive autoM">
               
               
               
               </div> -->
         </div>
      </div>
      
        <script src="{!!asset('public\assets\js\jquery-3.5.1.min.js')!!}"></script>
        <script src="{!!asset('public\assets\js\popper.min.js')!!}"></script>
        <!-- Other Js -->
        <script src="{!!asset('public\assets\js\jquery.easing.1.3.js')!!}"></script>        
        <script src="{!!asset('public\assets\js\jquery.stellar.min.js')!!}"></script>
        <!-- <script src="assets\js\main1.js"></script> -->
        <script src="{!!asset('public\assets\js\custom1.js')!!}"></script>
        <!-- End -->
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
        <script src="{!!asset('public\assets\js\custom.js')!!}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
        
        <script type="text/javascript">
         function myFunction() {
             var x = document.getElementById("myInput");
             if (x.type === "password") {
               x.type = "text";
             } else {
               x.type = "password";
             }
           }
      </script>
   </body>
</html>