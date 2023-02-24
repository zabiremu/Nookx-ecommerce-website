@extends('backend.layouts.app')
@section('content')
    <section class="d-flex">

        <section class="col-lg-7">

            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Category Slug</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @forelse ($categories as $key=>$category )
                <tbody>
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a href="{{ route('.categoryedit', $category->slug) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm categorydelete">Delete</a>
                        <form action="{{ route('.categorydelete', $category->slug) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        </form>

                    </td>
                  </tr>
                </tbody>
            @empty
                <tbody>
                    <tr>
                        <td><h4 class="h4">No Category Found</h4></td>
                    </tr>
                </tbody>
            @endforelse
              </table>
        </section class="col-lg-4">
       @if (!isset($editeCategory))

       <form class="w-full" style="margin-left: 4rem" action="{{ route('.categorystore') }}" method="POST">
           @csrf
           <h2 class="h2">Add a Category</h2>
           <hr>
           <br>
           <div class="form-group">
               <label for="title">
               <h6 class="h6">Category Title<span class="required" style="color:red">*</span></h6>
               </label>
               <input type="text" class="form-control" placeholder="Enter Category Title" name="title">
               @error('title')
               <Span class="text-danger">{{ $message }}</Span>
               @enderror
           </div>
           <br>
           <div class="form-group">
               <label for="slug">
                   <h6 class="h6">Category Slug</h6>
               </label>
               <input type="text" class="form-control" placeholder="Enter Category Slug" name="slug">
           </div>

           <br><br>
           <button type="submit" class="btn btn-primary">Submit</button>
       </form>
       @else

       <form class="w-full" style="margin-left: 4rem" action="{{ route('.categoryupdate', $editeCategory->slug) }}" method="POST">
           @csrf
           @method('PUT')
           <h2 class="h2">Edit  Category</h2>
           <hr>
           <br>
           <div class="form-group">
               <label for="title">
               <h6 class="h6">Category Title</h6>
               </label>
               <input type="text" class="form-control" placeholder="Enter Category Title" name="title"
               value="{{ $editeCategory->title }}">
               @error('title')
               <Span class="text-danger">{{ $message }}</Span>
               @enderror
           </div>
           <br>
           <div class="form-group">
               <label for="slug">
                   <h6 class="h6">Category Slug</h6>
               </label>
               <input type="text" class="form-control" placeholder="Enter Category Slug" name="slug" value="{{ $editeCategory->slug }}">
               @error('slug')
               <Span class="text-danger">{{ $message }}</Span>
               @enderror
           </div>

           <br><br>
           <button type="submit" class="btn btn-primary">Update</button>
       </form>
       @endif

    </section>
    @push('script')
    <script>
        $('.categorydelete').on('click', function(){
            Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $(this).next('form').submit()
  }
        })

})
    </script>

    @endpush

@endsection
