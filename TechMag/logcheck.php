<?php

session_start();

//Get username and password from the form.
$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");

//Call the database and check to make sure the password matches

$conn = mysql_connect('148.66.136.120', 'fixmincp', 'dmQgpIJ$UfMO5O');
if (!$conn) {
  die( mysql_error());
}

$db = mysql_select_db('fixmin',$conn) or die(mysql_error());
$sql =("SELECT * FROM `المشرف` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');

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
