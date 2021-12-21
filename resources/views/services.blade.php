@extends('layouts.front')

@section('content')

<section class="bg text-light p-5 p-lg-0 pt-lg-5 text-center">
    <div class="container">
        <div class="row pt-5">
            <h2 class="text-center pb-2 text-white">
                <strong>Our Services</strong>
            </h2>
            <p class="lead text-white">
                Our Integrated Online Solutions Designed for all Online Businesses
            </p>
        </div>
    </div>
</section>

<!-- more solution -->

<section class="p-4 bg-light text-light about text-center py-5">
    <div class="container">
        <div class="row align-items-center justify-content-between"> 
        <!-- Pills navs -->
  <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation" style="font-size:2rem">
  <i class="h1 bi bi-laptop"></i>
    <a
      class="nav-link active"
      id="web-dev"
      data-mdb-toggle="pill"
      href="#web-dev-a"
      role="tab"
      aria-controls="web-dev-a"
      aria-selected="true"
      >  Wed Development Maintenance and Mngt.</a
    >
  </li>
  <li class="nav-item" role="presentation" style="font-size:2rem">
  <i class="h1 bi bi-megaphone-fill"></i>  
  <a
      class="nav-link"
      id="ad-marketing"
      data-mdb-toggle="pill"
      href="#ad-marketing-a"
      role="tab"
      aria-controls="ad-marketing-a"
      aria-selected="false"
      > Online Advertisement and Social Campaigns</a
    >
  </li>
  <li class="nav-item" role="presentation" style="font-size:2rem">
  <i class="h1 bi bi-journal-bookmark-fill"></i>
    <a
      class="nav-link"
      id="web-dev-marketing-training"
      data-mdb-toggle="pill"
      href="#web-dev-marketing-training-a"
      role="tab"
      aria-controls="web-dev-marketing-training-a"
      aria-selected="false"
      > Web Development and Digital Marketing Training</a
    >
  </li>
</ul> 
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content" id="ex1-content">
         <div class="tab-pane text-dark fade show active" id="web-dev-a" role="tabpanel" aria-labelledby="web-dev">
        <div class=:col-md>
            <p>We create custom landing page/website, tailoring it to your industry, business, and audience. This kind of customization results in sales, leads, and more revenue.</p>
            <p>We take care of minor adjustments, security updates to management of your website to ensure you focus on what's important to you.</p>
        </div>
        <div class="col-md">
            <img width="50%" src="{{ asset('img/pinkotab_design.png')}}" alt="web development image" class="img-fluid py-3 text-center">
        </div>
    </div>
 

  <div class="tab-pane fade text-dark" id="ad-marketing-a" role="tabpanel" aria-labelledby="ad-marketing">
    <p>Nothing stands out more on online ads than a clever, creative campaign. Paid Ads remains one of the key digital marketing pillars for today’s brands. We'll create stand-out campaigns that will make a lasting impression for your brand, right from the ideation stage through to activation.</p>
    <p>In the largely algorithm-led world of social media, paid social and online advertisement can be an essential tool to attract attention and drive sales. Our team of experts have extensive experience in running successful paid online ad and social campaigns across Facebook, Twitter, LinkedIn, Instagram, YouTube, SnapChat and Pinterest.</p>

    <img width="50%" src="{{ asset('img/seo.png')}}" alt="digital marketing seo" class="img-fluid py-3">
  </div>

  <div class="tab-pane fade text-dark" id="web-dev-marketing-training-a" role="tabpanel" aria-labelledby="web-dev-marketing-training">
    <p>Learn website development the right way from scratch. Become a professional frontend developer in one month.
Course Outline:</p>
<img width="50%" src="{{ asset('img/marketing.png')}}" alt="business people in an office working together" class="img-fluid py-3">
    <p> <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> HTML, CSS, and Javascript.</p>
    <p> <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Bonuses: Bootstrap and Web Deployment.</p>
    <p> <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> We train children from age 13 and above.</p>
    <p> <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Advance classes are also available.</p>
    <p> <i class="bi bi-arrow-right" style="font-size:1.5rem"></i> Digital Marketing Training.</p>
  </div>
</div>
<!-- Pills content -->
        </div>
    </div>
</section>


<section class="p-5 bg-dark">
    <div class="container pinkotab-heading">
        <div class="row">
            <h2 class="text-center pb-2 text-white">
                <strong>More Services</strong>
            </h2>
        </div>
    </div>
</section>


<section class="">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 py-3">
                <div class="h1 mb-4">
                    <i class="bi bi-laptop"></i>
                </div>
                <h3 class="card-title mb-3 solutions-title">
                    Website Development
                </h3>
                <p class="card-text">
                    Create, publish, and promote engaging content to generate more traffic.
                </p>
            </div>
            <div class="col-md-4 py-3">
                <div class="h1 mb-4">
                    <i class="bi bi-megaphone-fill"></i>
                </div>
                <h3 class="card-title mb-3 solutions-title">
                    Social Media Marketing
                </h3>
                <p class="card-text">
                    Create and manage top-performing social campaigns and start.
                </p>
            </div>
            <div class="col-md-4 py-3">
                <div class="h1 mb-4">
                    <i class="bi bi-bullseye"></i>
                </div>
                <h3 class="card-title mb-3 solutions-title">
                    SEO Optimization
                </h3>
                <p class="card-text">
                    We get brands to positions where they belong in organic search results. And keep them there.
                </p>
            </div>

            <div class="col-md-4 py-3">
            <div class="h1 mb-4">
                <i class="bi bi-cash-coin"></i>
            </div>
            <h3 class="card-title mb-3 solutions-title">
                Paid Online Advert
            </h3>
            <p class="card-text">
                Wherever people are searching, and on whatever device, this gives your brand maximum exposure at the optimal price.
            </p>
        </div>
        <div class="col-md-4 py-3">
            <div class="h1 mb-4">
                <i class="bi bi-journal-richtext"></i>
            </div>
            <h3 class="card-title mb-3 solutions-title">
                Content Marketing
            </h3>
            <p class="card-text">
                This is your brand’s strategy to get noticed and we love nothing more than being creative, and producing top-notch content.
            </p>
        </div>
        <div class="col-md-4 py-3">
            <div class="h1 mb-4">
                <i class="bi bi-envelope-fill"></i>
            </div>
            <h3 class="card-title mb-3 solutions-title">
                Email Marketing
            </h3>
            <p class="card-text">
                A high impact ad platform, it allows us to target users in their inbox based on their contextual and intent signals.
            </p>
        </div>
        </div>
    </div>
</section>


@endsection