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
        
</head>
<body>
    <!-- Header Section -->
    <header class="header-section thankyou-header" >
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
                        <li class="nav-item"><a class="nav-link" href="https://www.voiptechsolutions.com/contact-us" >Contact</a></li>
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
                <a class="btn btn-primary ms-3" href="#dataform" >Get Started</a>
                </div>
            </div>
        </nav>
        <div class="container get-start-section">
            <!-- Get Started Form -->
            <div class="row header-content">
                <div class="col-md-12 text-center header-left-content mt-5">
                    <h1>Thanks for submitting!</h1>
                    
                    <p>Your message has been sent!</p>

<a href="https://wa.me/+971504583131" target="_blank" class="btn bg-white py-2 px-4 rounded text-danger text-xl d-inline-flex align-items-center  justify-content-center whats-btn ">
<span class="">
  <img src="images/whatsapp-icon.png" class="w-50">
  </span> 
WhatsApp
  
</a>        
<a href="tel:+917949107742"  class="btn bg-white py-2 px-4 rounded text-danger text-xl d-inline-flex align-items-center gap-2   justify-content-center">
<span class="">
  <img src="images/call-icon.png" class="w-50">
  </span>  
Call Us
  
</a>
</div>
                
            </div>
            
        </div>

    </header>






<!-- Footer Section -->

<footer class="footer-section d-none">
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
                    <li><a href="https://wa.me/+971504583131" target="_blank"><img src="images/whatsapp-icon.png" class="img-fluid"></a></li>
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
                                    <option value="+971">🇦🇪 +971</option>
                                    <option value="+44">🇬🇧 +44</option>
                                    <option value="+61">🇦🇺 +61</option>
                                    <option value="+63">🇵🇭 +63</option>
                                    <option value="+92">🇵🇰 +92</option>
                                    <option value="+977">🇳🇵 +977</option>
                                    <option value="+49">🇩🇪 +49</option>
                                    <option value="+33">🇫🇷 +33</option>
                                    <option value="+39">🇮🇹 +39</option>
                                    
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
                                    <option value="">SMS Services</option>
                                    <option value="transactional">Transactional SMS</option>
                                    <option value="promotional">Promotional SMS</option>
                                    <option value="otp">OTP Services SMS</option>
                                    <option value="bulk sms">Bulk SMS</option>
                                    <option value="marketing sms">Marketing SMS</option>
                                    
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
<div><a href="https://wa.me/+971504583131" target="_blank" class="flex gap-2 items-center text-white font-semibold"> WhatsApp <img src="images/icons/whatsapp-icn.png" alt=""></a></div>
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


<!-- Gooel translatore -->
 <!-- Google Translate Element -->
 <div id="google_translate_element"></div>

<script>
    // Initialize Google Translate
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,hi,it,fil,zu,en-GB,ur,vi,fr,id,en-AU',
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