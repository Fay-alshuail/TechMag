<html>
	<head>
		<title>الطلبات المرسلة</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

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

				        <label>الطلبات المستلمة</label>
				        <?php
				        include '../config.php';

				        mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

				        ?>

				        <table  style="border: 1px solid black;">
				                <tr >
				                  <th style="border: 1px solid #c2d9ed;">الحالة </th>
				                <th style="border: 1px solid #c2d9ed;">تاريخ الاستلام </th>
				                <th style="border: 1px solid #c2d9ed;"> رقم الطلب </th>
				                <th style="border: 1px solid #c2d9ed;">الفني المسؤول </th>


				                </tr>

				                <?php
				                  $sql=("SELECT *
				                    FROM `طلب الصيانة` WHERE `حالة_الطلب`='تم الإصلاح' ");
				                  $result=mysql_query($sql);
				                  while($rows = mysql_fetch_assoc($result))
				                  {
				                                        ?><tr>
				                                          <td style="border: 1px solid #073660;"><?php echo $rows['حالة_الطلب']; ?> </td>
				                                        <td style="border: 1px solid #073660;"> <?php echo $rows['تاريخ_الاستلام']; ?></td>
				                                        <td style="border: 1px solid #073660;"> <?php echo $rows['رقم_الطلب']; ?></td>
				                                        <?php $ON1=$rows['رقم_الطلب'];
				                                        $sql2= "SELECT `الاسم` FROM `الفني` WHERE `البريد`=(SELECT `بريد_الفني` FROM `طلب مرسل` WHERE `رقم_الطلب`='$ON1')";
				                                        $result2=mysql_query($sql2);
				                                        while($rows2 = mysql_fetch_assoc($result2))
				                                        { ?>
				                                          <td style="border: 1px solid #073660;"><?php echo $rows2['الاسم']?> </td>


				                </tr>
				              <?php }}?>
				              </table>
				<h2>فضلاً قم باختيار رقم الطلب المراد إغلاقه</h2>
				              <form method="post" action="">
				                <table>
													<th><input type="submit" value="إغلاق الطلب "></th>

				<th><select id="req" name="req">
				  <?php
				    $sql2=("SELECT *
				      FROM `طلب الصيانة` WHERE `حالة_الطلب`='تم الإصلاح' ");
				    $result2=mysql_query($sql2);
				    while($rows2 = mysql_fetch_assoc($result2))
				    {
				                          ?>
				  <option><?php echo $rows2['رقم_الطلب']; ?></option>
				  <?php }?>
				</select>
				</th>

				                </table>


				</form>


				  </div>
				</section>
				</div>
				<?php

				include '../config.php';
				$req=$_POST['req'];
				mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
				$sql="UPDATE `fixmin`.`طلب الصيانة` SET
				`حالة_الطلب`='مغلق'
				WHERE `طلب الصيانة`.`رقم_الطلب` = '$req' ";
				$result=mysql_query($sql) or die($sql);
				$rows = mysql_fetch_assoc($result);
				if (mysql_query($sql)) {
				echo "<script type='text/javascript'>alert('تم إغلاق الطلب بشكل صحيح');</script>";

				}else{
				    echo "<script type='text/javascript'>alert(لم يتم إغلاق الطلب بشكل صحيح');</script>";
				}
				?>
