@extends('layout.app')

@section('content')

<section class="probootstrap_section bg-light">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Daftar</h2>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-8 col-md-8">
            <div class="col-md probootstrap-animate fadeInUp probootstrap-animated ">
             <form class="probootstrap-form" method="post" action="{{route('authregisterpost')}}">
            {{ csrf_field() }}
              <div class="form-group">
                
                <input name="nama" class="form-control" id="nama" type="text" placeholder="Username">
                @if ($errors->has('nama'))
                    <strong>{{ $errors->first('nama') }}</strong>
                @endif
              </div>
              <div class="form-group">
                
                <input name="email" class="form-control" id="email" type="email" placeholder="Email">
                @if ($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif
              </div>

              <div class="form-group">
                <select name="level" id="level" class="form-control">
                    <option value="" disabled>Pilih Salah Satu : </option>
                @foreach($level as $l)
                    <option value="{{$l->id}}">{{$l->nama}}</option>
                @endforeach
                </select>
              </div>

              <div class="form-group">
                <input name="password" class="form-control" id="password" type="password" placeholder="Password">
                @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
              </div>
              <div class="form-group">
                
                <input name="password_confirmation" class="form-control" id="password_confirmation" type="password" placeholder="Confirm Password">
              </div>
              
              <div class="form-group">
                <input name="submit" class="btn btn-primary" id="submit" type="submit" value="Daftar">
              </div>
            </form>
             </div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
        </div>
      </div>
    </section>

@endsection