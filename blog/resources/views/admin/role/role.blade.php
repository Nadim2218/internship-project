@extends('layouts.dashboard.dashboardmaster')

@section('content')
<br>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Role</li>
    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
<div class="card">
    <div class="card-header">
        <h3>Role List</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>SL</th>
                <th>Role</th>
                <th>Permission</th>
                <th>Action</th>

            </tr>
            @foreach ($roles as $sl=>$role)
    <tr>
        <td>{{ $sl+1 }}</td>
        <td>{{ $role->name }}</td>
        <td>@foreach ($role->getAllPermissions() as $permission)
  <span class="badge badge-dark" style="color: black">{{ $permission->name }},</span>
        @endforeach</td>
        <td></td>

    </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3>User list List</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>SL</th>
                <th>User</th>
                <th>Role</th>
                <th>Permission</th>
                <th>Action</th>

            </tr>
            @forelse ($users as $sl=>$user)
    <tr>
        <td>{{ $sl+1 }}</td>
        <td>{{ $user->name }}</td>
        <td>
            @forelse ($user->getRoleNames() as $role)
<span class="badge badge-success " style="color: black">{{ $role}}</span>
@empty
Not Assigned
            @endforelse
            </td>
            <td>
                @forelse ($user->getAllPermissions() as $permission)
<span class="badge badge-success " style="color: black">{{ $permission->name}}</span>
@empty
no
                @endforelse
            </td>
        <td>
            <a href="{{ route('edit.user.role.permission',$user->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('remove.role',$user->id) }}" class="btn btn-danger">Remove</a>

        </td>

    </tr>
            @endforeach
        </table>
    </div>
</div>


        </div>
        <div class="col-lg-4">

                    <div class="card">
                        <div class="card-header">
                            <h3>Add Permission</h3>
                        </div>
                        <div class="card-body">
                         <form action="{{ route('permission.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="permission_name">
                        </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add permission</button>
                        </div>
                    </form>
                        </div>
                    </div>
            <div class="card">
                <div class="card-header">
                    <h3>Add role</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="role_name" placeholder="Role Name">
                        </div>
                        <div class="mt-3">

                            <h5 class="font-size-14 mb-2">Permission</h5>
                           <div class="form-group">

                            @foreach ($permissions as $permission)
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" name="permission[]" type="checkbox" value="{{ $permission->name }}">
                              {{ $permission->name }}
                               <i class="input-frame"></i> </label>
                            </div>
                            @endforeach
                        </div>


                        </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add role</button>
                        </div>
                    </form>
                </div>
            </div>


             <div class="card">
                <div class="card-header">
                    <h3>Assign Role role</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('assign.role') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">User</label>
                           <select name="user_id" class="form-control" >
                            <option value="">--Select User--</option>
                            @foreach ($users as $user)
                       <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                           </select>
                        </div>
                           {{--  <div class="mb-3">  --}}
                            <label for="">Roles</label>
                            <select name="role_id" class="form-control" >
                                <option value="">--Select User--</option>
                                @foreach ($roles as $role)
                           <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
