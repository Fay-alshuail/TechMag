<?php
session_start();
include '../config.php';
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sessionU=$_SESSION['username_s'];
$result=mysql_query("SELECT * FROM `خدمة العملاء` WHERE `البريد` ='$sessionU'");
while($row=mysql_fetch_array($result))
{?>

<html>

	<head>
		<title>خدمة العملاء</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-whidth", user-scalable=no, initial-scale=1.0>
        <meta http-equiv="X-UA-Comptible" content="ie=edge">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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

		<script type="text/javascript">
		function showhidebranches(){
			document.getElementById('status').style.display="none";
			document.getElementById('branches').style.display="block";
			document.getElementById('br').style.display="none";
			document.getElementById('st').style.display="block";


		} </script>

		<script type="text/javascript">
		function showhidestatus(){

			document.getElementById('branches').style.display="none";
			document.getElementById('status').style.display="block";
			document.getElementById('st').style.display="none";
			document.getElementById('br').style.display="block";

		} </script>

		<script type="text/javascript">
		function showhideinvoicesearch(){
			document.getElementById('ip').style.display="none";
			document.getElementById('stext').style.display="block";
			document.getElementById('bp').style.display="block";
			document.getElementById('bran').style.display="none";


		} </script>
		<script type="text/javascript">
		function showhidebranchsearch(){
			document.getElementById('stext').style.display="none";
			document.getElementById('ip').style.display="block";
			document.getElementById('bran').style.display="block";
			document.getElementById('bp').style.display="none";


		} </script>
		<script type="text/javascript">
		function showresult(){
			document.getElementById('searchresult').style.display="block";
		} </script>

		<script>
		if (!Modernizr.touch || !Modernizr.inputtypes.date) {
				$('input[type=date]')
						.attr('type', 'text')
						.datepicker({
								// Consistent format with the HTML5 picker
								dateFormat: 'yy-mm-dd'
						});
		}
</script>
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">الصفحة الرئيسية </a></li>
							<li><a href="#info"> البيانات الشخصية</a></li>
							<li><a href="#zero"> العمـلاء </a></li>
							<li><a href="#one"> الطلبـات </a></li>
							<li><a href="#two"> لوحـة مراقبـة الطلبـات </a></li>
							<li><a href="#three"> الفـواتيـر </a></li>
							<li><a href="#four"> التقارير </a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner" >
							<h2>الوصول السريع</h2>
							<section>
								<table style="width:100% text-align:center ">
	<tr>
		<th><center><a href ="#two"><h3>لوحة الطلبات</h3><img src="img/control.png" width="100" height="100"></a></center></th>
		<th><center><a href="arrived.php"><h3>الطلبات المستلمة</h3><img src="img/arrived.png" width="100" height="100"></a></center></th>
		<th><center><a href="fix.php"><h3>طلب صيانة جديد</h3><img src="img/fix.png" width="100" height="100"></a></center></th>

	</tr>
</table>
</section>
</div>
					</section>
<!-- info -->
													<section id="info" class="wrapper style5 fade-up">
														<div class="inner">
															<center>
															 <img src="images/pic11.png" width="100" height="100">
														 </center>
						<h2>البيانات الشخصية</h2>
						<form action="updatecs.php" method="post">

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


					<!-- zero -->
					<section id="zero" class="wrapper style5 fade-up">
						<div class="inner">
							<center>
							 <img src="img/customer.png" width="100" height="100">
						 </center>
							<h2>العملاء </h2>
					<form method="post" action="#zero" >		<section style="text-align=right">
								<table>
						<tr>
							<th ><center><input type="submit" value="بحث"> </center></th>
						<th ><select name="branches">
							<option value="جميع الفروع" name ="allbranches"> جميع الفروع</option>

<?php
include '../config.php';
//query
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sql=("SELECT `الوصف` FROM `الفرع` ");
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>
<option><?php echo $row["الوصف"];?></option>
<?php
}
?>

						 </select>
						</th>
						</tr>
					</table>

<table>
	<?php
	include '../config.php';
	$branch=$_POST['branches'];
	$customer=filter_input(INPUT_POST,"customer");
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

	?>
	<p>فرع : <?php echo $branch?></p>
