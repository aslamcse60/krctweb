@extends('layouts.master')

@section('title','News')

@section('content')

<div class="container-fluid px-4 py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>News
                        <a href="{{ url('admin/news/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            <i class="fa-regular fa-square-plus"></i> Add News</a>
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
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $news )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$news->description}}</td>
                                    <td>
                                        <img src="{{ asset("$news->image")}}" style="width:70px;height:70px" alt="News">
                                    </td>
                                    <td>{{$news->status=='0' ? 'Visible':'Hidden'}}</td>
                                    <td>
                                        <a href="{{url('admin/news/'.$news->id.'/edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="{{url('admin/news/'.$news->id.'/delete')}}"
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
