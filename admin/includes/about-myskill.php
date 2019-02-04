<?php include("db/database.php");?>
 <h2 align="center">Insert Add Edit My Skills Details From Here!</h2><br>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#insert">Insert Project</a></li>
  <li><a data-toggle="tab" href="#update">Edit/ Delete Project</a></li>
</ul>

<div class="tab-content">
  <div id="insert" class="tab-pane fade in active">
    <br><h3 align="center">Insert My Skills</h3>
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    	<form method="post" action="" enctype="multipart/form-data">
    		 Image:
    		<input type="file" class="form-control" name="file" required><br>
    		Heading:
    		<input type="text" class="form-control" name="heading" required><br>
    		<p align="center"><input type="submit" class="btn btn-success" name="insert" value="Insert File"></p>
    	</form>
    </div>
    </div>
    <?php
if(isset($_POST['insert'])){
	$heading= $_POST['heading'];
	$image_name= $_FILES['file']['name'];
	$image_name =preg_replace("/\s+/","_",$image_name);
    $image_tmp= $_FILES['file']['tmp_name'];
	$image_ext = pathinfo($image_name,PATHINFO_EXTENSION);
	$image_name= pathinfo($image_name,PATHINFO_FILENAME);
 $image_name = $image_name."_".date("mjYHis").".".$image_ext;
	{
	move_uploaded_file($image_tmp,"images/skills/$image_name");
}
	
 $insert = "insert into about_skill(heading,file) values ('$heading','$image_name')";
$run = mysqli_query($con,$insert);
if($run){
	echo"<script language='javascript'>window.open('index.php?myskill=New Project Has Been Published','_self')</script>";
		}	
}
?>
  </div>
  <div id="update" class="tab-pane fade">
    <br><h3 align="center">View/Delete </h3>
    <div class="row">
    <?php 
	  $query="select * from about_skill";
	  $run=mysqli_query($con,$query);
	  while ($row=mysqli_fetch_array($run)){
		?>
    
    	<div class="col-sm-3">
    	<h4><?php echo $row['heading'];?></h4>
    	<img src="images/skills/<?php echo $row['file'];?>" class="img-responsive" width="100%">
    	<a href="index.php?detete-about-skill=<?php echo $row['id'];?>"><button class="btn btn-success">Delete</button></a>
    	</div>
    	<?php };?>
     </div><br>
    
  </div>
</div>
