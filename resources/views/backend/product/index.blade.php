@extends('backend.master')
@section('main-content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="mb-0">Product List</h3>
                        <a href="{{route('category.create')}}"> <button class="btn btn-success"><i class="bi bi-plus-square"></i> Add Product</button> </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session()->has('msg'))
                        <p class="alert alert-{{ session()->get('cls') }}">{{ session()->get('msg') }}</p>
                    @endif
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl=1;
                            @endphp
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $sl++ }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <img width="60px" height="50px" src="{{ asset('images/backend/'.$category->image) }}" alt="Image">
                                    </td>
                                    {{-- <td> {{ $category->status==1?'Active' : 'Inactive' }}</td> --}}
                                    <td>
                                        @if ($category->status==1)
                                            <span class=" text-white bg-success p-1 rounded">Active</span>
                                        @else
                                            <span class=" text-white bg-warning p-1 rounded">Inactive</span>
                                        @endif
                                    </td>
                                    <td >
                                        <a href=""><button class="btn btn-sm btn-info"><i class="bi bi-eye-fill"></i></button></a>
                                        <a href="{{ route('category.edit',$category->id) }}"><button class="btn btn-sm btn-warning mx-1"><i class="bi bi-pencil-square"></i></button></a>
                                        <a href=""><button class="btn btn-sm btn-danger mx-1"><i class="bi bi-trash-fill"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
