<?php
session_start();

//Get username and password from the form.
$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");

//Call the database and check to make sure the password matches
//MySQL Database Connect
 include 'config.php';
 mysql_query("SET NAMES 'utf8'");
 mysql_query('SET CHARACTER SET utf8');

$sql =("SELECT * FROM `المشرف` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");

$result = mysql_query($sql) or die(mysql_error());
$num = mysql_num_rows($result);


if ($row = mysql_fetch_assoc($result)) {
  header('Location: supervisor/supervisorcp.php');



  } else  {

  echo '<script language="javascript" >';
  echo 'alert("خطأ في اسم المستخدم أو الرقم السري ")';
  echo '</script>';

exit;}

mysqli_close($conn);
?>
