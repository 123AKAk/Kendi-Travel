    <!-- =============== Footer-section start ============ -->

    <footer class="footer-section">
       <div class="footer-top">
        <div class="container-xl container-lg-fluid container">
            <div class="row justify-content-center gy-5">
                <div class="col-lg-3 col-md-10 col-sm-6 col-11 order-sm-0 order-1">
                    <div class="footer-about">
                        <img src="assets/images/icons/footer-plane.svg" class="footer-plane" alt="image">
                        <div class="footer1-logo">
                            <img src="assets/images/icons/footer1-logo.svg" alt="image">
                            <p>Since: <?= $datestarted ?></p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 400 400">
                            <defs>
                              <!-- The text path: see links above regarding coordinate system -->
                              <path d="M0, 200a200, 200 0 1, 0 400, 0a200, 200 0 1, 0 -400, 0" id="txt-path" fill="white"></path>
                            </defs>
                          
                            <text fill="#DDDDDD" font-size="35.5" font-family="Helvetica Neue" font-weight="600">
                              <!-- This is the magic -->
                              <textPath startOffset="0" xlink:href="#txt-path">Kendi Travel Travel Agency &nbsp; Kendi Travel Travel Agency</textPath>
                            </text>
                          </svg>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-lg-center">
                    <div class="footer-item">
                        <h4>Information</h4>
                        <ul class="link-list">
                            <li><a href="about.php">About Kendi Travel</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="contact.php">Become Partner</a></li>
                            <li><a href="contact.php">Help & Support</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-lg-center">
                    <div class="footer-item">
                        <h4>Destinations</h4>
                        <ul class="link-list">

                            <!-- loops system destinations -->
                            <li><a href="destination-details.php">Switzerland</a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-lg-center">
                    <div class="footer-item">
                        <h4>Reach Us</h4>
                        <ul class="contact-list">
                            <li>
                                <div class="icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="text">
                                    <a href="tel:<?= $siteemail2 ?>"><?= $siteemail2 ?></a> 
                                    <a href="tel:<?= $siteemail2 ?>"><?= $siteemail2 ?></a> 
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="text">
                                    <a href="mailto:<?= $sitephoneno1 ?>"><?= $sitephoneno1 ?></a>
                                    <a href="mailto:<?= $sitephoneno2 ?>"><?= $sitephoneno2 ?></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="text">
                                    <?= $address1 ?>
                                </div>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </div>
            <div class="row footer-meta">
                <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center align-items-center mb-lg-0 mb-5">
                    <h4>Stay Connected:</h4>
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li> 
                        <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest'></i></a></li> 
                    </ul>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center align-items-center">
                    <h4>Pay Safely With Us!</h4>
                    <ul class="pay-list">
                        <li><img src="assets/images/icons/pay1.svg" alt="image"></li>
                        <li><img src="assets/images/icons/pay2.svg" alt="image"></li>
                        <li><img src="assets/images/icons/pay3.svg" alt="image"></li>
                        <li><img src="assets/images/icons/pay4.svg" alt="image"></li>
                    </ul>
                </div>
            </div>
        </div>
       </div>
       <div class="container">
       <div class="footer-bottom">
            <div class="row d-flex align-items-center g-3">
                <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center text-lg-start text-center px-1">
                    <p>Copyright <?= $siteyear ?> <a href="./" class="egns-lab">Kendi Travel </a> | Made By <a href="#" class="egns-lab">Eyo</a></p>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center align-items-center">
                    <ul class="f-bottom-list d-flex jusify-content-start align-items-center">
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="termsofuse.php">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <!-- =============== Footer-section end =============== -->