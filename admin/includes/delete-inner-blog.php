<?php

include("db/database.php");

	$delete_id = $_GET['delete-inner-blog'];

	$q="select * from inner_blog where blog_id=$delete_id";

	$run=mysqli_query($con,$q);

	while($row=mysqli_fetch_array($run)){

		 $image=$row['multiple_file'];

		}

unlink('images/inner-blog/'. $image);

 $delete_query = "delete from inner_blog where blog_id='$delete_id'";

if(mysqli_query($con,$delete_query)){

	echo "<script language='javascript'>window.open('index.php?blog= Data has been deleted...','_self')</script>";	}


?>