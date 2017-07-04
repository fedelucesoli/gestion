<div class="modal fade" id="ficha" tabindex="-1" role="dialog" aria-labelledby="fichaLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>

@push('scripts')

  <script type="text/javascript">
  $('#ficha').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var idrequest = button.data('id');
  $.get( "api/item/"+idrequest)
    .done(function( data ) {
      $('#ficha .modal-body').html(data);
    });
  })
  </script>
   <script type="text/javascript">var centreGot = false;</script>

@endpush