<tr>
<th>رقم الجوال </th>
<th>اسم العميل </th>
</tr>
<?php
switch ($branch) {
case 'جميع الفروع':
?>
<tr>
<?php

$sql="SELECT *
FROM `العميل`";
$result=mysql_query($sql);
while($rows = mysql_fetch_assoc($result))
{
									?>
<td style="text-align:right;"><?php echo $rows['الجوال']; ?></td>
<td style="text-align:right;"><?php echo $rows['اسم_العميل']; ?></td>
</tr>
<?php
					 }
					 ?>


<?php
break;

default:
?>
<tr>
<?php

$sql="SELECT *
FROM `العميل`
WHERE `اسم_العميل` = (
SELECT `اسم_العميل`
FROM `الطلب`
WHERE `رقم_الطلب` = (
SELECT `رقم_الطلب`
FROM `طلب الصيانة`
WHERE `وصف_الفرع` = '$branch' ) )";

$result=mysql_query($sql);
while($rows = mysql_fetch_assoc($result))
{
									?>
<td style="text-align:right;"><?php echo $rows['الجوال']; ?></td>
<td style="text-align:right;"><?php echo $rows['اسم_العميل']; ?></td>
<?php
					 }
				 }
					 ?>

</tr>

	</table>

</section> </form>
</div>
					</section>
				<!-- One -->
						<section id="one" class="wrapper style2 spotlights">
								<div class="inner">
									<h2>الطلبـات</h2>
									<section>
										<table style="width:100% text-align:center ">
      <tr>
				<th><center><a href = "newprob.php"><h3>مشكلة جديدة</h3><img src="img/newprob.png" width="100" height="100"></a></center></th>
				<th><center><a href="arrived.php"><h3>الطلبات المستلمة</h3><img src="img/arrived.png" width="100" height="100"></a></center></th>
				<th><center><a href = " "><h3>طلب بيع جديد</h3><img src="img/new.png" width="100" height="100"></a></center></th>
				<th><center><h3>تتبع طلب صيانة</h3><img src="img/track.png" width="100" height="100" id="track"></center></th>
        <th><center><a href="fix.php"><h3>طلب صيانة جديد</h3><img src="img/fix.png" width="100" height="100"></a></center></th>
      </tr>
    </table>
		<!-- The Modal -->
<div id="mytrack" class="modaltrack">
  <!-- Modal content -->
  <div class="modal-contenttrack">
		<section class="wrapper style2 fade-up" style="width:80%; height: 130%;">
			<div class="inner">
    <span class="closetrack">&times;</span>
				<h2>تتبع طلب الصيانة</h2>
				<section style="text-align=right">
					<table><form method="post" action="#">
						<th><input type="submit" name="searchbtn" id="searchbtn" onclick="showresult()" value="بحث"></th>
			<th><input type="text" name="searchtxt" id="searchtxt" placeholder=" ... ادخل رقم الطلب" style="text-align :right"></th>
			</tr>
		</form></table>
		<div id="searchresult" style="display:none;">
			<?php

			include '../config.php';
			mysql_query("SET NAMES 'utf8'");
			mysql_query('SET CHARACTER SET utf8');
