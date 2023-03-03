@extends('layouts.main')
 
@section('title', 'Home')
@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg">Derm Tech France</h1>
			<p>Spécialisés dans la fabrication de marqueurs endoscopiques, avec pour mission d’apporter à nos  clients le meilleur niveau de service dans les domaines de la préparation de solutions de marquage et  d’identification de lésions ou de tumeurs afin de contribuer à l'amélioration de la santé des patients  souffrant de ce type de pathologies.  </p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- portfolio -->
<section class="section doctors">
  <div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
			   <div class="section-title">
				   <h2>Nos Produits</h2>
				   <div class="divider mx-auto my-4"></div>
			   </div>
		   </div>
		</div>

    <div class="row portfolio-gallery justify-content-center">
      	@foreach($products as $product)
			@include('partials.product.product-card', ['product' => $product, 'm' => 2])
		@endforeach
    </div>
  </div>
</section>
<!-- /portfolio -->
<div class="row justify-content-center">
	<div class="col-lg-6 text-center">
	   <div class="section-title">
		   <h2>Nos Valeurs</h2>
		   <div class="divider mx-auto my-4"></div>
		   <div class="value--options">
			<div class="value_option">Satisfaction des clients</div>
			<div class="value_option">Qualité de service</div>							
			<div class="value_option">Valorisation des collaborateurs</div>
			<div class="value_option">Intégrité</div>
			<div class="value_option">Innovation</div>
		   </div>
	   </div>
   </div>
</div>
<div class="row justify-content-center mb-4">
	<div class="col-lg-6 text-center">
	   <div class="section-title partners">
		   <h2>Nos Partenaires</h2>
		   <div class="divider mx-auto my-4"></div>
	   </div>
   </div>
   <div class="container">
   <div class="row portfolio-gallery justify-content-center">
	<div class="col-lg-2 col-sm-4 col-md-3 mb-4 shuffle-item">
		<div class="position-relative doctor-inner-box">
		  <div class="doctor-profile">
			 <div class="doctor-img">
					 <img src="images/partners/2-Carmonja-Logo.jpg" alt="partner-image" class="img-fluid w-100">
			 </div>
		  </div> 
		</div>
	</div>

    <div class="col-lg-2 col-sm-4 col-md-3 mb-4">
	  <div class="position-relative doctor-inner-box">
		  <div class="doctor-profile">
			  <div class="doctor-img">
				<a href="https://diagmed.healthcare/">
				 <img src="images\partners\Diagmed-Healthcare.png" alt="partner-image" class="img-fluid w-70"></a>
			  </div>
		  </div>
		</div>
    </div>
	<div class="col-lg-2 col-sm-4 col-md-3 mb-4">
		<div class="position-relative doctor-inner-box">
			<div class="doctor-profile">
				<div class="doctor-img">
				   <img src="images\partners\creo_medical.jpg" alt="partner-image" class="img-fluid w-70">
				</div>
			</div>
		  </div>
	  </div>
	  <div class="col-lg-2 col-sm-4 col-md-3 mb-4">
		<div class="position-relative doctor-inner-box">
			<div class="doctor-profile">
				<div class="doctor-img">
					<a href="https://www.duomed.com/fr-FR-x-endo">
				   <img src="images\partners\Duomed-22_logo_pos_cmyk.png" alt="partner-image" class="img-fluid w-70"></a>
				</div>
			</div>
		  </div>
	  </div>
	  <div class="col-lg-2 col-sm-4 col-md-3 mb-4">
		<div class="position-relative doctor-inner-box">
			<div class="doctor-profile">
				<div class="doctor-img">
				   <img src="images\partners\Vytil_Color.png" alt="partner-image" class="img-fluid w-70">
				</div>
			</div>
		  </div>
	  </div>
	</div>
</div>

@endsection
