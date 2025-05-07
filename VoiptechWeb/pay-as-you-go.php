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
     <section class="about-banner pay-as-banner py-5 pay-as-flex">
        <div class="container ">
            <div class="d-flex justify-content-between flex-column-reverse flex-md-row mt-5 ">
                <!-- Banner Content -->
                <div class="banner-content">
                    <h1>
                        <span class="text-orange">Pay As You Go</span> 
                        <span class="font-w-md">VoIP Phone Service</span>
                    </h1>
                    <p>Compare top call center software for your team. Learn best providers and features, and get advice for choosing the right call center solution.</p>
                    <div class="banner-card p-3 mt-3">
                        <div class="pay-banner-feats">
                            <div class="_item">
                                <span class="icn">
                                    <img src="assets/images/icons/phone-icn.jpg" alt="" />
                                </span>
                                <span class="txt">Free calls between VoIPVoIP users</span>
                            </div>
                            <div class="_item">
                                <span class="icn">
                                    <img src="assets/images/icons/globe-icn.jpg" alt="" />
                                </span>
                                <span class="txt">Low-cost calls to multiple international destinations</span>
                            </div>
                            <div class="_item">
                                <span class="icn">
                                    <img src="assets/images/icons/trophy-icn.jpg" alt="" />
                                </span>
                                <span class="txt">No contracts, monthly/setup/cancellation fees, or hidden charges</span>
                            </div>
                        </div>
                    </div>
                    <div class="pay-as-btns mt-4">
                        <a href="#" class="btn bg-orange text-white rounded-pill text-uppercase">Register Now</a>
                        <a href="#" class="btn btn-dark rounded-pill text-uppercase">Join Now</a>
                    </div>
                    
                    
                </div>
                <!-- Price Calculator -->
                 <div class="price-calc-cont">
                    <div class="price-calc">
                        <div class="calc-header bg-orange p-2 text-white">
                            Price Calculator
                        </div>
                        <div class="calc-body">
                            <div class="calc-select-fields">
                                <!-- Country Code -->
                                <select class="form-control">
                                    <option>USA +1</option>
                                    <option>IND +91</option>
                                    <option>UK +4</option>
                                </select>
                                <!-- Currency -->
                                <select class="form-control">
                                    <option>USD</option>    
                                    <option>EUR</option>
                                    <option>INR</option>
                                </select>
                            </div>
                            <div class="calc-pricing">
                                <div class="head">Outbound</div>
                                <div class="_info">
                                    <div class="product-name">Predictive Dialing</div>
                                    <div class="price-cont">
                                        <span class="price">0,0090 $</span> <span class="for">landline / minute</span>
                                    </div>
                                    <div class="price-cont">
                                        <span class="price">0,0090 $</span> <span class="for">landline / minute</span>
                                    </div>
                                </div>
                            </div>
                            <div class="calc-pricing mt-2">
                                <div class="head">Inbound</div>
                                <div class="_info">
                                    <div class="product-name">Predictive Dialing</div>
                                    <div class="price-cont">
                                        <span class="price">0,0090 $</span> <span class="for">landline / minute</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="price-calc-feat-list">
                                <ul>
                                    <li>no base charge</li>
                                    <li>no minimum charges</li>
                                    <li>no setup fee</li>
                                </ul>
                            </div>
                            <div class="pricing-btn text-center">
                                <a href="#" class="btn bg-orange btn-sm text-white rounded-pill text-uppercase">View Pricing Detail</a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
     </section>
    <section class="no-hidden-fee py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="text-orange">No Hidden Fees</h2>
                <p>Most of the VoIP services will not save you the amount promised because of hidden fees!
                With VoIPVoIP you will never pay any extra fees.</p>
            </div>
            <div class="no-fee-cont">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="no-fee-box">
                            <div class="_icn-cont">
                                <img src="assets/images/icons/no-fee-icn1.png" alt="No fee icon" />
                            </div>
                            <h3>Per-second billing</h3>
                            <p>Pay as you go</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="no-fee-box">
                            <div class="_icn-cont">
                                <img src="assets/images/icons/no-fee-icn2.png" alt="No fee icon" />
                            </div>
                            <h3>Free Cloud PBX</h3>
                            <p>Virtual phone system for startups and small businesses.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="no-fee-box">
                            <div class="_icn-cont">
                                <img src="assets/images/icons/no-fee-icn3.png" alt="No fee icon" />
                            </div>
                            <h3>Free CRM</h3>
                            <p>Multifunctional customer relationship management system</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="no-fee-box">
                            <div class="_icn-cont">
                                <img src="assets/images/icons/no-fee-icn4.png" alt="No fee icon" />
                            </div>
                            <h3>Free Website Widgets</h3>
                            <p>Using the API for Developers</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="no-fee-box">
                            <div class="_icn-cont">
                                <img src="assets/images/icons/no-fee-icn5.png" alt="No fee icon" />
                            </div>
                            <h3>Free Voicemail</h3>
                            <p>Manage your missed calls</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="no-fee-box">
                            <div class="_icn-cont">
                                <img src="assets/images/icons/no-fee-icn6.png" alt="No fee icon" />
                            </div>
                            <h3>24/7 Support</h3>
                            <p>We are here to help</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="no-fee-box">
                            <div class="_icn-cont">
                                <img src="assets/images/icons/no-fee-icn1.png" alt="No fee icon" />
                            </div>
                            <h3>Free Apps</h3>
                            <p>iOS/Android/Windows/Chrome</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="no-fee-box">
                            <div class="_icn-cont">
                                <img src="assets/images/icons/no-fee-icn1.png" alt="No fee icon" />
                            </div>
                            <h3>Free Integrations</h3>
                            <p>With 20+ systems &amp; API</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Pay as you go -->
    <section class="about-pay-as py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-pay-img">
                        <img src="assets/images/about-pay-as-img.avif" alt="About pay as you go" />
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-pay-content">
                        <h2 class="text-orange">About Pay-As-You-Go</h2>
                        <p>Unlike competitors who charge high fees for unlimited calls, VoIPVoIP also offers a more cost-effective solution. Most users don’t fully use unlimited calls, making VoIPVoIP a smarter choice.<br><br>

                        For residential users, paying over $10 monthly for unlimited plans is often unjustified. Especially if the phone isn't used much, like during vacations. Business users also overpay when they buy unlimited plans for phones in low-use areas like lobbies, conference rooms, or desks of infrequent callers.<br><br>

                        With VoIPVoIP’s Pay as You Go plan, you only pay for the calls you make. No activation fees, monthly charges, contracts, expirations, or hidden costs.</p>
                    </div>
                    <div class="pay-as-btns mt-4">
                        <a href="#" class="btn bg-orange text-white rounded-pill text-uppercase"  data-toggle="modal" data-target="#myModalForm">Get Started</a>
                        <a href="pricing.php" class="btn btn-dark rounded-pill text-uppercase">Pricing</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Calling Rates -->
    <section class="calling-rates bg-light-orange py-80">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="text-orange">Calling Rates</h2>
                <p>At VoIPTech Solutions we provide affordable calls across the globe</p>
            </div>
            <div class="call-rates-countries ">
                <ul class="call-rates-countries__list">
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-ar"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Argentina</p>
                                    <p class="text-extra-sm">$0.01/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-au"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Australia</p>
                                    <p class="text-extra-sm">$0.018/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-br"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Brazil</p>
                                    <p class="text-extra-sm">$0.01/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-ca"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Canada</p>
                                    <p class="text-extra-sm">$0.006/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-cn"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">China</p>
                                    <p class="text-extra-sm">$0.7/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-co"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Colombia</p>
                                    <p class="text-extra-sm">$0.022/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-fr"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">France</p>
                                    <p class="text-extra-sm">$0.009/min *</p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-de"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Germany</p>
                                    <p class="text-extra-sm">$0.01/min *</p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-in"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">India</p>
                                    <p class="text-extra-sm">$0.023/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-ir"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Iran</p>
                                    <p class="text-extra-sm">$0.2/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-iq"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Iraq</p>
                                    <p class="text-extra-sm">$0.17/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-il"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Israel</p>
                                    <p class="text-extra-sm">$0.03/min **</p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-it"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Italy</p>
                                    <p class="text-extra-sm">$0.01/min *</p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-jp"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Japan</p>
                                    <p class="text-extra-sm">$0.03/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-mx"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Mexico</p>
                                    <p class="text-extra-sm">$0.008/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-np"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Nepal</p>
                                    <p class="text-extra-sm">$0.15/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-pk"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Pakistan</p>
                                    <p class="text-extra-sm">$0.06/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-ph"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Philippines</p>
                                    <p class="text-extra-sm">$0.14/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-pl"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Poland</p>
                                    <p class="text-extra-sm">$0.015/min *</p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-ro"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Romania</p>
                                    <p class="text-extra-sm">$0.015/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-es"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">Spain</p>
                                    <p class="text-extra-sm">$0.015/min *</p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-ae"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">United Arab Emirates</p>
                                    <p class="text-extra-sm">$0.19/min </p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-gb"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">United Kingdom</p>
                                    <p class="text-extra-sm">$0.009/min *</p>
                                </div>
                            </div>
                        </li>
                                <li class="call-rates-countries__item">
                            <div class="call-rates-countries__details">
                                <div class="rounded-country-flag rounded-flag-us"></div>

                                <div class="call-rates-countries__text">
                                    <p class="text-md">USA</p>
                                    <p class="text-extra-sm">$0.012/min </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                <div class="calling-rates-note">
                    <div class="call-rates-countries__desc">
                        <p class="mb-0">* This rate applies to calls made from EU or UK numbers.</p>
                        <p class="mb-0">** This rate applies to calls made from purchased virtual mobile or landline phone numbers in Israel.</p>
                    </div>
                    
                    <div class="_btn">
                        <a class="btn bg-orange text-white rounded-pill text-uppercase px-4" href="#">See all calling rates</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Calling CTA -->
    <section class="calling-cta py-80">
        <div class="container">
            <div class="calling-cta-cont bg-orange">
                <div class="cta-img">
                    <img src="assets/images/calling-cta-img.png" alt="Calling Application" />
                </div>
                <div class="calling-cta__text">
                    <h2>Calling Application</h2>
                    <ul>
                        <li>Make calls globally</li>
                        <li>Carry Cloud PBX in your pocket</li>
                        <li>Send and receive SMS</li>
                        <li>Integrate with your phoneboo</li>
                    </ul>
                    <div class="calling-btn">
                        <a href="#" class="btn btn-dark px-4 rounded-pill">Get Started Free Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pay as you Services -->
    <section class="pay-as-services py-80 bg-light">
        <div class="container">
            <div class="section-title text-orange mb-5">
                <h2>Receiving Calls With:</h2>
            </div>
            <div class="pay-as-services-tabs">
                <div class="row">
                    <div class="col-12 col-md-3 pr-0">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-payTab1-tab" data-toggle="pill" data-target="#v-pills-payTab1" type="button" role="tab" aria-controls="v-pills-payTab1" aria-selected="true">VoIP SIP</button>
                        <button class="nav-link" id="v-pills-payTab2-tab" data-toggle="pill" data-target="#v-pills-payTab2" type="button" role="tab" aria-controls="v-pills-payTab2" aria-selected="false">US Number</button>
                        <button class="nav-link" id="v-pills-payTab3-tab" data-toggle="pill" data-target="#v-pills-payTab3" type="button" role="tab" aria-controls="v-pills-payTab3" aria-selected="false">International Number</button>
                        <button class="nav-link" id="v-pills-payTab4-tab" data-toggle="pill" data-target="#v-pills-payTab4" type="button" role="tab" aria-controls="v-pills-payTab5" aria-selected="false">Call Forwarding</button>
                        <button class="nav-link" id="v-pills-payTab5-tab" data-toggle="pill" data-target="#v-pills-payTab5" type="button" role="tab" aria-controls="v-pills-payTab5" aria-selected="false">Voicemail</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 pl-0">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-payTab1" role="tabpanel" aria-labelledby="v-pills-payTab1-tab">
                            <div class="pay-tab-content">
                                    <p>VoIPVoIP gives every customer a unique SIP number (e.g., 123456) that can be used to receive free calls from other VoIPVoIP users. There are no monthly fees for this number, but it cannot receive calls from traditional or mobile phones.</p>

                                    <p>If you want to receive calls from regular phones, you can purchase a Virtual Phone Number. This number acts as an alias for your VoIP account, allowing calls from traditional phones to connect.</p>
                                    <h3>Advantages of Virtual Phone Numbers:</h3>
                                    <ol>
                                        <li>Keep your number wherever you go. </li>
                                        <li>Choose any area code, not tied to your local one. </li>
                                        <li>Select an international number for global access. </li>
                                    </ol>
                                    <div class="_btn mt-4">
                                        <a href="#" class="btn bg-orange px-4 text-white">Get Started Now</a>
                                    </div>
                                </div>
                                <div class="_service-img">
                                    <img src="assets/images/pay-tab-img1.png" alt="VoIP SIP" />
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-payTab2" role="tabpanel" aria-labelledby="v-pills-payTab2-tab">
                                <div class="pay-tab-content">
                                    <p>Replace your phone company with VoIPVoIP and keep your US number, saving on your bill.

                                        For just $2/month, you can receive calls on your chosen US number or keep your current one.

                                        Enjoy a multichannel number with free incoming calls using a VoIP app or device, webphone, Chrome extension or CRM and an internet connection.

                                        Get features like voicemail to email, call forwarding, Caller ID, Cloud PBX and more.</p>

                                    
                                </div>
                                <div class="_service-img">
                                    <img src="assets/images/pay-tab-img1.png" alt="VoIP SIP" />
                                </div>
                               
                            </div>
                            <div class="tab-pane fade" id="v-pills-payTab3" role="tabpanel" aria-labelledby="v-pills-payTab3-tab">
                            <div class="pay-tab-content">
                                    <p>Get a local number from your home country. Your family, friends, or business associates can call you as if you were just across the street, avoiding long-distance charges.

                                    With a multichannel international phone number, receive calls from anywhere with just an internet connection.

                                    Enhance your phone system with features like free Cloud PBX, free CRM, IVR, website widgets, speech recognition and more.</p>

                                   
                                    <div class="_btn mt-4">
                                        <a href="#" class="btn bg-orange px-4 text-white">Get Started Now</a>
                                    </div>
                                </div>
                                <div class="_service-img">
                                    <img src="assets/images/pay-tab-img1.png" alt="VoIP SIP" />
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-payTab4" role="tabpanel" aria-labelledby="v-pills-payTab4-tab">
                            <div class="pay-tab-content">
                                    <p>If you don't have an internet connection or prefer not to use a VoIP service, you can forward calls to any mobile or landline worldwide.

                                    Simply activate call forwarding in your account to receive calls on any phone.

                                    Call forwarding fees are based on the destination's calling rate. For example, forwarding to a US mobile phone costs $0.012 per minute.

                                    Check the exact forwarding rates for your destination here.
                                    Call forwarding charges are deducted from your VoipVoip account balance.</p>

                                    
                                    <div class="_btn mt-4">
                                        <a href="#" class="btn bg-orange px-4 text-white">Get Started Now</a>
                                    </div>
                                </div>
                                <div class="_service-img">
                                    <img src="assets/images/pay-tab-img1.png" alt="VoIP SIP" />
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-payTab5" role="tabpanel" aria-labelledby="v-pills-payTab5-tab">
                            <div class="pay-tab-content">
                                    <p>You can use your virtual number with our free voicemail feature included in the Cloud PBX.

                                        Record a custom greeting or generate one from text, and receive voicemails via your personal account and email.</p>

                                   
                                    <div class="_btn mt-4">
                                        <a href="#" class="btn bg-orange px-4 text-white">Get Started Now</a>
                                    </div>
                                </div>
                                <div class="_service-img">
                                    <img src="assets/images/pay-tab-img1.png" alt="VoIP SIP" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> 
    
    <!-- Testimonials -->
     <?php include 'includes/testimonials.php' ?>
    <div class="near-footer"><!-- Contact Form -->
    <?php include 'includes/footer-contact-form.php' ?></div>
     
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