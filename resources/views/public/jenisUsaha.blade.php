@extends('layout.app')

@section('content')
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
      <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background: url({{$usaha->url_foto}}) no-repeat center; 
          -webkit-background-size: 30%;;
          -moz-background-size: 30%;;
          -o-background-size: 30%;;
          background-size: 30%;"></div>
      <div class="probootstrap-text">
        <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
          <h2 class="heading mb-4">{{$usaha->nama}}</h2>
          <p>{{$usaha->keterangan}}</p>
        </div>
      </div>
    </section>
  
    <section class="probootstrap_section" id="section-city-guides">
        <div class="container">
          <div class="row text-center mb-5 probootstrap-animate">
            <div class="col-md-12">
              <h2 class="display-4 border-bottom probootstrap-section-heading">Bidang Usaha</h2>
            </div>
          </div>
          <div class="row">
            @foreach($jenis_usaha as $j)
            <div class="col-lg-4 col-md-4 col-sm-12 probootstrap-animate mb-3">
              <a href="{{ route('jenisUsaha', ['nama' => $j->nama]) }}" class="probootstrap-thumbnail">
                <img src="{{$j->url_foto}}" alt="Free Template by ProBootstrap.com" class="img-fluid">
                <h3>{{$j->nama}}</h3>
                <center><h4>{{$j->keterangan}}</h4></center>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </section>

@endsection