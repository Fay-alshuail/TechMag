<?php
header('Location: supervisorcp.php');

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
$date=filter_input(INPUT_POST,"date");
$securityno=filter_input(INPUT_POST,"securityno");
$cardno=filter_input(INPUT_POST,"cardno");
$cards=filter_input(INPUT_POST,"cards");

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

$sql="UPDATE `fixmin`.`المشرف` SET `رقم_حساب_البنك` = '$cardno',
`نوع_بطاقة_البنك` = '$cards',
`رقم_الأمان` = '$securityno',
`تاريخ_الإنتهاء` = '$date',
`الجوال1` = '$phone',
`الجوال2` = '$phone2',
`عنوان_السكن` = '$address',
`الفرع` = '$branch' WHERE `المشرف`.`البريد` = '$sessionU'";

if (!mysql_query($sql)) {
  echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
}
echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";

?>
