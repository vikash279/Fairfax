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
                    <span class="sub-title">16 September 2020</span>
                    <h2>Options For Non-Standard Homebuyers</h2>
                </div>
                <div class="blog-image">
                    <img src="<?php echo asset('public\assets\img\blog-2.jpg'); ?>" class="imageDetails">
                </div>
                <p>
                    For many, owning a home is the pinnacle of what is considered the American Dream. You graduate high school, then attend college or a vocational training, and eventually set off into a career. And whether that career is white- or- blue-collar, you know you have really “made it” when you own your own home. Individuals who find their way to homeownership via this route are what we consider to be your more “standard” homebuyers. Meaning, they likely have a well-established history of steady employment and income, and an above-average credit score.
And while these standard homebuyers will have less obstacles before them on their way to homeownership, there are also options for people who are considered “nonstandard” buyers. What is a nonstandard buyer? These are buyers who may be faced with negative equity in their home, who can’t afford a down payment, or who have low or no credit.
If you find yourself in one of these nonstandard situations, fear not. Here are some options for you in your quest to homeownership.
                </p>
                <h4>Negative Equity</h4>
                <p>
                   If you’ve ever heard anyone say they’re “upside down” on a home loan, it means they have negative equity. In short, they owe more on the loan than the market value of the house. (Inversely, someone with positive equity could sell their home for more money than they owe on their loan.)
Homebuyers who aren’t able to make a substantial down payment are more at risk to find themselves in this situation, while those who do make a substantial down payment take possession of their home with almost immediate equity. (On a side note: while the aforementioned is true overall, a very real fact is that no one is ever in absolute control of their home’s value, as home values can take an unfortunate dive in times of economic downturn or turmoil.)
However, just because you find yourself with negative equity in your home does not mean you can’t sell your home and purchase another. If you have any cash savings, you can tap into that resource as an option to help increase your equity.
                </p>
                <h4>Little to No Down Payment</h4>
                <p>
                   Home ownership is a staple of our economy – which is why government agencies and lenders have worked to expand the opportunity of homeownership to more people over the years. In the past, one of the biggest roadblocks for homebuyers when it came to a down payment was the requirement that they be made through conventional home loans. These loans often required a 20% down payment – and when homes often range in the hundreds of thousands of dollars, that requirement proved an obstacle impossible to surmount for many.
For buyers who have enough income to make their monthly mortgage payments, but don’t have a down payment saved up, there are a few 100% financing options available-minimum credit requirements do apply.
Other government-backed options include USDA loans for borrowers in rural areas, and VA loans for veterans. While both of these programs do have income requirements, they do not require a down payment to be approved, neither do they have a minimum credit score requirement. And for buyers who can afford a small down payment, there is the Federal Housing Administration’s loan program, which requires qualified buyers to only put down 3.5%.
There are also state-sponsored down payment assistance programs designed to aid qualified borrowers who may not have enough for a down payment, or who don't qualify for zero-down payment loans. Programs and requirements vary by state. 
                </p>
                <h4>Poor or No Credit</h4>
                <p>
                  Credit scores have a way of being the elephant in the room. And in fact, most people have less-than-perfect credit scores. Despite what some people think, a credit score does not reflect amount of income or wealth, but rather it helps gauge the potential likelihood of an individual repaying their debts. Thus, even if you can afford a down payment, if you have a low credit score or no score at all, coming into a home loan can be a challenge, to put it mildly. However, it’s not impossible.
One recourse can be the FHA loan program, which offers fixed-rate mortgages for buyers who have a credit score of 620. These loans do require a 3.5% down payment from FHA borrowers with a credit score over 620.
If you’ve always wanted to buy a home, but find yourself challenged with any of the situations mentioned above, hopefully you realize now that you might have more options than you thought. Homeownership is an experience that ideally everyone who wishes to should get the chance to enjoy, and we love it when we can help make those dreams come true. If you have any questions about your mortgage options, we will gladly answer them for you.  
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
                                <img src="<?php echo asset('public\assets\img\home-two\among1.png'); ?>" alt="Among">
                                <div class="among-icon">
                                    <i class='bx bxs-badge-dollar'></i>
                                </div>
                            </div>
                             <div class="among-bottom">
                                <h3>The Benefits of an Efficient Home</h3>
                                <p>Summer weather has already turned up the heat </p>
                                <a href="<?php echo e(url('blogdetails1')); ?>">
                                    READ MORE
                                    <i class="bx bx-right-arrow-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="among-item">
                            <div class="among-top">
                                <img src="<?php echo asset('public\assets\img\home-two\among2.png'); ?>" alt="Among">
                                <div class="among-icon">
                                    <i class='bx bx-bulb'></i>
                                </div>
                            </div>
                            <div class="among-bottom">
                                <h3>Options For Non-Standard Homebuyers</h3>
                                <p>For many, owning a home is the pinnacle of what is considered the American Dream.</p>
                                <a href="<?php echo e(url('blogdetails2')); ?>">
                                    READ MORE
                                    <i class="bx bx-right-arrow-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="among-item">
                            <div class="among-top">
                                <img src="<?php echo asset('public\assets\img\home-two\among3.png'); ?>" alt="Among">
                                <div class="among-icon">
                                    <i class='bx bx-money'></i>
                                </div>
                            </div>
                            <div class="among-bottom">
                                <h3>How and Why to Refinance Your Mortgage</h3>
                                <p>Definition of mortgage refinance </p>
                                <a href="<?php echo e(url('blogdetails3')); ?>">
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
                                 <p>We are a digital mortgage lender focussed on changing the home financing industry. We pride ourselves on transparent, efficient, and high quality services!.</p>
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
        
    </body>
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/blog-details2.blade.php ENDPATH**/ ?>