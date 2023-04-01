{{-- header middle start --}}
<?php
    use App\Models\Cart;
    $authUser = Auth::user();
    if($authUser !== null){
        $cartItmes = Cart::with('product')->where('user_id', $authUser->id)->get();
    }
?>   



<div class="header-middle d-none d-lg-block">
    <div class="container">
        <div class="header-col">
            <div class="logo header-logo">
                <a href="{{url('/')}}" class="d-none d-lg-block"><img src="{{ asset('frontend/assets/img/logo.png') }}"
                        alt="logo"></a>
                <a href="{{url('/')}}" class="d-lg-none d-sm-block"><img
                        src="{{ asset('frontend/assets/img/logo-01.png') }}" alt="logo 2"></a>
            </div>
            <div class="header-right position-relative">
                <div class="header-search">
                    <form action="{{ route('search-product-data') }}" method="POST">
                        @csrf
                        <select class="select-active">
                            <option>Select Pincode</option>
                            <option>628233</option>
                            <option>528233</option>
                            <option>228233</option>
                            <option>428233</option>
                            <option>128233</option>
                        </select>
                        <input type="text" class="search" placeholder="Search for medicines, health products and more" name="product">
                        <input type="submit" name="form-submit submit" class="submit-btn popup-toggle3">
                    </form>
                    <ul class="position-absolute col-lg-12 searchData" style="z-index: 1">
                        
                    </ul>
                </div>
                <div class="header-details">
                    <div class="header-inner">
                        <label class="file-uploaded ml-15 me-2">
                            Upload Prescription<input type="file">
                        </label>
                        @auth
                        <div class="header-inner-icon ">
                            <a class="small-cart-icon" href="javascript:;">
                                <i class="feather-heart"></i>
                                <span class="pro-count blue">{{ count($cartItmes) }}</span>
                            </a>
                            <div class="cart-dropdown-wrap">
                                <ul>
                                    @forelse ($cartItmes as $item)
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
                                    @empty
                                        <small>No Cart item here...</small>
                                    @endforelse
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$3000.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a href="{{ route('cart.view') }}" class="outline">View cart</a>
                                        <form action="{{ route('cart.view') }}" method="get">
                                        @csrf
                                        <button class="{{ count($cartItmes) == 0 ? 'disabled' : '' }} btn btn-primary btn-sm" >Checkout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-inner-icon ">
                            <a class="small-cart-icon me-3" href="javascript:;">
                                <i class="feather-shopping-bag"></i>
                                <span class="pro-count blue">1</span>
                            </a>
                            <a href="cart.html" class="me-3">
                                <span class="lable d-block mt-0">Cart</span>
                                <span class="cart-amout d-block ">$0.00</span>
                            </a>
                            <div class="cart-dropdown-wrap">
                                {{-- <ul>
                                    @forelse ($cartItmes as $item)
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
                                    @empty
                                        <h3>No Cart item here...</h3>
                                    @endforelse
                                </ul> --}}
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$4000.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a href="cart.html" class="outline">View cart</a>
                                        <a href="checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- header middle end --}}
