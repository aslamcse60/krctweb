@extends('layouts.master')

@section('title','View Users')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>View Users</h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <table id="myDataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item )
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                        @if ($item->role_as=='1')
                            Admin
                        @elseif ($item->role_as=='2')
                            Coordinator
                        @else
                            User
                        @endif<td>
                            <a href="{{ url('admin/user/'.$item->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="{{ url('admin/delete/'.$item->id)}}" onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
