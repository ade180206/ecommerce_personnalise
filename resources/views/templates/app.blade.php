<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEIBOO - E-commerce HTML Template</title>
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!--================= RT Icons CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rt-icons.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!--================= Magnific popup Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
    <!--================= Mobile Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/metisMenu.css">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rtsmenu.css">
    <!--================= Preloader CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/preloader.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/variables/variable1.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    <!--================= Preloader Section Start Here =================-->
    <div id="weiboo-load">
        <div class="preloader-new">
            <svg class="cart_preloader" role="img" aria-label="Shopping cart_preloader line animation"
                viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
                    <g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
                        <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
                        <circle cx="43" cy="111" r="13" />
                        <circle cx="102" cy="111" r="13" />
                    </g>
                    <g class="cart__lines" stroke="currentColor">
                        <polyline class="cart__top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80"
                            stroke-dasharray="338 338" stroke-dashoffset="-338" />
                        <g class="cart__wheel1" transform="rotate(-90,43,111)">
                            <circle class="cart__wheel-stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68"
                                stroke-dashoffset="81.68" />
                        </g>
                        <g class="cart__wheel2" transform="rotate(90,102,111)">
                            <circle class="cart__wheel-stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68"
                                stroke-dashoffset="81.68" />
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <!--================= Preloader End Here =================-->

    <div class="anywere anywere-home"></div>
