@extends('layouts.master')
@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Sub Menu
                <a href="{{ url('admin/submenu')}}" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{url('admin/submenu')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Sub Menu Name</label>
                    <input type="text" name="name" class="form-control">
                    @error('name') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mb-3">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control">
                    @error('link') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mb-3">
                    <label>Select Main Menu Item</label>
                    <select class="form-control form-select" required name="menu_item_id">
                        @foreach ($menuItems as $item )
                        <option value="{{$item->id}}">
                            {{$item->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <select class="form-control" required name="status">
                        <option value="Enabled">
                            Enabled
                        </option>
                        <option value="Disabled">
                            Disabled
                        </option>

                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-regular fa-square-check"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
