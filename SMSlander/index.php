<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoIPTech SMS Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?V=1.02">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html, body { font-family: 'DM Sans', sans-serif; }
        #google_translate_element {
            position: absolute;
            left: -300px;
        }
    </style>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./js/captcha.js"></script>
        <script>
         function validateContactNumber(event) {
            var input = event.target;
            
            // Replace non-numeric characters with empty string
            input.value = input.value.replace(/[^0-9]/g, '');

            // Check if the length exceeds 12 characters
            if (input.value.length > 12) {
                // Truncate the value to 12 digits
                input.value = input.value.substring(0, 12);
            }
        }

        </script>
        
        <script type="text/javascript">
      (
        function() {
          var sbSiteSecret = '59e4cd9d-3284-4fcb-9805-4c5b8deecaf8';
          window.sitebehaviourTrackingSecret = sbSiteSecret;
          var scriptElement = document.createElement('script');
          scriptElement.async = true;
          scriptElement.id = 'site-behaviour-script-v2';
          scriptElement.src = 'https://sitebehaviour-cdn.fra1.cdn.digitaloceanspaces.com/index.min.js?sitebehaviour-secret=' + sbSiteSecret;
          document.head.appendChild(scriptElement); 
        }
      )()
</script>
        
		<!-- Google Tag Manager 3-4-2025 added-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBPHFSDX');</script>
<!-- End Google Tag Manager -->
		
		
</head>
<body>
<!-- Google Tag Manager (noscript) 3-4-2025 added-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBPHFSDX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Header Section -->
    <header class="header-section">
        <nav class="navbar navbar-expand-lg bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="https://www.voiptechsolutions.com/">
                    <img src="images/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <!-- Dropdown for SMS Service -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://www.voiptechsolutions.com/services/sms" id="smsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SMS Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="smsDropdown">
                            <li><a class="dropdown-item" href="https://www.voiptechsolutions.com/services/sms">Bulk SMS</a></li>
                            <li><a class="dropdown-item" href="https://www.voiptechsolutions.com/services/sms">OTP SMS</a></li>
                            <li><a class="dropdown-item" href="https://www.voiptechsolutions.com/services/sms">Promotional SMS</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item"><a class="nav-link" href="https://www.voiptechsolutions.com/">
                            Home
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.voiptechsolutions.com/about_us">
                            About Us
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.voiptechsolutions.com/services/sms">
                            Services
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.voiptechsolutions.com/faq">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link form-popup" href="#" >Contact</a></li>
                    </ul>
                </div>    
                <!-- Right Section -->
                <div class="d-flex align-items-center gap-2">
                <!-- Language Dropdown -->
                    <div class="custom-translator">
                        <div class="selected-language" onclick="toggleDropdown()">
                            <span class="flag">🇺🇸</span> English
                        </div>
                        <div class="flags-dropdown" id="flagsDropdown">
                            <div class="flag-option" data-lang="en">
                                <span class="flag">🇺🇸</span> English
                            </div>
                            <div class="flag-option" data-lang="hi">
                                <span class="flag">🇮🇳</span> Hindi
                            </div>
                            <div class="flag-option" data-lang="it">
                                <span class="flag">🇮🇹</span> Italian
                            </div>
                            <div class="flag-option" data-lang="fil-en">
                                <span class="flag">🇵🇭</span> Filipino
                            </div>
                            <div class="flag-option" data-lang="zu">
                                <span class="flag">🇿🇦</span> Zulu
                            </div>
                            <div class="flag-option" data-lang="en-GB">
                                <span class="flag">🇬🇧</span> English (UK)
                            </div>
                            <div class="flag-option" data-lang="ur">
                                <span class="flag">🇵🇰</span> Urdu
                            </div>
                            <div class="flag-option" data-lang="vi">
                                <span class="flag">🇻🇳</span> Vietnamese
                            </div>
                            <div class="flag-option" data-lang="fr">
                                <span class="flag">🇫🇷</span> French
                            </div>
                            <div class="flag-option" data-lang="id">
                                <span class="flag">🇮🇩</span> Indonesian
                            </div>
                            <div class="flag-option" data-lang="es">
                                <span class="flag">🇪🇸</span> Spain
                            </div>
                            <div class="flag-option" data-lang="de">
                                <span class="flag">🇩🇪</span> Germany
                            </div>
                            <div class="flag-option" data-lang="no">
                                <span class="flag">🇳🇴</span> Norway
                            </div>
                            <div class="flag-option" data-lang="br">
                                <span class="flag">🇧🇷</span> Brazil
                            </div>

                            <div class="flag-option" data-lang="pl">
                                <span class="flag">🇵🇱</span> Poland
                            </div>
                            <div class="flag-option" data-lang="af">
                                <span class="flag">🇿🇦</span> South Africa
                            </div>
                            <div class="flag-option" data-lang="es">
                                <span class="flag">🇲🇽</span> Mexico
                            </div>
                            <div class="flag-option" data-lang="ms">
                                <span class="flag">🇸🇬</span> Singapore
                            </div>
                            <div class="flag-option" data-lang="es">
                                <span class="flag">🇦🇷</span> Argentina
                            </div>
                            <div class="flag-option" data-lang="ro">
                                <span class="flag">🇷🇴</span> Romania
                            </div>
                            <div class="flag-option" data-lang="es">
                                <span class="flag">🇨🇴</span> Colombia
                            </div>
                            <div class="flag-option" data-lang="ar">
                                <span class="flag">🇹🇳</span> Tunisia
                            </div>
                            <div class="flag-option" data-lang="ar">
                                <span class="flag">🇦🇪</span> UAE
                            </div>
                            <div class="flag-option" data-lang="ar">
                                <span class="flag">🇴🇲</span> Oman
                            </div>
                            <div class="flag-option" data-lang="ar">
                                <span class="flag">🇧🇭</span> Bahrain
                            </div>
                            <div class="flag-option" data-lang="ar">
                                <span class="flag">🇸🇦</span> Saudi Arabia
                            </div>
                            <div class="flag-option" data-lang="ur">
                                <span class="flag">🇵🇰</span> Pakistan
                            </div>
                            <div class="flag-option" data-lang="bn">
                                <span class="flag">🇧🇩</span> Bangladesh
                            </div>
                            <!-- <div class="flag-option" data-lang="en-AU">
                                <span class="flag">🇦🇺</span> English (AU)
                            </div> -->
                        </div>
                        <i class="angle-down" style="position:absolute; right:-10px; top: 4px"><img src="images/arrow-icon.png" alt=""></i>
                    </div>
                <!-- <div class="custom-dropdown">
                    <div class="selected-language" onclick="toggleDropdown('languageDropdown', 'currencyDropdown')">
                        <span class="global-icon"><img src="images/glob-icon.png" alt=""></span> EN <i class="angle-down"><img src="images/arrow-icon.png" alt=""></i>
                    </div>
                   
                    <div class="dropdown-content" id="languageDropdown">
                        <div class="flag-option" data-lang="en">
                            <span class="flag">🇺🇸</span> English
                        </div>
                        <div class="flag-option" data-lang="hi">
                            <span class="flag">🇮🇳</span> Hindi
                        </div>
                        <div class="flag-option" data-lang="it">
                            <span class="flag">🇮🇹</span> Italian
                        </div>
                        <div class="flag-option" data-lang="fil">
                            <span class="flag">🇵🇭</span> Filipino
                        </div>
                        <div class="flag-option" data-lang="zu">
                            <span class="flag">🇿🇦</span> Zulu
                        </div>
                        <div class="flag-option" data-lang="en-GB">
                            <span class="flag">🇬🇧</span> English (UK)
                        </div>
                        <div class="flag-option" data-lang="ur">
                            <span class="flag">🇵🇰</span> Urdu
                        </div>
                        <div class="flag-option" data-lang="vi">
                            <span class="flag">🇻🇳</span> Vietnamese
                        </div>
                        <div class="flag-option" data-lang="fr">
                            <span class="flag">🇨🇦</span> French
                        </div>
                        <div class="flag-option" data-lang="id">
                            <span class="flag">🇮🇩</span> Indonesian
                        </div>
                    </div> 
                </div>-->
                <!-- Currency Dropdown -->
                <!-- <div class="custom-dropdown ms-3">
                    <div class="selected-currency" onclick="toggleDropdown('currencyDropdown', 'languageDropdown')">
                        USD <i class="angle-down"><img src="images/arrow-icon.png" alt=""></i>
                    </div>
                    <div class="dropdown-content" id="currencyDropdown">
                        <div data-currency="usd">USD</div>
                        <div data-currency="eur">EUR</div>
                        <div data-currency="gbp">GBP</div>
                    </div>
                </div> -->
                <!-- Get Started Button -->
                <a class="btn btn-primary ms-3" href="https://wa.me/+971559372131" target="_blank" >Get Started</a>
                </div>
            </div>
        </nav>
        <div class="container get-start-section">
            <!-- Get Started Form -->
            <div class="row header-content">
                <div class="col-md-6 text-left header-left-content mt-5">
                    <h1>Never Miss A Message</h1>
                    <h2>Stay Synced, Stay Connected</h2>
                    <p>Get the most robust SMS communication platform with VolPTech! Automate, schedule, and send perfect messages instantly—bulk SMS, two-way messaging, or global reach.</p>

