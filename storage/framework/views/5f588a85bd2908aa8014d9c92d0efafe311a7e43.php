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
      <title>Fairfax Lending | Location</title>
      <link rel="icon" type="image/png" href="<?php echo asset('public\assets\img\home-two\banner-icon.png'); ?>">
      <style type="text/css">
         /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
         #map {
         height: 100%;
         }
      </style>
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
      <div class="ptb-100">
         <!--<div id="map">-->
         <!--    <img src="<?php echo asset('public\assets\img\home-two\banner-icon.png'); ?>">-->
         <!--</div>-->
         <div>
            <img src="<?php echo asset('public\assets\img\usmap11.jpeg'); ?>" class="imageDetails" height="50%">
         </div>
         <div class="clearfix"></div>
         <div class="clearfix"></div>
         <!--<h2>1.</h2>-->
         <div class="container">
            <div class="row box-location">
                <div class="col-md-3 col-xs-12">
                   <div class="advisor-content">
                      <h3 class="bot-16 blue">Virginia</h3>
                      <!--<p class="black" style="line-height:1;">-->
                      <!--    6094 Franconia Road, Suite A Alexandria, Virginia 22310-->
                      <!--</p>-->
                      <!--<p class="black">Tel : 571-441-0200</p>-->
                   </div>
                </div> 
                <!--<h2>2.</h2>-->
                <div class="col-md-3 col-xs-12">
                   <div class="advisor-content">
                      <h3 class="bot-16 blue">Washington DC</h3>
                      <!--<p class="black">Tel : 202-960-7676</p>-->
                   </div>
                </div>
                <!--<h2>3.</h2>-->
                <div class="col-md-3 col-xs-12">
                   <div class="advisor-content">
                      <h3 class="bot-16 blue">Maryland</h3>
                      <!--<p class="black">Tel : 240-850-3636</p>-->
                   </div>
                </div>
                <div class="col-md-3 col-xs-12">
                   <div class="advisor-content">
                      <h3 class="bot-16 blue">West Virginia</h3>
                      <!--<p class="black">Tel : 240-850-3636</p>-->
                   </div>
                </div>
            </div>
            <div class="bot-text">
                <div class="row">
                  <div class="col-md-3">
                      <!--<i class="fa fa-globe"></i>-->
                      <img src="<?php echo asset('public\assets\img\location.jpg'); ?>" alt="Logo" height="150px">
                  </div> 
                  <div class="col-md-9">
                      <p class="loc-p">Reach out to learn where we will be next!</p>
                  </div>
                </div>
            </div>
         </div>
      </div>
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
                           <!--   <a href="https://nmlsconsumeraccess.org/" target="_blank" style="color:#ffffff;">Company NMLS: 1692413</a>-->
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
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkrGjyLgrTnOaE-LdLyPAQMsUg099TQMI&callback=initMap&libraries=&v=weekly&language=ja&region=JP" defer></script>
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
         //   // This example displays a map with the language and region set
         //   // to Japan. These settings are specified in the HTML script element
         //   // when loading the Google Maps JavaScript API.
         //   // Setting the language shows the map in the language of your choice.
         //   // Setting the region biases the geocoding results to that region.
         //   function initMap() {
         //     const map = new google.maps.Map(document.getElementById("map"), {
         //       zoom: 8,
         //       center: { lat: 35.717, lng: 139.731 },
         //     });
         //   }
          
      </script>
   </body>
</html><?php /**PATH /home2/younguxc/public_html/fairfax/resources/views/location.blade.php ENDPATH**/ ?>