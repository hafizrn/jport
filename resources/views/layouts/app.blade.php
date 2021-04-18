<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('pageTitle') - JobSky</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/styles/assets/css/bootstrap.min.css') }}">

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
    
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/main.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('styles/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('styles/images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('styles/images/icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('styles/images/icon-114x114.png') }}">

    @stack('css')

  </head>
  <body>

    <header class="header-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="index-2.html"><img src="{{ asset('styles/images/logo-2.png') }}" alt=""></a>
              </div>
              
              <div class="top-nav">

                <div class="dropdown header-top-account login-modals">
                  
                  <p>Phone: +8805356356, Email: mail@noreply.com</p>
                </div>

              </div>
            </div>
            <nav class="navbar navbar-expand-lg cp-nav-2">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="menu-item text-primary active"><a title="Home" href="{{ route('home') }}">Home</a></li>
                  @if (Route::has('login'))
                        @auth

	                        @if ( Auth::check() && Auth::user()->role->id == 1)
	                  		<li class="menu-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
	                  		<li class="menu-item"><a href="{{ route('logout') }}"
	                      	onclick="event.preventDefault();
	                                    document.getElementById('logout-form').submit();">
	                       {{ __('Logout') }}
	                   		</a>

	                   		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                       @csrf
	                   		</form></li>



	                  		@elseif ( Auth::check() && Auth::user()->role->id == 2)
	                  		<li class="menu-item"><a href="{{ url('/author/dashboard') }}">Dashboard</a></li>
	                  		<li class="menu-item"><a href="{{ route('logout') }}"
	                      	onclick="event.preventDefault();
	                                    document.getElementById('logout-form').submit();">
	                       {{ __('Logout') }}
	                   		</a>

	                   		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                       @csrf
	                   		</form></li>
	                  		@elseif ( Auth::check() && Auth::user()->role->id == 3)
	                  		<li class="menu-item"><a href="{{ url('/employer/dashboard') }}">Dashboard</a></li>
	                  		<li class="menu-item"><a href="{{ route('logout') }}"
	                      	onclick="event.preventDefault();
	                                    document.getElementById('logout-form').submit();">
	                       {{ __('Logout') }}
	                   		</a>

	                   		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                       @csrf
	                   		</form></li>
	                  		@else
	                      	<li class="menu-item"><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
	                      	<li class="menu-item"><a href="{{ route('logout') }}"
	                      	onclick="event.preventDefault();
	                                    document.getElementById('logout-form').submit();">
	                       {{ __('Logout') }}
	                   		</a>

	                   		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                       @csrf
	                   		</form></li>
	                  		@endif


                        @else
                        <li class="menu-item"><a href="{{ route('login') }}">Login</a></li>
                        @endauth
                  @endif
                  <li class="menu-item"><a href="{{ route('contact') }}">Contact Us</a></li>

                  
                  @if ( Auth::check() && Auth::user()->role->id == 3)
                  <li class="menu-item post-job"><a href="{{ route('employer.job.create') }}"><i class="fas fa-plus"></i>Post a Job</a></li>
                  @elseif ( Auth::check() && Auth::user()->role->id == 4)
                  <li class="menu-item post-job"><a href="{{ route('user.resume.index') }}"><i class="fas fa-plus"></i>Update Resume</a></li>
                  @else
                      @if (Route::has('register'))
                          <li class="menu-item post-job"><a href="{{ route('register') }}">Become a Member</a></li>
                      @endif
                  @endif
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>


            @yield('content')
        

        
    <!-- Footer -->
    <footer class="footer-bg">
        <div class="footer-widget-wrapper padding-bottom-60 padding-top-80">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-sm-6">
                <div class="footer-widget widget-about">
                  <h4>About Us</h4>
                  <div class="widget-inner">
                    <p class="description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    <span class="about-contact"><i data-feather="phone-forwarded"></i>+8 246-345-0698</span>
                    <span class="about-contact"><i data-feather="mail"></i>supportmail@gmail.com</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 offset-lg-1 col-sm-6">
                <div class="footer-widget footer-shortcut-link">
                  <h4>Information</h4>
                  <div class="widget-inner">
                    <ul>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="footer-widget footer-shortcut-link">
                  <h4>Job Seekers</h4>
                  <div class="widget-inner">
                    <ul>
                      <li>Create Account</li>
                      <li>Career Counseling</li>
                      <li>My Dashboard</li>
                      <li>FAQ</li>
                      <li>Video Guides</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="footer-widget footer-shortcut-link">
                  <h4>Employers</h4>
                  <div class="widget-inner">
                    <ul>
                      <li>Create Account</li>
                      <li>Products/Service</li>
                      <li>Post a Job</li>
                      <li>FAQ</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
                      <p class="copyright-text">Copyright <a href="#">JobSky</a> 2020, All right reserved</p>
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
      <!-- Footer End -->
  
  
  
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
      <script src="{{ asset('styles/assets/js/tinymce.min.js') }}"></script>
      <script src="{{ asset('styles/assets/js/slick.min.js') }}"></script>
      <script src="{{ asset('styles/assets/js/jquery.ajaxchimp.min.js') }}"></script>
  
      <script src="{{ asset('styles/js/custom.js') }}"></script>
  

      @stack('js')
    </body>
  
  </html>