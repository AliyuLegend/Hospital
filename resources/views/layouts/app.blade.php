<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Appointment System</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">
		
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<!-- Include jQuery and Bootstrap JS -->

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>  --}} 

		<!-- Preloader -->
		<div class="preloader">
			<div class="loader">
				<div class="loader-outter"></div>
				<div class="loader-inner"></div>
	
				<div class="indicator"> 
					<svg width="16px" height="12px">
						<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
						<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					</svg>
				</div>
			</div>
		</div>
		<!-- End Preloader -->
		
	
		<!-- Header Area -->
<header class="header">
  <!-- Header Inner -->
  <div class="header-inner">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <!-- Start Logo -->
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="#"></a>
                    </div>
                    <!-- End Logo -->
                    <!-- Mobile Nav -->
                    <div class="mobile-nav"></div>
                    <!-- End Mobile Nav -->
                </div>
                <div class="col-lg-7 col-md-9 col-12">
                    <!-- Main Menu -->
                    <div class="main-menu">
                        <nav class="navigation">
                            <ul class="nav menu">
                                <li><a href="{{ url('/') }}" id="home">Home</a></li>
                                <li><a href="{{ route('view.login') }}">Doctors</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                
                                @guest
                                    @if (Route::has('login'))
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @else
                                <li>
                                <a href="#">{{ Auth::user()->name }} <i class="icofont-rounded-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('appointment') }}">My Bookings</a></li>
                                        <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       @csrf
                                    </form>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                            </ul>
                        </nav>
                    </div>
                    <!--/ End Main Menu -->
                </div>
                <div class="col-lg-2 col-12">
                    <div class="get-quote">
                        <a href="#Appointment" class="btn">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Header Inner -->
</header>
<!-- End Header Area -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->


    <!-- Include jQuery and Bootstrap JS before the closing body tag -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <script src="{{ asset('assets/script.js') }}"></script>
		<!-- jquery Min JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{ asset('assets/js/jquery-migrate-3.0.0.js') }}"></script>
		<!-- jquery Ui JS -->
		<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
		<!-- Easing JS -->
        <script src="{{ asset('assets/js/easing.js') }}"></script>
		<!-- Color JS -->
		<script src="{{ asset('assets/js/colors.js') }}"></script>
		<!-- Popper JS -->
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{ asset('assets/assets/js/bootstrap-datepicker.js') }}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{ asset('assets/assets/js/jquery.nav.js') }}"></script>
		<!-- Slicknav JS -->
		<script src="{{ asset('assets/js/slicknav.min.js') }}"></script>
		<!-- ScrollUp JS -->
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
		<!-- Niceselect JS -->
		<script src="{{ asset('assets/js/niceselect.js') }}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
		<!-- counterup JS -->
		<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
		<!-- Steller JS -->
		<script src="{{ asset('assets/js/steller.js') }}"></script>
		<!-- Wow JS -->
		<script src="{{ asset('assets/js/wow.min.js') }}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<!-- Main JS -->
		<script src="{{ asset('assets/js/main.js') }}"></script>
		
        <script src="{{ asset('js/app.js') }}" defer></script>

<script>
    $(document).ready(function(){
        $('.navbar-toggler').click(function(){
            $(this).toggleClass('open');
            $('#navbarSupportedContent').toggleClass('show');
        });

        $('.dropdown-toggle').dropdown();
    });
</script>

</body>
</html>
