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
                    <h1>Scalable Multi-Tenant Broadcasting Solutions Provider for Telcos & Enterprises</h1>
                    <p>Broadcast smarter, reach further, all from one platform</p>
                    <div class="banner-feats">
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn1.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Multi-Tenant Architecture</div>
                                <p>Manage multiple clients separately on one platform.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn2.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Centralized Control</div>
                                <p>Oversee all tenants and campaigns from one dashboard.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn3.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head"> Automated Voice Broadcasting</div>
                                <p>Run bulk campaigns with minimal effort.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn4.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Custom Caller IDs</div>
                                <p>Assign unique caller IDs for each tenant.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn5.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head"> Usage & Billing Reports</div>
                                <p>View tenant-specific reports for easy billing.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn6.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">High Scalability</div>
                                <p>Handle thousands of calls simultaneously.</p>
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
                <h2>Why Choose <span class="text-orange">VoIPTech Solutions </span> For <span class="text-orange">Multi-Tenant Broadcasting?</span> </h2>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Customizable Dashboard</div>
                                <p class="mb-0">Tailor the UI for each tenant with branding and access levels.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">API Integration</div>
                                <p class="mb-0">Integrate seamlessly with CRMs or third-party systems.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Real-Time Monitoring</div>
                                <p class="mb-0">Track campaign progress and call statuses live.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Failover Support</div>
                                <p class="mb-0">Automatic rerouting ensures delivery even during outages.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Role-Based Access</div>
                                <p class="mb-0">Control permissions for admins, users, and resellers.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Call Recording</div>
                                <p class="mb-0">Enable recordings for compliance or quality review.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">DNC (Do Not Call) Filtering</div>
                                <p class="mb-0">Auto-skip DNC numbers for compliance and accuracy.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Multilingual Support</div>
                                <p class="mb-0">Campaigns in local languages to suit diverse audiences.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Time-Zone Based Scheduling</div>
                                <p class="mb-0">Reach audiences at the right time in their local time zones.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Custom Reports</div>
                                <p class="mb-0">Generate detailed, tenant-wise performance reports.</p>
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
                    <img src="assets/images/multi-broad-solution1.svg" alt="Why Choose VoipTechr Solutions For Multi-Tenant Broadcasting
?" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 2 -->
        <div class="row flex-column-reverse flex-md-row-reverse align-items-center _feat-box py-4">
            <div class="col col-md-6">
                <h2>Key Benefits of Choosing <span class="text-orange">VoIPTech Solutions</span> for <span class="text-orange">Multi-Tenant Broadcasting</span></h2>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Optimized for Service Providers</div>
                                <p class="mb-0">Built to handle multiple clients with total isolation and control.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Fast Deployment</div>
                                <p class="mb-0">Launch tenant accounts and campaigns in minutes.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Cost-Effective Growth</div>
                                <p class="mb-0">One platform to manage all clients, saving infrastructure costs.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Global Reach, Local Presence</div>
                                <p class="mb-0">Broadcast locally and internationally with geo-flexibility.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">24/7 Expert Support</div>
                                <p class="mb-0">Our technical team is always ready to help you succeed.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Proven Performance</div>
                                <p class="mb-0">Trusted by telcos and enterprises for reliable campaign delivery.</p>
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
                    <img src="assets/images/multi-broad-solution2.svg" alt="Key Benefits of Choosing Voip Tech Solutions for Multi-Tenant Broadcasting
" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 3 -->
        <div class="row flex-column-reverse flex-md-row align-items-center _feat-box py-4">
            <div class="col col-md-6">
                <h2>How VoIPTech Solutions <span class="text-orange">Multi-Tenant Broadcasting </span>  Works</h2>
                <div class="_content">
                    <p>Manage large-scale campaigns for multiple clients with a few clicks:</p>
                    <ul class="list2 ">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 1: Set Up Tenant Accounts</div>
                                <p class="mb-0">Create isolated accounts with role-based access for each client.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 2: Upload Contact Lists & Campaigns</div>
                                <p class="mb-0">Add audio messages, contact data, and schedule campaigns per tenant.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 3: Launch Broadcasting</div>
                                <p class="mb-0">Initiate campaigns with one-click broadcast across selected tenant accounts.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 4: Track in Real Time</div>
                                <p class="mb-0">Monitor campaign success with live analytics and call statuses.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 5: Generate Reports & Bill</div>
                                <p class="mb-0">Access usage reports and auto-generate tenant-wise billing.</p>
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
                    <img src="assets/images/multi-broad-solution3.svg" alt="How VoIPTech Solutions Multi-Tenant Broadcasting
 Works" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>

        <!-- Faet 4 -->
        <div class="row flex-column-reverse flex-md-row-reverse align-items-center _feat-box">
            <div class="col col-md-6">
                <h2>Industries We Serve</h2>
                <div class="_content">
                    <p>VoIPTech’s Multi-Tenant Broadcasting is perfect for large-scale communication across industries:</p>
                    <ul class="list2 icons-list">
                        <li>
                            <span class="_icn">🏫</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Education Groups</div>
                                <p class="mb-0">Notify parents and students about updates, closures, and events.</p>
                            </div>
                        </li>
                       
                        <li>
                            <span class="_icn">🏥</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Healthcare Networks</div>
                                <p class="mb-0">Send appointment reminders and health alerts to patients.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">📞</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Telecom Providers</div>
                                <p class="mb-0">Offer voice broadcasting as a white-label service.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏪 </span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Retail Chains</div>
                                <p class="mb-0">Run promotional campaigns and customer loyalty messages.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏛️ </span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Government Services</div>
                                <p class="mb-0">Disseminate public alerts and information rapidly.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">💼</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Franchise Businesses</div>
                                <p class="mb-0">Enable location-specific marketing from a central hub.</p>
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
                    <img src="assets/images/multi-broad-solution4.svg" alt="Industries We Serve" class="img-fluid" loading="lazy" />
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
                            <h3>Request a Free Demo</h3>
                            <p>See how our broadcasting solution fits your business model.</p>
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
                            <h3>Customize Your Setup</h3>
                            <p>Configure tenants, access levels, and broadcast parameters.</p>
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
                            <h3>Launch Campaigns with Confidence</h3>
                            <p>Start broadcasting with full VoIPTech support and onboarding.</p>
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
                                    aria-expanded="true" aria-controls="faq1">How does a Multi-Tenant Broadcasting Solution support scalable communication?</a></h3>
                                </div>

                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                    <p>A Multi-Tenant Broadcasting Solution enables simultaneous broadcast to multiple tenants, making it ideal for large-scale events or announcements.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 2-->
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2">Why do businesses prefer a Multi-Tenant Broadcasting Solution for webinars?</a></h3>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                    <p>A Multi-Tenant Broadcasting Solution ensures that different groups or clients can be reached individually while maintaining secure and efficient communication channels.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 3-->
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3">Can a Multi-Tenant Broadcasting Solution handle different content types?</a></h3>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Yes, it can support audio, video, and text-based broadcasts, offering versatile communication options across industries.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 4-->
                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                    aria-expanded="true" aria-controls="faq4">How does VoIPTech Solutions tailor a Multi-Tenant Broadcasting Solution for enterprises?</a></h3>
                                </div>

                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                    <p>VoIPTech Solutions customizes Multi-Tenant Broadcasting Solutions with branding, user permissions, and specific feature sets to meet enterprise needs.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 5-->
                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                                    aria-expanded="true" aria-controls="faq5">Is the Multi-Tenant Broadcasting Solution secure for sensitive information?</a></h3>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Yes, this solution provides end-to-end encryption and access controls, ensuring that broadcasts are secure and protected from unauthorized access.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 6-->
                            <div class="card">
                                <div class="card-header" id="faqhead6">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                                    aria-expanded="true" aria-controls="faq6">How does a Multi-Tenant Broadcasting Solution support live audience interaction?</a></h3>
                                </div>

                                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Features like live Q&A, chat rooms, and polling make it easy for the audience to interact in real-time, enhancing engagement during broadcasts.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 7-->
                            <div class="card">
                                <div class="card-header" id="faqhead7">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7"
                                    aria-expanded="true" aria-controls="faq7">Can the Multi-Tenant Broadcasting Solution support large-scale global events?</a></h3>
                                </div>

                                <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Yes, it can handle large global events with multiple tenants, ensuring smooth delivery to a wide range of audiences without performance loss.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 8-->
                            <div class="card">
                                <div class="card-header" id="faqhead8">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8"
                                    aria-expanded="true" aria-controls="faq8">How does VoIPTech Solutions provide ongoing support for Multi-Tenant Broadcasting Solutions?</a></h3>
                                </div>

                                <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                    <div class="card-body">
                                        <p>VoIPTech Solutions offers continuous monitoring, troubleshooting, and updates to keep the Multi-Tenant Broadcasting Solution running smoothly.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 9-->
                            <div class="card">
                                <div class="card-header" id="faqhead9">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9"
                                    aria-expanded="true" aria-controls="faq9">Does the Multi-Tenant Broadcasting Solution offer analytics and reporting tools?</a></h3>
                                </div>

                                <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Yes, the solution includes robust analytics to track engagement, audience behavior, and performance metrics, helping optimize future broadcasts.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 10-->
                            <div class="card">
                                <div class="card-header" id="faqhead10">
                                    <h3 class="mb-0"><a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10"
                                    aria-expanded="true" aria-controls="faq10">Can a Multi-Tenant Broadcasting Solution integrate with third-party platforms?</a></h3>
                                </div>

                                <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                                    <div class="card-body">
                                    <p>Yes, it can be integrated with CRM systems, email platforms, and social media for a more cohesive and streamlined broadcasting experience.</p>
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