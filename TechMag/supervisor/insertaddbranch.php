<?php
include '../config.php';


$city=filter_input(INPUT_POST,"city");
$details=filter_input(INPUT_POST,"details");
$map="riyadh";
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql="INSERT INTO `fixmin`.`الفرع` (`المدينة`, `الوصف`) VALUES ('$city', '$details')";
if (!mysql_query($sql)) {
  echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
}
echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";

?>
