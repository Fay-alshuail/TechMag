<script type="text/javascript">
function showresult(){
	document.getElementById('searchresult').style.display="block";
} </script>

<section class="wrapper style2 fade-up" style="width:80%; height: 130%;">
	<div class="inner">
<span class="closetrack">&times;</span>
		<h2>تتبع طلب الصيانة</h2>
		<section style="text-align=right">
			<table><form method="post" action="#">
				<th><input type="submit" name="searchbtn" id="searchbtn"  value="بحث"></th>
	<th><input type="text" name="searchtxt" id="searchtxt" placeholder=" ... ادخل رقم الطلب" style="text-align :right"></th>
	</tr>
</form></table>
<div id="searchresult" >
	<form>
	<?php
	include 'config.php';
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET CHARACTER SET utf8');
$trackno=filter_input(INPUT_POST,"searchtxt");
$sql="SELECT * FROM `طلب الصيانة` WHERE `رقم_الطلب` ='$trackno'";
$result= mysql_query($sql) or die($sql);
	while($row=mysql_fetch_array($result))
	{?>

	<div class="field half first">
		<label for="date">التاريخ</label>
		<input type="text" name="date" id="date" value="<?php echo $row["تاريخ_الاستلام"];?>" />
	</div>
	<div class="field half">
		<label for="order">حالة الطلب</label>
		<input type="text" name="order" id="order" value="<?php echo $row["حالة_الطلب"];?>"/>
	</div>
	<div class="field half first">
		<label for="descrip">الوصف</label>
		<input type="text" name="descrip" id="descrip"value="<?php echo $row["التفصيل"];?>" />
	</div>
	<?php
}

$sql2="SELECT `الاسم` FROM `الفني` WHERE `البريد` = (SELECT `بريد_الفني`FROM `طلب الصيانة` WHERE `رقم_الطلب`='$trackno')";
$result2= mysql_query($sql2) or die($sql2);
while($row2=mysql_fetch_array($result2))
{?>
	<div class="field half">
		<label for="tech">اسم الفني</label>
		<input type="text" name="tech" id="tech"value="<?php echo $row2["الاسم"];?>" />
	</div>
<?php
}
$sql3="SELECT * FROM `العميل` WHERE `اسم_العميل`=(SELECT `اسم_العميل` FROM `الطلب` WHERE `رقم_الطلب`='$trackno')";
$result3= mysql_query($sql3) or die($sql3);
while($row3=mysql_fetch_array($result3))
{?>

	<div class="field half first">
		<label for="phone">رقم التواصل</label>
		<input type="text" name="phone" id="phone" value="<?php echo $row3["الجوال"];?>"/>
	</div>
	<div class="field half">
		<label for="customer">اسم العميل</label>
		<input type="text" name="customer" id="customer"value="<?php echo $row3["اسم_العميل"];?>" />
	</div>
<?php }?>
</form>
</div>
</section>
</div>
</section>
</div>
  تكليف

<form method="post" action="#">
<table> 						<th ><select name="technican">

<?php
include '../config.php';
//query
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sql=("SELECT `الاسم` FROM `الفني` ");
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>
<option><?php echo $row["الاسم"];?></option>
<?php
}
?>

						 </select>
						</th>
						<th ><select name="requestno">

						<?php
						include '../config.php';
						//query
						mysql_query("SET NAMES 'utf8'");
						mysql_query('SET CHARACTER SET utf8');
						$sql1=("SELECT `رقم_الطلب` FROM `طلب الصيانة` WHERE `بريد_الفني` IS NULL ");
						$result1=mysql_query($sql1);
						while($row1=mysql_fetch_array($result1))
						{
						?>
						<option><?php echo $row1["رقم_الطلب"];?></option>
						<?php
						}
						?>

												 </select>
												</th>
<th><input type="submit" value="حفظ"></th>

</table>
	</form>
	<?php
	include 'config.php';
	$requestno=$_POST['requestno'];
	$technican=$_POST['technican'];

	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

	$sql="UPDATE `fixmin`.`طلب الصيانة` SET `بريد_الفني` =(SELECT `البريد` FROM `الفني` WHERE `الاسم`= '$technican')
	WHERE
	`طلب الصيانة`.`رقم_الطلب` = $requestno";
	$result=mysql_query($sql) or die($sql);
	$rows = mysql_fetch_assoc($result);
	if (mysql_query($sql)) {
		echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";

	}else if ( $requestno = "" || $technican = ""  ){
				echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";
		}
	?>
