<section class="bk-light">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
          <h2>Más obras</h2>
          <div class="top"></div>
        </div>
        @each('web.partials.carditem', $itemrelacionados, 'item')
    </div>
  </div>
</section>
