@extends('layouts.frontend.master')
@section('title','Home')
@section('content')
<div class="slides">
        <div id="demo" class="carousel slide" data-bs-ride="carousel" data-interval="true">
            <div class="carousel-inner">
                @foreach ($sliders as $key => $sliderItem)
                <div class="carousel-item {{$key==0 ? 'active':''}}">
                    <img src="{{ asset("$sliderItem->image")}}" alt="..." class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$sliderItem->title}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
  <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 px-5"><br>
                <h2 class="about-h"><b>About Us</b></h2>
                <p class="para">KRCT was started in 2010. It is approved by AICTE New Delhi, accredited by NAAC with A+ grade.<br><b>K. Ramakrishnan College of Technology</b>, Tiruchirappalli, situated in the famous temple town Samayapuram, is a premiere organization striving to bring in constructive transformation in young aspirants by imparting technical, behavioral and value based education.</p>
            </div>
            <div class="col-lg-5 col-md-12 col-sm">
                <img src="images/krct-gate.jpg" class="about-img" style="height: 25rem; width:100%;">
            </div>
        </div>
    </div>

<br>
<div class="container-fluid">
    <div class="row">
        <section id="news">
            <div class="container-d-flex">
                <div class="row">
                    <div class="col">
                        <h1>News</h1>
                        <div class="row my-auto">
                            <div id="carouselfornews" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="hover">
                                <div class="carousel-inner">
                                    @foreach ($news->chunk(2) as $key => $newsItems)
                                    <div class="carousel-item {{$key==0 ? 'active':''}}" >
                                        <div class="row mx-auto py-2">
                                            @foreach ($newsItems as $newsItem )
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 pt-3 py-4 d-flex">
                                                <div class="card mx-auto" id="new">
                                                    <a href="{{$newsItem->link}}"><img class="card-img-top" src="{{ asset("$newsItem->image")}}" alt="Card image cap"></a>
                                                    <div class="card-body d-flex">
                                                        <p class="card-text">{!!$newsItem->description!!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselfornews" data-bs-slide="prev">
                                    <span class="fas fa-caret-square-left fa-2x" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselfornews" data-bs-slide="next">
                                    <span class="fas fa-caret-square-right fa-2x" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12"  >
                        <div class="container-fluid">
                            <div class="col">
                                <div class="row mb-2 mx-auto" style="padding-bottom:15px">
                                    <h1>Events</h1>
                                </div>
                            </div>
                            <marquee id="marq" direction = "up" OnMouseOver="this.stop();" OnMouseOut="this.start();">
                                <div class="row">
                                    @foreach ($events as $card )
                                    <div class="row py-4">
                                        <div class="col-lg-2 col-md-2 col-sm-2 d-flex ">
                                            <button type="button" class="btn btn-primary btn-lg btnsize">
                                                <p style="margin:0;">{{$card->month}}</p>
                                                <span class="badge ">{{$card->date}}</span>
                                            </button>
                                        </div>
                                         <div class="col-lg col-sm-10 d-flex">
                                            <div class="card">
                                                <h5 class="card-title">{{$card->title}}</h5>
                                                <p class="card-text">Time:{!!$card->time!!} <br><a href="{{asset("$card->link")}}">Link</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </marquee>
                        </div>
                    </div>
            </div><!--Main ROw-->
        </div>
    </section>
    </div>
</div>

  <div class="container mt-4">
    <h3 class="text-center mt-2" style="color: #1254A0;"><b>Why KRCT?</b></h3>
    <div class="row">
        @foreach ($cards as $card)
        <div class="col-lg-4 col-md-6 col-sm-7 py-3" id="zh">
        <div class="card why-c">
          <img  src="{{asset("$card->image")}}" class="card-img-top"  alt="...">
          <div class="card-body">
            <h5 class="card-title why-ct"><b>{{$card->title}}</b></h5>
            <p class="card-text">{{$card->description}}</p>
          </div>
        </div>
      </div>
      @endforeach
      </div><br>
  </div>
  <div class="c-f"><br>
        <h3 class="text-center" style="color: #fefe00;"><b>Top Placements</b></h3>
        <div class="container">
				<div class="row mt-4">
					<div class="col-lg-12">
						<div class="placement-slider owl-carousel">
                            @foreach ($placements as $placement )
                                <div class="card p-c">
                                    <img src="{{asset("$placement->image")}}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{$placement->name}}</h5>
                                        <p class="card-text">{{$placement->department}}</p>
                                        <p style="height:2rem; font-weight:bold;">{{$placement->company}}</p>
                                    </div>
                                </div>
                            @endforeach
						</div><br>
					</div>
				</div>
        </div>
	</div>
    <section id="team">
        <div class="container my-3 py-5 text-center">
            <div class="row mb-4" >
                <div class="col" style="margin-bottom: 4%">
                    <h1>What Our Happy Students <br>Say About Us</h1>
                </div>
            </div>

            <div class="row my-auto">
                <div id="carouselforwhat" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselforwhat" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselforwhat" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselforwhat" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($feedback->chunk(3) as $key => $FeedbackItems)
                        <div class="carousel-item {{$key==0 ? 'active':''}}">
                            <div class="row d-flex justify-content-center">
                                @foreach ($FeedbackItems as $FeedbackItem)
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex flex-column">
                                            <img style="height:130px; width:130px"  src="{{ asset("$FeedbackItem->image")}}" alt="img" class="img-fluid rounded-circle w-50 mb-4 mx-auto">
                                            <p>{!!$FeedbackItem->description!!}</p>
                                            <aside class="align-self-center flex-grow d-flex align-items-end"><h3>{{$FeedbackItem->name}}</h3></aside>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselforwhat" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselforwhat" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>

    </section>
<div class="container">
    <h3 class="text-center mt-3" style="color:#1254A0;"><b>Our Recruiters</b></h3><br>
	<div class="brand-carousel section-padding owl-carousel">
        @foreach ($recruiters as $recruiter)
            <div class="item"><img alt="" src="{{asset("$recruiter->image")}}"></div>
        @endforeach
	</div>
</div><br>
<div class="container-fluid bg-light">
    <div class="container">
        <br>
        <h3 class="text-center fw-bold mb-4" style="color:#1254A0 ;">Our Gallery</h3>
        <div class="row">
            <div class="col-12 m-auto">
                <div class="gallery-carousel owl-carousel owl-theme">
                    @foreach ($galleries as $gallery)
                    <div class="item mb-4 border-0 shadow ih">
                        <a href="{{asset("$gallery->image")}}" class="fancybox" data-fancybox="gallery1">
                            <img src="{{asset("$gallery->image")}}" alt="" style="height: 280px;" >
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.gallery-carousel').owlCarousel({
            autoplay:true,
            margin: 15,
            loop:true,
            dot:false,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
	       $('.placement-slider').owlCarousel({
               loop: true,
	           nav: false,
               center:true,
	           autoplay: true,
	           autoplayTimeout: 5000,
               items:5,
               margin:10,
               responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                800:{
                    items:3,
                },
                1000:{
                    items:4,
                },
                1250:{
                    items:5,
                }
               }
	       });
           $('.brand-carousel').owlCarousel({
	        loop:true,
	        autoplay:true,
	        responsive:{
	        0:{
	            items:2,
                loop:true,
	        },
	        600:{
	            items:3,
                loop:true,
	        },
	        1000:{
	            items:6,
                loop:true,
	        }
	        }
	        })
	</script>
@endsection
