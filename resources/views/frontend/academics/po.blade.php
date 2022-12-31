@extends('layouts.frontend.master')
@section('title','Programmes Offered')
@section('content')
<div class="container-fluid bg-light shadow p-4 mb-4 rounded">
    <h4 style="color:#1254A0;" class="d-inline-block mx-3"><b>Programmes Offered</b></h4>
    <p class="float-end d-inline-block hdp "><b><a href="/" style="color: black;">Home</a> > <a href="" style="color: black;">Academics</a> > <a href="" style="color: #1254A0;">Programmes Offered</a></b></p><br><br class="d-md-none"><br class="d-md-none">
</div>
<div class="container">
    <div class="row pt-3">
        <div class="col-lg-4 btn1 d-flex justify-content-center pb-3">
          <a class="btn btn-primary btn-lg fw-bold" style="background-color:#ede65a;border-radius:20px;border-style:none;color:#1254A0;" data-bs-toggle="collapse" role="button" href="#collapseOne" >
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
                <div class="pt-4">
                    <div class="row">
                        <!--<div class="col-lg-6 d-flex justify-content-center">
                            <ul>
                                <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="Civil.PNG" height="10%" width="10%"/>&emsp; B.E - Civil Engineering</div>
                            </ul>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="Civil.PNG" height="10%" width="10%"/>&emsp; B.E-Computer Science and Engineering</div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="Civil.PNG" height="10%" width="10%"/>&emsp; B.E - Electrical and Electronics Engineering</div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="Civil.PNG" height="10%" width="10%"/>&emsp; B.E-Mechanincal Engineering</div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="Civil.PNG" height="10%" width="10%"/>&emsp; B.E - Electronics and Comuinication Engineering</div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="Civil.PNG" height="10%" width="10%"/>&emsp; B.Tech - Artificial Intelligence & Machine Learning</div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="Civil.PNG" height="10%" width="10%"/>&emsp; B.Tech-Artificial Intelligence & Data Science</div>
                        </div>-->
                        <div class="col">
                            <ul>
                                <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="Civil.PNG" height="10%" width="10%"/>&emsp; B.E - Civil Engineering</div>
                                <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="eee.PNG" height="10%" width="10%"/>&emsp; B.E - Electrical and Electronics Engineering</div>
                                <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="ece.PNG" height="10%" width="10%"/>&emsp; B.E - Electronics and Comuinication Engineering</div>
                                <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="ai & ml.PNG" height="10%" width="10%"/>&emsp; B.Tech - Artificial Intelligence & Machine Learning</div>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="cse.PNG" height="10%" width="10%"/>&emsp; B.E-Computer Science and Engineering</div>
                                <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="mechanical.PNG" height="10%" width="10%"/>&emsp; B.E-Mechanincal Engineering</div>
                                <div class="shadow w-auto p-4 mb-5 rounded fw-bold"><img src="ai & ds.PNG" height="10%" width="10%"/>&emsp; B.Tech-Artificial Intelligence & Data Science</div>
                            </ul>
                        </div>
                    </div>
                    <br><br>
                </div>
		  </div>
          <div id="collapseTwo" class="collapse" data-bs-parent="#root">
			  <div class="card-body">
				<div class="p-4">
			  <div class="row ">
			<div class="col">
			<ul>
			<li><div class="shadow w-auto h-25 p-3 mb-5 bg-body rounded fw-bold cc"><img src="cse (2).PNG" heigth="10%" width="10%"/>&nbsp &nbsp &nbsp M.E-Computer Science and Engineering</div></li>
			<li><div class="shadow w-auto h-25 p-3 mb-5 bg-body rounded fw-bold cc"><img src="Power Electronics.PNG" heigth="10%" width="10%"/>&nbsp &nbsp &nbsp M.E-Power Electronics & Drives</div></li>

			</ul></div>
			<div class="col">
			<ul>
			<li><div class="shadow w-auto h-25 p-3 mb-5 bg-body rounded fw-bold cc"><img src="Embedded system.PNG" heigth="10%" width="10%"/>&nbsp &nbsp &nbsp M.E-Embedded Systems Technologies</div></li>
			<li><div class="shadow w-auto h-25 p-3 mb-5 bg-body rounded fw-bold cc"><img src="vlsi.png" heigth="10%" width="10%"/>&nbsp &nbsp &nbsp M.E-VLSI Design</div></li>

			</ul></div>
			</div>

				<br><br>
			</div>
			  </div>
			</div><div id="collapseThree" class="collapse" data-bs-parent="#root">
			  <div class="card-body">
				<div class="p-4">
			  <div class="row ">
			<div class="col">
			<ul>
			<li><div class="shadow w-auto h-25 p-3 mb-5 bg-body rounded fw-bold cc"><img src="cse.PNG" heigth="100%" width="10%"/>&nbsp &nbsp &nbsp PhD-Electronics and Comunication Engineering </div></li>

			</ul></div>
			<div class="col">
			<ul>
			<li><div class="shadow w-auto h-25 p-3 mb-5 bg-body rounded fw-bold cc"><img src="ece.PNG" heigth="10%" width="10%"/>&nbsp &nbsp &nbsp PhD-Computer Science and Engineering</div></li>

			</ul></div>
			</div>

				<br><br>
			</div>
			  </div>
			</div>
	</div>


</div>
@endsection
