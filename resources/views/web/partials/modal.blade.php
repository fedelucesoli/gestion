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
  var button = $(event.relatedTarget) // Button that triggered the modal
  var idrequest = button.data('id') // Extract info from data-* attributes
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  $.get( "api/item/"+idrequest)
  .done(function( data ) {
    $('#ficha .modal-body').html(data);
  });
  })
  </script>
   <script type="text/javascript">var centreGot = false;</script>

@endpush
