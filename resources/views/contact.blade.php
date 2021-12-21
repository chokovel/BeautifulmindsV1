@extends('layouts.front')

@section('content')

<section class="page-header text-light p-5 p-lg-0 pt-lg-5 text-center">
    <div class="container">
        <div class="row pt-5">
            <h2 class="text-center pb-2 text-white">
                <strong>Contact</strong>
            </h2>
            <p class="lead text-white">
                Join Beautiful Minds Empowerment Foundation in changing the world for the better.
            </p>
        </div>
    </div>
</section>

<!-- contact -->
<section class="container">
    <div class="row pt-5 pinkotab-heading">
        <h2 class="text-center pb-2">
            <!-- <strong>Contact Us</strong> -->
        </h2>
        <h3 class="text-center pt-2">
            We'd love to hear from you.
        </h3>
    </div>
</section>
<section class="p-5 contact">
    <div class="container-fluid">
        <div class="row g-4">
            <div class="col-md">
                <!-- <form action="{{url('sendemail/send')}}" method="post">
                    <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    <label for="location">Location</label>
                        <input type="text" id="location" name="location" placeholder="Your location..">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>
                    <button class="btn btn-lg pink-button mb-4" type="submit" name="send"> Send Message </button>
                </form> -->
               
               <i class="bi bi-map bi-white h1" style="font-size: 2rem; color: #fff;"></i>

               <h5 class="pt-3"> Get In Touch</h5>

               <p> <span style="font-weight:bolder;">Address: </span> Amina Court, Apo-Dutse, Abuja.</p>
               
               <p> <span style="font-weight:bolder;">Email: </span> <a style="list-style-type:none; color:#000;" href="mailto:info@beautifulmindsempowerment.org">info@beautifulmindsempowerment.org</a></p>
               
               <p> <span style="font-weight:bolder;">Phone: </span> +234 90 2462 8208</p>

               <div>
                    <!-- follow -->
                    <div class="addthis_inline_follow_toolbox"></div>
               </div>
            </div>
            <div class="col-md">
                <div style='border-radius:10px'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.8375849842237!2d7.484009214485685!3d8.98708859354995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0c5134800525%3A0x16a356cdbc070c4f!2sAmina%20Court%20Apartments!5e0!3m2!1sen!2sng!4v1639411909386!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>
        </div>
    </div>
</section>



@endsection