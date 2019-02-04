 <?php include("db/database.php");
 $query="select * from home_about";
	   $res=mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($res)){
		  ?>
		  <div class="row">
		  <h3 align="center"><?php echo $row['heading'];?></h3><br>
		  <div class="col-sm-4">
		 <img src="images/about/<?php echo $row['image'];?>" class="img-responsive" width="400">
		  </div>
		  
		  <div class="col-sm-8">
		<?php echo $row['content'];?>
		  </div>
		  <div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">UPDATE File</h4>
   </div>
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data" action="index.php?home-about=<?php echo $row['id'];?>">
     <p><label>Change Image</label>
     <img src="images/about/<?php echo $row['image'];?>" class="img-responsive" width="200">
     <input type="file" name="image" class="form-control" id="image" /></p>
<p><label>Change Heading</label>
     <input type="text" name="heading" class="form-control" value="<?php echo $row['heading'];?>"/></p>
    <p><label>Change Content</label>
     <textarea name="content" class="form-control"><?php echo $row['content'];?></textarea></p>
    <input type="submit" name="update"  value="UPDATE" class="btn btn-info" />
     </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
		  </div>
		  <br>
		  <p align="center"><input type="submit" dataid="<?php echo $row['id'];?>" class="btn btn-success" id="update" value="Update"></p>
		  <?php 
	   }?>
   
<script>  
$(document).ready(function(){
$('#update').click(function(){
  $('#imageModal').modal('show');
 });
 });  
</script>

<?php 
if(isset($_POST['update'])){
	$id=$_GET['home-about'];
	$heading= $_POST['heading'];
	$content= $_POST['content'];
	$image_name= $_FILES['image']['name'];
	$image_name =preg_replace("/\s+/","_",$image_name);
     $image_tmp= $_FILES['image']['tmp_name'];
	$image_ext = pathinfo($image_name,PATHINFO_EXTENSION);
	$image_name= pathinfo($image_name,PATHINFO_FILENAME);
 $image_name = $image_name."_".date("mjYHis").".".$image_ext;
	{
	move_uploaded_file($image_tmp,"images/about/$image_name");
}
	$update_query ="update home_about set heading='$heading',content='$content',image='$image_name' where id='$id'";
	if(mysqli_query($con,$update_query)){
		echo"<script language='javascript'>window.open('index.php?home-about=Resume Has Been Update','_self')</script>";
	}
} ?>