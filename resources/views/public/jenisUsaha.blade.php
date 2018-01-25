@extends('layout.app')

@section('content')
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
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 probootstrap-animate mb-3">
              <a href="{{ route('jenisUsaha') }}" class="probootstrap-thumbnail">
                <img src="/img/peternakan.png" alt="Free Template by ProBootstrap.com" class="img-fluid">
                <h3>Peternakan</h3>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 probootstrap-animate mb-3">
              <a href="{{ route('jenisUsaha') }}" class="probootstrap-thumbnail">
                <img src="/img/pertanian.png" alt="Free Template by ProBootstrap.com" class="img-fluid">
                <h3>Pertanian</h3>
              </a>
            </div>
          </div>
        </div>
      </section>
  

<section class="probootstrap_section">
        <div class="container">
          <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
            <div class="col-md-12">
              <h2 class="display-4 border-bottom probootstrap-section-heading">Usaha</h2>
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-section-half d-md-flex" id="section-about">
            <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(/img/perikanan.png)"></div>
            <div class="probootstrap-text">
              <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
                <h2 class="heading mb-4">Perikanan</h2>
                <p>Dalam laman ini usaha akan di kategorikan berdasarkan jenis usaha di bidang perikanan.</p>
                <p>Sortir usaha di bidang perikanan</p>
                <p><a href="#" class="btn btn-primary">Sortir</a></p>
              </div>
            </div>
          </section>

          <section class="probootstrap-section-half d-md-flex">
                <div class="probootstrap-image order-2 probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(/img/peternakan.png)"></div>
                <div class="probootstrap-text order-1">
                  <div class="probootstrap-inner probootstrap-animate fadeInLeft probootstrap-animated" data-animate-effect="fadeInLeft">
                    <h2 class="heading mb-4">Peternakan</h2>
                    <p>Dalam laman ini usaha akan di kategorikan berdasarkan jenis usaha di bidang peternakan</p>
                    <p>Seleksi jenis usaha di bidang peternakan.</p>
                    <p><a href="#" class="btn btn-primary">Sortir</a></p>
                  </div>
                </div>
              </section>

              <section class="probootstrap-section-half d-md-flex" id="section-about">
                    <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(/img/perikanan.png)"></div>
                    <div class="probootstrap-text">
                      <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
                        <h2 class="heading mb-4">Pertanian</h2>
                        <p>Dalam laman ini usaha akan di kategorikan berdasarkan jenis usaha di bidang pertanian.</p>
                        <p>Sortir usaha di bidang pertanian</p>
                        <p><a href="#" class="btn btn-primary">Sortir</a></p>
                      </div>
                    </div>
                  </section>
@endsection