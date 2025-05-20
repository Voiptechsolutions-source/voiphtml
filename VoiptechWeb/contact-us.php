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
    <!-- Map Section -->
    <section class="map-cont">
        <div class="section-title text-center">
            <h2>Our Locations</h2>
        </div>
        <img src="assets/images/world-map.webp" alt="map" class="img-fluid" />
        <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Fn9W8NAtw6evoFEvJU9jtzvJU0hB6mo&ehbc=2E312F&noprof=1" width="100%" height="480"></iframe> -->
    </section> 

    <section class="contact-info py-5 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h3>Your Vision, Our Expertise</h3>
                    <p>We’re standing by and look forward to helping you take your digital marketing to the next level.</p>
                    <div class="contact-form mt-4">
                        <div class="form-group">
                            <input type="text" name="full-name" id="" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-mail" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="telPh" placeholder="Phone Number" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="" cols="30" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit Now" class="btn bg-orange btn-lg rounded-pill py-2 px-4 text-white" />
                        </div>
                    </div>
                    <div class="address-blocks ">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="address-box position-relative">
                                    <div class="loc-icn"><img src="assets/images/icons/loc-icn2.png" alt="address icon" /></div>
                                    <div class="loc-img"><img src="assets/images/odisha.jpg" alt="Odisha" /></div>
                                    <div class="address-header">
                                        Visit Our Odisha Office
                                    </div>
                                    <div class="address-body">
                                        Unit No – 530, DLF 
                                        Cybercity, Patia, 
                                        Bhubaneswar – 751024, 
                                        Odisha,
                                        India 
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="address-box position-relative">
                                    <div class="loc-icn"><img src="assets/images/icons/loc-icn2.png" alt="address icon" /></div>
                                    <div class="loc-img"><img src="assets/images/noida.jpg" alt="Noida" /></div>
                                    <div class="address-header">
                                        Visit Our Noida Office
                                    </div>
                                    <div class="address-body">
                                        B-23/C1, 4th floor, Block B, Sector 62, Noida - 201309, Uttar Pradesh, India 
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="address-box position-relative">
                                    <div class="loc-icn"><img src="assets/images/icons/loc-icn2.png" alt="address icon" /></div>
                                    <div class="loc-img"><img src="assets/images/mohali.jpg" alt="Mohali" /></div>
                                    <div class="address-header">
                                        Visit Our Mohali Office
                                    </div>
                                    <div class="address-body">
                                        A 45, Quark Media Building, Phase 8B, Industrial Area, Mohali – 160071, Punjab, India 
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="address-box position-relative">
                                    <div class="loc-icn"><img src="assets/images/icons/loc-icn2.png" alt="address icon" /></div>
                                    <div class="loc-img"><img src="assets/images/kolkata.jpg" alt="Kolkata" /></div>
                                    <div class="address-header">
                                        Visit Our Kolkata Office
                                    </div>
                                    <div class="address-body">
                                        163, Ustad Enayat Khan Avenue, Park Street, Kolkata - 700017, India
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="address-box position-relative">
                                    <div class="loc-icn"><img src="assets/images/icons/loc-icn2.png" alt="address icon" /></div>
                                    <div class="loc-img"><img src="assets/images/usa.jpg" alt="USA" /></div>
                                    <div class="address-header">
                                        Visit Our USA Office
                                    </div>
                                    <div class="address-body">
                                        1309 Coffeen Avenue STE 1200 Sheridan, WY 8280
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="address-box position-relative">
                                    <div class="loc-icn"><img src="assets/images/icons/loc-icn2.png" alt="address icon" /></div>
                                    <div class="loc-img"><img src="assets/images/dubai.jpg" alt="Dubai" /></div>
                                    <div class="address-header">
                                        Visit Our Dubai Office
                                    </div>
                                    <div class="address-body">
                                        Bay Square - Building 12 - P floor - Business Bay
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="address-box position-relative">
                                    <div class="loc-icn"><img src="assets/images/icons/loc-icn2.png" alt="address icon" /></div>
                                    <div class="loc-img"><img src="assets/images/malaysia.jpg" alt="Malaysia" /></div>
                                    <div class="address-header">
                                        Visit Our Malaysia Office
                                    </div>
                                    <div class="address-body">
                                    1F-03, 1st Floor Tower 2 @ PFCC, Jalan Puteri 1/2, Bandar Puteri, 47100 Puchong, Selangor, Malaysia
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 contact-us-info-box">
                    <h3>Find Our Office</h3>
                    <div class="contact-info-box">
                        <div class="_box-icn">
                            <img src="assets/images/icons/ph-icn2.png" alt="phone icon" />
                        </div>
                        <h4>Give Us a Call</h4>
                        <a href="#">+91 (891) 765-7317</a>
                        <div class="call-box mt-3">
                            <a href="#">+91 (700) 822-0621</a>
                            <a href="#">+971 (504) 583-131</a>
                        </div>
                        <div class="socio-app ">
                            <a href="https://wa.link/voiptech"  target="_blank" class="d-flex gap-1 align-items-center"><span><img src="assets/images/icons/whatsapp-icn.png" alt="whatsapp" /> </span> VoIPTech</a>
                            <a href="#" class="d-flex gap-1 align-items-center"><span><img src="assets/images/icons/telegram-icn.png" alt="telegram" /> </span>dwibendu</a>
                        </div>
                    </div>
                    <div class="contact-info-box">
                        <div class="_box-icn">
                            <img src="assets/images/icons/connect-icn.png" alt="Connect icon" />
                        </div>
                        <h4>Connec with US</h4>
                        <div class="contact-socio d-flex gap-4 align-items-center">
                            <!-- <a href="#"><img src="assets/images/icons/youtube.png" alt="youtube" /></a> -->
                            <a href="https://www.facebook.com/VoIPTechSolutions" target="_blank"><img src="assets/images/icons/fb.png" alt="Facebook" /></a>
                            <a href="https://www.linkedin.com/company/voiptechsolutions" target="_blank"><img src="assets/images/icons/linkedin.png" alt="Linkedin" /></a>
                            <a href="https://www.instagram.com/voiptechsolutions" target="_blank"><img src="assets/images/icons/insta.png" alt="Instagram" /></a>
                        </div>
                    </div>
                    <div class="contact-info-box">
                        <div class="_box-icn">
                            <img src="assets/images/icons/hq.png" alt="Connect icon" />
                        </div>
                        <h4>Proudly Based in Odisha</h4>
                        <p class="text-center">Unit No – 530, DLF Cybercity, 
                            Patia, Bhubaneswar – 751024, Odisha,
                            India </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
 
      

       
 </main>

 <!-- Footer -->
 <?php include 'includes/footer-menu-contact.php'; ?>

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