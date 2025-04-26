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
     <section class="bg-light-orange py-80 inner-banner mb-80">
        <div class="container">
            <div class="d-flex justify-content-center flex-column-reverse flex-md-row ">
                <!-- Banner Content -->
                <div class="banner-content text-center">
                    <h1>Privacy Policy</h1>
                    <p class="mb-0">Streamline operations and enhance customer interaction with our voice solutions. </p>
                    <p>Last Updated: December 30, 2023</p>
                    
                    
                </div>
               
            </div>
        </div>
     </section>

     <!-- Privacy Policy -->
     <section class="privacy-policy pb-5">
        <div class="container">
            <div class="row ">
        <h2><u>Privacy Policy</u></h2>
        <p>Welcome to VoIPTech's Privacy Policy. This document outlines how we collect, use, disclose, and protect your personal information. By using our website, you agree to the terms outlined in this policy.</p>
        
        <div class="col-md-12">
        <h3 class="pl-0 mb-1">Information We Collect</h3>
            <p>
            We may collect personal information, including but not limited to:
            Contact Information (e.g., name, email address, phone number)
            Business Information (e.g., company name, job title)
            Billing Information (e.g., credit card details)
            Usage Data (e.g., website interactions, IP addresses)

            </p>
        <h3 class="pl-0 mb-1">How We Use Your Information</h3>  
        <p>
            We use collected information for the following purposes:
            •	Provide and maintain our services
            •	Process transactions and billing
            •	Respond to inquiries and customer support
            •	Improve and personalize user experience
            •	Send periodic emails and marketing communications (with opt-out options)

        </p>
        <h3 class="pl-0 mb-1"><u>Information Sharing</u></h3>
        <h3>We may share your information with:</h3>
                <p>
                •	Service providers for business operations <br>
                •	Legal authorities in compliance with applicable laws <br>
                •	Affiliates or partners with your consent <br>
                •	Cookies and Tracking Technologies <br>
            </p>
            <p>Our website uses cookies and similar tracking technologies. By using our site, you consent to the use of these technologies. You can control cookie preferences through your browser settings.

            </p>

            <h3 class="pl-0 mb-1">
            Security
            </h3>
            <p>We implement reasonable security measures to protect your personal information. However, no method of transmission over the internet or electronic storage is 100% secure.

            </p>

            <h3 class="pl-0 mb-1">
            Third-Party Links
            </h3>
            <p>
            Our website may contain links to third-party websites. We are not responsible for their privacy practices. Please review the privacy policies of these sites.

            </p>

            <h3 class="pl-0 mb-1">
            Children's Privacy
            </h3>
            <p>
            Our services are not intended for individuals under the age of 18. We do not knowingly collect personal information from children.
            </p>

            <h3 class="pl-0 mb-1">
            Changes to This Privacy Policy
            </h3>
            <p>
            We reserve the right to update this privacy policy at any time. Changes will be posted on this page with the updated date.
            </p>

            <h3 class="p-0 mb-1"> Contact Us </h3>
            <p>
            If you have any questions or concerns regarding this privacy policy, please contact us at info@VoIPtechsolutions.in .
            </p>
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