@extends('layouts.dashboard.dashboardmaster');


@section('content')
<br>
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>
<br>
<div class="row">
    <div class="col-lg-6">
        <h2>Name:{{ auth()->user()->name }}</h2>
        <h4>Email:{{ auth()->user()->email }}</h4>

    </div>
</div>
<br>
<br>
@if($errors->any())
<div class="alert alert-danger">
  <ul>
      @if($errors->any())
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>

      @endforeach

      @endif


  </ul>
  @endif
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Name Change</h4>
            </div>
            <div class="card-body">

                <div class="basic-form">
                    <form action="{{ url('/name/change') }}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name Change</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Change Name" name="new_name">
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Change Name</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <form action="{{ url('/email/change') }}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email Change</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Change email" name="new_email">
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Change Email</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Vertical Form</h4>
            </div>
            <div class="card-body">
            @if(session('passwordsuccess'))
            <div class="alert alert-success">
                {{ (session('passwordsuccess')) }}
            </div>
            @endif
        </div>


                <div class="basic-form">
                    <form action="{{ url('/password/change') }}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Old Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="old Password" name="old_password">
                            </div>
                            <label class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="New Password" name="password">
                            </div>
                            <label class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="confirm Password" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

                @if(session('photosuccess'))
                <div class="alert alert-success">
                    {{ (session('photosuccess')) }}
                </div>
                @endif

                @if(session('photoerr'))
                <div class="alert alert-success">
                    {{ (session('photoerr')) }}
                </div>
                @endif

            <div class="card-header">
                <label class="col-sm-3 col-form-label">Profile Picture</label>
            </div>
            <div class="card-body">

                @if('auth()->user->profile_photo')
                <img src="{{ asset('uploads/profile_photos') }}/{{ auth()->user()->profile_photo }}" class="img-fluid rounded-circle" width="50px"  alt="">

                @else
                <img src="{{ asset('dashboard_assets') }}/public/dashboard_assets/images/default_profile_photo.png" class="img-fluid rounded-circle"  width="20px"  alt="">
                @endif
                <div class="basic-form custom_file_input">
                    <form action="{{ url('/profile/photo/upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="profile_photo">

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Upload profile Picture</button>
                            </div>

                        </div>
        </div>
    </div>
</div>


@endsection
