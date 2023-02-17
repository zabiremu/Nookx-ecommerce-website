{{-- home page start --}}

@extends('frontend.app.app')

@section('content')
<main class="main">
    <section class="banner-section position-relative">
        <div class="container">
            <div class="banner-slider">
                <div class="banner-slider-one pagination-square align-pagination-square">
                    <div class="banner-slider-single banner-animation-col">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1 class="banner-title mb-25">
                                        Face Mask <span>Thermometer</span>
                                    </h1>
                                    <p>Quis autem vel eum iure reprehenin voluptate velit esse quam nihil molestiae
                                        conse </p>
                                    <a href="shop-grid.html" class="shop-now">Shop Now <i
                                            class="feather-arrow-right ml-5"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="single-banner-slider">
                                    <img src="{{ asset('frontend/assets/img/slider/slide-01.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-slider-single banner-animation-col">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1 class="banner-title mb-25">
                                        Covid -19 <span>Temperature</span>
                                    </h1>
                                    <p>Eget aenean accumsan bibendum gravida maecenas augue elementum et neque.
                                        Suspendisse imperdiet.</p>
                                    <a href="shop-grid.html" class="shop-now">Shop Now <i
                                            class="feather-arrow-right ml-5"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="single-banner-slider">
                                    <img src="{{ asset('frontend/assets/img/slider/slide-03.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-slider-single banner-animation-col">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1 class="banner-title mb-25">
                                        Pulse <span>Oximeter</span>
                                    </h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean
                                        accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse
                                        imperdiet.</p>
                                    <a href="shop-grid.html" class="shop-now">Shop Now <i
                                            class="feather-arrow-right ml-5"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="single-banner-slider">
                                    <img src="{{ asset('frontend/assets/img/slider/slide-02.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End hero slider-->

    <!-- Shop -->
    <section class="digital-shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 d-flex ">
                    <div class="digital-group  wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="pharmacy-equipments">
                            <div class="digital-pharmacy">
                                <h5>Digital Meter<br> <span>Thermometer</span></h5>
                                <h2>$149.00</h2>
                                <span>$159.00</span>
                                <h4><a href="view-product.html">Shop Now <i
                                            class="feather-arrow-right ml-5"></i></a></h4>
                            </div>
                            <div class="digital-shop-img">
                                <a href="view-product.html">
                                    <img class="default-img"
                                        src="{{ asset('frontend/assets/img/shop/shop-01.jpg') }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex">
                    <div class="digital-group  wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="pharmacy-equipments">
                            <div class="digital-pharmacy">
                                <h5>Gun Covid -19<br> <span>Thermometer</span></h5>
                                <h2>$119.00</h2>
                                <span>$129.00</span>
                                <h4><a href="view-product.html">Shop Now <i
                                            class="feather-arrow-right ml-5"></i></a></h4>
                            </div>
                            <div class="digital-shop-img">
                                <a href="view-product.html">
                                    <img class="default-img"
                                        src="{{ asset('frontend/assets/img/shop/shop-02.jpg') }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex">
                    <div class="digital-group  wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="pharmacy-equipments">
                            <div class="digital-pharmacy">
                                <h5>Pulse<br> <span>Oximeter</span></h5>
                                <h2>$119.00</h2>
                                <span>$129.00</span>
                                <h4><a href="view-product.html">Shop Now <i
                                            class="feather-arrow-right ml-5"></i></a></h4>
                            </div>
                            <div class="digital-shop-img">
                                <a href="view-product.html">
                                    <img class="default-img"
                                        src="{{ asset('frontend/assets/img/shop/shop-03.jpg') }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Shop -->

    <!-- Category -->
    <section class="section-category">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3 class="">Popular Categories</h3>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="category-slider arrow-center position-relative">
                        <div class="slider-arrow slider-arrow-two carousel-category-arrow"
                            id="carousel-category-arrows"></div>
                        <div class="carousel-category carousel-arrow-center" id="carousel-category">

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-01.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Wound Care</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-02.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Higiene</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-03.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Laboratory</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-04.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Tools</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-02.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Diagnosis</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-06.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Equipment</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-03.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Laboratory</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Category -->

    <!-- Featured Products -->
    <section class="feature-products">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3>Featured Products</h3>
                <p>A highly efficient slip-ring scanner for today's diagnostic requirements.</p>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="feature-product-slider arrow-center position-relative">
                        <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                            id="carousel-4-columns-arrows"></div>
                        <div class="carousel-4-columns carousel-arrow-center" id="carousel-4-columns">

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/product-11.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-10%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Antiseptic Spray</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/product-12.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Digital Stethoscope</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 550.00</span>
                                            <span class="old-price">$ 350.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/product-13.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-10%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Cosmetic Containers</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/product-10.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Blue Hand Gloves</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 250.00</span>
                                            <span class="old-price">$ 150.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/product-13.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-15%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Cosmetic Containers</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Featured Products -->

    <!-- Trending Products -->
    <section class="trending-products">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3>Trending Products</h3>
                <p>A highly efficient slip-ring scanner for today's diagnostic requirements.</p>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="feature-product-slider arrow-center position-relative">
                        <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                            id="carousel-5-columns-arrows"></div>
                        <div class="carousel-4-columns carousel-arrow-center" id="carousel-5-columns">

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-01.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-10%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Antiseptic Spray</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 32.00</span>
                                            <span class="old-price">$ 46.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-02.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Cetaphil Sun Kids Liposomal...</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 50.00</span>
                                            <span class="old-price">$ 56.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-03.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-10%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html"> TruRadix Curcumin Oral Str...</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 35.00</span>
                                            <span class="old-price">$ 45.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-04.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Goodlife Nutrition Immuni...</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 25.00</span>
                                            <span class="old-price">$ 35.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-02.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-15%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Cetaphil Sun Kids Liposomal...</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 50.00</span>
                                            <span class="old-price">$ 56.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Trending Products -->

    <!-- Deals of the day -->
    <section class="feature-products">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3>Deals of the day <span>17:56:23 left</span></h3>
                <p>A highly efficient slip-ring scanner for today's diagnostic requirements.</p>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="feature-product-slider arrow-center position-relative">
                        <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                            id="carousel-6-columns-arrows"></div>
                        <div class="carousel-4-columns carousel-arrow-center" id="carousel-6-columns">

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-05.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-10%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Ibuprofen 200mg Capsule</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-06.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Natural Elixir For Perfect Skin</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 550.00</span>
                                            <span class="old-price">$ 350.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-07.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-10%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Alvedon® Film-coated tablet...</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-08.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Amoxicillin 500mg Capsule</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 250.00</span>
                                            <span class="old-price">$ 150.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/trend-product-06.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-15%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-15">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Natural Elixir For Perfect Skin</a></h2>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                        </div>
                                    </div>
                                    <div class="add-feature">
                                        <a href="cart.html" class="btn btn-primary"><i
                                                class="feather-shopping-bag me-1"></i>Add</a>
                                        <div class="product-details-inner">
                                            <a href="view-product.html" class="product-btn"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Quick view" class="product-btn"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn"
                                                href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Deals  day -->

    <!-- Popular Categories -->
    <section class="popular-category">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3 class="">Popular Categories</h3>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="category-slider arrow-center position-relative">
                        <div class="slider-arrow slider-arrow-two carousel-category-arrow"
                            id="carousel-category-one-arrows"></div>
                        <div class="carousel-category carousel-arrow-center" id="carousel-category-one">

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-07.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Respiratory</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-08.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Cardiac</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-09.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Covid 19</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-10.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Stomach</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-11.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Eye Care</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-12.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Cold</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('frontend/assets/img/shop/category-10.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Stomach</a></h4>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Popular Categories -->

    <!-- Book Consultation -->
    <section class="book-consultation">
        <div class="container">
            <div class="book-consult-img">
                <img src="{{ asset('frontend/assets/img/consult.png') }}" alt="">
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 d-flex">
                    <div class="consult-box d-flex align-items-center">
                        <div class="consult-img mr-15">
                            <img src="{{ asset('frontend/assets/img/icons/book-01.svg') }}" alt="">
                        </div>
                        <p>Book any Doctor you want</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex">
                    <div class="consult-box d-flex align-items-center">
                        <div class="consult-img mr-15">
                            <img src="{{ asset('frontend/assets/img/icons/book-02.svg') }}" alt="">
                        </div>
                        <p>Book Virtual Appointment</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex">
                    <div class="consult-box d-flex align-items-center">
                        <div class="consult-img mr-15">
                            <img src="{{ asset('frontend/assets/img/icons/book-03.svg') }}" alt="">
                        </div>
                        <p>Book virtual Appointments with AYUSH doctors</p>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="book-btn-show text-center">
                        <a href="javascript:;" class="btn btn-primary">Book Consultation Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Book Consultation -->

</main>
@endsection
{{-- home page end --}}