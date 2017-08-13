<?php
include 'config.php';

$selected=$_POST['branches'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

if ($selected='allbranches'){
$sql =("SELECT * FROM `الفاتورة`");
}
else
{
	$sql =("SELECT * FROM `الفاتورة` WHERE `وصف_الفرع`= $selected");

}
$result = mysql_query($sql) or die(mysql_error());
$num = mysql_num_rows($result);
echo $num ;
 ?>
