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
                Gallery
            </p>
        </div>
    </div>
</section>
    
<section class="p-5">
    <div class="container">
    <!-- Gallery -->
<div class="row">
@foreach ($albums as $album)
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img
            src="{{ asset($album->cover_image) }}"
            data-mdb-img="{{ asset($album->cover_image) }}"
            class="w-100 shadow-1-strong rounded mb-4"
            alt=""
          />
        </div>
@endforeach   
      </div>
      <!-- Gallery -->
</section>


@endsection