<?php
include("db/database.php");
	$delete_id = $_GET['delete-blog'];
	$q="select * from blog where id=$delete_id";
	$run=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($run)){
		$image=$row['project'];
		$image1=$row['zipfile'];
		
	}
unlink('images/blog/'. $image);
unlink('images/inner-blog/'. $image1);
$delete_query = "delete from blog where id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script language='javascript'>window.open('index.php?blog= Data has been deleted...','_self')</script>";	}
?>