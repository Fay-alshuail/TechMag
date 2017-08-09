<?php
include '../config.php';
//query
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');

$sql=("SELECT `الوصف` FROM `الفرع` ");
$result=mysql_query($sql);
if($result === false){
    echo"failed";}
echo"<select name='branches'>";
while ($row=mysql_fetch_array($result , MYSQL_ASSOC)) {
	echo"<option value ='".$row[`الوصف`]."'>".$row[`الوصف`]."</option>";

}
echo"</select>";
?>