<!--================= Header Section Start Here =================-->
    @include('pages.header')
        <!--================= Banner Section Start Here =================-->
        <div class="banner banner-1 bg-image">
            <div class="container">
                <div class="banner-inner">
                    <div class="row">
                        <div class="col-xl-2 col-md-4 col-sm-12 gutter-1">
                            <div class="catagory-sidebar">
                                <div class="widget-bg">
                                    <h2 class="widget-title">All Categories <i class="rt-angle-down"></i></h2>
                                    <nav>
                                        <ul>
                                            <li><a href="shop.html">Activewear <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Bikinis <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Dresses <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Jumpsuits <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Smart Dress <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Sneakers <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Sweetshirts <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Trousers <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Furniture <i class="rt rt-arrow-right-long"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-md-8 col-sm-12 gutter-2">
                            <div class="swiper bannerSlide2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="banner-single bg-image bg-image-3-1">
                                            <div class="container">
                                                <div class="single-inner">
                                                    <div class="content-box">
                                                        <p class="slider-subtitle"><img
                                                                src="assets/images/banner/wvbo-icon.png" alt=""> Spring
                                                            summer 22 women’s collection </p>
                                                        <h2 class="slider-title"> HOT COLLECTION <br> FOR WOMEN</h2>
                                                        <div class="slider-description">
                                                            <p>Easy & safe payment with PayPal. sequines & embroidered
                                                                for all</p>
                                                        </div>
                                                        <a href="shop.html" class="slider-btn2">View Collections</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-single bg-image bg-image-3-3">
                                            <div class="container">
                                                <div class="single-inner">
                                                    <div class="content-box">
                                                        <p class="slider-subtitle"><img
                                                                src="assets/images/banner/wvbo-icon.png" alt=""> Spring
                                                            summer 22 women’s collection </p>
                                                        <h2 class="slider-title"> NEW COLLECTION <br> FOR WOMEN</h2>
                                                        <div class="slider-description">
                                                            <p>Easy & safe payment with PayPal. sequines & embroidered
                                                                for all</p>
                                                        </div>
                                                        <a href="shop.html" class="slider-btn2">View Collections</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-single bg-image bg-image-3-4">
                                            <div class="container">
                                                <div class="single-inner">
                                                    <div class="content-box">
                                                        <p class="slider-subtitle"><img
                                                                src="assets/images/banner/wvbo-icon.png" alt=""> Spring
                                                            summer 22 women’s collection </p>
                                                        <h2 class="slider-title"> WINTER DRESS <br> FOR WOMEN</h2>
                                                        <div class="slider-description">
                                                            <p>Easy & safe payment with PayPal. sequines & embroidered
                                                                for all</p>
                                                        </div>
                                                        <a href="shop.html" class="slider-btn2">View Collections</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-navigation">
                                    <div class="swiper-button-prev slider-btn prev"><i
                                            class="rt rt-arrow-left-long"></i></div>
                                    <div class="swiper-button-next slider-btn next"><i
                                            class="rt rt-arrow-right-long"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Banner Section End Here =================-->
    </header>
    <!--================= Header Section End Here =================-->

    <!--================= Offer Section Start Here =================-->
    <div class="rts-offer-section">
        <div class="container">
            <div class="rts-offer-inner">
                <p class="description">Super discount for your 100$ purchase. Use this code <a href="shop.html">OFFER100</a>
                </p>
            </div>
        </div>
    </div>
    <!--================= Offer Section End Here =================-->

    <!--================= New Collection Section Start Here =================-->
    <div class="rts-new-collection-section section-gap">
        <div class="container">
            <div class="recent-products-header section-header">
            </div>
            <div class="swiper rts-cmmnSlider-over" data-swiper="pagination">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="category.html"><img src="assets/images/catagory/item-1.png" alt="collection-image">
                            </a>
                            <p class="item-quantity">20 <span>items</span></p>
                            <a href="category.html" class="item-catagory-box">
                                <h3 class="title">FOR WOMEN'S</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="category.html"><img src="assets/images/catagory/item-2.png" alt="collection-image">
                            </a>
                            <p class="item-quantity">33 <span>items</span></p>
                            <a href="category.html" class="item-catagory-box">
                                <h3 class="title">FOR MAN'S</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="category.html"><img src="assets/images/catagory/item-3.png" alt="collection-image">
                            </a>
                            <p class="item-quantity">25 <span>items</span></p>
                            <a href="category.html" class="item-catagory-box">
                                <h3 class="title">FOR KIDS</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="category.html"><img src="assets/images/catagory/item-4.png" alt="collection-image">
                            </a>
                            <p class="item-quantity">33 <span>items</span></p>
                            <a href="category.html" class="item-catagory-box">
                                <h3 class="title">ACCESORIES</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= New Collection Section End Here =================-->

    <!--================= Hand Picked Section Start Here =================-->
    <div class="rts-hand-picked-products-section">
        <div class="container">
            <div class="section-header section-header3 text-center">
                <div class="wrapper">
                    <div class="sub-content">
                        <img class="line-1" src="assets/images/banner/wvbo-icon.png" alt="">
                        <span class="sub-text">Featured</span>
                        <img class="line-2" src="assets/images/banner/wvbo-icon.png" alt="">
                    </div>
                    <h2 class="title">HAND-PICKED PRODUCT</h2>
                </div>
            </div>
            <div class="slider-div">
                <div class="swiper rts-sixSlide-over">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="assets/images/hand-picked/slider-img8.webp" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="assets/images/hand-picked/slider-img8_1.webp" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Underarm Smoothing Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="assets/images/hand-picked/slider-img11.webp" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="assets/images/hand-picked/slider-img11_1.webp" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Bali Underwire Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="assets/images/hand-picked/slider-img1.jpg" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="assets/images/hand-picked/slider-img1-1.jpg" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Bali Underwire Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="assets/images/hand-picked/slider-img13.webp" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="assets/images/hand-picked/slider-img13-1.webp" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Bali Underwire Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="assets/images/hand-picked/slider-img7.webp" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="assets/images/hand-picked/slider-img7_1.webp" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Maidenform Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                                <div class="product-features">
                                    <div class="discount-tag product-tag">-38%</div>
                                    <div class="new-tag product-tag">HOT</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="assets/images/hand-picked/slider-img9.webp" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="assets/images/hand-picked/slider-img9_1.webp" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Champion Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Hand Picked Section End Here =================-->


    <!--================= Deal Section Start Here =================-->
    <div class="rts-deal-section1">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"></div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="single-inner">
                            <div class="content-box">
                                <div class="sub-content">
                                    <img class="line-1" src="assets/images/banner/wvbo-icon.png" alt="">
                                    <span class="sub-text">Deal Of The Week</span>
                                </div>
                                <h2 class="slider-title">Roland Grand White <br> short T-shirt </h2>
                                <div class="slider-description">
                                    <p>Our intent and our actions have always been informed by progress. We
                                        look at an impact report as a way to measure.</p>
                                </div>
                                <div class="countdown" id="countdown">
                                    <ul>
                                        <li><span id="days"></span>D</li>
                                        <li><span id="hours"></span>H</li>
                                        <li><span id="minutes"></span>M</li>
                                        <li><span id="seconds"></span>S</li>
                                    </ul>
                                </div>
                                <div class="content-bottom">
                                    <div class="img-box"><img src="assets/images/hand-picked/deal-icon.png" alt="">
                                    </div>
                                    <p class="content">Limited time offer. The deal will expires <br>
                                        on November 12, 2022 HURRY UP!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Deal Section End Here =================-->


    <!--================= Featured Product Section Start Here =================-->
    <div class="rts-featured-product-section1">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="assets/images/banner/wvbo-icon.png" alt="">
                            <span class="sub-text">Featured</span>
                            <img class="line-2" src="assets/images/banner/wvbo-icon.png" alt="">
                        </div>
                        <h2 class="title">FEATURED PRODUCT</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="product-details.html" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="assets/images/hand-picked/slider-img13-1.webp" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="assets/images/hand-picked/slider-img13.webp" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <div class="star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <a href="product-details.html" class="product-name">Girl's Sport Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="product-details.html" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="assets/images/hand-picked/slider-img14.webp" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="assets/images/hand-picked/slider-img14-1.webp" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <div class="star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <a href="product-details.html" class="product-name">Girl's Sport Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item2">
                            <a href="product-details.html" class="product-image image-slider-variations">
                                <div class="swiper productSlide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="assets/images/hand-picked/slider-img12-1.webp"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="assets/images/hand-picked/slider-img11_1.webp"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-buttons">
                                    <div class="button-prev slider-btn"><i class="rt-arrow-left-long"></i></div>
                                    <div class="button-next slider-btn"><i class="rt-arrow-right-long"></i></div>
                                </div>
                            </a>
                            <div class="bottom-content">
                                <div class="star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <a href="product-details.html" class="product-name">Maidenform Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="product-details.html" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="assets/images/hand-picked/slider-img12.webp" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="assets/images/hand-picked/slider-img12-3.webp" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <div class="star-rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <a href="product-details.html" class="product-name">Hanes Women's Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="discount-tag product-tag">-38%</div>
                                <div class="new-tag product-tag">HOT</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured Product Section End Here =================-->


    <!--================= Posters Section Start Here =================-->
    <div class="rts-posters-section1">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                    <a href="product-details.html" class="product-box product-box-medium product-box-medium5">
                        <div class="contents">
                            <span class="pretitle">50% Offer</span>
                            <h1 class="product-title">Last call for up <br> to 30% off</h1>
                            <div class="view-collections go-btn">VIEW COLLECTIONS <i class="rt-arrow-right-long"></i>
                            </div>
                        </div>
                        <div class="product-thumb"><img src="assets/images/featured/pot.png" alt="product-thumb">
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12 col-12 last-child">
                    <a href="product-details.html" class="product-box product-box-medium mid">
                        <div class="contents">
                            <span class="pretitle">-45% Offer</span>
                            <h1 class="product-title">SUMMER COLLECTION</h1>
                            <p>Don't miss the last opportunity</p>
                        </div>
                        <div class="product-thumb product-thumb1"><img src="assets/images/products/dress.png"
                                alt="product-thumb"></div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                    <a href="product-details.html" class="product-box product-box-medium product-box-medium3">
                        <div class="contents">
                            <span class="pretitle">SUMMER DRESS</span>
                            <h1 class="product-title">BEST COLLECTION</h1>
                            <div class="view-collections go-btn">Shop Now <i class="rt-arrow-right-long"></i></div>
                        </div>
                        <div class="product-thumb"><img src="assets/images/featured/3rd-image.png"
                                alt="product-thumb"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--================= Posters Section End Here =================-->


    <!--================= Brand Section Start Here =================-->
    <div class="rts-brands-section1 brand-bg3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="slider-div">
                        <div class="swiper rts-brandSlide1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="assets/images/brands/client-01.png"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="assets/images/brands/client-02.png"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="assets/images/brands/client-03.png"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="assets/images/brands/client-04.png"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="assets/images/brands/client-05.png"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="assets/images/brands/client-06.png"
                                            alt="Brand Logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Brand Section End Here =================-->


    <!--================= Featured Product Section Start Here =================-->
    <div class="rts-featured-product-section3">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="assets/images/banner/wvbo-icon.png" alt="">
                            <span class="sub-text">Featured</span>
                            <img class="line-2" src="assets/images/banner/wvbo-icon.png" alt="">
                        </div>
                        <h2 class="title">FEATURED PRODUCT</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-1">
                            <div class="image-part">
                                <a href="#" class="image"><img src="assets/images/featured/img-1.jpg" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">Once that’s determined with a good, you need to come up with a name</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="assets/images/featured/author.png" alt="Author Image"></div>
                                    <div class="info">
                                        <p class="author-name">REACTHEMES</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-2">
                            <div class="image-part">
                                <a href="#" class="image"><img src="assets/images/featured/img-2.jpg" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">Once determined, you need to come up with a name a legal structure</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="assets/images/featured/author.png" alt="Author Image"></div>
                                    <div class="info">
                                        <p class="author-name">REACTHEMES</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-3">
                            <div class="image-part">
                                <a href="#" class="image"><img src="assets/images/featured/img-3.jpg" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">At the limit, statically generated, edge delivered a food</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="assets/images/featured/author.png" alt="Author Image"></div>
                                    <div class="info">
                                        <p class="author-name">REACTHEMES</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured Product Section End Here =================-->

    <!--================= Newsletter Popup Start Here =================-->

@include('pages.popups')
    <!--================= Product-details Section End Here =================-->
    
<!--================= Footer Start Here =================-->

    @include('pages.header')

    <!--================= Footer End Here =================-->
    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn scroll-top-btn1"><i class="fas fa-angle-up arrow-up"></i><i
            class="fas fa-circle-notch"></i></div>
    <!--================= Scroll to Top End =================-->

    <!--================= Jquery latest version =================-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <!--================= Bootstrap latest version =================-->
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <!--================= Wow.js =================-->
    <script src="assets/js/vendors/wow.min.js"></script>
    <!--================= Swiper Slider =================-->
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <!--================= Nice Select =================-->
    <script src="assets/js/vendors/jquery.nice-select.js"></script>
    <!--================= Zoom Plugin =================-->
    <script src="assets/js/vendors/zoom.js"></script>
    <!--================= metisMenu Plugin =================-->
    <script src="assets/js/vendors/metisMenu.min.js"></script>
    <!--================= Main Menu Plugin =================-->
    <script src="assets/js/vendors/rtsmenu.js"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="assets/js/vendors/isotope.pkgd.min.js"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <!--================= Main Script =================-->
    <script src="assets/js/main.js"></script>
</body>

</html>