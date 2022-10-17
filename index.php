
<?php
    require "includes/header.php";
    require "includes/navbar.php";
?>

    <!-- ========== banner1-area start============= -->

    <div class="banner-section1 overflow-hidden"> 
        <div class="cloud-icon1">
            <img src="assets/images/icons/cloud1.svg" alt="image">
        </div>
        <div class="cloud-icon2">
            <img src="assets/images/icons/cloud2.svg" alt="image">
        </div>
        <div class="cloud cloud1">
          <img src="assets/images/icons/banner-plane.svg" alt="image">
        </div>
        <div class="banner-social-area d-xxl-flex d-none">
            <ul class="banner-social-list">
                <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li> 
                <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest'></i></a></li> 
            </ul>
        </div>
        <div class="banner-image2">
            <img src="assets/images/bg/banner-image2.png" class="img-fluid" alt="image">
        </div>

        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-2 offset-xl-1 col-lg-2 d-lg-flex d-none justify-content-end">
                    <div class="banner-image1">
                        <img src="assets/images/bg/banner-image1.png" class="img-fluid" alt="image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="banner1-content" >
                        <span>Let's Feel a Yacht Trip</span>
                        <h1>The Best Way to Plan Your Trip Around The World.</h1>
                        <p>Treat yourself with a journey to your inner self.</p>
                        <div class="discover-btn">
                            <a href="destination.php" class="eg-btn btn--primary btn--lg">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 d-lg-flex d-none justify-content-lg-start justify-content-center">
                </div>
            </div>
             
        </div>
    </div>

    <!-- ===============  banner1-area end=============== -->

    <!-- ===============  Search-bar section start============== -->
    <div class="searchbar-section">
        <div class="container">
            <div class="multi-main-search" >
                <div class="row align-items-center g-4">
                    <div class="col-lg-10">
                        <div class="row gx-0 gy-4 align-items-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="search-box-single">
                                    <div class="searchbox-icon">
                                        <img src="assets/images/icons/form-location.svg" alt="image">
                                    </div>
                                    <div class="searchbox-input">
                                        <select class="defult-select-drowpown" data-placeholder=""
                                            id="place-dropdown">
                                            <option value="">Where to</option>
                                            <option value="1">USA</option>
                                            <option value="2">Egypt</option>
                                            <option value="3">Bali</option>
                                            <option value="4">South Africa</option>
                                            <option value="4">Turkey</option>
                                            <option value="4">Nepal</option>
                                            <option value="4">Istambul</option>
                                            <option value="4">Dubai</option>
                                            <option value="4">Australia</option>
                                            <option value="4">Finland</option>
                                            <option value="4">Canada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-4">
                                <div class="search-box-single">
                                    <div class="searchbox-icon">
                                        <img src="assets/images/icons/calendar.svg" alt="image">
                                    </div>
                                    <div class="searchbox-input">
                                        <select class="defult-select-drowpown" data-placeholder=""
                                            id="activity-dropdown">
                                            <option value="">Month</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                            <option value="4">May</option>
                                            <option value="4">June</option>
                                            <option value="4">July</option>
                                            <option value="4">August</option>
                                            <option value="4">September</option>
                                            <option value="4">October</option>
                                            <option value="4">November</option>
                                            <option value="4">December</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="search-box-single remove-after">
                                    <div class="searchbox-icon">
                                        <img src="assets/images/icons/travelling.svg" alt="image">
                                    </div>
    
                                    <div class="searchbox-input">
                                        <select class="defult-select-drowpown" id="person-dropdown">
                                            <option selected value="0">Travel Type</option>
                                            <option value="1">Honeymoon</option>
                                            <option value="2">Family</option>
                                            <option value="3">Adventure</option>
                                            <option value="4">Forest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end">
                        <div class="main-form-submit w-100">
                            <button type="submit" class="eg-btn btn--primary btn--lg w-100">Find Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Search-bar section end=============== -->

    <!-- =============== category-section start  =============== -->

    <div class="category-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                    <div class="section-title1" >
                        <span>Travel Category</span>
                        <h2>Our Popular Tours Type</h2>
                        <img src="assets/images/icons/section-title-vector.svg" class="img-fluid" alt="image">
                    </div>
                </div>
            </div>
            <div class="row row-cols-xl-6 row-cols-lg-4 row-cols-md-4 row-cols-sm-3 row-cols-2 justify-content-center g-xxl-5 g-4">
                <div class="col" >
                    <div class="category-single1">
                        <div class="icon">
                            <img src="assets/images/icons/adventure.svg" alt="image">  
                        </div>
                        <div class="content">
                            <h4><a href="tour-package.php">Adventure</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col" >
                    <div class="category-single1">
                        <div class="icon">
                            <img src="assets/images/icons/city-tour.svg" alt="image">     
                        </div>
                        <div class="content">
                            <h4><a href="tour-package.php">City Tour</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col" >
                    <div class="category-single1">
                        <div class="icon">
                            <img src="assets/images/icons/sheep.svg" alt="image">    
                        </div>
                        <div class="content">
                            <h4><a href="tour-package.php">Cruises Tour</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col" >
                    <div class="category-single1">
                        <div class="icon">
                            <img src="assets/images/icons/wedding.svg" alt="image">   
                        </div>
                        <div class="content">
                            <h4><a href="tour-package.php">Wedding</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col" >
                    <div class="category-single1">
                        <div class="icon">
                            <img src="assets/images/icons/sea-tour.svg" alt="image">    
                        </div>
                        <div class="content">
                            <h4><a href="tour-package.php">Sea Tour</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col" >
                    <div class="category-single1">
                        <div class="icon">
                            <img src="assets/images/icons/travel.svg" alt="image">   
                        </div>
                        <div class="content">
                            <h4><a href="tour-package.php">Travel</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== category-section end  =============== -->

    <!-- =============== Deal-section start  =============== -->

    <div class="deal-section pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                    <div class="section-title1" >
                        <span>Deals & Offer</span>
                        <h2>Kendi Travel Amazing Deals!</h2>
                        <img src="assets/images/icons/section-title-vector.svg" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center g-4">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8" >
                    <div class="deal-single1">
                        <div class="deal-image">
                            <span class="favourite">
                                <i class="bi bi-suit-heart-fill"></i>
                            </span>
                            <span class="discount-bagde">20%</span>
                            <img src="assets/images/bg/deal11.png" class="img-fluid" alt="image">
                        </div>
                        <div class="deal-content">
                            <div class="review-area">
                                <ul class="star-list">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <span>(10 Review)</span>
                            </div>
                            <h4><a href="tour-package-details.php">Aegean Adventure</a></h4>
                            <div class="price">
                                <span>From $260</span><del>/S480</del>
                            </div>
                            <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8" >
                    <div class="deal-single1">
                        <div class="deal-image">
                            <span class="favourite">
                                <i class="bi bi-suit-heart-fill"></i>
                            </span>
                            <span class="discount-bagde">15%</span>
                            <img src="assets/images/bg/deal12.png" class="img-fluid" alt="image">
                        </div>
                        <div class="deal-content">
                            <div class="review-area">
                                <ul class="star-list">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <span>(10 Review)</span>
                            </div>
                            <h4><a href="tour-package-details.php">Tours Ethiopia!</a></h4>
                            <div class="price">
                                <span>From $250</span><del>/S480</del>
                            </div>
                            <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8" >
                    <div class="deal-single1">
                        <div class="deal-image">
                            <span class="favourite">
                                <i class="bi bi-suit-heart-fill"></i>
                            </span>
                            <span class="discount-bagde">25%</span>
                            <img src="assets/images/bg/deal13.png" class="img-fluid" alt="image">
                        </div>
                        <div class="deal-content">
                            <div class="review-area">
                                <ul class="star-list">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <span>(10 Review)</span>
                            </div>
                            <h4><a href="tour-package-details.php">Aegean Beach</a></h4>
                            <div class="price">
                                <span>From $280</span><del>/S480</del>
                            </div>
                            <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8" >
                    <div class="deal-single1">
                        <div class="deal-image">
                            <span class="favourite">
                                <i class="bi bi-suit-heart-fill"></i>
                            </span>
                            <span class="discount-bagde">23%</span>
                            <img src="assets/images/bg/deal14.png" class="img-fluid" alt="image">
                        </div>
                        <div class="deal-content">
                            <div class="review-area">
                                <ul class="star-list">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <span>(10 Review)</span>
                            </div>
                            <h4><a href="tour-package-details.php">South America</a></h4>
                            <div class="price">
                                <span>From $290</span><del>/S480</del>
                            </div>
                            <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== Deal-section end =============== -->

    <!-- =============== destination-section start  =============== -->

    <div class="destination-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-10 text-center">
                    <div class="section-title1" >
                        <span>Destination</span>
                        <h2>Your Desired Destination</h2>
                        <img src="assets/images/icons/section-title-vector.svg" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="destination-wrap">
                <div class="destination-single1" >
                    <img src="assets/images/bg/destnation11.png" class="destination-img img-fluid" alt="image">
                    <div class="content">
                        <div class="text-wrap">
                            <h4><a href="destination-details.php">Wiesbaden Sea</a></h4>
                            <p>40 Tours Place</p>
                        </div>
                    </div>
                </div>
                <div class="destination-single1" >
                    <img src="assets/images/bg/destnation12.png" class="destination-img img-fluid" alt="image">
                    <div class="content">
                        <div class="text-wrap">
                            <h4><a href="destination-details.php">California City</a></h4>
                            <p>40 Tours Place</p>
                        </div>
                    </div>
                </div>
                <div class="destination-single1 order-lg-0 order-1" >
                    <img src="assets/images/bg/destnation13.png" class="destination-img img-fluid" alt="image">
                    <div class="content">
                        <div class="text-wrap">
                            <h4><a href="destination-details.php">Grand Switzerland</a></h4>
                            <p>40 Tours Place</p>
                        </div>
                    </div>
                </div>
                <div class="destination-single1" >
                    <img src="assets/images/bg/destnation14.png" class="destination-img img-fluid" alt="image">
                    <div class="content">
                        <div class="text-wrap">
                            <h4><a href="destination-details.php">Beauty of France</a></h4>
                            <p>40 Tours Place</p>
                        </div>
                    </div>
                </div>
                <div class="destination-single1" >
                    <img src="assets/images/bg/destnation15.png" class="destination-img img-fluid" alt="image">
                    <div class="content">
                        <div class="text-wrap">
                            <h4><a href="destination-details.php">United States</a></h4>
                            <p>40 Tours Place</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-70">
                <div class="col-8 text-center">
                    <a href="destination.php" class="eg-btn btn--primary-outline btn--lg">All Destination</a>
                </div>
            </div>
        </div>
    </div>

     <!-- =============== destination-section end =============== -->

     <!-- =============== video-section start  =============== -->

    <div class="video-section mt-120">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-7 col-md-12" >
                    <div class="video-section-content">
                        <span>Feel The Vibe</span><img src="assets/images/icons/fly-shape1.svg" alt="image">
                        <h2>Life Begins at The End of Your Comfort Zone.</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adi- piscing elit. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Exercitation ullam laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="destination.php" class="eg-btn btn--primary btn--lg">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 d-flex justify-content-lg-end justify-content-center" >
                    <div class="video-wrapper">
                        <div class="video-play">
                            <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="popup-youtube video-icon"><i class="bx bx-play"></i></a>
                        </div>
                        <span class="watch-video">Watch Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- =============== video-section end  =============== -->

     <!-- =============== asking-form-seciton start  =============== -->

    <div class="asking-form-section" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-10">
                    <div class="asking-form-wrap">
                        <div class="section-title1 sibling2">
                            <h2>Feel Free To Ask</h2>
                            <img src="assets/images/icons/section-title-vector.svg" alt="image">
                        </div>
                        <form class="style-1">
                            <div class="row g-5">
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <input type="email" placeholder="Your E-mail">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <textarea name="message" rows="6" placeholder="Write your message here.."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="eg-btn btn--primary btn--lg">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- =============== asking-form-seciton end  =============== -->

    <!-- ===============  Best-plan-section   start =============== -->

    <div class="best-plan-section pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-10 text-center">
                    <div class="section-title1" >
                        <span>Choose Your Tour</span>
                        <h2>Get The Best Plans For Your’s</h2>
                        <img src="assets/images/icons/section-title-vector.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 position-relative" >
                    <div class="swiper best-plan-slider position-relative">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="best-plan-single1">
                                    <div class="image">
                                        <img src="assets/images/bg/best-plan11.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="content">
                                        <p>From $200</p>
                                        <h4><a href="tour-package-details.php">Bangkok & Krabi Even Bette</a></h4>
                                        <div class="best-plan-meta">
                                            <span class="duration"><i class="bi bi-clock"></i>2 days 3 night</span>
                                            <span class="rating"><i class="bi bi-star-fill"></i>4.8 (150)</span>
                                        </div>
                                        <div class="list-area">
                                            <h5>Free Package Facility:</h5>
                                            <ul class="plan-list1">
                                                <li>Free Best Tour Guided</li>
                                                <li>Free Messages</li>
                                                <li>No Booking Charge</li>
                                                <li>Best Rate Gurantee</li>
                                            </ul>
                                        </div>
                                        <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="best-plan-single1">
                                    <div class="image">
                                        <img src="assets/images/bg/best-plan12.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="content">
                                        <p>From $200</p>
                                        <h4><a href="tour-package-details.php">Caribbean Cooking Experien</a></h4>
                                        <div class="best-plan-meta">
                                            <span class="duration"><i class="bi bi-clock"></i>2 days 3 night</span>
                                            <span class="rating"><i class="bi bi-star-fill"></i>4.8 (150)</span>
                                        </div>
                                        <div class="list-area">
                                            <h5>Free Package Facility:</h5>
                                            <ul class="plan-list1">
                                                <li>Free Best Tour Guided</li>
                                                <li>Free Messages</li>
                                                <li>No Booking Charge</li>
                                                <li>Best Rate Gurantee</li>
                                            </ul>
                                        </div>
                                        <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="best-plan-single1">
                                    <div class="image">
                                        <img src="assets/images/bg/best-plan13.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="content">
                                        <p>From $200</p>
                                        <h4><a href="tour-package-details.php">This Year Amazing Bangkok</a></h4>
                                        <div class="best-plan-meta">
                                            <span class="duration"><i class="bi bi-clock"></i>2 days 3 night</span>
                                            <span class="rating"><i class="bi bi-star-fill"></i>4.8 (150)</span>
                                        </div>
                                        <div class="list-area">
                                            <h5>Free Package Facility:</h5>
                                            <ul class="plan-list1">
                                                <li>Free Best Tour Guided</li>
                                                <li>Free Messages</li>
                                                <li>No Booking Charge</li>
                                                <li>Best Rate Gurantee</li>
                                            </ul>
                                        </div>
                                        <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrows arrows-style-1 text-center d-xl-flex d-none flex-row justify-content-between align-items-center w-100">
                        <div class="plan1-prev swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide"> 
                            <svg width="20" height="12" viewBox="0 0 20 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.00001 10.573V6L7.00001 1.42701C7.00001 1.25744 6.80224 1.16481 6.67197 1.27336L1 6L6.67197 10.7266C6.80224 10.8352 7.00001 10.7426 7.00001 10.573Z"/>
                                <path d="M19 6.5C19.2761 6.5 19.5 6.27614 19.5 6C19.5 5.72386 19.2761 5.5 19 5.5V6.5ZM6.67197 10.7266L6.99206 10.3425V10.3425L6.67197 10.7266ZM1 6L0.679909 5.61589L0.218975 6L0.679909 6.38411L1 6ZM6.67197 1.27336L6.35188 0.889252L6.35188 0.889253L6.67197 1.27336ZM19 5.5L7.00001 5.5V6.5L19 6.5V5.5ZM6.50001 6V10.573H7.50001V6H6.50001ZM6.99206 10.3425L1.32009 5.61589L0.679909 6.38411L6.35188 11.1107L6.99206 10.3425ZM1.32009 6.38411L6.99206 1.65747L6.35188 0.889253L0.679909 5.61589L1.32009 6.38411ZM6.50001 1.42701L6.50001 6H7.50001L7.50001 1.42701H6.50001ZM6.99206 1.65747C6.79667 1.82031 6.50001 1.68136 6.50001 1.42701H7.50001C7.50001 0.833523 6.80781 0.509313 6.35188 0.889252L6.99206 1.65747ZM6.50001 10.573C6.50001 10.3186 6.79667 10.1797 6.99206 10.3425L6.35188 11.1107C6.80781 11.4907 7.50001 11.1665 7.50001 10.573H6.50001Z"/>
                            </svg>    
                         </div>
                        <div class="plan1-next swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide"> 
                            <svg width="20" height="12" viewBox="0 0 20 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 1.42701V6V10.573C13 10.7426 13.1978 10.8352 13.328 10.7266L19 6L13.328 1.27336C13.1978 1.16481 13 1.25744 13 1.42701Z"/>
                                <path d="M1 5.5C0.723858 5.5 0.5 5.72386 0.5 6C0.5 6.27614 0.723858 6.5 1 6.5V5.5ZM13.328 1.27336L13.0079 1.65747V1.65747L13.328 1.27336ZM19 6L19.3201 6.38411L19.781 6L19.3201 5.61589L19 6ZM13.328 10.7266L13.6481 11.1107L13.6481 11.1107L13.328 10.7266ZM1 6.5H13V5.5H1V6.5ZM13.5 6V1.42701H12.5V6H13.5ZM13.0079 1.65747L18.6799 6.38411L19.3201 5.61589L13.6481 0.889253L13.0079 1.65747ZM18.6799 5.61589L13.0079 10.3425L13.6481 11.1107L19.3201 6.38411L18.6799 5.61589ZM13.5 10.573V6H12.5V10.573H13.5ZM13.0079 10.3425C13.2033 10.1797 13.5 10.3186 13.5 10.573H12.5C12.5 11.1665 13.1922 11.4907 13.6481 11.1107L13.0079 10.3425ZM13.5 1.42701C13.5 1.68136 13.2033 1.82031 13.0079 1.65747L13.6481 0.889253C13.1922 0.509312 12.5 0.833522 12.5 1.42701H13.5Z"/>
                            </svg>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== Best-plan-section end  =============== -->

    <!-- =============== counter-section start  =============== -->

    <div class="counter-section pb-120">
        <div class="container">
            <div class="counter-wrapper">
                <div class="row g-2 d-flex justify-content-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10">
                        <div class="counter-single text-center d-flex flex-column hover-border1" >
                            <div class="counter-icon">
                                <svg width="58" height="58" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1411_6509)">
                                    <path d="M24.5952 27.0967C24.9237 26.5904 24.7084 24.9308 24.7084 24.9308C12.5069 20.7303 3.37304 15.4559 3.89073 13.3172C4.14222 12.2569 4.49679 11.7958 4.74261 11.7131C5.28636 11.5307 6.52226 12.181 8.03796 13.1779L10.5494 10.2235C9.36335 9.49168 6.42937 7.07992 3.54863 8.02016C2.37843 8.39965 0.823078 9.47242 0.112804 12.4075C-1.5377 19.2882 14.8677 25.4938 23.6674 28.5467L24.594 27.0956L24.5952 27.0967Z"/>
                                    <path d="M53.152 13.7648C52.7487 13.1984 52.325 12.6422 51.8832 12.1121C49.4083 9.12871 46.3059 6.7278 42.7972 5.08032C39.2884 3.43284 35.4595 2.57933 31.5832 2.58057H31.5198C31.4937 2.58057 31.4631 2.58623 31.4314 2.58623C27.5822 2.60781 23.7844 3.47175 20.3047 5.11739C16.825 6.76303 13.7477 9.15046 11.2889 12.1121C10.8471 12.6479 10.4245 13.1973 10.0269 13.7648C9.71766 14.1998 9.43333 14.6484 9.15579 15.097C9.7052 15.4437 10.3305 15.8163 11.0306 16.2072C11.2719 15.822 11.5109 15.438 11.7692 15.0642C13.5342 16.2266 15.4271 17.1822 17.4106 17.912C17.2973 18.3346 17.2044 18.7764 17.1025 19.2057C17.7459 19.4901 18.4199 19.7721 19.1098 20.0519C19.2231 19.566 19.3182 19.0743 19.4497 18.6065C22.7824 19.626 26.532 20.2411 30.5082 20.3363V23.0947L30.6407 23.1762L30.8299 24.309L31.1199 26.0445L32.673 26.4433V20.3363C33.4422 20.317 34.1943 20.2672 34.9454 20.2105L35.5118 18.6008L35.727 17.9823C34.7302 18.0774 33.7129 18.1465 32.6684 18.1715V4.8394C37.0683 5.51908 40.8621 10.0787 43.0144 16.5991C41.9722 16.9084 40.8677 17.1655 39.744 17.3819C40.5492 17.7822 41.2348 18.3874 41.7321 19.1366C42.3631 18.9792 43.0008 18.8274 43.6125 18.6382C44.4713 21.9484 44.909 25.3537 44.9153 28.7735H41.5565C41.5191 28.9944 41.4874 29.196 41.45 29.4294C42.7629 29.972 44.3285 30.6154 44.6683 30.7547C45.672 31.1705 46.423 31.7901 46.9215 32.5536C46.9668 32.0178 47.0166 31.4865 47.0348 30.9371H52.2457C52.1517 31.6168 52.0622 32.2886 51.9432 32.932C52.2774 32.761 52.5618 32.4336 52.7136 31.8083C52.7821 31.5233 52.8076 31.2297 52.7895 30.9371H55.7563C55.4129 35.2515 53.9099 39.393 51.4063 42.9234C49.6068 41.7415 47.676 40.7728 45.6527 40.037C45.7728 39.6077 45.8668 39.1659 45.9745 38.7241C45.2513 39.2802 44.3616 39.576 43.4494 39.5635C43.1048 39.5612 42.7608 39.5317 42.4208 39.4751L42.3449 39.4627C42.0866 39.4423 41.7264 39.4106 39.5299 38.6606C39.7882 38.314 40.0963 37.8529 40.4361 37.3228V36.2376C41.4557 36.591 42.3302 36.8753 42.533 36.8867C43.0994 36.9252 44.546 37.4236 44.9629 35.6938C45.3797 33.964 44.3002 33.3965 43.6941 33.1495C43.3543 33.0113 41.7627 32.3565 40.4361 31.8117V29.6151L39.6794 31.5024C39.0224 31.2305 38.5557 31.0357 38.5557 31.0357C38.5557 31.0357 40.1903 22.0094 39.7429 20.8664C39.2954 19.7234 37.9496 19.4651 37.9496 19.4651L34.3801 29.5664L30.5036 28.5627L28.8452 28.1345L28.2788 24.744L26.4742 23.584C26.4742 23.584 26.5807 26.3798 26.3088 27.8887C26.2739 28.1246 26.2107 28.3555 26.1208 28.5763C26.0902 28.6398 26.0313 28.7157 25.9871 28.7848C25.7445 29.1613 25.4725 29.5182 25.1738 29.8519C25.0174 30.0286 24.852 30.2053 24.6934 30.382C24.6765 30.4013 24.6561 30.4206 24.6379 30.4398C24.485 30.6041 24.3366 30.7615 24.1848 30.9077C23.692 31.4061 23.2944 31.7777 23.2944 31.7777L24.8804 32.9524L27.5107 30.9451L28.1055 30.484L29.0525 30.9451L31.4439 32.0937L32.6684 32.6805L32.9392 32.8131L28.963 42.7229C28.963 42.7229 30.2703 43.8908 31.2479 43.1341C32.2255 42.3774 36.4113 34.8011 36.4113 34.8011C36.4113 34.8011 37.1374 35.0719 38.0969 35.414L37.8703 35.9691C37.9972 35.9691 38.1229 35.9498 38.2498 35.9498V38.2222C38.1547 38.1849 38.0663 38.1599 37.9655 38.1214C37.8273 38.0965 37.6811 38.084 37.5418 38.0648C37.1125 38.8226 36.7216 39.4978 36.3739 40.0959C38.6217 40.331 40.844 40.7663 43.0144 41.3964C40.8553 47.9168 37.0626 52.4741 32.6628 53.1561V45.2876C32.0284 45.7334 31.2722 45.9735 30.4968 45.9752V53.172C26.0551 52.5625 22.216 48.0029 20.0376 41.4315C22.3943 40.7363 24.8128 40.2712 27.2593 40.0427L28.1565 37.7963C25.1989 38.0093 22.2738 38.5469 19.4338 39.3992C18.7157 36.6347 18.2949 33.8013 18.1786 30.9473H20.4125L20.979 30.4104C19.2118 29.8062 17.5412 29.1983 15.9674 28.5865C15.9674 28.65 15.9617 28.7134 15.9617 28.7769H7.33876C7.34967 27.4556 7.47169 26.1377 7.70352 24.8369C7.00798 24.4586 6.34415 24.0859 5.7143 23.7041C5.35441 25.4466 5.17073 27.2208 5.16602 29C5.16185 34.4592 6.85892 39.7841 10.0213 44.2341C10.4177 44.8005 10.8414 45.3578 11.2832 45.8891C16.1067 51.6665 23.3397 55.3708 31.4269 55.4138C31.4575 55.4138 31.4892 55.4195 31.522 55.4195H31.5855C35.4608 55.42 39.2887 54.5662 42.7964 52.9187C46.3042 51.2713 49.4056 48.8707 51.8798 45.888C52.3329 45.3567 52.7453 44.8016 53.1474 44.2329C56.3054 39.7803 58.0023 34.4566 58.0035 28.9977C58.0047 23.5388 56.3102 18.2144 53.1542 13.7603L53.152 13.7648ZM18.0234 15.8922C16.2753 15.2522 14.6036 14.4202 13.0391 13.4114C15.9011 10.0032 19.644 7.44638 23.8597 6.01979C21.4332 8.35564 19.4202 11.7813 18.0234 15.8922ZM30.5036 18.1715C26.7291 18.0842 23.1755 17.5088 20.0444 16.5674C22.2228 10.0028 26.0551 5.43752 30.5036 4.82693V18.1715ZM7.42032 30.9473H16.0036C16.1349 34.0368 16.6071 37.1023 17.4117 40.088C15.4281 40.8173 13.5348 41.7721 11.7692 42.9336C9.26931 39.4013 7.76707 35.2608 7.42032 30.9473ZM13.0436 44.5886C14.6079 43.5793 16.2796 42.7472 18.028 42.1078C19.4168 46.2165 21.4377 49.6444 23.8688 51.9802C19.654 50.5525 15.9114 47.9963 13.0481 44.5898L13.0436 44.5886ZM39.1141 52.0482C41.5825 49.701 43.6341 46.2358 45.0342 42.0693C46.8203 42.7129 48.5272 43.5582 50.1217 44.5886C47.2171 48.0504 43.4048 50.6337 39.113 52.0482H39.1141ZM39.1141 5.95068C43.4076 7.36559 47.2218 9.94916 50.1285 13.4114C48.7681 14.2832 47.3265 15.0211 45.8238 15.6147L45.6969 15.583L45.6652 15.6781C45.4568 15.7665 45.2495 15.856 45.0342 15.9308C43.6273 11.7711 41.5814 8.30467 39.1141 5.95068ZM47.0801 28.7735C47.0739 25.1212 46.5941 21.4851 45.6527 17.9562C47.6757 17.2199 49.6058 16.2501 51.404 15.0664C54.2428 19.077 55.7868 23.86 55.8288 28.7735H47.0801Z"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_1411_6509">
                                    <rect width="58" height="58" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="coundown d-flex flex-column">
                                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                    <h3 class="odometer" data-odometer-final="400">01</h3><i class="bi bi-plus-lg"></i>
                                </div>
                                <p>Awesome Tour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10">
                      <div class="counter-single text-center d-flex flex-column hover-border1" >
                        <div class="counter-icon">
                            <svg width="58" height="58" viewBox="0 0 58 58"  xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1411_6569)">
                                <path opacity="0.4" d="M14.2061 57.9999C19.6711 57.9999 24.1014 55.7778 24.1014 53.0368C24.1014 50.2958 19.6711 48.0737 14.2061 48.0737C8.74109 48.0737 4.31082 50.2958 4.31082 53.0368C4.31082 55.7778 8.74109 57.9999 14.2061 57.9999Z"/>
                                <path opacity="0.4" d="M46.6347 32.1141C50.9634 32.1141 54.4725 30.3278 54.4725 28.1242C54.4725 25.9206 50.9634 24.1343 46.6347 24.1343C42.306 24.1343 38.7968 25.9206 38.7968 28.1242C38.7968 30.3278 42.306 32.1141 46.6347 32.1141Z"/>
                                <path d="M36.85 27.6665C28.285 25.3732 27.6651 41.5385 40.1184 38.6297C61.2232 33.7005 62.6019 53.4524 42.7104 52.7253C37.4839 52.5341 29.4119 52.6507 26.2564 52.7253" stroke-width="2" stroke-linecap="round" stroke-dasharray="4 6"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4213 53.7182C12.5591 52.7634 2.40155 44.0015 0.313615 33.9476C-1.77433 23.8938 6.97242 17.3223 14.4213 17.3223C20.7417 17.3223 29.4883 22.7704 28.3034 33.4982C27.852 36.8683 26.2154 44.1698 14.4213 53.7182ZM18.8105 28.6108C18.8105 31.0831 16.7489 33.0873 14.2058 33.0873C11.6627 33.0873 9.60108 31.0831 9.60108 28.6108C9.60108 26.1385 11.6627 24.1343 14.2058 24.1343C16.7489 24.1343 18.8105 26.1385 18.8105 28.6108Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M46.9038 28.8054C45.4269 28.0496 37.3708 21.1151 35.7149 13.158C34.0589 5.20097 40.996 -5.78936e-06 46.9038 0C51.9165 4.91217e-06 58.8535 4.31191 57.9138 12.8024C57.5556 15.4696 56.2577 21.2484 46.9038 28.8054ZM49.9662 8.66112C49.9662 10.4347 48.5187 11.8725 46.7331 11.8725C44.9475 11.8725 43.5 10.4347 43.5 8.66112C43.5 6.8875 44.9475 5.44971 46.7331 5.44971C48.5187 5.44971 49.9662 6.8875 49.9662 8.66112Z"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1411_6569">
                                <rect width="58" height="58" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                          <div class="coundown d-flex flex-column">
                            <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                <h3 class="odometer" data-odometer-final="250">01</h3><i class="bi bi-plus-lg"></i>
                            </div>
                              <p>Stunning Places</p>
                          </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10">
                      <div class="counter-single text-center d-flex flex-column hover-border1" >
                        <div class="counter-icon">
                            <svg width="58" height="58" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.2644 38.4715C48.5751 34.4076 51.2707 28.6484 51.2707 22.2707C51.2707 17.1945 49.6071 12.4133 46.4598 8.44414C43.4069 4.59392 39.1133 1.82669 34.3702 0.652186C33.7636 0.502203 33.1488 0.87218 32.9984 1.47948C32.8481 2.08678 33.2184 2.70099 33.8258 2.85143C42.7631 5.06449 49.0051 13.0501 49.0051 22.2707C49.0051 33.3014 40.0309 42.2755 29.0001 42.2755C17.9695 42.2755 8.99522 33.3014 8.99522 22.2707C8.99522 13.0501 15.2372 5.06449 24.1746 2.85143C24.7819 2.70099 25.1522 2.08678 25.0019 1.47948C24.8515 0.87218 24.2371 0.501636 23.6299 0.652186C18.8868 1.82669 14.5934 4.59392 11.5405 8.44414C8.39318 12.4133 6.72961 17.1945 6.72961 22.2707C6.72961 28.6483 9.42514 34.4076 13.7357 38.4714L7.80498 49.814C7.51578 50.3671 7.7285 51.05 8.28066 51.341L8.32147 51.3625C8.57472 51.4961 8.86907 51.5286 9.14566 51.4538L17.3651 49.2286L20.2291 57.2483C20.3805 57.6721 20.7684 57.9661 21.2174 57.9975C21.2438 57.9993 21.27 58.0001 21.2962 58.0001C21.7156 58.0001 22.1034 57.7676 22.2998 57.3923L29.0001 44.5778L35.7006 57.3923C35.8968 57.7677 36.2848 58.0003 36.7041 58.0001C36.7303 58.0001 36.7566 57.9993 36.7829 57.9975C37.2319 57.9663 37.6198 57.6721 37.7713 57.2483L40.6352 49.2286L48.8546 51.454C49.1309 51.5289 49.4254 51.4963 49.6788 51.3627L49.7196 51.3412C50.2718 51.0501 50.4845 50.3673 50.1952 49.8141L44.2644 38.4715ZM21.4918 54.0477L19.1466 47.4805C18.9478 46.9239 18.3541 46.6134 17.7837 46.7681L10.993 48.6067L15.5063 39.975C18.6373 42.3671 22.4183 43.9485 26.5343 44.404L21.4918 54.0477ZM40.2165 46.7681C39.6461 46.6136 39.0525 46.9239 38.8537 47.4805L36.5084 54.0477L31.4658 44.404C35.5819 43.9485 39.3629 42.3671 42.4938 39.975L47.0072 48.6067L40.2165 46.7681Z"/>
                                <path d="M29 2.26562C29.6256 2.26562 30.1328 1.75844 30.1328 1.13281C30.1328 0.507177 29.6256 0 29 0C28.3744 0 27.8672 0.507177 27.8672 1.13281C27.8672 1.75844 28.3744 2.26562 29 2.26562Z"/>
                                <path d="M12.3937 22.2706C12.3937 31.4273 19.8433 38.877 29.0002 38.877C38.1571 38.877 45.6067 31.4274 45.6067 22.2706C45.6067 13.1137 38.1571 5.66406 29.0002 5.66406C19.8433 5.66406 12.3937 13.1137 12.3937 22.2706ZM43.341 22.2706C43.341 30.1781 36.9077 36.6113 29.0002 36.6113C21.0926 36.6113 14.6593 30.1781 14.6593 22.2706C14.6593 14.3629 21.0926 7.92969 29.0002 7.92969C36.9077 7.92969 43.341 14.3629 43.341 22.2706Z"/>
                                <path d="M27.9805 16.1747L25.6466 21.0041L20.4157 19.8176C20.0068 19.725 19.5804 19.8655 19.3069 20.1831C19.0334 20.5007 18.9575 20.9434 19.1097 21.3339L21.218 26.7407H21.0707C20.4451 26.7407 19.9379 27.2478 19.9379 27.8735C19.9379 28.4991 20.4451 29.0063 21.0707 29.0063H36.9301C37.5556 29.0063 38.0629 28.4991 38.0629 27.8735C38.0629 27.2478 37.5556 26.7407 36.9301 26.7407H36.7828L38.8911 21.3339C39.0434 20.9434 38.9677 20.5007 38.6941 20.1831C38.4207 19.8654 37.9942 19.725 37.5852 19.8175L32.3543 21.004L30.0204 16.1746C29.8313 15.7833 29.435 15.5347 29.0004 15.5347C28.5659 15.5348 28.1695 15.7834 27.9805 16.1747ZM30.7063 22.801C30.9358 23.2759 31.4627 23.5295 31.9769 23.4128L36.005 22.4992L34.3513 26.7408H23.6499L21.996 22.4992L26.0242 23.4128C26.5384 23.5292 27.0652 23.2759 27.2948 22.801L29.0004 19.271L30.7063 22.801Z"/>
                            </svg>
                        </div>
                          <div class="coundown d-flex flex-column">
                            <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                <h3 class="odometer" data-odometer-final="350">01</h3><i class="bi bi-plus-lg"></i>
                            </div>
                              <p>Satisfied Customer</p>
                          </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10">
                        <div class="counter-single text-center d-flex flex-column hover-border1">
                            <div class="counter-icon">
                                <svg width="58" height="58" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.618 4.9957C23.3586 5.55078 19.8582 8.91524 19.0313 13.2539C18.85 14.1715 18.884 16.1539 19.0879 17.1281C20.0508 21.818 24.1742 25.1484 29 25.1484C33.8258 25.1484 37.9492 21.818 38.9121 17.1281C39.116 16.1539 39.15 14.1715 38.9688 13.2539C38.5383 10.9996 37.5754 9.23242 35.8762 7.62383C34.3582 6.18516 32.3758 5.25625 30.2348 4.98438C29.1699 4.85977 28.7055 4.85977 27.618 4.9957ZM30.9484 8.72266C33.6672 9.56094 35.5816 12.1551 35.5816 14.9984C35.5703 16.8676 34.9473 18.4082 33.6332 19.7109C32.3984 20.957 30.7445 21.6367 29 21.6367C27.2555 21.6367 25.6016 20.957 24.3668 19.7109C23.0641 18.4082 22.4297 16.8676 22.4184 15.0098C22.4184 11.8266 24.7406 9.0625 27.9012 8.49609C28.7055 8.36016 30.0988 8.46211 30.9484 8.72266Z"/>
                                    <path d="M9.78752 14.4434C4.99572 15.4856 2.36759 20.7305 4.4633 25.0919C6.04923 28.4223 9.66291 30.1216 13.2086 29.2266C17.8871 28.0372 20.2774 22.8602 18.1363 18.5216C16.607 15.429 13.1067 13.7184 9.78752 14.4434ZM12.9707 18.1704C14.8172 19.0087 15.8367 21.195 15.2363 23.0188C14.0242 26.6665 9.24377 26.9723 7.62384 23.5059C7.35197 22.9282 7.30666 22.679 7.30666 21.8634C7.30666 21.0024 7.35197 20.8098 7.68048 20.1415C8.05431 19.3712 8.76798 18.6235 9.459 18.261C10.5012 17.7173 11.9059 17.6833 12.9707 18.1704Z"/>
                                    <path d="M45.0293 14.4547C40.2262 15.5309 37.6887 20.8664 39.875 25.2844C41.1551 27.8672 43.7492 29.4531 46.6719 29.4531C50.8746 29.4531 54.2504 26.0887 54.2617 21.8859C54.273 18.6008 52.0527 15.5988 48.8808 14.6133C47.8273 14.2848 46.1055 14.2168 45.0293 14.4547ZM47.6347 17.9437C48.8582 18.2609 49.7644 19.0086 50.3195 20.1414C50.648 20.8098 50.6933 21.0023 50.6933 21.8633C50.6933 22.6789 50.648 22.9281 50.3762 23.5059C49.6851 24.9898 48.2465 25.9414 46.6719 25.9414C44.3496 25.9414 42.4805 23.959 42.6164 21.6594C42.7637 19.1219 45.2332 17.298 47.6347 17.9437Z"/>
                                    <path d="M23.166 26.0093C22.2824 26.1226 21.3988 26.3491 20.7191 26.621C19.1558 27.2554 17.5586 28.5921 16.7316 29.9968C16.4031 30.5292 16.3351 30.5858 16.0859 30.5179C15.5762 30.3706 7.70311 30.3366 6.91014 30.4726C3.97616 30.9823 1.35936 33.2706 0.362486 36.2159L0.0566266 37.0995L0.0226422 42.9788C-0.0113422 48.6769 -1.40322e-05 48.8694 0.226548 49.5604C0.838267 51.3956 2.44686 52.7437 4.32733 53.0155C5.27889 53.1628 52.7211 53.1628 53.6726 53.0155C55.5531 52.7437 57.1617 51.3956 57.7734 49.5604C58 48.8694 58.0113 48.6769 57.9773 42.9788L57.9433 37.0995L57.6375 36.2159C56.6406 33.2706 54.0238 30.9823 51.0898 30.4726C50.2969 30.3366 42.4238 30.3706 41.914 30.5179C41.6648 30.5858 41.5969 30.5292 41.2683 29.9968C40.4527 28.6147 38.8441 27.2554 37.3375 26.6437C35.8082 26.0206 35.8308 26.0206 29.4531 25.9979C26.1793 25.9753 23.3586 25.9866 23.166 26.0093ZM34.7773 29.5663C36.6125 29.8608 38.1871 31.2089 38.8328 33.0554C38.9914 33.5312 39.014 34.5167 39.048 41.5968L39.0933 49.6171H29H18.9066L18.9519 41.5968C18.9859 34.5167 19.0086 33.5312 19.1672 33.0554C19.8015 31.2542 21.3875 29.8608 23.1094 29.5776C23.993 29.4417 33.8711 29.4304 34.7773 29.5663ZM15.157 33.939L15.4062 34.0069V41.812V49.6284L10.0027 49.5944L4.58788 49.5604L4.21405 49.2999C3.43241 48.7448 3.45506 48.8808 3.45506 43.2167C3.45506 38.153 3.45506 38.119 3.72694 37.3487C4.2367 35.8534 5.51678 34.5733 6.96678 34.1089C7.5785 33.905 7.99764 33.8823 11.2715 33.8823C13.2652 33.871 15.0098 33.905 15.157 33.939ZM50.9879 34.0976C52.4719 34.562 53.7519 35.8308 54.273 37.3487C54.5449 38.119 54.5449 38.153 54.5449 43.2167C54.5449 48.8808 54.5676 48.7448 53.7859 49.2999L53.4121 49.5604L48.0086 49.5944L42.5937 49.6284V41.812C42.5937 34.4714 42.6051 33.9956 42.7976 33.9503C42.8996 33.9163 44.6328 33.8937 46.6265 33.8823C49.9797 33.871 50.3308 33.8937 50.9879 34.0976Z"/>
                                </svg>
                            </div>
                          <div class="coundown d-flex flex-column">
                            <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                <h3 class="odometer" data-odometer-final="500">01</h3><i class="bi bi-plus-lg"></i>
                            </div>
                              <p>Travel Guides</p>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- =============== counter-section end  =============== -->

    <!-- =============== testimonial-section start  =============== -->

    <div class="testimonial-section overflow-hidden">
        <div class="container-fluid px-0">
            <div class="testimonial-wrapper">
                <div class="testimonial-area">
                    <img src="assets/images/icons/testi-quote.svg" class="testi-quote" alt="image">
                    <div class="testimonial-wrap" >
                        <div class="swiper testimonial1-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-single1">
                                        <div class="testimonial-content">
                                            <ul class="star-list">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-half"></i></li>
                                            </ul>
                                            <p>“This place is great! I had a very pleasant stay here. Great stuff and beautiful suites with a fabulous view etiam rhoncus maecenas”!</p>
                                        </div>
                                        <div class="testi-author1">
                                            <div class="image">
                                                <img src="assets/images/bg/testi11.png" alt="image">
                                            </div>
                                            <div class="author-text">
                                                <h5>Johan Martin Sr</h5>
                                                <p>South America.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-single1">
                                        <div class="testimonial-content">
                                            <ul class="star-list">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-half"></i></li>
                                            </ul>
                                            <p>“combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated therefore”!</p>
                                        </div>
                                        <div class="testi-author1">
                                            <div class="image">
                                                <img src="assets/images/bg/testi12.png" alt="image">
                                            </div>
                                            <div class="author-text">
                                                <h5>Lora Maria</h5>
                                                <p>South America.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-single1">
                                        <div class="testimonial-content">
                                            <ul class="star-list">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-half"></i></li>
                                            </ul>
                                            <p>“But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.”!</p>
                                        </div>
                                        <div class="testi-author1">
                                            <div class="image">
                                                <img src="assets/images/bg/testi11.png" alt="image">
                                            </div>
                                            <div class="author-text">
                                                <h5>Sara Johnson</h5>
                                                <p>South America.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial1-pagination d-flex align-items-center justify-content-sm-end justify-content-center pt-sm-0 pt-4"></div>
                        </div>
                    </div>
                </div>
                <div class="newsletter-area">
                    <div class="banner-form-box" >
                        <h3>Join Newsletter</h3>
                        <p>Etiam rhoncus. Maecenas temp us, tellus eget condimentum rho</p>
                        <form class="newsletter-form">
                            <div class="form-inner">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="form-inner">
                                <input type="email" placeholder="Your E-mail">
                            </div>
                            <button class="eg-btn btn--primary btn--lg w-100">Join Us</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== testimonial-section end  =============== -->

    <!-- ===============  Blog-section   start =============== -->

    <div class="blog-section pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12 text-center">
                    <div class="section-title1" >
                        <span>Blog & News</span>
                        <h2>Get to Know Travel Experiences</h2>
                        <img src="assets/images/icons/section-title-vector.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10" >
                    <div class="blog-single1">
                        <div class="image">
                            <img src="assets/images/blog/blog11.png" class="img-fluid" alt="image">
                            <span class="blog-date">February 8, 2022</span>
                        </div>
                        <div class="content">
                            <h4><a href="blog-details.php">Benefit from a 15% discount mak your reservations.</a></h4>
                            <a href="blog-details.php" class="read-more-btn">Continue Reading<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10" >
                    <div class="blog-single1">
                        <div class="image">
                            <img src="assets/images/blog/blog12.png" class="img-fluid" alt="image">
                            <span class="blog-date">August 08, 2022</span>
                        </div>
                        <div class="content">
                            <h4><a href="blog-details.php">Safety measures for safe trekkin in waterfall minimum.</a></h4>
                            <a href="blog-details.php" class="read-more-btn">Continue Reading<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10" >
                    <div class="blog-single1">
                        <div class="image">
                            <img src="assets/images/blog/blog13.png" class="img-fluid" alt="image">
                            <span class="blog-date">October 8, 2022</span>
                        </div>
                        <div class="content">
                            <h4><a href="blog-details.php">Day out on the Ile de Re. Getting hotter and hotter.</a></h4>
                            <a href="blog-details.php" class="read-more-btn">Continue Reading<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== Blog-section end  =============== -->

    <!-- =============== partner-section start  =============== -->

    <div class="partner-section pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12 text-center" >
                    <div class="section-title1">
                        <span>Kendi Travel Partners</span>
                        <h2>Our Most Trusted Travelers</h2>
                        <img src="assets/images/icons/section-title-vector.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" >
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