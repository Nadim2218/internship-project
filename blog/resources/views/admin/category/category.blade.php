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
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Category</h4>
            </div>
            <div class="card-body">
                @if(session('cat_add'))
                <div class="alert alert-success">
                    {{ (session('cat_add')) }}
                </div>
                @endif
                <div class="basic-form">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Category Name" name="category_name">
                                @error('category_name')
         <strong class="text-danger">{{ $message }}</strong>
                                @enderror
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
</div>




@endsection
