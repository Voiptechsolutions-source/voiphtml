<footer class="main-footer bg-dark text-white pt-5">
        <div class="container">
            <div class="text-center col-12 col-md-5 mx-auto mb-5">
                <div class="footer-logo">
                        <a href="https://www.impressionmedia.ae/" target="_blank">
                            <img src="assets/images/logo.png" alt="Logo" height="40">
                        </a>
                    </div>
                    <div class="footer-about">
                        <p>We are a leading Dubai-based agency offering expert media buying, performance marketing, and affiliate solutions. We help brands achieve growth through data-driven strategies and innovative digital campaigns.</p>
                    </div>
            </div>
            
<!-- 
            <div class="footer-lg-logo">
                <img src="assets/images/footer-lg-logo.png" alt="Footer Logo" class="img-fluid">
            </div> -->
        </div>
        <div class="copyright">
            <div class="copy-txt">© 2025 Designer Powered By Impression Media</div>
            <div class="privacy-nav">
                <a href="https://www.impressionmedia.ae/privacy-policy">Privacy Policy</a>
                <a href="https://www.impressionmedia.ae/terms-conditions">Terms & Conditions</a>
            </div>
        </div>
    </footer>

<button onclick="topFunction()" id="toTop" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm11.3-395.3l112 112c4.6 4.6 5.9 11.5 3.5 17.4s-8.3 9.9-14.8 9.9l-64 0 0 96c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-96-64 0c-6.5 0-12.3-3.9-14.8-9.9s-1.1-12.9 3.5-17.4l112-112c6.2-6.2 16.4-6.2 22.6 0z"/></svg></button> 
   <!-- The Modal Form -->
<div class="modal" id="myModalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog">
    <div class="modal-content">

     

      <!-- Modal body -->
      <div class="modal-body modal-form-body">
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="close-icn">&times;</span></button>
        <div class="banner-form contact-form">
            <div class="form-header bg-grad1">
                <p>Have Questions?</p>
                <!-- <div class="whatsapp-no">
                    <a href="https://wa.link/voiptech" target="_blank">
                        <img src="assets/images/icons/whatsapp-icn.png" alt="WhatsApp">
                        <span>WhatsApp Us</span>
                    </a>
                </div> -->
                
            </div>
            <form method="post" id="freedemoform" name="freedemoform" enctype="multipart/form-data">           
                <input type="hidden" name="_token" value="wgZwX43mxrHW3UpnwNVnbsZnuvvzVJYoLMCejx6l" autocomplete="off">                    <div class="form-fields bg-white p-4">
                    <div class="form-group">
                        <input type="text" id="full_name" name="full_name" placeholder="Full Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="E-mail" class="form-control">
                    </div>
                    <div class="form-group">
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
                        
                            <input type="tel" id="contact_no" name="contact_no" placeholder="WhatsApp Number/ Phone Number" oninput="validateContactNumber(event)" class="form-control" maxlength="12">

                        </div>
                        <!-- <input type="tel" id="contactno" name="contactno" placeholder="Phone Number" class="form-control" /> -->
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <input type="hidden" name="source" value="https://www.voiptechsolutions.com/services/voip">
                

                    <div class="form-group text-center mt-5 mb-0">
                        <input type="button" id="btn-freedemo" value="Submit" class="btn btn-secondary text-white px-5 text-uppercase rounded-pill">
                    </div>
                </div>
            </form>
            
        </div>
      </div>

      
    </div>
  </div>
</div>