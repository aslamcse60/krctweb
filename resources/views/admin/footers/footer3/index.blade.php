@extends('layouts.master')

@section('title','Footer3')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Footer
                <a href="{{ url('admin/footer3/create')}}" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add footer3
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
                    @foreach ($footer3 as $footer )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$footer->name}}</td>

                            <td>{{$footer->link}}</td>
                            <td>{{$footer->status=='0' ? 'Visible':'Hidden'}}</td>
                            <td>
                                <a href="{{url('admin/footer3/'.$footer->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{url('admin/footer3/'.$footer->id.'/delete')}}"
                                    onclick="return confirm('Are you sure you want to delete this footer?');"
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
