@extends('pengusaha.layout.pengusahaApp')

@section('content')
{{--  Untuk menampilkan detail usaha dan mengedit detail usaha sebelum terverified oleh admin --}}

<section class="probootstrap-section-half d-md-flex" id="section-about" style="margin-top:4%;">
<div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn">
    <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
  <ol class="carousel-indicators">
    <li style="background-color:blue;" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li style="background-color:blue;" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li class="active" style="background-color:blue;" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img width="100%" class="d-block w-100" alt="First slide" src="/img/perikanan.png">
    </div>
    <div class="carousel-item">
      <img width="100%" class="d-block w-100" alt="Second slide" src="/img/peternakan.png">
    </div>
    <div class="carousel-item active">
      <img width="100%" class="d-block w-100" alt="Third slide" src="/img/perikanan.png">
    </div>
  </div>
  <a class="carousel-control-prev" role="button" href="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only" style="background-color:green;">Previous</span>
  </a>
  <a class="carousel-control-next" role="button" href="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>


<div class="probootstrap-text">
    <div class="probootstrap-inner probootstrap-animate fadeInRight probootstrap-animated" data-animate-effect="fadeInRight">
        <h2 class="heading mb-4">Nama usaha</h2>
        <div class="row">
            <div class="col-sm-12">
                <p>Keterangan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Jenis Usaha</strong>
            </div>
            <div class="col-md-8">
                <p>lorem ipsum</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Alamat Usaha</strong>
            </div>
            <div class="col-md-8">
                <p>lorem ipsum</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Modal</strong>
            </div>
            <div class="col-md-8">
                <p>Rp. 8.000.000,-</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Verifikasi</strong>
            </div>
            <div class="col-md-8">
                <a class="btn btn-sm btn-danger" href="#">Belum Diverifikasi</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Jatuh Tempo</strong>
            </div>
            <div class="col-md-8">
                <p>12 Desember 2018</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Status</strong>
            </div>
            <div class="col-md-8">
                <a class="btn btn-sm btn-success" href="#">Open</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Edit</strong>
            </div>
            <div class="col-md-8">
                <a class="btn btn-sm btn-danger" href="#">Tidak Bisa</a>
            </div>
        </div>
        
    </div>
</div>
</section>

<section class="probootstrap_section bg-light">
        <div class="container">
          <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
            <div class="col-md-12">
              <h2 class="display-4 border-bottom probootstrap-section-heading">Daftar Usaha</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <a href="#" class="probootstrap-thumbnail">
                <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate fadeInUp probootstrap-animated">
                    <div class="probootstrap-media-image" >
                        <img src="/img/perikanan.png" width="100%">
                    </div>
                    <div class="media-body">
                    <h5 class="mb-3">Perikanan</h5>
                    <p>Dibutuhkan modal untuk pembelian bibit ikan nila</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="probootstrap-thumbnail">
                <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate fadeInUp probootstrap-animated">
                    <div class="probootstrap-media-image" >
                        <img src="/img/perikanan.png" width="100%">
                    </div>
                    <div class="media-body">
                    <h5 class="mb-3">Perikanan</h5>
                    <p>Dibutuhkan modal untuk pembelian bibit ikan nila</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="probootstrap-thumbnail">
                <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate fadeInUp probootstrap-animated">
                    <div class="probootstrap-media-image" >
                        <img src="/img/perikanan.png" width="100%">
                    </div>
                    <div class="media-body">
                    <h5 class="mb-3">Perikanan</h5>
                    <p>Dibutuhkan modal untuk pembelian bibit ikan nila</p>
                    </div>
                </div>
                </a>
            </div>
          </div>
          <div class="row">
                <div class="col-md-4">
                    <a href="#" class="probootstrap-thumbnail">
                    <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate fadeInUp probootstrap-animated">
                        <div class="probootstrap-media-image" >
                            <img src="/img/perikanan.png" width="100%">
                        </div>
                        <div class="media-body">
                        <h5 class="mb-3">Perikanan</h5>
                        <p>Dibutuhkan modal untuk pembelian bibit ikan nila</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="probootstrap-thumbnail">
                    <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate fadeInUp probootstrap-animated">
                        <div class="probootstrap-media-image" >
                            <img src="/img/perikanan.png" width="100%">
                        </div>
                        <div class="media-body">
                        <h5 class="mb-3">Perikanan</h5>
                        <p>Dibutuhkan modal untuk pembelian bibit ikan nila</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="probootstrap-thumbnail">
                    <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate fadeInUp probootstrap-animated">
                        <div class="probootstrap-media-image" >
                            <img src="/img/perikanan.png" width="100%">
                        </div>
                        <div class="media-body">
                        <h5 class="mb-3">Perikanan</h5>
                        <p>Dibutuhkan modal untuk pembelian bibit ikan nila</p>
                        </div>
                    </div>
                    </a>
                </div>
              </div>
        </div>
      </section>

@endsection