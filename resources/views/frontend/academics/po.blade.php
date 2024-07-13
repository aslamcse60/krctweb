@extends('layouts.frontend.master')
@section('title','Programmes Offered')
@section('content')
<div class="container-fluid bg-light shadow p-4 mb-4 rounded">
    <h4 style="color:#1254A0;" class="d-inline-block mx-3"><b>Programmes Offered</b></h4>
    <p class="float-end d-inline-block hdp"><b><a href="/" style="color: black;">Home</a> > <a href="" style="color: black;">Academics</a> > <a href="" style="color: #1254A0;">Programmes Offered</a></b></p>
    <br><br class="d-md-none"><br class="d-md-none">
</div>
<div class="container">
    <div class="row pt-3">
        <div class="col-lg-4 btn1 d-flex justify-content-center pb-3">
            <a class="btn btn-primary btn-lg fw-bold" style="background-color:#ede65a;border-radius:20px;border-style:none;color:#1254A0;" data-bs-toggle="collapse" role="button" href="#collapseOne">
                Undergraduate-UG
            </a>
        </div>
        <div class="col-lg-4 btn1 d-flex justify-content-center pb-3">
            <a class="btn btn-primary btn-lg fw-bold" style="background-color:#ede65a;border-radius:20px;border-style:none;color:#1254A0;" data-bs-toggle="collapse" role="button" href="#collapseTwo">
                Postgraduate-PG
            </a>
        </div>
        <div class="col-lg-4 btn1 d-flex justify-content-center pb-3">
            <a class="btn btn-primary btn-lg fw-bold" style="background-color:#ede65a;border-radius:20px;border-style:none;color:#1254A0;" data-bs-toggle="collapse" role="button" href="#collapseThree">
                Research-PhD
            </a>
        </div>
    </div>
</div>
<div id="root">
    <div class="container">
        <div id="collapseOne" class="collapse show" data-bs-parent="#root">
            <div class="pt-5">
                <div class="row">
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/UG/civil.png')}}" height="8%" width="7%"/>&emsp; B.E - Civil Engineering</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/UG/cse.png')}}" height="8%" width="7%"/>&emsp; B.E - Computer Science and Engineering</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/UG/eee.png')}}" height="8%" width="7%"/>&emsp; B.E - Electrical and Electronics Engineering</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/UG/ece.png')}}" height="8%" width="7%"/>&emsp; B.E - Electronics and Communication Engineering</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/UG/mechanical.png')}}" height="8%" width="7%"/>&emsp; B.E - Mechanical Engineering</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/UG/ai & ml.png')}}" height="8%" width="7%"/>&emsp; B.Tech - Artificial Intelligence & Machine Learning</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/UG/ai & ds.png')}}" height="8%" width="7%"/>&emsp; B.Tech - Artificial Intelligence & Data Science</div></div>
                </div>
                <br><br>
            </div>
        </div>
        <div id="collapseTwo" class="collapse" data-bs-parent="#root">
            <div class="pt-5">
                <div class="row">
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/PG/cse.png')}}" height="8%" width="7%"/>&emsp; M.E - Computer Science and Engineering</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/PG/Embedded system.png')}}" height="8%" width="7%"/>&emsp; M.E - Embedded Systems Technologies</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/PG/Power Electronics.png')}}" height="8%" width="7%"/>&emsp; M.E - Power Electronics & Drives</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/PG/vlsi.png')}}" height="8%" width="7%"/>&emsp; M.E - VLSI Design</div></div>
                </div>
                <br><br>
            </div>
        </div>
        <div id="collapseThree" class="collapse" data-bs-parent="#root">
            <div class="pt-5">
                <div class="row">
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/PhD/cse.png')}}" height="7%" width="7%"/>&emsp; PhD - Computer Science and Engineering</div></div>
                    <div class="col-lg-6"><div class="border shadow w-auto p-3 mb-5 rounded fw-bold fs-5"><img src="{{url('images/PhD/ece.png')}}" height="7%" width="7%"/>&emsp; PhD - Electronics and  Communication Engineering</div></div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>

@endsection
