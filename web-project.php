<div class="row">
<?php
include("db/db.php");
$record_per_page =12;  
 $page = ''; 
$output = ''; 
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
$start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM web_project ORDER BY id DESC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($con, $query);  
 while($row = mysqli_fetch_array($result))
 {
	 
 ?>
 

<div class="col-lg-4">
					<div class="galry-grid grid-top-rgt">
					<a href="<?php echo $row['web_link'];?>">
						<img src="admin/images/webproject/<?php echo $row['project'];?>" alt="<?php echo $row['heading'];?>" class="img-responsive zoom-img">
						<div class="w3agile-text w3agile-text-small1">
							<h5><?php echo $row['heading'];?></h5>
						</div>
					</a>
					<p><?php echo $row['content'];?></p>
				</div>
				</div>
				
 <?php
 }
?>
</div>
<div class="row">
<?php
$output .= '<div align="left">';  
 $page_query = "SELECT * FROM web_project ORDER BY id DESC";  
 $page_result = mysqli_query($con, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div>';  
 echo $output; 
	?>
</div>
