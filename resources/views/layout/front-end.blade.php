<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('front-master/img/a.png')}}" type="image/png">
	<title>Tinggal Jualan | @yield('title')</title>
	<!-- Bootstrap CSS -->

	{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('front-master/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('front-master/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('front-master/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('front-master/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('front-master/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('front-master/vendors/nice-select/css/nice-select.css')}}">

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('front-master/css/style.css')}}">
	
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	
</head>

<body>
	<div class="main-top" style="font-size: 15px;">
            <div class="row">
                <div class="right-phone-box">
					<p>	@if (Auth::check()) 
					<label style="color: white">Selamat Datang <i class="fa fa-user"> {{Auth::user()->name}} | </i></label>  
					@else
                    <a href="{{url("/register")}}" style="color: white">Register</a> | <a href="{{url("/login")}}" style="color: white">Login |</a>  
					@endif
                    <a href="https://wa.me/087714961087?text=Hallo tinggal jualan.com" style="color: white" target="_blank"> <i class="fa fa-whatsapp"> 0877-1496-1087</i></a> | <a href="https://www.instagram.com/tinggaljualandotcom"  target="_blank" style="color: white"><i class="fa fa-instagram"> tinggaljualandotcom</i></a> | <a href="https://www.instagram.com/pesonamahameru.id/"  target="_blank" style="color: white"><i class="fa fa-instagram"> pesonamahameru.id</i></a> </p>
                </div>
            </div>
    </div>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{url("/")}}"><img src="{{asset('front-master/img/xx.png')}}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item {{ '/' == request()->path()? 'active' : ''}}"><a class="nav-link" href="{{url("/")}}">Home</a></li>
							{{-- <li class="nav-item {{ 'about' == request()->path()? 'active' : ''}}"><a class="nav-link" href="{{url('/about')}}" data-turbolinks="true">About</a></li> --}}
							<li class="nav-item {{ 'services' == request()->path()? 'active' : ''}} {{ 'service-detail' == request()->path()? 'active' : ''}}"><a class="nav-link" href="{{url('/services')}}" data-turbolinks="true">Services</a></li>
							<li class="nav-item {{ 'portfolio'  == request()->path()? 'active' : ''}}"><a class="nav-link" href="{{url("/portfolio")}}">Portfolio</a></li>
							<li class="nav-item {{ 'blog'  == request()->path()? 'active' : ''}}
								 {{ 'detail-blog'  == request()->path()? 'active' : ''}}"><a class="nav-link" href="{{url("/blog")}}">Blog</a></li>
							<li class="nav-item {{ 'contact-us' == request()->path()? 'active' : ''}}"><a class="nav-link" href="{{url("/contact-us")}}">Contact</a></li>
							@if (Auth::check()) 
								<li class="nav-item"><a class="nav-link" href="{{url("/logout")}}"> | <i class="fa fa-sign-out"></i>Log-Out</a></li>
							@else
							<li class="nav-item"><a class="nav-link" href="{{url("/login")}}"> | <i class="fa fa-sign-in"></i>  Log-in</a></li>
							
							@endif
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

    @yield('content')


    <footer class="footer_area" style="">
		<div class="container" style="">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="{{url("/")}}">
								<img src="{{asset('front-master/img/xx.png')}}" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social" >
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/tinggaljualandotcom"  target="_blank"><i class="fa fa-instagram"></i></a>
							<a href="https://wa.me/6287714961087?text=Hallo tinggal jualan.com" target="_blank"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">		
					<label style="color: black">Copyright 2021 All rights reserved | TinggalJualan.com | PT Pesona Mahameru</label> </p>
			</div>
			<a href="https://wa.me/6287714961087?text=Hallo tinggal jualan.com" class="float" target="_blank">						
				<i class="fa fa-whatsapp my-float"></a>
		</div>
		</footer>

	
	
	<script src="{{asset('front-master/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('front-master/js/popper.js')}}"></script>
	<script src="{{asset('front-master/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front-master/js/stellar.js')}}"></script>
	<script src="{{asset('front-master/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('front-master/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('front-master/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('front-master/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('front-master/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('front-master/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('front-master/js/mail-script.js')}}"></script>
	<!--gmaps Js-->

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('front-master/js/gmaps.min.js')}}"></script>
	<script src="{{asset('front-master/js/theme.js')}}"></script>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	

	@yield('script')
	
</body>

</html>