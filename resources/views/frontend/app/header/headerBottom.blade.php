{{-- header bottom start--}}
<div class="header-bottom sticky-bar">
    <div class="container">
        <div class="header-col">
            <div class="logo header-logo d-block d-lg-none">
                <a href="index.html" class="d-none d-lg-block"><img
                        src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo"></a>
                <a href="index.html" class="d-sm-block"><img src="{{ asset('frontend/assets/img/logo-01.png') }}"
                        alt="logo"></a>
            </div>
            <div class="header-nav d-none d-lg-flex">
                <div class="main-menu d-none d-lg-block">
                    <nav>
                        <ul>
                            <li>
                                <a class="active" href="#">All Medicines <i
                                        class="fi-rs-angle-down"></i></a>
                                <ul class="has-submenu">
                                    <li><a href="{{ route('product.details.create') }}">COVID Medicines</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Ayrvedic Medicines</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Health Equipments</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Personal Care</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Fitness Suppliments</a></li>
                                    <li><a href="{{ route('product.details.create') }}l">Childcare</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">COVID Medicines <i class="fi-rs-angle-down"></i></a>
                                <ul class="has-submenu">
                                    <li><a href="{{ route('product.details.create') }}">Stimulants</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Opoids</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Antibiotics</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Ayrvedic Medicines <i class="fi-rs-angle-down"></i></a>
                                <ul class="has-submenu">
                                    <li><a href="{{ route('product.details.create') }}">Calcitonin</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Echinocandins</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Handicraft</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Suppositories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Health Equipments <i class="fi-rs-angle-down"></i></a>
                                <ul class="has-submenu">
                                    <li><a href="{{ route('product.details.create') }}">Medical Supplies</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Pulse Oximeters</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Examination Gloves</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Baby Care</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Respiratory</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Medical Equipment</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Personal Care <i class="fi-rs-angle-down"></i></a>
                                <ul class="has-submenu">
                                    <li><a href="{{ route('product.details.create') }}"> Digital Glucose Meter</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Digital Thermometer</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Cotton Mask</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Kids Thermometer</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Face Mask</a></li>
                                    <li><a href="{{ route('product.details.create') }}">Digital Meter</a></li>
                                </ul>
                            </li>
                            <li class="position-static">
                                <a href="#">Mega Menu <i class="fi-rs-angle-down"></i></a>

                                <ul class="mega-menu">
                                    <li class="sub-mega-menu sub-mega-menu-two">
                                        <div class="menu-banner-wrap">
                                            <div class="menu-banner-content">
                                                <p>WEEKEND DISCOUNT 20%</p>
                                                <h4>Blood Pressure</h4>
                                                <h3>Monitor Upper Arm</h3>
                                                <div class="menu-banner-price">
                                                    <span class="new-price">Save to 20%</span>
                                                </div>
                                                <div class="menu-banner-btn">
                                                    <a href="cart.html">Shop All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-one">
                                        <a class="menu-title">Shop Layouts</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('shop.grid.create') }}">Shop Grid</a></li>
                                            <li><a href="{{ route('shop.list.create') }}">Shop List</a></li>
                                            <li><a href="{{ route('shop.left.list.create') }}">Shop Left Sidebar</a></li>
                                            <li><a href="{{ route('shop.right.list.create') }}">Shop Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-one">
                                        <a class="menu-title" href="#">Product Layouts</a>
                                        <ul>
                                            <li><a href="{{ route('product.details.create') }}">View Product</a></li>
                                            <li><a href="{{ route('shop.left.details.create') }}">Product Left Sidebar</a>
                                            </li>
                                            <li><a href="{{ route('shop.right.details.create') }}">Product Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-one">
                                        <a class="menu-title" href="#">Product Type</a>
                                        <ul>
                                            <li><a href="{{ route('store.listing.create') }}">Store Listing</a></li>
                                            <li><a href="{{ route('store.single.create') }}">Store Single</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            @auth
                            <li>
                                <a href="#">Profile <i class="fi-rs-angle-down"></i></a>
                                <ul class="has-submenu">
                                    @if ( $user->roles[0]->name == 'buyer' )
                                    <li><a href="#">Become a seller </a></li>  
                                    @endif
                                    <li><a href="{{ route("profile.create") }}">My Profile</a></li>
                                    <li><a href="{{ route('odrer.create') }}">Orders</a></li>
                                    <li><a href="{{ route('cart.create') }}">Cart</a></li>
                                    <li><a href="{{ route('wisih.create') }}">Wishlist</a></li>
                                    <li><a href="{{ route('logout') }}" style="color: red">Logout</a></li>
                                </ul>
                            </li> 
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-inner-icon d-block d-lg-none">
                <div class="bar-icon">
                    <span class="bar-icon-one"></span>
                    <span class="bar-icon-two"></span>
                    <span class="bar-icon-three"></span>
                </div>
            </div>
            <div class="header-details d-block d-lg-none">
                <div class="header-inner">
                    <div class="header-inner-icon">
                        <a class="small-cart-icon " href="javascript:;">
                            <i class="feather-heart"></i>
                            <span class="pro-count blue">0</span>
                        </a>
                        <div class="cart-dropdown-wrap cart-dropdown-two">
                            <ul>
                                <li>
                                    <div class="shopping-cart-img">
                                        <a href="view-product.html"><img
                                                src="{{ asset('frontend/assets/img/shop/cart-img-02.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="view-product.html">Liver Detox Pills </a></h4>
                                        <h4>(x 10)</h4>
                                    </div>
                                    <div class="shopping-cart-value">
                                        <h2>$15.00</h2>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-cart-img">
                                        <a href="view-product.html"><img
                                                src="{{ asset('frontend/assets/img/shop/cart-img-03.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="view-product.html">Heat Meter </a></h4>
                                        <h4>(x 10)</h4>
                                    </div>
                                    <div class="shopping-cart-value">
                                        <h2>$18.00</h2>
                                    </div>
                                </li>
                            </ul>
                            <div class="shopping-cart-footer">
                                <div class="shopping-cart-total">
                                    <h4>Total <span>$3000.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a href="cart.html">View cart</a>
                                    <a href="checkout.html">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-inner-icon">
                        <a class="small-cart-icon " href="javascript:;">
                            <i class="feather-shopping-bag"></i>
                            <span class="pro-count blue">1</span>
                        </a>
                        <div class="cart-dropdown-wrap cart-dropdown-two">
                            <ul>
                                <li>
                                    <div class="shopping-cart-img">
                                        <a href="view-product.html"><img
                                                src="{{ asset('frontend/assets/img/shop/cart-img-01.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="view-product.html">Antiseptic Spray</a></h4>
                                        <h4>(x 10)</h4>
                                    </div>
                                    <div class="shopping-cart-value">
                                        <h2>$32.00</h2>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-cart-img">
                                        <a href="view-product.html"><img
                                                src="{{ asset('frontend/assets/img/shop/cart-img-02.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="view-product.html">Liver Detox Pills </a></h4>
                                        <h4>(x 10)</h4>
                                    </div>
                                    <div class="shopping-cart-value">
                                        <h2>$32.00</h2>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-cart-img">
                                        <a href="view-product.html"><img
                                                src="{{ asset('frontend/assets/img/shop/cart-img-03.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="view-product.html">Heat Meter </a></h4>
                                        <h4>(x 10)</h4>
                                    </div>
                                    <div class="shopping-cart-value">
                                        <h2>$32.00</h2>
                                    </div>
                                </li>
                            </ul>
                            <div class="shopping-cart-footer">
                                <div class="shopping-cart-total">
                                    <h4>Total <span>$383.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a href="cart.html">View cart</a>
                                    <a href="checkout.html">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- header bottom end--}}