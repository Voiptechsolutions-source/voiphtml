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
     <section class="bg-light-orange py-5 service-detail-banner">
        <div class="container">
            <div class="d-flex justify-content-between flex-column flex-lg-row mt-5 align-items-start banner-content-container">
                <!-- Banner Content -->
                <div class="banner-content">
                    <h1>Seamless API Integration for Powerful and Flexible Communication Solutions</h1>
                    <p>Smart Integration for all your VoIP needs</p>
                    <div class="banner-feats">
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn1.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Rapid Implementation </div>
                                <p>Quick deployment with comprehensive documentation.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn2.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Custom Workflows</div>
                                <p>Tailored integrations matching exact business processes</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn3.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Enterprise Ready </div>
                                <p>Handling high-volume requests with millisecond response times.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn4.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Secure Connections </div>
                                <p>End-to-end encryption and comprehensive authentication.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn5.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Developer Friendly</div>
                                <p>Intuitive SDKs with extensive API libraries.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn6.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Hassle-Free Maintenance</div>
                                <p>Automatic updates and backward compatibility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="get-started">
                        <a href="#" data-toggle="modal" data-target="#myModalForm" class="btn bg-orange text-white rounded-pill btn-lg px-5 text-uppercase">Get Started</a>
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
                    <?php include 'includes/as-seen-on.php'; ?>
                    
                </div>
                <!-- Hero image -->
                 <div class="banner-form contact-form">
                    <div class="form-header bg-orange">
                        <p>Have Questions?</p>
                        <div class="whatsapp-no">
                            <a href="https://wa.link/voiptech" target="_blank">
                                <img src="assets/images/icons/whatsapp-icn.png" alt="WhatsApp" />
                                <span>WhatsApp Us</span>
                            </a>
                        </div>
                        
                    </div>
                    <div class="form-fields bg-white p-4">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="E-mail" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Phone Number" class="form-control" />
                        </div>
                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Get a Free Demo" class="btn bg-orange text-white rounded-pill px-5 text-uppercase" />
                        </div>
                    </div>
                 </div>
            </div>
        </div>
     </section>


     

    <!-- Features Section -->
    <secton class="features py-5">
    <div class="container">
        <!-- Faet 1 -->
        <div class="row flex-column-reverse flex-md-row align-items-center _feat-box">
            <div class="col col-md-6">
                <h2>Why Choose <span class="text-orange">VoIPTech Solutions </span> For <span class="text-orange">API Integration?</span> </h2>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Unified Communication</div>
                                <p class="mb-0">Connects voice, video, and messaging into one platform.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Business Intelligence</div>
                                <p class="mb-0">Enables real-time analytics and reporting capabilities.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Workflow Automation</div>
                                <p class="mb-0">Streamlines processes with trigger-based actions.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Third-Party Connectivity</div>
                                <p class="mb-0">Integrate seamlessly with CRM, ERP, and ticketing systems.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Custom Development</div>
                                <p class="mb-0">Personalised solutions for unique requirements.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Scalable Architecture</div>
                                <p class="mb-0">Grows with your business without performance degradation.</p>
                            </div>  
                        </li>
                        
                    </ul>
                </div>
                <!-- <div class="demo-btn mt-4">
                    <a href="#" class="btn bg-orange text-white rounded-pill  px-4 text-uppercase">Get Demo</a>
                </div> -->
            </div>
            <div class="col col-md-6">
                <div class="feat-img">
                    <img src="assets/images/api-integration1.svg" alt="Why Choose VoipTechr Solutions For API Integration?" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 2 -->
        <div class="row flex-column-reverse flex-md-row-reverse align-items-center _feat-box py-4">
            <div class="col col-md-6">
                <h2>Key Benefits of Choosing <span class="text-orange">VoIPTech Solutions</span> for <span class="text-orange">API Integration</span></h2>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Streamlined Operations</div>
                                <p class="mb-0">Automates workflows across multiple communication channels.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Data Synchronization</div>
                                <p class="mb-0">Maintains consistent information across all systems.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Enhanced Customer Experience</div>
                                <p class="mb-0">Delivers personalized interactions through integrated data.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Reduces Development Time</div>
                                <p class="mb-0">Accelerates deployment with ready-to-use connectors.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Improves Decision Making</div>
                                <p class="mb-0">Provides comprehensive analytics across communication platforms.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Future-Proof Systems</div>
                                <p class="mb-0">Adapts to new technologies with flexible architecture.</p>
                            </div>  
                        </li>
                    </ul>
                </div>
                <!-- <div class="demo-btn mt-4">
                    <a href="#" class="btn bg-orange text-white rounded-pill  px-4 text-uppercase">Get Demo</a>
                </div> -->
            </div>
            <div class="col col-md-6">
                <div class="feat-img">
                    <img src="assets/images/api-integration2.svg" alt="Key Benefits of Choosing Voip Tech Solutions for API Integration" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 3 -->
        <div class="row flex-column-reverse flex-md-row align-items-center _feat-box py-4">
            <div class="col col-md-6">
                <h2>How VoIPTech Solutions <span class="text-orange">API Integration </span>  Works</h2>
                <div class="_content">
                    <p>Our API Integration is designed to ensure users have a seamless experience connecting their applications, websites or CRM systems. Here's how it works:</p>
                    <ul class="list2 ">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 1: Describe Your Objective</div>
                                <p class="mb-0">Tell us what you want to connect CRM, website, or app and we’ll guide you to the right API.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 2: Get Access and Test</div>
                                <p class="mb-0">Use your API token to authenticate and run test calls before going live.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 3: Plug and Play</div>
                                <p class="mb-0">Easily connect with third-party services no need to build features from scratch.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 4: Real-Time Data Exchange</div>
                                <p class="mb-0">Send and retrieve data in real time to manage route and rate configuration.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 5: Monitor, Sync & Analyse</div>
                                <p class="mb-0">Sync with your existing tools like CRM and billing software for complete visibility.</p>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <!-- <div class="demo-btn mt-4">
                    <a href="#" class="btn bg-orange text-white rounded-pill  px-4 text-uppercase">Get Demo</a>
                </div> -->
            </div>
            <div class="col col-md-6">
                <div class="feat-img">
                    <img src="assets/images/api-integration3.svg" alt="How VoIPTech Solutions API Integration Works" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>

        <!-- Faet 4 -->
        <div class="row flex-column-reverse flex-md-row-reverse align-items-center _feat-box">
            <div class="col col-md-6">
                <h2>Industries We Serve</h2>
                <div class="_content">
                    <p>Our API Integration services are custom-built for different types of call centers in various industries.</p>
                    <ul class="list2 icons-list">
                        <li>
                            <span class="_icn">📞</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">SaaS Platforms </div>
                                <p class="mb-0">Enables seamless voice and messaging capabilities within software applications.</p>
                            </div>
                        </li>
                        <li>
                            <span class="_icn">🛒</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">E-commerce</div>
                                <p class="mb-0">Connects order management, customer service, and delivery communication systems.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">💰</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Financial Services </div>
                                <p class="mb-0">Integrates secure transaction notifications and authentication systems.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏥</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Healthcare</div>
                                <p class="mb-0">Links patient management systems with compliant communication channels.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🛍️</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Retail </div>
                                <p class="mb-0">Unifies in-store, online, and mobile customer engagement platforms.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">📚 </span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Manufacturing </div>
                                <p class="mb-0">Connects supply chain communications with production management systems.</p>
                            </div>  
                        </li>
                    </ul>
                </div>
                <!-- <div class="demo-btn mt-4">
                    <a href="#" class="btn bg-orange text-white rounded-pill  px-4 text-uppercase">Get Demo</a>
                </div> -->
            </div>
            <div class="col col-md-6">
                <div class="feat-img">
                    <img src="assets/images/api-integration4.svg" alt="Industries We Serve" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        
    </div>
    </secton>
    <!-- Our Working Process -->
    <section class="working-process-section bg-orange py-80 mt-80">
        <div class="container">
            <div class="section-title text-center">
                <h2>How to Get Started</h2>
            </div>
            <div class="process-box-cont">
                <div class="process-box">
                    <div class="process-body">
                        <div class="process-no">1</div>
                        <div class="_pro-content">
                            <h3>Schedule a Free Consultation</h3>
                            <p>Discover how our APIs can enhance your communication infrastructure.</p>
                        </div>
                    </div>
                    <div class="process-arrow">
                        <img src="assets/images/process-arrow.png" alt="Process Arrow" loading="lazy" />
                    </div>
                </div>
                <div class="process-box">
                    <div class="process-body">
                        <div class="process-no">2</div>
                        <div class="_pro-content">
                            <h3>Custom Integration Plan </h3>
                            <p>Our team will design a tailored integration strategy for your specific needs.</p>
                        </div>
                    </div>
                    <div class="process-arrow">
                        <img src="assets/images/process-arrow.png" alt="Process Arrow" loading="lazy" />
                    </div>
                </div>
                <div class="process-box">
                    <div class="process-body">
                        <div class="process-no">3</div>
                        <div class="_pro-content">
                            <h3>Seamless Implementation </h3>
                            <p>Deploy with confidence using our comprehensive documentation and expert support</p>
                        </div>
                    </div>
                    <div class="process-arrow">
                        <img src="assets/images/process-arrow.png" alt="Process Arrow" loading="lazy" />
                    </div>
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
       <!-- Customer Testimonials -->
       <?php include 'includes/testimonials.php'; ?>
    <!-- Contact Form Section -->
      <?php include 'includes/footer-contact-form.php'; ?>
       <!-- FAQ -->
        <section class="faq py-80">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Frequently asked questions</h2>
                    <div class="devider"></div>
                    <!-- <p>Placerat metus rhoncus cras netus veniam, sed odio. Id non vestibuluvellus vehicula curabitur lorem pulvinar rutrum netus.sollicitudin </p> -->
                </div>
                <!-- FAQ Content -->
                <div id="main" class="mt-4">
                    <div class="container">
                        <div class="accordion" id="faq">
                            <!-- Faq 1-->
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1">What are the types of communication APIs that VoIPTech Solutions offers for API integration?</a>
                                      </h3>
                                </div>

                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                    VoIPTech Solutions offers Voice, Video, Messaging, and Presence APIs with comprehensive documentation and SDKs.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 2-->
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2">Can VoIPTech Solutions API integrate with our existing CRM?</a>
                                     </h3>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                    Yes, our APIs connect with all major CRM platforms including Salesforce, HubSpot, and custom solutions as well.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 3-->
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3">How secure are VoIPTech Solutions API Integration connections?</a>
                                      </h3>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                    All our integrations use TLS encryption, OAuth authentication, and comply with industry security standards making them highly secure and trusted.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 4-->
                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                    aria-expanded="true" aria-controls="faq4">Does VoIPTech Solutions API Integration provide webhooks for real-time events?</a>
                                     </h3>
                                </div>

                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                    Yes, VoIPtech Solutions offers configurable webhooks for instant notifications on all communication events.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 5-->
                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                                    aria-expanded="true" aria-controls="faq5">What programming languages are supported by VoIPTech Solutions API integration?</a>
                                     </h3>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                    VoIPTech Solutions APIs are compatible with popular programming languages including JavaScript, Python, PHP, Java, Ruby, and .NET frameworks for seamless integrations.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 6-->
                            <div class="card">
                                <div class="card-header" id="faqhead6">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                                    aria-expanded="true" aria-controls="faq6">Can we customize the API Integration for our needs?</a>
                                     </h3>
                                </div>

                                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                    <div class="card-body">
                                    Absolutely, our team can develop custom endpoints and functionality specific to your requirements.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 7-->
                            <div class="card">
                                <div class="card-header" id="faqhead7">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7"
                                    aria-expanded="true" aria-controls="faq7">What is the pricing for API Integration?</a>
                                     </h3>
                                </div>

                                <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                    <div class="card-body">
                                    The pricing for API integration is flexible and consumption-based with bulk discounts and predictable monthly costs.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 8-->
                            <div class="card">
                                <div class="card-header" id="faqhead8">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8"
                                    aria-expanded="true" aria-controls="faq8">How does the documentation for API Integration look?</a>
                                     </h3>
                                </div>

                                <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                    <div class="card-body">
                                    We offer comprehensive API references, integration guides, code samples, and interactive tutorials in our documentation for API integration.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 9-->
                            <div class="card">
                                <div class="card-header" id="faqhead9">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9"
                                    aria-expanded="true" aria-controls="faq9">How quickly can we complete API integration with your platform?</a>
                                    </h3>
                                </div>

                                <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                    <div class="card-body">
                                    Most of our clients complete the basic API integration within a few days, with full deployment typically achieved in 2 to 4 weeks depending upon the complexity of their existing systems.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 10-->
                            <div class="card">
                                <div class="card-header" id="faqhead10">
                                     <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10"
                                    aria-expanded="true" aria-controls="faq10">What type of support is offered for API integration?</a>
                                    </h3>
                                </div>

                                <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                                    <div class="card-body">
                                    We offer dedicated integration specialists, developer forums, and 24/7 emergency support for all our clients to implement API integration smoothly.
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