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
													<h2>تكليف الفنـي</h2>
													<section style="text-align=right">

														<form method="post" action="#">
														<table>
															<th ><select name="technican">

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

								</div>
							</section>
					 </div>
</html>
