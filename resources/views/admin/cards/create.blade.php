@extends('layouts.master')
@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Card
                <a href="{{ url('admin/cards')}}" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{url('admin/cards/create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea type="text" name="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" style="width:25px;height:25px">
                    Checked=Hidden,Unchecked=Visible
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-regular fa-square-check"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
