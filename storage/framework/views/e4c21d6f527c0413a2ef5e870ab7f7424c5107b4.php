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

        <title>Fairfax Lending | FAQ</title>

        <link rel="icon" type="image/png" href="<?php echo asset('public\assets\img\home-two\banner-icon.png'); ?>">
        
    </head>

    <body data-spy="scroll" data-offset="70">
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
        <div id="home" class="three-banner-area two-banner-area faq-banner banner-img two-banner-wrap">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h1>FAQ's</h1>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        <!-- End Banner -->

        <!-- FAQ's Section Start -->
        <div class="content_body pad-50 mob">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="bot-30 box gray">
                        <a href="https://fairfaxlending.youcanbook.me/" target="_blank" class="btn btn-success cusH3 form-group">Book An Appointment</a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="one-section-title three-section-title">
                        <h2 class="text-left">Frequently Asked Questions</h2>
                    </div>
                     <h4 class="bot-10">When should I refinance?</h4>
                     <p class="bot-30">
                        It's generally a good time to refinance when mortgage rates are 2% lower than the current rate on your loan. It may be a viable option even if the interest rate difference is only 1% or less. Any reduction can trim your monthly mortgage payments.
                     </p>
                     <h4 class="bot-10">What are the points?</h4>
                     <p class="bot-30">
                        A point is a percentage of the loan amount, or 1-point = 1% of the loan, so one point on a $100,000 loan is $1,000. Points are costs that need to be paid to a lender to get mortgage financing under specified terms. Discount points are fees used to lower the interest rate on a mortgage loan by paying some of this interest up-front. Lenders may refer to costs in terms of basic points in hundredths of a percent, 100 basis points = 1 point, or 1% of the loan amount.
                     </p>
                     <h4 class="bot-10">Should I pay points to lower my interest rate?</h4>
                     <p class="bot-30">
                        Yes, if you plan to stay in the property for a least a few years. Paying discount points to lower the loan's interest rate is a good way to lower your required monthly loan payment, and possibly increase the loan amount that you can afford to borrow. However, if you plan to stay in the property for only a year or two, your monthly savings may not be enough to recoup the cost of the discount points that you paid up-front.
                     </p>
                     <h4 class="bot-10">What is an APR?</h4>
                     <p>
                        The annual percentage rate (APR) is an interest rate reflecting the cost of a mortgage as a yearly rate. This rate is likely to be higher than the stated note rate or advertised rate on the mortgage because it takes into account points and other credit costs. The APR allows homebuyers to compare different types of mortgages based on the annual cost for each loan. The APR is designed to measure the "true cost of a loan." It creates a level playing field for lenders. It prevents lenders from advertising a low rate and hiding fees.
                     </p>
                     <p>
                        The APR does not affect your monthly payments. Your monthly payments are strictly a function of the interest rate and the length of the loan.
                     </p>
                     <p>
                        Because APR calculations are affected by the various different fees charged by lenders, a loan with a lower APR is not necessarily a better rate. The best way to compare loans is to ask lenders to provide you with a loan estimate of their costs on the same type of program (e.g. 30-year fixed) at the same interest rate. You can then delete the fees that are independent of the loan such as homeowners' insurance, title fees, escrow fees, attorney fees, etc. Now add up all the loan fees. The lender that has lower loan fees has a cheaper loan than the lender with higher loan fees.
                     </p>
                     <p>The following fees are generally included in the APR:</p>
                     <ul class="empUl">
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Points - both discount points and origination points.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Pre-paid interest. The interest paid from the date the loan closes to the end of the month.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Loan-processing fee.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Underwriting fee.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Document-preparation fee.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Private mortgage-insurance.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Escrow fee.
                           </p>
                        </li>
                     </ul>
                     <p>
                        The following fees are normally not included in the APR:
                     </p>
                     <ul class="empUl bot-30">
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Title or abstract fee.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Borrower Attorney fee.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Home-inspection fees.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Recording fee.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Transfer taxes.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Credit report.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Appraisal fee.
                           </p>
                        </li>
                     </ul>
                     <h4 class="bot-10">What does it mean to lock the interest rate?</h4>
                     <p class="bot-30">
                        Mortgage rates can change from the day you apply for a loan to the day you close the transaction. If interest rates rise sharply during the application process it can increase the borrower’s mortgage payment unexpectedly. Therefore, a lender can allow the borrower to "lock-in" the loan’s interest rate guaranteeing that rate for a specified time period, often 30-60 days, sometimes for a fee.
                     </p>
                     <h4 class="bot-10">What documents do I need to prepare for my loan application?</h4>
                     <p>
                        Below is a list of documents that are required when you apply for a mortgage. However, every situation is unique and you may be required to provide additional documentation. So, if you are asked for more information, be cooperative, and provide the information requested as soon as possible. It will help speed up the application process.
                     </p>
                     <h3 class="bot-10">Your Property</h3>
                     <ul class="empUl">
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Copy of signed sales contract including all riders.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Verification of the deposit you placed on the home.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Names, addresses, and telephone numbers of all realtors, builders, insurance agents, and attorneys involved.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Copy of Listing Sheet and legal description if available (if the property is a condominium please provide condominium declaration, by-laws, and most recent budget).
                           </p>
                        </li>
                     </ul>
                     <h3 class="bot-10">Your Income</h3>
                     <ul class="empUl">
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Copies of your pay-stubs for the most recent 30-day period and year-to-date.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Copies of your W-2 forms for the past two years.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Names and addresses of all employers for the last two years.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Letter explaining any gaps in employment in the past 2 years.
                           </p>
                        </li>
                        <li>
                           <p>
                            <i class="bx bxs-chevrons-right"></i>
                              Work visa or green card (copy front & back).
                           </p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
        </div>
        <!-- FAQ's Section Close -->
      

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
        
    </body>
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/faq.blade.php ENDPATH**/ ?>