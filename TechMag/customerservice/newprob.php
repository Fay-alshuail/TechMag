<html>
	<head>
		<title>المشاكل الإضافية</title>
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
					<div class="inner" style="height:240%">

								<label>المشاكل الإضافية</label>

								<table  style="border: 1px solid black;">
												<tr >
												<th style="border: 1px solid #c2d9ed;">ملاحظات الفني</th>
												<th style="border: 1px solid #c2d9ed;"> رقم الطلب </th>
												</tr>

												<td style="border: 1px solid #073660;"></td>
												<td style="border: 1px solid #073660;"></td>
												</tr>
													</table>

													<form method="post" action="#" style="border: 1px solid #c2d9ed; padding: 10px;" >
												<label>مشكلة جديدة</label>
														<div class="field half first">
															<label for="name">المحتوى</label>
															<textarea cols="40" rows="3" type="text" name="cont" id="cont" />
														</textarea>
														</div>
															<div class="field half ">
															<label for="name">العنوان</label>
															<input type="text" name="title" id="title" />
														</div>
														<div>
															<center>
														<ul class="actions" margin-top="4em">
															<li><button type="button" class="button" onclick="myFunction()">رد</button></li>
														</ul>
													</center>
														</div>
													</form>
													<form method="post" action="#" style="visibility:hidden" id="reply" style="border: 1px solid #c2d9ed; padding: 10px;">
													<label>الرد على المشكلة</label>
														<div class="field half first">
															<label for="name">المحتوى</label>
															<textarea cols="40" rows="3" type="text" name="cont" id="cont" style="text-align:right;" /></textarea>
														</div>
															<div class="field half ">
															<label for="name">العنوان</label>
															<input type="text" name="title" id="title" />
														</div>
														<div>
															<center>
														<ul class="actions" margin-top="4em">
															<li><a href="#" class="button" >رد</a></li>
														</ul>
													</center>
														</div>
													</form>
													<ul class="actions" margin-top="4em">
														<li><button type="button" class="button" onclick="newprob()">إضافة مشكلة جديدة</button></li>
													</ul>

													<form method="post" action="#" style="visibility:hidden" id="new" style="border: 1px solid #c2d9ed; padding: 10px;">
													<label>تعديل على المشكلة</label>
														<div class="field half first">
															<label for="newprob">المشكلة الإضافية</label>
															<input type="text" name="newprob" id="newprob"/>
														</div>
															<div class="field half ">
															<label for="price">السعر</label>
															<input type="text" name="price" id="price" />
														</div>
														<div>
															<center>
														<ul class="actions" margin-top="4em">
															<li><a href="#" class="button" >إرسال</a></li>
														</ul>
													</center>
														</div>
													</form>


					</div>
				</section>
			</div>
			<script>
			function myFunction() {
			    document.getElementById("reply").style.visibility= "visible";
			}
			function newprob() {
			    document.getElementById("new").style.visibility= "visible";
			}
			</script>
</html>
