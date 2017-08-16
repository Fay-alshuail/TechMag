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
				<option value="creditcard"> بطاقة ائتمان</option>
				<option value="paypal"> باي بال</option>
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
										<section style="text-align=right">
											<table>
									<tr>
										<th ><center><input type="submit" value="بحث"> </center></th>
									<th><input type="text" name="search" placeholder=" ... بحث" style="text-align :right"></th>
									<th ><select name="branches">
										<option value="allbranches" name ="allbranches"> جميع الفروع</option>

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
<tr>
<th>رقم الجوال </th>
<th>اسم العميل </th>
</tr>

<tr>
	<?php
	$sql="SELECT `الجوال` , `اسم_العميل`
	FROM `الطلب`
	WHERE `الفرع` ='$branches'
	";
	$result=mysql_query($sql);
	while($rows = mysql_fetch_assoc($result))
	{
												?>
	<td><?php echo $rows['الجوال']; ?></td>
	<td><?php echo $rows['اسم_العميل']; ?></td>
	<?php
								 }
								 ?>
</tr>
				</table>

			</section>
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
														<table >
														<tr>
														<th style="padding: 0 0 0 0 ;"><input type="button" value="مقبول"style="width:1em; text-align:center;"></th>
														<th style="padding: 0 0 0 0 ;" ><input type="button" value=" مرفوض"></th>
														<th style="padding: 0 0 0 0 ;"><input type="button" value="قيد الانتظار"></th>
														<th style="padding: 0 0 0 0 ;"><input type="button" value="تم الإصلاح "></th>
														<th style="padding: 0 0 0 0 ;"><input type="button" value="مغلق" style="width:1em; text-align:center;"></th>
														<th > <select name="branches">
															<option value="allbranches" name ="allbranches"> جميع الفروع</option>

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
														<table  style="border: 1px solid black;">
											<tr >

												<th style="border: 1px solid #c2d9ed;">مشكلة إضافية </th>
												<th style="border: 1px solid #c2d9ed;">تاريخ الاستحقاق </th>
												<th style="border: 1px solid #c2d9ed;">تاريخ الاستلام </th>
												<th style="border: 1px solid #c2d9ed;">الحالة </th>
												<th style="border: 1px solid #c2d9ed;">الفني المسؤول </th>
												<th style="border: 1px solid #c2d9ed;"> تم إرسال الطلب بواسطة </th>
												<th style="border: 1px solid #c2d9ed;"> التفصيل</th>
												<th style="border: 1px solid #c2d9ed;"> نوع المشكلة</th>
											<th style="border: 1px solid #c2d9ed;"> رقم الطلب </th>
											</tr>


												<td style="border: 1px solid #073660;"></td>
												<td style="border: 1px solid #073660;"></td>
												<td style="border: 1px solid #073660;"></td>
												<td style="border: 1px solid #073660;"></td>
												<td style="border: 1px solid #073660;"></td>
												<td style="border: 1px solid #073660;"></td>
												<td style="border: 1px solid #073660;"></td>
												<td style="border: 1px solid #073660;"></td>
												<td style="border: 1px solid #073660;"></td>
											</tr>
															</table>
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
																	<p> رفع نموذج فاتورة</p>
																	<table>
															<tr>
																<th ><center><input type="submit" value="بحث"> </center></th>
															<th><input type="text" name="search" placeholder="" style="text-align :right"></th>
															<th >
																<center><input type="submit" value="استعراض"> </center>
															</th>
															</tr>
														</table>
																	</section>

																	<section style="text-align=right">
<p>قائمة الفواتير </p>
<table>
<tr>
<th ><center><input type="submit" value="بحث"> </center></th>
<th><input type="text" name="search" placeholder=" ... بحث" style="text-align :right"></th>
<th >
	<select name="branches">
		<option value="allbranches" name ="allbranches"> جميع الفروع</option>

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
									<tr>
									<th>التفاصيل </th>
									<th>رقم الفاتورة </th>
									</tr>
									<tr>
										<?php
										$sql="SELECT `المبلغ` , `رقم_الفاتورة`
										FROM `الفاتورة`
										WHERE `الفرع` ='$branches'
										";
									 $result=mysql_query($sql);
									 while($rows = mysql_fetch_assoc($result))
									 {
																				 ?>
										<td><?php echo $rows['المبلغ']; ?></td>
										<td><?php echo $rows['رقم_الفاتورة']; ?></td>
										<?php
																	 }
																	 ?>
									</tr>
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

				<table>
				<tr>
				<th ><center><input type="submit" value="بحث"> </center></th>
				<th><input type="text" name="search" placeholder=" ... بحث" style="text-align :right"></th>
				<th >
				<select name="branches">
				<option value="" style="display:none">نوع التقرير</option>
				<option> </option>
				<option> </option>
				</select>
				</th>
				</tr>
				</table>



<p>قائمة التقارير</p>
																<table>
													<tr>
													<th>التفاصيل </th>
													<th>عنوان التقرير </th>
													</tr>
													<tr>
														<?php
														$sql="SELECT `نوع_التقرير` , `عنوان_التقرير`
														FROM `التقرير`
														WHERE `الفرع` ='$branches'
														";
														$result=mysql_query($sql);
														while($rows = mysql_fetch_assoc($result))
														{
															                    ?>
														<td><?php echo $rows['نوع_التقرير']; ?></td>
														<td><?php echo $rows['عنوان_التقرير']; ?></td>
														<?php
																					 }
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
