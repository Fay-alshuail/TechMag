<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>خدمة العملاء</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-whidth", user-scalable=no, initial-scale=1.0>
        <meta http-equiv="X-UA-Comptible" content="ie=edge">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="cs.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">الصفحة الرئيسية </a></li>
							<li><a href="#zero"> العمـلاء </a></li>
							<li><a href="#one"> الطلبـات </a></li>
							<li><a href="#two"> لوحـة مراقبـة الطلبـات </a></li>
							<li><a href="#three"> الفـواتيـر </a></li>
							<li><a href="#four"> التقارير </a></li>
							<li><a href="#five"> الإعـدادات </a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner" >
							<h2>الوصول السريع</h2>
							<section>
								<table style="width:100% text-align:center ">
	<tr>
		<th><center><a href=" "><h3>إعدادات</h3><img src="setting.png" width="100" height="100"></a></center></th>
		<th><center><a href = " "><h3>لوحة الطلبات</h3><img src="control.png" width="100" height="100"></a></center></th>
		<th><center><a href="arrived.php"><h3>الطلبات المستلمة</h3><img src="arrived.png" width="100" height="100"></a></center></th>
		<th><center><a href="fix.php"><h3>طلب صيانة جديد</h3><img src="fix.png" width="100" height="100"></a></center></th>

	</tr>
</table>
</section>
</div>
					</section>
					<!-- zero -->
					<section id="zero" class="wrapper style5 fade-up">
						<div class="inner">
							<center>
							 <img src="customer.png" width="100" height="100">
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
				<!-- One -->
						<section id="one" class="wrapper style2 spotlights">
								<div class="inner">
									<h2>الموظفين</h2>
									<section>
										<table style="width:100% text-align:center ">
      <tr>
				<th><center><a href = "newprob.php"><h3>مشكلة جديدة</h3><img src="newprob.png" width="100" height="100"></a></center></th>
				<th><center><a href="arrived.php"><h3>الطلبات المستلمة</h3><img src="arrived.png" width="100" height="100"></a></center></th>
				<th><center><a href = " "><h3>طلب بيع جديد</h3><img src="new.png" width="100" height="100"></a></center></th>
				<th><center><h3>تتبع طلب صيانة</h3><img src="track.png" width="100" height="100" id="myBtn"></center></th>
        <th><center><a href="fix.php"><h3>طلب صيانة جديد</h3><img src="fix.png" width="100" height="100"></a></center></th>
      </tr>
    </table>
		<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
		<section class="wrapper style2 fade-up">
			<div class="inner">
    <span class="close">&times;</span>
				<h2>تتبع طلب الصيانة</h2>
				<section style="text-align=right">
					<table>
			<tr>
				<th ><center><input type="submit" value="بحث"> </center></th>
			<th><input type="text" name="search" placeholder=" ... ادخل رقم الطلب" style="text-align :right"></th>
			</tr>
		</table>
<form method="get" action="#" >
			<div class="field half first">
				<label for="date">التاريخ</label>
				<input type="text" name="date" id="date" />
			</div>
			<div class="field half">
				<label for="order">حالة الطلب</label>
				<input type="text" name="order" id="order" />
			</div>
			<div class="field half first">
				<label for="descrip">الوصف</label>
				<input type="text" name="descrip" id="descrip" />
			</div>
			<div class="field half">
				<label for="tech">اسم الفني</label>
				<input type="text" name="tech" id="tech" />
			</div>
			<div class="field half first">
				<label for="phone">رقم التواصل</label>
				<input type="text" name="phone" id="phone" />
			</div>
			<div class="field half">
				<label for="customer">اسم العميل</label>
				<input type="text" name="customer" id="customer" />
			</div>
		</form>
		</section>
  </div>
</section>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</section>

									<ul class="actions">
										<li><a href="#" class="button">Learn more</a></li>
									</ul>
									</div>
						</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<center>
							 <img src="control.png" width="100" height="100">
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

				<!-- Three -->
					<section id="three" class="wrapper style10 fade-up">
						<div class="inner">
							<div class="inner">
								<center>
								 <img src="bill.png" width="100" height="100">
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
<th><input type="text" name="uplaod" placeholder=" ... بحث" style="text-align :right"></th>
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


					</section>

					<section id="four" class="wrapper style4 fade-up">
						<div class="inner">
								<center>
								 <img src="pic17.png" width="100" height="100">
							 </center>
								<h2>التقارير</h2>


									<section style="text-align=right">

<table>
<tr>
<th ><center><input type="submit" value="رفع"> </center></th>
<th><input type="file" name="uplaod" placeholder=" ... ارفع التقرير" style="text-align :right"></th>
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

					</section>
					</div>
					</section>

								<section id="five" class="wrapper style5 fade-up">
									<div class="inner">
										<h2>الإعدادات </h2>
										<section style="text-align=right">

												<table style="width:70% text-align:center ">
					<tr>
						<th><center><a href=".php"><h3>تعديل البيانات الشخصية</h3><img src="setting.png" width="100" height="100"></a></center></th>
					</tr>
				</table>
			</section>
			</div>
								</section>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
