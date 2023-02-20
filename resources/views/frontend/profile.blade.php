@extends('frontend.app.app')

@section('content')
    <!-- Main -->
    <main class="main pages">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="pharm-account-group">
                            <div class="card mb-30">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="account-profile-group"> 
                                                <div class="account-key-name d-flex align-items-center">
                                                    <a href="#" class="d-flex"><span class="more-avatars">T</span></a>
                                                    <div class="profile-names">
                                                        <h4>Teri Jennings</h4>
                                                        <p>teri@example.com</p>
                                                    </div>
                                                </div>
                                                <div class="profile-account-img">
                                                    <img src="{{ asset('frontend/assets/img/profile-img-01.png') }}" alt="Image">
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="pharm-account-list mb-50">
                                <ul>
                                    <li>
                                        <a href="account.html" >
                                            <div>
                                                <i class="feather-sliders"></i>
                                                <p>Overview</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile.html" class="active">
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/account-icon-02.png') }}" alt="Image">
                                                <p>Profile</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="orders.html">
                                            <div>
                                                <i class="feather-shopping-bag"></i>
                                                <p>Orders</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="address-book.html">
                                            <div>
                                                <i class="feather-map"></i>
                                                <p>Address Book</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">
                                            <div>
                                                <i class="feather-heart"></i>
                                                <p>Wishlist</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.html">
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/key.svg') }}" alt="Image" class="mb-10">
                                                <p>Change Password</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vendor.html">
                                            <div>
                                                <i class="feather-shopping-cart"></i>
                                                <p>Become a Vendor</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <div>
                                                <i class="feather-log-out"></i>
                                                <p>Logout</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="billing-detail-blk">
                                <form method="post">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>First Name <span class="text-danger">*</span></label>
                                            <input type="text" required="" name="fname" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Date Of Birth <span class="text-danger">*</span></label>
                                            <input type="text" required="" name="lname" class="selected-date" placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group valied-email col-lg-6">
                                            <label>Email </label>
                                            <input type="email" name="email" required="" value="teri@example.com">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Phone  </label>
                                            <input required="" type="text" name="phone" >
                                        </div>
                                    </div>
                                    <div class="profile-update mt-30">
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection