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


        <header class="header">
            <!-- Header Inner -->
            <div class="header-inner">
                <div class="container">
                    <div class="inner">
                        <div class="row align-items-center">
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
                            <div class="col-lg-6 col-md-9 col-12">
                                <!-- Main Menu -->
                                <div class="main-menu">
                                    <nav class="navigation">
                                        <ul class="nav menu">
                                            @auth('Doctor')
                                            <li><a href="{{ route('home') }}">My Appointment</a></li>
                                            @endauth


                                            @auth('Doctor')
                                            <li>
                                                <a href="#"> {{ Auth::guard('Doctor')->user()->name }} <i class="icofont-rounded-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('profile') }}">Profile</a></li>
                                                        <li><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                       @csrf
                                                    </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                                @endauth
                                        </ul>
                                    </nav>
                                </div>
                                <!--/ End Main Menu -->
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
