<h3 align="center">Ajax Multiple Image Upload with Edit Delete using PHP Mysql</h3>
   <br />
   <div align="right">
    <input type="file" name="multiple_files" id="multiple_files" multiple />
    <span class="text-muted">Only .jpg, png, .gif file allowed</span>
    <span id="error_multiple_files"></span>
   </div>
   <br />
   <div class="table-responsive" id="image_table">
    
   </div>
  </div>
 </body>
</html>

<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <form method="POST" id="edit_image_form">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Edit Image Details</h4>
    </div>
    <div class="modal-body">
     <div class="form-group">
      <label>Image Name</label>
      <input type="text" name="image_name" id="image_name" class="form-control" />
     </div>
     <div class="form-group">
      <label>Image Description</label>
      <textarea name="image_description" id="image_description" class="form-control"></textarea>
     </div>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="image_id" id="image_id" value="" />
     <input type="submit" name="submit" class="btn btn-info" value="Edit" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </form>
  </div>
 </div>
</div>
<script>
$(document).ready(function(){
 load_image_data();
 function load_image_data()
 {
  $.ajax({
   url:"fetch-banner.php",
   method:"POST",
   success:function(data)
   {
    $('#image_table').html(data);
   }
  });
 } 
 $('#multiple_files').change(function(){
  var error_images = '';
  var form_data = new FormData();
  var files = $('#multiple_files')[0].files;
  if(files.length > 10)
  {
   error_images += 'You can not select more than 10 files';
  }
  else
  {
   for(var i=0; i<files.length; i++)
   {
    var name = document.getElementById("multiple_files").files[i].name;
    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
    {
     error_images += '<p>Invalid '+i+' File</p>';
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
    var f = document.getElementById("multiple_files").files[i];
    var fsize = f.size||f.fileSize;
    if(fsize > 20000000)
    {
     error_images += '<p>' + i + ' File Size is very big</p>';
    }
    else
    {
     form_data.append("file[]", document.getElementById('multiple_files').files[i]);
    }
   }
  }
  if(error_images == '')
  {
   $.ajax({
    url:"upload-banner.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#error_multiple_files').html('<br /><label class="text-primary">Uploading...</label>');
    },   
    success:function(data)
    {
     $('#error_multiple_files').html('<br /><label class="text-success">Uploaded</label>');
     load_image_data();
    }
   });
  }
  else
  {
   $('#multiple_files').val('');
   $('#error_multiple_files').html("<span class='text-danger'>"+error_images+"</span>");
   return false;
  }
 });  
 $(document).on('click', '.edit', function(){
  var image_id = $(this).attr("id");
  $.ajax({
   url:"edit-banner.php",
   method:"post",
	 
   data:{image_id:image_id},
   success:function(data)
   {
    $('#imageModal').modal('show');
    $('#image_id').val(image_id);
    $('#image_name').val(data.image_name);
    $('#image_description').val(data.image_description);
   }
 
  });
 }); 
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var image_name = $(this).data("image");
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"delete-banner.php",
    method:"POST",
    data:{image_id:image_id, image_name:image_name},
    success:function(data)
    {
     load_image_data();
     alert("Image removed");
    }
   });
  }
 }); 
 $('#edit_image_form').on('submit', function(event){
  event.preventDefault();
  if($('#image_name').val() == '')
  {
   alert("Enter Image Name");
  }
  else
  {
   $.ajax({
    url:"update-banner.php",
    method:"POST",
    data:$('#edit_image_form').serialize(),
    success:function(data)
    {
     $('#imageModal').modal('hide');
     load_image_data();
     alert('Image Details updated');
    }
   });
  }
 }); 
});
</script>
