<?php
session_start();
include '../config.php';
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sessionU=$_SESSION['username_s'];
$result=mysql_query("SELECT * FROM `المشرف` WHERE `البريد` ='$sessionU'");
while($row=mysql_fetch_array($result))
{?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>المشرف </title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-whidth", user-scalable=no, initial-scale=1.0>
		<meta http-equiv="X-UA-Comptible" content="ie=edge">

		<link rel="stylesheet" href="assets/css/supervisor.css" />
		<link rel="stylesheet" href="css.css" />
<script type="text/javascript">
function showhide(){
document.getElementById('uncard').style.display="block";
document.getElementById('undate').style.display="block";
document.getElementById('shdate').style.display="none";
document.getElementById('shcard').style.display="none";
document.getElementById('shbranch').style.display="none";
document.getElementById('unbranch').style.display="block";
document.getElementById('phone').removeAttribute("readOnly");
document.getElementById('phone2').removeAttribute("readOnly");
document.getElementById('address').removeAttribute("readOnly");
document.getElementById('securityno').removeAttribute("readOnly");
document.getElementById('cardno').removeAttribute("readOnly");

}

</script>
<script type="text/javascript">
function showhidestatus(){

	document.getElementById('branches').style.display="none";
	document.getElementById('status').style.display="block";
	document.getElementById('st').style.display="none";
	document.getElementById('br').style.display="block";

} </script>
<script type="text/javascript">
function SH1(){

	document.getElementById('btntype').style.display="none";
	document.getElementById('reports').style.display="block";
	document.getElementById('btntitle').style.display="block";
	document.getElementById('Rname').style.display="none";

} </script>
<script type="text/javascript">
function SH2(){

	document.getElementById('btntitle').style.display="none";
	document.getElementById('Rname').style.display="block";
	document.getElementById('btntype').style.display="block";
	document.getElementById('reports').style.display="none";

} </script>
<script type="text/javascript">
function showhidebranches(){
	document.getElementById('status').style.display="none";
	document.getElementById('branches').style.display="block";
	document.getElementById('br').style.display="none";
	document.getElementById('st').style.display="block";


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
	<body class="align-right">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">الصفحة الرئيسية </a></li>
							<li><a href="#one">الحساب والإشتراك </a></li>
							<li><a href="#two">الفروع </a></li>
							<li><a href="#three">المخازن </a></li>
							<li><a href="#four">الموظفين </a></li>
							<li><a href="#five">العملاء </a></li>
							<li><a href="#six">لوحة مراقبة الطلبات </a></li>
							<li><a href="#seven">الفواتير </a></li>
							<li><a href="#eight">التقارير </a></li>
							<li><a href="#nine">الإعدادت </a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">

                                <div class="inner">
                                    <h2>الوصول السريع</h2>
                                    <section>
                                        <table style="width:20% text-align:center ">
      <tr>
                <th><center><a href = "../prices.php"><h3>تجديد الإشتراك </h3><img src="images/pic15.png" width="100" height="100"></a></center></td>
                <th><center><a href="branchcontrol.php"><h3>مراقبة الفروع </h3><img src="images/pic01.png" width="100" height="100"></a></center></td>
                <th><center><a href = "addproduct.php "><h3>إضافة منتج</h3><img src="images/pic04.png" width="100" height="100"></a></center></td>
  </tr>
	<tr>
								<td><center><a href="addwarehouse.php"><h3>إضافة مخزن </h3><img src="images/pic06.png" width="100" height="100"></a></center></td>
                <td><center><a href = "addstaff.php"><h3>إضافة موظف </h3><img src="images/pic07.png" width="100" height="100"></a></center></td>
                <td><center><a href="#five "><h3>قائمة العملاء</h3><img src="images/pic13.png" width="100" height="100"></a></center></td>
  </tr>
<tr>
								<td><center><a href="#nine "><h3>الإعدادات</h3><img src="images/pic16.png" width="100" height="100"></a></center></td>
            <td><center><a href = "#six "><h3>لوحة الطلبات  </h3><img src="images/pic10.png" width="100" height="100"></a></center></td>

        <td><center><a href="#seven "><h3>قائمة الفواتير </h3><img src="images/pic14.png" width="100" height="100"></a></center></td>

      </tr>
    </table>
</section>
</div>
                        </section>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">


								<div class="inner">
									<center>
									 <img src="images/pic11.png" width="100" height="100">
								 </center>
<h2>الإشتراك </h2>
<form action="insertsub.php" method="post">

<p> البيانات الشخصية </p>
									<table id = "table2" class ="align-center">
									<td>
									  <ul>

									<p> : الجوال <input type="text" name="phone" readOnly="true" id="phone" value="<?php echo $row["الجوال1"];?>"/> </p>
									<p> : الجوال 2 <input type="text" name="phone2" readOnly="true" id="phone2" value="<?php echo $row["الجوال2"];?>"/> </p>
									<p> : عنوان السكن <input type="text" name="address" readOnly="true" id="address" value="<?php echo $row["عنوان_السكن"];?>"/> </p>
									<p style="display:block;"id="shbranch"> : الفرع <input type="text" name="branch" readOnly="true"  value="<?php echo $row["الفرع"];?>"/> </p>
									<p style="display:none;"id="unbranch"> : الفرع  <input type="text" name="branch"   value="جميع الفروع"/>
									  </ul>

									</td>
									<td>

									    <ul>
									    <p> : الاسم <input type="text" name="name" readOnly="true" id="name"value="<?php echo $row["الاسم"];?>"/> </p>
									    <p> : المسمى الوظيفي <input type="text" readOnly="true" name="job" id="job" value="<?php echo $row["المسمى_الوظيفي"];?>"/> </p>
									    <p> : البريد الالكتروني <input type="email"  readOnly="true" name="email" id="email" value="<?php echo $row["البريد"];?>"/>  </p>

									    </ul>
									  </td>
									</table>
<p>بيانات الحساب البنكي </p>
<table id = "table2" class ="align-center">
<td>
	<ul>
		<p> : رقم الأمان  <input type="text" name="securityno"  readOnly="true"id="securityno" value="<?php echo $row["رقم_الأمان"];?>"/> </p>
		<p style="display:block;"id="shdate"> : تاريخ الانتهاء <input type="text"  value="<?php echo $row["تاريخ_الإنتهاء"];?>" ></p>
<p style="display:none;"id="undate"> : تاريخ الانتهاء <input type="date" name="date" id="date"></p>
<br>

<p> <input type="submit" value="حـفـظ"></p>
</ul>

</td>
<td>

		<ul>

			<p> :رقم البطاقة  <input type="text" name="cardno" readOnly="true" id="cardno" value="<?php echo $row["رقم_حساب_البنك"];?>"/> </p>
			<p style="display:block;"id="shcard"> : نوع البطاقة  <input type="text" name="cards"  readOnly="true" value="<?php echo $row["نوع_بطاقة_البنك"];?>">
				<p style="display:none;"id="uncard"> : نوع البطاقة  <select name="cards" >
					<option ><?php echo $row["نوع_بطاقة_البنك"];?><option>
				<option value="بطاقة ائتمان"> بطاقة ائتمان</option>
				<option value="باي بال"> باي بال</option>
				</select>
			 </p>
			<br>
			<p> <input type="button" value="تـعـديـل " onclick=showhide()></p>
		</ul>
	</td>

</table>
<?php
}
?>
</form>

								</div>



					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>الفروع</h2>

								<section style="text-align=right">

										<table style="width:70% text-align:center ">

										  <tr>

										    <th> <center>	<a href="branchcontrol.php"><h3>مراقبة الفروع </h3><img src="images/pic01.png" width="100" height="100"></a> </center></th>
										    <th> <center>	<a href="branchproductivity.php"><h3>إنتاجية الفروع  </h3><img src="images/pic02.png" width="100" height="100"></a></center></</th>
										    <th> <center>	<a href="addbranch.php"><h3>إضافة فرع جديد</h3><img src="images/pic03.png" width="100" height="100"></a></center></</th>

										  </tr>

										</table>
									</section>

</div>

					</section>

				<!-- Three -->
					<section id="three" class="wrapper style10 fade-up">
						<div class="inner">
							<h2>المخازن</h2>
							<section style="text-align=right">

									<table style="width:70% text-align:center ">
	  <tr>
	    <th> <center><a href="addwarehouse.php"><h3>إضافة مخزن جديد </h3><img src="images/pic06.png" width="100" height="100"></a></center></th>
	    <th><center><a href="warehousecontrol.php"><h3>مراقبة المخازن  </h3><img src="images/pic05.png" width="100" height="100"></a></center></th>
			<th><center><a href="exproduct.php"><h3>إضافة قطع غيار</h3><img src="images/pic20.png" width="100" height="100"></a></center></th>
			<th><center><a href = "addproduct.php"><h3>إضافة منتج </h3><img src="images/pic04.png" width="100" height="100"></a></center></th>
	  </tr>
	</table>
</section>
</div>
					</section>

					<!-- four -->

					<section id="four" class="wrapper style4 fade-up">
						<div class="inner">
							<h2>الموظفين</h2>
							<section style="text-align=right">

									<table style="width:70% text-align:center ">
	  <tr>
	    <th> <center><a href="addstaff.php"><h3>إضافة موظف </h3><img src="images/pic07.png" width="100" height="100"></a></center></th>
	    <th><center><a href="staff.php"><h3>الموظفين </h3><img src="images/pic08.png" width="100" height="100"></a></center></th>
	    <th><center><a href = "staffproductivity.php"><h3>إنتاجية الموظف </h3><img src="images/pic09.png" width="100" height="100"></a></center></th>
	  </tr>
	</table>
</section>
</div>
					</section>

					<!-- five -->

								<section id="five" class="wrapper style5 fade-up">
									<div class="inner">
										<center>
										 <img src="images/pic13.png" width="100" height="100">
									 </center>
										<h2>العملاء </h2>
								<form method="post" action="#five" >		<section style="text-align=right">
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
	<td><?php echo $rows['الجوال']; ?></td>
	<td><?php echo $rows['اسم_العميل']; ?></td>
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
	<td><?php echo $rows['الجوال']; ?></td>
	<td><?php echo $rows['اسم_العميل']; ?></td>
	<?php
								 }
							 }
								 ?>

