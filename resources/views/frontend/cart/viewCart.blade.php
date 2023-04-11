@extends('frontend.app.app')
@section('content')
    @php
        $total = App\Models\Cart::where('user_id', Auth::user()->id)->sum('price');
    @endphp
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="section-title section-new-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h4>Shopping Cart</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="table-responsive shopping-table">
                            <table class="table">
                                <thead>
                                    <tr class="table-head">
                                        <th></th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($cartItmes as $item)
                                        <tr class="table-head">
                                            <form action="{{ route('update.cart', $item->id) }}" method="post">
                                                @csrf
                                                <td>
                                                    <a href="{{ route('delete.cart', $item->id) }}" class="btn btn-danger btn-sm" style="background: red!important"><i
                                                            class="feather-x-circle"></i></a>
                                                </td>
                                                <td class="cart-store">
                                                    <a href="view-product.html"><img src="{{ $item->product->image_url }}"
                                                            class="img-fluid" alt=""></a>
                                                    <div class="sold-group">
                                                        <a href="javascript:;">{{ $item->product->title }}</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    @php
                                                        $totalPrice = $item->price;
                                                        $price = $totalPrice / $item->product_qty;
                                                    @endphp
                                                    {{ $price }}
                                                </td>
                                                <td>
                                                    <div class="product-extra-link2 ">
                                                        <div class="quntity-group  d-flex">
                                                            <div class="detail-extralink">
                                                                <div class="detail-qty border radius">
                                                                    {{-- <a href="#" class="qty-down"><i
                                                                            class="fi-rs-minus-small"></i></a> --}}
                                                                    {{-- <span class="qty-val">{{ $item->product_qty }}</span> --}}
                                                                    <input type="number" class="form-control"
                                                                        value="{{ $item->product_qty }}"
                                                                        name="product_qty">
                                                                    {{-- <a href="#" class="qty-up"><i
                                                                            class="fi-rs-plus-small"></i></a> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>${{ $item->price }} </td>
                                                <td>
                                                    <button class="btn btn-primary">Update Cart</button>
                                                </td>
                                            </form>
                                        </tr>

                                    @empty
                                        <tr>
                                            <h4>NO cart item here...</h4>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="shop-cart">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <form action="javascript:;">
                                    <div class="shop-cart-action mb-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Coupon code">
                                        </div>
                                        <button type="button" class="btn continue-btn">Apply coupon</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="continue-shop d-flex align-items-center justify-content-end">
                                    <div class="shop-continuee">
                                        <a href="shop-grid.html">Continue Shopping</a>
                                    </div>

                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="shop-cart-info">
                                            <p>Subtotal <span>${{ $total }} </span></p>
                                            <ul class="shipping-list">
                                                <li>Shipping</li>
                                                <li>Free shipping</li>
                                                <li>Shipping to Bangladesh. </li>
                                            </ul>
                                            <p>Total <span class="total-brand">$320.00 </span></p>
                                            <a href="checkout.html" class="btn checkout-btn w-100">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
