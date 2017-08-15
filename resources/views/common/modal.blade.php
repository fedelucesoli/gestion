<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="fichaLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        {{-- <h4 class="modal-title">{{$titulo}}</h4> --}}
      </div>
      <div class="modal-body">
        @include($include)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>

@push('scripts')

  <script type="text/javascript">

  $('#modal').on('show.bs.modal');
  // $('#modal').on('show.bs.modal', function (event) {
  // var button = $(event.relatedTarget);
  // var idrequest = button.data('id');
  // $.get( "api/item/"+idrequest)
  //   .done(function( data ) {
  //     $('#ficha .modal-body').html(data);
  //   });
  // })
  </script>


@endpush
