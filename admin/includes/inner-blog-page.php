
    <br><h3 align="center">View/Edit Project</h3>

    <table width="100%" border="1px solid black">
    		
    <?php 
include("db/database.php");
 $id = $_GET['inner-blog-page'];
	  $query="select * from inner_blog where blog_id=$id";
	  $run=mysqli_query($con,$query);
	  while ($row=mysqli_fetch_array($run)){
		?>
   <?php echo $row['multiple_file'];?>
   	 <?php };?>
   	 <br><br>
   	 
  <p align="center"><a href="index.php?delete-inner-blog=<?php echo $id;?>"><input type="submit" class="btn btn-success" value="delete"></a></p>
    	
    	
   
   
  