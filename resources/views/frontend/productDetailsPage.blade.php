@extends('frontend.app.app')


@section('content')
@php
    $user = Auth::user();
    // dd($user);
@endphp
<!-- Main -->
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-5 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <div class="detail-gallery">
                                        <!-- MAIN SLIDES -->
                                        <div class="position-relative">
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{ $product[0]->image_url }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="" alt="product image">
                                            </figure>
                                        </div>
                                            <span class="zoom-icon"><i class="feather-search"></i></span>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            <div><img src="" alt="product image"></div>
                                            <div><img src="" alt="product image"></div>
                                            <div><img src="" alt="product image"></div>
                                            <div><img src="" alt="product image"></div>
                                            <div><img src="" alt="product image"></div>
                                            <div><img src="" alt="product image"></div>
                                            <div><img src="" alt="product image"></div>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <div class="bg-price">
                                            <span class="save-price mb-10">100%</span>
                                        </div>
                                        <h5 class="title-detail">{{ $product[0]->title }}</h5>
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <span class="current-price">$ 32.00</span>
                                                <span class="old-price">$ 46.00</span>
                                            </div>
                                        </div>
                                        <ul class="pro-code">
                                            <li>SKU ID : <span class="text-black">{{ $product[0]->sku }}</span></li>
                                            <li>Category : <span class="text-black">{{ $product[0]->category->cat_name }}</span></li>
                                            <li>Availability : <span class="text-brand">{{ $product[0]->stock !== 0 ? 'In Stock' : 'Sold Out' }}</span></li>
                                        </ul>                                  
                                        <div class="product-extra-link2 ">
                                            <h5>Quantity</h5>
                                            <div class="quntity-group  d-flex">
                                                <div class="detail-extralink">
                                                    <div class="detail-qty border radius">
                                                        <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                                        <span class="qty-val">1</span>
                                                        <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                                    </div>
                                                </div>
                                                <a href="cart.html" class="button button-add-to-cart me-3"><i class="fi-rs-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="pop-wish">
                                            <a aria-label="Add To Wishlist" class=" link-wishlist" href="wishlist.html"><i class="feather-heart me-1 ms-1"></i>Add to Wishlist</a>
                                        </div>
                                        <div class="pro-share">
                                            <ul>
                                                <li class="me-2"><span>Share :</span></li>
                                                <li><a href="javascript:;"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="javascript:;"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="tab-style3">
                                    <ul class="nav nav-tabs text-uppercase">
                                        <li class="nav-item">
                                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Specification">Specification</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="review-tab" data-bs-toggle="tab" href="#Review">Review(4)</a>
                                        </li>
                                    </ul>
                                    <div class="view-detail-tab">
                                        <div class="tab-content shop_info_tab entry-main-content">
                                            <div class="tab-pane specific-perform fade" id="Specification">
                                                {!! $product[0]->specification !!}
                                            </div>
                                            <div class="tab-pane about-items fade show active">
                                                {{ $product[0]->description }}
                                            </div>
                                            <div class="tab-pane review-tab fade" id="Review">
                                                @if ($user != null)
                                                {{-- Rating Review --}}
                                                    <div class="review-rating-blk">
                                                        <div class="rating-views-blk">
                                                            <div class="rating-views text-center">
                                                                <h3>4.5<span>/5</span></h3>
                                                                <div class="review-card-bottom ">
                                                                    <div class="rating d-inline-block">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                    </div>
                                                                </div>
                                                                <p>296 Ratings</p>
                                                            </div>
                                                        </div>
                                                        <div class="rating-star-group">
                                                            <div class="rating-star">
                                                                <h5>5 Stars</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-success" style="width:65%"></div>
                                                                </div>
                                                                <h6>65%</h6>
                                                            </div>
                                                            <div class="rating-star">
                                                                <h5>4 Stars</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-success" style="width:26%"></div>
                                                                </div>
                                                                <h6>26%</h6>
                                                            </div>
                                                            <div class="rating-star">
                                                                <h5>3 Stars</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-warning" style="width:5%"></div>
                                                                </div>
                                                                <h6>5%</h6>
                                                            </div>
                                                            <div class="rating-star">
                                                                <h5>2 Stars</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-warning" style="width:2%"></div>
                                                                </div>
                                                                <h6>2%</h6>
                                                            </div>
                                                            <div class="rating-star mb-0">
                                                                <h5>1 Stars</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-danger" style="width:1%"></div>
                                                                </div>
                                                                <h6>1%</h6>
                                                            </div>
                                                        </div>
                                                    </div> 
    
    
                                                    {{-- Comment Review --}}
                                                    <h3>Recent Reviews</h3>
                                                    @forelse ($product[0]->comments as $comment)
                                                    <div class="review-group mb-10">
                                                        <div class="review-img">
                                                            <a href="profile.html"><img src="" alt="img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="review-name-group">
                                                            <h5><a href="profile.html">{{ $comment->comment }}</a> <span> | {{ $comment->updated_at->diffForhumans() }}</span></h5>
                                                            <div class="review-card-bottom ">
                                                                <div class="rating d-inline-block">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                            @if(count($comment->replies) > 0)
                                                            <h6><a href="profile.html">{{ $comment->replies->comment }}</a> <span> | {{ $comment->updated_at->diffForhumans() }}</span>Allegra Generic</h6>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eos, voluptates nostrum velit veritatis sapiente nobis dolore atque quam commodi. </p>  
                                                            @endif
                                                            <form action="{{ route('comment.create', $product[0]->id) }}" method="post">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label>Comment <span class="text-danger">*</span></label>
                                                                    <div class="rating row">
                                                                        <input type="text" name="comment" class="form-control col-sm-8">
                                                                        <button class="btn btn-sm btn-primary col-sm-4" type="submit">Send</button>
                                                                    </div>
                                                                </div>
    
                                                            </form>
                                                        </div>
                                                    </div>
                                                        
                                                    @empty
                                                        <form action="javascript:;">
                                                            <div class="form-group">
                                                                <label>Comment <span class="text-danger">*</span></label>
                                                                <div class="rating ">
                                                                    <input type="text" name="comment" class="form-controll">
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                    @endforelse
    
                                                @else
                                                    <h4>Do you write a comment or reiview please <a class="btn btn-sm btn-primary" href="{{ route('login') }}">login</a> required</h4>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Products -->
                            <section class="feature-products pb-0">
                                <div >
                                    <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                                        <h3>Similar Products</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="feature-product-slider arrow-center position-relative">
                                                <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow" id="carousel-4-columns-arrows"></div>
                                                <div class="carousel-4-columns carousel-arrow-center mb-0" id="carousel-4-columns">
                                                <!-- Product box -->
                                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                    <div class="product-img-col">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="view-product.html">
                                                                <img  src="{{ asset('frontend/assets/img/shop/product-11.jpg') }}" alt="">
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
                                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                                            <div class="product-details-inner">
                                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
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
                                                                <img  src="{{ asset('frontend/assets/img/shop/product-12.jpg') }}" alt="">
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
                                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                                            <div class="product-details-inner">
                                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
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
                                                                <img  src="{{ asset('frontend/assets/img/shop/product-13.jpg') }}" alt="">
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
                                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                                            <div class="product-details-inner">
                                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
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
                                                                <img  src="{{ asset('frontend/assets/img/shop/product-10.jpg') }}" alt="">
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
                                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                                            <div class="product-details-inner">
                                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
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
                                                                <img  src="{{ asset('frontend/assets/img/shop/product-13.jpg') }}" alt="">
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
                                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                                            <div class="product-details-inner">
                                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
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
                            <!-- /Products -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
@endsection