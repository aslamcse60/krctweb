@extends('layouts.frontend.master')
@section('title','About Campus')
@section('content')
<div class="container-fluid bg-light shadow p-4 mb-4 rounded">
    <h4 style="color:#1254A0;" class="d-inline-block mx-3"><b>About Campus</b></h4>
    <p class="float-end d-inline-block hdp "><b><a href="/" style="color: black;">Home</a> > <a href="" style="color: black;">About Us</a> > <a href="" style="color: #1254A0;">About Campus</a></b></p><br><br class="d-md-none"><br class="d-md-none">
</div>
<div class="container-fluid pt-4">
    <div class="row mx-3">
        <div class="col-lg-4 col-md-12 col-sm">
            <img src={{URL::asset("images/krct-gate.jpg")}} class="about-img" style="height: 20rem; width:100%;">
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 px-5">
            <p class="para">K.Ramakrishnan College of Technology, Tiruchirappalli, situated in the famous temple town Samayapuram, is a premiere organization striving to bring in constructive transformation in young aspirants by imparting technical, behavioral and value based education where we focus on empowering the students to get placed in World Class Corporate and introducing rich corporate culture to meet the hurdles and challenges of corporate sector and also augment the knowledge of students, foster their talents and broaden their outlook towards life by enhancing their personality, communication and bringing in entrepreneurial skills. We believe in educating, enhancing and empowering the student community to face the challenges of tomorrow and to be the front-runners in job market. We, at K. Ramakrishnan College of Technology, ensure that our students are equipped with the skill sets required to surmount the challenges of the competitive world.</p>
        </div>
    </div>
</div>
<div class="container-fluid p-4"><br>
    <div class="mx-3">
        <h3 style="color: #1254A0"><b>Awards & Recognitions</b></h3><br>
        <marquee width="100%" direction="up" height="250px" OnMouseOver="this.stop();" OnMouseOut="this.start();">
            <p><img src={{URL::asset("images/img2.jpeg")}} class="rounded img-fluid" style="width: 5%;height:5%">&emsp;<b>Best Technical Institute Award Received From Apeta</b></p><br>
            <p><img src={{URL::asset("images/img2.jpeg")}} class="rounded img-fluid" style="width: 5%;height:5%">&emsp;<b>35 Mous Signed With Reputed Organizations</b></p><br>
            <p><img src={{URL::asset("images/img2.jpeg")}} class="rounded img-fluid" style="width: 5%;height:5%">&emsp;<b>Awarded As "Best Promising College For Engineering In India" By Education Post Magazine</b></p>
        </marquee>
    </div>
</div>
<div class="container-fluid" style="background-color: #3895D3;"><br>
        <div class="row">
            <div class="col-lg-3">
                <h5 class="text-white text-center">ESTABLISHED</h5>
                <h5 class="text-center" style="color: #cff6a9">2008</h5>
            </div>
            <div class="col-lg-3">
                <h5 class="text-white text-center">FACULTY</h5>
                <h5 class="text-center" style="color: #cff6a9">300+</h5>
            </div>
            <div class="col-lg-3">
                <h5 class="text-white text-center">STUDENTS</h5>
                <h5 class="text-center" style="color: #cff6a9">4500+</h5>
            </div>
            <div class="col-lg-3">
                <h5 class="text-white text-center">UG & PG PROGRAMMES</h5>
                <h5 class="text-center" style="color: #cff6a9">20+</h5>
            </div>

        </div>
<br>
</div>
<div class="container-fluid p-4"><br>
    <div class="mx-3">
        <h3 style="color: #1254A0"><b>Management Team</b></h3><br>
        <table  class="table table-bordered">
            <tr >
                <th><strong>NAME</strong></th>
                <th><strong>DESIGNATION</strong></th>
            </tr>
            <tr>
                <td >Dr.K.Ramakrishnan</td>
                <td>Chairman</td>
            </tr>
            <tr >
                <td>Thiru.M.Kumarsamy</td>
                <td>Trustee</td>
            </tr>
            <tr >
                <td>Mrs.K.Lakshmi</td>
                <td>Trustee</td>
            </tr>
            <tr>
                <td>Mrs. Vijaya Ramakrishnan</td>
                <td>Trustee</td>
            </tr>

    </table>
    </div>
</div>
@endsection
