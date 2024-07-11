@extends('layouts.master')

@section('title','View Users')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Users
                <a href="{{ url('admin/users')}}" class="btn btn-danger float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label>Full Name</label>
                <p class="form-control">{{$user->name}}</p>
            </div>
            <div class="mb-3">
                <label>Email ID</label>
                <input type="email" class="form-control" value="{{$user->email}}">
            </div>
            <div class="mb-3">
                <label>Updated at</label>
                <p class="form-control">{{$user->updated_at->format('d/m/Y')}}</p>
            </div>

            <form action="{{url('admin/update-user/'.$user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Role as</label>
                    <select name="role_as" class="form-control form-select">
                        <option value="1" {{$user->role_as=='1' ? 'selected':''}}>Admin</option>
                        <option value="0" {{$user->role_as=='0' ? 'selected':''}}>User</option>
                        <option value="2" {{$user->role_as=='2' ? 'selected':''}}>Coordinator</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Update Role</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
