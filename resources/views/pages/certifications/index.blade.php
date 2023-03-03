@extends('layouts.main')
 
@section('title', 'Certificates')
@section('content')	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Certifications et autres</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
<div class="container">
    <div class="row justify-content-center m-4">
        <div class="col-lg-6 text-center">
           <div class="section-title partners">
               <h2>Certifications</h2>
               <div class="divider mx-auto my-4"></div>
           </div>
       </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            @include('partials.certifications.certification-card', ['product' => $product])
        @endforeach
    </div>

    <div class="row justify-content-center m-4">
      <div class="col-lg-6 text-center">
         <div class="section-title partners">
             <h2>Notices</h2>
             <div class="divider mx-auto my-4"></div>
         </div>
     </div>
  </div>
  <div class="row">
      @foreach($products as $product)
          @include('partials.certifications.notice-card', ['product' => $product])
      @endforeach
  </div>

    <div class="row justify-content-center m-4">
        <div class="col-lg-6 text-center">
           <div class="section-title partners">
               <h2>Dossiers techniques</h2>
               <div class="divider mx-auto my-4"></div>
           </div>
       </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            @include('partials.certifications.techfile-card', ['product' => $product])
        @endforeach
    </div>
</div>
</section>

@endsection
