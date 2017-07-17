<div class="ficha box-linea">
  <div class="row">


    <div class="col-md-12" id="scroll-div">

      {{-- TODO hrefs --}}
      <ol class="breadcrumb" style="display:inline-block">
        <li><a href="{{ url('/')}}">Inicio</a></li>
        <li class="active"><a href="#">{{ $item->categoria }}</a></li>
      </ol>
      <span class="pull-right"><a href="{{ url()->previous() }}">Volver </a></span>
      <hr>

      <h1>{{$item->titulo}}</h1>
      <p>{{$item->descripcion}}</p>

      <div class="row">
        <div class="col-md-6">
          @component('web.partials.galeria', ['item' => $item ])@endcomponent
        </div>
        <div class="col-md-6">
          {!!$map['html']!!}
        </div>
      </div>
      <div class="row">
        
      </div>
      <div class="detalle">
        <h3 class="alt" class="alt">Estado de la obra</h3>

          <div class="progreso">

            <span class="descripcion">Inicio</span>
            <span class="descripcion pull-right">Finalización</span>


            <div class="timeline">
              <div class="timeline-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>

            <span class="fecha">{{ $item->fecha_inicio}}</span>
            <span class="fecha pull-right">
              {{ $item->fecha_fin}}
            </span>

          </div>

      </div>

      <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your share button code -->
        <div class="fb-share-button"
          data-href="http://www.your-domain.com/your-page.html"
          data-layout="button_count">
        </div>


      {{-- TODO BOTONES --}}
      <div class="detalle">
        <h4 class="text-center">Compartí esta obra en tus redes.</h4>
        <div class="row text-center">
          <a href="https://twitter.com/minimalmonkey" class="icon-button twitter">
            <i class="icon-twitter"></i>
            <span> Twitter </span>
          </a>
          <a href="{{Request::url()}}" data-href="{{Request::url()}}" class="icon-button facebook">
            <i class="icon-facebook"></i>
            <span> Facebook </span>
          </a>
          <a href="https://plus.google.com" class="icon-button google-plus">
            <i class="icon-google-plus"></i>
            <span> Google +</span>
          </a>
        </div>
      </div>
    </div>
    {{-- fin div6 --}}
    <div class="col-md-6">
      @component('web.partials.galeria', ['item' => $item ])@endcomponent
      <div class="detalle">
        {{-- <h3 class="alt">Ubicación</h3> --}}
        {!!$map['html']!!}
      </div>

    </div>
  </div>
</div>
