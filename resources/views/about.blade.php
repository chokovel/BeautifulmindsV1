@extends('layouts.front')

@section('title')

Beautiful Minds Empowerment Foundation

@endsection

@section('content')

<section class="page-header text-light p-5 p-lg-0 pt-lg-5 text-center">

    <div class="anim-elements">
        <div class="anim-element"></div>
        <div class="anim-element"></div>
        <div class="anim-element"></div>
        <div class="anim-element"></div>
        <div class="anim-element"></div>
    </div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Beautiful Minds Empowerment Foundation</h2>
            <p class="mb-2">About Us</p>
            
        </div>
    </div>
</section><!--/. page-header -->
<!-- </div> -->

<section class="about-us py-5" id="about-us">
    <div class="container mt-5">
	<div class="row align-items-center justify-content-between">
		<div class="col-md-6">
		    <h1 style='color:#1FA5F4;'>About Us!</h1>
		    <h2>What We Do.</h2>
		    <hr>
            <p>BEAUTIFUL MINDS EMPOWERMENT FOUNDATION is a Non-Government Organization (NGO) founded in March 2021 and incorporated on September 3rd 2021 with registration number <span style="color:#1FA5F4; font-weight:bold;">RC:165156</span> with focus on supporting the development of marginalized populations and excluded groups through capacity building, skills acquisition, training support and empowerment aimed towards enabling them integrate and participate in community development.  </p>
            
		    <p>Our activities revolves round supporting children (boys, girls) and women across groups by drawing attention to the emotional, psychosocial, Health,  economic support, educational and life skills. This population include Orphans and Vulnerable Children (OVC), marginalized, excluded populations, Persons Living with Disabilities (PLWDs), out of school boys and girls, children in migration and those exposed to other forms of disasters (communal clashes, farmers-harder’s, and climate change impact. </p>
		    <!-- <button type="button" class="btn btn-success">Let's Know More</button> -->

		</div>
		<div class="col-md-6 text-center">
		    <img class="about-img" style="border:2px dashed #1FA5F4; border-radius:7px; overflow:hidden;" src="{{ asset('img/web development training session.jpg')}}" alt="bmef web development training session for pwds">
		</div>
	</div>
</div>
</section>

<section class="p-5 bg text-light text-center about">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <h3 class="pb-3">HOW WE WORK </h2>
                <p> 
                    <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Capacity Building.</p>
                <p> 
                    <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Skill Acquisition.</p>
                <p> 
                    <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Training Support.</p>
                <p> 
                    <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Empowerment.</p>
            </div>        
        </div>
    </div>
</section>
<!-- our Completed Projects -->
<section class="bg-light p-5">
    <div class="container pinkotab-heading">
        <h2 class="text-center">
            <strong>Our Completed Projects</strong>
        </h2>
    </div>
</section>
<section class="event how-we-work p-5 bg-light cp">
<div class="container">
<div class="row">
    <div class="col-md-6">
      <!-- START widget-->
      <div class="panel widget">
         <div class="row row-table row-flush">
            <div class="col-xs-5">
               <picture class="lateral-picture">
                  <img src="{{ asset('img/projects/beautiful minds beneficiaries.jpg')}}" alt="beautiful minds beneficiaries">
               </picture>
            </div>
            <div class="col-xs-7 align-middle p-lg bg-white">
               <!-- <div class="pull-right"><a href="" class="btn btn-primary btn-sm btn-event">View</a>
               </div> -->
               <p>
                  <span class="text-lg"></span></p>
               <p>
                  <strong>Wed Development Training for PWDS in Abuja</strong>
               </p>
            </div>
         </div>
      </div>
      <!-- END widget-->
    </div>
    <div class="col-md-6">
      <!-- START widget-->
      <div class="panel widget">
         <div class="row row-table row-flush">
            <div class="col-xs-5">
               <iframe class="lateral-picture" width="560" height="315" src="https://www.youtube.com/embed/VMBEbNjvqtM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-xs-7 align-middle p-lg bg-white">
               <!-- <div class="pull-right"><a href="" class="btn btn-primary btn-sm btn-event">View</a>
               </div> -->
               <p>
                  <span class="text-lg"></span></p>
               <p>
                  <strong>...16 Days of Activism Against Gender Based Violence</strong>
               </p>
            </div>
         </div>
      </div>
      <!-- END widget-->
    </div>
    
</div>
</div>
</section>
<!-- our completed end -->

<!-- become a donor -->
<section class="p-5 bg">
    <div class="pt-5 pinkotab-heading">
        <div class="h1 mb-4 text-white text-center">
            <i class="fa fa-hand-holding-heart"></i>
        </div>
        <h1 class="text-center pb-2 text-white">
            <strong>Donate To Our Cause</strong>
        </h1>
        <p class="text-center pt-2 text-white">
        We achieve more together than we can alone. <br> Your donation is a strong statement of your believe in our mission to support the development of marginalized populations and excluded groups across Nigeria.
        </p>
        
        <a href="{{ ('/donate') }}" style="display:table; width:25%;" class="btn btn-lg blue-button mb-4">
                  Donate Here!
        </a> 
    </div>
</section>
<!-- become a donor -->

@endsection