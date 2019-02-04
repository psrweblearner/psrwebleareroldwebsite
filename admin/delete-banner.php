<?php
//delete.php

include('db/db.php');

if(isset($_POST["image_id"]))
{
 $file_path = 'images/banner/' . $_POST["image_name"];
 if(unlink($file_path))
 {
  $query = "DELETE FROM banners WHERE id = '".$_POST["image_id"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}

?>
