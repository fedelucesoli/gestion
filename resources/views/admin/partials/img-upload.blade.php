@push('scripts')
  <script src="{{asset("assets/vendor/dropzone.js")}}"></script>

  <script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});

$('#uploadimages').on('show.bs.modal', function (event) {
 $("#formDropZone").append("<form id='dZUpload' class='dropzone borde-dropzone' style='cursor: pointer;'>"+
 	                         "<div class='dz-default dz-message text-center'>"+
 	                           "<span><h2>Arrastra los archivos aquí</h2></span><br>"+
 	                         "<p>o click para seleccionar</p></div>"+
                           '{{ csrf_field() }}'+
                           "</form>");
      myAwesomeDropzone = {
        url: "",
        addRemoveLinks: true,
        paramName: "file",
        maxFilesize: 4, // MB
        dictRemoveFile: "Remover",
        params: {
            parametro1:'valor1',
            parametro2:'valor2'
        },
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
        },
        error: function (file, response) {
          file.previewElement.classList.add("dz-error");
        }
      } // FIN myAwesomeDropzone
  var myDropzone = new Dropzone("#dZUpload", myAwesomeDropzone);
    myDropzone.on("complete", function(file,response) {

  });
});
$('#uploadimages').on('hidden.bs.modal', function (event) {
  $("#formDropZone").empty();
  getArchivos();
});

function getArchivos() {
    $.ajax({
        type: 'GET',
        url: 'php/getArchivos.php',
        success: function(data){
          $("#divMostrarArchivos").html("");
          $("#divMostrarArchivos").html("<br><p>Archivos:</p>"+data);
        }
    });
};
  </script>
<link rel="stylesheet" href="{{asset('vendor/dropzone.css')}}">

@endpush
<button type="button" class="btn btn-success" data-toggle="modal"  data-target="#uploadimages">Archivos</button>
               <div class="row" id="divMostrarArchivos"></div>

<div class="modal fade" id="uploadimages" tabindex="-1" role="dialog" aria-labelledby="uploadimages">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Subir Archivos</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-md-12" id="formDropZone"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
