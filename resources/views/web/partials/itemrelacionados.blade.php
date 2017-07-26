@if ($itemrelacionados)

    <section class="bk-light">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

              <div class="top"></div>
            </div>
            @each('web.partials.tarjeta', $itemrelacionados, 'item')
        </div>
      </div>
    </section>
    
@endif
