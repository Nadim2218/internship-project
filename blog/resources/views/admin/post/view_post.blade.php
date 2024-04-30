ex
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
    <div class="card">
        <div class="card-header">
            <h3>Post List</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>CATEGORY</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>TAGS</th>
                    <th>IMAGE</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($mypost as $sl=>$post)
                <tr>
                    <td>{{ $sl+1 }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
 </div>

@endsection
