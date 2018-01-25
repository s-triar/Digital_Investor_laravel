<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
      <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Digital Investor</title>
		<meta name="description" content="Investasi dan mencari modal dengan mudah.">
		<meta name="keywords" content="digital investor, cara mudah mencari modal usaha, cara mencari investor">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/select2.css') }}">
    

    <link rel="stylesheet" href="{{ URL::asset('css/helpers.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar" style="background-color:grey">
      <div class="container">
        <a class="navbar-brand" href="/">Digital Investor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pencarianusaha')}}">Pencarian Usaha</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('SyaratdanKetentuan')}}">Syarat dan Ketentuan</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('aboutus') }}">Tentang Kami</a></li>
            @if (!Auth::guard('pengusaha')->check() && !Auth::guard('investor')->check())
                <li class="nav-item"><a class="nav-link" href="{{ route('authlogin') }}">Masuk</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('authregister') }}">Daftar</a></li>
            @elseif(Auth::guard('pengusaha')->check())
                <li class="nav-item">
                    <a href="{{url('/pengusaha/home')}}" class="nav-link js-scroll-trigger">
                        {{ Auth::guard('pengusaha')->user()->nama }}
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('authlogout') }}" class="nav-link js-scroll-trigger"
                      onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('authlogout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
            @elseif(Auth::guard('investor')->check())
                <li class="nav-item">
                    <a href="{{url('/investor/home')}}" class="nav-link js-scroll-trigger">
                        {{ Auth::guard('investor')->user()->nama }}
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('authlogout') }}" class="nav-link js-scroll-trigger"
                      onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('authlogout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->


@yield('content')


<footer class="probootstrap_section probootstrap-border-top">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-3">
        <h3 class="probootstrap_font-18 mb-3">Hubungi Kami</h3>
        <ul class="list-unstyled">
          <li>Gmail  :melonmupe@gmail.com</li>
          <li>Wa     :085859445594</li>
          <li><a href="https://www.facebook.com/muhammad.permadi.3" target="_blank">Facebook</a></li>
        </ul>
      </div>
    </div>
    <div class="row pt-5">
      <div class="col-md-12 text-center">
        <p class="probootstrap_font-14">© 2017. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://probootstrap.com/" target="_blank">ProBootstrap</a><small> <a href="https://probootstrap.com/license/">license</a>)</small></p>
        <p class="probootstrap_font-14">Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
      </div>
    </div>
  </div>
</footer>

    
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>

    <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>

    <script src="{{ URL::asset('js/select2.min.js') }}"></script>

    <script src="{{ URL::asset('js/main.js') }}"></script>
	
</body></html>