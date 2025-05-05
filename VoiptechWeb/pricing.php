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
     <section class="py-80 pricing-banner">
        <div class="container">
            <div class="d-flex justify-content-center flex-column-reverse flex-md-row ">
                <!-- Banner Content -->
                <div class="banner-content text-center">
                    <p class="text-small text-orange">PRICING PLANS DETAIL</p>
                    <h1>Flexible package according to your needs</h1>
                </div>
               
            </div>
        </div>
     </section>

     <!-- Priicng Section -->
    <secton class="pricing-section">
        <div class="container ">

            <div class="row">
                <div class="col-md-11 col-xl-11 mx-auto">
                    <p class="lead text-center mb-4">Enjoy all the features we provide.</p>

                    <div class="row justify-content-center mt-3 mb-2">
                        <div class="col-auto">
                            <nav class="nav btn-group pricing-tabs">
                                <a href="#annual" class="btn btn-outline-primary active" data-toggle="tab">Annually</a>
                                <a href="#monthly" class="btn btn-outline-primary " data-toggle="tab">Monthly</a>
                            </nav>
                        </div>
                    </div>

                    <div class="tab-content pricing-tab-content">
                        <div class="tab-pane fade show active" id="annual">
                            <div class="row py-4">
                                <div class="col-lg-4 mb-3 mb-md-0">
                                    <div class="card  pricing-plan shadow-sm">
                                        <div class="card-body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="plan-icn"><img src="assets/images/icons/basic-plan-icn.png" alt="Basic Plan" /></div>
                                                <div class="plan-name">Basic Plan</div>
                                                <div class="price-cont">
                                                    <div class="_price">$15</div>
                                                    <div class="_per">/Month</div>
                                                </div>
                                                <div class="plan-desc">
                                                    <p>Good for those of you who are new to or want to create your own website.</p>
                                                </div>
                                            </div>
                                            <div class="_includes">
                                                <ul class="list-unstyled">
                                                    <li>SSD Space 20 GB</li>
                                                    <li>4 Core CPU</li>
                                                    <li>4 GB Memory</li>
                                                    <li>Instant Backup</li>
                                                    <li>Unlimited Bandwidth</li>
                                                    <li>1 Domain</li>
                                                </ul>
                                            </div>
                                            <div class="mt-auto">
                                                <a href="#" class="btn text-white bg-orange btn-block">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 mb-md-0">
                                    <div class="card h-100 pricing-plan _recomended">
                                        <div class="card-body d-flex flex-column">
                                            <div class="mb-4">
                                                <div class="plan-icn"><img src="assets/images/icons/personal-plan-icn.png" alt="Personal Plan" /></div>
                                                <div class="plan-name">Personal Plan</div>
                                                <div class="price-cont">
                                                    <div class="_price">$35</div>
                                                    <div class="_per">/Month</div>
                                                </div>
                                                <div class="plan-desc">
                                                    <p>Good for those of you who already know, and have started your website with complete and adequate features for your website</p>
                                                </div>
                                            </div>
                                            <div class="_includes">
                                                <ul class="list-unstyled">
                                                    <li>SSD Space 32 GB</li>
                                                    <li>8 Core CPU</li>
                                                    <li>16 GB Memory</li>
                                                    <li>Instant Backup</li>
                                                    <li>Unlimited Bandwidth</li>
                                                    <li>Mail Spam Protection</li>
                                                    <li>10 Ad-on Domain</li>
                                                    <li>5 Domain</li>
                                                </ul>
                                            </div>
                                            <div class="mt-auto">
                                                <a href="#" class="btn text-white bg-orange btn-block">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 mb-md-0">
                                    <div class="card pricing-plan shadow-sm">
                                        <div class="card-body d-flex flex-column">
                                            <div class="mb-4">
                                                <div class="plan-icn"><img src="assets/images/icons/business-plan-icn.png" alt="Basic Plan" /></div>
                                                <div class="plan-name">Business Plan</div>
                                                <div class="price-cont">
                                                    <div class="_price">$65</div>
                                                    <div class="_per">/Month</div>
                                                </div>
                                                <div class="plan-desc">
                                                    <p>For professionals, the features provided are sufficient to support your business.</p>
                                                </div>
                                            </div>
                                            <div class="_includes">
                                                <ul class="list-unstyled">
                                                    <li>SSD Space 64 GB</li>
                                                    <li>16 Core CPU</li>
                                                    <li>32 GB Memory</li>
                                                    <li>Instant Backup</li>
                                                    <li>Unlimited Bandwidth</li>
                                                    <li>Mail Spam Protection</li>
                                                    <li>Unlimited Ad-on Domain</li>
                                                    <li>Unlimited Domain</li>
                                                </ul>
                                            </div>
                                            <div class="mt-auto">
                                                <a href="#" class="btn text-white bg-orange btn-block">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="monthly">
                            <div class="row py-4">
                                <div class="col-lg-4 mb-3 mb-md-0">
                                    <div class="card  pricing-plan shadow-sm">
                                        <div class="card-body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="plan-icn"><img src="assets/images/icons/basic-plan-icn.png" alt="Basic Plan" /></div>
                                                <div class="plan-name">Basic Plan</div>
                                                <div class="price-cont">
                                                    <div class="_price">$15</div>
                                                    <div class="_per">/Month</div>
                                                </div>
                                                <div class="plan-desc">
                                                    <p>Good for those of you who are new to or want to create your own website.</p>
                                                </div>
                                            </div>
                                            <div class="_includes">
                                                <ul class="list-unstyled">
                                                    <li>SSD Space 20 GB</li>
                                                    <li>4 Core CPU</li>
                                                    <li>4 GB Memory</li>
                                                    <li>Instant Backup</li>
                                                    <li>Unlimited Bandwidth</li>
                                                    <li>1 Domain</li>
                                                </ul>
                                            </div>
                                            <div class="mt-auto">
                                                <a href="#" class="btn text-white bg-orange btn-block">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 mb-md-0">
                                    <div class="card h-100 pricing-plan _recomended">
                                        <div class="card-body d-flex flex-column">
                                            <div class="mb-4">
                                                <div class="plan-icn"><img src="assets/images/icons/personal-plan-icn.png" alt="Personal Plan" /></div>
                                                <div class="plan-name">Personal Plan</div>
                                                <div class="price-cont">
                                                    <div class="_price">$35</div>
                                                    <div class="_per">/Month</div>
                                                </div>
                                                <div class="plan-desc">
                                                    <p>Good for those of you who already know, and have started your website with complete and adequate features for your website</p>
                                                </div>
                                            </div>
                                            <div class="_includes">
                                                <ul class="list-unstyled">
                                                    <li>SSD Space 32 GB</li>
                                                    <li>8 Core CPU</li>
                                                    <li>16 GB Memory</li>
                                                    <li>Instant Backup</li>
                                                    <li>Unlimited Bandwidth</li>
                                                    <li>Mail Spam Protection</li>
                                                    <li>10 Ad-on Domain</li>
                                                    <li>5 Domain</li>
                                                </ul>
                                            </div>
                                            <div class="mt-auto">
                                                <a href="#" class="btn text-white bg-orange btn-block">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 mb-md-0">
                                    <div class="card pricing-plan shadow-sm">
                                        <div class="card-body d-flex flex-column">
                                            <div class="mb-4">
                                                <div class="plan-icn"><img src="assets/images/icons/business-plan-icn.png" alt="Basic Plan" /></div>
                                                <div class="plan-name">Business Plan</div>
                                                <div class="price-cont">
                                                    <div class="_price">$65</div>
                                                    <div class="_per">/Month</div>
                                                </div>
                                                <div class="plan-desc">
                                                    <p>For professionals, the features provided are sufficient to support your business.</p>
                                                </div>
                                            </div>
                                            <div class="_includes">
                                                <ul class="list-unstyled">
                                                    <li>SSD Space 64 GB</li>
                                                    <li>16 Core CPU</li>
                                                    <li>32 GB Memory</li>
                                                    <li>Instant Backup</li>
                                                    <li>Unlimited Bandwidth</li>
                                                    <li>Mail Spam Protection</li>
                                                    <li>Unlimited Ad-on Domain</li>
                                                    <li>Unlimited Domain</li>
                                                </ul>
                                            </div>
                                            <div class="mt-auto">
                                                <a href="#" class="btn text-white bg-orange btn-block">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    
                </div>
            </div>

        </div>
    </section>

    <!-- Compare Section -->
    <section class="compare-section py-80">
        <div class="container">
            <div class="p-5 rounded-lg shadow-sm comp-section-cont">
                <div class="row justify-content-center">
                    <div class="col-md-12 mb-4">
                        <h2>Compare Plans</h2>
                        <p class="lead">Enhance any plan by adding features like voice menus, call recording and more.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="d-none d-lg-block">
                            <table class="table table-bordered table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th scope="col " class="plan-header">
                                            <div class="select-plan">
                                                <div class="plan-duration">Monthly</div>
                                                <label class="switch ">
                                                    <input type="checkbox" class="default">
                                                    <span class="slider round"></span>
                                                </label>
                                                <div class="plan-duration">Annually</div>
                                            </div>
                                            <div class="select-region">
                                                <select class="form-control">
                                                    <option value="world">World</option>
                                                    <option value="us">USA/Canada</option>
                                                    <option value="uk">Americas</option>
                                                    <option value="eu">Europe</option>
                                            </div>
                                        </th>
                                        <th scope="col" class="plan-type-header">
                                            <div class="comp-plan-type">
                                                <div class="plan-img">
                                                    <img src="assets/images/icons/basic-plan-icn2.png" alt="Basic Plan" />
                                                </div>
                                                <div class="plan-pricing">
                                                    <div class="_price">$6.99</div>
                                                    <div class="_duration text-muted">per month</div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="plan-type-header">
                                            <div class="comp-plan-type">
                                                <div class="plan-img">
                                                        <img src="assets/images/icons/personal-plan-icn2.png" alt="Basic Plan" />
                                                    </div>
                                                    <div class="plan-pricing">
                                                        <div class="_price">$7.99</div>
                                                        <div class="_duration text-muted">per month</div>
                                                    </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="plan-type-header">
                                            <div class="comp-plan-type">
                                                <div class="plan-img">
                                                        <img src="assets/images/icons/business-plan-icn2.png" alt="Basic Plan" />
                                                    </div>
                                                    <div class="plan-pricing">
                                                        <div class="_price">$9.99</div>
                                                        <div class="_duration text-muted">per month</div>
                                                    </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SSD Space</td>
                                        <td>20 GB</td>
                                        <td>32 GB</td>
                                        <td>64 GB</td>
                                    </tr>
                                    <tr>
                                        <td>Core CPU</td>
                                        <td>4 Core</td>
                                        <td>8 Core</td>
                                        <td>16 Core</td>
                                    </tr>
                                    <tr>
                                        <td>Memory</td>
                                        <td>4 GB</td>
                                        <td>16 GB</td>
                                        <td>32 GB</td>
                                    </tr>
                                    <tr>
                                        <td>Instant Backup</td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/cross-icn.png" alt="na" /></div></td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked" /></div></td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>Per-second rate for outbound calls</td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/cross-icn.png" alt="na" /></div></td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked" /></div></td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>Free inbound calls </td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/cross-icn.png" alt="na" /></div></td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked" /></div></td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>Free number porting</td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/cross-icn.png" alt="na" /></div></td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked" /></div></td>
                                        <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><a href="#" class="btn text-white bg-orange btn-block ">Choose Plan</a></td>
                                        <td><a href="#" class="btn text-white bg-orange btn-block ">Choose Plan</a></td>
                                        <td><a href="#" class="btn text-white bg-orange btn-block ">Choose Plan</a></td>
                                    </tr>

                                    <!-- Add more features as needed -->
                                </tbody>
                            </table>
                        </div>
                        <div class="d-block d-lg-none">
                            <div class="mob-comp-table">
                                <div class="select-plan-options mb-5">
                                    <div class="select-plan">
                                        <div class="plan-duration">Monthly</div>
                                        <label class="switch ">
                                            <input type="checkbox" class="default">
                                            <span class="slider round"></span>
                                        </label>
                                        <div class="plan-duration">Annually</div>
                                    </div>
                                    <div class="select-region">
                                        <select class="form-control">
                                            <option value="world">World</option>
                                            <option value="us">USA/Canada</option>
                                            <option value="uk">Americas</option>
                                            <option value="eu">Europe</option>
                                    
                                        </select>
                                    </div>
                                </div>
                                
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="basic-tab" data-toggle="tab" data-target="#basic" type="button" role="tab" aria-controls="basic" aria-selected="true">Basic</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="personal-tab" data-toggle="tab" data-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="false">Personal</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="busines-tab" data-toggle="tab" data-target="#busines" type="button" role="tab" aria-controls="busines" aria-selected="false">Business</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                        <table class="table table-bordered table-striped table-hover text-center">
                                            <tbody>
                                                <tr>
                                                    <td>SSD Space</td>
                                                    <td>20 GB</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Core CPU</td>
                                                    <td>4 Core</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Memory</td>
                                                    <td>4 GB</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Instant Backup</td>
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/cross-icn.png" alt="na"></div></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Per-second rate for outbound calls</td>
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/cross-icn.png" alt="na"></div></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Free inbound calls </td>
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/cross-icn.png" alt="na"></div></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Free number porting</td>
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/cross-icn.png" alt="na"></div></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td><a href="#" class="btn text-white bg-orange btn-block ">Choose Plan</a></td>
                                                    
                                                </tr>

                                                <!-- Add more features as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                    <table class="table table-bordered table-striped table-hover text-center">
                                            <tbody>
                                                <tr>
                                                    <td>SSD Space</td>
                                                    
                                                    <td>32 GB</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Core CPU</td>
                                                    
                                                    <td>8 Core</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Memory</td>
                                                    
                                                    <td>16 GB</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Instant Backup</td>
                                                    
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked"></div></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Per-second rate for outbound calls</td>
                                                    
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked"></div></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Free inbound calls </td>
                                                    
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked"></div></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Free number porting</td>
                                                    
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked"></div></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    
                                                    <td><a href="#" class="btn text-white bg-orange btn-block ">Choose Plan</a></td>
                                                </tr>

                                                <!-- Add more features as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="busines" role="tabpanel" aria-labelledby="busines-tab">
                                    <table class="table table-bordered table-striped table-hover text-center">
                                            <tbody>
                                                <tr>
                                                    <td>SSD Space</td>
                                                    
                                                    <td>64 GB</td>
                                                </tr>
                                                <tr>
                                                    <td>Core CPU</td>
                                                    
                                                    <td>16 Core</td>
                                                </tr>
                                                <tr>
                                                    <td>Memory</td>
                                                    
                                                    <td>32 GB</td>
                                                </tr>
                                                <tr>
                                                    <td>Instant Backup</td>
                                                    
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked"></div></td>
                                                </tr>
                                                <tr>
                                                    <td>Per-second rate for outbound calls</td>
                                                    
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked"></div></td>
                                                </tr>
                                                <tr>
                                                    <td>Free inbound calls </td>
                                                    
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked"></div></td>
                                                </tr>
                                                <tr>
                                                    <td>Free number porting</td>
                                                   
                                                    <td><div class="comp-feat-icn"><img src="assets/images/icons/check-icn2.png" alt="checked"></div></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    
                                                    <td><a href="#" class="btn text-white bg-orange btn-block ">Choose Plan</a></td>
                                                </tr>

                                                <!-- Add more features as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
 
    <!-- CTA Section -->
    <section class="cta cta-2 py-5 bg-orange">
        <div class="hd-phone-bg">
            <img src="assets/images/hd-phone-bg.png" alt="Phone Background" loading="lazy">
        </div>
        <div class="container">
            <div class="cta-content">
                <h2 class="">Grow your business with VoIPTech Solutions </h2>
                <p>Compare Top VoIP Solutions for Your Business Get Expert Advice on Choosing the Right VoIP Technology</p>
            </div>
            
            <div class="call-btn text-center mt-4">
                <a href="#" data-toggle="modal" data-target="#myModalForm" class="btn btn-lg rounded-pill bg-white text-uppercase text-orange px-4 cta-btn">Get Started With Us</a>
            </div>
        </div>
    </section>

        <!--Why Us-->
        <section class="why-us bg-light-orange py-80 ">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Why Should You Choose Us?</h2>
                    <p>Customer Trust is Our Priority </p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-3">
                        <div class="bg-white text-center p-3 why-box">
                            <div class="icn-cont mb-2">
                                <img src="assets/images/icons/server-uptime.png" alt="Server Uptime" loading="lazy">
                            </div>
                            <p class="mb-0">100% Server Up-time</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="bg-white text-center p-3 why-box">
                            <div class="icn-cont mb-2">
                                <img src="assets/images/icons/privacy.png" alt="Privacy" loading="lazy">
                            </div>
                            <p class="mb-0">Data Privacy</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="bg-white text-center p-3 why-box">
                            <div class="icn-cont mb-2">
                                <img src="assets/images/icons/complience.png" alt="Compliance" loading="lazy">
                            </div>
                            <p class="mb-0">Data Compliance</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="bg-white text-center p-3 why-box">
                            <div class="icn-cont mb-2">
                                <img src="assets/images/icons/cutting-edge-tech.png" alt="Cutting Edge Technology" loading="lazy">
                            </div>
                            <p class="mb-0">Cutting Edge Technology</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col-12 col-md-3">
                        <div class="bg-white text-center p-3 why-box">
                            <div class="icn-cont mb-2">
                                <img src="assets/images/icons/expert-support.png" alt="24/7 Expert Support" loading="lazy">
                            </div>
                            <p class="mb-0">24/7 Expert Support </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="bg-white text-center p-3 why-box">
                            <div class="icn-cont mb-2">
                                <img src="assets/images/icons/proven-industry.png" alt="Proven Industry Experience" loading="lazy">
                            </div>
                            <p class="mb-0">Proven Industry Experience</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="bg-white text-center p-3 why-box">
                            <div class="icn-cont mb-2">
                                <img src="assets/images/icons/customized-solutions.png" alt="Customized Solutions" loading="lazy">
                            </div>
                            <p class="mb-0">Customized Solutions </p>
                        </div>
                    </div>
                    
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col-12 col-md-3">
                        <div class="bg-white text-center p-3 why-box">
                            <div class="icn-cont mb-2">
                                <img src="assets/images/icons/uninterepted-connectivity.png" alt="Uninterrupted Connectivity" loading="lazy">
                            </div>
                            <p class="mb-0">Uninterrupted Connectivity </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="bg-white text-center p-3 why-box">
                            <div class="icn-cont mb-2">
                                <img src="assets/images/icons/cost-effective-services.png" alt="Cost-effective Services" loading="lazy">
                            </div>
                            <p class="mb-0">Cost-effective Services</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
      
    <!-- FAQ -->
    <section class="faq py-80 near-footer">
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
                                aria-expanded="true" aria-controls="faq1">How does the 7-day free trial work?</a>
                                </h3>
                            </div>

                            <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                <div class="card-body">
                                Our 7-day free trial gives you access to essential VoIP features with no credit card required. You also get $10 free credit and 100 free SMS to test our platform risk-free.
                                </div>
                            </div>
                        </div>
                        <!-- Faq 2-->
                        <div class="card">
                            <div class="card-header" id="faqhead2">
                                <h3 class="mb-0">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                aria-expanded="true" aria-controls="faq2">What is included in the $10 free credit and 100 free SMS?</a>
                                </h3>
                            </div>

                            <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                <div class="card-body">
                                You can use the $10 free credit for outbound VoIP services, and the 100 SMS are available for testing our bulk messaging platform. Both are active during the trial or after upgrading.
                                </div>
                            </div>
                        </div>
                        <!-- Faq 3-->
                        <div class="card">
                            <div class="card-header" id="faqhead3">
                                <h3 class="mb-0">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                aria-expanded="true" aria-controls="faq3">Do I need to enter payment information for the free trial?</a>
                                </h3>
                            </div>

                            <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                <div class="card-body">
                                No, you can start the trial without entering payment details. When you're ready to upgrade, you'll be prompted to add your billing info.
                                </div>
                            </div>
                        </div>
                        <!-- Faq 4-->
                        <div class="card">
                            <div class="card-header" id="faqhead4">
                                <h3 class="mb-0">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                aria-expanded="true" aria-controls="faq4">What payment methods are accepted?</a>
                                </h3>
                            </div>

                            <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                <div class="card-body">
                                We accept major credit/debit cards, PayPal, and bank transfers. Payment options are flexible and managed easily from your dashboard.
                                </div>
                            </div>
                        </div>
                        <!-- Faq 5-->
                        <div class="card">
                            <div class="card-header" id="faqhead5">
                                <h3 class="mb-0">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                                aria-expanded="true" aria-controls="faq5">What if my payment fails or gets declined?</a>
                                </h3>
                            </div>

                            <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                <div class="card-body">
                                You’ll be notified immediately. Simply update your payment method or retry the transaction. Our support team is available 24/7 for help with billing issues.
                                </div>
                            </div>
                        </div>
                        <!-- Faq 6-->
                        <div class="card">
                            <div class="card-header" id="faqhead6">
                                <h3 class="mb-0">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                                aria-expanded="true" aria-controls="faq6">Will I lose my data if I miss a payment or cancel my subscription?</a>
                                </h3>
                            </div>

                            <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                <div class="card-body">
                                No. We securely store your data even if your account is temporarily suspended. You can regain full access by resolving the payment issue or reactivating your account.
                                </div>
                            </div>
                        </div>
                        <!-- Faq 7-->
                        <div class="card">
                            <div class="card-header" id="faqhead7">
                                <h3 class="mb-0">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7"
                                aria-expanded="true" aria-controls="faq7">Can I cancel or change my plan anytime?</a>
                                </h3>
                            </div>

                            <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                <div class="card-body">
                                Yes, you have full control. You can upgrade, downgrade, or cancel your plan from your account dashboard without penalties or long-term contracts.
                                </div>
                            </div>
                        </div>
                        <!-- Faq 8-->
                        <div class="card">
                            <div class="card-header" id="faqhead8">
                                <h3 class="mb-0">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8"
                                aria-expanded="true" aria-controls="faq8">How affordable is your Wholesale VoIP service?</a>
                                </h3>
                            </div>

                            <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                <div class="card-body">
                                Our Wholesale VoIP service is competitively priced for carriers, resellers, and high-volume users. We offer volume-based discounts and cost-effective routing to ensure maximum value.
                                </div>
                            </div>
                        </div>
                        <!-- Faq 9-->
                        <div class="card">
                            <div class="card-header" id="faqhead9">
                                <h3 class="mb-0">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9"
                                aria-expanded="true" aria-controls="faq9">Is Bulk SMS affordable for large-scale campaigns?</a>
                                </h3>
                            </div>

                            <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                <div class="card-body">
                                Yes, our Bulk SMS service offers highly competitive rates for both domestic and international messaging. We also provide volume discounts for large campaigns, making it ideal for marketing and customer engagement.
                                </div>
                            </div>
                        </div>
                        <!-- Faq 10-->
                        <div class="card">
                            <div class="card-header" id="faqhead10">
                                <h3 class="mb-0">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10"
                                aria-expanded="true" aria-controls="faq10">Do you offer refunds if I cancel before the billing cycle ends?</a>
                                </h3>
                            </div>

                            <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                                <div class="card-body">
                                We do not offer refunds for partial months or early cancellations. That’s why we recommend using the free trial and credits to evaluate the service first.
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