<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title') - JobSky</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('styles/assets/css/bootstrap.min.css') }}">

	<!-- External Css -->
	<link rel="stylesheet" href="{{ asset('styles/assets/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('styles/assets/css/themify-icons.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/assets/css/et-line.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/assets/css/bootstrap-select.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/assets/css/plyr.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/assets/css/flag.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/assets/css/slick.css') }}" /> 
	<link rel="stylesheet" href="{{ asset('styles/assets/css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/assets/css/jquery.nstSlider.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/assets/css/html5-simple-date-input-polyfill.css') }}" />
	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/dashboard/css/dashboard.css') }}">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('styles/images/favicon.png') }}">
	<!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
<![endif]-->

@stack('css')

</head>
<body>

	<header class="header-2">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header-top">
						<div class="logo-area">
							<a href="{{route('home')}}"><img src="{{ asset('styles/images/logo-2.png') }}" alt=""></a>
						</div>
						
						
					</div>
					<nav class="navbar navbar-expand-lg cp-nav-2">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="menu-item active"><a title="Home" href="{{route('home')}}">Home</a></li>

								<li class="menu-item"><a href="{{ route('contact') }}">Contact Us</a></li>
								<li class="menu-item"><a href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form></li>
								
								<li class="menu-item post-job"><a href="{{route('employer.job.create')}}"><i class="fas fa-plus"></i>Post a Job</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<!-- Breadcrumb -->
	<div class="alice-bg padding-top-70 padding-bottom-70">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="breadcrumb-area">
						<h1>Admin Dashboard</h1>
						
					</div>
				</div>
				<div class="col-md-6">
					<div class="breadcrumb-form">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End -->

	<div class="alice-bg section-padding-bottom">
		<div class="container no-gliters">
			<div class="row no-gliters">
				<div class="col">
					<div class="dashboard-container">
						<div class="dashboard-content-wrapper">
							@yield('content')
						</div>
						<div class="dashboard-sidebar">
							<div class="user-info">
								<div class="thumb">
									<img src="{{ asset('styles/dashboard/images/user-1.jpg') }}" class="img-fluid" alt="">
								</div>
								<div class="user-body">
									<h5>{{ Auth::user()->name }}</h5>
									<span>@username</span>
								</div>
							</div>
							<div class="profile-progress">
								<div class="progress-item">
									<div class="progress-head">
										<p class="progress-on">Profile</p>
									</div>
									<div class="progress-body">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
										</div>
										<p class="progress-to">70%</p>
									</div>
								</div>
							</div>
							<div class="dashboard-menu">
								<ul>
									<li class="active"><i class="fas fa-home"></i><a href="{{route('employer.dashboard')}}">Dashboard</a></li>
									<li><i class="fas fa-user"></i><a href="{{route('employer.profile.index')}}">Update Profile</a></li>
									<li><i class="fas fa-briefcase"></i><a href="{{route('employer.job.index')}}">Manage Jobs</a></li>
									<li><i class="fas fa-users"></i><a href="{{route('employer.jobcandidate.index')}}">Manage Candidates</a></li>
									<li><i class="fas fa-plus-square"></i><a href="{{route('employer.job.create')}}">Post New Job</a></li>
									
								</ul>
								<ul class="delete">
									<li><i class="fas fa-power-off"></i><a href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form></li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<footer class="footer-bg">
		<div class="footer-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer-bottom border-top">
							<div class="row">
								<div class="col-xl-4 col-lg-5 order-lg-2">
									<div class="footer-app-download">
										<a href="#" class="apple-app">Apple Store</a>
										<a href="#" class="android-app">Google Play</a>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 order-lg-1">
									<p class="copyright-text">Copyright <a href="#">Oficiona</a> 2019, All right reserved</p>
								</div>
								<div class="col-xl-4 col-lg-3 order-lg-3">
									<div class="back-to-top">
										<a href="#">Back to top<i class="fas fa-angle-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('styles/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('styles/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('styles/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('styles/assets/js/feather.min.js') }}"></script>
	<script src="{{ asset('styles/assets/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('styles/assets/js/jquery.nstSlider.min.js') }}"></script>
	<script src="{{ asset('styles/assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('styles/assets/js/visible.js') }}"></script>
	<script src="{{ asset('styles/assets/js/jquery.countTo.js') }}"></script>
	<script src="{{ asset('styles/assets/js/chart.js') }}"></script>
	<script src="{{ asset('styles/assets/js/plyr.js') }}"></script>
	<script src="https://cdn.tiny.cloud/1/qymwn23vcupbni6wt09nr1r0v28c835u2igtb43weo1dkl2c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="{{ asset('styles/assets/js/slick.min.js') }}"></script>
	<script src="{{ asset('styles/assets/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('assets/js/html5-simple-date-input-polyfill.min.js') }}"></script>
	<script src="{{ asset('styles/js/custom.js') }}"></script>
	<script src="{{ asset('styles/dashboard/js/dashboard.js') }}"></script>
	<script src="{{ asset('styles/dashboard/js/datePicker.js') }}"></script>
	<script src="{{ asset('styles/dashboard/js/upload-input.js') }}"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
	<script src="{{ asset('styles/js/map.js') }}"></script>
	@stack('js')
</body>

</html>