<a href="https://wa.me/+971559372131" target="_blank" class="btn bg-white py-2 px-4 rounded text-danger text-xl d-flex align-items-center gap-2 col-12 col-md-8 col-lg-6 col-xxl-5  justify-content-center">
 7 Days Free Trial
  <span class="d-flex align-items-center">
    <img src="images/right-ang.png" alt="" class="w-25">
  </span>
</a>        </div>
                <div class="col-md-6 right-header-form">
                    <div class="get-started-form">
                         <form id="dataform" method="post" enctype="multipart/form-data" class=""> 
                         
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">Full Name</lable>
                                <input type="text" id="full_name" name="full_name" class="form-control">
                            </div>
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">Email ID</lable>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">Phone Number</lable>
                                <div class="d-flex flex-row nuber-select">
                                <select class="form-control country-code" id="country_code" name="country_code" style="width: 90px;">
                                    <option value="+91">🇮🇳 +91</option>
                                    <option value="+1">🇺🇸 +1</option>
                                    <option value="+1">🇨🇦 +1</option>
                                    <option value="+971">🇦🇪 +971</option>
                                    <option value="+44">🇬🇧 +44</option>
                                    <option value="+61">🇦🇺 +61</option>
                                    <option value="+63">🇵🇭 +63</option>
                                    <option value="+92">🇵🇰 +92</option>
                                    <option value="+880">🇧🇩 +880</option>
                                    <option value="+966">🇸🇦 +966</option>
                                    <option value="+968">🇴🇲 +968</option>
                                    <option value="+973">🇧🇭 +973</option>
                                    <option value="+977">🇳🇵 +977</option>
                                    <option value="+49">🇩🇪 +49</option>
                                    <option value="+33">🇫🇷 +33</option>
                                    <option value="+34">🇪🇸 +34</option>
                                    <option value="+39">🇮🇹 +39</option>
                                    <option value="+55">🇧🇷 +55</option>
                                    <option value="+54">🇦🇷 +54</option>
                                    <option value="+48">🇵🇱 +48</option>
                                    <option value="+27">🇿🇦 +27</option>
                                    <option value="+52">🇲🇽 +52</option>
                                    <option value="+65">🇸🇬 +65</option>
                                    <option value="+40">🇷🇴 +40</option>
                                    <option value="+216">🇹🇳 +216</option>
                                    <option value="+57">🇨🇴 +57</option>
                                    <!-- Add more country codes as needed -->
                                </select>
                                <i class="angle-down country-arrow"><img src="images/arrow-icon.png" alt=""></i>
                                <input type="tel" name="contact_no" id="contact_no" oninput="validateContactNumber(event)"  class="form-control" maxlength="12">

                            </div>
                            </div>
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">Select Your Industry</lable>
                                <select class="form-select" id="industry" name="industry">
                                    <option value="">Select Your Industry</option>
                                    <option value="Retail and E-commerce">Retail and E-commerce</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Education">Education</option>
                                    <option value="Banking and Finance">Banking and Finance</option>
									<option value="Real Estate">Real Estate</option>
									<option value="Travel and Tourism">Travel and Tourism</option>
									<option value="Event Management">Event Management</option>
									<option value="Telecommunications">Telecommunications</option>
									<option value="Government and Public Services">Government and Public Services</option>
									<option value="Non-profit and Charities">Non-profit and Charities</option>
									<option value="Hospitality and Food Services">Hospitality and Food Services</option>
									<option value="Transportation and Logistics">Transportation and Logistics</option>
									<option value="Media and Entertainment">Media and Entertainment</option>
									<option value="Production and Manufacturing ">Production and Manufacturing </option>
									<option value="Energy Utility and Waste ">Energy Utility and Waste </option>
									<option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">SMS Services</lable>
                                <select class="form-select" id="sms_services" name="services">
									<option value="">Select Service</option>   
                                    <option value="marketing sms">Marketing SMS</option>   
                                    <option value="bulk sms">Bulk SMS</option>      
                                    <option value="otp service sms">OTP Services SMS</option>                       
								    <option value="transactional sms">Transactional SMS</option>
                                    <option value="promotional sms">Promotional SMS</option>
                                    <option value="Others">Others</option>
                                 </select>
                            </div>
                            <div class="mb-3 text-left">
                                <lable  class="text-left line-height">Explain More About Requirements</lable>
                                <textarea name="message" id="message" class="form-control" rows="3"></textarea>
                            </div>
                             <div class="mb-3 text-left">
                                  <p id="captcha1" class="text-xl fw-bold mb-2"></p>
                        <input type="number" id="captcha_input1" class="form-control" placeholder="Enter Captcha" required>
                        
                        <button type="button" onclick="generateCaptcha1()" class="btn btn-dark mt-2" >Refresh Captcha</button>
                                    
                                    <input type="hidden" name="service_type" value="sms">
                             <input type="hidden" name="source" value="sms.voiptech.tech/index.php">
                            
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label" for="terms">
                                    By submitting this form, you agree to VolPTech’s privacy policy and T&C.
                                </label>
                            </div>
                            
                            <button type="button" id="send_button" class="btn btn-primary">Get a Free Demo</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bottom-bg-header">
                <img src="images/before-ico.png" alt="" class="img-fluid">
            </div>
        </div>

    </header>
