<?php
include('db/db.php');
$query = "SELECT * FROM banners ORDER BY id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$number_of_rows = $statement->rowCount();
$output = '';
$output .= '
 <table class="table table-bordered table-striped">
  <tr>
   <th>Sr. No</th>
   <th>Image</th>
   <th>Name</th>
   <th>Description</th>
   <th>Edit</th>
   <th>Delete</th>
  </tr>
';
if($number_of_rows > 0)
{
 $count = 0;
 foreach($result as $row)
 {
  $count ++; 
  $output .= '
  <tr>
   <td>'.$count.'</td>
   <td><img src="images/banner/'.$row["image"].'" class="img-thumbnail" width="100" height="100" /></td>
   <td>'.$row["image"].'</td>
   <td>'.$row["image_desc"].'</td>
   <td><button type="button" class="btn btn-warning btn-xs edit" id="'.$row["id"].'">Edit</button></td>
   <td><button type="button" class="btn btn-danger btn-xs delete" id="'.$row["id"].'" data-image="'.$row["image"].'">Delete</button></td>
  </tr>
  ';
 }
}
else
{
 $output .= '
  <tr>
   <td colspan="6" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
