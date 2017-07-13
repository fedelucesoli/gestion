<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Obras públicas Lobos</title>

    <!-- Bootstrap -->
    {{-- <link href="{{ asset('assets/dist/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/css/gestion.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="../node_modules/animate.css/animate.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/lobostrap/lobostrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/bootstrap-base.css') }}" rel="stylesheet">


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
    @yield('modal')
    <footer>
      <div class="container">
        <div class="row">
          {{-- todo: iconos de las redes sociales y link a la pagina web --}}
          <div class="col-md-12 text-right"> 2017 - Municipio de Lobos </div>
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
