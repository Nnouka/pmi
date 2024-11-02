<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="mungwin.com">

	<title>{{config('app.name')}} - @yield('title')</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />
	<link rel="icon" type="image/png" href="{{asset('images/favicon-96x96.png')}}" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="{{asset('images/favicon.svg')}}" />
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}" />
	<link rel="manifest" href="{{asset('site.webmanifest')}}" />
	<!-- SEO -->
	<meta
		name="description"
		content="{{config('app.name')}}: {{!empty($description) ? $description : 'A missionary Organization of the Church of Christ, affiliated to Church of Christ Butere Western Kenyan'}}" />
	<meta
		name="keywords"
		content="bible,school,church,christ,organisation,christian,missionary,pulpit,management,prayer,jesus" />
	<link rel="canonical" href="{{route('home')}}" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{config('app.name')}} {{!empty($title) ? '- '.$title : ''}}" />
	<meta property="og:description" content="{{config('app.name')}}: {{!empty($description) ? $description : 'We have established new congregations, We have trained hundreds of preachers in many countries'}}" />
	<meta property="og:url" content="{{route('home')}}" />
	<meta property="og:site_name" content="{{config('app.name')}}" />
	<meta property="article:tag" content="pulpit" />
	<meta property="article:tag" content="prayer" />
	<meta property="article:tag" content="disciple" />
	<meta property="article:tag" content="Jesus" />
	<meta property="article:tag" content="healing" />
	<meta property="article:tag" content="cure" />
	<meta property="article:tag" content="consultation" />
	<meta property="article:tag" content="safe" />
	<meta property="article:tag" content="community" />
	<meta property="article:tag" content="Nnouka Stephen" />
	<meta property="article:tag" content="Fuanyi Jude" />
	<meta property="article:tag" content="smart" />
	<meta property="article:tag" content="secure" />
	<meta property="article:section" content="PMII" />
	<meta property="article:published_time" content="2024-10-27T00:52:38+00:00" />
	<meta property="og:image" content="{{asset('images/pulpit.png')}}" />
	<meta property="og:image:secure_url" content="{{asset('images/pulpit.png')}}" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="{{config('app.name')}}: {{!empty($description) ? $description : 'A missionary Organization of the Church of Christ, affiliated to Church of Christ Butere Western Kenyan'}}" />
	<meta name="twitter:title" content="{{config('app.name')}} - {{!empty($title) ? $title : 'Home'}}" />
	<meta name="twitter:site" content="@pmii" />
	<meta name="twitter:image" content="{{asset('images/pulpit.png')}}" />
	<meta name="twitter:creator" content="@MungwinL" />
	<link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}" />
	<!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
	<link rel="manifest" href="{{asset('site.webmanifest')}}" />

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="{{asset('plugins/icofont/icofont.min.css')}}">
	<!-- Slick Slider  CSS -->
	<link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick-theme.css')}}">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body id="top">

	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="mailto:pmidegree@gmail.com"><i class="icofont-support-faq mr-2"></i>pmidegree@gmail.com</a></li>
							<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i> NO 12 Freedom Avenue Omoku, Rivers State, Nigeria </li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
							<a href="tel:+2349017093535">
								<span>Call Now : </span>
								<span>+2349017093535</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container d-flex align-items-left">
				<a class="navbar-brand mr-3" href="{{route('home')}}">
					<img src="{{asset('images/pulpit.png')}}" alt="" class="img-fluid" style="width: 150px; height: auto;">
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav nav-wrapper">
						<li class="nav-item active">
							<a class="nav-link" href="{{route('home')}}">{{__('header.home')}}</a>
						</li>

						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{route('service')}}" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produits <i class="icofont-thin-down"></i></a>
							<ul class="dropdown-menu" aria-labelledby="dropdown03">
								<li><a class="dropdown-item" href="{{route('product', ['slug' => 'bluelift'])}}">Blue Lift</a></li>
								<li><a class="dropdown-item" href="{{route('product', ['slug' => 'cenders'])}}">185 Cender's</a></li>
								<li><a class="dropdown-item" href="{{route('product', ['slug' => 'indigo'])}}">Indigo Carmine</a></li>
							</ul>
						</li> -->
						<li class="nav-item no-break-word"><a class="nav-link" href="{{route('a-propos')}}">{{__('header.about')}}</a></li>
						<!-- <li class="nav-item"><a class="nav-link" href="{{route('certifications')}}">Certifications</a></li> -->
						<li class="nav-item"><a class="nav-link" href="{{route('contact')}}">{{__('header.contact')}}</a></li>
						<li class="nav-item"><button class="nav-link btn btn-primary" onclick="toggleEnrollModal()">{{__('header.enroll_now')}}</button></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div class="m-0 p-0">
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
		@yield('content')
	</div>

	@include('partials.enrollment_form')

	<!-- footer Start -->
	<footer class="footer section gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mr-auto col-sm-12">
					<div class="widget mb-5 mb-lg-0">
						<div class="logo mb-4 w-300">
							<img src="{{asset('images/logo.png')}}" alt="" class="img-fluid">
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Support</h4>
						<div class="divider mb-4"></div>

						<ul class="list-unstyled footer-menu lh-35">
							<li><a href="#">{{config('app.name')}}</a></li>
							<!-- <li><a href="{{route('product', ['slug' => 'bluelift'])}}">Blue Lift</a></li>
							<li><a href="{{route('product', ['slug' => 'cenders'])}}">185 Cender's </a></li>
							<li><a href="{{route('product', ['slug' => 'indigo'])}}">Indigo Carmine</a></li> -->
							<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widget widget-contact mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Contact</h4>
						<div class="divider mb-4"></div>

						<div class="footer-contact-block mb-4">
							<div class="icon d-flex align-items-center">
								<i class="icofont-email mr-3"></i>
								<span class="h6 mb-0">Support Available 24/7</span>
							</div>
							<h4 class="mt-2"><a href="mailto:pmidegree@gmail.com">pmidegree@gmail.com</a></h4>
						</div>

						<div class="footer-contact-block">
							<div class="icon d-flex align-items-center">
								<i class="icofont-support mr-3"></i>
								<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
							</div>
							<h4 class="mt-2"><a href="tel:+2349017093535">+2349017093535</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-btm py-4 mt-5">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="copyright">
							&copy; Copyright <a href="{{route('home')}}" target="_blank">PMI International</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<a class="backtop js-scroll-trigger" href="#top">
							<i class="icofont-long-arrow-up"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- 
    Essential Scripts
    =====================================-->


	<!-- Main jQuery -->
	<script src="{{asset('plugins/jquery/jquery.js')}}"></script>
	<!-- Bootstrap 4.3.2 -->
	<script src="{{asset('plugins/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('plugins/counterup/jquery.easing.js')}}"></script>
	<!-- Slick Slider -->
	<script src="{{asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
	<!-- Counterup -->
	<script src="{{asset('plugins/counterup/jquery.waypoints.min.js')}}"></script>

	<script src="{{asset('plugins/shuffle/shuffle.min.js')}}"></script>
	<script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>
	<!-- Google Map -->
	<script src="{{asset('plugins/google-map/map.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

	<script src="{{asset('js/script.js')}}"></script>
	<script src="{{asset('js/req_to_enroll.js')}}"></script>
	{{-- <script src="{{asset('js/contact.js')}}"></script> --}}

</body>

</html>