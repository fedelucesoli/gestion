<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Obras públicas Lobos</title>


    {{-- <link href="{{ asset('assets/dist/bootstrap-base.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/dist/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lobostrap/lobostrap.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/plugins/animate.css') }}" rel="stylesheet">

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    @stack('css')


</head>
<body>
   @include('common/header-solo')

    <div class="container box-linea" style="margin-top: 150px;">
       @if (Session::has('mensaje'))
            <div class="alert alert-info">{{ Session::get('mensaje') }}</div>
        @endif

       @yield('content')
     </div>

    @include('common.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @stack('scripts')

</body>
</html>
