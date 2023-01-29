@extends('layouts.main')
 
@section('title', $product->name)
@section('content')

<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row">
		<div class="col-md-12">
		  <div class="block text-center">
			  <span class="text-white">Products</span>
			  <h1 class="text-capitalize mb-5 text-lg">{{ $product->name}}</h1>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  
  
  <!-- portfolio -->
  <section class="section doctors">
  </section>
  <!-- /portfolio -->
  <section class="section cta-page">
	  <div class="container">
		  <div class="row">
			  <div class="col-lg-7">
				  <div class="cta-content">
					  <div class="divider mb-4"></div>
					  <h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
					  <a href="appoinment.html" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
				  </div>
			  </div>
		  </div>
	  </div>
  </section>

@endsection
