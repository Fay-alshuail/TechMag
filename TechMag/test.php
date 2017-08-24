<?php
include 'config.php';
include 'logincheck.php';

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$username='faysaadsh@gmail.com';
$ssql="SELECT `الفرع` FROM `خدمة العملاء`WHERE`البريد` ='$username'";
$result=mysql_query($ssql);
$rows = mysql_fetch_assoc($result);
$s= $rows['الفرع'];
echo $s;


?>
