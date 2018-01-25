@extends('layout.app')

@section('content')
    
    <section class="probootstrap-cover overflow-hidden relative" style="background-image: url('/img/bg-digin.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate fadeInUp probootstrap-animated"></h2>
            <p class="lead mb-5 probootstrap-animate fadeInUp probootstrap-animated">
              

            </p>
              
            <p></p>
          </div> 
         
        </div>
      </div>
    
    </section>
    <!-- END section -->
    

    <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Kenapa Harus Digital Investor?</h2>
            <blockquote class="">
              <p class="lead mb-4"><em>Digital Investor memudahkan pengusaha untuk mencari modal dengan syarat yang tidak berbelit seperti di bank, jaminan tidaklah harus surat tanah, BPKB atau sejenisnya. dengan jaminan barang elektronik, emas, dan barang berharga lainnya juga bisa asalkan nilainya lebih tinggi dari pada modal yang diminta. Untuk informasi lebih lanjut silahkan kunjungi menu SYARAT DAN KETENTUAN...</em></p>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->


    <section class="probootstrap_section" id="section-city-guides">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Bidang Usaha</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 probootstrap-animate mb-3">
            <a href="{{ route('jenisUsaha') }}" class="probootstrap-thumbnail">
              <img src="/img/perikanan.png" alt="Free Template by ProBootstrap.com" class="img-fluid">
              <h3>Perikanan</h3>
              <center><h4>Semua usaha yang berhubungan dengan perikanan bisa di ajukan modal usaha dengan mudah disini.</h4></center>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 probootstrap-animate mb-3">
            <a href="{{ route('jenisUsaha') }}" class="probootstrap-thumbnail">
              <img src="/img/peternakan.png" alt="Free Template by ProBootstrap.com" class="img-fluid">
              <h3>Peternakan</h3>
              <center><h4>Semua usaha yang berhubungan dengan peternakan bisa di ajukan modal usaha dengan mudah disini.</h4></center>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 probootstrap-animate mb-3">
            <a href="{{ route('jenisUsaha') }}" class="probootstrap-thumbnail">
              <img src="/img/pertanian.png" alt="Free Template by ProBootstrap.com" class="img-fluid">
              <h3>Pertanian</h3>
              <center><h4>Semua usaha yang berhubungan dengan pertanian bisa di ajukan modal usaha dengan mudah disini.</h4></center>
            </a>
          </div>
        </div>
      </div>
    </section>

@endsection