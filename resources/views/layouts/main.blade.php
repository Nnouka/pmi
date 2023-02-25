<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="mungwin.com">

  <title>Derm Tech FR - @yield('title')</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />
  <!-- SEO -->
  <meta
      name="description"
      content="Derm Tech France: {{!empty($description) ? $description : 'Quality medical products at your door step'}}"
    />
    <meta
      name="keywords"
      content="medical,pharma,pharmacy,healing,cure,consultation,safe,secure"
    />
    <link rel="canonical" href="{{route('home')}}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Derm Tech France {{!empty($title) ? "- ".$title : ''}}" />
    <meta property="og:description" content="Derm Tech France: {{!empty($description) ? $description : 'Quality medical products at your door step'}}" />
    <meta property="og:url" content="{{route('home')}}" />
    <meta property="og:site_name" content="Derm Tech France" />
    <meta property="article:tag" content="dtfr" />
    <meta property="article:tag" content="medical" />
    <meta property="article:tag" content="pharma" />
    <meta property="article:tag" content="pharmacy" />
    <meta property="article:tag" content="healing" />
    <meta property="article:tag" content="cure" />
    <meta property="article:tag" content="consultation" />
    <meta property="article:tag" content="safe" />
    <meta property="article:tag" content="community" />
    <meta property="article:tag" content="Nnouka Stephen" />
    <meta property="article:tag" content="Quinevert Mbong" />
    <meta property="article:tag" content="Ronterrence" />
    <meta property="article:tag" content="Peter Kampete" />
    <meta property="article:tag" content="smart" />
    <meta property="article:tag" content="secure" />
    <meta property="article:section" content="DermTech" />
    <meta property="article:published_time" content="2023-03-31T00:52:38+00:00" />
    <meta property="og:image" content="{{asset('images/logo.png')}}" />
    <meta property="og:image:secure_url" content="{{asset('images/logo.png')}}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Derm Tech France: {{!empty($description) ? $description : 'Quality medical products at your door step'}}" />
    <meta name="twitter:title" content="Derm Tech France - {{!empty($title) ? $title : ''}}" />
    <meta name="twitter:site" content="@dermtechfr" />
    <meta name="twitter:image" content="{{asset('images/logo.png')}}" />
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
						<li class="list-inline-item"><a href="mailto:infos@derm-tech.com"><i class="icofont-support-faq mr-2"></i>infos@derm-tech.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address 210 avenue Aristide Briand 93320 Les Pavillons-sous-Bois</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+33148026163" >
							<span>Call Now : </span>
							<span class="h4">+33 1 48-02-61-63</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="{{route('home')}}">
			  	<img src="{{asset('images/logo.png')}}" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{route('home')}}">Home</a>
			  </li>
			   <!-- <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
			    <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

			    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="department.html">Departments</a></li>
						<li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
					</ul>
			  	</li> -->

			  	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{route('service')}}" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produits <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="{{route('product', ['slug' => 'bluelift'])}}">Blue Lift</a></li>
						<li><a class="dropdown-item" href="{{route('product', ['slug' => 'cenders'])}}">185 Cender's</a></li>
						<li><a class="dropdown-item" href="{{route('product', ['slug' => 'indigo'])}}">Indigo Carmine</a></li>
					</ul>
			  	</li>

			   <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  	</li> -->
				<li class="nav-item"><a class="nav-link" href="{{route('news')}}">Catalogue</a></li>

			   <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	
<div class="m-0 p-0">
	@yield('content')
</div>

<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mr-auto col-sm-12">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo.png" alt="" class="img-fluid">
					</div>
					<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Derm Terch</a></li>
						<li><a href="{{route('product', ['slug' => 'bluelift'])}}">Blue Lift</a></li>
						<li><a href="{{route('product', ['slug' => 'cenders'])}}">185 Cender's </a></li>
						<li><a href="{{route('product', ['slug' => 'indigo'])}}">Indigo Carmine</a></li>
						<li><a href="{{route('contact')}}">Contact</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Contactez-nous</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Soutien Disponible pour 24/7</span>
						</div>
						<h4 class="mt-2"><a href="mailto:infos@derm-tech.com">infos@derm-tech.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Lun à Ven : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+33(0)148-026-163">+33 1 48-02-61-63</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright <a href="{{route('home')}}" target="_blank">Derm Tech France</a>
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
    {{-- <script src="{{asset('js/contact.js')}}"></script>Ò --}}

  </body>
  </html>