<!-- scalable section -->
<section class="scalable-section">
    <div class="container">
        <div class="row scalable-content align-items-center">
            <div class="col-xs-12 col-md-7 scale-contentLeft d-flex flex-column justify-content-center">
                <h2>Reliable, Scalable & Instant Messaging!</h2>
                <p>VoIPTech's SMS solutions provide hassle-free communication, sending messages to the right people at the right time—globally and securely.</p>
            </div>
            <div class="col-xs-12 col-md-5  text-center scale-contentRight">
                <img src="images/reliable-image.png" alt="Reliable Messaging" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- ALl Logos -->
 <section class="client-logos pt-5">
    <div class="container">
        <h2 class="text-center text-primary1">
            The Most Reliable VoIP Solution for Leading Companies across the Globe  
        </h2>
        <div class="owl-carousel owl-theme comp-logos mt-5">    
                        <img src="images/logos/colt.png" alt="Logo 1" class="w-full h-24 object-contain">
                        <img src="images/logos/idt.png" alt="Logo 2" class="w-full h-24 object-contain">
                        <img src="images/logos/Inteliquent.png" alt="Logo 3" class="w-full h-24 object-contain">
                        <img src="images/logos/logo-flat-m.png" alt="Logo 4" class="w-full h-24 object-contain">
                        <img src="images/logos/mobility.png" alt="Logo 5" class="w-full h-24 object-contain">
                        <img src="images/logos/nxtl.png" alt="Logo 6" class="w-full h-24 object-contain">
                        <img src="images/logos/sangoma.png" alt="Logo 2" class="w-full h-24 object-contain">
                        <img src="images/logos/sinch.png" alt="Logo 3" class="w-full h-24 object-contain">
                        <img src="images/logos/SIPTRUNK_2x.png" alt="Logo 4" class="w-full h-24 object-contain">
                        <img src="images/logos/Tata.png" alt="Logo 5" class="w-full h-24 object-contain">
                        <img src="images/logos/telnyx.png" alt="Logo 1" class="w-full h-24 object-contain">
                        <img src="images/logos/verizon.png" alt="Logo 2" class="w-full h-24 object-contain">
                        <img src="images/logos/Vonage_Logo.png" alt="Logo 3" class="w-full h-24 object-contain">
                        <img src="images/logos/Voxbone.png" alt="Logo 4" class="w-full h-24 object-contain">
                        
                </div>
    </div>
 </section>
<!-- trouble section -->
<section class="trouble-section">
    <div class="container">
        <div class="row trouble-content text-center">
            <h2>Having trouble with ineffective SMS communication for your business? </h2>
        </div>
    </div>
</section>
<!-- Reliable Section -->
<section class="reliable-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 relaible-content">
                <h4>VoIPTech's the ultimate game-changer you require. </h4>
                <p>Being a robust and scalable messaging platform, we simplify your communication
                    through automated, bulk, and two-way SMS, with smooth customer interaction and
                    business growth like never before!</p>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="features-grid">
                    <div class="feature-item ft-1">
                        <img src="images/sms-ico.png" alt="" class="img-fluid">
                        <h4>Centralized SMS Management</h4>
                    </div>
                    <div class="feature-item ft-2">
                        <img src="images/customer-icon.png" alt="" class="img-fluid">
                        <h4>Real-Time Customer Engagement</h4>
                    </div>
                    <div class="feature-item ft-3">
                        <img src="images/report-icon.png" alt="" class="img-fluid">
                        <h4>Detailed Analytics & Reports</h4>
                    </div>
                    <div class="feature-item ft-4">
                        <img src="images/automated-icon.png" alt="" class="img-fluid">
                        <h4>Automated Messaging Solutions</h4>
                    </div>
                    <div class="feature-item ft-5">
                        <img src="images/delivery-icon.png" alt="" class="img-fluid">
                        <h4>High-Speed Bulk SMS Delivery</h4>
                    </div>
                    <div class="feature-item ft-6">
                        <img src="images/group-icon.png" alt="" class="img-fluid">
                        <h4>Drive Sales & Customer Retention</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SMS Platform Section -->
