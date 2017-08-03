<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <title>Obras públicas Lobos</title>
    @stack('metatags')
    <!-- Bootstrap -->
    {{-- <link href="{{ asset('assets/dist/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/css/gestion.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="../node_modules/animate.css/animate.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/lobostrap/lobostrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/bootstrap-base.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/animate.css') }}" rel="stylesheet">


    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    @stack('css')

</head>
<body>

   @include('web/partials/header')

    <div id="app">

        @yield('content')

        @if (@isset($newsletter) && $newsletter === true)
          @include('web/partials/newsletter')
        @endif

    </div>
        @yield('common.modal')

    <footer>
      {{-- todo Arreglar FLICKR --}}
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <img src="{{asset('assets/img/logo.png')}}" alt="2017 - Municipio de Lobos">
          </div>
          <div class="col-md-8 col-xs-6 text-right icon-social-container">
            <a href="https://twitter.com/municipiolobos" target="_blank" class="icon-min twitter">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="https://www.facebook.com/municipiolobos/" target="_blank" class="icon-min facebook">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCgRZ4vy7UbgPe0RD8japUcw" target="_blank" class="icon-min youtube">
              <i class="fa fa-youtube-play"></i>
            </a>
            <a href="https://www.flickr.com/photos/municipiodelobos" target="_blank" class="icon-min flickr">
              <i class="fa fa-flickr" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    {{-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/gestion.min.js') }}"></script>
    {{-- {!!$map['js']!!} --}}

    @stack('scripts')

</body>
</html>
