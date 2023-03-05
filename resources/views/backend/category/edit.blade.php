@extends('backend.master')
@section('main-content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <h2>Edit Category</h2>
                </div>
                <div class="card-body">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="category_name" placeholder="Enter Category" value="{{ $category->name }}" >
                        </div>
                        {{-- @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror --}}
                        <div class="mb-3">
                            <label for="category_slug" class="form-label">Category Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="category_slug" placeholder="Enter Category Slug" value="{{ $category->slug }}">
                        </div>
                        <div class="mb-3">
                            <label for="category_image" class="form-label">Category Image</label>
                            <input type="file" class="form-control" name="image" id="category_image">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="status">Status</label>
                            <select class="form-select" name="status" id="status">
                                <option selected value="{{ $category->status }}">{{ $category->status==1 ? 'Active' : 'Inactive' }}</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="mb-3 d-grid col-6 mx-auto">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>

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
