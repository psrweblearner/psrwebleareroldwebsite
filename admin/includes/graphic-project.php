<?php include("db/database.php");?>
 <h2 align="center">Insert Add Edit Graphic Project Details From Here!</h2><br>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#insert">Insert Project</a></li>
  <li><a data-toggle="tab" href="#update">Edit/ Delete Project</a></li>
</ul>

<div class="tab-content">
  <div id="insert" class="tab-pane fade in active">
    <br><h3 align="center">Insert New Project</h3>
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    	<form method="post" action="" enctype="multipart/form-data">
    		Project Image:
    		<input type="file" class="form-control" name="project" required><br>
    		Project Name:
    		<input type="text" class="form-control" name="heading" required><br>
    		Project Description:
    		<textarea class="form-control" name="content" required></textarea><br>
    		<p align="center"><input type="submit" class="btn btn-success" name="insert" value="Insert Project"></p>
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
	{
	move_uploaded_file($image_tmp,"images/graphicproject/$image_name");
}
	
 $insert = "insert into graphic_project(heading,date,content,project) values ('$heading','$date','$content','$image_name')";
$run = mysqli_query($con,$insert);
if($run){
	echo"<script language='javascript'>window.open('index.php?graphic-project=New Project Has Been Published','_self')</script>";
		}	
}
?>
  </div>
  <div id="update" class="tab-pane fade">
    <br><h3 align="center">View/Edit Project</h3>
    <?php 
	  $query="select * from graphic_project";
	  $run=mysqli_query($con,$query);
	  while ($row=mysqli_fetch_array($run)){
		?>
    <div class="row">
    	<div class="col-sm-3">
    	<a href="index?edit-graphicproject-image=<?php echo $row['id'];?>">
    		<img src="images/graphicproject/<?php echo $row['project'];?>" class="img-responsive" width="300"></a>
    	</div>
    	<div class="col-sm-6">
    		<h4><?php echo $row['heading'];?></h4>
    		<p><?php echo $row['content'];?></p>
    	</div>
    	<div class="col-sm-3">
    		<a href="index.php?edit-graphicproject=<?php echo $row['id'];?>"><button class="btn btn-primary">Edit</button></a>
    		<a href="index.php?detete-graphicproject=<?php echo $row['id'];?>"><button class="btn btn-success">Delete</button></a>
    	</div>
    </div><br>
    <?php };?>
  </div>
</div>
