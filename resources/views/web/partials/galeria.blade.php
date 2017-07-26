{{-- @foreach ($item->images as $key) --}}

{{-- TODO background cover  --}}

<div class="owl-carousel owl-theme">
  @foreach ($item->images as $imagen)
    <div class="item" >
      <div class="img" style="background-image: url('{{asset("uploads/full_size/$imagen->filename")}}')"></div>
      {{-- <img class="owl-lazy" data-src="{{asset("uploads/full_size/$imagen->filename")}}"  alt="{{$item->titulo}}" height="400px"> --}}
    </div>
  @endforeach
</div>

@push('scripts')

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/owl.carousel.min.js') }}"></script>


  <script type="text/javascript">
  $(document).ready(function(){
    var syncedSecondary = true;
    $(".owl-carousel").owlCarousel({

     items : 1,
     slideSpeed : 2000,
     nav: true,
     autoplay: false,
     dots: true,
     loop: true,
     lazyLoad: true,
     responsiveRefreshRate : 200,
     navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
   });

  });
  </script>
@endpush
