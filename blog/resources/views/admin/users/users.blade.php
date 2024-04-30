@extends('layouts.dashboard.dashboardmaster')

@section('content')
<br>
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">User List</li>
    </ol>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            @can('show_user_list')
            <div class="card">
                <div class="card-header">
                    @if(session('userdelete'))
                    <div class="alert alert-success">
                        {{ (session('userdelete')) }}
                    </div>
                    @endif
                    <h3>Users List <span class="float-end">Total: {{ $total_user }}</span></h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>ACTION</th>


                        </tr>

                        @foreach ($users as $sl=>$user)
                        <tr>
                            <td>{{ $sl+1 }}</td>
                            <td> {{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            @can('user_delete')
                            <td>
                                <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                            @endcan


                        </tr>

                   @endforeach

                    </table>
                </div>
            </div>
            @endcan

        </div>
    </div>
</div>
@endsection
