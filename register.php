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
                        <span>Register</span>
                        <h2>Register Here</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  inner-banner-section end=============== -->

  
    <!-- =============== error-section start  =============== -->

    <div class="signup-section pt-120 pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="form-wrapper">
                        <div class="form-title">
                            <h3>Register</h3>
                            <p>Do you already have an account? <a href="login.php">Log in here</a></p>
                        </div>
                        <form class="w-100">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>Frist Name *</label>
                                        <input type="email" placeholder="Frist Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>Last Name *</label>
                                        <input type="email" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Enter Your Email *</label>
                                        <input type="email" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Password *</label>
                                        <input type="password" name="password" id="password" placeholder="Create A Password"/>
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Confirm Password *</label>
                                        <input type="password" name="cpassword" id="password2" placeholder="Confirm Password"/>
                                        <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" id="html">
                                            <label for="html">I agree to the Terms & Policy</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="eg-btn btn--primary btn--md w-100">Create Account</button>
                            </div>
                        </form>
                        <div class="alternate-signup-box">
                            <h6>or signup WITH</h6>
                            <div class="btn-group gap-4">
                                <a href="" class="eg-btn google-btn d-flex align-items-center"><i class='bx bxl-google'></i><span>signup whit google</span></a>
                                <a href="" class="eg-btn facebook-btn d-flex align-items-center"><i class='bx bxl-facebook' ></i>signup whit facebook</a>
                            </div>
                        </div>
                        <div class="form-poicy-area">
                            <p>By clicking the "signup" button, you create a Cobiro account, and you agree to Cobiro's <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== error-section end  =============== -->

    <!-- =============== partner-section start  =============== -->

    <div class="partner-section pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="swiper partner-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="partner-single">
                                <img src="assets/images/icons/partner1.svg" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-single">
                                <img src="assets/images/icons/partner2.svg" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-single">
                                <img src="assets/images/icons/partner3.svg" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-single">
                                <img src="assets/images/icons/partner4.svg" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-single">
                                <img src="assets/images/icons/partner5.svg" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-single">
                                <img src="assets/images/icons/partner1.svg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== partner-section end  =============== -->
  
<?php
  require "includes/footer.php";
  require "includes/scripts.php";
?>