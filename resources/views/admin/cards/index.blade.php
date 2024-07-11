@extends('layouts.master')

@section('title','Why KRCT')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Cards
                <a href="{{ url('admin/cards/create')}}" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add Cards
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
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cards as $slider )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$slider->title}}</td>
                            <td>
                                <img src="{{ asset("$slider->image")}}" style="width:70px;height:70px" alt="Slider">
                            </td>
                            <td>{{$slider->description}}</td>
                            <td>{{$slider->status=='0' ? 'Visible':'Hidden'}}</td>
                            <td>
                                <a href="{{url('admin/cards/'.$slider->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{url('admin/cards/'.$slider->id.'/delete')}}"
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
