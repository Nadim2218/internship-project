@extends('layouts.dashboard.dashboardmaster')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Role</li>
    </ol>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit User Permission</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('permission.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="user_id" value="{{ $users->id }}">
                        <input type="text" readonly value="{{ $users->name }}" class="form-control">
                        <input type="text" readonly value="{{ $users->getRoleNames() }}" class="form-control">

                    </div>
                    <div class="mb-3">
                        <div class="form-group">

                            @foreach ($permissions as $permission)
                            <div class="form-check">
                                <label class="form-check-label">
                                <input {{ ($users->hasPermissionTo($permission->name))?'checked':''}} type="checkbox" class="form-check-input" name="permission[]"  value="{{ $permission->name }}">
                              {{ $permission->name }}
                               <i class="input-frame"></i> </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update Permission</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