<section class="sms-platform-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center sms-img-left">
                <img src="images/sms-image-left.png" alt="SMS Platform" class="img-fluid">
            </div>
            <div class="col-md-4 text-center">
                <h2>The Power of VoIPTech's SMS Platform</h2>
                <p>Easy-to-use messaging tools for better business talks.</p>
            </div>
            <div class="col-md-4 text-center sms-img-right">
                <img src="images/sms-image.png" alt="SMS Platform" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Communication Features Section -->
<section class="communication-features-section">
    <div class="container">
        <h2 class="text-center">Unlock Advanced SMS Communication Features with VoIPTech</h2>
        <div class="communication-grid">
            <!-- Feature 1 -->
            <div class="feature-item">
                <span><img src="images/setup-icon.png" alt="" class="img-fluid"></span>
                <div>
                    <h3>Setup & Configuration</h3>
                    <p>Effortlessly configure SMS, WhatsApp numbers, and email accounts to streamline business communication.</p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="feature-item">
                <span><img src="images/message-icon.png" alt="" class="img-fluid"></span>
                <div>
                <h3>Efficient Messaging Options</h3>
                <p>Use automated lists, campaigns, and real-time triggers to send bulk or individual SMS messages.</p>
            </div>
            </div>
            <!-- Feature 3 -->
            <div class="feature-item">
                <span><img src="images/customize-icon.png" alt="" class="img-fluid"></span>
                <div>
                <h3>Customizable Scheduling</h3>
                <p>Plan SMS deliveries on a daily, weekly, or monthly basis to boost customer engagement and marketing outreach.</p>
            </div>
            </div>
            <!-- Feature 4 -->
            <div class="feature-item">
                <span><img src="images/calander-icon.png" alt="" class="img-fluid"></span>
                <div>
                <h3>Campaign Calendar</h3>
                <p>Use an easy-to-understand scheduling system to manage and see SMS campaigns for better planning.</p>
            </div>
            </div>
            <!-- Feature 5 -->
            <div class="feature-item">
                <span><img src="images/eye-icon.png" alt="" class="img-fluid"></span>
                <div>
                <h3>Setup & Tracking</h3>
                <p>Keep an eye on SMS delivery open rates, and engagement metrics using real-time analytics and tracking.</p>
            </div>
            </div>
            <!-- Feature 6 -->
            <div class="feature-item">
                <span><img src="images/template-icon.png" alt="" class="img-fluid"></span>
                <div>
                <h3>Advanced Template Creation</h3>
                <p>Design custom SMS templates with preset text and changeable placeholders to create personal messages.</p>
            </div>
            </div>
            <!-- Feature 7 -->
            <div class="feature-item">
                <span><img src="images/file-icon.png" alt="" class="img-fluid"></span>
                <div>
                <h3>File Attachments</h3>
                <p>Add links, images, and documents to SMS to get customers more involved.</p>
            </div>
            </div>
            <!-- Feature 8 -->
            <div class="feature-item">
                <span><img src="images/quick-message-icon.png" alt="" class="img-fluid"></span>
                <div>
                <h3>Quick Messaging Access</h3>
                <p>Use quick SMS shortcuts to send messages fast leading to quicker responses and better communication.</p>
            </div>
            </div>
            <!-- Feature 9 -->
            <div class="feature-item">
                <span><img src="images/campaign-icon.png" alt="" class="img-fluid"></span>
                <div>
                <h3>Comprehensive Campaign Management</h3>
                <p>Our SMS campaign management tools help you handle opt-outs, personalization, and automated follow-ups without hassle.</p>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- Platform Section -->
<section class="platform-section">
    <div class="container">
        <div class="industry-grid">
            <div class="industry-image">
                <img src="images/industry-section.png" alt="industry-section">
            </div>
        </div>
    </div>
</section>
<!-- Solution Section -->
<section class="solution-section">
    <div class="container">
        <h2>Effective SMS Marketing Solutions</h2>
        <div class="solution-grid">
            <!-- Solution 1 -->
            <div class="solution-item">
                <h3>Bulk SMS Service</h3>
                <p>Our Bulk SMS Services empower businesses to send high volumes of messages instantly to their entire customer base.</p>
            </div>
            <!-- Solution 2 -->
            <div class="solution-item">
                <h3>Transactional SMS</h3>
                <p>This type of SMS service is used for sending messages that provide information about transactions such as OTP SMS, order confirmations, shipping updates, and account notifications.</p>
            </div>
            <!-- Solution 3 -->
            <div class="solution-item">
                <h3>Promotional SMS</h3>
                <p>This service is used to promote products, services, or special offers including discounts, sales, or events.</p>
            </div>
        </div>
    </div>
