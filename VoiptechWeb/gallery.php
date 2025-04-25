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
             <a href="#" class="btn bg-orange text-white rounded-pill  px-5 text-uppercase">Get Started</a>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Start Main Content -->
 <main>
    <!-- Hero Section -->
     <section class="about-banner gallery-banner py-5">
        <div class="container">
            <div class="d-flex justify-content-between flex-column-reverse flex-md-row mt-5">
                <!-- Banner Content -->
                <div class="banner-content">
                    <h1>
                    Life In Office Is Very <span class="text-orange"> Funny </span> & <span class="text-orange">Beautiful</span>
                        
                    </h1>
                    <p>Compare top call center software for your team. Learn best providers and features, and get advice for choosing the right call center solution</p>
                    <div class="get-started">
                        <a href="#" class="btn bg-orange text-white rounded-pill px-5 text-uppercase">Join Our Team</a>
                    </div>
                    
                    
                </div>
                <!-- Hero image -->
                 <div class="hero-img">
                    <img src="assets/images/gallery-banner-img.avif" alt="Call center solution" class="img-fluid" />
                 </div>
            </div>
        </div>
     </section>

     <!-- Trusted logos section -->
      <section class="gallery-images-cont py-60">
        <div class="container">
            <div id="macy-container" class="popup-gallery">
                <a href="assets/images/gallery/1.jpg" ><img src="assets/images/gallery/1.jpg" ></a>
                <a href="assets/images/gallery/3.jpg" ><img src="assets/images/gallery/3.jpg" ></a>
                <a href="assets/images/gallery/4.jpg" ><img src="assets/images/gallery/4.jpg" ></a>
                <a href="assets/images/gallery/5.jpg" ><img src="assets/images/gallery/5.jpg" ></a>
                <a href="assets/images/gallery/6.jpg" ><img src="assets/images/gallery/6.jpg" ></a>
                <a href="assets/images/gallery/7.jpg" ><img src="assets/images/gallery/7.jpg" ></a>
                <a href="assets/images/gallery/8.jpg" ><img src="assets/images/gallery/8.jpg" ></a>
                <a href="assets/images/gallery/9.jpg" ><img src="assets/images/gallery/9.jpg" ></a>
                <a href="assets/images/gallery/10.jpg" ><img src="assets/images/gallery/10.jpg" ></a>
                <a href="assets/images/gallery/11.jpg" ><img src="assets/images/gallery/11.jpg" ></a>
                
            </div>
            
        </div>
      </section>

     

        <!-- CTA -->
         <section class="cta py-5 bg-orange">
            <div class="container">
                <h4 class="text-center">Have Questions? </h4>
                <h2 class="text-center">Speak with Our Experts </h2>
                <div class="call-btn text-center mt-4">
                <a href="https://wa.link/voiptech" target="_blank" class="btn btn-lg rounded-pill bg-white text-uppercase text-orange px-4 cta-btn align-items-center"><span><img src="assets/images/icons/whatsapp-icn.png" alt="WhatsApp">
                </span> WhatsApp Us</a>
                </div>
            </div>
         </section>
         <!-- Customer Testimonials -->
       <?php include 'includes/testimonials.php'; ?>
        
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
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/macy@2"></script>
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
        $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + ' by Marsel Van Oosten';
			}
		}
	});
});
    });

    var macy = Macy({
    container: '#macy-container',
    trueOrder: false,
    waitForImages: false,
    margin: 24,
    columns: 4,
    breakAt: {
        1200: 4,
        940: 3,
        520: 2,
        400: 1
    }
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