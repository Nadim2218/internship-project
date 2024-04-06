@extends('layouts.dashboard.dashboardmaster')

@section('content')
<br>
<br>

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Category</h4>
                </div>
                <div class="card-body">
                    @if(session('catdone'))
                    <div class="alert alert-success">
                        {{ (session('catdone')) }}
                    </div>
                    @endif
                    <div class="basic-form">
                        <form action="{{ route('category.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="hidden"  name="category_id" value="{{ $category->id }}">
                                    <input type="text" class="form-control" placeholder="Category Name" name="category_name" value="{{ $category->category_name }}">
                                    @error('category_name')
             <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" placeholder="Category image" name="cat_image">
                                    @error('cat_image')
             <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                    <div class="mt-2">
                                        <img src="{{ asset('/uploads/category_image') }}/{{ $category->cat_image }}" alt="" style="width: 200px">
                                    </div>
                                </div>
                            </div>
    <br>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@endsection
