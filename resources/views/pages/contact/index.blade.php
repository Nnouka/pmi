@extends('layouts.main')
 
@section('title', 'Contact Us')
@section('content')
<section>
    @if(Session::get('status'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success contact__msg" role="alert">
                    Votre message a bien été envoyé
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
          <span class="text-white">Contactez-nous</span>
          <h1 class="text-capitalize mb-5 text-lg">Entrer en contact</h1>
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
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Contactez-nous</h5>
                     +33(0)148-026-163
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Envoyez-nous un email</h5>
                     infos@derm-tech.com
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Emplacement</h5>
                     93320 Les Pavillons-sous-Bois
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
                    <h2 class="text-md mb-2">Contactez-nous</h2>
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
                                <input name="name" id="name" type="text" class="form-control" placeholder="Ton Nom complet" >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Votre Adresse E-mail">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Votre Sujet de Requête">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control" placeholder="Votre Numéro de Téléphone">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Votre Message"></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<div class="mapouter">
    <div class="gmap_canvas">
        <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}iframe{ width: 100%;}</style>
        <iframe height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=210%20Avenue%20Aristide%20Briand%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://123movies-to.org"></a><br>
        <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
    </div>
</div>
@endsection
