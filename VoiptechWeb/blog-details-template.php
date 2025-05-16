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
     <section class="bg-light-orange py-80 blog-single-banner">
        <div class="container">
            <div class="d-flex justify-content-between flex-column-reverse flex-md-row">
                <!-- Banner Content -->
                <div class="banner-content">
                    <div class="blog-date mb-4">
                        <span class="rounded-pill py-2 px-4">August 18, 2024</span>
                    </div>
                    <h1>Call Center Solutions for Customer Success</h1>
                    <p>Compare top call center software for your team. 
                        Learn best providers and features, and get 
                        advice for choosing the right call center solution</p>
                    <div class="author-info mt-3">
                        <div class="author-pill">
                            <div class="author-pic">
                                <img src="assets/images/user-pic.png" alt="Author"  />
                            </div>
                             <div class="name">
                                <span>Author</span>
                                <span class="_name text-orange">Dominic Kent</span>
                             </div>   
                        </div>
                    </div>
                    
                    
                </div>
                <!-- Hero image -->
                 <div class="hero-img">
                    <img src="assets/images/blog-feat-img.png" alt="Call center solution" class="img-fluid" />
                 </div>
            </div>
        </div>
     </section>

     <!-- Blog Content-->
    <section class="blog-content py-5">
        <div class="container">
            <p>Call centers must manage voice traffic congestions with voice traffic in order to keep the communications smooth and effective, also at the same time cost-efficient. CC Traffic (Call Center Traffic): It is one of the main concepts in this industry. But before knowing more about it, what is CC traffic and why is it important? So, this guide discusses all about CC Traffic, what is it and why it matters and how businesses can optimize it for good performance.</p>
            <div class="row">
                <aside class="col-12 col-lg-3">
                    <h3>Contents</h3>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-home" aria-selected="true">Understanding CC Traffic</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-profile" aria-selected="false">Types of CC Traffic</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-messages" aria-selected="false">Metrics that Matter for CC Traffic Performance</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-settings" aria-selected="false">How to Optimize CC Traffic</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-settings" aria-selected="false">Establish Call Routing Strategies</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-settings" aria-selected="false">Stay Within the Bounds of the Law</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-settings" aria-selected="false">Future of CC Traffic</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-settings" aria-selected="false">Conclusion</a>
                       
                    </div>
                    <div class="demo-btn mt-4">
                        <a href="#" data-toggle="modal" data-target="#myModalForm" class="btn bg-orange text-white rounded-pill  px-4 text-uppercase">Get Started</a>
                    </div>
                </aside>
                <article class="col-12 col-lg-9">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h2>Understanding CC Traffic</h2>
                        <p>CC Traffic stands for call center traffic which is the setup of calls that are routed through a VoIP (Voice over Internet Protocol) or telephony network, specifically dedicated to call center operations. The majority of traffic can be inbound (customer ring to call center) or outbound (call center ring out to consumer, lead). CC Traffic is an essential part of business communications for businesses that work with customer support or telemarketers and uses it for lead generation.</p>
                       
                       
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h2>Types of CC Traffic</h2>
                        <h3>Inbound CC Traffic:</h3>
                        <ul class="orange-check">
                            <li>
                               Customer service inquiries
                            </li>
                            <li>
                              Technical support calls
                            </li>
                            <li>Processing and assisting orders</li>
                        </ul>
                        <h3>Outbound CC Traffic:</h3>
                        <ul class="orange-check">
                            <li>Telemarketing campaigns</li>
                            <li>Following up with and surveying customers</li>
                            <li>Debt collection and sales calls</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h2>Businesses have a few metrics that they use to assess the efficiency of CC Traffic:</h2>
                        <p><strong>Answer-Seizure Ratio (ASR)</strong>  — the ratio of calls connected to calls attempted The ASR (Automatic Speech recognition) should be high to have all the calls routed accurately.</p>
                        <p><strong>Average Call Duration (ACD):</strong>Average time taken to call. Longer durations can also mean clunky conversations, and are thus typically inferred as lack of engagement.</p>
                        <p><strong>Post-Dial Delay (PDD):</strong> The time lag between dialing a number, and hearing the first ring A lower PDD ensures that customers get connected for complaint resolution quicker, therefore, offering an improved customer experience.</p>
                        <p><strong>Call Completion Rate (CCR):</strong> The percentage of calls that reach a successful outcome (e.g., answered by a live agent).</p>
                        <h3>Importance of High-Quality CC Traffic</h3>
                        <p>Using high-quality CC Traffic ensures:</p>
                        <ul class="orange-check">
                            <li>Clear voice quality for effective communication</li>
                            <li>Reduced dropped calls, improving customer satisfaction</li>
                            <li>Lower operational costs by optimizing routing and termination</li>
                            <li>Increased sales and conversions due to better call connectivity</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h2>How to Optimize CC Traffic</h2>
                        <h3>Find a Trustworthy VoIP Provider</h3>
                        <p>Join hands with a reliable VoIP service provider that is serious about providing stable connections, low latency, and low downtime.</p>
                        <h3>Employ CLI (Caller Line Identification ) Routes</h3>
                        <p>CLI routes provide caller ID information, increasing trust and improving answer rates.</p>
                        <h3>Track traffic data and analyse it</h3>
                        <p>Keep an eye on ASR, ACD, and PDD proactively to figure out where to optimally route calls to improve the efficiency of calls going through your contact center.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h2>Establish Call Routing Strategies</h2>
                        <p>For example, the LCR (least-cost routing) can be used to assure that you are paying less while enjoying the best voice OIP services quality.

                        When routing users for an experience consider the geographic nature of your users in connecting them to local agents.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h2>Stay Within the Bounds of the Law </h2>
                        <p>Regulatory Compliance Make Sure To Follow The Local And International Telephony Regulations To Avoid Legal And Operational Hurdles</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h2>Future of CC Traffic </h2>
                        <p>CC Traffic has come a long way with the changing technology with AI, cloud-based Telephony, and automation. Call analytics powered by AI, chatbots and predictive dialing are being integrated to improve call center productivity. Moreover, the increasing growth of 5G and VoIP innovations are projected to enhance call quality and decrease operational expenses.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h2>Conclusion</h2>
                        <p>Statistics show that CC Traffic is an important factor among your call center operations which will highly influence customer satisfaction, sales conversions, and overall efficiency to your business. Through reducing call routing, ensuring VoIP support, and using tech-savvy solutions, businesses can improve their call center services and remain competitive. Quality CC Traffic management provides a firm footing towards operational prowess and improved customer experience for any call center enterprise.</p>
                    </div>
                  </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Related Blog Posts -->
     <section class="related-blog pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="related-post">
                        <div class="post-img">
                            <a href="#">
                                <img src="assets/images/post-img1.png" alt="Post 1" loading="lazy" />
                            </a>
                        </div>
                        <div class="post-meta">
                            <div class="cat">Lifestyle</div>
                            <div class="date-time">
                                <div class="calendr-icn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg>
                                </div>
                                <div class="_date">
                                    March 7, 2025
                                </div>
                            </div>
                        </div>
                        <div class="post-data">
                            <h3><a href="#"> How to Optimize VICIdial for Maximum Call Center Performance</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                        </div>
                        <div class="author-comment">
                            <span class="by">By VoIPTech Solutions</span>
                            <div class="no-comments">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2s0 0 0 0s0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.2-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9c0 0 0 0 0 0s0 0 0 0l-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"/></svg></span>
                                10 Comments
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="related-post">
                        <div class="post-img">
                            <a href="#">
                                <img src="assets/images/post-img2.png" alt="Post 1" loading="lazy" />
                            </a>
                        </div>
                        <div class="post-meta">
                            <div class="cat">Lifestyle</div>
                            <div class="date-time">
                                <div class="calendr-icn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg>
                                </div>
                                <div class="_date">
                                    March 7, 2025
                                </div>
                            </div>
                        </div>
                        <div class="post-data">
                            <h3><a href="#"> How to Optimize VICIdial for Maximum Call Center Performance</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                        </div>
                        <div class="author-comment">
                            <span class="by">By VoIPTech Solutions</span>
                            <div class="no-comments">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2s0 0 0 0s0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.2-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9c0 0 0 0 0 0s0 0 0 0l-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"/></svg></span>
                                10 Comments
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="related-post">
                        <div class="post-img">
                            <a href="#">
                                <img src="assets/images/post-img3.png" alt="Post 1" loading="lazy" />
                            </a>
                        </div>
                        <div class="post-meta">
                            <div class="cat">Lifestyle</div>
                            <div class="date-time">
                                <div class="calendr-icn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg>
                                </div>
                                <div class="_date">
                                    March 7, 2025
                                </div>
                            </div>
                        </div>
                        <div class="post-data">
                            <h3><a href="#"> How to Optimize VICIdial for Maximum Call Center Performance</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                        </div>
                        <div class="author-comment">
                            <span class="by">By VoIPTech Solutions</span>
                            <div class="no-comments">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2s0 0 0 0s0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.2-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9c0 0 0 0 0 0s0 0 0 0l-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"/></svg></span>
                                10 Comments
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="demo-btn text-center mt-5">
                <a href="blogs.php" class="btn bg-orange text-white rounded-pill  px-4 text-uppercase">View More</a>
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