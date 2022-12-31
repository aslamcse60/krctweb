@extends('layouts.master')

@section('title','Vision, Mission and Quality Policy')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Vision, Mission and Quality Policy</h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <table id="myDataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vision as $slider )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$slider->description}}</td>
                            <td>
                                <a href="{{url('admin/vision/'.$slider->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
