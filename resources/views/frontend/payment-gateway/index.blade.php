@extends('frontend.app.app')


@section('content')
    <main class="main">
        <div class="container mb-80 mt-50">

            <form action="" method="POST">
                @csrf
                <div class="row">




                    <div class="col-lg-12">
                        <div class="coupon-group">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <h4 class="mb-30">Billing Details</h4>
                            <div class="billing-detail-blk">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input type="text" required="" name="fname" placeholder="Full Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input type="text" required="" name="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Company name (optional)</label>
                                        <input type="text" required="" name="fname" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Email address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" required="" placeholder="Email ">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Country / Region <span class="text-danger">*</span></label>
                                        <select class="form-select">
                                            <option>United States (US)</option>
                                            <option>India</option>
                                            <option>Russia</option>
                                            <option>London</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Street address <span class="text-danger">*</span></label>
                                        <input type="text" name="billing_address" required="" placeholder="Address">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" name="billing_address2" required=""
                                            placeholder="Address line2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Town / City <span class="text-danger">*</span></label>
                                        <input required="" type="text" name="city" placeholder="Town / City">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>State <span class="text-danger">*</span></label>
                                        <select class="form-select">
                                            <option>New York</option>
                                            <option>India</option>
                                            <option>Russia</option>
                                            <option>London</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Zip <span class="text-danger">*</span></label>
                                        <input required="" type="text" name="zipcode" placeholder="ZIP ">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input required="" type="text" name="phone" placeholder="Phone ">
                                    </div>
                                </div>
                                <div class="ship_detail">
                                    <div class="form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="differentaddress">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseAddress" class="different_address collapse in">
                                    </div>
                                </div>
                                <div class="form-group mb-30">
                                    <label>Order notes (optional)</label>
                                    <textarea rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cart-totals mb-50">
                            <div class="d-flex align-items-end justify-content-between mb-20">
                                <h4>Your Order</h4>
                            </div>
                            <div class="table-responsive order_table checkout">
                                <table class="table no-border mb-0">
                                    <thead>
                                        <tr>
                                            <th>Product name </th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td class="check-cart-img">
                                                    <a href="shop-list.html"><img src="{{ $item->product->image_url }}"
                                                            alt="#" width="80"></a>
                                                    <h6><a href="shop-list.html"
                                                            class="text-heading">{{ $item->product->title }}
                                                            <span>(x
                                                                10)</span></a></h6>
                                                </td>
                                                <td>
                                                    <h4 class="text-brand">${{ $item->price }}</h4>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <ul>
                                <li>Shipping</li>
                                <li>Shipping to India. </li>
                            </ul>
                            @php
                                $total = App\Models\Cart::where('user_id', Auth::user()->id)->sum('price');
                            @endphp
                            <div class="total-checkout">
                                <h3>Total <span>${{ $price->discount_price }}</span></h3>
                            </div>
                        </div>
                        <div class="payment">
                            <h4 class="mb-20">Payment method</h4>
                            <div class="payment_option">


                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option"
                                        id="exampleRadios5" checked="">
                                    <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse"
                                        data-bs-target="#paypal">Online Getway </label>
                                    <img class="ml-10" src="assets/img/icons/paypal.svg" alt="">
                                </div>
                            </div>
                            <div class="terms-conditions-pay">
                                <p>Your personal data will be used to process your order, support your experience throughout
                                    this website, and for other purposes described in our <a href="javascript:;">privacy
                                        policy.</a></p>
                            </div>
                            <div class="check-pay">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> I have read and
                                        agree to the website ? <br><a href="javascript:;">terms and conditions <span
                                                class="text-danger">*</span></a>
                                    </label>
                                </div>
                            </div>
                            <div class="place-orders">
                                <a aria-label="succesmodal" data-bs-toggle="modal" data-bs-target="#succesmodal"
                                    class="btn btn-fill-out btn-block mt-30">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
