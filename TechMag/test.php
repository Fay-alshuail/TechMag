<?php
include 'config.php';
$staff=filter_input(INPUT_POST,"staff");
$jobs=$_POST['jobs'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql="SELECT `رقم_الفاتورة` FROM `الفاتورة` WHERE `بريد_خ_ع`=(Select `البريد` FROM `خدمة العملاء` WHERE `الاسم` = '$staff')";
$result=mysql_query($sql);
while($rows = mysql_fetch_assoc($result)){
	echo $rows['رقم_الفاتورة'];
}
?>
