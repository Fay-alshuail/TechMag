<div>
	<h2> فضلاً قم باختيار رقم الطلب الذي تم إصلاحه </h2>
	<form method="post" action="#">
	<table>
<th><input type="submit" value="تم الإصلاح"></th>
<th><input type="date" name="date" id="date"></th>
<th><select name="req">
  <?php
  include 'config.php';
$sessionU  ='tahanihak.gmail.com';
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
  $sql12="SELECT * FROM `طلب الصيانة` WHERE `حالة_الطلب` = 'مقبول' and `بريد_الفني` ='$sessionU'";

  $result12=mysql_query($sql12);
  while($rows12 = mysql_fetch_assoc($result12))
  {
  											?>
<option><?php echo $rows12['رقم_الطلب']; ?></option><?php }?>
</select></th>

	</table>
</form>
</div>


</section>
</div>
<?php

include 'config.php';
$req=$_POST['req'];
              $date=filter_input(INPUT_POST,"date");
              $sessionU='tahanihak.gmail.com';
              $cssql="SELECT `بريد_خ_ع`FROM `طلب الصيانة` WHERE `رقم_الطلب`='$req'";
							$resultcs=mysql_query($cssql);
							$rowcs=mysql_fetch_array($resultcs);
							$css=$rowcs["بريد_خ_ع"];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql6="UPDATE `fixmin`.`طلب الصيانة` SET
								`حالة_الطلب`
								=
								'تم الإصلاح'
								WHERE `طلب الصيانة`.`رقم_الطلب` = '$req' ";
$result6=mysql_query($sql6) or die($sql6);

if ($result6) {
									echo "<script type='text/javascript'>alert('تم اصلاح الطلب وارسال البيانات لخدمة العملاء بشكل صحيح');</script>";

								}else{
											echo "<script type='text/javascript'>alert('لم يتم ارسال البيانات بشكل صحيح');</script>";
									}
$sql8="INSERT INTO `fixmin`.`طلب مرسل` (
                  `بريد_خ_ع` ,
                  `رقم_الطلب` ,
                  `بريد_الفني`
                  )
                  VALUES (
                  '$css', '$req', '$sessionU'
								)";
                  $result8=mysql_query($sql8) or die($sql8);
                  if ($result8) {
                  									echo "<script type='text/javascript'>alert('تم اصلاح الطلب وارسال البيانات لخدمة العملاء بشكل صحيح');</script>";

                  								}else{
                  											echo "<script type='text/javascript'>alert('لم يتم ارسال البيانات بشكل صحيح');</script>";
                  									}
?>
