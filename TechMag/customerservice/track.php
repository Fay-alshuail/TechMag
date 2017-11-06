<html>
	<head>
		<title>تتبع الطلب</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-whidth", user-scalable=no, initial-scale=1.0>
        <meta http-equiv="X-UA-Comptible" content="ie=edge">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/style.css" />
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="cs.php#intro">الصفحة الرئيسية </a></li>
							<li><a href="cs.php#zero"> العمـلاء </a></li>
							<li><a href="cs.php#one"> الطلبـات </a></li>
							<li><a href="cs.php#two"> لوحـة مراقبـة الطلبـات </a></li>
							<li><a href="cs.php#three"> الفـواتيـر </a></li>
							<li><a href="cs.php#four"> التقارير </a></li>
							<li><a href="cs.php#five"> الإعـدادات </a></li>
						</ul>
					</nav>
				</div>
			</section>

			<!-- Wrapper -->
						<div id="wrapper">
							<!-- Form -->
							<section class="wrapper style2 fade-up">
								<div class="inner" style="height:100%">
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
												include '../config.php';
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
</html>
