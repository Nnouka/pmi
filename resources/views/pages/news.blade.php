@extends('layouts.main')
 
@section('title', 'News')
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

<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
	<div class="col-lg-12 col-md-12 mb-5">
		<div class="blog-item">
			<div class="blog-thumb">
				<img src="images/blog/blog-1.jpg" alt="" class="img-fluid ">
			</div>

			<div class="blog-item-content justify-content-center">
				{{-- <div class="blog-item-meta mb-3 mt-4">
					<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
				</div>  --}}

				<p class="mt-3 mb-4">DERM TECH France travaille exclusivement dans la fabrication de dispositifs médicaux. Notre  mission est d'apporter à nos clients le meilleur niveau de service dans les domaines de la préparation  de solutions de marquage et d'identification de lésions ou de tumeurs afin de contribuer à  l'amélioration de la santé des patients souffrant de ce type de pathologies.</p>

				<p class="mb-4">Afin de remplir notre mission dans le respect de nos valeurs, nous sommes engagés dans une maîtrise  de notre système Qualité. La norme NF EN ISO 13485-2016 constitue la référence constante pour la  maîtrise de notre système qualité.</p>

				{{-- <a href="blog-single.html" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 mb-5">
		<div class="blog-item">
			<div class="blog-thumb">
				<img src="images/blog/blog-2.jpg" alt="" class="img-fluid">
			</div>

			<div class="blog-item-content">
				<div class="blog-item-meta mb-3 mt-4">
					<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
				</div> 

				<h2 class="mt-3 mb-3"><a href="blog-single.html">All test cost 25% in always in our laboratory</a></h2>
				
				<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p> --}}

				<p class="text-justify">Pour ce faire, nous avons mis en place :</p>
					<ul class="text-justify">
						<li>Un Manuel Qualité</li>
						<li>Une cartographie des processus</li>							
						<li>Des procédures</li>					
					</ul>
				
				<p>Nous demandons à l'ensemble des collaborateurs de tout mettre en œuvre pour déployer le système  qualité de leur propre activité en mettant à la disposition de chacun les moyens matériels nécessaires.</p>
				<p>Réactivité, fiabilité des produits constituent les éléments majeurs de notre engagement vis-à-vis de nos  clients.</p>
				
				{{-- <a href="blog-single.html" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a> --}}
			</div>
		</div>
	</div>


	{{-- <div class="col-lg-12 col-md-12 mb-5">
		<div class="blog-item">
			<div class="blog-thumb">
				<img src="images/blog/blog-4.jpg" alt="" class="img-fluid">
			</div>

			<div class="blog-item-content">
				<div class="blog-item-meta mb-3 mt-4">
					<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
				</div> 
				<h2 class="mt-3 mb-3"><a href="blog-single.html">Get Free consulation from our special surgeon and doctors</a></h2>

				<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>

				<a href="blog-single.html" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
			</div>
		</div> --}}
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
  </div>

{{--            <div class="col-lg-4">
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
	<div class="sidebar-widget search  mb-3 ">
		<h5>Search Here</h5>
		<form action="#" class="search-form">
			<input type="text" class="form-control" placeholder="search">
			<i class="ti-search"></i>
		</form>
	</div>


	<div class="sidebar-widget latest-post mb-3">
		<h5>Popular Posts</h5>

        <div class="py-2">
        	<span class="text-sm text-muted">03 Mar 2018</span>
            <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
        </div>

        <div class="py-2">
       		<span class="text-sm text-muted">03 Mar 2018</span>
            <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
        </div>

        <div class="py-2">
        	<span class="text-sm text-muted">03 Mar 2018</span>
            <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
        </div>
	</div>

	 <div class="sidebar-widget category mb-3">
		<h5 class="mb-4">Categories</h5>

		<ul class="list-unstyled">
		  <li class="align-items-center">
		    <a href="#">Medicine</a>
		    <span>(14)</span>
		  </li>
		  <li class="align-items-center">
		    <a href="#">Equipments</a>
		    <span>(2)</span>
		  </li>
		  <li class="align-items-center">
		    <a href="#">Heart</a>
		    <span>(10)</span>
		  </li>
		  <li class="align-items-center">
		    <a href="#">Free counselling</a>
		    <span>(5)</span>
		  </li>
		  <li class="align-items-center">
		    <a href="#">Lab test</a>
		    <span>(5)</span>
		  </li>
		</ul>
	</div>


	<div class="sidebar-widget tags mb-3">
		<h5 class="mb-4">Tags</h5>

		<a href="#">Doctors</a>
		<a href="#">agency</a>
		<a href="#">company</a>
		<a href="#">medicine</a>
		<a href="#">surgery</a>
		<a href="#">Marketing</a>
		<a href="#">Social Media</a>
		<a href="#">Branding</a>
		<a href="#">Laboratory</a>
	</div>


	<div class="sidebar-widget schedule-widget mb-3">
		<h5 class="mb-4">Time Schedule</h5>

		<ul class="list-unstyled">
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Monday - Friday</a>
		    <span>9:00 - 17:00</span>
		  </li>
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Saturday</a>
		    <span>9:00 - 16:00</span>
		  </li>
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Sunday</a>
		    <span>Closed</span>
		  </li>
		</ul>

		<div class="sidebar-contatct-info mt-4">
			<p class="mb-0">Need Urgent Help?</p>
			<h3>+33(0)148-026-163</h3>
		</div>
	</div>

</div>
            </div>   
        </div>

        <div class="row mt-5">
            <div class="col-lg-8">
                <nav class="pagination py-2 d-inline-block">
                    <div class="nav-links">
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#"><i class="icofont-thin-double-right"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div> --}}
</section>

@endsection
