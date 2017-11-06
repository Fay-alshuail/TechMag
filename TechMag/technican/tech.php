<?php
session_start();
include '../config.php';
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sessionU=$_SESSION['username_s'];
$result=mysql_query("SELECT * FROM `الفني` WHERE `البريد` ='$sessionU'");
while($row=mysql_fetch_array($result))
{?>
<html>
	<head>
		<title>الطلبات</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-whidth", user-scalable=no, initial-scale=1.0>
        <meta http-equiv="X-UA-Comptible" content="ie=edge">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<script type="text/javascript">
		function showhide(){

		document.getElementById('phone').removeAttribute("readOnly");
		document.getElementById('phone2').removeAttribute("readOnly");
		document.getElementById('address').removeAttribute("readOnly");
		document.getElementById('bank').removeAttribute("readOnly");

		}

		</script>
		<script type="text/javascript">
		function hide(){

		document.getElementById('phone').readOnly:true;
		document.getElementById('phone2').readOnly:true;
		document.getElementById('address').readOnly:true;
		document.getElementById('bank').readOnly:true;

		}

		</script>
</head>
	<body>
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Form -->
			<section id="info" class="wrapper style5 fade-up">
				<div class="inner">
					<center>
					 <img src="img/edit.png" width="100" height="100">
				 </center>
<h2>البيانات الشخصية</h2>
<form action="setting.php" method="post">

<p> البيانات الشخصية </p>
					<table id = "table2" class ="align-center">
					<td>
						<ul>

					<p> : الجوال <input type="text" name="phone" readOnly="true" id="phone" value="<?php echo $row["الجوال1"];?>"/> </p>
					<p> : الجوال 2 <input type="text" name="phone2" readOnly="true" id="phone2" value="<?php echo $row["الجوال2"];?>"/> </p>
					<p> : عنوان السكن <input type="text" name="address" readOnly="true" id="address" value="<?php echo $row["عنوان_السكن"];?>"/> </p>
					<p> : الفرع <input type="text" name="branch" readOnly="true"  value="<?php echo $row["الفرع"];?>"/> </p>
						</ul>

					</td>
					<td>

							<ul>
							<p> : الاسم <input type="text" name="name" readOnly="true" id="name"value="<?php echo $row["الاسم"];?>"/> </p>
							<p> : المسمى الوظيفي <input type="text" readOnly="true" name="job" id="job" value="<?php echo $row["المسمى_الوظيفي"];?>"/> </p>
							<p> : البريد الالكتروني <input type="email"  readOnly="true" name="email" id="email" value="<?php echo $row["البريد"];?>"/>  </p>
							<p> : الحساب البنكي  <input type="text"  readOnly="true" name="bank" id="bank" value="<?php echo $row["رقم_الحساب_البنكي"];?>"/>  </p>
							<p> : الرقم السري  <input type="text"  readOnly="true" name="pass" id="pass" value="<?php echo $row["الرقم_السري"];?>"/>  </p>

							</ul>
						</td>
					</table>
					<table>
						<th style="text-align:center;"><p> <input type="submit" value="حـفـظ"></p></th>
						<th style="text-align:center;"><p> <input type="button" value="تـعـديـل " onclick="showhide()"></p></th>
						<th style="text-align:center;"><p> <input type="button" value="إالغاء" onclick="hide()"></p></th>
					</table>


				</form>

				<?php
				}
				?>

				</div>


			</section>
</div>

<section id="five" class="wrapper style2 fade-up">
	<div class="inner">
	<?php
	include '../config.php';
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>

<center>
 <img src="img/control.png" width="100" height="100">
</center>
<h2>لوحة التحكم بالطلبات</h2>
<section style="text-align=right">
<div>
<table  style="border: 1px solid black;">
<tr >
	<th style="border: 1px solid #c2d9ed;"> حالة الطلب</th>
<th style="border: 1px solid #c2d9ed;"> التفصيل</th>
<th style="border: 1px solid #c2d9ed;"> نوع المشكلة</th>
<th style="border: 1px solid #c2d9ed;"> رقم الطلب </th>
</tr>

<?php
$sql4="SELECT * FROM `طلب الصيانة` WHERE
`حالة_الطلب`
=
'قيد الإنتظار'"
;
$result4=mysql_query($sql4);
while($rows4 = mysql_fetch_assoc($result4))
{
											?>

<tr>
	<td style="border: 1px solid #073660;"> <?php echo $rows4['حالة_الطلب']; ?></td>
<td style="border: 1px solid #073660;"> <?php echo $rows4['التفصيل']; ?></td>
<td style="border: 1px solid #073660;"> <?php echo $rows4['نوع_المشكلة']; ?></td>
<td style="border: 1px solid #073660;"> <?php echo $rows4['رقم_الطلب']; ?></td>
</tr>
<?php }?>
	</table>
