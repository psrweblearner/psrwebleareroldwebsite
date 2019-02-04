<?php include("db/database.php");
 $page_id=@$_GET['inner-blog'];
?>
  		
   		<form method="post" action="" enctype="multipart/form-data">
    		Blog .txt File Multiple:
    		<input type="file" class="form-control"  name="image[]" multiple required><br>
    		<p align="center"><input type="submit" class="btn btn-success" name="insert" value="Insert Inner Blog"></p>
    	</form>
    	<?php
if(isset($_POST['insert'])){
	for($i=0; $i<count($_FILES["image"]["name"]); $i++){
	$image_name2= $_FILES['image']['name'][$i];
	$image_name2 =preg_replace("/\s+/","_",$image_name2);
    $image_tmp2= $_FILES['image']['tmp_name'][$i];
	$image_ext2 = pathinfo($image_name2,PATHINFO_EXTENSION);
	$image_name2= pathinfo($image_name2,PATHINFO_FILENAME);
    $image_name2 = $image_name2."_".date("mjYHis").".".$image_ext2;
	move_uploaded_file($image_tmp2,"images/inner-blog/$image_name2");
echo $insert = "insert into inner_blog(multiple_file,blog_id) values ('$image_name2','$page_id')";
$run = mysqli_query($con,$insert);
if($run){
	echo"<script language='javascript'>alert('Data Successfully Inserted!')</script>";
	echo"<script language='javascript'>window.open('index.php?blog=Data Successfully Inserted!','_self')</script>";
	}
}}
?>