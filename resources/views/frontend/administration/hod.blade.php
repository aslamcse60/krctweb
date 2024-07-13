@extends('layouts.frontend.master')
@section('title','HOD')
@section('content')
<div class="container-fluid bg-light shadow p-4 mb-4 rounded">
    <h4 style="color:#1254A0;" class="d-inline-block "><b>Head Of The Departments</b></h4>
    <p class="float-end d-inline-block hdp "><b><a href="/" style="color: black;">Home</a> > <a href="" style="color: black;">About Us</a> > <a href="" style="color: #1254A0;">Head Of The Departments</a></b></p><br><br class="d-md-none"><br class="d-md-none">

</div>

<div class="container pt-3">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-7 py-3 d-flex" id="hd">
        <div class="card hod" style="background-color: #ECF3FF;">
        <img src={{URL::asset("images/hod.jpeg")}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>Department of Computer Science and Engineering</b></h5><hr>
            <p class="card-text"><b id="hn">Dr.A.Delphin Carolina Rani,</b> M.E,Ph.D.,</p>
            <p><b>Associate Professor and Head</b></p>
            <p><b>Email id: hodcse@krct.ac.in</b></p>
        </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-7 py-3 d-flex" id="hd">
        <div class="card hod" style="background-color: #F3F3F3;">
        <img src={{URL::asset("images/hod.jpeg")}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>Department of Civil Engineering</b></h5><hr>
            <p class="card-text"><b id="hn">Dr.S.Sujatha,</b> M.E,M.BA,Ph.D.,</p>
            <p><b>Professor and Head</b></p>
            <p><b>Email id: hodcivil@krct.ac.in</b></p>
        </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-7 py-3 d-flex" id="hd">
        <div class="card hod" style="background-color: #FFFCF0;">
        <img src={{URL::asset("images/hod.jpeg")}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>Department of Electrical & Electronics Engineering</b></h5><hr>
            <p class="card-text"><b id="hn">Mr. A.T.Sankara Subramanian, </b> M.E, (Ph.D).,</p>
            <p><b>Assistant Professor and Head</b></p>
            <p><b>Email id: hodeee@krct.ac.in</b></p>
        </div>
        </div>
    </div>
    <br><br>
    <div class="col-lg-4 col-md-6 col-sm-7 py-3 d-flex" id="hd">
        <div class="card hod" style="background-color: #F9EFEF;">
            <img src={{URL::asset("images/hod.jpeg")}} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><b>Department of Electrical & Communication Engineering</b></h5><hr>
                <p class="card-text"><b id="hn">Dr. S.Syedakbar,</b> M.E,Ph.D.,</p>
                <p><b>Associate Professor and Head</b></p>
                <p><b>Email id: hodece@krct.ac.in</b></p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-7 py-3 d-flex" id="hd">
        <div class="card hod" style="background-color: #FFF2E6;">
        <img src={{URL::asset("images/hod.jpeg")}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>Department of Mechanical Engineering</b></h5><hr>
            <p class="card-text"><b id="hn">Dr. R.Yokeshwaran,</b> M.Tech,Ph.D.,</p>
            <p><b>Assistant Professor and Head</b></p>
            <p><b>Email id: hodmech@krct.ac.in</b></p>
        </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-7 py-3 d-flex" id="hd">
        <div class="card hod" style="background-color: #E9F6FF;">
        <img src={{URL::asset("images/hod.jpeg")}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>Department of Artificial Intelligence</b></h5><hr>
            <p class="card-text "><b id="hn">Dr.T.Avudaiappan,</b> M.E,Ph.D.,</p>
            <p><b>Associate Professor and Head</b></p>
            <p><b>Email id: hodai@krct.ac.in</b></p>
        </div>
        </div>
    </div>
    <br><br>
    <div class="col-lg-4 col-md-6 col-sm-7 py-3 d-flex" id="hd">
        <div class="card hod" style="background-color: #EFFFEA;">
        <img src={{URL::asset("images/hod.jpeg")}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>Department of Science and Humanities</b></h5><hr>
            <p class="card-text"><b id="hn">Mr. S.Dinesh,</b> M.E., (Ph.D).,</p>
            <p><b>Assistant Professor and Head</b></p>
            <p><b>Email id: hodeee@krct.ac.in</b></p>
        </div>
        </div>
    </div>
    </div><br><br>
</div>
@endsection
