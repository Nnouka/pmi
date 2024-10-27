@extends('layouts.main')
 
@section('title', 'Contact Us')
@section('content')
<section>
    @if(Session::get('status'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success contact__msg" role="alert">
                    Your message has been sent successfully.
                </div>
            </div>
        </div>
    @endif
</section>
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contact Us</span>
          <h1 class="text-capitalize mb-5 text-lg">Get in touch</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0 contact-h-3">
                    <i class="icofont-live-support"></i>
                    <h5>Contact Us</h5>
                    +234 9 017 093 535
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0 contact-h-3">
                    <i class="icofont-support-faq"></i>
                    <h5>Send Us An email</h5>
                        pmidegree@gmail.com
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0 contact-h-3">
                    <i class="icofont-location-pin"></i>
                    <h5>Location</h5>
                        Abuja
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contact Us</h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="contact-form" class="contact__form " method="post" action="{{route('contact.mail')}}">
                 <!-- form message -->
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Your Full Names" >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Subject matter">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control" placeholder="Your Telephone Number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message"></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<div class="mapouter">
    <div class="gmap_canvas">
        <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}iframe{ width: 100%;}</style>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.543781536202!2d6.63209777447503!3d5.333608335847024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104217f7d4fa3abd%3A0xaf29775f30e576d2!2sOmoku%20Rivers%20States!5e0!3m2!1sen!2scm!4v1730047295912!5m2!1sen!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
    </div>
</div>
@endsection
