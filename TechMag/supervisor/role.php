
<!DOCTYPE HTML>

<html>
	<head>
		<title>الموظفين</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/supervisor.css" />
		<link rel="stylesheet" href="css.css" />

   </style>
  </head>
  <body class="align-right">

    <!-- Sidebar -->
      <section id="sidebar">
        <div class="inner">
          <nav>
            <ul>
              <li><a href="supervisorcp.php">الصفحة الرئيسية </a></li>
              <li><a href="supervisorcp.php#one">الحساب والإشتراك </a></li>
              <li><a href="supervisorcp.php#two">الفروع </a></li>
              <li><a href="supervisorcp.php#three">المخازن </a></li>
              <li><a href="supervisorcp.php#four">الموظفين </a></li>
              <li><a href="supervisorcp.php#five">العملاء </a></li>
              <li><a href="supervisorcp.php#six">لوحة مراقبة الطلبات </a></li>
              <li><a href="supervisorcp.php#seven">الفواتير </a></li>
              <li><a href="supervisorcp.php#eight">التقارير </a></li>
              <li><a href="supervisorcp.php#nine">الإعدادت </a></li>
            </ul>
          </nav>
        </div>
      </section>

    <!-- Wrapper -->
      <div id="wrapper" >
        <section id="one" class="wrapper style2 spotlights" style="background-color:#587699; color:#ffffff;">

          <div class="inner">
            <center>
						<img src="images/pic16.png" width="100" height="100"><h3>تحديد أدوار المستخدمين</h3>
           </center>

            <table>
<tr>
<th>
	:  المسمى الوظيف <select name="job">
	<option> فضلا اختر المسمى الوظيفي</option>
	<option value="supervisor" >المشرف</option>
	<option value="customer_service" >خدمة عملاء </option>
	<option  value="technican" > فني</option>
	</select>
 </th>
</tr>
            </table>
						<!-- case supervisor -->
<table>
<tr>
<th>بيانات الموظفين
	<form method="post" action="#">
	  <input type="checkbox" name="staff" value="add"> إضـافة<br>
	  <input type="checkbox" name="staff" value="edit"> تعديـل<br>
		<input type="checkbox" name="staff" value="view"> عـرض<br>
	  <input type="checkbox" name="staff" value="delete"> إلغـاء<br>
	</form>
</th>
<th> بيانات الاشتراك
	<form method="post" action="#">
	  <input type="checkbox" name="subs" value="add"> إضـافة<br>
	  <input type="checkbox" name="subs" value="edit"> تعديـل<br>
		<input type="checkbox" name="subs" value="view"> عـرض<br>
	  <input type="checkbox" name="subs" value="delete"> إلغـاء<br>
	</form>
</th>
</tr>

<tr>
	<th>بيانات الفروع والمخازن
		<form method="post" action="#">
		  <input type="checkbox" name="info" value="add"> إضـافة<br>
		  <input type="checkbox" name="info" value="edit"> تعديـل<br>
			<input type="checkbox" name="info" value="view"> عـرض<br>
		  <input type="checkbox" name="info" value="delete"> إلغـاء<br>
		</form>
	</th>
	<th>التقارير/الرسائل
		<form method="post" action="#">
		  <input type="checkbox" name="subs" value="add"> إضـافة<br>
		  <input type="checkbox" name="subs" value="edit"> تعديـل<br>
			<input type="checkbox" name="subs" value="view"> عـرض<br>
		  <input type="checkbox" name="subs" value="delete"> إلغـاء<br>
		</form>
	</th>
</tr>
<th>الطلبـات
	<form method="post" action="#">
	  <input type="checkbox" name="staff" value="add"> عـرض<br>
	</form>
</th>

</table>
						<!-- END supervisor -->

						<!-- case customer_service -->
						<table>
						<tr>
						<th>الطلبـات
							<form method="post" action="#">
							  <input type="checkbox" name="problem" value="add"> إضـافة<br>
								<input type="checkbox" name="problem" value="view"> عـرض<br>
								<input type="checkbox" name="problem" value="reply"> رد<br>
							  <input type="checkbox" name="problem" value="close"> إغلاق<br>
							</form>
						</th>
						<th> البيانات الخاصة
							<form method="post" action="#">
							  <input type="checkbox" name="personalinfo" value="edit"> تعديـل<br>
								<input type="checkbox" name="personalinfo" value="view"> عـرض<br>
							</form>
						</th>
						</tr>

						<tr>
							<th>بيانات العملاء
								<form method="post" action="#">
								  <input type="checkbox" name="customerinfo" value="add"> إضـافة<br>
									<input type="checkbox" name="customerinfo" value="view"> عـرض<br>
								</form>
							</th>
							<th>التقارير
								<form method="post" action="#">
								  <input type="checkbox" name="reports" value="add"> إضـافة<br>
								</form>
							</th>
						</tr>
						</table>
						<!-- END customer_service -->


						<!-- case technican -->
						<table>
						<tr>
						<th>الطلبـات
							<form method="post" action="#">
								<input type="checkbox" name="problemtech" value="view"> عـرض<br>
							  <input type="checkbox" name="problemtech" value="accept">قبول<br>
							  <input type="checkbox" name="problemtech" value="reject">رفض<br>
								<input type="checkbox" name="problemtech" value="reply"> رد<br>
							</form>
						</th>
						<th> البيانات الخاصة
							<form method="post" action="#">
							  <input type="checkbox" name="personalinfo" value="edit"> تعديـل<br>
								<input type="checkbox" name="personalinfo" value="view"> عـرض<br>
							</form>
						</th>
						</tr>
						</table>
						<!-- END technican -->

          </div>


<table>
<tr>
<th><center><input type="submit" value="حفظ" ></center></th>
</tr>
</table>

<div id="unvisible" hidden="hidden" >
  <table id = "table2" class ="align-center">

</table>
</div>
        </section>
      </div>

    </body>
    <script>
    function visible() {
        document.getElementById('unvisible').removeAttribute("hidden");
    }
    </script>

    <script src="assets/js/main.js"></script>
    </html>
		<?php
		/// include '../config.php';
		$job=$_POST['job'];

		?>
