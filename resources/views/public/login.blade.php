@extends('layout.app')

@section('content')

<section class="probootstrap_section bg-light">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate fadeInUp probootstrap-animated">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Masuk</h2>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-8 col-md-8">
       
            <div class="col-md probootstrap-animate fadeInUp probootstrap-animated ">
             <form class="probootstrap-form" method="post" action="{{route('authloginpost')}}">

                @if(Session::has('register_success'))
                <div class="text-center">
                      <strong>{{Session::get('register_success')}}</strong>
                </div>
                @endif
                @if(Session::has('account-active'))
                <div class="text-center">
                      <strong>{{Session::get('account-active')}}</strong>
                </div>
                @endif

             @if(Session::has('login-error'))
            <div class="text-center">
                  <strong>{{Session::get('login-error')}}</strong>
            </div>
            @endif
            {{ csrf_field() }}
              <div class="form-group">
                <label class="" for="email">Email</label>
                <input name="email" class="form-control" id="email" type="email" placeholder="Email">
                @if ($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif
                @if(Session::has('login-error-email'))
                    <strong>{{Session::get('login-error-email')}}</strong>
                @endif
              </div>
              <div class="form-group">
                <label class="" for="password">Password</label>
                <input name="password" class="form-control" id="password" type="password" placeholder="Password">
                @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
                 @if(Session::has('login-error-password'))
                    <strong>{{Session::get('login-error-password')}}</strong>
                @endif
              </div>
              <div class="form-group">
                <input name="submit" class="btn btn-primary" id="submit" type="submit" value="Masuk">
              </div>
            </form>
             </div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
        </div>
      </div>
    </section>

@endsection