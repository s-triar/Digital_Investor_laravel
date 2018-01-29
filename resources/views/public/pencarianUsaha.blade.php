@extends('layout.app')

@section('content')

{{--  Tambahkan kode disini  --}}

<section class="probootstrap_section" id="section-feature-testimonial">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
              <h2 class="display-4 border-bottom probootstrap-section-heading">Cari usaha</h2>
              <body>
                    <form>
                        <input class="search" type="text" placeholder="Cari..." required>
                        <input class="button" type="button" value="Cari">		
                    </form>
                    </body>
  
            </div>
          </div>
          
        </div>
      </section>

      <section class="content">
          <div class="row">
            <div class="col-xs-12">
                <!-- /.box-header -->
                <div class="box-body"><div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Investor</h3>
                  <a href="tambah_investor.php"><button type="button" class="pull-right btn btn-success"><span class="fa fa-plus"> <b>Tambah Investor</b></span></button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nik</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th><center>Aksi</center></th>
                    </tr>
                    </thead>
                    <tbody>
            
                    <tr>
                      <td>nik</td>
                      <td>nama</td>
                      <td>alamat</td>
                      <td>telepon</td>
                      <td>email</td>
                      <td>status</td>
                    </tr>
                   
                    </tbody>
                  </table>
                </div>
              </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>

@endsection