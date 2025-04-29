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
     <section class="about-banner py-5">
        <div class="container">
            <div class="d-flex justify-content-between flex-column-reverse flex-md-row mt-5">
                <!-- Banner Content -->
                <div class="banner-content">
                    <h1>
                        <span class="text-sm">From Complexity  <b>to Clarity</b></span>
                        <span class="text-orange">We Make</span> 
                        <span>Communication Seamless</span>
                    </h1>
                    <p>With years of experience and a client-first mindset, we simplify global communication, helping businesses connect, grow, and thrive in an ever-evolving digital world.</p>
                    <div class="banner-card p-3 mt-3">
                        <div class="card-head">
                            A Note from Our Founder & CEO
                        </div>
                        <p>"At VoIPTech Solutions, our mission is simple — to innovate fearlessly, serve sincerely, and build communication bridges that empower businesses to scale with confidence and clarity."</p>
                    </div>
                    
                    
                </div>
                <!-- Hero image -->
                 <div class="hero-img">
                    <img src="assets/images/about-img1.avif" alt="Call center solution" class="img-fluid" />
                 </div>
            </div>
        </div>
     </section>

     <!-- Trusted logos section -->
      <section class="trusted-logos py-60">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Trusted by leading <span class="text-orange">enterprises</span></h2>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                
                <div class="owl-carousel owl-theme comp-logos">
                    <img src="assets/images/logos/colt.png" alt="Colt" class="img-fluid1" loading="lazy" style="width: 60px;"/>
                    <img src="assets/images/logos/microtalk.png" alt="Microtalk" class="img-fluid1" loading="lazy" />
                    <img src="assets/images/logos/verizon.png" alt="Verizon" class="img-fluid1" loading="lazy" />
                    <img src="assets/images/logos/tata.png" alt="Tata" class="img-fluid1" loading="lazy" style="width: 49px;" />
                    <img src="assets/images/logos/sinch.png" alt="Sinch" class="img-fluid1" loading="lazy" />
                    <img src="assets/images/logos/vonage.png" alt="Vonage" class="img-fluid1" loading="lazy" />
                </div>
            </div>
            <div class="get-started text-center mt-5">
                <a href="#" data-toggle="modal" data-target="#myModalForm" class="btn bg-orange text-white rounded-pill btn-lg px-5 text-uppercase">Get Started</a>
            </div>
        </div>
      </section>

     <!-- Business Success Section -->
     <section class="biz-success bg-light-orange py-80 mt-3">
        <div class="container">
            <h2 class="text-center mb-4">Trusted Platform for Seamless Conversations and Scalable Growth</h2>
            <p class="text-center">For over 8 years, VoIPTech Solutions has been helping brands across the globe simplify communication, enhance customer experience, and grow confidently. With a commitment to innovation, reliability, and customer-first service, we’ve earned the trust of 500+ clients who rely on us to keep their conversations flowing seamlessly.</p>
            <div class="row biz-boxes mt-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="_box">
                        <div class="_icon">
                            <img src="assets/images/icons/biz-icn1.png" alt="Satistfied Clients" />
                        </div>
                        <div class="box-info">
                            <h4>2500</h4>
                            <p>Satistfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="_box">
                        <div class="_icon">
                            <img src="assets/images/icons/biz-icn2.png" alt="Satistfied Clients" />
                        </div>
                        <div class="box-info">
                            <h4>8</h4>
                            <p>Years in Industry</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="_box">
                        <div class="_icon">
                            <img src="assets/images/icons/biz-icn3.png" alt="Satistfied Clients" />
                        </div>
                        <div class="box-info">
                            <h4>525+</h4>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="_box">
                        <div class="_icon">
                            <img src="assets/images/icons/biz-icn4.png" alt="Satistfied Clients" />
                        </div>
                        <div class="box-info">
                            <h4>100+</h4>
                            <p>Staff Across World</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- Who we are -->
      <section class="who-we-are py-80">
        <div class="container position-relative">
            <div class="who-box-left">
                <div class="banner-card p-3 mt-3">
                    <div class="card-head">
                        Who We Are?
                    </div>
                    <p>VoIPTech Solutions was founded with a clear mission — to simplify and revolutionize business communication. With over 8 years of expertise, we’ve grown into a trusted telecom partner for 500+ clients worldwide. Our strength lies in innovation, integrity, and a deep understanding of modern communication needs. Backed by a skilled and passionate team, we deliver smart, scalable solutions that empower businesses to connect, collaborate, and grow confidently.  </p>
                </div>
                <!-- <div class="demo-btn mt-4">
                    <a href="#" class="btn bg-orange text-white rounded-pill  px-4 text-uppercase">Get Demo</a>
                </div> -->
            </div>
            <div class="vid-box">
                <div class="vid-thumb">
                    <div class="play-btn">
                        <img src="assets/images/icons/play-icn.png" class="play-vid" onclick="openVideo('nzyZwh8v1-8')" alt="play icon" />
                    </div>
                    <img src="assets/images/vid-thumb1.png" alt="vidio thumb" />
                </div>
            </div>
            <div class="who-box-right">
                <div class="banner-card p-3 mt-5">
                    <div class="card-head">
                        What we do?
                    </div>
                    <p>At VoIPTech Solutions, we empower businesses to thrive through seamless communication and operational efficiency. Our solutions help businesses streamline their call center operations, boost productivity, and enhance customer experiences. By delivering reliable VoIP, SMS, DID & TFN, and cloud-based call center systems, we enable smoother connections, increase engagement, and ensure businesses stay competitive. Our solutions drive growth, maximize performance, and provide lasting value in a fast-paced market.</p>
                </div>
            </div>
        </div>
      </section>

        <!-- CTA -->
         <section class="cta py-5 bg-orange mb-5">
            <div class="container">
                <p class="text-center">Have Questions? </p>
                <h2 class="text-center">Speak with Our Experts </h2>
                <div class="call-btn text-center mt-4">
                <a href="https://wa.link/voiptech" target="_blank" class="btn btn-lg rounded-pill bg-white text-orange px-4 cta-btn align-items-center"><span><img src="assets/images/icons/whatsapp-icn.png" alt="WhatsApp">
                </span> WhatsApp Us</a>
                </div>
            </div>
         </section>
         <!-- Customer Testimonials -->
       <div class="clearfix" style="height:20px"></div>
         
 </main>

 <!-- Footer -->
 <?php include 'includes/footer-menu.php'; ?>
