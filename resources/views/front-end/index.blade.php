@extends('layout.front-end')
@section('title')
    Home
@endsection
@section('content')


	<!--================ End Header Area =================-->

	<!--================ Start Home Banner Area =================-->
	<div class="img-responsive">
		<section class="home_banner_area">
			<div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="banner_content">
								<h1 style="margin-bottom:-20px"><label style="color: white">Start</label> <label style="color: yellow">your</label></h1>
								<h1><label style="color: yellow"> Business</label> <label style="color: white">With Us.</label></h1>
								<h2> </h2>
								<h2 style="margin-bottom:-5px"><label style="color: white">tinggaljualan.com</label></h2>
								<a href="https://pesonamahameru.com/" target="_blank"><h4 style="color: white">by PT Pesona Mahameru</h4></a>
								<div class="d-flex align-items-center" style="margin-top:15px">
									
									<a class="primary_btn tr-bg" href="/download-pdf"><span>Get Price List PDF</span></a>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="home_right_img" >
								<img class="" src="{{asset('front-master/img/banner/7.png')}}" alt="" style="margin-bottom: 5px;margin-top: -85px"  >
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="{{asset('front-master/img/about-us.png')}}" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<h3>Solusi Jasa Desain Startup Berkualitas!</h3>
							<h2>All in One!</h2>
						<p>
							Digital marketing saat ini adalah strategi yang paling popular dan dipakai oleh nyaris seluruh marketers dunia. Hal ini merupakan efek dari perkembangan dunia internet dan teknologi yang begitu pesat, sehingga internet menjadi market yang paling menjanjikan dalam hal pemasaran.
						</p>
						<p>	Oleh karena itu, Kami tinggaljualan.com hadir sebagai solusi Anda, sebuah jasa yang berada dibawah naungan PT Pesona Mahameru ( <a href="https://pesonamahameru.com/" target="_blank">www.pesonamahameru.com</a> ). 
							
						</p>	
						<p>	Tinggaljualan.com akan membantu semua kebutuhan anda dimulai dari pembuatan produk kecantikan sampai dengan mempersiapkan kebutuhan marketing online anda hanya dengan klik tinggaljualan.com.
						</p>
						<p>
							Kamu bingung mau Jualan apa ?
							klik aja, tinggaljualan.com
						</p>
						<a class="primary_btn" href="{{url("/download-pdf")}}"><span>Get Price List PDF</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Srart Brand Area =================-->
	<section class="brand_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="{{asset('front-master/img/brands/1.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="{{asset('front-master/img/brands/2.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="{{asset('front-master/img/brands/3.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="{{asset('front-master/img/brands/4.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="{{asset('front-master/img/brands/5.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="{{asset('front-master/img/brands/6.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="{{asset('front-master/img/brands/7.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="{{asset('front-master/img/brands/8.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="{{asset('front-master/img/brands/9.png')}}" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-4 col-md-6">
					<div class="client-info">
						<div class="d-flex mb-50">
							<span class="lage">10</span>
							<span class="smll">Years Experience Working</span>
						</div>
						<div class="call-now d-flex">
							<div>
								<span class="fa fa-phone"></span>
							</div>
							<div class="ml-15">
								<p>call us now</p>
								<h3>0877-1496-108</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brand Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>Solusi Startup
							ALL IN ONE!</h2>
						<p>
							Kami dapat membantu semua kebutuhan desain startup Anda yang dirangkum dalam 8 kategori.
							{{-- Is give may shall likeness made yielding spirit a itself togeth created 
							after sea <br> is in beast beginning signs open god you're gathering ithe --}}
						</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				@foreach ($categories as $item)
				<div class="col-lg-3 col-md-6">	
					<a href="{{url("/service-detail/$item->id")}}">
					<div class="feature_item">
						<img src="{{asset('/img/services/'.$item->image)}}" alt="">
						<h4>{{$item->name}}</h4><label style="color: black">Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.</label></p>
					</div>
					</a>
				</div>
				@endforeach
				{{-- <div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="{{asset('front-master/img/services/s2.png')}}" alt="">
						<h4>UI/ux design</h4>
						<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="{{asset('front-master/img/services/s3.png')}}" alt="">
						<h4>Web design</h4>
						<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="{{asset('front-master/img/services/s4.png')}}" alt="">
						<h4>seo optimize</h4>
						<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
					</div>
				</div> --}}
			</div>
			{{-- <div class="row feature_inner">
				<div class="col-lg-3 col-md-6">
					<a href="{{url("/service-detail")}}">
					<div class="feature_item">
						<img src="{{asset('front-master/img/services/s1.png')}}" alt="">
						<h4>Wp developing</h4>
						<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
					</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="{{asset('front-master/img/services/s2.png')}}" alt="">
						<h4>UI/ux design</h4>
						<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="{{asset('front-master/img/services/s3.png')}}" alt="">
						<h4>Web design</h4>
						<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="{{asset('front-master/img/services/s4.png')}}" alt="">
						<h4>seo optimize</h4>
						<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
					</div>
				</div>
			</div> --}}
		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>quality work <br>
							Recently done project </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{asset('front-master/img/portfolio/p1.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{asset('front-master/img/portfolio/p1.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">minimal design</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{asset('front-master/img/portfolio/p2.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{asset('front-master/img/portfolio/p2.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Paint wall</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{asset('front-master/img/portfolio/p3.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{asset('front-master/img/portfolio/p3.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">female light</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{asset('front-master/img/portfolio/p4.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{asset('front-master/img/portfolio/p4.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">fourth air</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{asset('front-master/img/portfolio/p6.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{asset('front-master/img/portfolio/p5.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">together sign</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all upcoming">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{asset('front-master/img/portfolio/p5.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{asset('front-master/img/portfolio/p6.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">multiply fowl</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all upcoming following">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{asset('front-master/img/portfolio/p7.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{asset('front-master/img/portfolio/p7.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">green heaven</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{asset('front-master/img/portfolio/p8.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{asset('front-master/img/portfolio/p8.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4>fly male</h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all upcoming">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{asset('front-master/img/portfolio/p9.jpg')}}" alt="">
								<div class="overlay"></div>
								<a href="{{asset('front-master/img/portfolio/p9.jpg')}}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">season face</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Portfolio Area =================-->

	<!--================ Start Testimonial Area =================-->
	<div class="testimonial_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>client say about me</h2>
						<p>Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>
							 beginning signs open god you're gathering ithe</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi_slider owl-carousel">
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="{{asset('front-master/img/testimonials/t1.jpg')}}" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="{{asset('front-master/img/testimonials/t2.jpg')}}" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="{{asset('front-master/img/testimonials/t1.jpg')}}" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="{{asset('front-master/img/testimonials/t2.jpg')}}" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="{{asset('front-master/img/testimonials/t1.jpg')}}" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="{{asset('front-master/img/testimonials/t2.jpg')}}" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

	<!--================ Start Newsletter Area =================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="subscription_box text-center">
						<h2 class="text-uppercase text-white">get update from anywhere</h2>
						<p class="text-white">
							Bearing Void gathering light light his eavening unto dont afraid. 
						</p>
						<div class="subcribe-form" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
								<input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>
								<button class="primary-btn hover d-inline">Get Started</button>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Newsletter Area =================-->

	<!--================Footer Area =================-->
	    
@endsection
@section('script')
@if(Session::has('message'))
<script>
	Swal.fire(
  	'Good job!',
  	'Pertanyaan Anda Sudah Terkirim',
  	'success'
)
</script>
@endif

@if(Session::has('login'))
<script>
	Swal.fire(
  	'Good job!',
  	'Selamat Anda Berhasil Login',
  	'success'
)
</script>
@endif

@if(Auth::check())
@if(Auth::user()->email_verified_at==null)
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Anda belum verifikasi Email',
            text: 'Silahkan Verifikasi email anda terlebih dahulu',
            // text: 'Silahkan Login atau Register untuk melanjutkan !!',
        })
    </script>
@endif
@endif

@endsection