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
                    <span class="sub-title">03 November 2020</span>
                    <h2>Do I Need a Real Estate Agent?</h2>
                </div>
                <div class="blog-image">
                    <img src="<?php echo asset('public\assets\img\blog-4.jpg'); ?>" class="imageDetails">
                </div>
                <p>
                    It’s a question as old as the real estate business. But it’s not asked as often as you might think, because most people do use a real estate agent. In fact, a study conducted in 2018 found that 90% of consumers use an agent when selling or buying a home. And we’re not surprised, as we would encourage most people to put an agent to work for them through what is often a time-consuming and complicated process.
However, buying or selling a home is not impossible on your own – and may make more sense, depending on your situation. But there are some definite considerations you will want to bear in mind before taking that leap, which we will go over later.”
With that being said, if you’re thinking about going it on your own, or you’ve always wondered what the pros and cons are of using an agent, we’ve got you covered in this article.
                </p>
                <h4>Advantages</h4>
                <p>
                    There are so many we don’t know where to start. But the biggest one is likely this: having access to the Multiple Listing Service, aka the MLS. This is an online directory to which only agents and brokers have access. It’s a giant list of verified listings and includes nearly every home that is on the market. Having your home listed on the MLS means there are far more people that will see it. And if you are searching for a home, having access to the MLS means you won’t run into some of the uncertain listings typically found on free websites.
Another advantage is that an agent has extensive knowledge and experience with the entire process. They’re prepared to help you negotiate and better understand how to accept or submit an offer, along with all of the necessary paperwork. Plus, they’ll also be able to guide you through the closing process, which can be a beast of its own.
Agents also have more insights into the market itself. Meaning, their knowledge of comps and the latest trends puts them in a position to help you get the most money out of your purchase or sale. And when it comes to showing your home to prospective buyers, they’ll handle all of the details for you – which is especially helpful if you’re planning on being out of town while your home is being shown.
                </p>
                <h4>Disadvantages</h4>
                <p>
                    For starters, you won’t have any of the advantages discussed above. But frankly, one of the biggest disadvantages of not using an agent is the time you’ll need to commit to buying or selling your home. This is especially true when selling, as you’ll have to put all of the work in to posting online or wherever you decide to list your home. Also, you will not be able to list on the MLS, which will significantly reduce your exposure to potential buyers.
We just said this, but we’re going to emphasize it again: Time. You’re going to have to spend a lot of time working to try and sell your home without an agent. Buyers rarely buy a home sight unseen. So, you’ll stay busy fielding phone calls and emails at all hours of the day and night to schedule viewings and answer any questions interested buyers have about your property. This typically becomes a very disruptive and potentially frustrating influence on your personal time.
Some other disadvantages you may experience could involve a lack of knowledge of home selling best practices that an agent will know, such as the best ways to stage your home and property in the most efficient and effective way for the market. You may also find that potential buyers exhibit less confidence about the prospect of considering your home because you don’t have an agent; and you may even experience more pressure from a buyer’s agent during negotiations.
We’re not saying it’s impossible to buy or sell your home on your own. Many people have. But it’s only advisable if you’re confident you know what you’re doing and you have the time to make it happen (or maybe you were a real estate agent in a past life).
                </p>
                <h4>Final Answer</h4>
                <p>
                    To use an agent or not to use an agent: that is the question. And the answer really comes down to your particular circumstances, based on the factors described above, and more. Either way, we are able to help evaluate your mortgage options, and steer you in the best possible direction to get the most house for your money, or the most money for your house.
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
                                
                                <p>Fairfax Lending is dedicated to providing a superior digital mortgage experience through one word: Transparency.</p>
                                <p>We have been helping customers afford the home of their dreams for many years and we love what we do.</p>
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
                                        <i class='bx bx-message-square-planet'></i>
                                        <a href="fax:703-349-0343">703-349-0343</a>
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
                                    <li>
                                        <a href="https://nmlsconsumeraccess.org/" target="_blank" style="color:#ffffff;">Company NMLS: 1692413</a>
                                    </li>
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
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/blog-details4.blade.php ENDPATH**/ ?>