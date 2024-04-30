@extends('layouts.dashboard.dashboardmaster')

@section('content')
<br>
<br>

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Post</li>
        </ol>
    </nav>


<div class="container">
    <div class="card">
        <div class="card-header m-auto">
            <h3>Add New Post</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="mb-3">
                      <select name="category_id" class="form-control">
                        <option value="">-- Select category --</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category -> category_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Post Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="">Post Description</label>
                       <textarea name="desp" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3 ">
                       <label for="">Select Tags</label>
                       <div class="form-group d-flex">

                        @foreach ($tags as $tag)
                        <div class="form-check">
                            <label class="form-check-label">
                            <input class="form-check-input" name="tag[]" type="checkbox" value="{{ $tag->id }}">
                          {{ $tag->tag_name }}
                           <i class="input-frame"></i> </label>
                        </div>
                        @endforeach
                    </div>

                    </div>

                    <div class="mb-3">
                        <label for="">Feature Image</label>
                        <input type="file" class="form-control" name="feat_image">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary form-control">Add Post</button>
                    </div>
                </div>
            </div>
           </form>
        </div>
    </div>
</div>





    @endsection
