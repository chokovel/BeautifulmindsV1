@extends('layouts.front')

@section('content')

<!-- page-header -->
<section id="page-header">
    <div id="carouselExampleDark" class="carousel carousel-dark carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img style="height:400px;" src="{{ asset('img/bg1.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h1 class="animate__animated animate__bounceInLeft">Beautiful Minds Empowerment <br> Foundation</h1>
            <p class="animate__animated animate__fadeInUp animate__delay-0.5s 0.5s">Supporting Children (Boys, Girls) and Women Across Groups.</p>
            <a href="{{('/donate')}}" style="width:40%" class="btn btn-lg blue-button mb-4 animate__animated animate__fadeInUp animate__delay-1s 1s">
                     Donate
            </a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img style="height:400px;" src="{{ asset('img/bgn2.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h2 class="animate__animated animate__bounceInLeft">Supporting Less Privileged <br> Within and Out of School Boys & Girls.</h2>
            <p class="animate__animated animate__fadeInUp animate__delay-0.5s 0.5s">Excluded Populations, Persons Living with Disabilities <br> (PLWDs), and Children in Migration </p>
                <a href="{{('/donate')}}" style="width:40%" class="btn btn-lg blue-button mb-4 animate__animated animate__fadeInUp animate__delay-1s 1s">
                     Donate
                </a>
          </div>
        </div>
        <div class="carousel-item">
          <img style="height:400px;" src="{{ asset('img/img.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h1 class="animate__animated animate__bounceInLeft">Supporting Extreme <br>Marginalized Groups</h1>
            <p class="animate__animated animate__fadeInUp animate__delay-0.5s 0.5s">And those Exposed to Other Forms of <br> Disasters (communal clashes, farmers-harder’s, climate change impact).</p>
                <a href="{{('/donate')}}" style="width:40%" class="btn btn-lg blue-button mb-4 animate__animated animate__fadeInUp animate__delay-1s 1s">
                     Donate
                </a>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
</section>
<!-- page-header ends -->

<!-- fun-fact -->
<section class="fun-fact">
<div class="container">
    <div class="row">
        <div class="four col-md-3">
            <div class="counter-box colored"> <i class="fa fa-smile pb-3"></i> <span class="counter">0002</span>
                <p>Events</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box colored"> <i class="fa fa-heartbeat pb-3"></i> <span class="counter">0004</span>
                <p>Beneficiaries</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box colored"> <i class="fa fa-thumbs-up pb-3"></i> <span class="counter">1100</span>
                <p>Reach</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box colored"> <i class="fa fa-handshake pb-3"></i> <span class="counter">0010</span>
                <p>Volunteers</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- fun-fact ends -->

<!-- introduction -->
<section class="intro bg-light p-5" id="about">
<div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="{{ asset('img/orphans.jpg')}}" alt="business people in an office working together" class="img-fluid">
            </div>
            <div class="col-md">
                <h2 class="pt-3">Who We Are?</h2>
                
                <p class="pb-2">Beautiful Minds Empowerment Foundation is a Non Profit Organization founded by Josephine Yese and operates within Nigeria.</p>
                
                <p>We support children (boys, girls) and women across groups. This population
                  include Orphans and Vulnerable Children (OVC), marginalized,
                  excluded populations, Persons Living with Disabilities (PLWDs),
                  children in migration and those exposed to other forms of
                  disasters (communal clashes, farmers-harder’s, climate change
                  impact</p>

                <a href="#contact" style="width:40%" class="btn btn-lg blue-button mb-4">
                     Know more
                </a>
            </div>
        </div>
    </div>
</section>
<!-- introduction ends -->


<!-- our cause -->
<section class="pt-5 bg-secondary">
    <div class="container pinkotab-heading">
        <div class="row">
            <h2 class="text-center pt-5 text-white">
                <strong>Our Causes</strong>
            </h2>
            <hr>
        </div>
    </div>
</section>

<section class="p-5 bg-secondary">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 py-3">
                <div class="h1 mb-4 text-white">
                    <i class="fa fa-seedling text-white"></i>
                </div>
                <h3 class="card-title mb-3 solutions-title text-dark">
                    Support
                </h3>
                <p class="card-text text-white">
                We support orphans, less privileged, within and out of school girls and boys, inmates and other extreme marginalized groups.
                </p>
            </div>
            <div class="col-md-4 py-3 text-white">
                <div class="h1 mb-4 text-white">
                    <i class="fa fa-hand-holding-heart"></i>
                </div>
                <h3 class="card-title mb-3 solutions-title text-dark">
                  Vocational skills
                </h3>
                <p class="card-text">
                    We help them actualize their dreams in pursuing formal, informal education, learning vocational skills, as meaningful livelihood options.
                </p>
            </div>
            <div class="col-md-4 py-3 text-white">
                <div class="h1 mb-4">
                    <i class="fa fa-users"></i>
                </div>
                <h3 class="card-title mb-3 solutions-title text-dark">
                    Become Volunteer
                </h3>
                <p class="card-text">
                    We give all with the willingness and confirmation of interest to contribute to changing lives the opportunity to serve within the NGO circle.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- our cause ends -->

<!-- v.m,a -->
<section class="container">
    <div class="row pt-5 pinkotab-heading">
        <h2 class="text-center pt-5">
            <strong>Vision, Mission, Aim</strong>
        </h2>
        
        <!-- <p class="text-center pt-2">
            Here are a few of our diverse field of work.
        </p> -->
    </div>
</section>
<section class="p-5 solutions-wrapper">
<div class="container">
        <div class="row text-center">
            <div class="col-md">
                <div class="card bg-dark text-light our-solutions">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Vision
                        </h3>
                        <p class="card-text">
                          Our vision is to restore hope to the hopeless by being a pillar of support
to excluded groups within society and communities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-secondary text-light our-solutions">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-flag-fill"></i>
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Mission
                        </h3>
                        <p class="card-text">
                                Our mission is to draw attention to the emotional, psychosocial,
        Health, education and life skills, economic support needs of
        marginalized populations of boys, girls and women.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light our-solutions">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Aim
                        </h3>
                        <p class="card-text">
                        BMEF aim towards raising a platform that will support orphans, Persons Living with Disabilities, within and out of school boys and girls, other extreme marginalized groups actualize their dream of pursuing formal, informal education, learning vocational skills as meaningful livelihood option within their immediate communities.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- v,m,a end-->

<!-- become a volunteer -->
<section class="p-5 volunteer-wrapper">
    <div class="pt-5 pinkotab-heading">
        <div class="h1 mb-4 text-white text-center">
            <i class="fa fa-user"></i>
        </div>
        <h1 class="text-center pb-2 text-white">
            <strong>Become A Volunteer</strong>
        </h1>
        <p class="text-center pt-2 text-white">
            Join us today to contribute in helping those in need around us.
            Send us an email indicating your interest and we will be most excited to get back to you shortly.
        </p>
        <a href="mailto:info@beautifulmindsempowerment.org" style="display:table; width:25%;" class="btn btn-lg blue-button mb-4">
                  Join us now!
        </a>
    </div>
</section>
<!-- become a volunteer -->

<!-- our events -->
<section class="bg-light p-5">
    <div class="container pinkotab-heading">
        <h2 class="text-center pt-5">
            <strong>BMEF Events</strong>
        </h2>
        <!-- <p class="text-center pt-2">
            Here are a few of our diverse field of work.
        </p> -->
    </div>
</section>
<section class="event p-5 bg-light">
<div class="container">
<div class="row">
@foreach($events as $event)
    <div class="col-md-6">
      <!-- START widget-->
      <div class="panel widget">
         <div class="row row-table row-flush">
            <div class="col-xs-5">
               <picture class="lateral-picture">
                  <img src="{{ asset($event->image) }}" alt="{{ $event->title }}">
               </picture>
            </div>
            <div class="col-xs-7 align-middle p-lg bg-white">
               <div class="pull-right"><a href="{{ route('events', $event->slug)}}" class="btn btn-primary btn-sm btn-event">View</a>
               </div>
               <p>
                  <span class="text-lg">
                  {{ \Carbon\Carbon::parse( $event->start )->toDayDateTimeString() }}
                </span></p>
               <p>
                  <strong>{{$event->title}}</strong>
               </p>
               <!-- <p>{!! Str::limit($event->description, 90) !!}</p> -->
            </div>
         </div>
      </div>
      <!-- END widget-->
    </div>
@endforeach
    
</div>
</div>
</section>
<!-- our events end -->


<!-- become a donor -->
<section class="p-5 donate-wrapper">
    <div class="pt-5 pinkotab-heading">
        <div class="h1 mb-4 text-white text-center">
            <i class="fa fa-hand-holding-heart"></i>
        </div>
        <h1 class="text-center pb-2 text-white">
            <strong>Donate To Our Cause</strong>
        </h1>
        <p class="text-center pt-2 text-white">
        We achieve more together than we can alone. <br> Your support is vital to changing the lives of many out there.
        </p>
        
        <a href="{{('/donate')}}" style="display:table; width:25%;" class="btn btn-lg blue-button mb-4">
                  Donate Here!
        </a> 
    </div>
</section>
<!-- become a donor -->

<!-- blog -->
<section class="p-5">
    <div class="container pinkotab-heading">
        <h2 class="text-center pt-5">
            <strong>Latest Blog</strong>
        </h2>
        <!-- <p class="text-center pt-2">
            Here are a few of our diverse field of work.
        </p> -->
    </div>
</section>
<section class="blog p-5">
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($recents as $recent)
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset($recent->image) }}" class="card-img-top" alt="{{$recent->title}}">
      <div class="card-body">
      <h5 class="card-title text-center">
        <a class="text-dark" href="{{ route('post', $recent->slug)}}" target="_blank">{{$recent->title}}</a>
      </h5>
        <!-- <h5 class="card-title">{{$recent->title}}</h5> -->
        <!-- <p class="card-text">{!! Str::limit($recent->content, 90) !!}</p> -->
      </div>
      <div class="card-footer">
        <small class="text-muted">{{
            \Carbon\Carbon::parse( $recent->published_at )->diffForHumans() 
            }}</small>
      </div>
    </div>
  </div>
  @endforeach
</div>
</section>
<!-- blog end-->

@endsection
