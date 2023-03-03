@extends('layouts.main')
 
@section('title', 'About Us')
@section('content')	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Qui Sommes Nous?</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section>
	<div class="container">

	<div class="row">

		<p class="mt-3 mb-4">DERM TECH France travaille exclusivement dans la fabrication de dispositifs médicaux. Notre  mission est d'apporter à nos clients le meilleur niveau de service dans les domaines de la préparation  de solutions de marquage et d'identification de lésions ou de tumeurs afin de contribuer à  l'amélioration de la santé des patients souffrant de ce type de pathologies.</p>

		<p class="mb-4">Afin de remplir notre mission dans le respect de nos valeurs, nous sommes engagés dans une maîtrise  de notre système Qualité. La norme NF EN ISO 13485-2016 constitue la référence constante pour la  maîtrise de notre système qualité.</p>

		<p class="mb-2">Pour ce faire, nous avons mis en place :</p>
		<div class="row">
			<ul class="">
				<li>Un Manuel Qualité</li>
				<li>Une cartographie des processus</li>							
				<li>Des procédures</li>					
			</ul>
		</div>	
		<p>Nous demandons à l'ensemble des collaborateurs de tout mettre en œuvre pour déployer le système  qualité de leur propre activité en mettant à la disposition de chacun les moyens matériels nécessaires.</p>
		<p>Réactivité, fiabilité des produits constituent les éléments majeurs de notre engagement vis-à-vis de nos  clients.</p>
	</div>
	</div>

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
					   <h2>	Notre Catalogue</h2>
					   <div class="divider mx-auto my-4"></div>
				   </div>
			   </div>
			</div>
	  </div>

	  <div class="row portfolio-gallery justify-content-center">
		<div class="col-lg-3 col-sm-6 col-md-6 mb-4">
			<div class="position-relative doctor-inner-box">
			  <div class="doctor-profile">
				 <div class="doctor-img">
					<a href="/assets/Certificat-BlueLift.pdf"><img src="images/catalogue/Certificat-Bluelift.png" alt="doctor-image" class="img-fluid w-100"></a>
				 </div>
			  </div>
			  <div class="content mt-3">
				  <h4 class="mb-0"><a href="/assets/Certificat-BlueLift.pdf">Certificat de Marquage BlueLift-DeepBlue</a></h4>
			  </div> 
			</div>
		</div>

	<div class="col-lg-3 col-sm-6 col-md-6 mb-4">
		  <div class="position-relative doctor-inner-box">
			  <div class="doctor-profile">
				  <div class="doctor-img">
					<a href="/assets/Certificat-ISO.pdf"><img src="images/catalogue/Certificat-Iso.png" alt="doctor-image" class="img-fluid w-100"></a>
				  </div>
			  </div>
			  <div class="content mt-3">
				  <h4 class="mb-0"><a href="/assets/Certificat-ISO.pdf">Certificat ISO 13485 2020</a></h4>
			  </div> 
			</div>
	</div>

	<div class="col-lg-3 col-sm-6 col-md-6 mb-4">
		  <div class="position-relative doctor-inner-box">
			  <div class="doctor-profile">
				  <div class="doctor-img">
					<a href="/assets/Certificat-185Cenders.pdf"><img src="images/catalogue/Certificat-cenders.png" alt="doctor-image" class="img-fluid w-100"></a>
				  </div>
			  </div>
			  <div class="content mt-3">
				  <h4 class="mb-0"><a href="/assets/Certificat-185Cenders.pdf">Certificat ce 2021 185 Cenders</a></h4>
			  </div> 
			</div>
	</div>
</section>

@endsection
