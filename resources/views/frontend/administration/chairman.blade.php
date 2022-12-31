@extends('layouts.frontend.master')
@section('title','Chairman')
@section('content')
<div class="container-fluid bg-light shadow p-4 mb-4 rounded">
    <h4 style="color:#1254A0;" class="d-inline-block mx-3"><b>Chairman</b></h4>
    <p class="float-end d-inline-block hdp "><b><a href="/" style="color: black;">Home</a> > <a href="" style="color: black;">Administration</a> > <a href="" style="color: #1254A0;">Chairman</a></b></p><br><br class="d-md-none"><br class="d-md-none">
</div>
<div class="d-flex justify-content-center pt-4">
    <div class="card text-center text-white" style="width: 32rem; height:100%; background-color:#3895D3">
        <img class="card-img-top" src={{URL::asset("images\chairman.jpg")}} alt="Card image cap">
        <div class="card-body">
          <p class="card-title h5">Dr.K.Ramakrishnan</p>
          <p class="card-text">Chairman</p>
        </div>
    </div>
</div>
<div class="container"><br>
    <p class="pt-3"><b style="color: #1254A0">Dr. K. Ramakrishnan – Chairman,</b> a vibrant person filled with dynamism is a shining and definite role model for the budding engineers of this institution. A production engineer with B.E degree from Annamalai University, Tamil Nadu, he was brought up with a vision to make this rural pocket as a hub of technocrats.<br><br>

        His ardent faith in discipline and hard work has been winning him success one after the other in all his ventures. He has high aims and lofty ideals to secure a worthy place for this college amongst the renowned colleges in India and abroad.<br><br>

        As an accomplisher, he is a role model not only to his administrative staff and faculties but also to his students as well. Being a sports person,he wanted to hone the interest of the students in sports by providing state of the art infrastructure facilities in the campus.<br><br>

        He had been a champion of TIES during his college days. Dr. K. Ramakrishnan is one of the three eminent personalities of the Anna University study team that visited the Canadian Universities in 2006.

        His matchless interest in imparting quality-engineering education elevated the college to a prominent position among the several engineering colleges in Tamilnadu.</p><br><br>
</div>

@endsection
