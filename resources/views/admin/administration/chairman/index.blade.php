@extends('layouts.master')

@section('title','Chairman')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Chairman
                <a href="{{ url('admin/administration/chairman/create')}}" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add Chairman
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
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chairman as $cm )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$cm->name}}</td>
                            <td>
                                <img src="{{ asset("$cm->image")}}" style="width:70px;height:70px" alt="Slider">
                            </td>
                            <td>{{$cm->description}}</td>
                            <td>
                                <a href="{{url('admin/administration/chairman/'.$cm->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{url('admin/administration/chairman/'.$cm->id.'/delete')}}"
                                    onclick="return confirm('Are you sure you want to delete this card?');"
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
