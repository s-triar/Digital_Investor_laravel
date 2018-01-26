@extends('admin.layout.auth')

@section('content')
{{--  Untuk menampilkan daftar investor  --}}

<section class="probootstrap_section">
    <div class="container">
      <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
        <div class="col-md-12">
          <h2 class="display-4 border-bottom probootstrap-section-heading">Daftar Investor</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section-half d-md-flex" id="section-about">
    <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(assets/foto pengusaha.jpg)"></div>
    <div class="probootstrap-text">
      <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
        <h2 class="heading mb-4">Data Investor</h2>
        <p>Nama Investor :</p>
        <p>Modal Yang sudah diberikan :</p>
        <p>Alamat investor :</p>
        <p>Id Usaha Yang di Investasi :</p>
        
        <p><a href="#" class="btn btn-primary">Read More</a></p>
      </div>
    </div>
  </section>

@endsection
