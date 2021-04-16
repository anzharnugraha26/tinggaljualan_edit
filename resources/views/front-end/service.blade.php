@extends('layout.front-end')
@section('title')
    Services
@endsection
@section('content')

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Services</h2>
                <div class="page_link">
                    <a href="{{url("/")}}">Home</a>
                    <a href="#">Services</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

<!--================ Start Features Area =================-->
<section class="features_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>SOLUSI STARTUP ALL IN ONE! </h2>
                    <p>
                        Kami dapat membantu semua kebutuhan desain startup Anda yang dirangkum dalam 11 kategori.
                    </p>
                    <p>
                        Kami menjamin bahwa anda akan mendapatkan hasil yang bagus pada paket harga apapun. Kami akan membantu dengan mempersiapkan kebutuhan
                        marketing online anda hanya dengan klik tinggaljulan.com
                    </p>
                </div>
            </div>
        </div>

        <div class="row feature_inner">
            @foreach ($categories as $item)
            <div class="col-lg-3 col-md-6">	
                <a href="{{url("/service-detail/$item->id")}}">
                <div class="feature_item">
                    <img src="{{asset('/img/services/'.$item->image)}}" alt="" width="170px" height="400px"> 
                    {{-- <h4>{{$item->name}}</h4><label style="color: black">Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.</label></p> --}}
                    <hr>						
					<div  class="col-md-12">
						<a href="{{url("/service-detail/$item->id")}}" class="btn btn primary_btn" >Order Now !!</a>
					</div>
                </div>
                </a>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="img/services/s1.png" alt="">
                    <h4>Wp developing</h4>
                    <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="img/services/s2.png" alt="">
                    <h4>UI/ux design</h4>
                    <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="img/services/s3.png" alt="">
                    <h4>Web design</h4>
                    <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="img/services/s4.png" alt="">
                    <h4>seo optimize</h4>
                    <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!--================ End Features Area =================-->

<!--================ Start Testimonial Area =================-->
{{-- <div class="testimonial_area section_gap_bottom">
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
                            <img src="img/testimonials/t1.jpg" alt="">
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
                            <img src="img/testimonials/t2.jpg" alt="">
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
                            <img src="img/testimonials/t1.jpg" alt="">
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
                            <img src="img/testimonials/t2.jpg" alt="">
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
                            <img src="img/testimonials/t1.jpg" alt="">
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
                            <img src="img/testimonials/t2.jpg" alt="">
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
</div> --}}
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
                    <div class="subcribe-form" >
                        <form  action="{{url("/saveSubs")}}" method="post" class="subscription relative">
                            @csrf
                            <input name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
                            {{-- <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div> --}}
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