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
        <div class="row pt-5">
            <h2 class="text-center pb-2 text-white">
                <strong>Beautiful Minds Empowerment Foundation</strong>
            </h2>
            <p class="lead text-white">
            News
            </p>
        </div>
    </div>
</section>




<section class=" pt-5">
    <div class="container-fluid">
        <div class="row g-0 p-0 m-0">
        @foreach($rands as $rand)
            <div class="col-md-4">
                    <div class="card bg-dark text-white">
                    <a href="{{ route('post', $rand->slug)}}">
                        <img src="{{asset($rand->image)}}" class="card-img" alt="{{$rand->title}}">
                    </a>
                    </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

<section class="blog p-5">
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse($posts as $post)
          <div class="col">
            <div class="card h-100">
              <img src="{{asset($post->image)}}" class="card-img-top" alt="{{$post->title}}">
              <div class="card-body text-center">
                    <img src="{{ Gravatar::src(asset($post->email)) }}" class="rounded-circle rounded-img position-absolute start-20 translate-middle border border-secondary" alt="..." width="75px" height="75px">
                <h5 class="card-title pt-5">
                    <a href="{{ route('post', $post->slug)}}"
                        style="color:#38CDD2">
                    {{$post->title}}
                    </a>
                </h5>
                <span class="category">{{$post->category->name}}</span>
                <p class="card-text">{{$post->description}}</p>
                <a href="{{ route('post', $post->slug)}}" target="_blank" class="read-more btn btn-info btn-sm text-white">Read More</a>
              </div>
              <div class="card-footer text-center">
                <small class="text-muted">{{
            \Carbon\Carbon::parse( $post->published_at )->diffForHumans() 
            }}</small>
              </div>
            </div>
          </div>
          
          @empty
                <h2 class="text-center">
                    <!-- No search result found for <strong> {{request()->query('search')}} </strong> -->
                    <strong> No post yet... </strong>
                </h2>
            @endforelse
        </div>
</section>
        
    

        @endsection