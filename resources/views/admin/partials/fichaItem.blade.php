  <div class="media">
  <div class="media-left">
    <a href="#">
      {{-- @if (isset($item->images))
        <img src="{{asset('img/placeholder.png')}}" alt="">
      @endif --}}
      @foreach ($item->images as $image)
        @if ($loop->first)
          <img class="media-object" src="{{asset("uploads/thumb_size/$image->filename")}} " alt="...">
        @endif
      @endforeach
    </a>
  </div>
  <div class="media-body">
    <h6>{{ $item->categoria }}</h6>
    <h4 class="media-heading">{{ $item->titulo }}</h4>

  </div>
</div>
