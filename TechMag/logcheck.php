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

mysql_query("SET NAMES 'utf8'");
$username = mysql_real_escape_string($username);
$db = mysql_select_db("techmag",$conn)or die( mysql_error());

$sql = sprintf("SELECT `اسم_المستخدم` , `الرقم_السري`FROM `المستخدمين` WHERE `اسم_المستخدم` = '$username' AND `الرقم_السري`='$password'");

$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);

if($row[`اسم_المستخدم`]==$username && $row[`الرقم_السري`]==$password)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
mysql_close($conn);
?>
