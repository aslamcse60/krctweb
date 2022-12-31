@extends('layouts.master')

@section('title','Feedback')

@section('content')

<div class="container-fluid px-4 py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Feedback
                        <a href="{{ url('admin/feedback/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            <i class="fa-regular fa-square-plus"></i> Add Feedback
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <table id="myDataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedback as $feedback )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <img src="{{ asset("$feedback->image")}}" style="width:70px;height:70px" alt="Feedback">
                                    </td>
                                    <td>{{$feedback->description}}</td>
                                    <td>{{$feedback->name}}</td>
                                    <td>{{$feedback->status=='0' ? 'Visible':'Hidden'}}</td>
                                    <td>
                                        <a href="{{url('admin/feedback/'.$feedback->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="{{url('admin/feedback/'.$feedback->id.'/delete')}}"
                                            onclick="return confirm('Are you sure you want to delete this slider?');"
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
    </div>
</div>

@endsection
