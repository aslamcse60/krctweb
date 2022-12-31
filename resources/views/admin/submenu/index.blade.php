@extends('layouts.master')

@section('title','Sub Menu')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Sub Menu
                <a href="{{ url('admin/submenu/create')}}" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add Sub-Menu
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
                        <th>Menu</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submenus as $submenu)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$submenu->name}}</td>
                        @foreach ($menus as $menu)
                        @if ($submenu->menu_item_id==$menu->id)
                        <td>{{$menu->name}}</td>
                        @endif
                        @endforeach
                        <td>{{$submenu->link}}</td>
                        <td>{{$submenu->status}}</td>
                        <td>
                            <a href="{{url('admin/submenu/'.$submenu->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="{{url('admin/submenu/'.$submenu->id.'/delete')}}"
                                onclick="return confirm('Are you sure you want to delete this submenu?');"
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

