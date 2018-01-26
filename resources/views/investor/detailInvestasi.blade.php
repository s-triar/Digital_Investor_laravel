@extends('investor.layout.investorApp')

@section('content')
{{--  Untuk menampilkan detail investasi investor  --}}

<section class="probootstrap_section">
    <div class="container">
      <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
        <div class="col-md-12">
          <h2 class="display-4 border-bottom probootstrap-section-heading">Our Services</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section-half d-md-flex" id="section-about">
    <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(assets/images/img_2.jpg)"></div>
    <div class="probootstrap-text">
      <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
        <h2 class="heading mb-4">Investasiku</h2>
        <p>Nama Usaha :</p>
        <p>Jenis Usaha :</p>
        <p>Modal Yang sudah diberikan :</p>
        <p>Nama Pengusaha</p>
        <p>Alamat Pengusaha :</p>
        <p>Waktu Pengembalian :</p>
        <p><a href="#" class="btn btn-primary">Read More</a></p>
      </div>
    </div>
  </section>

@endsection
