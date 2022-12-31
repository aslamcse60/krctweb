@extends('layouts.master')

@section('title','Our Gallery')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Our Gallery
                <a href="{{ url('admin/gallery/create')}}" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add Gallery
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$gallery->title}}</td>
                        <td>
                            <img src="{{ asset("$gallery->image")}}" style="width:70px;height:70px" alt="gallery">
                        </td>
                        <td>{{$gallery->status=='0' ? 'Visible':'Hidden'}}</td>
                        <td>
                            <a href="{{url('admin/gallery/'.$gallery->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="{{url('admin/gallery/'.$gallery->id.'/delete')}}"
                                onclick="return confirm('Are you sure you want to delete this gallery?');"
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

