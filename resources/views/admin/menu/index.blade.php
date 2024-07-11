@extends('layouts.master')

@section('title','Menu')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Menu
                <a href="{{ url('admin/menu/create')}}" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add Menu
                </a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <table id="myDataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$menu->name}}</td>
                        <td>{{$menu->link}}</td>
                        <td>{{$menu->status}}</td>
                        <td>
                            <a href="{{url('admin/menu/'.$menu->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="{{url('admin/menu/'.$menu->id.'/delete')}}"
                                onclick="return confirm('Are you sure you want to delete this menu?');"
                                class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

