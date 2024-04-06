@extends('layouts.dashboard.dashboardmaster')

@section('content')

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tag</li>
    </ol>
</nav>

<div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
             <h3>Card Header</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('tag.store') }}" method="POST">
               @csrf
                   <div class="form-group row">
                    @if(session('tagdone'))
                    <div class="alert alert-success">
                        {{ (session('tagdone')) }}
                    </div>
                    @endif
                                <label class="col-sm-3 col-form-label">Tag Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Tag Name" name="tag_name">
                                    @error('tag_name')
                                    <strong class="text-danger">{{ $message }}</strong>

                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </div>
                            </div>


                </form>
            </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Tag list</h3>
            </div>
            <div class="card-body">
                @if(session('tagdelete'))
                <div class="alert alert-success">
                    {{ (session('tagdelete')) }}
                </div>
                @endif
                <table class="table table-striped">
                    <tr>
                    <th>SL</th>
                        <th>Tag</th>
                        <th>Action</th>

                    </tr>
                   @foreach ($tags as $sl=>$tag)
                   <tr>
                    <td>{{ $sl+1 }}</td>
                    <td>{{ $tag->tag_name }}</td>
                    <td><a href="{{ route('tag.delete', $tag->id) }}" class="btn btn-danger">Delete</a></td>

                </tr>
                   @endforeach
            </table>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection
