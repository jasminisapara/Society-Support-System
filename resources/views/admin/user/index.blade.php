@extends('layouts.master')
@section('title','View Users')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">


        <div class="card-header">
            <h4>View Users
                <a href="add-user" class="btn btn-primary float-end">Add Users</a>
            </h4>
        </div>
        <div class="card-body">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="table-responsive">

        <table id="myDataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->is_admin == '1' ? 'Admin':'User' }}</td>
                    <td>
                        <a href="{{ url('admin/user/' . $item->id) }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    </div>
</div>

@endsection
