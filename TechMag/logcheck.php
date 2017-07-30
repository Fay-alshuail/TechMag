<?php

session_start();

//Get username and password from the form.
$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");

//Call the database and check to make sure the password matches

$conn = mysql_connect("localhost", "root", "");
if (!$conn) {
  echo "bad";
}
else {
  echo "good";
}


$username = mysql_real_escape_string($username);
$db = mysql_select_db("techmag",$conn)or die( mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sql =("SELECT * FROM `المستخدمين` WHERE `اسم_المستخدم` = '$username' AND `الرقم_السري` ='$password'");

$result = mysql_query($sql) or die(mysql_error());
$num = mysql_num_rows($result);


if ($row = mysql_fetch_assoc($result)) {
    echo "تم تسجيل الدخول بنجاح ";

  } else {
    echo "خطأ في الرقم السري او اسم المستخدم ";
  }


mysql_close($conn);
?>
