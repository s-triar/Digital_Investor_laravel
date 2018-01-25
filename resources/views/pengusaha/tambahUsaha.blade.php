@extends('pengusaha.layout.pengusahaApp')
<script>
        var loadFileFoto= function(event) {
            var reader = new FileReader();
            reader.onload = function(){
            var output = document.getElementById('outputPreview');
            output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
            user.foto = event.target.files[0];
        };
    </script>
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
         <form class="probootstrap-form" method="post" action="{{route('pengusaha.tambahUsahaPost')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
            <label class="col-sm-2" for="nama">nama</label>
            <input name="nama" class="form-control" id="nama" type="text" placeholder="Nama Usaha">
            @if ($errors->has('nama'))
                <strong>{{ $errors->first('nama') }}</strong>
            @endif
          </div>
            <div class="form-group">
               <label class="col-sm-5" for="jenis">Jenis Usaha</label>
               <select name="jenis_usaha" class="form-control">
                   @foreach($jenis_usaha as $j)
                   <option value="{{$j->id}}">{{$j->nama}}</option>
                   @endforeach
               </select>
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
                <label class="col-sm-5" for="modal">Modal</label>
                <input name="modal" class="form-control" id="modal" type="number" min="0" placeholder="Modal">
            @if ($errors->has('modal'))
                <strong>{{ $errors->first('modal') }}</strong>
            @endif
            </div>
            <div class="form-group">
                    <label class="col-sm-5" for="isFinal">Tandai Jika Sudah Benar</label>
                    <input name="isFinal" class="form" id="isFinal" type="checkbox" value="1">
                @if ($errors->has('isFinal'))
                    <strong>{{ $errors->first('isFinal') }}</strong>
                @endif
                </div>
                
                <div class="form-group">
                <label class="" for="foto_usaha">Foto Usaha</label>
                    <input name="Foto_usaha" class="form-control" id="foto_usaha" type="file" accept="image/*" onchange="loadFileFoto(event)" placeholder="Foto Usaha">
                        @if ($errors->has('Foto_usaha'))
                            <strong>{{ $errors->first('Foto_usaha') }}</strong>
                        @endif
                        <img id="outputPreview" class="img-fluid" width="100%">
                </div>

                <br>
                <div class="form-group">
                        <input name="submit" class="btn btn-danger" id="submit" type="submit" value="Tambah">
                      </div>



            </form>
        </div>
    </div>
</div>
</section>

@endsection