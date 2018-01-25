@extends('pengusaha.layout.pengusahaApp')

@section('content')
{{--  Untuk menampilkan dan edit profil  --}}
<section class="probootstrap_section bg-light">
        <div class="container">
          <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
            <div class="col-md-12">
              <h2 class="display-4 border-bottom probootstrap-section-heading">Tambah Usaha</h2>
            </div>
          </div>
          <div class="row">
          <div class="col-lg-2 col-md-2"></div>
    <div class="col-lg-8 col-md-8">
        <div class="col-md probootstrap-animate fadeInUp probootstrap-animated ">
         <form class="probootstrap-form" method="post" action="{{route('authregisterpost')}}">
          <div class="form-group">
            <label class="col-sm-2" for="nama">nama</label>
            <input name="nama" class="form-control" id="nama" type="text" placeholder="Nama Pengusaha">
            @if ($errors->has('nama'))
                <strong>{{ $errors->first('nama') }}</strong>
            @endif
          </div>
          <div class="form-group">
                <label class="col-sm-2" for="email">Email</label>
                <input name="email" class="form-control" id="email" type="email" placeholder="Example@gmail.com">
            @if ($errors->has('email'))
                <strong>{{ $errors->first('email') }}</strong>
            @endif
            </div>
            <div class="form-group">
               <label class="col-sm-5" for="jenis">Jenis Usaha</label>
               <input name="jenis" class="form-control" id="jenis" type="text" placeholder="Jenis Usaha">
            @if ($errors->has('jenis'))
                 <strong>{{ $errors->first('jenis') }}</strong>
            @endif
            </div> 
            
            <div class="form-group">
                <label class="col-sm-2" for="alamat">Alamat</label>
                <input name="alamat" class="form-control" id="alamat" type="text" placeholder="Alamat">
            @if ($errors->has('alamat'))
                <strong>{{ $errors->first('alamat') }}</strong>
            @endif
            </div>
            <div class="form-group">
                <label class="col-sm-2" for="keterangan">Keterangan</label>
                <input name="keterangan" class="form-control" id="keterangan" type="text" placeholder="Keterangan">
            @if ($errors->has('keterangan'))
                <strong>{{ $errors->first('keterangan') }}</strong>
            @endif
            </div>
            <div class="form-group">
                <label class="col-sm-5" for="modal">Jenis Usaha</label>
                <input name="modal" class="form-control" id="modal" type="number" min="0" placeholder="Modal">
            @if ($errors->has('modal'))
                <strong>{{ $errors->first('modal') }}</strong>
            @endif
            </div>
            <div class="form-group">
                    <label class="col-sm-5" for="isFinal">Tandai Jika Sudah Benar</label>
                    <input name="isFinal" class="form" id="isFinal" type="checkbox">
                @if ($errors->has('isFinal'))
                    <strong>{{ $errors->first('isFinal') }}</strong>
                @endif
                </div>
                <div class="form-group">
                        <input name="submit" class="btn btn-danger" id="submit" type="submit" value="Tambah">
                      </div>



            </form>
        </div>
    </div>
</div>
</section>

@endsection