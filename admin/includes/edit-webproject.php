<?php
include("db/database.php");
$edit_id =@$_GET['edit-webproject'];
$query = "select * from web_project where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
?>
<form method="post" action="index.php?edit-webproject=<?php echo $row['id']; ?>" enctype="multipart/form-data">
			Web Link:
    		<input type="text" class="form-control" name="web_link" value="<?php echo $row['web_link'];?>" required><br>
    		Project Name:
    		<input type="text" class="form-control" name="heading" value="<?php echo $row['heading'];?>" required><br>
    		Project Description:
    		<textarea class="form-control" name="content" required><?php echo $row['content'];?></textarea><br>
    		<p align="center"><input type="submit" class="btn btn-success" name="update" value="UPDATE"></p>
    		<?php };?>
    	</form>
<?php
if(isset($_POST['update'])){
	$id = $_GET['edit-webproject'];
	$heading = $_POST['heading'];
	$date = date('y-m-d');
	$content = $_POST['content'];
	$web_link = $_POST['web_link'];
	$update ="update web_project set heading='$heading',date='$date',content='$content', web_link='$web_link' where id='$id'";
	if(mysqli_query($con,$update)){
echo"<script language='javascript'>window.open('index.php?web-project=Project Has Been Edit','_self')</script>";
	}
}
?>