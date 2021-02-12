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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!-- Close -->

        <title>Fairfax Lending | Refinance Home</title>

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

        <!-- Banner -->
        <div id="home" class="loan-program" style="overflow:hidden;">
            <!-- <div class="banner-img">
                <img src="assets\img\home-six\banner-shape.png" alt="Banner">
            </div> -->
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12 p-0">
                                <img src="{!!asset('public\assets\img\loan-program-left.png')!!}" alt="">
                            </div>
                            
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="text text-padding-top">
                                <br><br><br>    
                                <h2 class="sec-title mb-0 animateMe animated fadeInUp text-white mb-3" data-animation="fadeInUp">Loan Programs</h2>
                                <!--<p class="animateMe animated fadeInLeft text-white" data-animation="fadeInLeft"></i>Accelerating home ownership</p>-->
                                
                                <!--<p class="animateMe animated fadeInLeft text-white" data-animation="fadeInLeft"></i>Impacting a billion lives</p>-->
                                
                                <!--<p class="animateMe animated fadeInLeft text-white" data-animation="fadeInLeft"></i>Educating first time home buyers</p>-->
                             </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>         
        </div>
        <!-- End Banner -->
        <!-- Body Start -->
      <div class="content_body pad-50 mob">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <!--<img src="img/19.png" class="ImgBg img-responsive">-->
                  <div class="boxContent h-174">
                      <h3 class="red">Fixed-Rate Mortgages (FRM)</h3>
                      <p class="">
                         The most common type of loan option, the traditional fixed-rate mortgage includes monthly principal and interest payments which never change during the loan’s lifetime.
                      </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <div class="boxContent h-174">
                      <h3 class="red">Adjustable-Rate Mortgages (ARM)</h3>
                      <p class="">
                         Adjustable-rate mortgages include interest payments that shift during the loan’s term, depending on current market conditions. Typically, these loans carry a fixed-interest rate for a set period of time before adjusting.
                      </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                 <div class="boxContent h-152">
                  <h3 class="red">Hybrid ARMs</h3>
                  <p class="">
                     Hybrid ARM mortgages combine features of both fixed-rate and adjustable-rate mortgages and are also known as fixed-period ARMs.
                  </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <!--<img src="img/Adjustable-Rate Mortgages.png" class="ImgBg img-responsive">-->
                  <div class="boxContent h-152">
                      <h3 class="red">FHA Loans</h3>
                      <p class="">
                         FHA home loans are mortgages that are insured by the Federal Housing Administration (FHA), allowing borrowers to get low mortgage rates with a minimal down payment.
                      </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <!--<img src="img/Hybrid.png" class="ImgBg img-responsive">-->
                 <div class="boxContent">
                      <h3 class="red">Conventional loan</h3>
                      <p class="">
                         Conventional loans are extremely common and can be either a fixed-rate mortgage
                         or an adjustable-rate mortgage.
                      </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <div class="boxContent h-196">
                      <h3 class="red">Interest Only Mortgages</h3>
                      <p class="">
                         Interest Only mortgages are home loans in which borrowers make monthly payments solely toward the interest accruing on the loan, rather than the principle, for a specified period of time.
                      </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <div class="boxContent h-152">
                      <h3 class="red">Components of an ARM</h3>
                      <p class="">
                         Prior to choosing a home loan, you should know the advantages and risks of adjustable-rate mortgages to make an informed, prudent decision.
                      </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <div class="boxContent h-152">
                  <!--<img src="img/FHA_Loan.png" class="ImgBg img-responsive">-->
                      <h3 class="red">Commonly Used Indexes for ARMs</h3>
                      <p class="">
                         This article includes a list of the most commonly used indexes by ARM lenders that affect ARM mortgage rates.
                      </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                   <div class="boxContent">
                      <!--<img src="img/VA Home Loan.png" class="ImgBg img-responsive">-->
                      <h3 class="red">Balloon Mortgages</h3>
                      <p class="">
                         Balloon mortgages include a note rate that remains fixed initially, and the principal balance becomes due at the end of the mortgage term.
                      </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                   <div class="boxContent">
                      <h3 class="red">Reverse Mortgages</h3>
                      <p class="">
                         Reverse Mortgages allow senior homeowners to convert a portion of their home equity into cash while still living in the home.
                      </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                   <div class="boxContent">
                      <h3 class="red">Graduated Payment Mortgages</h3>
                      <p class="">
                         Graduated Payment Mortgages are loans in which mortgage payments increase annually for a predetermined period of time (e.g. five or ten years) and become fixed for the remaining duration of the loan.
                      </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <!--<img src="img/loan-program.png" class="ImgBg img-responsive">-->
                  <div class="boxContent">
                      <h3 class="red">What kind of loan program is best for you?</h3>
                      <p class="">
                         Should you get a fixed-rate or adjustable-rate mortgage? A conventional loan or a government loan? Deciding which mortgage product is best for you will depend largely on your unique circumstances, and there is no one correct answer.
                      </p>
                  </div>
               </div>
            </div>
            <!--<div class="row">-->
            <!--   <div class="col-md-6 col-sm-6 col-xs-12 form-group">-->
                  <!--<img src="img/Components.png" class="ImgBg img-responsive">-->
            <!--      <div class="boxContent">-->
            <!--          <h3 class="red">Conventional loan</h3>-->
            <!--          <p class="">-->
            <!--             Conventional loans are extremely common and can be either a fixed-rate mortgage-->
            <!--             or an adjustable-rate mortgage.-->
            <!--          </p>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--</div>-->
         </div>
      </div>
      <!-- Body content close -->

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
        <script src="{!!asset('public\assets\js\custom.js')!!}"></script>
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script> -->
        
    </body>
</html>