<?php
include("db/database.php");
$edit_id =@$_GET['edit-blog-content'];
$query = "select * from blog where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
?>
<form method="post" action="index.php?edit-blog-content=<?php echo $row['id']; ?>" enctype="multipart/form-data">
			Blog Heading:
    		<input type="text" class="form-control" name="heading" value="<?php echo $row['heading']; ?>" required><br>
    		Blog Description:
    		<textarea class="form-control" name="content" required><?php echo $row['content']; ?></textarea><br>
    		<p align="center"><input type="submit" class="btn btn-success" name="update" value="UPDATE"></p>
    		<?php };?>
    	</form>
<?php
if(isset($_POST['update'])){
	$id = $_GET['edit-blog-content'];
	$heading = $_POST['heading'];
	$date = date('y-m-d');
	$content = $_POST['content'];
	$update ="update blog set heading='$heading',date='$date',content='$content' where id='$id'";
	if(mysqli_query($con,$update)){
echo"<script language='javascript'>window.open('index.php?blog=Blog Has Been Edit','_self')</script>";
	}
}
?>