<!-- Vidoe Popup -->
<div class="video-popup" id="videoPopup">
    <div class="popup-content">
        <span class="close-btn" onclick="closeVideo()">&times;</span>
        <div class="video-container">
            <video id="videoPlayer" width="100%" height="340" controls>
                <source src="assets/images/general-remarketing-video-youtube.mp4" type="video/mp4">
                
                Your browser does not support the video tag.
            </video> 
            <!-- <iframe id="youtubeVideo" src="" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe> -->
        </div>
    </div>
</div>
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
<!-- Vidoe Popup -->
<script>
    var video = document.getElementById("videoPlayer");
        function stopVideo(){
            video.pause();
            video.currentTime = 0;
        }
    function openVideo(videoId) {
        const popup = document.getElementById('videoPopup');
        //const video = document.getElementById('youtubeVideo');
        
        // Set YouTube video ID (replace with your video ID)
        //const videoId = 'dQw4w9WgXcQ';
       //video.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        
        popup.style.display = 'block';
    }

    function closeVideo() {
        const popup = document.getElementById('videoPopup');

        //const video = document.getElementById('youtubeVideo');
        
        popup.style.display = 'none';
        stopVideo();
        //video.src = ''; // Stop the video
    }

    // Close popup when clicking outside
    window.onclick = function(event) {
        const popup = document.getElementById('videoPopup');
        if (event.target === popup) {
            closeVideo();
        }
    };
</script>
</body>
</html>