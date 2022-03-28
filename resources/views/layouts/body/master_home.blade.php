<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HPRO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content=""/>
	<meta name="author" content="FreeHTML5.co" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('front end/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('front end/css/icomoon.css')}}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{asset('front end/css/themify-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('front end/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('front end/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('front end/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('front end/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('front end/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('front end/js/modernizr-2.6.2.min.js')}}"></script>

	</head>
	<body>


	<div class="gtco-loader"></div>

	<div id="page">


	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="#">HPRO <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
					    <li><a href="{{url('home')}}">Home</a></li>
						<!--<li><a href="{{url('staff')}}">Team</a></li>-->
						<li class="has-dropdown">
							<a href="{{url('projects')}}">Projects</a>
							<ul class="dropdown">
								<li><a href="#">Research</a></li>
								<li><a href="#">Evaluation</a></li>
								<li><a href="#">Institutional</a></li>

							</ul>
						</li>
						<li><a href="{{ url('about')}}">About</a></li>
						<li><a href="{{ url('donor')}}">Donor</a></li>
						{{-- <li class="btn-cta"><a href="{{ url('login')}}"><span>Login</span></a></li> --}}
					</ul>
				</div>
			</div>

		</div>
	</nav>
	@yield('content')

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>The <span class="footer-logo">HPRO<span><span></span></h3>
						<p><h4>Health Protection and Research Organization</h4></p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Logo</h3>
						<img src="{{asset('front end/images/LOGO.png')}}">
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +93(0) 783 72 9808</a></li>
							<li><a href="#"><i class="icon-mail2"></i> hproadmin@gmail.com</a></li>
							<li class="address"><i class="icon-address"></i>H#-3 Strt-4 Taimani Project, <br> Dist 4 Kabul Afghanistan</li>

						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy;All Rights Reserved.</small>
						<small class="block">Designed by HPRO sttaf</small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>

						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>

	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{asset('front end/js/jquery.min.js')}}"></script>
	<script src="{{asset('front end/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('front end/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front end/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('front end/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('front end/js/jquery.countTo.js')}}"></script>
	<script src="{{asset ('front end/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('front end/js/magnific-popup-options.js')}}"></script>
	<script src="{{ asset('front end/js/main.js')}}"></script>

	</body>
</html>

