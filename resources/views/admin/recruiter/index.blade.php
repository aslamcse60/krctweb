@extends('layouts.master')

@section('title','Our Recruiters')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Our Recruiters
                <a href="{{ url('admin/recruiter/create')}}" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add Recruiter
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
                        <th>Company</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recruiters as $recruiter)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$recruiter->title}}</td>
                        <td>
                            <img src="{{ asset("$recruiter->image")}}" style="width:70px;height:70px" alt="Slider">
                        </td>
                        <td>{{$recruiter->status=='0' ? 'Visible':'Hidden'}}</td>
                        <td>
                            <a href="{{url('admin/recruiter/'.$recruiter->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="{{url('admin/recruiter/'.$recruiter->id.'/delete')}}"
                                onclick="return confirm('Are you sure you want to delete this recruiter?');"
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

