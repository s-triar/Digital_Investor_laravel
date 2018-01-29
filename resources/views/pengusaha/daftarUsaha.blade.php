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
     
      @if(count($usaha)==0 || $usaha ==null)
        <section class="probootstrap-section-half d-md-flex" id="section-about">
            <div class="probootstrap-text">Anda belum memiliki usaha</div>
        </section>
      @else
        @foreach($usaha as $j)
            <section class="probootstrap-section-half d-md-flex" id="section-about">
                <div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(assets/images/img_2.jpg)"></div>
                <div class="probootstrap-text">
                  <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
                    <h2 class="heading mb-4">Nama Usaha: {{$j->nama}}</h2>
                    <p>Jenis usaha: {{$j->jenis_usaha->nama}}</p>
                    <p>Keterangan: {{$j->keterangan}}</p>
                    <p>Alamat: {{$j->alamat}}</p>
                    <p>Modal: Rp. {{$j->modal}} ,-</p>
                    <p>Jatuh Tempo: {{$j->jatuh_tempo}}</p>
                    <p><a href="#" class="btn btn-primary">View Detail</a></p>
                  </div>
                </div>
              </section>
            @endforeach
        @endif
        
    </div>
  </section>

@endsection