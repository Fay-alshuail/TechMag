<?php
session_start();
include '../config.php';
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sessionU=$_SESSION['username_s'];?>
<html>
	<head>
		<title>طلب صيانة</title>
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
					<div class="inner">
							<form method="post" action="#" style="border: 1px solid #c2d9ed; padding: 10px;">
						<label>معلومات الاتصال</label>
								<div class="field half first">
									<label for="name">الاسـم</label>
									<input type="text" name="name" id="name" />
								</div>
									<div class="field half">
									<label for="name">رقم الجوال</label>
									<input type="text" name="phone" id="phone" />
								</div>
								<label>معلومات الجهاز</label>
								<div class="field half first">
						<input type="text" name="devicetype" value="اكتب نوع الجهاز">
							</div>
							<div class="field half">
						<input type="text" name="brandname" value ="اكتب شركة الجهاز">
						</div>
						<div class="field half first">
						</div>
					<div class="field half">
					<input type="text" name="devicecolor" value="اكتب لون الجهاز">
					</div>

							<label>المشكلة</label>
							<div class="field half first">
								<select name="prplm">
									<option value="" style="display:none">اختر نوع المشكلة</option>
									<option value="saab">Hardware</option>
									<option value="mercedes">Software</option>
									<option value="audi">Check</option>
								</select>

						</div>
						<div class="field half ">
							<select name ="fix"  id="fix2">
								<option>نوع قطعة الغيار</option>
							<?php
							include '../config.php';
							//query
							mysql_query("SET NAMES 'utf8'");
							mysql_query('SET CHARACTER SET utf8');
							$sql=("SELECT * FROM `قطع الغيار` ");
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result))
							{
							?>
							<option><?php echo $row["اسم_القطعة"];?></option>
							<?php
							}
							?>
</select>


						</div>
						<div class="field half first">
							<label for="name">تفاصيل المشكلة</label>
							<input type="text" name="problem" id="problem" />
						</div>
						<div class="field half">
							<label for="name">تاريخ الاستحقاق</label>
							<input type="date" name="date" id="date" />
						</div>

							<lebel>السعـر</label>
								<div class="field half first">
									<label for="name">شغل اليد</label>
									<input type="text" name="handwork" id="handwork" />
								</div>
								<div class="field half">

									<label for="name">سعر القطعة</label>
									<input type="text" name="price" id="price" value="" >
							
								</div>
								<div class="field half first">
									<label for="name">المجموع</label>
									<input type="text" name="total" id="total" />
								</div>
								<div class="field half ">
									<label for="name">الخصم</label>
									<input type="text" name="sale" id="sale" />
								</div>

					<div>
						<center>
					<input type="submit" class="button" value="إرسال ">
				</center>
					</div>
				</form>
					</div>
				</section>
			</div>
			</html>
			<?php
			include '../config.php';
			include '../logincheck.php';

			$prplm=$_POST['brand2'];
			$fix=$_POST['fix'];
			$name=filter_input(INPUT_POST,"name");
			$phone=filter_input(INPUT_POST,"phone");
			$devicetype=filter_input(INPUT_POST,"devicetype");
			$brandname=filter_input(INPUT_POST,"brandname");
			$devicecolor=filter_input(INPUT_POST,"devicecolor");
			$problem=filter_input(INPUT_POST,"problem");
			$date=filter_input(INPUT_POST,"date");
			$handwork=filter_input(INPUT_POST,"handwork");
			$price=filter_input(INPUT_POST,"price");
			$total=filter_input(INPUT_POST,"total");
			$sale=filter_input(INPUT_POST,"sale");
			mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

			$ssql="SELECT `الفرع` FROM `خدمة العملاء`WHERE`البريد` ='$sessionU'";
			$result=mysql_query($ssql);
			$rows = mysql_fetch_assoc($result);
			$s= $rows['الفرع'];

			$sql="INSERT INTO `fixmin`.`طلب الصيانة` ( `شركة_الجهاز`, `نوع_الجهاز`, `لون_الجهاز`, `نوع_المشكلة`, `التفصيل`, `حالة_الطلب`, `تاريخ_الاستلام`, `وصف_الفرع`, `شغل اليد`, `الخصم`, `المجموع`,`بريد_خ_ع`)
			VALUES ( '$brandname', '$devicetype', '$devicecolor', '$prplm', '$problem', 'قيد الإنتظار', '$date', '$s', '$handwork', '$sale', '$total','$sessionU')";
if (!mysql_query($sql)) {
		}else{
			echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";
	}
	$sql2="INSERT INTO `fixmin`.`العميل` (`اسم_العميل`, `الجوال`) VALUES ('$name', '$phone')";

				if(!mysql_query($sql2)){
				echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
			}else{
			echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";
}
			?>
