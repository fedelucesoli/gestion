{{-- TODO hacer funcionar BOTONES --}}
    <div class="detalle">
      <h4 class="text-center">Compartí esta obra en tus redes.</h4>
      <div class="row text-center">
        <a href="https://twitter.com/home?status=Obras+en+Lobos+{{$item->titulo}}+{{url()->current()}}" rel="nofollow" target="_blank" class="icon-button twitter">
          <i class="fa fa-twitter"></i>
          <span> Twitter </span>
        </a>
        <a href="  https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" rel="nofollow" target="_blank" class="icon-button facebook">
          <i class="fa fa-facebook"></i>
          <span> Facebook </span>
        </a>
        <a href="https://plus.google.com/share?url={{url()->current()}}" rel="nofollow" target="_blank" class="icon-button google-plus">
          <i class="fa fa-google-plus"></i>
          <span> Google +</span>
        </a>

        <a href="mailto:?subject={{$item->titulo}}&amp;body={{url()->current()}}" class="icon-button email">
          <i class="fa fa-envelope"></i>
          <span>E-mail</span>
        </a>
      </div>
    </div>
