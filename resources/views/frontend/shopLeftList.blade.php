@extends('frontend.app.app')

@section('content')
    <!-- Main -->
    <main class="main">
        <div class="page-content">
            <div class="container mb-30">
                <div class="row">
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">

                        <!--Categories -->
                        <div class="sidebar-widget price_range range mb-25">
                            <h5 class="section-title style-1 mb-20">Categories</h5>
                            <div class="list-group">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" id="accordionExample">
                                        @foreach ($category as $item)
                                            <li class="nav-item" id="dashboard-one">
                                                <a class="nav-link accordion-button collapsed" href="{{ route('category-wise-product',$item->cat_slug) }}"
                                                    data-bs-toggle="collapse" data-bs-target="#{{ $item->cat_slug }}"
                                                    aria-expanded="false" aria-controls="collapseOne">{{ $item->cat_name }}
                                                    <i class="feather-plus "></i></a>
                                                <div id="{{ $item->cat_slug }}" class="accordion-collapse collapse"
                                                    aria-labelledby="dashboard-one" data-bs-parent="#accordionExample">
                                                    <ul class="dashboard-sub-link">
                                                        @if ($item->subCategory != null)
                                                            @foreach ($item->subCategory as $subCategory)
                                                                <li><a href="{{ route('sub-wise-product-show',$subCategory->sub_slug) }}">{{ $subCategory->sub_name }}</a></li>
                                                            @endforeach
                                                        @endif    
                                                    </ul>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Categories -->

                        <!--Filter Price -->
                        <div class="sidebar-widget price_range range mb-25">
                            <h5 class="section-title style-1 mb-20">Filter by price</h5>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range" class="mb-20"></div>
                                    <div class="d-flex justify-content-between">
                                        <div class="caption">Price:
                                            <span id="slider-range-value1"></span> —
                                            <span id="slider-range-value2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="product-left-sidebar.html" class="btn fillter-btn">Fillter</a>
                        </div>
                        <!-- Filter Price -->

                    </div>
                    <div class="col-lg-9 ">
                        <div class="product-filter-group left-filter-bar">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6">
                                    <div class="filter-list">
                                        <ul>
                                            <li class="border-0"><a href="shop-grid.html" class="active"><i
                                                        class="fi-rs-apps"></i></a></li>
                                            <li><a href="shop-list.html"><i class="fi-rs-list"></i></a></li>
                                            <li>Showing 1-{{ $count }} of 62 results</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <div class="select-filter-group">
                                        <div class="sort-by-filter">
                                            <label>Sort By :</label>
                                            <select class="form-select">
                                                <option>Latest</option>
                                                <option>Lastweek</option>
                                                <option>Lastmonth</option>
                                            </select>
                                        </div>
                                        <div class="sort-by-filter show-filter">
                                            <label>Show :</label>
                                            <select class="form-select ">
                                                <option>10</option>
                                                <option>20</option>
                                                <option>30</option>
                                                <option>40</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid">

                            @forelse ($productLists as $item)
                                <!-- Product Card -->
                                <div class="col-xl-4 col-md-4 col-12 col-sm-6">
                                    <!-- Product box -->
                                    <div class="product-card wow animate__animated animate__fadeIn mb-25"
                                        data-wow-delay=".1s">
                                        <div class="product-img-col">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details.create', $item->slug_unique) }}">
                                                    <img src="{{ $item->image_url != null ? $item->image_url : '' }}"
                                                        alt="{{ $item->title != null ? $item->title : '' }}">
                                                </a>
                                            </div>
                                            <div class="product-badge">
                                                @php
                                                    $price = $item->productPrice != null ? $item->productPrice->price : 0;
                                                    $discount = $item->productPrice != null ? $item->productPrice->discount : 0;
                                                    if ($discount != null) {
                                                        $ammount = ($discount / $price) * 100;
                                                    }
                                                @endphp
                                                <span class="best">
                                                    @if ($discount == null)
                                                        00%
                                                    @else
                                                        {{ ceil($ammount) . '%' }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="sold-group mb-15">
                                            </div>
                                            <h2><a
                                                    href="{{ route('product.details.create', $item->slug_unique) }}">{{ $item->title }}</a>
                                            </h2>
                                            <div class="product-card-bottom ">
                                                <div class="rating d-inline-block">
                                                    @php
                                                        $five = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 5)
                                                            ->count();
                                                        
                                                        $four = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 4)
                                                            ->count();
                                                        
                                                        $three = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 3)
                                                            ->count();
                                                        $two = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 2)
                                                            ->count();
                                                        $one = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 1)
                                                            ->count();
                                                        $totalCount = App\Models\Review::where('product_id', $item->id)->count();
                                                        $totalRatings = $five * 5 + $four * 4 + $three * 3 + $two * 2 + $one * 1;
                                                        $averageResult = 0;
                                                        if ($totalRatings > 0) {
                                                            $averageResult = ceil($totalRatings / $totalCount);
                                                        } else {
                                                            $averageResult = 0;
                                                        }
                                                    @endphp
                                                    @if ($item->review != null)
                                                        @if ($averageResult == 1)
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 1.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 2)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 2.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 3)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 3.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 4)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 4.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @endif
                                                    @endif
                                                    <span class="ml-5"> ({{ $averageResult }})</span>
                                                </div>
                                            </div>
                                            <div class="product-card-bottom ">
                                                <div class="product-price">
                                                    <span>{{ $item->productPrice != null ? $item->productPrice->price : 0 }}$</span>
                                                    <span
                                                        class="old-price">{{ $item->productPrice != null ? $item->productPrice->discount : 0 }}$</span>
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
                                <!-- /Product Card -->
                            @empty
                                <h2>No Product</h2>
                            @endforelse
                        </div>

                        <!--product grid-->
                        <div class="pagination-area">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    {{ $productLists->links() }}
                                </ul>
                            </nav>
                        </div>

                        <!--End Deals-->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
@endsection
