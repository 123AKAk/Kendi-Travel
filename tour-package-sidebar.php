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
                        <span>Choose Your Tous</span>
                        <h2>get the best plans for Your’s</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  inner-banner-section end=============== -->

  
    <!-- =============== info-section start  =============== -->

    <div class="destination-details-section pt-120 pb-120">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 d-lg-block d-none">
                    <div class="tour-package-sidebar">
                        <div class="sidebar-search mb-35">
                            <form>
                                <div class="form-inner">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class='bx bx-search'></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="tour-package-widget">
                            <h4 class="package-widget-title">Choose Continent</h4>
                            <div class="select-widget">
                                <select class="defult-select-drowpown" data-placeholder="" id="activity-dropdown">
                                    <option value="">Asia</option>
                                    <option value="1">Europe</option>
                                    <option value="2">America</option>
                                    <option value="3">Australia</option>
                                    <option value="4">Africa</option>
                                    <option value="4">Oceania</option>
                                    <option value="4">Antarctica</option>
                                </select>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="tour-package-widget">
                            <h4 class="package-widget-title">Price Range (USD)</h4>
                            <div class="range-widget">
                                <div id="slider-range" class="price-filter-range"></div>
                                <div class="mt-5 d-flex justify-content-between gap-4">
                                    <input type="number" min=100 max="9900" oninput="validity.valid||(value='100');" id="min_price" class="price-range-field" />
                                    <input type="number" min=100 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
                                </div>
                            </div>
                        </div>
                        <div class="tour-package-widget">
                            <div class="check-box-item">
                                <h5>Tour Type</h5>
                                <div class="checkbox-container">
                                    <label class="container">Family
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Honeymoon
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Adventre
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Cruise
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Beach
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="check-box-item">
                                <h5>Tour Duration</h5>
                                <div class="checkbox-container">
                                    <label class="container">Upto 2 Nights
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">3 To 6 Nights
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">6 To 9 Nights
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">9 To 12 Nights
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Above 12 Nights
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="check-box-item mb-0">
                                <h5>Filter By Review</h5>
                                <div class="checkbox-container">
                                    <label class="container">
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><span class="ms-1">(9005)</span>
                                    </label>
                                    <label class="container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><span class="ms-1">(406)</span>
                                    </label>
                                    <label class="container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><span class="ms-1">(205)</span>
                                    </label>
                                    <label class="container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><span class="ms-1">(130)</span>
                                    </label>
                                    <label class="container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><span class="ms-1">(25)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                       
                
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tour-package-sidebar-mobile">
                        <div class="package-sidebar-close">
                            <i class="bi bi-x-circle"></i>
                        </div>
                        <div class="sidebar-search mb-35">
                            <form>
                                <div class="form-inner">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class='bx bx-search'></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="tour-package-widget">
                            <h4 class="package-widget-title">Choose Continent</h4>
                            <div class="select-widget">
                                <select class="defult-select-drowpown" data-placeholder="" id="activity-dropdown2">
                                    <option value="">Asia</option>
                                    <option value="1">Europe</option>
                                    <option value="2">America</option>
                                    <option value="3">Australia</option>
                                    <option value="4">Africa</option>
                                    <option value="4">Oceania</option>
                                    <option value="4">Antarctica</option>
                                </select>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="tour-package-widget">
                            <h4 class="package-widget-title">Price Range (USD)</h4>
                            <div class="range-widget">
                                <div id="slider-range-mobile" class="price-filter-range"></div>
                                <div class="mt-5 d-flex justify-content-between gap-4">
                                    <input type="number" min=100 max="9900" oninput="validity.valid||(value='100');" id="min_price-mobile" class="price-range-field" />
                                    <input type="number" min=100 max="10000" oninput="validity.valid||(value='10000');" id="max_price-mobile" class="price-range-field" />
                                </div>
                            </div>
                        </div>
                        <div class="tour-package-widget">
                            <div class="check-box-item">
                                <h5>Tour Type</h5>
                                <div class="checkbox-container">
                                    <label class="container">Family
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Honeymoon
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Adventre
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Cruise
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Beach
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="check-box-item">
                                <h5>Tour Duration</h5>
                                <div class="checkbox-container">
                                    <label class="container">Upto 2 Nights
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">3 To 6 Nights
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">6 To 9 Nights
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">9 To 12 Nights
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Above 12 Nights
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="check-box-item mb-0">
                                <h5>Filter By Review</h5>
                                <div class="checkbox-container">
                                    <label class="container">
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><span class="ms-1">(99905)</span>
                                    </label>
                                    <label class="container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><span class="ms-1">(40006)</span>
                                    </label>
                                    <label class="container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><span class="ms-1">(2005)</span>
                                    </label>
                                    <label class="container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><span class="ms-1">(130)</span>
                                    </label>
                                    <label class="container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><span class="ms-1">(25)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-lg-none d-flex">
                        <div class="col-12">
                            <div class="package-filter-area text-end">
                                <h4>Filter Package</h4>
                                <div class="filter-button">
                                    <img src="assets/images/icons/filter-icon.svg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                         <div class="col-lg-12 col-md-6">
                            <div class="tour-package-standard">
                                <div class="tour-standard-image">
                                    <span class="favourite">
                                        <i class="bi bi-suit-heart-fill"></i>
                                    </span>
                                    <span class="discount-bagde">15%</span>
                                    <img src="assets/images/bg/tour-standard1.png" class="img-fluid" alt="image">
                                </div>
                                <div class="tour-standard-content">
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
                                    <h4><a href="tour-package-details.php">Aegean Adventure Cruise</a></h4>
                                    <div class="price">
                                        <span>From $250</span><del>/S480</del>
                                    </div>
                                    <div class="list-area">
                                        <h5>Free Package Facility:</h5>
                                        <ul class="plan-list1">
                                            <li>Free Best Tour Guided</li>
                                            <li>No Booking Charge</li>
                                            <li>Best Rate Gurantee</li>
                                        </ul>
                                    </div>
                                    <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                                </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-6">
                            <div class="tour-package-standard">
                                <div class="tour-standard-image">
                                    <span class="favourite">
                                        <i class="bi bi-suit-heart-fill"></i>
                                    </span>
                                    <span class="discount-bagde">15%</span>
                                    <img src="assets/images/bg/tour-standard2.png" class="img-fluid" alt="image">
                                </div>
                                <div class="tour-standard-content">
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
                                    <h4><a href="tour-package-details.php">Tours in Ethiopia!</a></h4>
                                    <div class="price">
                                        <span>From $250</span><del>/S480</del>
                                    </div>
                                    <div class="list-area">
                                        <h5>Free Package Facility:</h5>
                                        <ul class="plan-list1">
                                            <li>Free Best Tour Guided</li>
                                            <li>No Booking Charge</li>
                                            <li>Best Rate Gurantee</li>
                                        </ul>
                                    </div>
                                    <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                                </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-6">
                            <div class="tour-package-standard">
                                <div class="tour-standard-image">
                                    <span class="favourite">
                                        <i class="bi bi-suit-heart-fill"></i>
                                    </span>
                                    <span class="discount-bagde">15%</span>
                                    <img src="assets/images/bg/tour-standard3.png" class="img-fluid" alt="image">
                                </div>
                                <div class="tour-standard-content">
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
                                    <h4><a href="tour-package-details.php">Aegean Adventure Beach</a></h4>
                                    <div class="price">
                                        <span>From $250</span><del>/S480</del>
                                    </div>
                                    <div class="list-area">
                                        <h5>Free Package Facility:</h5>
                                        <ul class="plan-list1">
                                            <li>Free Best Tour Guided</li>
                                            <li>No Booking Charge</li>
                                            <li>Best Rate Gurantee</li>
                                        </ul>
                                    </div>
                                    <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                                </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-6">
                            <div class="tour-package-standard">
                                <div class="tour-standard-image">
                                    <span class="favourite">
                                        <i class="bi bi-suit-heart-fill"></i>
                                    </span>
                                    <span class="discount-bagde">15%</span>
                                    <img src="assets/images/bg/tour-standard4.png" class="img-fluid" alt="image">
                                </div>
                                <div class="tour-standard-content">
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
                                    <h4><a href="tour-package-details.php">South America Tours</a></h4>
                                    <div class="price">
                                        <span>From $250</span><del>/S480</del>
                                    </div>
                                    <div class="list-area">
                                        <h5>Free Package Facility:</h5>
                                        <ul class="plan-list1">
                                            <li>Free Best Tour Guided</li>
                                            <li>No Booking Charge</li>
                                            <li>Best Rate Gurantee</li>
                                        </ul>
                                    </div>
                                    <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                                </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-6">
                            <div class="tour-package-standard">
                                <div class="tour-standard-image">
                                    <span class="favourite">
                                        <i class="bi bi-suit-heart-fill"></i>
                                    </span>
                                    <span class="discount-bagde">15%</span>
                                    <img src="assets/images/bg/tour-standard5.png" class="img-fluid" alt="image">
                                </div>
                                <div class="tour-standard-content">
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
                                    <h4><a href="tour-package-details.php">South Africa Tour</a></h4>
                                    <div class="price">
                                        <span>From $250</span><del>/S480</del>
                                    </div>
                                    <div class="list-area">
                                        <h5>Free Package Facility:</h5>
                                        <ul class="plan-list1">
                                            <li>Free Best Tour Guided</li>
                                            <li>No Booking Charge</li>
                                            <li>Best Rate Gurantee</li>
                                        </ul>
                                    </div>
                                    <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                                </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-6">
                            <div class="tour-package-standard">
                                <div class="tour-standard-image">
                                    <span class="favourite">
                                        <i class="bi bi-suit-heart-fill"></i>
                                    </span>
                                    <span class="discount-bagde">15%</span>
                                    <img src="assets/images/bg/tour-standard6.png" class="img-fluid" alt="image">
                                </div>
                                <div class="tour-standard-content">
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
                                    <h4><a href="tour-package-details.php">Amazon Forest Tour</a></h4>
                                    <div class="price">
                                        <span>From $250</span><del>/S480</del>
                                    </div>
                                    <div class="list-area">
                                        <h5>Free Package Facility:</h5>
                                        <ul class="plan-list1">
                                            <li>Free Best Tour Guided</li>
                                            <li>No Booking Charge</li>
                                            <li>Best Rate Gurantee</li>
                                        </ul>
                                    </div>
                                    <a href="tour-package-details.php" class="eg-btn btn--primary-outline btn--md">Explorer Now</a>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <nav class="pagination-wrap pt-50">
                                <ul class="pagination d-flex justify-content-center gap-md-3 gap-2">
                                  <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1"><i class="bi bi-arrow-left"></i> PREV</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">01</a></li>
                                  <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">02</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">03</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">NEXT <i class="bi bi-arrow-right"></i></a>
                                  </li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== info-section end  =============== -->

    <!-- =============== instargam-feed-section start =============== -->

    <?php
        require "includes/instagram.php";
    ?>

    <!-- =============== instargam-feed-section end =============== -->

<?php
  require "includes/footer.php";
  require "includes/scripts.php";
?>