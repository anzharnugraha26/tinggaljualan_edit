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
                <div class="col-lg-6">
                    <div class="left_img">
                        <img class="img-fluid" src="{{asset('front-master/img/portfolio/portfolio-details.jpg')}}" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
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
                <div class="col-lg-2">
                    <p><img src="{{asset("img/services/t1.png")}}" width="164px" height="95px"></p>
                </div> 
                <div class="col-lg-2">
                    <p><img src="{{asset("img/services/t2.png")}}" width="164px" height="95px"></p>
                </div> 
                <div class="col-lg-2">
                    <p><img src="{{asset("img/services/t3.png")}}" width="164px" height="95px"></p>
                </div> 
                <div class="col-lg-2">
                    <p><img src="{{asset("img/services/t4.png")}}" width="164px" height="95px"></p>
                </div> 
                <div class="col-lg-2">
                    <p><img src="{{asset("img/services/t5.png")}}" width="164px" height="95px"></p>
                </div> 
                <div class="col-lg-2">
                    <p><img src="{{asset("img/services/t6.png")}}" width="164px" height="95px"></p>
                </div> 
            </div>
            
         
        </div>
    </div>
    {{-- <div class="container" style="margin-top: 20px">
        <div class="portfolio_details_inner">
        <form>
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Your Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">No Telp</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan No Telp">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Pilihan Paket</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Brifieng</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </form>
        
       
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div> --}}
</section>

<section class="newsletter_area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="subscription_box text-center">
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
                            <div class="col">
                                <select class="form-control" id="exampleFormControlSelect1" aria-placeholder="Pilihan Paket"  name="paket">
                                    {{-- <option value="{{$categories->name}}">{{$categories->name}}</option> --}}
                                    <option {{($categories->name) == '1' ? 'selected' : ''}} value="1">1</option>
                                    <option {{($categories->name) == 'Digital Marketing' ? 'selected' : ''}} value="Digital Marketing">Digital Marketing</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col">
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
@endsection