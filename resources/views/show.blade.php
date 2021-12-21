@extends('layouts.front')

@section('title')

{{ $post->title }}

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
                <strong>{{ $post->title }}</strong>
            </h2>
            <p class="lead text-white">
            {{ $post->description }}
            </p>
            <p>By {{ $post->user->name }}</p>
            <p class="mt-2"><img src="{{ Gravatar::src(asset($post->email)) }}" alt=""></p>
        </div>
    </div>
</section>

<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-5">
                    <img src="{{ asset($post->image) }}" class="img-fluid" alt="{{ $post->title }}">

                    <h2 class="pt-5">{{ $post->title }}</h2>
                   
                    <ul class="single-post-meta" style="list-style-type:none; display:flex;">
                            <li style="padding-right:10px"><i class="fa fa-user"></i> <a href="#">{{$post->user->name}}</a></li>
                            <li style="padding-right:10px"><i class="fa fa-calendar">
                            </i><a href="#">
                                {{ \Carbon\Carbon::parse( $post->published_at )->diffForHumans() }}
                            </a></li>
                        </ul>

                    <p class="pt-3">
                        {!! $post->content !!}
                    </p>

                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox"></div>

                  <ul class="post-tags pt-3" style="list-style-type:none; display:flex; padding-left:0px">
                        @foreach($post->tags as $tag)
                            <li style="padding-right:7px"><a href="#">{{ $tag->name }} |</a></li>
                        @endforeach
                    </ul><!--/.post-tags-->
            {{--        
                    <div class="author-box bg-grey">
                        @if(Auth::user())
                            <img src="{{Gravatar::src($user->email)}}" alt="{{$post->user->name}}">
                        @endif
                            <div class="author-info">
                                {{$post->user->name}}</h3>
                                <p>{{$post->user->about}}</p>
                                <!-- <ul class="social-icon">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#"><i class="ti-youtube"></i></a></li>
                                </ul> -->
                            </div>
                        </div><!--/.author-box-->
                --}}
                        <div class="comments-area pt-5">
                            <div class="comments-section">
                                <h4 class="comments-title">Posts Comments</h3>

                                <div id="disqus_thread"></div>
                                <script>
                                    /**
                                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                    
                                    var disqus_config = function () {
                                    this.page.url = "{{ config('app.url')}}/show/{{ $post->slug }}";  // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier = "{{ $post->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                    };
                                    
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://https-beautifulmindsempowerment-org.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                    })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
                            </div> <!-- end comments-section -->

                        </div><!-- /.comments-area -->
                    </div>
               
            <!-- sidebar -->

            <div class="col-lg-4">
                   <div class="row">
                
                        @include('partials.sidebar')
                        
                   </div>
                  
            </div>
        </div>
    </div>
</section>
    


@endsection