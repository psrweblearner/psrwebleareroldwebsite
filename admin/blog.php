<?php include("db/database.php");

?>
 <h2 align="center">Insert Add Edit Web Project Details From Here!</h2><br>
<ul class="nav nav-tabs">
 
  <li><a data-toggle="tab" href="#insert">Insert Blog</a></li>
  <li class="active"><a data-toggle="tab" href="#update">View/Edit Blog</a></li>
</ul>

<div class="tab-content">
  <div id="insert" class="tab-pane fade">
    <br><h3 align="center">Insert New Blog</h3>
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    	<form method="post" action="" enctype="multipart/form-data">
    		Blog Image:
    		<input type="file" class="form-control" name="project" required><br>
    		Blog Zip File:
    		<input type="file" class="form-control" name="zipfile" required><br>
    		Blog Heading:
    		<input type="text" class="form-control" name="heading" required><br>
    		Blog Description:
    		<textarea class="form-control" name="content" required></textarea><br>
    		<p align="center"><input type="submit" class="btn btn-success" name="insert" value="Next"></p>
    	</form>
    </div>
    </div>
    <?php
if(isset($_POST['insert'])){
	$heading= $_POST['heading'];
	$date = date('y/m/d');
	$content= $_POST['content'];
	$image_name= $_FILES['project']['name'];
	$image_name =preg_replace("/\s+/","_",$image_name);
    $image_tmp= $_FILES['project']['tmp_name'];
	$image_ext = pathinfo($image_name,PATHINFO_EXTENSION);
	$image_name= pathinfo($image_name,PATHINFO_FILENAME);
 $image_name = $image_name."_".date("mjYHis").".".$image_ext;
	
	$image_name1= $_FILES['zipfile']['name'];
	$image_name1 =preg_replace("/\s+/","_",$image_name1);
    $image_tmp1= $_FILES['zipfile']['tmp_name'];
	$image_ext1 = pathinfo($image_name1,PATHINFO_EXTENSION);
	$image_name1= pathinfo($image_name1,PATHINFO_FILENAME);
 $image_name1 = $image_name1."_".date("mjYHis").".".$image_ext1;
	{
	move_uploaded_file($image_tmp,"images/blog/$image_name");
	move_uploaded_file($image_tmp1,"images/inner-blog/$image_name1");
}
	
 $insert = "insert into blog(heading,date,content,project,zipfile) values ('$heading','$date','$content','$image_name','$image_name1')";
$run = mysqli_query($con,$insert);
if($run){
	$query="select * from blog ORDER BY ID DESC";
	$run=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($run)){
		$id=$row['id'];
	echo"<script language='javascript'>window.open('index.php?inner-blog=$id','_self')</script>";
		}
	}
}
?>
  </div>
  <div id="update" class="tab-pane fade in active">
    <br><h3 align="center">View/Edit Blog</h3>
   <?php
	  include('includes/blog-pagination.php');
		while($row = mysqli_fetch_array($nquery)){
			?>
    <div class="row">
    	<div class="col-sm-3">
    	<a href="index?edit-blog-image=<?php echo $row['id'];?>">
    		<img src="images/blog/<?php echo $row['project'];?>" class="img-responsive" width="300"></a>
    	</div>
    	<div class="col-sm-6">
    		<h4><?php echo $row['heading'];?></h4>
    		<p><?php echo $row['content'];?></p>
    	</div>
    	<div class="col-sm-3">
    	<a href="index.php?inner-blog-page=<?php echo $row['id'];?>"><button class="btn btn-danger">Inner Blog</button></a>
    		<a href="index.php?edit-blog-content=<?php echo $row['id'];?>"><button class="btn btn-primary">Edit</button></a>
    		<a href="index.php?delete-blog=<?php echo $row['id'];?>"><button class="btn btn-success">Delete</button></a>
    	</div>
    </div><br>
    <?php };?>
    
  </div>
   <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
</div>
