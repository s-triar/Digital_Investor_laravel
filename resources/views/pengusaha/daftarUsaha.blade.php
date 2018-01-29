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
        
        <section>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Rincian Data Usaha</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
                  <tr><th rowspan="1" colspan="1">Nama Usaha</th><th rowspan="1" colspan="1">Jenis usaha</th><th rowspan="1" colspan="1">Keterangan</th><th rowspan="1" colspan="1">Alamat</th><th rowspan="1" colspan="1">Modal</th><th rowspan="1" colspan="1">Jatuh Tempo</th></tr>
              </thead>
              @foreach($usaha as $j)
              <tbody>
                <tr role="row" class="odd">
                <td class="sorting_1">{{$j->nama}}</td>
                <td>{{$j->jenis_usaha->nama}}</td>
                <td>{{$j->keterangan}}</td>
                <td>{{$j->alamat}}</td>
                <td>Rp. {{$j->modal}} ,-</td>
                <td>{{$j->jatuh_tempo}}</td>
              </tr></tbody>
              @endforeach
              @endif 
            </table>
          </div>
        </div>
            {{--  <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div>
            <div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">.</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">.</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>  --}}
          </div>
          <!-- /.box-body -->
        </div>
      </section>
    </div>
  </section>

@endsection