</div>
<div>
	<h2>فضلاً قم بإختار رقم الطلب الممراد قبوله</h2>
	<form method="post" action="#">
	<table>
<th><input type="submit" value="قبول "></th>
<th><select name="req2">
  <?php
  include '../config.php';
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
  $sql11="SELECT * FROM `طلب الصيانة` WHERE
  `حالة_الطلب`
  =
  'قيد الإنتظار'"
  ;
  $result11=mysql_query($sql11);
  while($rows11 = mysql_fetch_assoc($result11))
  {
  											?>
<option><?php echo $rows11['رقم_الطلب']; ?></option><?php }?>
</select></th>

	</table>
</form>
</div>


</section>
</div>
<?php

include '../config.php';
$req2=$_POST['req2'];
$sessionU=$_SESSION['username_s'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql5="UPDATE `fixmin`.`طلب الصيانة` SET `حالة_الطلب` = 'مقبول',
`بريد_الفني` = '$sessionU' WHERE `طلب الصيانة`.`رقم_الطلب`
 =$req2";
$result5=mysql_query($sql5) or die($sql5);
if (mysql_query($sql5)) {
	echo "<script type='text/javascript'>alert('تم قبول الطلب');</script>";

}else{
			echo "<script type='text/javascript'>alert('لم يتم قبول الطلب بشكل صحيح');</script>";
	}
?>

==
<div id="wrapper">
	<?php
	include '../config.php';
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>

<h2>لوحة التحكم بالطلبات المقبولة</h2>
<section style="text-align=right">
<div>
<table  style="border: 1px solid black;">
  <tr >
  									  <th style="border: 1px solid #c2d9ed;"> التفصيل</th>
  									  <th style="border: 1px solid #c2d9ed;"> نوع المشكلة</th>
  									<th style="border: 1px solid #c2d9ed;"> رقم الطلب </th>
  									</tr>

<?php
$sql5="SELECT * FROM `طلب الصيانة` WHERE `حالة_الطلب` = 'مقبول' and `بريد_الفني` ='$sessionU'";

$result5=mysql_query($sql5);
while($rows5 = mysql_fetch_assoc($result5))
{
											?>

                      <tr>
                      										<td style="border: 1px solid #073660;"> <?php echo $rows5['التفصيل']; ?></td>
                      										<td style="border: 1px solid #073660;"> <?php echo $rows5['نوع_المشكلة']; ?></td>
                      										 <td style="border: 1px solid #073660;"> <?php echo $rows5['رقم_الطلب']; ?></td>
                      									</tr>

<?php }?>
	</table>
</div>
<div>
	<h2> مشكلة إضافية</h2>
	<form method="post" action="#">
	<table>
	<th><input type="submit" id="sub2" value="ارسال الى خدمة العملاء "></th>
	<th><input type="text" name="prob"></th>
	<th><select name="req3">
	  <?php
	  include '../config.php';
		mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	  $sql13="SELECT * FROM `طلب الصيانة` WHERE `حالة_الطلب` = 'مقبول' and `بريد_الفني` ='$sessionU'";
	  $result13=mysql_query($sql13);
	  while($rows13 = mysql_fetch_assoc($result13))
	  {
	  											?>
	<option><?php echo $rows13['رقم_الطلب']; ?></option><?php }?>
	</select></th>
	</table></form>
	</div>
						</section>
						<?php
						include '../config.php';
						$requestno=$_POST['req3'];
						$prob=filter_input(INPUT_POST,"prob");
						mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

						$sql4="UPDATE `fixmin`.`طلب الصيانة` SET `مشكلة_إضافية` ='$prob'

						WHERE `طلب الصيانة`.`رقم_الطلب` = '$requestno'";
						$result4=mysql_query($sql4);
						$rows4 = mysql_fetch_assoc($result4);
						if (mysql_query($sql4)) {
							echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";

						}else if ( $requestno = "" ){
									echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";
							}
						?>
</div>
<div>
	<h2> فضلاً قم باختيار رقم الطلب الذي تم إصلاحه </h2>
	<form method="post" action="#">
	<table>
<th><input type="submit" value="تم الإصلاح"></th>
<th><input type="date" name="date" id="date"></th>
<th><select name="req">
  <?php
  include '../config.php';
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

include '../config.php';
$req=$_POST['req'];
              $date=filter_input(INPUT_POST,"date");
              $sessionU=$_SESSION['username_s'];
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
