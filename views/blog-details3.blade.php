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

        <title>Fairfax - Contact Us</title>

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
                                <a class="nav-link" href="{{ url('loan-progress')}}">Loan Process</a>
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
        <div id="home" class="three-banner-area two-banner-area blog-detail banner-img two-banner-wrap">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h1>Blog Details</h1>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        <!-- End Banner -->

        <!-- Blog Details Start -->
        <div class="one-among-area two-among-area ptb-100">
            <div class="container">
                <div class="one-section-title">
                    <span class="sub-title">25 September 2020</span>
                    <h2>How and Why to Refinance Your Mortgage</h2>
                </div>
                <div class="blog-image">
                    <img src="{!!asset('public\assets\img\blog-3.jpg')!!}" class="imageDetails">
                </div>
                <h4>Definition of mortgage refinance</h4>
                <p>
                    A mortgage refinance replaces your current home loan with a new one. Often people refinance to reduce the interest rate, cut monthly payments or tap into their home’s equity. Others refinance a home to pay off the loan faster, get rid of FHA mortgage insurance or switch from an adjustable-rate to a fixed-rate loan.
Let’s consider some important initial aspects of refinancing a mortgage — and then run through the process step by step.
                </p>
                <h4>How does refinancing work?</h4>
                <p>
                   When you buy a home, you get a mortgage to pay for it. The money goes to the home seller. When refinancing a home, you get a new mortgage. Instead of going to the home’s seller, the new mortgage pays off the balance of the old home loan.
Mortgage refinancing requires you to qualify for the loan, just as you had to meet the lender’s requirements for the original mortgage. You file an application, go through the underwriting process and go to closing, as you did when you bought the home.
                </p>
                <h4>Why and when you should refinance a home</h4>
                <p>
                    Before you begin, consider why you want to refinance your home loan. Your goal will guide the mortgage refinancing process from the beginning.
                    Reduce the monthly payment.
When your goal is to pay less every month, you can refinance into a loan with a lower interest rate. Another way to reduce the monthly payment is to extend the loan term — say, from 15 years to 30. The drawback to extending the term is that you pay more interest in the long run.

Tap into equity.
When you refinance to borrow more than you owe on your current loan, the lender gives you a check for the difference. This is called a cash-out refinance. People often get a cash-out
refinance and a lower interest rate at the same time.

Pay off the loan faster.
When you refinance from a 30-year mortgage into a 15-year loan, you pay off the loan in half the time. As a result, you pay less interest over the life of the loan.
There are pros and cons to a 15-year mortgage. One downside is that the monthly payments usually go up.

Get rid of FHA mortgage insurance.
Private mortgage insurance on conventional home loans can be canceled, but the Federal Housing Administration mortgage insurance premium you pay on FHA loans cannot in many cases. The only way to get rid of FHA mortgage insurance premiums is to sell the home or refinance the loan when you have accumulated enough equity. Estimate your home value, then subtract your mortgage balance to calculate your home equity.

Switch from an adjustable- to a fixed-rate loan.
Interest rates on adjustable-rate mortgages can go up over time. Fixed-rate loans stay the same. Refinancing from an ARM
to a fixed-rate loan provides financial stability when you prefer steady payments.
                </p>
                <h4>Refinance into another 30-year home loan?</h4>
                <p>
                   Reducing your monthly payment is usually the goal. And it’s tempting to refinance with another full 30-year term to lower your mortgage payment. But that means you’ll end up taking even longer to pay off your house and paying more interest over the long run.

Instead, you can ask the lender to match your remaining loan term. For example, if you’ve had a 30-year loan for three years, you have 27 years remaining. You can tell the lender to set up the payments so you repay the refinanced loan over 27 years instead of 30. This way, you reduce the interest you pay over the life of the loan. This is mortgage amortization at
work.
 
                </p>
            </div>
        </div>
        <!-- Blog Details Close -->

        <!-- Recent Blog Start -->
        <div class="one-among-area two-among-area pb-100">
            <div class="container">
                <div class="one-section-title">
                    <!-- <span class="sub-title">WHY CHOOSE US</span> -->
                    <h2>Recent Blog</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="among-item">
                            <div class="among-top">
                                <img src="{!!asset('public\assets\img\home-two\among1.png')!!}" alt="Among">
                                <div class="among-icon">
                                    <i class='bx bxs-badge-dollar'></i>
                                </div>
                            </div>
                             <div class="among-bottom">
                                <h3>The Benefits of an Efficient Home</h3>
                                <p>Summer weather has already turned up the heat </p>
                                <a href="{{ url('blogdetails1')}}">
                                    READ MORE
                                    <i class="bx bx-right-arrow-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="among-item">
                            <div class="among-top">
                                <img src="{!!asset('public\assets\img\home-two\among2.png')!!}" alt="Among">
                                <div class="among-icon">
                                    <i class='bx bx-bulb'></i>
                                </div>
                            </div>
                            <div class="among-bottom">
                                <h3>Options For Non-Standard Homebuyers</h3>
                                <p>For many, owning a home is the pinnacle of what is considered the American Dream.</p>
                                <a href="{{ url('blogdetails2')}}">
                                    READ MORE
                                    <i class="bx bx-right-arrow-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="among-item">
                            <div class="among-top">
                                <img src="{!!asset('public\assets\img\home-two\among3.png')!!}" alt="Among">
                                <div class="among-icon">
                                    <i class='bx bx-money'></i>
                                </div>
                            </div>
                            <div class="among-bottom">
                                <h3>How and Why to Refinance Your Mortgage</h3>
                                <p>Definition of mortgage refinance </p>
                                <a href="{{ url('blogdetails3')}}">
                                    READ MORE
                                    <i class="bx bx-right-arrow-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Blog Close -->

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