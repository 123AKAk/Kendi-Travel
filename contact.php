<?php
    require "includes/header.php";
    require "includes/navbar.php";
?>
    <!-- ========== inner-banner-section start============= -->

    <div class="inner-banner-section">
        <img src="assets/images/bg/inner-banner-vctr.png" class="inner-banner-vector" alt="image">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10 col-sm-12">
                    <div class="breadcrumb-area">
                        <span>Get in Touch</span>
                        <h2>Let’s have a talk together</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  inner-banner-section end=============== -->

  
    <!-- =============== info-section start  =============== -->

    <div class="info-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 col-sm-12">
                    <div class="info-title-area">
                        <h3>Kendi Travel Travel Agency Inc.</h3>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="info-single">
                        <div class="info-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="info-text">
                            <h3>Address</h3>
                            <p>168/170, Ave 01,Old York Drive Rich Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="info-single">
                        <div class="info-icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <div class="info-text">
                            <h3>Call Us!</h3>
                            <a href="tel:+8801569862560">+88 0156 986 2560</a>
                            <a href="tel:+8801761111456">+880176 1111 456</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="info-single">
                        <div class="info-icon">
                            <i class='bx bx-envelope' ></i>
                        </div>
                        <div class="info-text">
                            <h3>Email Info</h3>
                            <a href="mailto:info@companyname123.com">info@companyname123.com</a>
                            <a href="mailto:info@example.com">info@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== info-section end  =============== -->

    <!-- =============== contact-form-section start  =============== -->

    <div class="contact-section pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="section-title1">
                        <span>Reservation Form</span>
                        <h2>Let’s Get in Touch</h2>
                        <img src="assets/images/icons/section-title-vector.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-from-wrapper">
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Your Name:">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Your Phone Number:">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Type Your Subject:">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <textarea name="message" rows="5" placeholder="Type Your Message..."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="eg-btn btn--primary btn--lg submit-btn">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== contact-form-section end  =============== -->


    <!-- =============== instargam-feed-section start =============== -->

    <?php
        require "includes/instagram.php";
    ?>

    <!-- =============== instargam-feed-section end =============== -->

<?php
  require "includes/footer.php";
  require "includes/scripts.php";
?>