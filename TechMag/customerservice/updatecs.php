<?php
header('Location: cs.php');

session_start();

include '../config.php';
$sessionU=$_SESSION['username_s'];
$branch=filter_input(INPUT_POST,"branch");
$phone=filter_input(INPUT_POST,"phone");
$phone2=filter_input(INPUT_POST,"phone2");
$address=filter_input(INPUT_POST,"address");
$name=filter_input(INPUT_POST,"name");
$job=filter_input(INPUT_POST,"job");
$email=filter_input(INPUT_POST,"email");
$bank=filter_input(INPUT_POST,"bank");

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

$sql="UPDATE `fixmin`.`خدمة العملاء` SET `الجوال1` = '$phone',
`الجوال2` = '$phone2',
`رقم_الحساب_البنكي` = '$bank',
`عنوان_السكن` = '$address'
WHERE `خدمة العملاء`.`البريد` = '$sessionU'";

if (!mysql_query($sql)) {
  echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
}
echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";

?>
