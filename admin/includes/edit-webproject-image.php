<?php
include("db/database.php");
$edit_id = @$_GET['edit-webproject-image'];
$query = "select * from web_project where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
	$id1=$row['id'];
	$project=$row['project'];
?>
<form method="post" action="index.php?edit-webproject-image=<?php echo $id1;?>" enctype="multipart/form-data">
    		Project Image:
    		<img src="images/webproject/<?php echo $project;?>" class="img-responsive" width="300">
    		<input type="file" class="form-control" name="project"><br>
    		<p align="center"><input type="submit" class="btn btn-success" name="update" value="Update Project"></p>
    		<?php };?>
    	</form>
<?php
if(isset($_POST['update'])){
	unlink('images/webproject/'.$project);
	echo $id = $_GET['edit-webproject-image'];
	$image_name = $_FILES['project']['name'];
	$image_name =preg_replace("/\s+/","_",$image_name);
	$image_tmp = $_FILES['project']['tmp_name'];
	$image_ext = pathinfo($image_name,PATHINFO_EXTENSION);
	$image_name= pathinfo($image_name,PATHINFO_FILENAME);
$image_name = $image_name."_".date("mjYHis").".".$image_ext;
	move_uploaded_file($image_tmp,"images/webproject/$image_name");
	echo $update_query ="update web_project set project='$image_name' where id='$id'";
	if(mysqli_query($con,$update_query)){
		echo"<script language='javascript'>window.open('index.php?web-project= Image Has Been Update','_self')</script>";
	}
}
?>