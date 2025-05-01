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
                    <h1>Cutting Edge Multi-Tenant Conferencing Solutions Provider for Enterprises & Service Providers</h1>
                    <p>Smart Conferencing for Growing Networks</p>
                    <div class="banner-feats">
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn1.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Multi-Tenant Architecture</div>
                                <p>Manage client accounts separately.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn2.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Centralized Admin Dashboard</div>
                                <p>Control all tenants and sessions easily.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn3.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head"> Secure Conferencing</div>
                                <p>Protect meetings with end-to-end encryption.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn4.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Custom Branding</div>
                                <p>Allow custom logos, themes, and domains.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn5.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">High Capacity</div>
                                <p>Support large conferences without lag.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn6.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Usage & Billing Reports</div>
                                <p>View detailed usage for easy billing.</p>
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
                <h2>Why Choose <span class="text-orange">VoIPTech Solutions </span> For <span class="text-orange">Multi-Tenant Conferencing?</span> </h2>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Advanced Role Management</div>
                                <p class="mb-0">Assign host, co-host, and participant roles easily.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Tenant Isolation</div>
                                <p class="mb-0">Each tenant’s data and settings remain fully separated.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">HD Video & Audio Quality</div>
                                <p class="mb-0">Enjoy smooth, crystal-clear conferencing.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Web-Based Access</div>
                                <p class="mb-0">No software required — just share a link to join.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Multi-Language Support</div>
                                <p class="mb-0">Serve global clients with built-in language options.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Recording & Playback</div>
                                <p class="mb-0">Record sessions and offer playback for training or review.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Custom Conference URLs</div>
                                <p class="mb-0">Create branded meeting links per tenant.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">APIs & Integration</div>
                                <p class="mb-0">Easily integrate with CRMs, LMS, or custom portals.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Real-Time Monitoring</div>
                                <p class="mb-0">View live session stats, user counts, and performance.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Reliable Uptime</div>
                                <p class="mb-0">Our infrastructure ensures your platform is always on.</p>
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
                    <img src="assets/images/multi-conf-solution1.svg" alt="Why Choose VoipTechr Solutions For Multi-Tenant conferencing
?" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 2 -->
        <div class="row flex-column-reverse flex-md-row-reverse align-items-center _feat-box py-4">
            <div class="col col-md-6">
                <h2>Key Benefits of Choosing <span class="text-orange">VoIPTech Solutions</span> for <span class="text-orange">Multi-Tenant Confrencing</span></h2>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Client-Ready Platform</div>
                                <p class="mb-0">Launch branded conferencing for your customers instantly.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Effortless Scaling</div>
                                <p class="mb-0">Add users or tenants without downtime or complexity.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Streamlined Administration</div>
                                <p class="mb-0">Manage everything from one unified panel.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Superior Meeting Quality</div>
                                <p class="mb-0">No lags, no interruptions — just smooth conversations.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Customizable Experience</div>
                                <p class="mb-0">Tailor layouts, settings, and features per tenant.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">24/7 Support</div>
                                <p class="mb-0">We’re here any time your team or clients need help.</p>
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
                    <img src="assets/images/multi-conf-solution2.svg" alt="Key Benefits of Choosing Voip Tech Solutions for Multi-Tenant Conferencing 
" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 3 -->
        <div class="row flex-column-reverse flex-md-row align-items-center _feat-box py-4">
            <div class="col col-md-6">
                <h2>How VoIPTech Solutions <span class="text-orange">Multi-Tenant Conferencing </span>  Works</h2>
                <div class="_content">
                    <p>Here’s how VoIPTech’s Multi-Tenant Conferencing solution operates:</p>
                    <ul class="list2 ">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 1: Tenant Onboarding</div>
                                <p class="mb-0">Create tenant profiles with unique domains and settings.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 2: User Management</div>
                                <p class="mb-0">Add users, assign roles, and enable branding options.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 3: Schedule & Host Meetings</div>
                                <p class="mb-0">Set up meetings with HD video/audio and role controls.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 4: Monitor Sessions</div>
                                <p class="mb-0">Track live stats and manage issues from the dashboard.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 5: Generate Reports & Bill</div>
                                <p class="mb-0">Access detailed usage data for tenant-level billing.</p>
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
                    <img src="assets/images/multi-conf-solution3.svg" alt="How VoIPTech Solutions Multi-Tenant Conferencing 
 Works" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>

        <!-- Faet 4 -->
        <div class="row flex-column-reverse flex-md-row-reverse align-items-center _feat-box">
            <div class="col col-md-6">
                <h2>Industries We Serve</h2>
                <div class="_content">
                    <p>VoIPTech's Multi-Tenant Conferencing is ideal for:</p>
                    <ul class="list2 icons-list">
                        <li>
                            <span class="_icn">🏢</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Corporate Enterprises</div>
                                <p class="mb-0">Run secure internal meetings and team sessions.</p>
                            </div>
                        </li>
                       
                        <li>
                            <span class="_icn">📚</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Education Providers</div>
                                <p class="mb-0">Host virtual classrooms for different institutions.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">💼</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">BPOs & Resellers</div>
                                <p class="mb-0">Offer branded conferencing to multiple clients.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏥</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Healthcare</div>
                                <p class="mb-0">Enable HIPAA-compliant teleconsultations per facility.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏛️ </span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Government Agencies</div>
                                <p class="mb-0">Ensure secure communications across departments.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏨</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Hospitality Groups</div>
                                <p class="mb-0">Train and coordinate staff across locations.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🛒</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">E-commerce Teams</div>
                                <p class="mb-0">Connect sales, support, and logistics teams instantly.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">⚙️</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">IT & Tech Firms</div>
                                <p class="mb-0">Hold tech demos, webinars, or stakeholder briefings.</p>
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
                    <img src="assets/images/multi-conf-solution4.svg" alt="Industries We Serve" class="img-fluid" loading="lazy" />
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
                            <h3>Request a Demo</h3>
                            <p>See how our platform fits your needs.</p>
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
                            <h3>Configure Your Tenants</h3>
                            <p>Set up branding, access, and features.</p>
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
                            <h3>Launch & Collaborate</h3>
                            <p>Go live and start conferencing — we’ll support you all the way.</p>
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
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1">How does a Multi-Tenant Conferencing Solution support multiple organizations?</a></h3>
                                </div>

                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                    <p>A Multi-Tenant Conferencing Solution enables different clients or departments to host and manage their own virtual meetings securely on a shared platform.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 2-->
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2">Why is a Multi-Tenant Conferencing Solution ideal for large enterprises?</a></h3>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                    <p>A Multi-Tenant Conferencing Solution allows enterprises to scale their communication infrastructure and manage multiple tenants or business units from a single system.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 3-->
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3">Can a Multi-Tenant Conferencing Solution handle audio, video, and screen sharing?</a></h3>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Yes, this solution supports high-quality audio, video conferencing, and screen sharing to facilitate seamless communication among different teams.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 4-->
                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                    aria-expanded="true" aria-controls="faq4">How does VoIPTech Solutions optimize a Multi-Tenant Conferencing Solution for businesses?</a></h3>
                                </div>

                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                    <p>VoIPTech Solutions customizes Multi-Tenant Conferencing Solutions with features such as personalized branding, user controls, and advanced security to meet specific business needs.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 5-->
                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                                    aria-expanded="true" aria-controls="faq5">Can the Multi-Tenant Conferencing Solution integrate with calendar and scheduling tools?</a></h3>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Yes, this solution can be integrated with platforms like Google Calendar, Outlook, and CRMs to automate scheduling and reminders for meetings.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 6-->
                            <div class="card">
                                <div class="card-header" id="faqhead6">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                                    aria-expanded="true" aria-controls="faq6">How does a Multi-Tenant Conferencing Solution ensure data security and privacy?</a></h3>
                                </div>

                                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                    <div class="card-body">
                                    <p>The solution uses encryption protocols, multi-factor authentication, and access control measures to ensure that communications remain secure and private.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 7-->
                            <div class="card">
                                <div class="card-header" id="faqhead7">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7"
                                    aria-expanded="true" aria-controls="faq7">How does a Multi-Tenant Conferencing Solution support large-scale virtual events?</a></h3>
                                </div>

                                <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                    <div class="card-body">
                                    <p>It can handle thousands of participants in a single session, providing robust tools for event management, audience interaction, and real-time content delivery.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 8-->
                            <div class="card">
                                <div class="card-header" id="faqhead8">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8"
                                    aria-expanded="true" aria-controls="faq8">How does VoIPTech Solutions support businesses using Multi-Tenant Conferencing Solutions?</a></h3>
                                </div>

                                <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                    <div class="card-body">
                                        <p>VoIPTech Solutions offers deployment, troubleshooting, and ongoing technical support to ensure businesses get the most out of their Multi-Tenant Conferencing Solution.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 9-->
                            <div class="card">
                                <div class="card-header" id="faqhead9">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9"
                                    aria-expanded="true" aria-controls="faq9">Can the Multi-Tenant Conferencing Solution support mobile and cross-platform access?</a></h3>
                                </div>

                                <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Yes, it works across desktops, smartphones, and tablets, allowing users to join meetings from any device with internet access.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 10-->
                            <div class="card">
                                <div class="card-header" id="faqhead10">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10"
                                    aria-expanded="true" aria-controls="faq10">Does a Multi-Tenant Conferencing Solution offer analytics and reporting features?</a></h3>
                                </div>

                                <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Yes, the solution provides detailed insights into meeting attendance, participation rates, and performance metrics to help optimize future sessions.</p>
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