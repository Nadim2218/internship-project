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
       @can('add_category')
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
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Category Name" name="category_name">
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
       @endcan


    </div>
    <div class="row">
       @can('show_category')
       <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
<h3>Category List </span></h3>
            </div>
            <div class="card-body">
                @if(session('categorydelete'))
                <div class="alert alert-success">
                    {{ (session('categorydelete')) }}
                </div>
                @endif
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Category Name</th>
                        <th>Category Image</th>
                        <th>ACTION</th>


                    </tr>
@foreach ($categories as $sl=>$categoryy)
<tr>
<td>{{ $sl+1 }}</td>
<td> {{ $categoryy->category_name }}</td>
<td>
<img src="{{ asset('/uploads/category_image') }}/{{ $categoryy->cat_image }}" alt="" width="40px">
</td>
<td>
<a href="{{ route('category.delete', $categoryy->id) }}" class="btn btn-danger">Delete</a>
<a href="{{ route('category.edit', $categoryy->id) }}" class="btn btn-success">Edit</a>

</td>

</tr>

@endforeach



                </table>
            </div>
        </div>

</div>
       @endcan
    </div>






@endsection
