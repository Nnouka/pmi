@extends('layouts.main')
 
@section('title', 'Home')
@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg">PULPIT MANAGEMENT INTERNATIONAL</h1>
			<p>A missionary Organization of the Church of Christ, affiliated to Church of Christ Butere
			Western Kenyan</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
	@include('partials.about.mission')
</div>
<div class="container">
	@include('partials.about.program')
</div>
<div class="container">
	@include('partials.about.achievement')
</div>
<div class="container">
	@include('partials.about.history')
</div>

<!-- /portfolio -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-6 text-center">
		<div class="section-title">
			<h2>Our Values</h2>
			<div class="divider mx-auto my-4"></div>
			<div class="value--options">
				<div class="value_option">Sound Doctrine</div>
				<div class="value_option">Healthy Congregations</div>							
				<div class="value_option">Disciples of Christ</div>
				<div class="value_option">Integrity</div>
				<div class="value_option">Innovation</div>
			</div>
		</div>
	</div>
	</div>
</div>
<div class="container">
	<div class="row justify-content-center mb-4">
		<div class="col-lg-6 text-center">
		<div class="section-title partners">
			<h2>Our Partners</h2>
			<div class="divider mx-auto my-4"></div>
		</div>
		</div>
   	</div>
   <div class="container">
		<!-- <div class="row portfolio-gallery justify-content-center">
			<div class="col-lg-2 col-sm-4 col-md-3 mb-4 shuffle-item">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
								<img src="{{asset('images/partners/churchhouse.jpg')}}" alt="partner-image" class="img-fluid fit-full w-100">
						</div>
					</div> 
				</div>
			</div>

			<div class="col-lg-2 col-sm-4 col-md-3 mb-4">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="{{asset('images/partners/churchhouse2.jpg')}}" alt="partner-image" class="img-fluid fit-full w-70">
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-sm-4 col-md-3 mb-4">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
						<img src="{{asset('images/partners/churchhouse3.png')}}" alt="partner-image" class="img-fluid fit-full w-70">
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-sm-4 col-md-3 mb-4">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
						<img src="{{asset('images/partners/churchplace.png')}}" alt="partner-image" class="img-fluid fit-full w-70">
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-sm-4 col-md-3 mb-4">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
						<img src="{{asset('images/partners/churchsongs.png')}}" alt="partner-image" class="img-fluid fit-full w-70">
						</div>
					</div>
				</div>
			</div>

		</div> -->
		<div style="font-size:2rem;text-align:center;">Church of Christ Butere</div>
	</div>
</div>

@endsection
