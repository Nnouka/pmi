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
		<div class="col-lg-9 text-center">
		   <div class="section-title">
			   <h2>Notre Mission</h2>
			   <div class="divider mx-auto my-4"></div>
			   <h4 class=" text-justify">Afin de remplir notre mission dans le respect de nos valeurs, nous sommes engagés dans une
				maitrise de notre système Qualité. La norme NF EN ISO 13485-2016 constitue la référence
				constante pour la maitrise de notre système Qualité.</h4>
		   </div>
	   </div>
	</div>
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
			   <div class="section-title">
				   <h2>Nos Produits</h2>
				   <div class="divider mx-auto my-4"></div>
			   </div>
		   </div>
		</div>

    <div class="row portfolio-gallery justify-content-center">
      	<div class="col-lg-3 col-sm-6 col-md-6 mb-4">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
					<a href="{{route('product', ['slug' => 'bluelift'])}}">
	               		<img class="col-md-9" src="images/team/Bluelift_1.png" alt="doctor-image" class="img-fluid w-100"></a>
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="{{route('product', ['slug' => 'bluelift'])}}">Blue Lift</a></h4>
                	<p>Improves efficacy <br> Reduces procedure time</p>
                </div> 
	      	</div>
      	</div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
						<a href="{{route('product', ['slug' => 'cenders'])}}">
		               <img class="col-md-9" src="images/team/Cenders_1.png" alt="doctor-image" class="img-fluid w-100"></a>
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="{{route('product', ['slug' => 'cenders'])}}">185 Cender's</a></h4>
                	<p>Sterile pigment for endopigmentation</p>
                </div> 
	      	</div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img"><a href="{{route('product', ['slug' => 'indigo'])}}">
		               <img class="col-md-9" src="images/team/Indigo_1.png" alt="doctor-image" class="img-fluid w-100"></a>
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="{{route('product', ['slug' => 'indigo'])}}">Indigo Carmine</a></h4>
                	<p>Highlights anomalies in the mucosal relief</p>
                </div> 
	      	</div>
      </div>
    </div>
  </div>
</section>
<!-- /portfolio -->
@include('partials.appointment') <br>
<div class="row justify-content-center">
	<div class="col-lg-6 text-center">
	   <div class="section-title">
		   <h2>Nos Valeurs</h2>
		   <div class="divider mx-auto my-4"></div>
			<ul class="text-justify">
				<li>Satisfaction des clients</li>
				<li>Qualité de service</li>							
				<li>Valorisation des collaborateurs</li>
				<li>Intégrité</li>
				<li>Innovation</li>					
			</ul>
	   </div>
   </div>
</div>
<div class="row justify-content-center">
	<div class="col-lg-6 text-center">
	   <div class="section-title partners">
		   <h2>Nos Partenaires</h2>
		   <div class="divider mx-auto my-4"></div>
	   </div>
   </div>
   <div class="container">
   <div class="row portfolio-gallery justify-content-center">
	<div class="col-lg-4 col-sm-4 col-md-4 mb-4 shuffle-item">
		<div class="position-relative doctor-inner-box">
		  <div class="doctor-profile">
			 <div class="doctor-img">
					 <img src="images/partners/2-Carmonja-Logo.jpg" alt="partner-image" class="img-fluid w-100">
			 </div>
		  </div> 
		</div>
	</div>

    <div class="col-lg-4 col-sm-4 col-md-4 mb-4">
	  <div class="position-relative doctor-inner-box">
		  <div class="doctor-profile">
			  <div class="doctor-img">
				<a href="https://diagmed.healthcare/">
				 <img src="images\partners\Diagmed-Healthcare.png" alt="partner-image" class="img-fluid w-70"></a>
			  </div>
		  </div>
		</div>
    </div>
	<div class="col-lg-4 col-sm-4 col-md-4 mb-4">
		<div class="position-relative doctor-inner-box">
			<div class="doctor-profile">
				<div class="doctor-img">
				   <img src="images\partners\creo_medical.jpg" alt="partner-image" class="img-fluid w-70">
				</div>
			</div>
		  </div>
	  </div>
	  <div class="col-lg-4 col-sm-4 col-md-4 mb-4">
		<div class="position-relative doctor-inner-box">
			<div class="doctor-profile">
				<div class="doctor-img">
					<a href="https://www.duomed.com/fr-FR-x-endo">
				   <img src="images\partners\Duomed-22_logo_pos_cmyk.png" alt="partner-image" class="img-fluid w-70"></a>
				</div>
			</div>
		  </div>
	  </div>
	  <div class="col-lg-4 col-sm-4 col-md-4 mb-4">
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
