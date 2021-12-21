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
        <div class="row pt-5 text-center">
            <h2 class="text-center pb-2 text-white">
                <strong>Beautiful Minds Empowerment Foundation</strong>
            </h2>
            <p class="lead text-white">
            Our Events
            </p>
        </div>
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
               <div class="pull-right"><a href="{{ route('events', $event->slug)}}" target="_blank" class="btn btn-primary btn-sm btn-event">View</a>
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





@endsection