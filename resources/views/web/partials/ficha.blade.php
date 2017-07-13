<div class="ficha box-linea">
  <div class="row">
    <div class="col-md-6">
      @component('web.partials.galeria', ['item' => $item ])

      @endcomponent

      <div class="detalle">
        <h4 class="text-center">Compartí estas obras en tus redes.</h4>
        <div class="row">
            <div class="text-center col-xs-4 col-sm-12 col-md-4 col-lg-4  col-md-4 shareItem">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://apps.moron.gob.ar/obras" target="_blank" class="btn btn-sm btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span> Facebook</a>
            </div>
            <div class="text-center col-xs-4 col-sm-12 col-md-4 col-lg-4 shareItem">
                <a href="https://twitter.com/share?size=large&amp;text=Obras+que+transforman+tu+vida&amp;url=https%3A%2F%2Fapps.moron.gob.ar%2Fobras&amp;hashtags=Obras%2C+Moron+Gobierno%2C+Corazon+del+Oeste+%2C+Zona+Oeste+%2C+Cambiemos%2C+Tagliafierro&amp;via=morongobierno&amp;related=Municipio+de+Moron" target="_blank" class="btn btn-sm btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span> Twitter</a>
            </div>
            <div style="" class="text-center col-xs-4 col-sm-12 col-md-4 col-lg-4 shareItem">
                <a href="https://plus.google.com/share?url=https://apps.moron.gob.ar/obras" target="_blank" class="btn btn-sm btn-round btn-o btn-google"><span class="fa fa-google-plus"></span> Google+</a>
            </div>
        </div>
      </div>

    </div>

    <div class="col-md-6">
      <ol class="breadcrumb">
        <li><a href="#">Inicio</a></li>
        <li class="active"><a href="#">{{ $item->categoria }}</a></li>
      </ol>

      <h1>{{$item->titulo}}</h1>
      <p>{{$item->descripcion}}</p>

      {{-- compartir --}}



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

      <div class="detalle">
        <h3 class="alt">Ubicación</h3>
        {!!$map['html']!!}
      </div>

    </div>
    {{-- fin div6 --}}

  </div>
</div>
