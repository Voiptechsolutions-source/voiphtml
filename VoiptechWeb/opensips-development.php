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
                    <h1>Reliable OpenSIPS Development Partner for Carriers and Enterprises</h1>
                    <p>Boost VoIP performance with OpenSIPS</p>
                    <div class="banner-feats">
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn1.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">High Scalability</div>
                                <p>Scale your system to support thousands of calls.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn2.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Flexible Routing</div>
                                <p>Customize call routing to suit your needs.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn3.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Advanced Load Balancing</div>
                                <p>Distribute traffic efficiently across servers.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn4.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Cost-Efficient</div>
                                <p>Open-source solution reduces costs.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn5.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Carrier-Grade Reliability</div>
                                <p>Ensure high uptime and performance.</p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="feat-icn"><img src="assets/images/icons/feat-icn6.png" alt="Cost-Effective Communication" /></div>
                            <div class="_feat">
                                <div class="_feat-head">Custom Integrations</div>
                                <p>Integrate seamlessly with CRMs and other apps.</p>
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
                <h2>Why Choose <span class="text-orange">VoIPTech Solutions</span> For <span class="text-orange">OpenSIPS Development?</span> </h2>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Expert OpenSIPS Development</div>
                                <p class="mb-0">We specialize in creating custom OpenSIPS solutions tailored to your needs.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Scalability & Flexibility</div>
                                <p class="mb-0">Easily scale your system to meet growing demands.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Advanced Call Routing</div>
                                <p class="mb-0">Implement custom, efficient call routing policies.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">High Availability & Load Balancing</div>
                                <p class="mb-0">Ensure reliability with load balancing and minimal downtime.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Custom Integrations</div>
                                <p class="mb-0">Integrate seamlessly with CRMs and other systems.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Open-Source & Cost-Efficient</div>
                                <p class="mb-0">OpenSIPS reduces costs without compromising performance.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Carrier-Grade Performance</div>
                                <p class="mb-0">Achieve high traffic capacity and uptime with carrier-grade reliability.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Security & Compliance</div>
                                <p class="mb-0">Build secure systems with encryption and fraud protection.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Ongoing Support & Maintenance</div>
                                <p class="mb-0">Get continuous support and regular system updates.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Customizable Solutions</div>
                                <p class="mb-0">Tailor OpenSIPS to meet your unique business requirements.</p>
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
                    <img src="assets/images/opensips-Services1.svg" alt="Why Choose VoIPTech Solutions for Asterisk Development? " class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 2 -->
        <div class="row flex-column-reverse flex-md-row-reverse align-items-center _feat-box py-4">
            <div class="col col-md-6">
                <h2>Key Benefits of Choosing <span class="text-orange">Voip Tech Solutions</span> for <span class="text-orange">OpenSIPS Development</span></h2>
                <div class="_content">
                    <ul class="list2">
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Scalability</div>
                                <p class="mb-0">Effortlessly scale your system to accommodate growing call volumes.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Flexibility</div>
                                <p class="mb-0">Tailor your OpenSIPS solution to meet specific business needs.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Cost Efficiency</div>
                                <p class="mb-0">Save on licensing fees with OpenSIPS's open-source model</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">High Availability</div>
                                <p class="mb-0">Ensure reliable uptime with fault-tolerant, high-performance systems.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Advanced Features</div>
                                <p class="mb-0">Take advantage of advanced features like load balancing and call routing.</p>
                            </div>  
                        </li>
                        <li>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Seamless Integration</div>
                                <p class="mb-0">Integrate OpenSIPS easily with CRMs, billing systems, and more.</p>
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
                    <img src="assets/images/opensips-Services2.svg" alt="Key Benefits of Choosing OpenSIPS Development with VoIPTech Solutions" class="img-fluid" loading="lazy" />
                </div>
            </div>
        </div>
        <!-- Faet 3 -->
        <div class="row flex-column-reverse flex-md-row align-items-center _feat-box">
            <div class="col col-md-6">
                <h2>Industries We Serve</h2>
                <div class="_content">
                    <p>We provide OpenSIPS development solutions across various industries, ensuring tailored services that enhance performance and efficiency.</p>
                    <ul class="list2 icons-list">
                        <li>
                            <span class="_icn">📞</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Call Centers</div>
                                <p class="mb-0">Optimize call routing and load balancing for high-volume centers.</p>
                            </div>
                        </li>
                        <li>
                            <span class="_icn">🏥</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Healthcare</div>
                                <p class="mb-0">Secure and compliant systems for medical communication.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏦</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Financial Services</div>
                                <p class="mb-0">Build secure, reliable communication channels for banking services.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">🏬</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">E-Commerce</div>
                                <p class="mb-0">Seamless integrations for customer support and communication.</p>
                            </div>  
                        </li>
                        
                        <li>
                            <span class="_icn">💼</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">Telecommunications</div>
                                <p class="mb-0">Scalable and reliable VoIP systems for telecom providers.</p>
                            </div>  
                        </li>
                        <li>
                            <span class="_icn">⚙</span>
                            <div class="list-text d-flex flex-column">
                                <div class="list-heading">SaaS Providers</div>
                                <p class="mb-0">Customize communication solutions for subscription-based software services.</p>
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
                    <img src="assets/images/opensips-Services3.svg" alt="Industries We Serve" class="img-fluid" loading="lazy" />
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
                            <h3>Contact Us</h3>
                            <p>Reach out via our form, email, or phone to discuss your requirements.</p>
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
                            <h3>Choose Your Solution</h3>
                            <p>Select a package that fits your needs and budget.</p>
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
                            <h3>Launch & Support</h3>
                            <p>We develop, deploy, and provide ongoing support for your OpenSIPS solution</p>
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

      <?php include 'includes/footer-contact-form.php'; ?>
      <!-- Contact Form --> 
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
                                    aria-expanded="true" aria-controls="faq1">Is OpenSIPS a cost-effective solution?</a>
                                     </h3>
                                </div>

                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                    Yes, being open-source, OpenSIPS helps reduce licensing costs while offering robust capabilities.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 2-->
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2">How long does it take to set up an OpenSIPS system?</a>
                                    </h3>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                    The setup time depends on the complexity, but we ensure timely delivery with minimal downtime.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 3-->
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3">What support do you provide for OpenSIPS systems?</a>
                                    </h3>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                    We offer ongoing support, troubleshooting, and regular updates for your OpenSIPS solution.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 4-->
                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                    aria-expanded="true" aria-controls="faq4">Do you offer custom OpenSIPS development?</a>
                                     </h3>
                                </div>

                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                    Yes, we provide customized solutions tailored to your unique business requirements.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 5-->
                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                                    aria-expanded="true" aria-controls="faq5">How secure is OpenSIPS?</a>
                                     </h3>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                    OpenSIPS includes advanced encryption and fraud protection features to ensure secure communications.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 6-->
                            <div class="card">
                                <div class="card-header" id="faqhead6">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                                    aria-expanded="true" aria-controls="faq6">How can VoIPTech Solutions optimize my OpenSIPS system?</a>
                                     </h3>
                                </div>

                                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                    <div class="card-body">
                                    We offer tailored OpenSIPS solutions that boost performance, scalability, and security.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 7-->
                            <div class="card">
                                <div class="card-header" id="faqhead7">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7"
                                    aria-expanded="true" aria-controls="faq7">Why choose VoIPTech Solutions for OpenSIPS development?</a>
                                    </h3>
                                </div>

                                <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                    <div class="card-body">
                                    Our expertise in OpenSIPS ensures customized, efficient, and cost-effective solutions for your needs.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 8-->
                            <div class="card">
                                <div class="card-header" id="faqhead8">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8"
                                    aria-expanded="true" aria-controls="faq8">Does VoIPTech Solutions offer ongoing OpenSIPS support?</a>
                                    </h3>
                                </div>

                                <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                    <div class="card-body">
                                    Yes, we provide continuous support and maintenance to ensure your OpenSIPS system functions flawlessly.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 9-->
                            <div class="card">
                                <div class="card-header" id="faqhead9">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9"
                                    aria-expanded="true" aria-controls="faq9">Can VoIPTech Solutions integrate OpenSIPS with other platforms?</a>
                                    </h3>
                                </div>

                                <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                    <div class="card-body">
                                    Absolutely! We integrate OpenSIPS with CRM, billing systems, and other communication platforms smoothly.
                                    </div>
                                </div>
                            </div>
                            <!-- Faq 10-->
                            <div class="card">
                                <div class="card-header" id="faqhead10">
                                    <h3 class="mb-0">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10"
                                    aria-expanded="true" aria-controls="faq10">How does VoIPTech Solutions ensure high-quality OpenSIPS development?</a>
                                    </h3>
                                </div>

                                <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                                    <div class="card-body">
                                    We follow best practices, conduct extensive testing, and provide robust support for optimal performance.
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