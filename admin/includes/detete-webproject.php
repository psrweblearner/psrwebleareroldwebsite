<?php
include("db/database.php");
	$delete_id = $_GET['detete-webproject'];
	$q="select * from web_project where id=$delete_id";
	$run=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($run)){
		$image=$row['project'];
	}
	unlink('images/webproject/'. $image);
	$delete_query = "delete from web_project where id='$delete_id'";
	if(mysqli_query($con,$delete_query)){
	echo "<script language='javascript'>window.open('index?web-project= Data has been deleted...','_self')</script>";	}
?>