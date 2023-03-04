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
                            <div class="col-sm-6">
                                <div style="height: 37px; overflow:hidden;" class="card">
                                    <label for="category" class="d-flex">
                                        <p class="mt-2">Category:</p>
                                        <select name="category" id="category" class="form-control">
                                            <option disabled selected>Select one</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->cat_name }}</option>     
                                            @endforeach
                                        </select>
                                    </label>
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
                            <div class="col-sm-6">
                                <div style="height: 37px; overflow:hidden;" class="card">
                                    <label for="sub_category" class="d-flex">
                                        <p class="mt-2">Sub-Category:</p>
                                        <div class="col-sm-9">
                                            <select name="sub_category" id="sub_category" class="form-control">
                                                <option disabled selected>Select one</option>
                                                @foreach ($sub_categories as $sub_category)
                                                <option value="{{ $sub_category->id }}">{{ $sub_category->sub_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </label>
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
                        <div class="row mb-1">
                            <div class="col-sm-4">
                                <div style="height: 37px; overflow:hidden;" class="card">
                                    <label for="title" class="d-flex">
                                        <p class="mt-2">Title:</p>
                                        <input type="text" class="form-control" id="title" name="product_name" />
                                    </label>
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
                            <div class="col-sm-4">
                                <div style="height: 37px; overflow:hidden;" class="card">
                                    <label for="sku" class="d-flex">
                                        <p class="mt-2">SKU:</p>
                                        <input type="text" class="form-control" id="sku" name="sku_name" />
                                    </label>
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
                            <div class="col-sm-4">
                                <div style="height: 37px; overflow:hidden;" class="card">
                                    <label for="stock" class="d-flex">
                                        <p class="mt-2">Stock:</p>
                                        <input type="number" class="form-control" id="stock" name="stock" />
                                    </label>
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
                        <div class="row">
                            <span>Category Image</span>
                            <div class="row col-lg-6 mb-3">
                                <label for="image" class="col-lg-12">
                                    <div class="text-secondary" style="width: 21rem;">
                                        <img src="{{ asset('images/image_placeholder_2.png') }}" alt=""  id="show_image" style=" width: 100%; height:7%; border-radius: 12px">
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
                            <div class="col-lg-6">
                                <div style="height: 37px; overflow:hidden;" class="card">
                                    <label for="specification" class="d-flex">
                                        <p class="mt-2">Specification:</p>
                                        <input type="text" class="form-control" id="specification" name="specification" />
                                    </label>
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
                                <label for="description" class=" card d-flex">
                                    <p class="mt-2">Description:</p>
                                    <textarea name="description" placeholder="Write Description..." class="form-control" id="description" cols="30" rows="5"></textarea>
                                </label>
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
                        <div class="row">
                            <div class="col-sm-12 text-secondary">
                                <button class="btn btn-primary w-100">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- form end --}}
    @push('script')
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
