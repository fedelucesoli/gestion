<div class="grid-item col-md-4 col-sm-6 col-xs-12">
  <div class="grid-item-content card-obra  animated fadeInUp">

    @foreach ($item->images as $image)
      @if ($loop->first)
        <div
          class="back-img"
          style="background-image: url({{asset("uploads/full_size/$image->filename")}});"
          data-toggle="modal"
          data-target="#ficha"
          data-id="{{$item->id}}"
          >
        </div>
      @endif
    @endforeach

      <div class="detalles">
        <a class="categoria" href='{{ url("categoria/"+ str_slug($item->categoria, "-")) }}'>{{ $item->categoria }}</a>
        {{-- <a data-toggle="modal" data-target="#ficha" data-id="{{$item->id}}"> --}}
        <a href='{{url("item/$item->id")}}'>
          <h4>{{ $item->titulo }}</h4>
        </a>
      </div>
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
  </div>
</div>
