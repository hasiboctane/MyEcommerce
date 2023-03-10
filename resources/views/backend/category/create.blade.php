@extends('backend.master')
@section('main-content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <h2>Add Category</h2>
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
                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="category_name" placeholder="Enter Category" value="{{ old('name') }}"
                            >
                        </div>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-3">
                            <label for="category_slug" class="form-label">Category Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="category_slug" placeholder="Enter Category Slug" value="{{ old('slug') }}"
                            >
                        </div>
                        @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-3">
                            <label for="category_description" class="form-label">Category Description</label>
                            <textarea name="description" id="category_description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10" ></textarea>
                        </div>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="status">Status</label>
                            <select class="form-select" name="status" id="status">
                              <option selected>Select</option>
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
