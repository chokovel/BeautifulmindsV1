@extends('layouts.front')

@section('title')

{{ $events->title }}

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
                <strong>{{ $events->title }}</strong>
            </h2>
            <!-- <p class="lead text-white">
            {{ $events->description }}
            </p> -->
        </div>
    </div>
</section>

<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-5">
                    <img src="{{ asset($events->image) }}" class="img-fluid" alt="{{$events->title}}">

                    <h2 class="pt-5">{{$events->title}}</h2>
                   
                    <ul class="single-post-meta">
                            <li><i class="fa fa-calendar"></i> <a href="#">
                            {{ \Carbon\Carbon::parse( $events->start )->toDayDateTimeString() }}
                            </a></li>
                            <li><i class="fa fa-map"></i> <a href="#">{{$events->venue}}</a></li>
                    </ul>

                    <p class="pt-3">
                        {!! $events->description !!}
                    </p>

                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox"></div>

                     <div style='border-radius:10px'><iframe src="{{$events->map_url}}" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    <!--/.post-tags-->
                    

                        <div class="comments-area pt-5">
                            <div class="comments-section">
                                <h4 class="comments-title">Event Comments</h3>
                                
                                
                                <div id="disqus_thread"></div>
                                <script>
                                    /**
                                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                    
                                    var disqus_config = function () {
                                    this.page.url = "{{ config('app.url')}}/show/{{ $events->slug }}";  // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier = "{{ $events->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
                
                        @include('partials.event_sidebar')
                        
                   </div>
                  
            </div>
        </div>
    </div>
</section>
    


@endsection