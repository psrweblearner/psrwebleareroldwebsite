<?php
//edit.php
include('db/db.php');

$query = "
SELECT * FROM banner WHERE id = '".$_POST["image_id"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $file_array = explode(".", $row["image"]);
 $output['image_name'] = $file_array[0];
 $output['image_description'] = $row["image_desc"];
}

echo json_encode($output);

?>
