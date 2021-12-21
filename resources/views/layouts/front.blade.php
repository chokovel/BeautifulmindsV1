<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a registered Non-Governmental Organization (NGO) with focus on supporting the development of marginalized populations and excluded groups through training support towards enabling them integrate and participate in community development.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beautiful Minds Empowerment Foundation | BMEF</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/bmef.jpg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/bmefstyle.css')}}" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- bootstrap icons -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    rel="stylesheet"/>

     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> -->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
  <div class="container">
    <a class="navbar-brand text-white" href="{{ url('/') }}">
      <img class="pt-2" src="{{ asset('img/logo/bmef.jpg')}}" alt="" width="95" height="">
      <img src="{{ asset('img/logo/bmef-letters.jpg')}}" alt="" width="175" height="">
      <span class=""></span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pinkotabBurgar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="pinkotabBurgar">
        <ul class="navbar-nav ms-auto custom-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ ('/about') }}">About</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{ ('/services') }}">Services</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="{{ ('/blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ ('/gallery') }}">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ ('/our-events') }}">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ ('/contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ ('/donate') }}">Donate</a>
            </li>
        </ul>
        <!-- <a href="#" style="width:" class="btn btn-lg blue-button mb-4">
                     Donate
        </a> -->
    </div>
  </div>
</nav>

@yield('content')


<!-- footer -->
<footer class="p-5 bg-dark text-white text-center">
<section class="p-5 contact">
<div class="container-fluid">
    <div class="row ">
            
            <!--begin col-md-4 -->
            <div class="col-md-4 text-center">
               
                <i class="bi bi-map bi-white h1" style="font-size: 2rem; color: #fff;"></i>

                <h5 class="pt-3">Get In Touch</h5>

                <p>Amina Court, Apo-Dutse, Abuja.</p>
                
                <p class="align-start"><a href="mailto:info@beautifulmindsempowerment.org">
                    info@beautifulmindsempowerment.org</a></p>
                
                <p>+234 90 2462 8208</p>
                
            </div>
            <!--end col-md-4 -->
            
            <!--begin col-md-4 -->
            <div class="col-md-4 text-center">
               
                <i class="bi bi-chat h1" style="font-size: 2rem; color: #fff;"></i>

                <h5 class="pt-3">Social Media</h5>

                <p>See below where you can find us.</p>
                                     
                <!--begin footer_social -->
                <ul class="footer_social">
                    <li><a href="https://twitter.com/BM_Empowerment" target="_blank"><i class="bi bi-twitter h3"></i></a></li>
                    <li><a href="https://facebook.com/beautifulmindsempowermentfoundation/" target="_blank"><i class="bi bi-facebook h3"></i></a></li>
                    <li><a href="https://www.instagram.com/beautifulmindsempowerment/" target="_blank"><i class="bi bi-instagram h3"></i></a></li>
                </ul>
                <!--end footer_social -->
                
            </div>
            <!--end col-md-4 -->
            
            <!--begin col-md-4 -->
            <div class="col-md-4 text-center">
               
                <i class="bi bi-link h1" style="font-size: 2rem; color: #fff;"></i>

                <h5 class="pt-3">Useful Links</h5>

                <a href="#" class="footer-links">Our Cookies Policy</a>

                <a href="{{ url('/our-events')}}" target="_blank" class="footer-links">Events</a>

                <a href="{{ url('/blog')}}" target="_blank" class="footer-links">Blog</a>

                <a href="#" class="footer-links">Terms and Conditions</a>
                
            </div>
            <!--end col-md-4 -->
            
        </div>
    </div>
</section>
</footer>
<footer class="p-3 bg-secondary text-white text-center position-relative">
    <div class="container">
        <p class="">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Beautiful Minds Empowerment Foundation | BMEF. All Rights Reserved</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>

<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{ mix('/js/app.js') }}"></script>


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61b76888ade3dac5"></script>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.5.1/mapbox-gl.js'></script>
    <!-- MDB -->
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiY2hva292ZWwiLCJhIjoiY2t1eXloc2V6Mmw2ejJubG5hcGVrcG03aSJ9.NUywZ4ABf5Vl3XOstA4l0w';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [8.99755, 7.53132],
    zoom:  18
    });
</script>
<script>
    $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
</script>

<!-- Modal -->
<div class="modal fade" id="contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="lead">Fill out this form and we will get back to you.</p>
        <form action="/action_page.php">
        <div class="mb-2">
            <label for="fname" class="col-form-label">First Name: </label>
                <input type="text" id="fname" class="form-control" name="firstname" placeholder="Your name..">
        </div>
        <div class="mb-2">
            <label for="lname" class="col-form-label">Last Name: </label>
                <input type="text" id="lname" class="form-control" name="lastname" placeholder="Your last name..">
        </div>
        <div class="mb-2">
            <label for="location" class="col-form-label">Location: </label>
                <input type="text" id="location" class="form-control" name="location" placeholder="Your last name..">
        </div>
        <div class="mb-2">
            <label for="message" class="col-form-label">Message: </label>
            <textarea id="message" class="form-control" name="message" placeholder="Write something.." style="height:170px"></textarea>
        </div>            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>