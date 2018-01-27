@extends('pengusaha.layout.pengusahaApp')

@section('content')
<section class="probootstrap_section bg-light">
        <div class="container">
          <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
            <div class="col-md-12">
              <h2 class="display-4 border-bottom probootstrap-section-heading">Tambah Jaminan</h2>
            </div>
          </div>
          <div class="row">
          <div class="col-lg-2 col-md-2"></div>
    <div class="col-lg-8 col-md-8">
        <div class="col-md probootstrap-animate fadeInUp probootstrap-animated ">
         <form class="probootstrap-form" method="post" action="{{route('pengusaha.tambahJaminanPost')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="id_usaha" class="form-control" id="id_usaha" type="text" value="{{$id_usaha}}" readonly hidden>
            <div class="form-group">
            <label class="col-sm-5" for="nama">Nama Jaminan</label>
            <input name="Nama_Jaminan" class="form-control" id="nama" type="text" placeholder="Nama Jaminan">
            @if ($errors->has('Nama_Jaminan'))
                <strong>{{ $errors->first('Nama_Jaminan') }}</strong>
            @endif
          </div>
            <div class="form-group">
               <label class="col-sm-5" for="jenis">Jenis Jaminan</label>
               <select name="jenis_jaminan" class="form-control">
                   @foreach($jenis_jaminan as $j)
                   <option value="{{$j->id}}">{{$j->nama}}</option>
                   @endforeach
               </select>
            </div> 
            
            <div class="form-group">
                <label class="col-sm-2" for="keterangan">Keterangan</label>
                <input name="Keterangan" class="form-control" id="keterangan" type="text" placeholder="Keterangan">
            @if ($errors->has('Keterangan'))
                <strong>{{ $errors->first('Keterangan') }}</strong>
            @endif
            </div>
                
                <div class="form-group">
                <label class="" for="foto_jaminan">Foto Jaminan</label>
                    <input name="Foto_jaminan" class="form-control" id="foto_jaminan" type="file" accept="image/*" onchange="loadFileFoto(event)" placeholder="Foto Jaminan">
                        @if ($errors->has('Foto_jaminan'))
                            <strong>{{ $errors->first('Foto_jaminan') }}</strong>
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
