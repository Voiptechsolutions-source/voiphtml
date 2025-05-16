<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head-tags.php'; ?>
</head>
<body>

<!-- Start Header -->
<header class="shadow-sm">
    <!-- Top header strip -->
     <div class="bg-orange py-2"></div>
     <!-- Logo and Menu -->
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between py-2">
            <div class="logo">
                <a href="index.php">
                    <img src="assets/images/logo.png" alt="VoIPTech Solutions" class="img-fluid">
                </a>
            </div>
            <!-- Main Menu -->
            <?php include 'includes/header-menu.php'; ?>

            <!-- Get Started Button -->
             <a href="#" data-toggle="modal" data-target="#myModalForm" class="btn bg-orange text-white rounded-pill  px-5 text-uppercase">Get Started</a>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Start Main Content -->
 <main>
    <!-- Hero Section -->
     <section class="bg-light py-80 inner-banner mb-80">
        <div class="container">
            <div class="d-flex justify-content-center flex-column-reverse flex-md-row ">
                <!-- Banner Content -->
                <div class="banner-content text-center">
                    <h1>Frequently Asked Questions</h1>
                    <p class="mb-0">Get answers to the most asked questions from our prospects.</p>
                   
                    
                    
                </div>
               
            </div>
        </div>
     </section>

     <!-- Privacy Policy -->
     <section class="privacy-policy pb-5 faq-page">
        <div class="container">
            <div class="row ">
                    
                <div class="col-md-12">
                    <div class="faq-page-item">
                        <h2 class="pl-0 mb-3">What call center solutions does VoIPTech Solutions offer?</h2>
                        <p>
                        VoIPTech Solutions offer services and solutions including VoIP Minutes, CC Traffic, CLI/NCLI, IVR System, Freeswitch, Asterisk and OpenSIPS development, VTS and Auto Dialer, Hosted, Fusion and IP PBX, and ViCiDial.

                        </p>
                    </div>
                    <div class="faq-page-item">
                        <h2 class="pl-0 mb-3">Are the solutions scalable for businesses of different sizes?</h2>  
                        <p>
                        Yes, all the solutions are scalable for small, medium and large sized businesses including enterprises.

                        </p>
                    </div>    
                    <div class="faq-page-item">
                        <h2>Does VoIPTech Solutions offer international calling capabilities?</h2>
                            <p>
                        Yes, we offer international calling capabilities with best pricing allowing businesses to connect globally.
                        </p>
                    </div>  
                    <div class="faq-page-item">
                        <h2 class="pl-0 mb-3">
                    What are the pricing plans available at VoIPTech Solutions?
                        </h2>
                        <p>We offer competitive pricing for all our services and solutions. We also offer Free Trials for first time customers. Kindly visit our pricing page to get more details about our plans, their features and current pricing.

                        </p>
                    </div>
                    <div class="faq-page-item">
                        <h2 class="pl-0 mb-3">
                    Are there any hidden charges?
                        </h2>
                        <p>
                    No, there are no hidden charges. We are committed towards transparent pricing and a “What you see is what you get” model with no hidden charges.
                        </p>
                    </div>
                    <div class="faq-page-item">

                        <h2 class="pl-0 mb-3">
                        Is there a free trial or demo available?
                        </h2>

                        <p>
                        Yes, we offer a free trial and a free demo for all our customers. Kindly get in touch with us to avail the same.
                        </p>
                    </div>
                    <div class="faq-page-item">
                        <h2 class="pl-0 mb-3">
                        Is technical support available?
                        </h2>
                        <p>
                        Yes, we offer 24 by 7 technical support for all our services and solutions.
                        </p>
                    </div>
                    <div class="faq-page-item">
                        <h2 class="p-0 mb-3"> Can VoIPTech Solutions integrate with our existing CRM platform? </h2>
                        <p>
                        Yes, our services and solutions are designed to integrate seamlessly with the existing CRM platforms for customer success. 
                        </p>
                    </div>  
                    <div class="faq-page-item">
                        <h2 class="p-0 mb-3">What is required to set up call center solutions provided by VoIPTech Solutions?</h2>
                        <p>
                        You require a stable internet connection along with compatible hardware. Our experts will assist you in setting up the call center solutions for accurate implementation.
                        </p>
                    </div>    
                    <div class="faq-page-item">
                        <h2 class="p-0 mb-3"> Can existing phone numbers be retained for a business? </h2>
                        <p>
                        Yes, the existing phone numbers can be retained.
                        </p>
                    </div>
                    <div class="faq-page-item">
                        <h2 class="p-0 mb-3">Are the services, provided by VoIPTech Solutions, compatible with mobile devices?</h2>
                        <p>
                        Yes, all the services and solutions are designed to be mobile-friendly, ensuring accessibility across various devices.
                        </p>
                    </div> 
                    <div class="faq-page-item">
                        <h2 class="p-0 mb-3"> Do you offer support for international clients?</h2>
                        <p>
                        Yes, VoIPTech Solutions offers global support because we work with domestic as well as international clients.
                        </p>
                    </div>    
                    <div class="faq-page-item">
                        
                        <h2 class="p-0 mb-3"> How can I get started with VoIP Tech Solutions?</h2>
                        <p>
                    Please get in touch with us through WhatsApp and you can get started instantly.
                        </p>
                    </div>    
                    
                </div>
        
            </div>
        </div>
     </section>
 
      

       
 </main>

  <!-- Footer -->
  <?php include 'includes/footer-menu.php'; ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>  
<script src="assets/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $('.testim-carousel').owlCarousel({
            loop:true,
            margin:20,
            nav:false,
            dots:true,
            autoplay:true,
            autoplayTimeout:5000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:2
                }
            }
        });
        $('.comp-logos').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots:false,
            autoplay:true,
            autoplayTimeout:5000,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:5
                }
            }
        });
    });
</script>
<script>
    // JavaScript to handle submenu toggle on mobile
    $(document).ready(function () {
        // Toggle submenu on click for mobile
        $('.dropdown-submenu > .dropdown-toggle').on('click', function (e) {
            if ($(window).width() <= 991.98) {
                e.preventDefault();
                $(this).next('.dropdown-menu').toggleClass('show');
            }
        });

        // Close submenu when clicking outside
        $(document).on('click', function (e) {
            if ($(window).width() <= 991.98) {
                if (!$(e.target).closest('.dropdown-submenu').length) {
                    $('.dropdown-submenu .dropdown-menu').removeClass('show');
                }
            }
        });

        // Prevent dropdown from closing when clicking a submenu link
        $('.dropdown-menu a').on('click', function (e) {
            e.stopPropagation(); // Prevent the click from bubbling up to the parent
        });
    });


    $('.dropdown').hover(function() {
    $(this).find('.dropdown1').stop(true, true).delay(100).fadeIn(150);
}, function() {
    $(this).find('.dropdown1').stop(true, true).delay(100).fadeOut(150);
});
//for click toggle of submenu header in mobile  
//$('#navbarDropdown').on('click', function(){
  //  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(150);
//});



</script>
</body>
</html>