</tr>

				</table>

			</section> </form>
			</div>
								</section>
								<!-- six -->

	<section id="six" class="wrapper style6 fade-up">
												<div class="inner">
													<center>
													 <img src="images/pic10.png" width="100" height="100">
												 </center>
													<h2>لوحة التحكم بالطلبات </h2>
													<section style="text-align=right">
													<form action="#six" method="post">	<table >
														<tr>
												<th style="padding: 0 0 0 0 ;" ><input type="submit" value=" بحث"></th>
												<th style="padding: 0 0 0 0 ;" ><input type="button" id="st" onclick=showhidestatus() value=" بحث حسب حالة الطلب"></th>
												<th style="padding: 0 0 0 0 ;" ><input type="button"   id="br"onclick=showhidebranches() value=" بحث حسب الفرع "></th>

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
											<!-- seven -->
		<section id="seven" class="wrapper style7 fade-up">

															<div class="inner">
																<center>
																 <img src="images/pic14.png" width="100" height="100">
															 </center>
																<h2>الفواتير </h2>


																	<section style="text-align=right">
<p>قائمة الفواتير </p>
<form action="#seven" method="post">
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
	<td><?php echo $rows['المبلغ']; ?></td>
	<td><?php echo $rows['الكمية']; ?></td>
	<td><?php echo $rows['التاريخ']; ?></td>
	<td><?php echo $rows['رقم_الفاتورة']; ?></td>
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
																				 <td><?php echo $rows['المبلغ']; ?></td>
																				 <td><?php echo $rows['الكمية']; ?></td>
																				 <td><?php echo $rows['التاريخ']; ?></td>
																				 <td><?php echo $rows['رقم_الفاتورة']; ?></td>
																				 </tr>
										<?php
									} }
																	 ?>

													</table>
														</div>
												</section>

														</section>
														<!-- eight -->

																	<section id="eight" class="wrapper style8 fade-up">
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
														$reportname=filter_input(INPUT_POST,"reportname");
														$reports=$_POST['reports'];
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
	<td><?php echo $rows['نوع_التقرير']; ?></td>
	<td><?php echo $rows['عنوان_التقرير']; ?></td>
	<td><?php echo $rows['بريد_الفني']; ?> <?php echo $rows['بريد_خ_ع']; ?></td>

	<?php
	}
}
else {$sql="SELECT *
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

																	</section>
																	<!-- nine-->
	<section id="nine" class="wrapper style9 fade-up">
																					<div class="inner">
																						<h2>الإعدادات </h2>
																						<section style="text-align=right">

																								<table style="width:70% text-align:center ">
																	<tr>
																		<th><center><a href="role.php"><h3>إعدادات الأدوار</h3><img src="images/pic16.png" width="100" height="100"></a></center></th>
																		<th><center><a href = "../prices.php"><h3>تحديث خطة الاشتراك </h3><img src="images/pic15.png" width="100" height="100"></a></center></th>
																	</tr>
																</table>
															</section>
															</div>
																				</section>

					</section>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
