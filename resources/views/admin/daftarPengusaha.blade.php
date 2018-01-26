@extends('admin.layout.auth')

@section('content')
{{--  Untuk menampilkan daftar pengusaha  --}}

<section class="probootstrap_section">
    <div class="container">
      <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
        <div class="col-md-12">
          <h2 class="display-4 border-bottom probootstrap-section-heading">Daftar Pengusaha</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section-half d-md-flex" id="section-about">
    <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(assets/images/img_2.jpg)"></div>
    <div class="probootstrap-text">
      <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
        <h2 class="heading mb-4">Data Pengusaha</h2>
        <p>Nama Pengusaha :</p>
        <p>Jenis Usaha :</p>
        <p>Modal Yang sudah diterima :</p>
        <p>Alamat Pengusaha :</p>
        <p>Jaminan yang di berikan</p>
        
        <p><a href="#" class="btn btn-primary">Read More</a></p>
      </div>
    </div>
  </section>

@endsection
