@extends('layouts.frontend.master')
@section('title','Principal')
@section('content')
<div class="container-fluid bg-light shadow p-4 mb-4 rounded">
    <h4 style="color:#1254A0;" class="d-inline-block mx-3"><b>Principal</b></h4>
    <p class="float-end d-inline-block hdp "><b><a href="/" style="color: black;">Home</a> > <a href="" style="color: black;">Administration</a> > <a href="" style="color: #1254A0;">Principal</a></b></p><br><br class="d-md-none"><br class="d-md-none">
</div>
<div class="d-flex justify-content-center pt-4">
    <div class="card text-center text-white" style="width: 32rem; height:100%; background-color:#3895D3">
        <img class="card-img-top" src={{URL::asset("images\principal.jpg")}} alt="Card image cap">
        <div class="card-body">
          <p class="card-title h5">Dr.N.Vasudevan</p>
          <p class="card-text">Principal</p>
        </div>
    </div>
</div>
<div class="container"><br>
    <p class="pt-3"><b style="color: #1254A0">Dr.N.Vasudevan – Principal,</b>  is a noted academician bringing in 28 years of experience in teaching and research. He has served numerous positions in his academic career which includes Principal, Dean, Professor, Member of Governmental bodies such as NBA, NAAC etc. He is a renowned teacher and has taught UG and PG courses in the area of Electronics, Communication and Control theory. <br><br>He has authored over 56 publications at internationally well-known conferences and journals. Five PhD scholars have completed their thesis under his guidance. He has served on national and international program committees, including conference session chair, jury etc. He has to his credit completion of several turnkey projects for industrial automation and funded research projects. He has visited several countries for academic collaboration for faculty, student exchanges and professional training for industries.<br><br>
        He has 2 granted patents on his innovative idea on High speed switches for Broadband network, 3 published patents and he owns many copyrights includes on Higher Education Ranking , Accreditation, OBE Practices and Outcome Based Assessments. He is currently working in innovative teaching pedagogy on student’s centric learning. His research interests are Artificial Intelligence, Machine Learning applications for Industrial Automation, Neural Networks.</p><br><br>
</div>

@endsection
