@extends('layout.front-end')
@section('title')
    Services Detail
@endsection
@section('content')


<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Services Details</h2>
                <div class="page_link">
                    <a href="{{url("/")}}">Home</a>
                    <a href="">Services</a>
                    <a href="">Service Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

<!--================Start Portfolio Details Area =================-->
<section class="portfolio_details_area section_gap">
    <div class="container">
        <div class="portfolio_details_inner">
            <div class="row">
                <div class="col-lg-6" style="margin-top: -60px">
                    <div class="left_img">
                        <img class="img-fluid" src="{{asset('img/services/'.$categories->icon_detail)}}" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5" style="margin-top: -40px" >
                    <div class="portfolio_right_text mt-30" style="">
                        <h4 class="text-uppercase">{{$categories->name}}</h4>
                        <p>
                            {!!$categories->description!!}
                        </p>
                        {{-- <ul class="list">
                            <li><span>Rating</span>: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i></li>
                            <li><span>Client</span>: colorlib</li>
                            <li><span>Website</span>: colorlib.com</li>
                            <li><span>Completed</span>: 17 Aug 2018</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <p>Tinggaljualan.com akan membantu semua kebutuhan anda dimulai dari pembuatan produk kecantikan sampai dengan mempersiapkan kebutuhan marketing online anda hanya dengan klik tinggaljualan.com.</p>
            <div class="row">
                <div class="col-lg-12" style="margin-top:10px;margin-left:50px ">
                    <img src="{{asset("img/services/t1.png")}}" width="164px" height="95px" style="margin-top: 25px">
                    <img src="{{asset("img/services/t2.png")}}" width="164px" height="95px" style="margin-top: 25px">
                    <img src="{{asset("img/services/t3.png")}}" width="164px" height="95px" style="margin-top: 25px">
                    <img src="{{asset("img/services/t4.png")}}" width="164px" height="95px" style="margin-top: 25px">
                    <img src="{{asset("img/services/t5.png")}}" width="164px" height="95px" style="margin-top: 25px">
                    <img src="{{asset("img/services/t6.png")}}" width="164px" height="95px" style="margin-top: 25px">
                </div> 
            </div>
            
         
        </div>
    </div>
</section>

<section class="newsletter_area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="subscription_box text-center col-lg-12">
                    <h2 class="text-uppercase text-white">Order Paket Startup</h2>
                    <p>
                        Masukkan informasi Anda dibawah ini untuk memesan Paket Startup. Tim kami akan segera menghubungi Anda 
                    </p>
                    <div class="subcribe-form" >
                        <form action="{{url("/saveorder")}}" method="POST">
                            @csrf
                        <div class="row"  style="margin-left: 15px;margin-right: 15px">
                            <div class="col"> 
                                @if (Auth::check()) 
                                <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="nama_lengkap" value="{{Auth::user()->name}}" required>
							    @else
                                <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="nama_lengkap" value="">
							    @endif
                            </div>
                            <div class="col">
                                @if (Auth::check()) 
                              <input type="text" class="form-control" placeholder="Alamat Email"  name="email" value="{{Auth::user()->email}}" required>
                              @else
                              <input type="text" class="form-control" placeholder="Alamat Email"  name="email">
                              @endif
                            </div>
                        </div>
                        <div class="row"  style="margin-left: 15px;margin-right: 15px;margin-top: 20px">
                            <div class="col" style="margin-top: 10px">
                                <select class="form-control" id="exampleFormControlSelect1" aria-placeholder="Pilihan Paket"  name="paket">
                                    {{-- <option value="{{$categories->name}}">{{$categories->name}}</option> --}}
                                    <option {{($categories->name) == 'Paket Startup Bronze' ? 'selected' : ''}} value="Paket Startup Bronze">Paket Startup Bronze</option>
                                    <option {{($categories->name) == 'Paket Startup Silver' ? 'selected' : ''}} value="Paket Startup Silver">Paket Startup Silver</option>
                                    <option {{($categories->name) == 'Paket Startup Gold' ? 'selected' : ''}}   value="Paket Startup Gold">Paket Startup Gold</option>
                                    <option {{($categories->name) == 'Paket Starup Platinum' ? 'selected' : ''}} value="Paket Starup Platinum">Paket Starup Platinum</option>
                                    <option {{($categories->name) == 'Paket Website Company Profile' ? 'selected' : ''}} value="Paket Website Company Profile">Paket Website Company Profile</option>
                                    <option {{($categories->name) == 'Paket Website Toko Online' ? 'selected' : ''}} value="Paket Website Toko Online">Paket Website Toko Online</option>
                                </select>
                            </div>
                            <div class="col" style="margin-top: 10px">
                                <input type="text" class="form-control" placeholder="Masukan No Telp Anda" name="no_telp" required>
                            </div>
                        </div>
                        <div class="row"  style="margin-left: 15px;margin-right: 15px;margin-top: 20px">
                            <div class="col">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Breafing" name="breafing"></textarea>
                            </div>
                        </div>
                        <div class="row"  style="margin-left: -102px;margin-right: 15px;margin-top: 20px;">
                            <div class="col-md-5" style=" padding: 15px 132px;">
                            <button type="submit" class="form-control" style="background-color: white;">Kirim</button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('script')
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

@if(Session::has('success'))
<script>
	Swal.fire(
  	'Good job!',
  	'Anda Sudah Order Paket Kami, Team Kami Akan Menghubungi anda',
  	'success'
)
</script>
@endif

@endsection