</section>
<!-- Progress Bar Section -->
<section class="progress-section">
    <div class="container">
        <h2 class="text-center">Benefits You Can Look Forward To With<br> VolPTech’s Advanced SMS Solutions</h2>
        <div class="progress-container">
            <div class="progress-circle" data-percent="90">
                <svg width="180" height="180" viewBox="0 0 180 180">
                    <circle class="progress-background" cx="90" cy="90" r="80" />
                    <circle class="progress-bar" cx="90" cy="90" r="80" />
                </svg>
                <div class="progress-text">90%</div>
                <p>Higher Customer Engagement</p>
            </div>
            <div class="progress-circle" data-percent="85">
                <svg width="180" height="180" viewBox="0 0 180 180">
                    <circle class="progress-background" cx="90" cy="90" r="80" />
                    <circle class="progress-bar" cx="90" cy="90" r="80" />
                </svg>
                <div class="progress-text">85%</div>
                <p>Faster Response Time</p>
            </div>
            <div class="progress-circle" data-percent="80">
                <svg width="180" height="180" viewBox="0 0 180 180">
                    <circle class="progress-background" cx="90" cy="90" r="80" />
                    <circle class="progress-bar" cx="90" cy="90" r="80" />
                </svg>
                <div class="progress-text">80%</div>
                <p>Boost in Conversations</p>
            </div>
            <div class="progress-circle" data-percent="80">
                <svg width="180" height="180" viewBox="0 0 180 180">
                    <circle class="progress-background" cx="90" cy="90" r="80" />
                    <circle class="progress-bar" cx="90" cy="90" r="80" />
                </svg>
                <div class="progress-text">80%</div>
                <p>Enhanced Tracking and Insights</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="text-center">Frequently Asked Questions</h2>
        <div class="faq-grid">
            <!-- FAQ 1 -->
            <div class="faq-item">
                <input type="checkbox" id="faq1" class="faq-toggle">
                <label for="faq1" class="faq-question">
                    <h3>What is Bulk SMS, and how can it help my business?</h3>
                    <span class="faq-icon">+</span>
                </label>
                <div class="faq-answer">
                    <p>Bulk SMS allows you to send messages to thousands of customers instantly. It's perfect for promotions, alerts, reminders, and notifications.</p>
                </div>
            </div>
            <!-- FAQ 2 -->
            <div class="faq-item">
                <input type="checkbox" id="faq2" class="faq-toggle">
                <label for="faq2" class="faq-question">
                    <h3>How does Marketing SMS work?</h3>
                    <span class="faq-icon">+</span>
                </label>
                <div class="faq-answer">
                    <p>Marketing SMS helps you promote products, announce offers, and engage customers directly via text, ensuring high open and response rates.</p>
                </div>
            </div>
            <!-- FAQ 3 -->
            <div class="faq-item">
                <input type="checkbox" id="faq3" class="faq-toggle">
                <label for="faq3" class="faq-question">
                    <h3>Can I schedule and automate SMS campaigns?</h3>
                    <span class="faq-icon">+</span>
                </label>
                <div class="faq-answer">
                    <p>Yes! Our platform lets you schedule messages in advance and automate campaigns, saving time and improving efficiency.</p>
                </div>
            </div>
            <!-- FAQ 4 -->
            <div class="faq-item">
                <input type="checkbox" id="faq4" class="faq-toggle">
                <label for="faq4" class="faq-question">
                    <h3>Does VoIPTech support Two-Way SMS?</h3>
                    <span class="faq-icon">+</span>
                </label>
                <div class="faq-answer">
                    <p>Absolutely! Two-Way SMS enables real-time customer interactions, allowing recipients to respond and engage with your business instantly.</p>
                </div>
            </div>
            <!-- FAQ 5 -->
            <div class="faq-item">
                <input type="checkbox" id="faq5" class="faq-toggle">
                <label for="faq5" class="faq-question">
                    <h3>Can I send messages to international numbers?</h3>
                    <span class="faq-icon">+</span>
                </label>
                <div class="faq-answer">
                    <p>Yes! Our global SMS service allows you to send messages to customers worldwide with reliable delivery.</p>
                </div>
            </div>
            <!-- FAQ 6 -->
            <div class="faq-item">
                <input type="checkbox" id="faq6" class="faq-toggle">
                <label for="faq6" class="faq-question">
                    <h3>How secure is VoIPTech’s SMS service?</h3>
                    <span class="faq-icon">+</span>
                </label>
                <div class="faq-answer">
                    <p>We use encrypted communication channels and secure gateways to ensure your messages remain private and compliant with industry regulations.</p>
                </div>
            </div>
            <!-- FAQ 7 -->
            <div class="faq-item">
                <input type="checkbox" id="faq7" class="faq-toggle">
                <label for="faq7" class="faq-question">
                    <h3>Can I track the performance of my SMS campaigns?</h3>
                    <span class="faq-icon">+</span>
                </label>
                <div class="faq-answer">
                    <p>Yes! Our detailed analytics provide insights on delivery rates, engagement, and response tracking to optimize your messaging strategy.</p>
                </div>
            </div>
            <!-- FAQ 8 -->
            <div class="faq-item">
                <input type="checkbox" id="faq8" class="faq-toggle">
                <label for="faq8" class="faq-question">
                    <h3>How do I get started with VoIPTech’s SMS services?</h3>
                    <span class="faq-icon">+</span>
                </label>
                <div class="faq-answer">
                    <p>Just contact us, and we’ll help you set up your SMS solution quickly and hassle-free. No technical expertise required!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="text-center mb-3">Our Client’s Testimonial</h2>
        <p class="text-center">Our business has changed so much since partnering with VoIPTech Solutions. Reliably high quality and value for money! </p>
        <div class="owl-carousel owl-theme owl-client">
            <!-- Testimonial Item 1 -->
            <div class="item">
                <div class="card border-1 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-primary1 fa-2x"></i>
                        </div>
                        <p class="card-text mb-4">Our business has changed so much since partnering with VoIPTech Solutions. Reliably high quality and value for money!</p>
                        <div class="d-flex align-items-center">
                            
                            <div>
                                <h5 class="mb-0">Michael R.</h5>
                                <p class="text-muted mb-0">Call Center Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Item 2 -->
            <div class="item">
                <div class="card border-1 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-primary1 fa-2x"></i>
                        </div>
                        <p class="card-text mb-4">Well done, outstanding support, 24×7.” Voice over Internet Protocol solutions assisted us in effectively expanding at a reduced cost</p>
                        <div class="d-flex align-items-center">
                            
                            <div>
                                <h5 class="mb-0">Sarah L.</h5>
                                <p class="text-muted mb-0">IT Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Item 3 -->
            <div class="item">
                <div class="card border-1 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-primary1 fa-2x"></i>
                        </div>
                        <p class="card-text mb-4">The best VoIP provider we used so far! Solution to Excellent global connectivity and insightful analytics for growth</p>
                        <div class="d-flex align-items-center">
                            
                            <div>
                                <h5 class="mb-0">James K.</h5>
                                <p class="text-muted mb-0">Operations Head</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section -->

