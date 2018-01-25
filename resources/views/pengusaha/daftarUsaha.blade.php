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
        @foreach($usaha as $j)
            <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" src="{{$j->url_foto}}"></div>
            <div class="probootstrap-text">
              <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
                <h2 class="heading mb-4">{{$j->nama}}</h2>
                <p><div class="form-group">
                        <label class="" for="jenis">Jenis Usaha</label>
                  
                </div></p>
                <p>{{$j->keterangan}}</p>
                <p><a href="{{route('pengusaha.detailUsaha')}}" class="btn btn-primary">Read More</a></p>
              </div>
            </div>
            @endforeach
          </section>

            <section class="probootstrap-section-half d-md-flex" id="section-about">
                <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(assets/images/img_2.jpg)"></div>
                <div class="probootstrap-text">
                  <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
                    <h2 class="heading mb-4">jenis usaha</h2>
                    <p>nama usaha:</p>
                    <p>alamat</p>
                    <p>keterangan</p>
                    <p>modal</p>
                    <p>jatuh tempo</p>
                    <p>jenis jaminan</p>
                    <p></p>

                    <p><a href="#" class="btn btn-primary">Read More</a></p>
                  </div>
                </div>
              </section>
        
    </div>
  </section>

@endsection