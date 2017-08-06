<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Hyperspace by HTML5 UP</title>
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


						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">


								<div class="inner">
									<center>
									 <img src="images/pic11.png" width="100" height="100">
								 </center>
<h1>الإشتراك </h1>
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
									    <p> : الاسم <input type="text" name="phone" id="nom" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
									    <p> : المسمى الوظيفي <input type="text" name="phone2" id="prenom" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>
									    <p> : البريد الالكتروني <input type="text" name="address" id="fonction" data-rule="required" data-msg="لو ماعبى التيكست"/>  </p>

									    </ul>
									  </td>
									</table>
<p>بيانات الحساب البنكي </p>
<table id = "table2" class ="align-center">
<td>
	<ul>
<p> : تاريخ الانتهاء <input type="date"></p>
	<p> : رقم الأمان  <input type="text" name="phone2" id="prenom" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p> <br>
<p> <input type="submit" value="حـفـظ"></p>
</ul>

</td>
<td>

		<ul>

			<p> :رقم البطاقة  <input type="text" name="phone" id="nom" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
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
										 <img src="images/pic12.png" width="100" height="100">
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
									 <option> </option>
									 <option> </option>
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
														<table  style="border: 1px solid red;">
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
																<h2>What we do</h2>
																<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
																<div class="features">
																	<section>
																		<span class="icon major fa-code"></span>
																		<h3>Lorem ipsum amet</h3>
																		<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
																	</section>
																</div>
															</div>
														</section>
																	<section id="eight" class="wrapper style8 fade-up">
																		<div class="inner">
																			<h2>What we do</h2>
																			<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
																			<div class="features">
																				<section>
																					<span class="icon major fa-code"></span>
																					<h3>Lorem ipsum amet</h3>
																					<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
																				</section>
																			</div>
																		</div>
																	</section>
																				<section id="nine" class="wrapper style9 fade-up">
																					<div class="inner">
																						<h2>What we do</h2>
																						<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
																						<div class="features">
																							<section>
																								<span class="icon major fa-code"></span>
																								<h3>Lorem ipsum amet</h3>
																								<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
																							</section>
																						</div>
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