<footer class="footer-section">
    <div class="footertop"></div>
    <div class="container">
        <div class="footer-grid">
            <!-- Column 1: Logo and Description -->
            <div class="footer-column">
              <span class="footer-logo"><a href="https://www.voiptechsolutions.com/"><img src="images/logo.png" class="img-fluid"></a></span>
                <ul class="contact-col">
                    <li><img src="images/globe-icon.png" class="img-fluid"><a href="https://www.voiptechsolutions.com/"> www.voiptechsolutions.com</a></li>
                    <li><img src="images/enevlop-icon.png" class="img-fluid"><a href="mailto:info@voiptechsolutions.com"> info@voiptechsolutions.com</a></li>
					<li><img src="images/phone-icon.png" class="img-fluid"><a href="tel:+917949107742"> +91-7949107742</a></li>                   
				   <!-- <li><img src="images/phone-icon.png" class="img-fluid"><a href="tel:+918917657317"> +91-8917657317</a></li> -->
					
                </ul>
            </div>

            <div class="footer-column">
                <h4>Explore</h4>
                <ul>
                    <li><a href="https://www.voiptechsolutions.com/">Home</a></li>
                    <li><a href="https://www.voiptechsolutions.com/faq">FAQ</a></li>
                    <li><a href="#" class="form-popup">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h4>Bulk SMS</h4>
                <ul>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Get Started</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h4>Social Media</h4>
                <ul class="social-footer">
                    <li><a href="https://www.facebook.com/VoIPTechSolutions" target="_blank"><img src="images/fb-icon.png" alt="" class="img-fluid"></a></li>
                    <li><a href="https://www.instagram.com/voiptechsolutions" target="_blank"><img src="images/insta-icon.png" class="img-fluid"></a></li>
                    <li><a href="https://www.linkedin.com/company/voiptechsolutions" target="_blank"><img src="images/linkedin-icon.png" class="img-fluid"></a></li>
                    <li><a href="https://wa.me/+971559372131" target="_blank"><img src="images/whatsapp-icon.png" class="img-fluid"></a></li>
                    <li><a href="tel:+917949107742" target="_blank"><img src="images/call-icon.png" class="img-fluid"></a></li>
                </ul>
            </div>
        </div>

        <!-- World Map -->
        <div class="bg-white text-center rounded-2xl"><img src="images/map/map2.jpg" alt="" class="w-full rounded-2xl  md:w-[60%] mx-auto img-fluid"></div>

        <!-- Copyright Section -->
        <div class="footer-bottom">
            <p>Copyright 2025 © VoiPTech Solutions Pvt. Ltd. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- <footer class="bg-dark text-white text-center py-3 footer-section">
    <p>Copyright 2025 © VoIPTech Solutions Pvt. Ltd. All Rights Reserved.</p>
</footer> -->



  <!-- Popup -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="closePopup">&times;</span>
             <form id="dataform2" method="post" enctype="multipart/form-data" class=""> 
                          <input type="hidden" name="_token" >   
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">Full Name</lable>
                                <input type="text" id="full_name2" name="full_name" class="form-control">
                            </div>
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">Email ID</lable>
                                <input type="email" id="email2" name="email" class="form-control">
                            </div>
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">Phone Number</lable>
                                <div class="d-flex flex-row nuber-select">
                                <select class="form-control country-code" id="country_code2" name="country_code" style="width: 90px;">
                                <option value="+91">🇮🇳 +91</option>
                                    <option value="+1">🇺🇸 +1</option>
                                    <option value="+1">🇨🇦 +1</option>
                                    <option value="+971">🇦🇪 +971</option>
                                    <option value="+44">🇬🇧 +44</option>
                                    <option value="+61">🇦🇺 +61</option>
                                    <option value="+63">🇵🇭 +63</option>
                                    <option value="+92">🇵🇰 +92</option>
                                    <option value="+880">🇧🇩 +880</option>
                                    <option value="+966">🇸🇦 +966</option>
                                    <option value="+968">🇴🇲 +968</option>
                                    <option value="+973">🇧🇭 +973</option>
                                    <option value="+977">🇳🇵 +977</option>
                                    <option value="+49">🇩🇪 +49</option>
                                    <option value="+33">🇫🇷 +33</option>
                                    <option value="+34">🇪🇸 +34</option>
                                    <option value="+39">🇮🇹 +39</option>
                                    <option value="+55">🇧🇷 +55</option>
                                    <option value="+54">🇦🇷 +54</option>
                                    <option value="+48">🇵🇱 +48</option>
                                    <option value="+27">🇿🇦 +27</option>
                                    <option value="+52">🇲🇽 +52</option>
                                    <option value="+65">🇸🇬 +65</option>
                                    <option value="+40">🇷🇴 +40</option>
                                    <option value="+216">🇹🇳 +216</option>
                                    <option value="+57">🇨🇴 +57</option>
                                    
                                    <!-- Add more country codes as needed -->
                                </select>
                                <i class="angle-down country-arrow1"><img src="images/arrow-icon.png" alt=""></i>
                                <input type="tel" id="contact_no2" name="contact_no" placeholder="WhatsApp Number/ Phone Number" class="country-contact form-control w-100" maxlength="12" pattern="^\d+$" required="" oninput="validateContactNumber(event)">
                            </div>
                            </div>
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">Select Your Industry</lable>
                                <select class="form-select" id="industry2" name="industry">
                                    <option value="">Select Your Industry</option>
                                    <option value="Retail and E-commerce">Retail and E-commerce</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Education">Education</option>
                                    <option value="Banking and Finance">Banking and Finance</option>
									<option value="Real Estate">Real Estate</option>
									<option value="Travel and Tourism">Travel and Tourism</option>
									<option value="Event Management">Event Management</option>
									<option value="Telecommunications">Telecommunications</option>
									<option value="Government and Public Services">Government and Public Services</option>
									<option value="Non-profit and Charities">Non-profit and Charities</option>
									<option value="Hospitality and Food Services">Hospitality and Food Services</option>
									<option value="Transportation and Logistics">Transportation and Logistics</option>
									<option value="Media and Entertainment">Media and Entertainment</option>
									<option value="Production and Manufacturing ">Production and Manufacturing </option>
									<option value="Energy Utility and Waste ">Energy Utility and Waste </option>
									<option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="mb-3 text-left">
                                <lable class="text-left line-height">SMS Services</lable>
                                <select class="form-select" id="sms_services2" name="services">
                                <option value="">Select Service</option>   
                                    <option value="marketing sms">Marketing SMS</option>   
                                    <option value="bulk sms">Bulk SMS</option>      
                                    <option value="otp service sms">OTP Services SMS</option>                       
								    <option value="transactional sms">Transactional SMS</option>
                                    <option value="promotional sms">Promotional SMS</option>
                                    <option value="Others">Others</option>
                                    
                                </select>
                            </div>
                            <div class="mb-3 text-left">
                                <lable  class="text-left line-height">Explain More About Requirements</lable>
                                <textarea name="message" id="message2" class="form-control" rows="2"></textarea>
                            </div>
                             <div class="mb-3 text-left">
                                  <p id="captcha2" class="text-xl fw-bold mb-2"></p>
                        <input type="number" id="captcha_input2" class="form-control" placeholder="Enter Captcha" required>
                        
                        <button type="button" onclick="generateCaptcha2()" class="btn btn-dark mt-2" >Refresh Captcha</button>
                                
                                    <input type="hidden" name="service_type" value="sms">
                             <input type="hidden" name="source" value="sms.voiptech.tech/index.php">
                            
                                
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label" for="terms">
                                    By submitting this form, you agree to VolPTech’s privacy policy and T&C.
                                </label>
                            </div>
                            <button type="button" id="send_button2" class="btn text-white pl-2 pr-2" style="background-color:#ee5329;">Get a Free Demo</button>
                        </form>
        </div>
    </div>

