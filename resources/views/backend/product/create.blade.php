@extends('backend.layouts.app')

@section('content')
    {{-- jquery script start --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- jquery script  end --}}


    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    {{-- form start --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <div class="card">
                    <form class="card-body" action="{{ route('store.product') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-4 col-sm-6">
                                <div style="padding:.5rem; border-radius:10px; box-shadow: 0px 1px 3px gray inset;">
                                    <div for="category" class="row">
                                            <p class="my-2 col-sm-3">Category:</p>
                                            <div class="col-sm-9">
                                                <select name="category" id="category" class="form-control">
                                                    <option disabled selected>Select one</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->cat_name }}</option>     
                                                    @endforeach
                                                </select>
                                            </div>

                                    </div>
                                    @error('category')
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
                            <div class="mb-4 col-sm-6">
                                <div style="padding:.5rem; border-radius:10px; box-shadow: 0px 1px 3px gray inset;" >
                                    <div for="category" class="row">
                                        <p class="my-2 col-sm-4">Sub-Category:</p>
                                        <div class="col-sm-8">
                                            <select name="category" id="category" class="form-control">
                                                <option disabled selected>Select one</option>
                                                @foreach ($sub_categories as $sub_category)
                                                <option value="{{ $sub_category->id }}">{{ $sub_category->sub_name }}</option>     
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('sub_category')
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
                                    @error('product_name')
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
                        </div>
                        <div class="row">
                            <div class="mb-4 col-sm-5">
                                <div style="padding:.5rem; border-radius:10px; box-shadow: 0px 1px 3px gray inset;">
                                    <div for="category" class="row">
                                        <p class="my-2 col-sm-3">Title:</p>
                                        <div class="col-sm-9">
                                           <input type="text" name="product_name" value="{{ old('product_name') }}" placeholder="Type product name" class="form-control">
                                        </div>
                                        @error('product_name')
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
                                    @error('product_name')
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
                            <div class="mb-4 col-sm-4">
                                <div style="padding:.5rem; border-radius:10px; box-shadow: 0px 1px 3px gray inset;">
                                    <div for="category" class="row">
                                        <p class="my-2 col-sm-3">SKU:</p>
                                        <div class="col-sm-9">
                                           <input type="text" name="sku_name" value="{{ old('sku_name') }}" placeholder="Type sku name" class="form-control">
                                        </div>
                                        @error('sku_name')
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
                                    @error('product_name')
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
                            <div class="mb-4 col-sm-3">
                                <div style="padding:.5rem; border-radius:10px; box-shadow: 0px 1px 3px gray inset;">
                                    <div for="category" class="row">
                                        <p class="my-2 col-sm-4">Stock:</p>
                                        <div class="col-sm-8">
                                           <input type="number" name="stock" value="{{ old('stock') }}" placeholder="Stock" class="form-control">
                                        </div>
                                        @error('stock')
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
                                    @error('stock')
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
                        </div>
                        <div class="col-sm-12">
                            <div class="md-4 col-sm-12">
                                <div style="padding:.5rem; border-radius:10px; box-shadow: 0px 1px 3px rgb(128, 128, 128) inset;">
                                    <div for="category">
                                        <div class="col-sm-12">
                                           <textarea name="description" class="form-control" placeholder="Type product description..." id="specification" cols="30" rows="6">{{ old('description') }}</textarea>
                                        </div>
                                        @error('description')
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
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mt-4 col-sm-12">
                                <div style="padding:.5rem; border-radius:10px; box-shadow: 0px 1px 3px rgb(128, 128, 128) inset;">
                                    <div for="category">
                                        <div class="col-sm-12">
                                           <textarea name="specification" class="form-control editor" id="specification" cols="30" rows="15">{{ old('specification') }}</textarea>
                                        </div>
                                        @error('specification')
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
                            </div>
                        </div>
                        <div class="col-sm-12 mx-auto row" >
                            <div class="mt-4 col-sm-5" style="margin:.5rem; border-radius:10px; box-shadow: 0px 1px 3px rgb(128, 128, 128) inset;">
                                <p style="padding:3px; background-color:rgba(25, 25, 255, 0.281); color:white;">Product image:</p>
                                <div class="row col-sm-12 mb-3">
                                    <label for="image" class="col-sm-12">
                                        <div class="text-secondary col-sm-12" style="height: 250px;">
                                            <img src="{{ asset('images/image_placeholder_2.png') }}" id="show_image" style=" width: 100%; height:100%; border-radius: 10px">
                                                <div class="col-sm-9 text-secondary" style="display:none;">
                                                    <input type="file" class="form-control" id="image" name="product_image" />
                                                </div>
                                        </div>
                                    </label>
                                </div>
                                @error('product_image')
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
                            <div class="mt-4  col-sm-6" style=" margin:.5rem; border-radius:10px; box-shadow: 0px 1px 3px rgb(128, 128, 128) inset;">
                                <p style="padding:3px; background-color:rgba(25, 25, 255, 0.281); color:white;">Product show on:</p>
                                <div class="row col-sm-12 mb-3" style="margin: .2rem;">
                                    <table class="table mt-5">
                                        <tbody>
                                          <tr>
                                              <td>
                                                  <div class="form-group form-check">
                                                      <input type="checkbox" class="form-check-input" name="banner" id="banner">
                                                      <label class="form-check-label" for="banner">Banner</label>
                                                   </div>
                                              </td>
                                            <td>
                                                <small>This product show on banner section</small>
                                            </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="form-group form-check">
                                                      <input type="checkbox" class="form-check-input" name="featured" id="featured">
                                                      <label class="form-check-label" for="featured">Featured</label>
                                                   </div>
                                              </td>
                                            <td>
                                                <small>This product show on featured section</small>
                                            </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="form-group form-check">
                                                      <input type="checkbox" class="form-check-input" name="trending" id="trending">
                                                      <label class="form-check-label" for="trending">Trending</label>
                                                   </div>
                                              </td>
                                            <td>
                                                <small>This product show on trending section</small>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="deals_of_the_day" id="deals_of_the_day">
                                                    <label class="form-check-label" for="deals_of_the_day">Deals of </label>
                                                 </div>
                                            </td>
                                            <td>
                                              <small>This product show on Deals of the day section</small>
                                            </td>
                                            </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-primary w-100">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- form end --}}
    @push('script')
    <script>
    ClassicEditor
        .create( document.querySelector( '.editor' ) )
        .catch( error => {
        } );
    </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#image').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#show_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0'])
                })
            })
        </script>
        <script>
            var catName = $('#catName');
            catName.on('keyup', function() {
                var value = $(this).val();
                var convertValue = value.split(' ').join('-').toLowerCase();
                $('#slug').val(convertValue);
            })
        </script>
    @endpush
@endsection
