@extends('admin.layout.auth')

@section('content')
{{--  Untuk menampilkan daftar Admin  --}}

<section class="probootstrap_section">
    <div class="container">
      <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
        <div class="col-md-12">
          <h2 class="display-4 border-bottom probootstrap-section-heading">Daftar Admin</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section-half d-md-flex" id="section-about">
    <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(assets/images/img_2.jpg)"></div>
    <div class="probootstrap-text">
      <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
        <h2 class="heading mb-4">Data Admin</h2>
        <p>Nama Admin :</p>
        <p>Alamat Admin :</p>
        <p>Status Admin :</p>
        
        <p><a href="#" class="btn btn-primary">Read More</a></p>
      </div>
    </div>
  </section>

@endsection
