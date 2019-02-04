<?php
//update.php

include('db/db.php');

if(isset($_POST["image_id"]))
{
 $old_name = get_old_image_name($connect, $_POST["image_id"]);
 $file_array = explode(".", $old_name);
 $file_extension = end($file_array);
 $new_name = $_POST["image_name"] . '.' . $file_extension;
 $query = '';
 if($old_name != $new_name)
 {
  $old_path = 'images/banner/' . $old_name;
  $new_path = 'images/banner/' . $new_name;
  if(rename($old_path, $new_path))
  { 
   $query = "
   UPDATE banners
   SET image = '".$new_name."', image_desc = '".$_POST["image_description"]."' 
   WHERE id = '".$_POST["image_id"]."'
   ";
  }
 }
 else
 {
  $query = "
   UPDATE banners 
   SET image_desc = '".$_POST["image_description"]."' 
   WHERE id = '".$_POST["image_id"]."'
   ";
 }
 
 $statement = $connect->prepare($query);
 $statement->execute();
}
function get_old_image_name($connect, $image_id)
{
 $query = "
 SELECT image FROM banners WHERE id = '".$image_id."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image"];
 }
}

?>