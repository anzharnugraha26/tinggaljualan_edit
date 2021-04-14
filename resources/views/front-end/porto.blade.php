@extends('layout.front-end')
@section('title')
    Portofolio
@endsection
@section('content')

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Portfolio</h2>
                <div class="page_link">
                    <a href="{{url("/")}}">Home</a>
                    <a href="#">Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

<!--================Start Portfolio Area =================-->
<section class="portfolio_area section_gap_top" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title text-left">
                    <h2>Good Design | Good Idea | Good Business<br>
                    </h2>
                    <h3>Start Your Business with us!</h3>
                </div>
            </div>
        </div>
       
        <div class="filters-content">
            <div class="row portfolio-grid justify-content-center">
                <div class="col-lg-4 col-md-6 all latest">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{asset('/img/portfolio/1.jpg')}}" alt="">
                            <div class="overlay"></div>
                            <a href="{{asset('/img/portfolio/1.jpg')}}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">Web Responsive</a></h4>
                            <p>tinggaljualan.com, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all popular">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{asset('/img/portfolio/2.jpg')}}" alt="">
                            <div class="overlay"></div>
                            <a href="{{asset('/img/portfolio/2.jpg')}}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">online shop website</a></h4>
                            <p>tinggaljualan.com, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all latest">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{asset('/img/portfolio/3.jpg')}}" alt="">
                            <div class="overlay"></div>
                            <a href="{{asset('/img/portfolio/3.jpg')}}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">Company Profile Web</a></h4>
                            <p>tinggaljualan.com, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all popular">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{asset('/img/portfolio/4.jpeg')}}" alt="">
                            <div class="overlay"></div>
                            <a href="{{asset('/img/portfolio/4.jpeg')}}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">Photography</a></h4>
                            <p>tinggaljualan.com, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all following">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{asset('/img/portfolio/5.jpeg')}}" alt="">
                            <div class="overlay"></div>
                            <a href="{{asset('/img/portfolio/5.jpeg')}}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">Photography</a></h4>
                            <p>tinggaljualan.com, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all upcoming">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{asset('/img/portfolio/6.jpeg')}}" alt="">
                            <div class="overlay"></div>
                            <a href="{{asset('/img/portfolio/6.jpeg')}}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">Photography</a></h4>
                            <p>tinggaljualan.com, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all upcoming following">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{asset('/img/portfolio/7.jpeg')}}" alt="">
                            <div class="overlay"></div>
                            <a href="{{asset('/img/portfolio/7.jpeg')}}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">Photography</a></h4>
                            <p>tinggaljualan.com, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all following">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{asset('/img/portfolio/8.jpg')}}" alt="">
                            <div class="overlay"></div>
                            <a href="{{asset('/img/portfolio/8.jpg')}}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4>Photography</h4>
                            <p>tinggaljualan.com, portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 all upcoming">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="{{asset('/img/portfolio/9.jpg')}}" alt="">
                            <div class="overlay"></div>
                            <a href="{{asset('/img/portfolio/9.jpg')}}" class="img-gal">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="portfolio-details.html">Photography</a></h4>
                            <p>tinggaljualan.com, portfolio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Portfolio Area =================-->

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
                    <div class="subcribe-form" >
                        <form action="{{url("/subIndex")}}" method="post" class="subscription relative">
                            @csrf
                            <input name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
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
    
@endsection

@section('script')
@if(Session::has('services'))
<script>
	Swal.fire(
  	'Good job!',
  	'Anda Akan Mendapat Pembaruan Melalui Email',
  	'success'
)
</script>
@endif
    
@endsection