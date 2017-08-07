
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>المشرف </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/supervisor.css" />
		<link rel="stylesheet" href="css.css" />

		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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
                <th><center><a href = "prices.php"><h3>تجديد الإشتراك </h3><img src="images/pic15.png" width="100" height="100"></a></center></td>
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
<p> البيانات الشخصية </p>
									<table id = "table2" class ="align-center">
									<td>
									  <ul>

									<p> : الجوال <input type="text" name="phone" id="nom" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
									<p> : الجوال 2 <input type="text" name="phone2" id="prenom" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
									<p> : عنوان السكن <input type="text" name="address" id="fonction" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>

									  </ul>

									</td>
									<td>

									    <ul>
									    <p> : الاسم <input type="text" name="name" id="name" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
									    <p> : المسمى الوظيفي <input type="text" name="job" id="job" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>
									    <p> : البريد الالكتروني <input type="email" name="email" id="fonction" data-rule="required" data-msg="لو ماعبى التيكست"/>  </p>

									    </ul>
									  </td>
									</table>
<p>بيانات الحساب البنكي </p>
<table id = "table2" class ="align-center">
<td>
	<ul>
<p> : تاريخ الانتهاء <input type="date"></p>
	<p> : رقم الأمان  <input type="text" name="securityno" id="securityno" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p> <br>
<p> <input type="submit" value="حـفـظ"></p>
</ul>

</td>
<td>

		<ul>

			<p> :رقم البطاقة  <input type="text" name="cardno" id="cardno" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
			<p> : نوع البطاقة  <select name="cards  ">
  <option value="creditcard"> بطاقة ائتمان</option>
  <option value="paypal"> باي بال</option>
</select> </p>
			<br>
			<p> <input type="button" value="تـعـديـل "></p>
		</ul>
	</td>
</table>
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
	    <th> <center><a href="newwarehouse.php"><h3>إضافة مخزن جديد </h3><img src="images/pic06.png" width="100" height="100"></a></center></th>
	    <th><center><a href="addwarwhouse.php"><h3>مراقبة المخازن  </h3><img src="images/pic05.png" width="100" height="100"></a></center></th>
	    <th><center><a href = "addproduct.php"><h3>إضافة منتج </h3><img src="images/pic04.png" width="100" height="100"></a></center></th>
	  </tr>
	</table>
</section>
</div>
					</section>
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
									<th >
										<select name="branches">
											<option value="" style="display:none">الفرع</option>
<?php


											//db connection
mysql_connect('148.66.136.120', 'fixmincp', 'dmQgpIJ$UfMO5O');
mysql_select_db('fixmin',$conn);

//query
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sql=mysql_query("SELECT `الوصف` FROM `الفرع` WHERE 1");
if(mysql_num_rows($sql)){
$select= '<select name="select">';
while($rs=mysql_fetch_array($sql)){
      $select.='<option value="'.$rs['id'].'"></option>';
  }
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


	<td></td>
	<td></td>
</tr>
				</table>

			</section>
			</div>
								</section>
											<section id="six" class="wrapper style6 fade-up">
												<div class="inner">
													<center>
													 <img src="images/pic10.png" width="100" height="100">
												 </center>
													<h2>لوحة التحكم بالطلبات </h2>
													<section style="text-align=right">
														<table >
														<tr>
														<th style="padding: 0 0 0 0 ;"><input type="button" value="مقبول"></th>
														<th style="padding: 0 0 0 0 ;" ><input type="button" value=" مرفوض"></th>
														<th style="padding: 0 0 0 0 ;"><input type="button" value="قيد الانتظار"></th>
														<th style="padding: 0 0 0 0 ;"><input type="button" value="تم الإصلاح "></th>
														<th style="padding: 0 0 0 0 ;"><input type="button" value="مغلق"></th>
														<th > <select name="branches">
															<option value="" style="display:none">الفرع</option>
														<option> </option>
														<option> </option>
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
<option value="" style="display:none">الفرع</option>
<option> </option>
<option> </option>
</select>
</th>
</tr>
</table>




												<table>
									<tr>
									<th>التفاصيل </th>
									<th>رقم الفاتورة </th>
									</tr>


										<td></td>
										<td></td>
									</tr>
													</table>
														</div>
												</section>

														</section>
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


														<td></td>
														<td></td>
													</tr>
																	</table>
																		</div>
																</section>

																	</section>
																				<section id="nine" class="wrapper style9 fade-up">
																					<div class="inner">
																						<h2>الإعدادات </h2>
																						<section style="text-align=right">

																								<table style="width:70% text-align:center ">
																	<tr>
																		<th><center><a href=".php"><h3>إعدادات الأدوار</h3><img src="images/pic16.png" width="100" height="100"></a></center></th>
																		<th><center><a href = "prices.php"><h3>تحديث خطة الاشتراك </h3><img src="images/pic15.png" width="100" height="100"></a></center></th>
																	</tr>
																</table>
															</section>
															</div>
																				</section>

					</section>
			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
