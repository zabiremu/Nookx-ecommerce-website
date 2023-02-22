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
                                                        <h4>{{ $user->name }}</h4>
                                                        <span><small>{{ Str::ucfirst($user->roles[0]->name) }}</small></span>
                                                        <p>{{ $user->email }}</p>
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
                                    @if ( $user->roles[0]->name == 'buyer' )
                                    <li>
                                        <a href="vendor.html">
                                            <div>
                                                <i class="feather-shopping-cart"></i>
                                                <p>Become a Seller</p>
                                            </div>
                                        </a>
                                    </li> 
                                    @else
                                    <li>
                                        <a href="vendor.html">
                                            <div>
                                                <i class="feather-shopping-cart"></i>
                                                <p>Deshboard</p>
                                            </div>
                                        </a>
                                    </li> 
                                    @endif
                                    <li>
                                        <a href="profile.html" class="active">
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/account-icon-02.png') }}" alt="Image">
                                                <p>My Profile</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="orders.html">
                                            <div>
                                                <i class="feather-shopping-bag"></i>
                                                <p>Cart</p>
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
                                </ul>
                            </div>
                            <form method="post" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="col-lg-6 mb-1">
                                    <label style="width: 9rem; height:9rem;"  for="imagefile">
                                        Profile Image<span class="text-danger">*</span>
                                        <img id="liveImage" style="border:1px solid rgb(20, 159, 82); border-radius:50%;" src="{{ asset('images/image_placeholder.png') }}" alt="">
                                        <input type="file" id="imagefile" style="visibility: hidden;" name="image" >
                                    </label>
                                    @error('image')
                                        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                            <div class="d-flex align-items-center">
                                                <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h6 class="mb-0 text-white">Error</h6>
                                                    <div class="text-white">{{ $message }}</div>
                                                </div>
                                            </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="billing-detail-blk">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" value="{{ $user->name }}" placeholder="Type your name">
                                            @error('name')
                                            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 text-white">Error</h6>
                                                        <div class="text-white">{{ $message }}</div>
                                                    </div>
                                                </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Date Of Birth <span class="text-danger">*</span></label>
                                            <input type="date" name="dateofbirth" class="selected-date" placeholder="DD-MM-YYYY">
                                            @error('dateofbirth')
                                            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 text-white">Error</h6>
                                                        <div class="text-white">{{ $message }}</div>
                                                    </div>
                                                </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Phone  </label>
                                            <input type="phone" placeholder="Type phone number" name="phone" >
                                            @error('phone')
                                            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 text-white">Error</h6>
                                                        <div class="text-white">{{ $message }}</div>
                                                    </div>
                                                </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Address </label>
                                            <input type="text" value="{{ $user->address }}" placeholder="Type your address" name="address" >
                                            @error('address')
                                            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 text-white">Error</h6>
                                                        <div class="text-white">{{ $message }}</div>
                                                    </div>
                                                </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="profile-update mt-30">
                                        <button type="submit" class="btn btn-primary">Update</button>
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

{{-- Profile image auto change script --}}
<script>
    let inputImg = document.querySelector('#imagefile')
    let image = document.querySelector('#liveImage')
    let changeImage = (e) => {
        let url = URL.createObjectURL(e.target.files[0])
        image.src = url
        console.log(image)
    }
    inputImg.addEventListener('change', changeImage)

</script>
