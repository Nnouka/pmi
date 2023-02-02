@extends('layouts.main')
 
@section('title', 'Home')
@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Derm Tech France</h1>
			<p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
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
                    <h2>Vision</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>
                </div>
            </div>
        </div>

		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
			   <div class="section-title">
				   <h2>Our Products</h2>
				   <div class="divider mx-auto my-4"></div>
			   </div>
		   </div>
		</div>>

    <div class="row portfolio-gallery justify-content-center">
      	<div class="col-lg-3 col-sm-6 col-md-6 mb-4">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="images/team/1.jpg" alt="doctor-image" class="img-fluid w-100">
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
		               <img src="images/team/2.jpg" alt="doctor-image" class="img-fluid w-100">
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
		        	<div class="doctor-img">
		               <img src="images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
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
@include('partials.appointment')
<div class="row justify-content-center">
	<div class="col-lg-6 text-center">
	   <div class="section-title">
		   <h2>Our Values</h2>
		   <div class="divider mx-auto my-4"></div>
		   <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</h5>
	   </div>
   </div>
</div>
<div class="row justify-content-center">
	<div class="col-lg-6 text-center">
	   <div class="section-title partners">
		   <h2>Our Partners</h2>
		   <div class="divider mx-auto my-4"></div>
	   </div>
   </div>
   <div class="container">
   <div class="row portfolio-gallery justify-content-center">
	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item">
		<div class="position-relative doctor-inner-box">
		  <div class="doctor-profile">
			 <div class="doctor-img">
					 <img src="images/partners/2-Carmonja-Logo.jpg" alt="partner-image" class="img-fluid w-100">
			 </div>
		  </div> 
		</div>
	</div>

    <div class="col-lg-3 col-sm-6 col-md-6 mb-4">
	  <div class="position-relative doctor-inner-box">
		  <div class="doctor-profile">
			  <div class="doctor-img">
				 <img src="images\partners\Diagmed-Healthcare.png" alt="partner-image" class="img-fluid w-100">
			  </div>
		  </div>
		</div>
    </div>
	</div>
</div>

@endsection
