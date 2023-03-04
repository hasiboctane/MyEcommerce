@extends('backend.master')
@section('main-content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <h2>Add Category</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category">
                        </div>
                        <div class="mb-3">
                            <label for="category_slug" class="form-label">Category Slug</label>
                            <input type="text" class="form-control" name="category_slug" id="category_slug" placeholder="Enter Category Slug">
                        </div>
                        <div class="mb-3">
                            <label for="category_image" class="form-label">Category Image</label>
                            <input type="file" class="form-control" name="cateory_image" id="category_image">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="status">Status</label>
                            <select class="form-select" name="status" id="status">
                              <option selected>Select</option>
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            $('#category_name').on('input', function(){
                let name = $(this).val()
                let slug = name.replaceAll(' ', '-');
                $('#category_slug').val(slug.toLowerCase());
            })
        </script>
    @endpush
@endsection
