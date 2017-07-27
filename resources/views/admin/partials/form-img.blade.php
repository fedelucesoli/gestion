<div class="form-group ">
 <label class="control-label col-sm-3" for="imagenes">Imagenes</label>
 <div class="col-sm-8">


       {{-- <input name="file" id="images" type="file" multiple /> --}}
       <div id="filediv">
         <input name="file[]" type="file" id="file" multiple/>
       </div>
       <br/>
       {{-- <input type="button" class="add_more" id="add_more" value="Agregas más fotos"/> --}}

 </div>
</div>


@push('scripts')
{{--
  <script type="text/javascript">
  var abc = 0; //Declaring and defining global increement variable

  $(document).ready(function() {

  //To add new input file field dynamically, on click of "Add More Files" button below function will be executed
      $('#add_more').click(function() {
          $(this).before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                  $("<input/>", {name: 'file[]', type: 'file', id: 'file'}),
                  $("<br/><br/>")
                  ));
      });

  //following function will executes on change event of file input to select different file
  $('body').on('change', '#file', function(){
              if (this.files && this.files[0]) {
                   abc += 1; //increementing global variable by 1

                  var z = abc - 1;
                  var x = $(this).parent().find('#previewimg' + z).remove();
                  $(this).before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src='' style='width:40%; height:40%;'/></div>");

                  var reader = new FileReader();
                  reader.onload = imageIsLoaded;
                  reader.readAsDataURL(this.files[0]);

                  $(this).hide();
                  $("#abcd"+ abc).append($("<i class='fa fa-trash'></i>").click(function() {
                    $(this).parent().parent().remove();
                  }));
              }
          });

  //To preview image
      function imageIsLoaded(e) {
          $('#previewimg' + abc).attr('src', e.target.result);
      };

      $('#upload').click(function(e) {
          var name = $(":file").val();
          if (!name)
          {
              alert("First Image Must Be Selected");
              e.preventDefault();
          }

      });
  });

  </script>
  <style media="screen">
  .upload{
  border:1px solid #ff0000;
  color:#fff;
  border-radius:5px;
  padding:10px;
  text-shadow:1px 1px 0px green;
  box-shadow: 2px 2px 15px rgba(0,0,0, .75);
}
.upload:hover{
  cursor:pointer;
  background:#c20b0b;
  border:1px solid #c20b0b;
  box-shadow: 0px 0px 5px rgba(0,0,0, .75);
}

.uploadH2{margin-top:3%; font-size:36px;}

#file{
  color:green;
  padding:5px; border:1px dashed #123456;
  background-color: #f9ffe5;
}
#img_upload{
  margin-left: 45px;
}

#noerror{
  color:green;
  font-weight:bolder;
  text-align: left;
}
#error{
  color:red;
  font-weight:bolder;
  text-align: left;
}
#image img{
  width: 10%;
  border: none;
  height:10%;
}

.abcd{
  text-align: center;
}

.abcd #previewimg {
  width:10%;
  height: 10%;
  border: 1px solid white;
}
.abcd #delete{
  width:3%;
  padding: 5px;
  border: 1px solid white;
}
b{
  color:red;
}

  </style> --}}

@endpush
