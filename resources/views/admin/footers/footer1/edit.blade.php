@extends('layouts.master')
@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Footer
                <a href="{{ url('admin/footer1/')}}" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{url('admin/footer1/'.$footer1->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$footer1->name}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Link</label>
                    <input type="text" name="link" value="{{$footer1->link}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" {{$footer1->status=='1' ? 'checked':''}} style="width:25px;height:25px">
                    Checked=Hidden,Unchecked=Visible
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
