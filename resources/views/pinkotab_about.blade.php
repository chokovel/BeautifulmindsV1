@extends('layouts.front')

@section('content')

<!-- header area -->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
<div class="container">
    <div class="row d-sm-flex">
  <div class="col-md mt-3 mt-sm-4">
    <div>
        <h1>Pinkotab for <span style="color:#38CDD2;"> Every Business</h1>
        <p class="lead my-4">
        Pinkotab connects business owners to their lead customers online through Web Design/Development, Digital Marketing/Advertising, and Coaching.
        </p>
        <a href="#" style="width:50%" 
        class="btn btn-lg pink-button mb-4" 
        data-bs-toggle="modal"
        data-bs-target="#contact" 
        >Contact Us</a>
    </div>
  </div>

    <div class="col-md">
    <div id="pinkotabCarouselFade" class="carousel slide carousel-fade d-none d-sm-block" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('img/pinkotab_design.png')}}" class="d-block w-100" alt="web development strategy and tool">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/pinkotab_marketing.png')}}" class="d-block w-100" alt="marketing tools">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/pinkotab_training_b.png')}}" class="d-block w-100" alt="training tools">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#pinkotabCarouselFade" data-bs-slide="prev">
            <span class="carousel-control-prev-" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#pinkotabCarouselFade" data-bs-slide="next">
            <span class="carousel-control-next-" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
</div>
</div>
</section>

 

<!-- Our solutions -->
<section class="container">
    <div class="row pt-5 pinkotab-heading">
        <h2 class="text-center pb-2">
            <strong>Integrated Solutions Designed For All Businesses</strong>
        </h2>
        <p class="text-center pt-2">
        Communicate with our flexible services that takes your business to a whole new level.
        </p>
    </div>
</section>
<section class="pb-3 solutions-wrapper">
    <div class="container">
        <div class="row text-center">
            <div class="col-md">
                <div class="card bg-dark text-light our-solutions">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Web Design and Development
                        </h3>
                        <p class="card-text">
                            Our team specializes in the design/development of professional and affordable website for you to put your business online to get more sales and discover more leads, be it a simple blog, landing page, or website for any business type.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-secondary text-light our-solutions">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-journal-bookmark-fill"></i>
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Web Development Training
                        </h3>
                        <p class="card-text">
                            Learn website development the right way from scratch. Become a professional frontend developer in two month. Course Outline: HTML, CSS, and Javascript. Bonuses: Bootstrap and Web Deployment. Advance classes are also available.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light our-solutions">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-megaphone-fill"></i>
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Advertising and Marketing
                        </h3>
                        <p class="card-text">
                            Help you connect to your lead customers through a targeted online advertisement using professional ad tools and compelling ad banner designs. We will help you increase you online value, create leads, promote your website or business.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about us -->
<section class="p-5 bg-light about" id="about">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="{{ asset('img/pinkotab-marketing-and-advertising.jpg')}}" alt="business people in an office working together" class="img-fluid">
            </div>
            <div class="col-md">
                <h2 class="pt-3">Who We Are?</h2>

                <p>We are talented and experienced team of passionate web developers ready to give you the best of keyword and SEO optimized marketing based landing pages, blogs and website for any business type designed with modern tools and technology.</p>

                <p class="pb-2">We have developed lots of beautiful responsible websites for leading companies to small and medium-sized businesses across many industries in Nigeria since 2018.</p>

                <a href="#contact" style="width:50%" class="btn btn-lg pink-button mb-4">
                     Talk to us
                </a>
            </div>
        </div>
    </div>
</section>
<section class="p-5 bg-secondary text-light about">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <h2 class="pb-3">Our Online Advertising and Digital Marketing Strategy </h2>

                <p>You can get access to over 60,000 impressions and conversions daily through our expert management of your online ad and social campaign which will help you keep the phones ringing and sales increasing for your business using our unique mind approach and other techniques. We promote businesses by making sure their advertising budget is invested wisely.</p>

                <p> 
                    <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> 100% online, ad pause and restart whenever you want.</p>
                <p> 
                    <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Direct support from us.</p>
                <p> 
                    <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Your advert will show on over 350 reputable and related platforms.</p>
                <p> 
                    <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Get realistic business leads and make substantial conversions.</p>

                <a href="#contact" style="width:50%" class="btn btn-lg pink-button mb-4">
                     Talk to us
                </a>
            </div>
            <div class="col-md">
                <img src="{{ asset('img/about-pinkotab.png')}}" alt="business people in an office working together" class="img-fluid pt-3">
            </div>
        </div>
    </div>
</section>
<!-- about ends -->

<!-- pinkotab portfolio -->
<section class="container">
    <div class="row pt-5 pinkotab-heading">
        <h2 class="text-center pb-2">
            <strong>Portfolio</strong>
        </h2>
        <p class="text-center pt-2">
            Here are a few of our diverse field of work.
        </p>
    </div>
