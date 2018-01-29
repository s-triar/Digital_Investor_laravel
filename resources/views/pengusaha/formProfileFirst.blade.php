@extends('layout.app')
<script>
    var loadFileKTP = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById('outputKTPPreview');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
        user.foto = event.target.files[0];
    };
    var loadFileProfil = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById('outputProfilPreview');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
        user.foto = event.target.files[0];
    };
</script>
@section('content')


<section class="probootstrap_section bg-light">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Isi Data Diri</h2>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-8 col-md-8">
            <div class="col-md probootstrap-animate fadeInUp probootstrap-animated ">
             <form class="probootstrap-form" method="post" action="{{route('pengusaha.isiprofilepost')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label class="" for="NIK">NIK</label>
                <input name="NIK" class="form-control" id="NIK" type="text" placeholder="NIK">
                @if ($errors->has('NIK'))
                    <strong>{{ $errors->first('NIK') }}</strong>
                @endif
              </div>
              <div class="form-group">
                <label class="" for="Nama">Nama Lengkap</label>
                <input name="Nama" class="form-control" id="Nama" type="text" placeholder="Nama Lengkap">
                @if ($errors->has('Nama'))
                    <strong>{{ $errors->first('Nama') }}</strong>
                @endif
              </div>
              <div class="form-group">
                <label class="" for="Agama">Agama</label>
                <input name="Agama" class="form-control" id="Agama" type="text" placeholder="Agama">
                @if ($errors->has('Agama'))
                    <strong>{{ $errors->first('Agama') }}</strong>
                @endif
              </div>
              <div class="form-group">
                <label class="" for="Alamat">Alamat Lengkap</label>
                <input name="Alamat" class="form-control" id="Alamat" type="text" placeholder="Alamat Lengkap">
                @if ($errors->has('Alamat'))
                    <strong>{{ $errors->first('Alamat') }}</strong>
                @endif
              </div>
              <div class="form-group">
                <label class="" for="Telepon">Nomor Telepon</label>
                <input name="Telepon" class="form-control" id="Telepon" type="text" placeholder="Nomor Telepon">
                @if ($errors->has('Telepon'))
                    <strong>{{ $errors->first('Telepon') }}</strong>
                @endif
              </div>
              <div class="form-group">
                <label class="" for="Tempat">Tempat Lahir</label>
                <input name="Tempat" class="form-control" id="Tempat" type="text" placeholder="Tempat Lahir">
                @if ($errors->has('Tempat'))
                    <strong>{{ $errors->first('Tempat') }}</strong>
                @endif
              </div>
              <div class="form-group">
                <label class="" for="Tanggal">Tanggal Lahir</label>
                <input class="form-control" type="date" name="Tanggal" >
                @if ($errors->has('Tanggal'))
                    <strong>{{ $errors->first('Tanggal') }}</strong>
                @endif
              </div>
              <div class="form-group">
                <label class="" for="Jenis">Jenis Kelamin</label><br>
                <input type="radio"  id="Jenis" name="Jenis_kelamin" value="Laki-laki" checked> Laki-laki<br>
                <input type="radio"  id="Jenis" name="Jenis_kelamin" value="Perempuan"> Perempuan <br>
              </div>
              <div class="form-group">
                <label class="" for="foto_ktp">Foto KTP</label>
                <input name="Foto_ktp" class="form-control" id="foto_ktp" type="file" accept="image/*" onchange="loadFileKTP(event)" placeholder="Foto KTP">
                @if ($errors->has('Foto_ktp'))
                    <strong>{{ $errors->first('Foto_ktp') }}</strong>
                @endif
                <img id="outputKTPPreview" class="img-fluid" src="" width="100%">
              </div>
              <div class="form-group">
                <label class="" for="foto_profil">Foto Profil</label>
                <input name="Foto_profil" class="form-control" id="foto_profil" type="file" accept="image/*" onchange="loadFileProfil(event)" placeholder="Foto Profil">
                 @if ($errors->has('Foto_profil'))
                    <strong>{{ $errors->first('Foto_profil') }}</strong>
                @endif
                <img id="outputProfilPreview" class="img-fluid img-circle" src="" width="100%">
              </div>
              <div class="form-group">
                <input name="submit" class="btn btn-primary" id="submit" type="submit" value="Submit">
              </div>
            </form>
             </div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
        </div>
      </div>
    </section>


@endsection
