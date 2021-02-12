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
                    <span class="sub-title">02 December 2020</span>
                    <h2>What are Mortgage Points?</h2>
                </div>
                <div class="blog-image">
                    <img src="{!!asset('public\assets\img\blog-6.jpg')!!}" class="imageDetails">
                </div>
                <p>
                  The mortgage process is full of unfamiliar terms for most buyers. Closing. PMI. Appraisal. Underwriting. The list goes on and each, unfortunately, does require a bit of explaining to better understand. But one thing we haven’t fully touched on is Mortgage Points. So, if you’ve ever found yourself asking, “What are mortgage points?” well, hopefully, this article will answer that question for you. And once you have a better understanding of the process, you should have more confidence during a real estate transaction.
                </p>
                <p>
                    Gain home equity by paying sit amet seeturlit sed dolor se equity. 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h4>Points Are Good</h4>
                <p>
                    Points are a good thing. Especially if you’re in a position to take advantage of them. Basically, one point is 1% of the loan amount. So, if you’re borrowing $100,000, one mortgage point would be $1,000. Two points is $2,000. Three points, $3,000, and so on. You can use points as a tradeoff for interest on your mortgage. What does that mean? It means when you buy points, you’ll receive a slightly lower interest rate on your mortgage than if you didn’t buy points. To be clear, each mortgage point you buy doesn’t necessarily equal one full interest percent saved. It may take two points to lower your interest rate .25%. Regardless, while points will cost you more at closing, they’ll actually save you money in interest during the life of the loan. A variety of factors play into this, so consulting with your mortgage loan originator would be the best way to get a clearer picture of what this looks like for you.
                </p>
                <h4>Paid at Closing</h4>
                <p>
                    As we mentioned above, buying points will cost you most at closing, because they add to your closing costs. So, if you bought five points on a $100,000 mortgage, you’d owe an additional $5,000 at closing. Again, you’ll receive a reduced interest rate on the mortgage, saving you money over time.
                </p>
                <h4>Points Work Both Ways</h4>
                <p>
                    One thing most people don’t know about points is that they work both ways. Meaning, the lender can offer you a lender’s credit to help lower your closing costs in exchange for a slightly higher interest rate. It’s simply another tradeoff: lower closing costs for a slightly higher monthly payment.
                </p>
                <h4>What’s Right for You?</h4>
                <p>
                    This wholly depends on your own financial situation. If you are in a position that allows you to purchase points in exchange for paying less interest, then buying points is a great option – one that will save you money over time. But, if you can’t afford the points and need help with closing costs, accepting a lender's credit in exchange for a slightly higher interest rate can benefit you. Also, nothing says you have to buy points or take a lender’s credit.
Well, that all seems clear enough, right? Mortgage points really aren’t that complicated and can be incredibly beneficial to homebuyers. And whether or not you should buy them, again depends on your financial situation.
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
                                    <img src="assets\img\Fairfax_logo.png" alt="Logo">
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