
<html>
<?php
session_start();
include 'config.php';
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sessionU=$_SESSION['username_s'];
$result=mysql_query("SELECT * FROM `المشرف` WHERE `البريد` ='$sessionU'");
while($row=mysql_fetch_array($result))
{?>

<input type="text" value="<?php echo $row["الجوال1"];?>"/>
<?php
}
?>

</html>
