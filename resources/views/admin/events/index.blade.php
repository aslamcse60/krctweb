@extends('layouts.master')

@section('title','Events')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Events
                <a href="{{ url('admin/events/create')}}" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add events
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
                        <th>Date</th>
                        <th>Month</th>
                        <th>Title</th>
                        <th>Time</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $slider )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$slider->date}}</td>
                            <td>{{$slider->month}}</td>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->time}}</td>
                            <td>{{$slider->link}}</td>
                            <td>{{$slider->status=='0' ? 'Visible':'Hidden'}}</td>
                            <td>
                                <a href="{{url('admin/events/'.$slider->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{url('admin/events/'.$slider->id.'/delete')}}"
                                    onclick="return confirm('Are you sure you want to delete this event?');"
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
