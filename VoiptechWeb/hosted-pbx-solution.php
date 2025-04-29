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
                    <h1>Reliable Hosted PBX Solutions providers for call centres & businesses</h1>
                    <p>Next-gen calling for future-ready businesses</p>
                    <div class="banner-feats">
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn1.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Cost-Efficiency</div>
                                <p>Say goodbye to high upfront hardware costs.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn2.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Scalability </div>
                                <p>Add lines or users without any hassle.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn3.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Remote Access</div>
                                <p>Work from anywhere with full PBX functionality.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn4.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Advanced Features</div>
                                <p>Voicemail-to-email, auto-attendant & more.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn5.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Minimal Maintenance</div>
                                <p>No on-site infrastructure to maintain.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn6.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Quick Setup</div>
                                <p>Get started fast with cloud deployment.</p>
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
                        <h2>Have Questions?</h2>
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
                <h3>Why Choose <span class="text-orange">VoIPTech Solutions </span> For <span class="text-orange">Hosted PBX?</span> </h3>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Auto Attendant</div>
                                <p class="mb-0">Greet and route callers professionally without manual intervention.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Call Routing</div>
                                <p class="mb-0">Direct calls to the right department or agent with precision.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Voicemail to Email</div>
                                <p class="mb-0">Never miss a message — get voicemails delivered straight to your inbox.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Multi-level IVR</div>
                                <p class="mb-0">Customize call flows with layered voice menus.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Call Recording</div>
                                <p class="mb-0">Record calls for training, compliance, or quality assurance.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Mobile Extension Support</div>
                                <p class="mb-0">Let your team take business calls from anywhere.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Real-Time Call Analytics</div>
                                <p class="mb-0">Get instant call stats to monitor performance.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">CRM Integration</div>
                                <p class="mb-0">Sync calls with your customer database for better service.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">HD Voice Quality</div>
                                <p class="mb-0">Crisp audio ensures smooth conversations every time.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Disaster Recovery</div>
                                <p class="mb-0">Keep your phone system running, even during outages.</p>
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
                    <img src="assets/images/hosted-pbx-solution1.svg" alt="Why Choose VoipTechr Solutions For Fusion PBX?" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 2 -->
        <div class="row flex-column-reverse flex-md-row-reverse align-items-center _feat-box py-4">
            <div class="col col-md-6">
                <h3>Key Benefits of Choosing <span class="text-orange">Voip Tech Solutions</span> for <span class="text-orange">Hosted  PBX</span></h3>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Cost-Efficient Communication</div>
                                <p class="mb-0">Eliminate on-premise PBX hardware and reduce calling costs.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Scalable as You Grow</div>
                                <p class="mb-0">Add or remove users and features anytime with ease.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Quick Setup & Zero Maintenance</div>
                                <p class="mb-0">Cloud-based system requires minimal IT involvement.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Enhanced Remote Collaboration</div>
                                <p class="mb-0">Empower remote teams with mobile and desktop access.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Professional Business Image</div>
                                <p class="mb-0">Auto attendants and call flows make your business sound enterprise-ready.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Reliable Support</div>
                                <p class="mb-0">Our experts are available 24/7 to keep you connected.</p>
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
                    <img src="assets/images/hosted-pbx-solution2.svg" alt="Key Benefits of Choosing Voip Tech Solutions for Hosted PBX" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 3 -->
        <div class="row flex-column-reverse flex-md-row align-items-center _feat-box py-4">
            <div class="col col-md-6">
                <h3>How VoIPTech Solutions <span class="text-orange">Hosted PBX  </span>  Works</h3>
                <div class="_content">
                    <p>Our Hosted PBX solution is built to simplify and scale your business communications. Here's how it functions smoothly:</p>
                    <ul class="list2 ">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 1: Connect Your Team</div>
                                <p class="mb-0">Users log in through IP phones, softphones, or mobile apps — no hardware installation needed.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 2: Configure Call Flow</div>
                                <p class="mb-0">Set up call routing rules, extensions, auto-attendants, voicemail, and more via an intuitive web interface.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 3: Make & Manage Calls</div>
                                <p class="mb-0">Enjoy high-quality inbound/outbound calling, call transfers, conferencing, and voicemail management.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 4: Monitor & Optimize</div>
                                <p class="mb-0">Track performance in real time with reports on call logs, agent status, and system health.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Step 5: Scale as Needed</div>
                                <p class="mb-0">Add users, features, or integrations with a few clicks — perfect for growing teams and evolving needs.</p>
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
                    <img src="assets/images/hosted-pbx-solution3.svg" alt="How VoIPTech Solutions Hosted PBX Works" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>

        <!-- Faet 4 -->
        <div class="row flex-column-reverse flex-md-row-reverse align-items-center _feat-box">
            <div class="col col-md-6">
                <h3>Industries We Serve</h3>
                <div class="_content">
                    <p>VoIPTech’s Hosted PBX empowers a wide range of industries with flexible, scalable, and cost-effective cloud telephony solutions.</p>
                    <ul class="list2 icons-list">
                        <li>
                            <span class="_icn">📞</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Call Centers</div>
                                <p class="mb-0">Boost agent performance and manage high call volumes with ease.</p>
                            </div>
                        </li>
                        <li>
                            <span class="_icn">🏥</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Healthcare</div>
                                <p class="mb-0">Ensure secure and efficient patient communication with HIPAA-compliant features.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">📱</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Tech Startups </div>
                                <p class="mb-0">Support agile teams with mobile-friendly, cloud-based communication systems.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏫</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Education</div>
                                <p class="mb-0">Support seamless virtual classrooms and faculty coordination.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏦</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Financial Services </div>
                                <p class="mb-0">Enhance client service with secure, multi-channel communication tools.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🛒</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">E-commerce </div>
                                <p class="mb-0">Manage customer queries and orders smoothly with IVRs and call routing.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏢</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Corporate Enterprises </div>
                                <p class="mb-0">Streamline internal communication and improve team collaboration across departments.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏨 </span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Hospitality</div>
                                <p class="mb-0">Deliver prompt and personalized guest service through unified communication.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">💼</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Legal Firms </div>
                                <p class="mb-0">Maintain client confidentiality with secure voice logs and call recording.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏛️</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Government Agencies </div>
                                <p class="mb-0">Enable reliable internal and external communication while maintaining regulatory standards.</p>
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
                    <img src="assets/images/hosted-pbx-solution4.svg" alt="Industries We Serve" class="img-fluid" loading="lazy" />
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
                            <h3>Book a Free Demo</h3>
                            <p>Connect with our experts and explore how Hosted PBX fits your business needs.</p>
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
                            <p>We’ll tailor the PBX features to suit your team size, call volume, and operational goals.</p>
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
                            <h3>Go Live with Full Support</h3>
                            <p>Enjoy seamless deployment with 24/7 technical assistance and training from our support team.</p>
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
                                    aria-expanded="true" aria-controls="faq1">How does Hosted PBX differ from traditional PBX systems?</a>
                                      </h3>
                                </div>

                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                    Hosted PBX operates via the cloud, eliminating the need for bulky hardware and on-site maintenance.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 2-->
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2">Can Hosted PBX be used across multiple locations?</a>
                                     </h3>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                    Yes, it enables seamless communication between teams regardless of location, making it perfect for remote or multi-branch operations.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 3-->
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3">Is Hosted PBX suitable for small businesses?</a>
                                     </h3>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                    Absolutely. It's cost-effective, scalable, and offers enterprise-level features even to startups and small teams.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 4-->
                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                    aria-expanded="true" aria-controls="faq4">Are calls secure over a Hosted PBX system?</a>
                                     </h3>
                                </div>

                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                    Yes, VoIPTech’s Hosted PBX includes robust encryption and firewall protection to keep your communication private and secure.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 5-->
                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                                    aria-expanded="true" aria-controls="faq5">Will it integrate with our CRM and helpdesk software?</a>
                                     </h3>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                    Yes, our Hosted PBX easily integrates with most major CRM and business tools to streamline workflows
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 6-->
                            <div class="card">
                                <div class="card-header" id="faqhead6">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                                    aria-expanded="true" aria-controls="faq6">Can I scale up or down based on team size?</a>
                                     </h3>
                                </div>

                                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                    <div class="card-body">
                                    Definitely. You can add or remove extensions as your team grows or changes—instantly and effortlessly.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 7-->
                            <div class="card">
                                <div class="card-header" id="faqhead7">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7"
                                    aria-expanded="true" aria-controls="faq7">Do I need to invest in new hardware?</a>
                                     </h3>
                                </div>

                                <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                    <div class="card-body">
                                    No. Hosted PBX works with your existing internet-enabled devices, saving you hardware costs.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 8-->
                            <div class="card">
                                <div class="card-header" id="faqhead8">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8"
                                    aria-expanded="true" aria-controls="faq8">How fast can we get started with Hosted PBX?</a>
                                     </h3>
                                </div>

                                <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                    <div class="card-body">
                                    Our onboarding process is quick. Most clients go live within 24-48 hours after signing up.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 9-->
                            <div class="card">
                                <div class="card-header" id="faqhead9">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9"
                                    aria-expanded="true" aria-controls="faq9">Is there a backup if the internet goes down?</a>
                                     </h3>
                                </div>

                                <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                    <div class="card-body">
                                    Yes, we offer automatic failover and call forwarding to mobile numbers to ensure zero downtime.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 10-->
                            <div class="card">
                                <div class="card-header" id="faqhead10">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10"
                                    aria-expanded="true" aria-controls="faq10">Who handles support and maintenance?</a>
                                    </h3>
                                </div>

                                <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                                    <div class="card-body">
                                    VoIPTech’s expert team takes care of everything—from setup and updates to ongoing 24/7 technical support.
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