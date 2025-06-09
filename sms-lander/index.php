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
     <section class="py-5 service-detail-banner">
        <div class="container">
            <div class="d-flex justify-content-between flex-column flex-lg-row mt-5 align-items-center banner-content-container">
                <!-- Banner Content -->
                <div class="banner-content">
                    <h1>Designed for Performance, Scale, <span class="text-orange">and Profitability</span> </h1>
                    <p>Empowering carriers and enterprises with high-quality VoIP minutes, CC traffic, and reliable wholesale routes.</p>
                    <div class="get-started">
                        <a href="#"  data-toggle="modal" data-target="#myModalForm" class="btn bg-orange text-white rounded-pill btn-lg px-5 text-uppercase">Get Started</a>
                    </div>
                    <div class="_trusted d-flex align-items-center mt-4 mb-4 gap-1">
                        <div class="stars d-flex">
                            <div class="_star">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                            </div>
                            <div class="_star">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                            </div>
                            <div class="_star">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                            </div>
                            <div class="_star">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                            </div>
                            <div class="_star">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                            </div>
                        </div>
                        <p>Trusted by over <strong>500 clients</strong></p>
                    </div>
                    <!-- As seen on logos -->
                     <?php include 'includes/as-seen-on.php'; ?>
                </div>
                <!-- Hero image -->
                 <div class="banner-form contact-form">
                    <div class="form-header bg-orange">
                        <p>Have Questions?</p>
                        <div class="whatsapp-no">
                            <a href="https://wa.link/voiptech" target="_blank">
                                <img src="assets/images/icons/whatsapp-icn.png" alt="WhatsApp">
                                <span>WhatsApp Us</span>
                            </a>
                        </div>
                        
                    </div>
                    <div class="form-fields bg-white p-4">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="E-mail" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Phone Number" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Get a Free Demo" class="btn bg-orange text-white rounded-pill px-5 text-uppercase">
                        </div>
                    </div>
                 </div>
            </div>
            <div class="top__gradient oval_blue"></div>
            <div class="top__gradient2 oval_orange"></div>
        </div>
     </section>

     <!-- Trusted logos section -->
      <section class="trusted-logos ">
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
        </div>
      </section>

      <!-- Features Section -->
    <section class="features sms-services">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="sms-service-type p-3">
                        <div class="_title p-3 text-center rounded-lg text-orange h4 bg-white">
                            Bulk SMS
                        </div>
                        <div class="service-feats">
                            <div class="_item d-flex align-items-center">
                                <div class="_icn">
                                    <img src="assets/images/icons/bulk-icn1.png" alt="Bulk SMS" />
                                </div>
                                High Volume
                            </div>
                            <div class="_item d-flex align-items-center">
                                <div class="_icn">
                                    <img src="assets/images/icons/bulk-icn2.png" alt="Bulk SMS" />
                                </div>
                                Smart Filtering
                            </div>
                            <div class="_item d-flex align-items-center">
                                <div class="_icn">
                                    <img src="assets/images/icons/bulk-icn3.png" alt="Bulk SMS" />
                                </div>
                                Scheduled Sends
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sms-service-type p-3">
                        <div class="_title p-3 text-center rounded-lg text-orange h4 bg-white">
                            Transactional SMS
                        </div>
                        <div class="service-feats">
                            <div class="_item d-flex align-items-center">
                                <div class="_icn">
                                    <img src="assets/images/icons/tra-icn1.png" alt="Transactional SMS" />
                                </div>
                                Instant Delivery
                            </div>
                            <div class="_item d-flex align-items-center">
                                <div class="_icn">
                                    <img src="assets/images/icons/tra-icn2.png" alt="Transactional SMS" />
                                </div>
                                Secure Routing
                            </div>
                            <div class="_item d-flex align-items-center">
                                <div class="_icn">
                                    <img src="assets/images/icons/tra-icn3.png" alt="Transactional SMS" />
                                </div>
                                Auto Triggers
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sms-service-type p-3">
                        <div class="_title p-3 text-center rounded-lg text-orange h4 bg-white">
                            Marketing SMS
                        </div>
                        <div class="service-feats">
                            <div class="_item d-flex align-items-center">
                                <div class="_icn">
                                    <img src="assets/images/icons/marketing-sms-icn1.png" alt="Bulk SMS" />
                                </div>
                                Targeted Blasts 
                            </div>
                            <div class="_item d-flex align-items-center">
                                <div class="_icn">
                                    <img src="assets/images/icons/marketing-sms-icn2.png" alt="Bulk SMS" />
                                </div>
                                Custom Templates
                            </div>
                            <div class="_item d-flex align-items-center">
                                <div class="_icn">
                                    <img src="assets/images/icons/marketing-sms-icn3.png" alt="Bulk SMS" />
                                </div>
                                Campaign Reports
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sms-feats-main">
                <div class="col-12 col-md-3 text-center">
                    <div class="_sms-feats">
                        <div class="_icn">
                            <img src="assets/images/icons/sms-feat-icn1.png" alt="Delivery Rate" />
                        </div>
                        <div class="title text-orange">99.9%</div>
                        <div class="sub-title">Delivery Rate</div>
                    </div>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <div class="_sms-feats">
                        <div class="_icn">
                            <img src="assets/images/icons/sms-feat-icn2.png" alt="Delivery Rate" />
                        </div>
                        <div class="title text-orange"> &lt; 3 Seconds </div>
                        <div class="sub-title">Avg. Delivery Time</div>
                    </div>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <div class="_sms-feats">
                        <div class="_icn">
                            <img src="assets/images/icons/sms-feat-icn3.png" alt="Delivery Rate" />
                        </div>
                        <div class="title text-orange">98%</div>
                        <div class="sub-title">Open Rate</div>
                    </div>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <div class="_sms-feats">
                        <div class="_icn">
                            <img src="assets/images/icons/sms-feat-icn4.png" alt="Delivery Rate" />
                        </div>
                        <div class="title text-orange">190+</div>
                        <div class="sub-title">Countries Reached</div>
                    </div>
                </div>
            </div>
            <div class="section-title text-center grad-text">
                <h2>AI-powered SMS platform to send smarter messages, achieve faster delivery, and drive better customer engagement at scale.</h2>
            </div>
        </div>
    </section>
    <section class="dash-ss">
        <div class="container">
            <div class="_ss">
                <img src="assets/images/sms-dash-ss.webp" alt="screenshort" class="img-fluid" />
            </div>
        </div>
    </section>
    <!-- CTA -->
    <section class="cta ">
        <div class="container py-5 bg-orange rounded-xl">
            <p class="text-center">Having trouble with ineffective</p>
            <h2 class="text-center">SMS Communication for your business? </h2>
            <div class="call-btn text-center mt-4">
                <a href="https://wa.link/voiptech" target="_blank" class="btn btn-lg rounded-pill bg-white  text-orange px-4 cta-btn align-items-center"><span><img src="assets/images/icons/whatsapp-icn.png" alt="WhatsApp">
                </span> WhatsApp Us</a>
            </div>
        </div>
    </section>
    <!-- Experience the Smart Way Section-->
    <section class="exp-way py-5 mt-4">
        <div class="container">
            <div class="section-title text-center">
                <h2>Experience the Smart Way to <span class="text-orange">Message</span></h2>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="exp-box _box1">
                        <div class="_content">
                            <div class="title">
                                <h3>Intelligent Delivery</h3>
                            </div>
                            <div class="_desc">
                                Reach the right people at the right time with precision-targeted, AI-optimized SMS delivery. Our platform analyzes user behavior, peak activity windows, and engagement trends to ensure your messages land when they’re most likely to be seen, read, and acted upon.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="exp-box _box2">
                        <div class="_content">
                            <div class="title">
                                <h3>Personalized  Messaging</h3>
                            </div>
                            <div class="_desc">
                                AI helps you go beyond generic blasts—send messages that resonate. Use smart segmentation, dynamic templates, and real-time data to personalize SMS content based on customer interests, past actions, and location for stronger engagement and higher conversions.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="exp-box _box3">
                        <div class="_content">
                            <div class="title">
                                <h3>Real-Time  Automation</h3>
                            </div>
                            <div class="_desc">
                                Automate your communication flows with zero compromise on speed or relevance.
                                From transactional alerts to drip campaigns, our AI-powered workflows ensure your messages are triggered instantly and tailored to the moment, enhancing user experience without manual effort.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="exp-box _box4">
                        <div class="_content">
                            <div class="title">
                                <h3>Actionable Insights</h3>
                            </div>
                            <div class="_desc">
                                Track every click, view, and conversion with real-time analytics. Our intelligent reporting dashboard gives you instant visibility into campaign performance, helping you fine-tune strategies, test variations, and make smarter decisions to maximize ROI.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SMS Report Section -->
     <section class="sms-report bg-orange text-white">
        <div class="container">
            <div class="section-title text-center">
                <h2>Advanced, Intuitive, and Insight-Rich SMS Reports</h2>
                <p>Gain deep insights with customizable performance analytics.</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7 mb-lg-4">
                    <div class="sms-report-img-1">
                        <img src="assets/images/sms-report1.webp" class="img-fluid" alt="Advanced, Intuitive, and Insight-Rich SMS Reports" />
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="sms-report-img-2">
                        <img src="assets/images/sms-report2.webp" class="img-fluid" alt="Advanced, Intuitive, and Insight-Rich SMS Reports" />
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- Insights Section -->
    <section class="insights-section">
    <div class="container">
        <div class="section-title text-center">
            <h2>Unlock Customer Insights with <br> <span class="text-orange">AI-Driven SMS</span> Analytics</h2>
            <p>Understand global customer behaviors and preferences to tailor your SMS campaigns for maximum engagement</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="gauge-container g-85" data-percent="85" data-color="#ff5c35" data-label="Completion">
                    <div class="gauge-background">
                        <div class="gauge-fill"></div>
                        <div class="gauge-fill-left"></div>
                    </div>
                    <div class="gauge-center">
                        <div class="gauge-percentage">85<span>%</span></div>
                        <!-- <div class="gauge-label">Completion</div> -->
                    </div>
                    
                </div>
                <div class="devider"></div>
                <div class="desc text-center">Customers prefer receiving SMS alerts for importantupdates over email or calls.</div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="gauge-container g-85" data-percent="68" data-color="#ff5c35" data-label="Completion">
                    <div class="gauge-background">
                        <div class="gauge-fill"></div>
                        <div class="gauge-fill-left"></div>
                    </div>
                    <div class="gauge-center">
                        <div class="gauge-percentage">68<span>%</span></div>
                        <!-- <div class="gauge-label">Completion</div> -->
                    </div>
                    
                </div>
                <div class="devider"></div>
                <div class="desc text-center">Customers engage more when messages include personalized offers based on past behavior.</div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="gauge-container g-85" data-percent="73" data-color="#ff5c35" data-label="Completion">
                    <div class="gauge-background">
                        <div class="gauge-fill"></div>
                        <div class="gauge-fill-left"></div>
                    </div>
                    <div class="gauge-center">
                        <div class="gauge-percentage">73<span>%</span></div>
                        <!-- <div class="gauge-label">Completion</div> -->
                    </div>
                    
                </div>
                <div class="devider"></div>
                <div class="desc text-center">Customers respond positively to SMS that combines automation with human touch.</div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="gauge-container g-85" data-percent="65" data-color="#ff5c35" data-label="Completion">
                    <div class="gauge-background">
                        <div class="gauge-fill"></div>
                        <div class="gauge-fill-left"></div>
                    </div>
                    <div class="gauge-center">
                        <div class="gauge-percentage">65<span>%</span></div>
                        <!-- <div class="gauge-label">Completion</div> -->
                    </div>
                    
                </div>
                <div class="devider"></div>
                <div class="desc text-center">Customers use SMS as their primary channel for quick transaction confirmations.</div>
            </div>
        </div>
    </div>
    </section>

    <!-- SMS Solutions Section -->
    <section class="sms-solutions-section py-5 mt-4">
        <div class="container">
            <div class="section-title text-center">
                <h2>Effortless <span class="text-orange">SMS Solutions</span> for every business need.</h2>
                <p>Understand global customer behaviors and preferences to tailor your SMS campaigns for maximum engagement</p>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn1.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">API Integration</div>
                            <div class="desc">Connect SMS with your apps for seamless automation.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn2.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Scheduled SMS</div>
                            <div class="desc">Automate message sending at the best times.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn3.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Automated Workflows</div>
                            <div class="desc">Trigger messages based on customer behavior and events.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn4.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Message Templates</div>
                            <div class="desc">Use pre-built SMS formats to save time.</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn5.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Multi-Channel Support</div>
                            <div class="desc">Combine SMS with email and chat for reach.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn6.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Bulk Messaging</div>
                            <div class="desc">Send thousands of SMS simultaneously to audiences.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn7.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Two-Way SMS</div>
                            <div class="desc">Allow customers to reply and engage directly.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn8.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Personalized Content</div>
                            <div class="desc">Automate message sending at the best times.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn9.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Customer Segmentation</div>
                            <div class="desc">Target audiences by groups for relevance.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn10.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">High Throughput</div>
                            <div class="desc">Handle large SMS volumes without delay.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn11.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Delivery Reports</div>
                            <div class="desc">Track message status instantly and reliably.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn12.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Opt-Out Management</div>
                            <div class="desc">Allow customers easy options to unsubscribe.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn13.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Security Compliance</div>
                            <div class="desc">Ensure SMS adhere to privacy regulations.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn14.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Fraud Detection</div>
                            <div class="desc">Identify suspicious messaging to protect your brand.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sms-sol-box">
                        <div class="icn-cont">
                            <img src="assets/images/icons/sms-sol-icn15.png" alt="SMS Solutions" />
                        </div>
                        <div class="txt-content">
                            <div class="title">Real-Time Analytics</div>
                            <div class="desc">Monitor campaign performance with live data.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> 

    <!-- Our Values Section -->
    <section class="our-values-section">
        <div class="container">
            <div class="_our-values">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-3">
                        <div class="section-title">
                            <h2>Strength & Values</h2>
                            <p>Our strength and values are rooted in integrity, innovation, and unwavering customer commitment.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="valu-box shadow">
                                    <div class="_icn">
                                        <img src="assets/images/icons/value-icn1.png" alt="Values" />
                                    </div>
                                    <div class="title">
                                        Reliability
                                    </div>
                                    <div class="_list">
                                        <div class="list-item">
                                            <div class="_icn">
                                                <img src="assets/images/icons/check-icn.png" alt="check icon" />
                                            </div>
                                            <div class="point">
                                                99.9% uptime guarantee for uninterrupted messaging
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="_icn">
                                                <img src="assets/images/icons/check-icn.png" alt="check icon" />
                                            </div>
                                            <div class="point">
                                                Real-time delivery tracking ensures message success.
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="_icn">
                                                <img src="assets/images/icons/check-icn.png" alt="check icon" />
                                            </div>
                                            <div class="point">
                                                Robust infrastructure supports high-volume SMS traffic
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="_note">Trusted by top retailers for timely promotions. </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="valu-box shadow midd">
                                    <div class="_icn">
                                        <img src="assets/images/icons/value-icn2.png" alt="Values" />
                                    </div>
                                    <div class="title">
                                        Innovation
                                    </div>
                                    <div class="_list">
                                        <div class="list-item">
                                            <div class="_icn">
                                                <img src="assets/images/icons/check-icn.png" alt="check icon" />
                                            </div>
                                            <div class="point">
                                                AI-powered platform for smart message automation.
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="_icn">
                                                <img src="assets/images/icons/check-icn.png" alt="check icon" />
                                            </div>
                                            <div class="point">
                                                Advanced analytics to optimize campaign performance.
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="_icn">
                                                <img src="assets/images/icons/check-icn.png" alt="check icon" />
                                            </div>
                                            <div class="point">
                                                Seamless API integration with business tools.
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="_note">Automated workflows reduce manual effort by 40%.</div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="valu-box shadow">
                                    <div class="_icn">
                                        <img src="assets/images/icons/value-icn3.png" alt="Values" />
                                    </div>
                                    <div class="title">
                                        Support
                                    </div>
                                    <div class="_list">
                                        <div class="list-item">
                                            <div class="_icn">
                                                <img src="assets/images/icons/check-icn.png" alt="check icon" />
                                            </div>
                                            <div class="point">
                                                24/7 expert assistance for smooth operations.
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="_icn">
                                                <img src="assets/images/icons/check-icn.png" alt="check icon" />
                                            </div>
                                            <div class="point">
                                                Dedicated onboarding for quick platform adoption.
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="_icn">
                                                <img src="assets/images/icons/check-icn.png" alt="check icon" />
                                            </div>
                                            <div class="point">
                                                Proactive issue resolution with personalized care.
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="_note">Helpdesk rated 4.8/5 for customer satisfaction.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="faq-section faq py-5 " id="main">
        <div class="container">
            <div class="section-title text-center text-white mb-5">
                <h2>Frequently Asked Questions <span class="text-orange">(FAQs)</span></h2>
            </div>
            <div class="accordion" id="faq">
                  <!-- Faq 1-->
                <div class="card">
                    <div class="card-header" id="faqhead1">
                            <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">How does SMS marketing benefit businesses?</a>
                        </h3>
                    </div>

                    <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                        <div class="card-body">
                        SMS marketing offers direct, instant communication with customers, resulting in higher engagement rates.
                        </div>
                    </div>
                </div>
                <!-- Faq 2-->
                <div class="card">
                    <div class="card-header" id="faqhead2">
                            <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">How reliable is bulk SMS delivery?</a>
                        </h3>
                    </div>

                    <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                        <div class="card-body">
                        We use carrier-grade gateways with redundant routing to ensure near 100% delivery rates.
                        </div>
                    </div>
                </div>
                <!-- Faq 3-->
                <div class="card">
                    <div class="card-header" id="faqhead3">
                            <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3">Can SMS campaigns be personalized?</a>
                        </h3>
                    </div>

                    <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                        <div class="card-body">
                        Yes, our platform allows dynamic content insertion like customer names and custom fields.
                        </div>
                    </div>
                </div>
                <!-- Faq 4-->
                <div class="card">
                    <div class="card-header" id="faqhead4">
                            <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4">Is it possible to track SMS campaign performance?</a>
                        </h3>
                    </div>

                    <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                        <div class="card-body">
                        Yes, real-time analytics on delivery rates, clicks, and user engagement are provided.
                        </div>
                    </div>
                </div>
                <!-- Faq 5-->
                <div class="card">
                    <div class="card-header" id="faqhead5">
                            <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="true" aria-controls="faq5">Are there global delivery restrictions?</a>
                        </h3>
                    </div>

                    <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                        <div class="card-body">
                        We offer delivery to 200+ countries with robust compliance handling for regional regulations.
                        </div>
                    </div>
                </div>
                <!-- Faq 6-->
                <div class="card">
                    <div class="card-header" id="faqhead6">
                            <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="true" aria-controls="faq6">Why choose VoIPTech Solutions for SMS services?</a>
                        </h3>
                    </div>

                    <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                        <div class="card-body">
                        We provide global coverage, fast delivery, flexible billing, and 24/7 support.
                        </div>
                    </div>
                </div>
                <!-- Faq 7-->
                <div class="card">
                    <div class="card-header" id="faqhead7">
                        <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7" aria-expanded="true" aria-controls="faq7">Does VoIPTech Solutions support promotional and transactional SMS both?</a>
                        </h3>
                    </div>

                    <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                        <div class="card-body">
                        Yes, we offer separate gateways for promotional, transactional, and OTP SMS traffic.
                        </div>
                    </div>
                </div>
                <!-- Faq 8-->
                <div class="card">
                    <div class="card-header" id="faqhead8">
                        <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="true" aria-controls="faq8">How secure are the SMS services offered by VoIPTech Solutions?</a>
                        </h3>
                    </div>

                    <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                        <div class="card-body">
                        End-to-end encryption and fraud protection measures are in place for all communications.
                        </div>
                    </div>
                </div>
                <!-- Faq 9-->
                <div class="card">
                    <div class="card-header" id="faqhead9">
                        <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9" aria-expanded="true" aria-controls="faq9">Can I use VoIPTech Solutions SMS services with my CRM or app?</a>
                        </h3>
                    </div>

                    <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                        <div class="card-body">
                        Absolutely. Our API allows seamless integration with any CRM, website, or application.
                        </div>
                    </div>
                </div>
                <!-- Faq 10-->
                <div class="card">
                    <div class="card-header" id="faqhead10">
                        <h3 class="mb-0">
                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10" aria-expanded="true" aria-controls="faq10">How soon can I start sending SMS with VoIPTech Solutions?</a>
                        </h3>
                    </div>

                    <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                        <div class="card-body">
                        After account setup, you can start sending SMS campaigns within hours.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Customer Testimonials -->
    <?php include 'includes/testimonials.php'; ?>

     <!-- CTA 2-->
    <section class="cta cta-btm near-footer mt-0">
        <div class="container py-5 px-5 bg-orange rounded-xl">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5">
                    <h2 class="">Revolutionizing Telecommunication with Advanced VoIP Solutions</h2>
                    <div class="call-btn mt-4">
                        <a href="https://wa.link/voiptech" target="_blank" class="btn btn-lg rounded-pill bg-white  text-orange px-4 cta-btn align-items-center"><span><img src="assets/images/icons/whatsapp-icn.png" alt="WhatsApp">
                        </span> WhatsApp Us</a>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="cts-btmimg">
                        <img src="assets/images/cta-img.webp" alt="CTA" class="img-fluid" />
                    </div>
                </div>
            </div>
            
        </div>
    </section>
 </main>

 <!-- Footer -->
 <?php include 'includes/footer-menu.php' ?>

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
                    items:1
                },
                1000:{
                    items:1
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
<script>
    //EXIT popup form call and validations
    // Function to check if the user is on a mobile device
    function isMobileDevice() {
        return (
            // Check user agent for common mobile devices
            /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ||
            // Check for small screen size (<=768px) AND touch capability
            (window.innerWidth <= 768 && window.matchMedia("(pointer: coarse)").matches)
        );
    }

    // Function to track mouse exit intent (for desktop users)
    function trackExitIntent(e) {
        // Check if mouse is exiting the top of the window
        if (!e.toElement && !e.relatedTarget && e.clientY < 10) {
            showPopup();
            // Remove this event listener after showing popup (to prevent multiple triggers)
            document.removeEventListener('mouseout', trackExitIntent);
        }
    }

    // Function to display the popup modal
    function showPopup() {
        // Show the modal (using Bootstrap/jQuery)
        $('#myExitModalForm').modal();
        // Store in sessionStorage to remember it was shown (for this tab session)
        sessionStorage.setItem('exitPopupShown', 'true');
    }

    // Run when page finishes loading
    window.onload = function() {
        // Only set up exit-intent listener if:
        // 1. User is NOT on a mobile device
        // 2. Popup hasn't been shown yet in this session
        if (!isMobileDevice() && sessionStorage.getItem('exitPopupShown') !== 'true') {
            document.addEventListener('mouseout', trackExitIntent);
        }
    };
</script>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const gauges = document.querySelectorAll('.gauge-container');
            
            gauges.forEach(gauge => {
                const percent = parseInt(gauge.getAttribute('data-percent'));
                const color = gauge.getAttribute('data-color');
                // const label = gauge.getAttribute('data-label');
                
                // Set gauge color
                gauge.style.color = color;
                
                // Get the fill elements
                const rightFill = gauge.querySelector('.gauge-fill');
                const leftFill = gauge.querySelector('.gauge-fill-left');
                
                // Set the percentage display
                gauge.querySelector('.gauge-percentage').innerHTML = `${percent}<span>%</span>`;
                // gauge.querySelector('.gauge-label').textContent = label;
                
                // Calculate rotation angles
                if (percent > 50) {
                    leftFill.style.display = 'block';
                    rightFill.style.transform = 'rotate(180deg)';
                    leftFill.style.transform = `rotate(${(percent - 50) * 3.6}deg)`;
                } else {
                    rightFill.style.transform = `rotate(${percent * 3.6}deg)`;
                }
            });
        });
    </script>
</body>
</html>