$trackno=filter_input(INPUT_POST,"searchtxt");
	$result=mysql_query("SELECT * FROM `طلب الصيانة` WHERE `رقم_الطلب` ='$trackno'");
			while($row=mysql_fetch_array($result))
			{?>
<form>
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
		?>
		<?php

		include '../config.php';
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET CHARACTER SET utf8');
$result3= mysql_query("SELECT `الاسم` FROM `الفني` WHERE `البريد`=(SELECT `بريد_الفني` FROM `طلب صيانة` WHERE `رقم_الطلب`='$trackno')");
		while($row3=mysql_fetch_array($result3))
		{?>
			<div class="field half">
				<label for="tech">اسم الفني</label>
				<input type="text" name="tech" id="tech"value="<?php echo $row3["الاسم"];?>" />
			</div>
<?php } ?>
<?php

include '../config.php';
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$result4=mysql_query( "SELECT * FROM `العميل` WHERE `اسم_العميل`=(SELECT `اسم_العميل` FROM `الطلب` WHERE `رقم_الطلب`='$trackno')");
while($row4=mysql_fetch_array($result4))
{?>

			<div class="field half first">
				<label for="phone">رقم التواصل</label>
				<input type="text" name="phone" id="phone" value="<?php echo $row4["الجوال"];?>"/>
			</div>
			<div class="field half">
				<label for="customer">اسم العميل</label>
				<input type="text" name="customer" id="customer"value="<?php echo $row4["اسم_العميل"];?>" />
			</div>
		<?php }?>
		</form>
	</div>
		</section>
  </div>
</section>
</div>

<script>
// Get the modal
var modal = document.getElementById('mytrack');

// Get the button that opens the modal
var btn = document.getElementById("track");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closetrack")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</section>

									<ul class="actions">
										<li><a href="#" class="button">Learn more</a></li>
									</ul>
									</div>
						</section>

				<!-- Two -->
				<section id="two" class="wrapper style3 fade-up">
															<div class="inner">
																<center>
																 <img src="img/control.png" width="100" height="100">
															 </center>
																<h2>لوحة التحكم بالطلبات </h2>
																<section style="text-align=right">
																<form action="#two" method="post">	<table >
																	<tr>
															<th style="padding: 0 0 0 0 ;" ><input type="submit" value=" بحث"></th>
															<th style="padding: 0 0 0 0 ;" ><input type="button" id="st" onclick=showhidestatus() value=" بحث حسب حالة الطلب"></th>
															<th style="padding: 0 0 0 0 ;" ><input type="button"   id="br"onclick=showhidebranches() value=" بحث حسب الفرع "></th>
															<th style="padding: 0 0 0 0 ;" ><input type="button"   id="myorder" value=" تكليف "></th>

			<th>
			<select name="status" id="status" style="display:none;">
			<option >حالة الطلب</option>
			<option value="قيد الإنتظار">قيد الإنتظار</option>
			<option value="مرفوض">مرفوض</option>
			<option value="مقبول">مقبول</option>
			<option value="تم الإصلاح">تم الإصلاح</option>
			<option value="قيد الإصلاح">قيد الإصلاح</option>

			</select>
			</th>
																	<th > <select name="branches" id="branches" style="display:none;">
																		<option > فضلاً اختر الفرع</option>
																		<option value="جميع الفروع" name ="allbranches"> جميع الفروع</option>

								<?php
								include '../config.php';
								//query
								mysql_query("SET NAMES 'utf8'");
								mysql_query('SET CHARACTER SET utf8');
								$sql=("SELECT `الوصف` FROM `الفرع` ");
								$result=mysql_query($sql);
								while($row=mysql_fetch_array($result))
								{
								?>
								<option><?php echo $row["الوصف"];?></option>
								<?php
								}
								?>

																	 </select></th>
																	</tr>
																	</table>
																	<?php
																	include '../config.php';
																	$branches=$_POST['branches'];
																	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

																	?>
																	<table  style="border: 1px solid black;" id="show1">
																		<p>فرع : <?php echo $branches?></p>

														<tr >

															<th style="border: 1px solid #c2d9ed;">مشكلة إضافية </th>
															<th style="border: 1px solid #c2d9ed;">تاريخ الاستحقاق </th>
															<th style="border: 1px solid #c2d9ed;">تاريخ الاستلام </th>
															<th style="border: 1px solid #c2d9ed;">الحالة </th>
															<th style="border: 1px solid #c2d9ed;"> التفصيل</th>
															<th style="border: 1px solid #c2d9ed;"> نوع المشكلة</th>
														<th style="border: 1px solid #c2d9ed;"> رقم الطلب </th>
														<th style="border: 1px solid #c2d9ed;"> تم إرسال الطلب بواسطة </th>
														<th style="border: 1px solid #c2d9ed;">الفني المسؤول </th>

														</tr>

														<?php
														switch ($branches) {
															case 'جميع الفروع':
																?>
																<tr>
																	<?php
																	$sql=("SELECT *
																		FROM `طلب الصيانة`");
																	$result=mysql_query($sql);
																	while($rows = mysql_fetch_assoc($result))
																	{
																		                    ?>
																<td style="border: 1px solid #073660;"><?php echo $rows['مشكلة_إضافية']; ?></td>
																<td style="border: 1px solid #073660;"> <?php echo $rows['وقت_الاستحقاق']; ?></td>
																<td style="border: 1px solid #073660;"> <?php echo $rows['تاريخ_الاستلام']; ?></td>
																<td style="border: 1px solid #073660;"> <?php echo $rows['حالة_الطلب']; ?></td>
																<td style="border: 1px solid #073660;"> <?php echo $rows['التفصيل']; ?></td>
																<td style="border: 1px solid #073660;"> <?php echo $rows['نوع_المشكلة']; ?></td>
																<td style="border: 1px solid #073660;"> <?php echo $rows['رقم_الطلب']; ?></td>

																<?php
																$ON=$rows['رقم_الطلب'];
																$sql1= "SELECT `الاسم` FROM `خدمة العملاء` WHERE `البريد`=(SELECT `بريد_خ_ع` FROM `طلب مرسل` WHERE `رقم_الطلب`='$ON')";
																$result1=mysql_query($sql1);
																while($rows1 = mysql_fetch_assoc($result1))
																{ ?>
																<td style="border: 1px solid #073660;"><?php echo $rows1['الاسم']?> </td>
			<?php }?>
			<?php $ON1=$rows['رقم_الطلب'];
			$sql2= "SELECT `الاسم` FROM `الفني` WHERE `البريد`=(SELECT `بريد_الفني` FROM `طلب مرسل` WHERE `رقم_الطلب`='$ON')";
			$result2=mysql_query($sql2);
			while($rows2 = mysql_fetch_assoc($result2))
			{ ?>
				<td style="border: 1px solid #073660;"><?php echo $rows2['الاسم']?> </td>
			<?php }?>

																</tr>
																<?php
																							 }
																							 ?>

																							 <?php
																		 break;

																		 default:
																		 ?>

																		 <tr>
							 												<?php
																			$sql=("SELECT *
																				FROM `طلب الصيانة`
																				WHERE `وصف_الفرع` = '$branches'");
							 												$result=mysql_query($sql);
							 												while($rows = mysql_fetch_assoc($result))
							 												{
							 													                    ?>
																														<td style="border: 1px solid #073660;"><?php echo $rows['مشكلة_إضافية']; ?></td>
																														<td style="border: 1px solid #073660;"> <?php echo $rows['وقت_الاستحقاق']; ?></td>
																														<td style="border: 1px solid #073660;"> <?php echo $rows['تاريخ_الاستلام']; ?></td>
																														<td style="border: 1px solid #073660;"> <?php echo $rows['حالة_الطلب']; ?></td>
																														<td style="border: 1px solid #073660;"> <?php echo $rows['التفصيل']; ?></td>
																														<td style="border: 1px solid #073660;"> <?php echo $rows['نوع_المشكلة']; ?></td>
																														<td style="border: 1px solid #073660;"> <?php echo $rows['رقم_الطلب']; ?></td>
																														<?php
																														$ON=$rows['رقم_الطلب'];
																														$sql1= "SELECT `الاسم` FROM `خدمة العملاء` WHERE `البريد`=(SELECT `بريد_خ_ع` FROM `طلب مرسل` WHERE `رقم_الطلب`='$ON')";
																														$result1=mysql_query($sql1);
																														while($rows1 = mysql_fetch_assoc($result1))
																														{ ?>
																														<td style="border: 1px solid #073660;"><?php echo $rows1['الاسم']?> </td>
																	<?php }?>
																	<?php $ON1=$rows['رقم_الطلب'];
																	$sql2= "SELECT `الاسم` FROM `الفني` WHERE `البريد`=(SELECT `بريد_الفني` FROM `طلب مرسل` WHERE `رقم_الطلب`='$ON')";
																	$result2=mysql_query($sql2);
																	while($rows2 = mysql_fetch_assoc($result2))
																	{ ?>
																		<td style="border: 1px solid #073660;"><?php echo $rows2['الاسم']?> </td>
																	<?php }?>
					</tr>
					</table>
							 											<?php
							 																		 }
																								 }
							 																		 ?>
																									 <?php
																									 include '../config.php';
																									 $status=$_POST['status'];
																									 mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

																									 ?>

																									 <table  style="border: 1px solid black;"id="show">

			<p>حالة الطلب  : <?php echo $status?></p>
																									 <tr >
																									   <th style="border: 1px solid #c2d9ed;">الفرع</th>
																									 <th style="border: 1px solid #c2d9ed;">مشكلة إضافية </th>
																									 <th style="border: 1px solid #c2d9ed;">تاريخ الاستحقاق </th>
																									 <th style="border: 1px solid #c2d9ed;">تاريخ الاستلام </th>
																									 <th style="border: 1px solid #c2d9ed;">الحالة </th>
																									 <th style="border: 1px solid #c2d9ed;"> التفصيل</th>
																									 <th style="border: 1px solid #c2d9ed;"> نوع المشكلة</th>
																									 <th style="border: 1px solid #c2d9ed;"> رقم الطلب </th>
																									 <th style="border: 1px solid #c2d9ed;"> تم إرسال الطلب بواسطة </th>
																									 <th style="border: 1px solid #c2d9ed;">الفني المسؤول </th>

																									 </tr>

																									 <?php
																									 switch ($status) {
																									 default:
																									 ?>
																									 <tr>
																									 <?php
																									 $sql=("SELECT * FROM `طلب الصيانة` WHERE `حالة_الطلب`='$status'");
																									 $result=mysql_query($sql);
																									 while($rows = mysql_fetch_assoc($result))
																									 {
																									                       ?>
																									 <td style="border: 1px solid #073660;"><?php echo $rows['وصف_الفرع']; ?></td>
																									 <td style="border: 1px solid #073660;"><?php echo $rows['مشكلة_إضافية']; ?></td>
																									 <td style="border: 1px solid #073660;"> <?php echo $rows['وقت_الاستحقاق']; ?></td>
																									 <td style="border: 1px solid #073660;"> <?php echo $rows['تاريخ_الاستلام']; ?></td>
																									 <td style="border: 1px solid #073660;"> <?php echo $rows['حالة_الطلب']; ?></td>
																									 <td style="border: 1px solid #073660;"> <?php echo $rows['التفصيل']; ?></td>
																									 <td style="border: 1px solid #073660;"> <?php echo $rows['نوع_المشكلة']; ?></td>
																									 <td style="border: 1px solid #073660;"> <?php echo $rows['رقم_الطلب']; ?></td>

																									 <?php
																									 $ON=$rows['رقم_الطلب'];
																									 $sql1= "SELECT `الاسم` FROM `خدمة العملاء` WHERE `البريد`=(SELECT `بريد_خ_ع` FROM `طلب مرسل` WHERE `رقم_الطلب`='$ON')";
																									 $result1=mysql_query($sql1);
																									 while($rows1 = mysql_fetch_assoc($result1))
																									 { ?>
																									 <td style="border: 1px solid #073660;"><?php echo $rows1['الاسم']?> </td>
																									 <?php }?>
																									 <?php $ON1=$rows['رقم_الطلب'];
																									 $sql2= "SELECT `الاسم` FROM `الفني` WHERE `البريد`=(SELECT `بريد_الفني` FROM `طلب مرسل` WHERE `رقم_الطلب`='$ON')";
																									 $result2=mysql_query($sql2);
																									 while($rows2 = mysql_fetch_assoc($result2))
																									 { ?>
																									 <td style="border: 1px solid #073660;"><?php echo $rows2['الاسم']?> </td>
																									 <?php }?>

																									 </tr>
																									 <?php
																									              }

																									    break;

																									                  }
																									                  ?>



																		</table></form>
									</section>
									</div>
														</section>


					<!-- The Modal -->
			<div id="mytech" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content">
					<section class="wrapper style3 fade-up" style="width:40%; height: 80%;">
						<div class="inner">
			    <span class="close">&times;</span>
							<h2>تكليف الفني</h2>
							<section style="text-align=right">

			<form method="get" action="#" >
				<center>
						<div class="field half first">
							<label for="date">الفني</label>
							<select name="tech">
							<option value="" style="display:none">تكليف</option>
							<option> </option>
							<option> </option>
							</select></th>
						</div>
						<ul class="actions">
							<li><a href="#" class="button">Learn more</a></li>
						</ul>
					</center>
					</form>
					</section>
			  </div>
			</section>
			</div>
			<script>
			// Get the modal
			var techmodal = document.getElementById('mytech');

			// Get the button that opens the modal
			var techbtn = document.getElementById("myorder");

			// Get the <span> element that closes the modal
			var techspan = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal
			techbtn.onclick = function() {
			    techmodal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			techspan.onclick = function() {
			    techmodal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == techmodal) {
			        techmodal.style.display = "none";
			    }
			}
			</script>
			</section>
				</div>

				<!-- Three -->
					<section id="three" class="wrapper style10 fade-up">
						<div class="inner">
							<center>
							 <img src="img/bill.png" width="100" height="100">
						 </center>
							<h2>الفواتير </h2>


								<section style="text-align=right">
<p>قائمة الفواتير </p>
<form action="#three" method="post">
<table>
<tr>
<th ><center><input type="submit" value="بحث"> </center></th>
<th><input type="button" name="branchessearch" id="bp"value="بحث بحسب الفرع " onclick="showhidebranchsearch()"></th>
<th><input type="button" name="invoicesearch" id="ip" value="بحث بحسب رقم الفاتورة" onclick="showhideinvoicesearch()"></th>
<th ><input style="display:none;" type="text" name="invoice_number"id="stext"  placeholder=" ... بحث" style="text-align :right"></th>
<th >
<select style="display:none;" id="bran" name="branches2">

<?php
include '../config.php';
//query
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sql=("SELECT `الوصف` FROM `الفرع` ");
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>
<option><?php echo $row["الوصف"];?></option>
<?php
}
?>

</select>
</th>
</tr>
</table></form>




			<table>
<tr>
<th>المبلغ </th>
<th>الكمية</th>
<th>التاريخ</th>
<th>رقم الفاتورة </th>
</tr>

	<?php
	include '../config.php';
	$branches2=$_POST['branches2'];
	$invoice_number=filter_input(INPUT_POST,"invoice_number");
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
if (!$branches2){
$sql="SELECT *
FROM `الفاتورة`WHERE `رقم_الفاتورة`=$invoice_number " or die(mysql_error());
$result=mysql_query($sql);
while($rows = mysql_fetch_assoc($result))
{
		 ?>
		 <tr>
<td style="text-align:right;"><?php echo $rows['المبلغ']; ?></td>
<td style="text-align:right;"><?php echo $rows['الكمية']; ?></td>
<td style="text-align:right;"><?php echo $rows['التاريخ']; ?></td>
<td style="text-align:right;"><?php echo $rows['رقم_الفاتورة']; ?></td>
</tr>
<?php
}



}{
	$sql="SELECT *
	FROM `الفاتورة`
	WHERE `وصف_الفرع` ='$branches2'" or die(mysql_error());
 $result=mysql_query($sql);
 while($rows = mysql_fetch_assoc($result))
 {
											 ?>
											 <p>   فرع : <?php echo $branches2 ?> </p>
											 <tr>
											 <td style="text-align:right;"><?php echo $rows['المبلغ']; ?></td>
											 <td style="text-align:right;"><?php echo $rows['الكمية']; ?></td>
											 <td style="text-align:right;"><?php echo $rows['التاريخ']; ?></td>
											 <td style="text-align:right;"><?php echo $rows['رقم_الفاتورة']; ?></td>
											 </tr>
	<?php
} }
								 ?>

				</table>
					</div>
				</section>
								</section>


					</section>

					<section id="four" class="wrapper style4 fade-up">
						<div class="inner">
								<center>
								 <img src="images/pic17.png" width="100" height="100">
							 </center>
								<h2>التقارير</h2>


									<section style="text-align=right">

			<table><form action="#eight" method="post">
			<tr>
			<th ><center><input type="submit" value="بحث"> </center></th>
			<th><input type="button" id="btntype" value="بحث حسب نوع التقرير " onclick="SH1()"></th>
			<th><input type="button" id="btntitle" value="بحث حسب عنوان التقرير" onclick="SH2()"></th>
			<th><input  style="display:none;"type="text" id="Rname" name="reportname" placeholder=" ... بحث" style="text-align :right"></th>
			<th >
			<select style="display:none;"  id="reports"name="reports">
			<option value="" style="display:none">نوع التقرير</option>
			<option>مبيعات </option>
			<option> عملاء</option>
			<option> موظفين</option>
			</select>
			</th>
			</tr></form>
			</table>



			<p>قائمة التقارير</p>
				<table>
			<tr>
			<th>نوع التقرير </th>
			<th>عنوان التقرير </th>
			<th>بريد المرسل</th>

			</tr>
			<tr>
			<?php
			include '../config.php';
			$reports=$_POST['reports'];
			$reportname=filter_input(INPUT_POST,"reportname");
			mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
			if(!$reports){
			$sql="SELECT *
			FROM `التقرير`
			WHERE `عنوان_التقرير` ='$reportname'
			";
			$result=mysql_query($sql);
			while($rows = mysql_fetch_assoc($result))
			{
			?>
			<td style="text-align:right;"><?php echo $rows['نوع_التقرير']; ?></td>
			<td style="text-align:right;"><?php echo $rows['عنوان_التقرير']; ?></td>
			<td style="text-align:right;"><?php echo $rows['بريد_الفني']; ?> <?php echo $rows['بريد_خ_ع']; ?></td>

			<?php
			}

			}
			{$sql="SELECT *
			FROM `التقرير`
			WHERE `نوع_التقرير` ='$reports'
			";
			$result=mysql_query($sql);
			while($rows = mysql_fetch_assoc($result))
			{
													?>
			<td><?php echo $rows['نوع_التقرير']; ?></td>
			<td><?php echo $rows['عنوان_التقرير']; ?></td>
			<td><?php echo $rows['بريد_الفني']; ?> <?php echo $rows['بريد_خ_ع']; ?></td>

			<?php
			}}
									 ?>
			</tr>
					</table>
						</div>
					</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
