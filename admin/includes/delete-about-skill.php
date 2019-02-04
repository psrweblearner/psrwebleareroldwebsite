<?php
include("db/database.php");
	$delete_id = $_GET['detete-about-skill'];
	$q="select * from about_skill where id=$delete_id";
	$run=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($run)){
		$image=$row['file'];
	}
	unlink('images/skills/'. $image);
	$delete_query = "delete from about_skill where id='$delete_id'";
	if(mysqli_query($con,$delete_query)){
	echo "<script language='javascript'>window.open('index?myskill= Data has been deleted...','_self')</script>";	}
?>