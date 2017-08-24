<html>
	<head>
		<title>البيانات الشخصية</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
.
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

</body>

<!-- Wrapper -->
			<div id="wrapper">
				<!-- Form -->
				<section class="wrapper style2 fade-up">
					<div class="inner" style="height:110%">
<center><img src="img/setting.png" width="100" height="100">
<h3>تعديل البيانات الشخصية</h3>
</center>


<form method="post" action="#">
	<div>
	<div class="field half first">
		<label for="name">الاسـم</label>
		<input type="text" name="name" id="name" value="<?php echo $rows["الاسم"];?>" />
	</div>
		<div class="field half">
		<label for="name">رقم الجوال</label>
		<input type="text" name="phone" id="phone" value="<?php echo $rows["الجوال1"];?>" />
	</div>
</div>
</form>

<form method="post" action="#">
	<div class="field half first">
		<label for="branch">الفر ع</label>
		<input type="text" name="branch" id="branch" readOnly="true" value="<?php echo $rows["الفرع"];?>" />
	</div>
		<div class="field half">
		<label for="job">المسمى الوظيفي</label>
		<input type="text" name="job" id="job"readOnly="true" value="<?php echo $rows["المسمى_الوظيفي"];?>" />
	</div>
	<div class="field half first">
		<label for="bank">رقم حساب البنك</label>
		<input type="text" name="bank" id="bank" readOnly="true" value="<?php echo $rows["رقم_الحساب_البنكي"];?>"/>
	</div>
		<div class="field half">
		<label for="phone2">رقم الجوال 2</label>
		<input type="text" name="phone2" id="phone2" value="<?php echo $rows["الجوال2"];?>" />
	</div>
	<div class="field half first">
		<label for="email">البريد الإلكتروني</label>
		<input type="text" name="email" id="email" readOnly="true" value="<?php echo $rows["البريد"];?>" />
	</div>
		<div class="field half">
		<label for="address">عنوان السكن</label>
		<input type="text" name="address" id="address"  value="<?php echo $rows["عنوان_السكن"];?>"/>
	</div>
</form>

<div>
	<table>
	<tr>
	<center>
	  <th ><input type="submit" value="حفظ التغييرات" > </th>
	    <th><input type="button" value="تـعـديـل " onclick=showhide()></th>
	  <th> <input type="button" value="رجوع" onclick="history.go(-1);" style="margin-right:150px;" ></th>
	</center>
	</tr>
	</table>

</div>

</div>
</section>

</div>
</html>