<div class="position-fixed d-flex justify-content-center gap-4 align-items-center d-md-none col-12 bottom-0  p-2 z-11 floating-contact">
        <div><a href="tel:+917949107742" class="flex gap-2 items-center text-white pr-4 border-r-1 border-white font-semibold"> Call Us <img src="images/icons/ph-icn.png" alt=""></a></div>
<div><a href="https://wa.me/+971559372131" target="_blank" class="flex gap-2 items-center text-white font-semibold"> WhatsApp <img src="images/icons/whatsapp-icn.png" alt=""></a></div>
</div>


<!-- <div class="whatsapp-popup">
        <a href="https://wa.me/+971504583131" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div> -->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67ea7627ed09f71909aab207/1inltr3e0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->




<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
    $('.owl-client').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:true,
        autoplay:true,
        smartSpeed: 1000,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        },
        navText: [
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>'
        ]
    });

    $('.comp-logos').owlCarousel({
            loop:true,
            margin:20,
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
    function toggleDropdown(openId, closeId) {
        let openDropdown = document.getElementById(openId);
        let closeDropdown = document.getElementById(closeId);
        
        if (closeDropdown.classList.contains("show")) {
            closeDropdown.classList.remove("show");
        }
        
        openDropdown.classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.closest('.selected-language') && !event.target.closest('.selected-currency')) {
            document.querySelectorAll('.dropdown-content').forEach(dropdown => {
                dropdown.classList.remove('show');
            });
        }
    }
</script>
<script>
        document.querySelectorAll('.progress-circle').forEach(circle => {
        let percent = circle.getAttribute('data-percent');
        let radius = circle.querySelector('.progress-bar').getAttribute('r'); 
        let circumference = 2 * Math.PI * radius; 
        let offset = circumference - (percent / 100) * circumference;

        circle.querySelector('.progress-bar').style.strokeDasharray = circumference;
        circle.querySelector('.progress-bar').style.strokeDashoffset = offset;
        });
</script>

<script>
$(document).ready(function () {

    // Define Captcha Answer (Ensure you set the actual answer somewhere)
    let answer = 10; // Example answer
    $("#send_button").click(function (event) {
        event.preventDefault(); // Prevent default form submission

        // Get the values of the inputs
        let fullname = $("#full_name").val().trim();
        let email = $("#email").val().trim();
        let contact = $("#contact_no").val().trim();
        let industry = $("#industry").val() || ""; // Ensure select has a value
        let sms_services = $("#sms_services").val() || "";
        let captcha1 = $("#captcha_input1").val().trim();

        // Validate Full Name (Max Length 500 characters)
        if (fullname === "" || fullname.length > 500) {
            alert("Full Name is required and must be less than 500 characters.");
            return;
        }

        // Validate Email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "" || email.length > 5000 || !emailRegex.test(email)) {
            alert("Please enter a valid email address (less than 5000 characters).");
            return;
        }

        // Validate Contact Number
        if (contact === "" || !/^\d+$/.test(contact) || contact.length < 8 || contact.length > 12) {
            alert("Contact Number must contain only digits and be between 8 to 12 characters.");
            return;
        }

        // Validate Select Fields
        if (industry === "") {
            alert("Please select an Industry.");
            return;
        }
        if (sms_services === "") {
            alert("Please select an SMS Service.");
            return;
        }

        // Validate Captcha
        if (captcha1 === "" || !/^\d+$/.test(captcha1)) {
            alert("Captcha is required and must contain only digits.");
            return;
        }

        validateCaptcha1();
    });
});

function validateCaptcha1() {
    const userAnswer = parseInt(document.getElementById('captcha_input1').value, 10);
    if (userAnswer === answer) {
        submitForm();
    } else {
        alert("Wrong Captcha answer. Try again!");
        generateCaptcha1(); // Reset CAPTCHA on failure
    }
}

