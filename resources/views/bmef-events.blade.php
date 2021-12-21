@extends('layouts.front')

@section('title')

Beautiful Minds Empowerment Foundation

@endsection

@section('content')

<section class="page-header padding">

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
            <p class="mb-2">Events</p>
            
        </div>
    </div>
</section><!--/. page-header -->
<!-- </div> -->

<section class="p-5">
    <div class="container">
  
   
    </div>
</section>

<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="card text-center">
                <div class="card-header">
                    Events
                </div>

                @foreach($events as $event)
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <h6 class="card-title">{{$event->Venue}}</h6>

                    <img src="{{ asset($event->image) }}" class="img-fluid p-4" width="400px" alt="{{ $event->title }}">

                    <p class="card-text">{!! $event->description !!}</p>
                    <!-- <a href="#" class="btn btn-primary"</a> -->
                </div>
                <div class="card-footer text-white h3">
                <span class="float-left">Start Date: {{ \Carbon\Carbon::parse( $event->start )->toDayDateTimeString() }} </span>
                <span class="float-right">End Date: {{ \Carbon\Carbon::parse( $event->end )->toDayDateTimeString() }}</span>
                
                </div>
                @endforeach

            </div>
        </div><!--/.blog-wrap-->
    </div>
</section><!--/.blog-section-->


@endsection