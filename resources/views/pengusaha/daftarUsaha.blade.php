@extends('pengusaha.layout.pengusahaApp')

@section('content')
{{--  Untuk menampilkan daftar usaha yang dimiliki  --}}
<section class="probootstrap_section bg-light">
    <div class="container">
      <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
        <div class="col-md-12">
          <h2 class="display-4 border-bottom probootstrap-section-heading">Daftar Usaha</h2>
        </div>
        <a href="{{ route('pengusaha.tambahUsaha')}}" class="btn btn-primary">Tambah Usaha</a>
      </div>
     
      <section class="probootstrap-section-half d-md-flex" id="section-about">
            <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(/img/tambak.jpg)"></div>
            <div class="probootstrap-text">
              <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
                <h2 class="heading mb-4">Nama Usaha</h2>
                <p><div class="form-group">
                        <label class="" for="jenis">Jenis Usaha</label>
                        <output name="jenis" class="form-control" id="Jenis" type="text">
                </div></p>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                <p><a href="{{route('pengusaha.detailUsaha')}}" class="btn btn-primary">Read More</a></p>
              </div>
            </div>
          </section>
            
        
    </div>
  </section>

@endsection