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
     <section class="py-80 events-banner">
        <div class="container">
            <div class="d-flex justify-content-between flex-column-reverse align-items-center flex-md-row">
                <!-- Banner Content -->
                <div class="banner-content">
                    
                    <h1 class="text-orange">Industry Events & Insights</h1>
                    <div class="joined-users">
                        <div class="user-joined-img">
                            <img src="assets/images/joined-user.png" alt="User Joined" class="img-fluid" />
                        </div>
                        <div class="user-joined-img _img2">
                            <img src="assets/images/joined-user2.png" alt="User Joined" class="img-fluid" />
                        </div>
                        <div class="no_of_joined">2K+</div>
                    </div>
                    <p>Discover upcoming events, explore past conferences, and gain valuable insights from key industry gatherings. Stay informed and connected with the latest innovations in VoIP, SMS, call center solutions, and more.</p>
                    <div class="feat-event-location">
                        <div class="country">Germany <span class="_icn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg></span></div>
                        <div class="feat-event-address">1047 Brea Mall #1047 Brea, CA 92821</div>
                    </div>
                    <div class="event-btns">
                        <a href="#" class="btn bg-orange text-white rounded-pill text-uppercase">Register Now</a>
                        <a href="#" class="btn btn-dark rounded-pill text-uppercase">Join Now</a>
                    </div>
                    
                    
                    
                </div>
                <!-- Hero image -->
                 <div class="hero-img">
                    <img src="assets/images/events-feat-img.avif" alt="Call center solution" class="img-fluid" />
                 </div>
            </div>
        </div>
     </section>

     <!-- All Events -->
     <section class="bg-light-orange py-80 all-events-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="section-title">
                        <div class="explore-webinars bg-orange py-3 px-3">
                            Event Highlights
                        </div>
                        <h2 class="text-orange">Stay Ahead with the Latest Industry Trends</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="all-events-content">
                        <!-- Event Card 1 -->
                        <div class="event-card">
                            <div class="event-info">
                                <div class="left-info">
                                    <div class="event-img">
                                        <img src="assets/images/event-img1.png" alt="Event" class="img-fluid" />
                                    </div>
                                    <div class="event-title">
                                        <h4>VoIPTech Solutions Conference 2025</h4>
                                        
                                    </div>
                                    <div class="event-organisers">
                                        <div class="org-item">
                                            <div class="org-img">
                                                <img src="assets/images/org-img1.jpg" alt="Organiser" class="img-fluid" />
                                            </div>
                                            <div class="org-info">
                                                <div class="_name">Kerio Pollardy</div>
                                                <div class="_designation">CEO - Feather Dev</div>
                                            </div>
                                        </div>
                                        <div class="org-item">
                                            <div class="org-img">
                                                <img src="assets/images/org-img2.jpg" alt="Organiser" class="img-fluid" />
                                            </div>
                                            <div class="org-info">
                                                <div class="_name">Kerio Pollardy</div>
                                                <div class="_designation">CEO - Feather Dev</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="right-info">
                                    <div class="event-date">
                                        <div class="cal-icn">
                                            <img src="assets/images/icons/event-calendar-icn.png" alt="calendar" />
                                        </div>
                                        <div class="_date">
                                            <span class="day">Day 1</span>
                                            <span class="my">May 25, 2025</span>
                                        </div>
                                    </div>
                                    <div class="event-time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                    <div class="event-location">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>  
                                    <div class="socio-stream">
                                        <h3>On Live Stream</h3>
                                        <div class="socio-links">
                                            <a href="#" class="fb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg></a>
                                            <a href="#" class="_x">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                            </a>
                                            <a href="#" class="in">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>
                                            </a>
                                            <a href="#" class="pin">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
                                            </a>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                            <div class="event-btns">
                                <a href="#" class="btn bg-orange rounded-lg text-uppercase view-more-btn text-white">View More</a>
                                <a href="#" class="btn bg-light-orange text-orange rounded-lg text-uppercase get-started-btn">Get Started</a>
                            </div>
                        </div>
                        <!-- Event Card 2 -->
                        <div class="event-card">
                            <div class="event-info">
                                <div class="left-info">
                                    <div class="event-img">
                                        <img src="assets/images/event-img2.png" alt="Event" class="img-fluid" />
                                    </div>
                                    <div class="event-title">
                                        <h4>VoIPTech Solutions Conference 2025</h4>
                                        
                                    </div>
                                    <div class="event-organisers">
                                        <div class="org-item">
                                            <div class="org-img">
                                                <img src="assets/images/org-img1.jpg" alt="Organiser" class="img-fluid" />
                                            </div>
                                            <div class="org-info">
                                                <div class="_name">Kerio Pollardy</div>
                                                <div class="_designation">CEO - Feather Dev</div>
                                            </div>
                                        </div>
                                        <div class="org-item">
                                            <div class="org-img">
                                                <img src="assets/images/org-img2.jpg" alt="Organiser" class="img-fluid" />
                                            </div>
                                            <div class="org-info">
                                                <div class="_name">Kerio Pollardy</div>
                                                <div class="_designation">CEO - Feather Dev</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="right-info">
                                    <div class="event-date">
                                        <div class="cal-icn">
                                            <img src="assets/images/icons/event-calendar-icn.png" alt="calendar" />
                                        </div>
                                        <div class="_date">
                                            <span class="day">Day 1</span>
                                            <span class="my">May 25, 2025</span>
                                        </div>
                                    </div>
                                    <div class="event-time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                    <div class="event-location">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>  
                                    <div class="socio-stream">
                                        <h3>On Live Stream</h3>
                                        <div class="socio-links">
                                            <a href="#" class="fb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg></a>
                                            <a href="#" class="_x">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                            </a>
                                            <a href="#" class="in">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>
                                            </a>
                                            <a href="#" class="pin">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
                                            </a>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                            <div class="event-btns">
                                <a href="#" class="btn bg-orange rounded-lg text-uppercase view-more-btn text-white">View More</a>
                                <a href="#" class="btn bg-light-orange text-orange rounded-lg text-uppercase get-started-btn">Get Started</a>
                            </div>
                        </div>
                        <!-- Event Card 3 -->
                        <div class="event-card">
                            <div class="event-info">
                                <div class="left-info">
                                    <div class="event-img">
                                        <img src="assets/images/event-img1.png" alt="Event" class="img-fluid" />
                                    </div>
                                    <div class="event-title">
                                        <h4>VoIPTech Solutions Conference 2025</h4>
                                        
                                    </div>
                                    <div class="event-organisers">
                                        <div class="org-item">
                                            <div class="org-img">
                                                <img src="assets/images/org-img1.jpg" alt="Organiser" class="img-fluid" />
                                            </div>
                                            <div class="org-info">
                                                <div class="_name">Kerio Pollardy</div>
                                                <div class="_designation">CEO - Feather Dev</div>
                                            </div>
                                        </div>
                                        <div class="org-item">
                                            <div class="org-img">
                                                <img src="assets/images/org-img2.jpg" alt="Organiser" class="img-fluid" />
                                            </div>
                                            <div class="org-info">
                                                <div class="_name">Kerio Pollardy</div>
                                                <div class="_designation">CEO - Feather Dev</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="right-info">
                                    <div class="event-date">
                                        <div class="cal-icn">
                                            <img src="assets/images/icons/event-calendar-icn.png" alt="calendar" />
                                        </div>
                                        <div class="_date">
                                            <span class="day">Day 1</span>
                                            <span class="my">May 25, 2025</span>
                                        </div>
                                    </div>
                                    <div class="event-time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                    <div class="event-location">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>  
                                    <div class="socio-stream">
                                        <h3>On Live Stream</h3>
                                        <div class="socio-links">
                                            <a href="#" class="fb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg></a>
                                            <a href="#" class="_x">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                            </a>
                                            <a href="#" class="in">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>
                                            </a>
                                            <a href="#" class="pin">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
                                            </a>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                            <div class="event-btns">
                                <a href="#" class="btn bg-orange rounded-lg text-uppercase view-more-btn text-white">View More</a>
                                <a href="#" class="btn bg-light-orange text-orange rounded-lg text-uppercase get-started-btn">Get Started</a>
                            </div>
                        </div>
                        <!-- Event Card 4 -->
                        <div class="event-card">
                            <div class="event-info">
                                <div class="left-info">
                                    <div class="event-img">
                                        <img src="assets/images/event-img1.png" alt="Event" class="img-fluid" />
                                    </div>
                                    <div class="event-title">
                                        <h4>VoIPTech Solutions Conference 2025</h4>
                                        
                                    </div>
                                    <div class="event-organisers">
                                        <div class="org-item">
                                            <div class="org-img">
                                                <img src="assets/images/org-img2.jpg" alt="Organiser" class="img-fluid" />
                                            </div>
                                            <div class="org-info">
                                                <div class="_name">Kerio Pollardy</div>
                                                <div class="_designation">CEO - Feather Dev</div>
                                            </div>
                                        </div>
                                        <div class="org-item">
                                            <div class="org-img">
                                                <img src="assets/images/org-img2.jpg" alt="Organiser" class="img-fluid" />
                                            </div>
                                            <div class="org-info">
                                                <div class="_name">Kerio Pollardy</div>
                                                <div class="_designation">CEO - Feather Dev</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="right-info">
                                    <div class="event-date">
                                        <div class="cal-icn">
                                            <img src="assets/images/icons/event-calendar-icn.png" alt="calendar" />
                                        </div>
                                        <div class="_date">
                                            <span class="day">Day 1</span>
                                            <span class="my">May 25, 2025</span>
                                        </div>
                                    </div>
                                    <div class="event-time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                    <div class="event-location">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>  
                                    <div class="socio-stream">
                                        <h3>On Live Stream</h3>
                                        <div class="socio-links">
                                            <a href="#" class="fb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg></a>
                                            <a href="#" class="_x">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                            </a>
                                            <a href="#" class="in">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>
                                            </a>
                                            <a href="#" class="pin">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
                                            </a>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                            <div class="event-btns">
                                <a href="#" class="btn bg-orange rounded-lg text-uppercase view-more-btn text-white">View More</a>
                                <a href="#" class="btn bg-light-orange text-orange rounded-lg text-uppercase get-started-btn">Get Started</a>
                            </div>
                        </div>
                        <div class="load-more-btn mt-5">
                            <a href="#" class="btn bg-orange rounded-pill text-uppercase text-white">Load More</a>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
     </section>

     <!-- All upcoming Events -->
    <section class="all-upcoming-events py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="text-orange">All Upcoming Events</h2>
                <p>Be part of every groundbreaking event in the industry—don’t miss out</p>
            </div>
            <div class="event-tabs-main">
                <div class="row justify-content-center mt-3 mb-2">
                    <div class="col-auto">
                        <nav class="nav btn-group pricing-tabs">
                            <a href="#day1" class="btn btn-outline-primary active" data-toggle="tab">1st Day</a>
                            <a href="#day2" class="btn btn-outline-primary" data-toggle="tab">2nd Day</a>
                            <a href="#day3" class="btn btn-outline-primary" data-toggle="tab">3rd Day</a>
                        </nav>
                    </div>
                </div>
                <div class="tab-content upcoming-events-tab-content">
                    <div class="tab-pane fade show active" id="day1">
                        <div class="upcoming-event-card">
                            <div class="upcoming-date">
                                <div class="day">25</div>
                                <div class="month-year">
                                    <span class="month">May,</span>
                                    <span class="year">2025</span>
                                </div>
                            </div>
                            <div class="upcomng-event-thumb">
                                <img src="assets/images/event-thumb-img1.png" alt="Event" class="img-fluid" />
                            </div>
                            <div class="upcoming-event-info">
                                <h3><a href="#">VoIPTech Solutions Conference 2025</a></h3>
                                <div class="upcoming-event-address-time">
                                    <div class="_address">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>
                                    <div class="_time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>  
                                
                        </div>
                        <div class="upcoming-event-card">
                            <div class="upcoming-date">
                                <div class="day">25</div>
                                <div class="month-year">
                                    <span class="month">May,</span>
                                    <span class="year">2025</span>
                                </div>
                            </div>
                            <div class="upcomng-event-thumb">
                                <img src="assets/images/event-thumb-img2.png" alt="Event" class="img-fluid" />
                            </div>
                            <div class="upcoming-event-info">
                                <h3><a href="#">VoIPTech Solutions Conference 2025</a></h3>
                                <div class="upcoming-event-address-time">
                                    <div class="_address">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>
                                    <div class="_time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>  
                                
                        </div>
                        <div class="upcoming-event-card">
                            <div class="upcoming-date">
                                <div class="day">25</div>
                                <div class="month-year">
                                    <span class="month">May,</span>
                                    <span class="year">2025</span>
                                </div>
                            </div>
                            <div class="upcomng-event-thumb">
                                <img src="assets/images/event-thumb-img3.png" alt="Event" class="img-fluid" />
                            </div>
                            <div class="upcoming-event-info">
                                <h3><a href="#">VoIPTech Solutions Conference 2025</a></h3>
                                <div class="upcoming-event-address-time">
                                    <div class="_address">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>
                                    <div class="_time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>  
                                
                        </div>
                    </div> 
                    <div class="tab-pane fade " id="day2">
                    <div class="upcoming-event-card">
                            <div class="upcoming-date">
                                <div class="day">26</div>
                                <div class="month-year">
                                    <span class="month">May,</span>
                                    <span class="year">2025</span>
                                </div>
                            </div>
                            <div class="upcomng-event-thumb">
                                <img src="assets/images/event-thumb-img1.png" alt="Event" class="img-fluid" />
                            </div>
                            <div class="upcoming-event-info">
                                <h3><a href="#">VoIPTech Solutions Conference 2025</a></h3>
                                <div class="upcoming-event-address-time">
                                    <div class="_address">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>
                                    <div class="_time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>  
                                
                        </div>
                        <div class="upcoming-event-card">
                            <div class="upcoming-date">
                                <div class="day">26</div>
                                <div class="month-year">
                                    <span class="month">May,</span>
                                    <span class="year">2025</span>
                                </div>
                            </div>
                            <div class="upcomng-event-thumb">
                                <img src="assets/images/event-thumb-img2.png" alt="Event" class="img-fluid" />
                            </div>
                            <div class="upcoming-event-info">
                                <h3><a href="#">VoIPTech Solutions Conference 2025</a></h3>
                                <div class="upcoming-event-address-time">
                                    <div class="_address">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>
                                    <div class="_time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>  
                                
                        </div>
                        <div class="upcoming-event-card">
                            <div class="upcoming-date">
                                <div class="day">26</div>
                                <div class="month-year">
                                    <span class="month">May,</span>
                                    <span class="year">2025</span>
                                </div>
                            </div>
                            <div class="upcomng-event-thumb">
                                <img src="assets/images/event-thumb-img3.png" alt="Event" class="img-fluid" />
                            </div>
                            <div class="upcoming-event-info">
                                <h3><a href="#">VoIPTech Solutions Conference 2025</a></h3>
                                <div class="upcoming-event-address-time">
                                    <div class="_address">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>
                                    <div class="_time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>  
                                
                        </div>
                    </div> 
                    <div class="tab-pane fade " id="day3">
                    <div class="upcoming-event-card">
                            <div class="upcoming-date">
                                <div class="day">27</div>
                                <div class="month-year">
                                    <span class="month">May,</span>
                                    <span class="year">2025</span>
                                </div>
                            </div>
                            <div class="upcomng-event-thumb">
                                <img src="assets/images/event-thumb-img1.png" alt="Event" class="img-fluid" />
                            </div>
                            <div class="upcoming-event-info">
                                <h3><a href="#">VoIPTech Solutions Conference 2025</a></h3>
                                <div class="upcoming-event-address-time">
                                    <div class="_address">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>
                                    <div class="_time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>  
                                
                        </div>
                        <div class="upcoming-event-card">
                            <div class="upcoming-date">
                                <div class="day">27</div>
                                <div class="month-year">
                                    <span class="month">May,</span>
                                    <span class="year">2025</span>
                                </div>
                            </div>
                            <div class="upcomng-event-thumb">
                                <img src="assets/images/event-thumb-img2.png" alt="Event" class="img-fluid" />
                            </div>
                            <div class="upcoming-event-info">
                                <h3><a href="#">VoIPTech Solutions Conference 2025</a></h3>
                                <div class="upcoming-event-address-time">
                                    <div class="_address">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>
                                    <div class="_time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>  
                                
                        </div>
                        <div class="upcoming-event-card">
                            <div class="upcoming-date">
                                <div class="day">27</div>
                                <div class="month-year">
                                    <span class="month">May,</span>
                                    <span class="year">2025</span>
                                </div>
                            </div>
                            <div class="upcomng-event-thumb">
                                <img src="assets/images/event-thumb-img3.png" alt="Event" class="img-fluid" />
                            </div>
                            <div class="upcoming-event-info">
                                <h3><a href="#">VoIPTech Solutions Conference 2025</a></h3>
                                <div class="upcoming-event-address-time">
                                    <div class="_address">
                                        <div class="location-icn">
                                            <img src="assets/images/icons/loc-icn3.png" alt="location" />
                                        </div>
                                        <div class="_location">1047 Brea Mall #1047 Brea, CA 92821</div>
                                    </div>
                                    <div class="_time">
                                        <div class="clock-icn">
                                            <img src="assets/images/icons/clock-icn.png" alt="clock" />
                                        </div>
                                        <div class="_time">10:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>  
                                
                        </div>
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