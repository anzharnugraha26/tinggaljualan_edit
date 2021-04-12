@extends('layout.front-end')
@section('title')
    Contact-Us
@endsection
@section('content')
{{-- 
@if($message = Session::has('message'))
      <script>
         Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href>Why do I have this issue?</a>'
})
      </script>
@endif --}}

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Contact Us</h2>
                <div class="page_link">
                    <a href="{{url("/")}}">Home</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Kabupaten Bogor, Indonesia</h6>
                        <p>Plaza Amsterdam Blok B Sentul City No. 56, Citaringgul, Babakan Madang, Cipambuan, Kec. Babakan Madang, Bogor, Jawa Barat 16810</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">0877-1496-1087</a></h6>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                    <div class="info_item">
                        <h6><a href="https://mail.google.com/mail/?view=cm&fs=1&to=tinggaljualan@pesonamahameru.com" target="_blank"><i class="lnr lnr-envelope"></i></a>
                        <h6><a href="https://mail.google.com/mail/?view=cm&fs=1&to=tinggaljualan@pesonamahameru.com" target="_blank">tinggaljualan@pesonamahameru.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="{{url("/sendcontact")}}" method="post">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="primary_btn">
                            <span>Send Message</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div id="mapBox" class="mapBox" 
        data-lat="-6.569053" 
        data-lon="106.85624" 
        data-zoom="13" 
        data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
        data-mlat="40.701083"
        data-mlon="-74.1522848">
        </div>
    </div>


  
 


</section>



@endsection