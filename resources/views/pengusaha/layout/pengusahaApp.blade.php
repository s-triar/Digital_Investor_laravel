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

    {{--  <link href="{{ URL::asset('css/pengusaha/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/pengusaha/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/pengusaha/jquery.fancybox.pack.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/pengusaha/nice-select.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/pengusaha/bootstrap-slider.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/pengusaha/style.css') }}" rel="stylesheet">
      --}}

	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar" style="background-color:grey">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Digital Investor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="{{route('pengusaha.daftarUsaha')}}">Daftar Usaha</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pencarianusaha')}}">Daftar Jaminan</a></li>
            @if (Auth::guest())
                <li class="nav-item"><a class="nav-link" href="{{ route('authlogin') }}">Masuk</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('authregister') }}">Daftar</a></li>
            @else
                <li class="dropdown nav-item">
                    <a href="#" class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->nama }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('authlogout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('authlogout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </body>
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
{{--  
    <script src="{{ URL::asset('js/pengusaha/tether.min.js') }}"></script>
    <script src="{{ URL::asset('js/pengusaha/jquery.raty-fa.js') }}"></script>
    <script src="{{ URL::asset('js/pengusaha/jquery.popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/pengusaha/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/pengusaha/bootstrap-slider.min.js') }}"></script>
    <script src="{{ URL::asset('js/pengusaha/slick.min.js') }}"></script>
    <script src="{{ URL::asset('js/pengusaha/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::asset('js/pengusaha/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ URL::asset('js/pengusaha/SmoothScroll.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="{{ URL::asset('js/pengusaha/scripts.js') }}"></script>  --}}
	
</body></html>