    <div class="grid-item col-md-4 col-sm-6 col-xs-12">
      <div class="grid-item-content card-obra">

        @foreach ($item->images as $image)
          @if ($loop->first)
            <a href='{{ route('web.item.detalle', [$item->slug]) }}'>

            <div
              class="back-img"
              style="background-image: url({{asset("uploads/full_size/$image->filename")}});"
              data-toggle="modal"
              data-target="#ficha"
              data-id="{{$item->id}}"
              >
            </div>
          </a>
          @endif
        @endforeach

          <div class="detalles">
            <a class="categoria" href='{!! route('web.categoria.list', str_slug($item->categoria, "-")) !!}'>{{ $item->categoria }}</a>
            {{-- <a data-toggle="modal" data-target="#ficha" data-id="{{$item->id}}"> --}}
            <a href='{{ route('web.item.detalle', [$item->slug]) }}'>
              <h4>{{ $item->titulo }}</h4>
            </a>
          </div>
      </div>
    </div>
