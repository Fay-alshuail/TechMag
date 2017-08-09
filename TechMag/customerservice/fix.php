<html>
	<head>
		<title>طلب صيانة</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="cs.css" />

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
								<select name="brand" >
									<option value="" style="display:none">اختر نوع الجهاز</option>
									<option value="saab">Saab</option>
									<option value="mercedes">Mercedes</option>
									<option value="audi">Audi</option>
								</select>
							</div>
							<div class="field half">
						<select name="brand2">
							<option value="" style="display:none">اختر شركة الجهاز</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
						</div>
						<div class="field half first">
						<select name="brand2">
							<option value="" style="display:none">اختر موديل الجهاز</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</div>
					<div class="field half">
						<select name="brand2" class="field-style field-split align-left">
							<option value="" style="display:none">اختر لون الجهاز</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</div>

							<label>المشكلة</label>
							<div class="field half first">
							<select name="brand2">
								<option value="" style="display:none">اختر نوع المشكلة</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</div>
						<div class="field half">
							<select name="brand2">
								<option value="" style="display:none" >نوع قطعة الغيار</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
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
									<label for="name">سعر القطعة</label>
									<input type="text" name="price" id="price" />
								</div>
								<div class="field half">
									<label for="name">شغـل اليـد</label>
									<input type="text" name="handwork" id="handwork" />
								</div>
								<div class="field half first">
									<label for="name">الخصـم</label>
									<input type="text" name="sale" id="sale" />
								</div>
								<div class="field half">
									<label for="name">المجموع</label>
									<input type="text" name="total" id="total" />
								</div>

					<div>
						<center>
					<ul class="actions" margin-top="4em">
						<li><a href="#" class="button">إرسـال</a></li>
					</ul>
				</center>
					</div>
					</div>
				</section>
			</div>
