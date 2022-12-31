@extends('layouts.frontend.master')
@section('title','Vision, Mission and Quality Policy')
@section('content')
<div class="container-fluid bg-light shadow p-4 mb-4 rounded">
    <h4 style="color:#1254A0;" class="d-inline-block mx-3"><b>Vision, Mission and Quality Policy</b></h4>
    <p class="float-end d-inline-block hdp "><b><a href="/" style="color: black;">Home</a> > <a href="" style="color: black;">About Us</a> > <a href="" style="color: #1254A0;">Vision, Mission and Quality Policy</a></b></p><br><br class="d-md-none"><br class="d-md-none">
</div>
<div class="container">

    <p class="pt-2">{!!$vision[0]->description!!}</p>
</div>
@endsection

