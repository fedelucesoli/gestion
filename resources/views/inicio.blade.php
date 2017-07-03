@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="{{asset('assets/plugins/iziModal.min.css')}}">

  <div class="container">
      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
        @each('web.partials.carditem', $items, 'item')
      </div>
  </div>
  @include('web.partials.ficha')

@endsection

@push('scripts')

  <script src="{{ asset('assets/plugins/iziModal.js') }}"></script>
  <script type="text/javascript">

  var modal = $('#ficha').iziModal();
    var modal =  $("#ficha").iziModal(
      //   onOpening: function(modal){
      //
      //     modal.startLoading();
      //
      //     $.get('itemAjax/28', function(data) {
      //         $("#ficha .iziModal-content").html(data);
      //
      //         modal.stopLoading();
      //     });
      // }
    );
    $(document).on('click', '.card-obra', function (event) {
    event.preventDefault();
    $('#ficha').iziModal('open');
    // http://izimodal.marcelodolce.com/#Welcome

});
  </script>
@endpush
