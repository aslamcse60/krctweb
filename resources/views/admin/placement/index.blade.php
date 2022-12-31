@extends('layouts.master')

@section('title','Top Placements')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Top Placements
                <a href="{{ url('admin/placement/create')}}" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add Placement
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
                        <th>Department</th>
                        <th>Company</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($placements as $placement)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$placement->name}}</td>
                        <td>
                            <img src="{{ asset("$placement->image")}}" style="width:70px;height:70px" alt="Slider">
                        </td>
                        <td>{{$placement->department}}</td>
                        <td>{{$placement->company}}</td>
                        <td>{{$placement->status=='0' ? 'Visible':'Hidden'}}</td>
                        <td>
                            <a href="{{url('admin/placement/'.$placement->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="{{url('admin/placement/'.$placement->id.'/delete')}}"
                                onclick="return confirm('Are you sure you want to delete this placement?');"
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

