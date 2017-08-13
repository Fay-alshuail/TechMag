<?php
include 'config.php';

$selected=$_POST['branches'];
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
if ($selected="allbranches"){
$sql =("SELECT * FROM `الفاتورة` ");
$result = mysql_query($sql) or die(mysql_error());
$num = mysql_num_rows($result);
echo $num ;
}
{
	$sql =("SELECT * FROM `الفاتورة` WHERE `وصف_الفرع`='$selected'");
	$result = mysql_query($sql) or die(mysql_error());
	$num = mysql_num_rows($result);
echo $num ;
}
 ?>