function submitForm() {
    const formElement = document.getElementById('dataform');
    const formData = new FormData(formElement);
    const jsonData = {};

    formData.forEach((value, key) => {
        jsonData[key] = value;
    });

    const authToken = 'Basic dm9vcHRlY2hjcm0=';

    fetch('https://crm.voiptechsolutions.com/api/savelead', {
        method: 'POST',
        headers: {
            'Authorization': authToken,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify(jsonData)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        console.log('Success:', data);

        if (data.status === 'success') {
            document.getElementById('dataform').reset();
            //alert("Your Data Has Been Successfully Submitted.");
            // window.location.href = "https://wa.me/+971504583131";
            window.location.href = "thank-you.php";
        } else {
            alert("Submission failed. Please try again.");
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error submitting the form. Please try again later.');
    });
}


</script>



<script>
    //for POP Form
 $(document).ready(function () {
    $("#send_button2").click(function (event) {
        event.preventDefault(); // Prevent default form submission

        // Get form values
        let fullname2 = $("#full_name2").val().trim();
        let email2 = $("#email2").val().trim();
        let contact2 = $("#contact_no2").val().trim();
        let industry2 = $("#industry2").val();
        let sms_services2 = $("#sms_services2").val();
        let captcha2 = $("#captcha_input2").val().trim();

        // Validate Full Name
        if (fullname2 === "") {
            alert("Full Name is required.");
            return false;
        } else if (fullname2.length > 500) {
            alert("Full Name must be less than 500 characters.");
            return false;
        }

        // Validate Email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email2 === "") {
            alert("Email is required.");
            return false;
        } else if (email2.length > 5000) {
            alert("Email must be less than 5000 characters.");
            return false;
        } else if (!emailRegex.test(email2)) {
            alert("Please enter a valid email address.");
            return false;
        }

        // Validate Contact Number
        if (contact2 === "") {
            alert("Contact Number is required.");
            return false;
        } else if (!/^\d+$/.test(contact2)) {
            alert("Contact Number must contain only digits.");
            return false;
        } else if (contact2.length < 8 || contact2.length > 12) {
            alert("Contact Number must be between 8 and 12 digits.");
            return false;
        }

        // Validate Industry & SMS Service
        if (industry2 === "") {
            alert("Please select Industry.");
            return false;
        }
        if (sms_services2 === "") {
            alert("Please select SMS Service.");
            return false;
        }

        // Validate Captcha
        if (captcha2 === "") {
            alert("Captcha is required.");
            return false;
        } else if (!/^\d+$/.test(captcha2)) {
            alert("Captcha must contain only digits.");
            return false;
        }

        // If validation passes, validate captcha
        validateCaptcha2();
    });
});

function validateCaptcha2() {
    const userAnswer2 = parseInt(document.getElementById('captcha_input2').value, 10);
    if (userAnswer2 === answer2) {
        submitForm2(); // Submit form only if CAPTCHA is correct
    } else {
        alert('Wrong CAPTCHA answer. Try again!');
        generateCaptcha2(); // Reset CAPTCHA on failure
    }
}

function submitForm2() {
    const formElement2 = document.getElementById('dataform2');
    const formData2 = new FormData(formElement2);
    const jsonData2 = {};

    formData2.forEach((value, key) => {
        jsonData2[key] = value;
    });

    fetch('https://crm.voiptechsolutions.com/api/savelead', {
        method: 'POST',
        headers: {
            'Authorization': 'Basic dm9vcHRlY2hjcm0=',
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify(jsonData2)
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error(`HTTP Error: ${response.status}`);
        }
    })
    .then(data => {
        if (data.status === 'success') {
           // alert("Your Data Has Been Successfully Submitted.");
            document.getElementById('dataform2').reset();
           // window.location.href = "https://wa.me/+971504583131";
           window.location.href = "thank-you.php";
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error submitting the form. Please try again later.');
    });
}

</script>
<!-- Gooel translatore -->
 <!-- Google Translate Element -->
 <div id="google_translate_element"></div>

<script>
    // Initialize Google Translate
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,hi,it,fil,zu,en-GB,ur,vi,fr,id,es,en-AU,de,no,pl,br,pl,af,ms,ro,ar,ur,bn',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }

    // Custom dropdown functionality
    function toggleDropdown() {
        const dropdown = document.getElementById('flagsDropdown');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.custom-translator')) {
            document.getElementById('flagsDropdown').style.display = 'none';
        }
    });

    // Handle language selection
    document.querySelectorAll('.flag-option').forEach(option => {
        option.addEventListener('click', function() {
            const lang = this.dataset.lang;
            setLanguage(lang);
            updateSelected(this.cloneNode(true));
        });
    });

    function setLanguage(lang) {
        // Set cookie for Google Translate
        document.cookie = `googtrans=/en/${lang}; path=/`;
        
        // Reload page to apply translation
        location.reload();
    }

    function updateSelected(element) {
        const selected = document.querySelector('.selected-language');
        selected.innerHTML = element.innerHTML;
    }

    // Show current language on page load
    window.onload = function() {
        const langCookie = document.cookie.split('; ')
            .find(row => row.startsWith('googtrans='));
        
        if (langCookie) {
            const lang = langCookie.split('=')[1].split('/')[2];
            const selectedOption = document.querySelector(`[data-lang="${lang}"]`);
            if (selectedOption) updateSelected(selectedOption.cloneNode(true));
        }
    };
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
     window.onload = function () {
            generateCaptcha1();
            
             generateCaptcha2();
             
              // Show popup after 2 seconds (2000 ms)

              const contactBtns = document.querySelectorAll('.form-popup');
            const openPopup = function(e) {
                e.preventDefault();
                document.getElementById('popup').style.display = 'block';
            };
            contactBtns.forEach(contactBtn => {
                contactBtn.addEventListener('click', openPopup);
            })
            // setTimeout(function() {
            //     document.getElementById('popup').style.display = 'none';
            // }, 10000);

            // Close popup functionality
            document.getElementById('closePopup').onclick = function() {
                document.getElementById('popup').style.display = 'none';
            };
            
            
           
        };
        
        
</script>


</body>
</html>