{{-- home page start --}}

@extends('frontend.app.app')

@section('content')
    @php
        $cat = App\Models\Category::select('id', 'cat_name', 'image_url')
            ->latest()
            ->get();
    @endphp
    <main class="main">
        <section class="banner-section position-relative">
            <div class="container">
                <div class="banner-slider">
                    <div class="banner-slider-one pagination-square align-pagination-square">
                        @forelse ($banners as $banner)
                        <div class="banner-slider-single banner-animation-col">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-lg-6">
                                    <div class="banner-content">
                                        <h1 class="banner-title mb-25">
                                            {{ $banner->title }}
                                        </h1>
                                        <p>{{ $banner->description }} </p>
                                        <a href="shop-grid.html" class="shop-now">Shop Now <i
                                                class="feather-arrow-right ml-5"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="single-banner-slider">
                                        <img src="{{ $banner->image_url }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                           <h4>No banner yet</h4> 
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        <!--End hero slider-->

        <!-- Shop -->
        <section class="digital-shop">
            <div class="container">
                <div class="row">
                    @forelse ($most_view as $item )
                    <div class="col-xl-4 col-md-6 d-flex ">
                        <div class="digital-group  wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="pharmacy-equipments">
                                <div class="digital-pharmacy">
                                    <h5>{{ $item->category->cat_name }}<br> <span>{{ $item->title }}</span></h5>
                                    <h2>{{ intval($item->purchase_price) + 50 . '.00' }}</h2>
                                    <span>{{ intval($item->purchase_price) + 100 . '.00' }}</span>
                                    <h4><a href="view-product.html">Explore <i class="feather-arrow-right ml-5"></i></a>
                                    </h4>
                                </div>
                                <div class="digital-shop-img">
                                    <a href="view-product.html">
                                        <img class="default-img" src="{{ $item->image_url }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @empty 
                    @endforelse
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


                                @foreach ($cat as $key => $item)
                                    <!-- Category Grid -->
                                    <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="category-img-col">
                                            <div class="category-img category-img-zoom">
                                                <a href="view-product.html">
                                                    <img src="{{ $item->image_url }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="view-product.html">{{ $item->cat_name }}</a></h4>
                                        </div>
                                    </div>
                                    <!-- /Category Grid -->
                                @endforeach


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
                                @forelse ($products as $product)
                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('product.details.create', $product->slug_unique) }}">
                                                <img src="{{ $product->image_url }}"
                                                alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Added By <span>{{ $product->user_id }}</span></p>
                                        </div>
                                        <h2><a href="{{ route('product.details.create', $product->slug_unique) }}">{{ $product->title }}</a></h2>
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
                                                <span>$ {{ $product->productPrice }}.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="{{ route('product.details.create', $product->slug_unique) }}" class="btn btn-primary"><i
                                                    class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="" class="product-btn"><i
                                                        class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn"
                                                    href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                @empty
                                    <h4>No product hare</h4>
                                @endforelse
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
                                @foreach ($trendings as $trending)
                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('product.details.create', $trending->slug_unique) }}">
                                                <img src="{{ $trending->image_url }}"
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
                                        <h2><a href="{{ route('product.details.create', $trending->slug_unique) }}">{{ $trending->title }}</a></h2>
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
                                                <a href="{{ route('product.details.create', $trending->slug_unique) }}" class="product-btn"><i
                                                        class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn"
                                                    href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                @endforeach
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
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
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
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
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
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
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
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
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
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
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
                                @foreach ($cat as $key => $item)
                                <!-- Category Grid -->
                                <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                    <div class="category-img-col">
                                        <div class="category-img category-img-zoom">
                                            <a href="view-product.html">
                                                <img src="{{ $item->image_url }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="category-content">
                                        <h4><a href="view-product.html">{{ $item->cat_name }}</a></h4>
                                    </div>
                                </div>
                                <!-- /Category Grid -->
                                @endforeach
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
