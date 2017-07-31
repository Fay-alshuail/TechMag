<?php

session_start();

//Get username and password from the form.
$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");

//Call the database and check to make sure the password matches

$conn = mysql_connect("localhost", "root", "");
if (!$conn) {
  die( mysql_error());
}
else {


$db = mysqli_select_db($conn,"fixmin");
$sql =("SELECT * FROM `المشرف` WHERE `البريد` = '$username' AND `الاسم` ='$password'");
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');

$result = mysql_query($sql) or die(mysql_error());
$num = mysql_num_rows($result);


if ($row = mysql_fetch_assoc($result)) {
  header('Location: supervisor/supervisor.php');



  } else {

  echo '<script language="javascript" >';
  echo 'alert("خطأ في اسم المستخدم أو الرقم السري ")';
  echo '</script>';

exit;}
}
mysqli_close($conn);
?>
