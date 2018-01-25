@extends('layout.app')

@section('content')

<div class="container">
        <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">More Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate fadeInUp probootstrap-animated">
              <div class="probootstrap-media-image" style="background-image: url(/img/artur.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">Admin</h5>
                <p>Nama : King Sulaiman<br>Kwarganegaraan : Indonesia<br>Hobi : Makan Somai</p>
              </div>
            </div>

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate fadeInUp probootstrap-animated">
              <div class="probootstrap-media-image" style="background-image: url(/img/sule.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">Penanggung Jawab</h5>
                <p>Nama : Hj Malik<br>Kwarganegaraan: Somalia<br>Hobi : Tidur</p>
              </div>
            </div>

          </div>
          <div class="col-md-6">
            
            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate fadeInUp probootstrap-animated">
              <div class="probootstrap-media-image" style="background-image: url(/img/pl.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">Pekerja Lapang</h5>
                <p>Nama :Doni<br>Kwarganegaraan : Zimbabwe <br>Hobi :Taken</p>
              </div>
            </div>


          </div>
        </div>
      </div>

@endsection