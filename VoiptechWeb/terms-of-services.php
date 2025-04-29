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
                    <h1>TERMS OF SERVICE</h1>
                    <p class="mb-0">Streamline operations and enhance customer interaction with our voice solutions. </p>
                    <p>Last Updated: December 30, 2023</p>
                    
                    
                </div>
               
            </div>
        </div>
     </section>

     <!-- Terms -->
     <section class="terms pb-5">
        <div class="container">
            <div class=" mb-1">
                <h2><u>VoIPTech Terms and Conditions</u></h2>
                <p>Welcome to VoIPTech, a leading provider of voice, SMS, DID &amp; TFN, Media Buying, Lead Generation, and Digital Marketing services. By using our services, you agree to comply with and be bound by the following terms and conditions. Please read them carefully before accessing or using our services.</p>
                
                <div class="col-md-12">
                <h3 class="pl-0 mb-1">1. Acceptance of Terms</h3>
                    <p>
                    By accessing or using the VoIPTech services, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions. If you do not agree with any part of these terms, you may not use our services.

                    </p>
                <h3 class="pl-0 mb-1">2. Service Description</h3>  
                <p>
                VoIPTech provides a range of services including, but not limited to, voice and SMS communication, DID &amp; TFN services, Media Buying, Lead Generation, and Digital Marketing. Our services may be subject to specific terms and conditions outlined in corresponding service agreements.

                </p>
                <h3 class="pl-0 mb-1">3. User Responsibilities</h3>
                <!-- <h3>We may share your information with:</h3> -->
                        <p>
                        a. You agree to use VoIPTech services in accordance with all applicable laws and regulations. <br>
                        b. For services such as Lead Generation and Digital Marketing, you are responsible for complying with ethical and legal standards related to data privacy, consent, and content distribution.
                    <br>
                    </p>
                    <p>Our website uses cookies and similar tracking technologies. By using our site, you consent to the use of these technologies. You can control cookie preferences through your browser settings.

                    </p>

                    <h3 class="pl-0 mb-1">
                    4. Service Availability
                    </h3>
                    <p>VoIPTech strives to provide uninterrupted service, but we do not guarantee that our services will be error-free or continuously available. We reserve the right to suspend or terminate services at our discretion for maintenance, upgrades, or other reasons without prior notice.

                    </p>

                    <h3 class="pl-0 mb-1">
                    5. Fees and Billing
                    </h3>
                    <p>
                    a. You agree to pay all applicable fees for the services you use. Fees for specific services may be outlined in separate agreements. <br>
            b. Failure to pay fees may result in the suspension or termination of your account for the specific service.

                    </p>

                    <h3 class="pl-0 mb-1">
                    6. Intellectual Property
                    </h3>
                    <p>
                    VoIPTech retains all rights, title, and interest in and to its services, including all related intellectual property rights. You may not reproduce, modify, distribute, or otherwise use any content from our services without our prior written consent.
                    </p>

                    <h3 class="pl-0 mb-1">
                    7. Limitation of Liability
                    </h3>
                    <p>
                    VoIPTech shall not be liable for any indirect, incidental, special, or consequential damages arising out of or in connection with the use of our services.
                    </p>

                    <h3 class="p-0 mb-1">8. Governing Law </h3>
                    <p>
                    These terms and conditions shall be governed by and construed in accordance with the laws of India.
                    </p>

                    <h3 class="p-0 mb-1">9. Changes to Terms</h3>
                    <p>
                    VoIPTech reserves the right to modify these terms and conditions at any time. Updated terms will be posted on our website, and your continued use of our services constitutes acceptance of the modified terms.
                    </p>

                    <h3 class="p-0 mb-1">Contact Information</h3>
                    <p>
                    If you have any questions or concerns regarding these terms and conditions, please contact us at  info@VoIPtechsolutions.in .
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