</section>
<section class="py-5 portfolio-wrapper"> 
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col col-md-4">
                        <img src="{{ asset('img/clients/lincoln.PNG')}}" class="d-block w-100" alt="lincoln university nigeria">
                    </div>
                    <div class="col col-md-4">
                        <img src="{{ asset('img/clients/abemawards.PNG')}}" class="d-block w-100" alt="Abit Abuja Entertainment and Meritorous Awards">
                    </div>
                    <div class="col col-md-4">
                        <img src="{{ asset('img/clients/globalMarkCapital.PNG')}}" class="d-block w-100" alt="Global Mark Capital Consulting Limited">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col col-md-4">
                        <img src="{{ asset('img/clients/backendProjects.PNG')}}" class="d-block w-100" alt="Backend Projects">
                    </div>
                    <div class="col col-md-4">
                        <img src="{{ asset('img/clients/peachaidMedicalInitiative.PNG')}}" class="d-block w-100" alt="PeachAid Medical Initiative">
                    </div>
                    <div class="col col-md-4">
                        <img src="{{ asset('img/clients/printWorks.PNG')}}" class="d-block w-100" alt="Print Works">
                    </div>
                </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>
    </div>
</section>

<!-- pinkotab team -->
<section class="container">
    <div class="row pt-5 pinkotab-heading">
        <h2 class="text-center pb-2">
            <strong>The Team Behind Pinkotab</strong>
        </h2>
        <p class="text-center pt-2">
            Meet Our Team
        </p>
    </div>
</section>
<section class="pb-3 solutions-wrapper">
    <div class="container">
        <div class="row text-center">
            <div class="col-md">
                <div class="card bg-dark text-light our-team">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <img src="{{ asset('img/team/faithalugbue.jpeg')}}" class="d-block w-75 mx-auto rounded-circle" alt="Faith Alugbue">
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Faith <strong style="color:#B9185B;">Alugbue</strong>
                        </h3>
                        <p class="card-text">
                            Web Developer
                        </p>
                        <a href="https://facebook.com/alugbuefaith/">
                            <i class="i bi bi-facebook text-dark mx-1"></i>
                        </a>
                        <a href="https://www.instagram.com/faithalugbue/">
                            <i class="i bi bi-instagram text-dark mx-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-secondary text-light our-team">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <img src="{{ asset('img/team/tosinbabalola.jpg')}}" class="d-block w-75 mx-auto rounded-circle" alt="Tosin Babalola">
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Tosin <strong style="color:#B9185B;">Babalola</strong>
                        </h3>
                        <p class="card-text">
                            Digital Marketer
                        </p>
                        <a href="https://web.facebook.com/tosin.babalola.7">
                            <i class="i bi bi-facebook text-dark mx-1"></i>
                        </a>
                        <a href="https://www.instagram.com/tiibabz/">
                            <i class="i bi bi-instagram text-dark mx-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light our-team">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <img src="{{ asset('img/team/danielosondu.jpg')}}" class="d-block w-75 mx-auto rounded-circle" alt="Daniel Osondu">
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Daniel<strong style="color:#B9185B;">Osondu</strong>
                        </h3>
                        <p class="card-text">
                            Graphic Designer
                        </p>
                        <a href="https://web.facebook.com/klassiquedan">
                            <i class="i bi bi-facebook text-dark mx-1"></i>
                        </a>
                        <a href="https://www.instagram.com/klassiquecreativity/">
                            <i class="i bi bi-instagram text-dark mx-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-secondary text-light our-team">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <img src="{{ asset('img/team/julietjayeola.jpg')}}" class="d-block w-75 mx-auto rounded-circle" alt="Juliet Jayeola">
                        </div>
                        <h3 class="card-title mb-3 solutions-title">
                            Juliet <strong style="color:#B9185B;">Jayeola</strong>
                        </h3>
                        <p class="card-text">
                            Admin
                        </p>
                        <a href="https://www.instagram.com/faithalugbue/">
                            <i class="i bi bi-facebook text-dark mx-1"></i>
                        </a>
                        <a href="https://www.instagram.com/starberry94/">
                            <i class="i bi bi-instagram text-dark mx-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<!-- client -->
<section class="container">
    <div class="row pt-5 pinkotab-heading">
        <h2 class="text-center pb-2">
            <strong>Our Clients</strong>
        </h2>
        <p class="text-center pt-2">
        Trusted by many businesses
        </p>
    </div>
</section>
<section class="p-5 portfolio-wrapper">
    <div class="container client">
    <ul class="d-flex pinkotab-client">

        <li><img class="rounded" src="img/clients/GLOBAL%20MARK%20HORIZOTAL.jpg" alt="pinkotab client"></li>

        <li><img src="img/clients/099.png" alt="pinkotab client"></li>

        <li><img src="img/clients/malish%20dj%20LIGHT2.png" alt="pinkotab client"></li>

        <li><img src="img/clients/Printwork-1b.png" alt="pinkotab client"></li>

    </ul>
    </div>
</section>


<!-- contact -->


@endsection