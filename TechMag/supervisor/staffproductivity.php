
<!DOCTYPE HTML>

<html>
	<head>
		<title>انتاجية الموظف </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/supervisor.css" />
		<link rel="stylesheet" href="css.css" />

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
             <img src="images/pic19.png" width="100" height="100">
           </center>
<h2>إنتاجية الموظف </h2>
<form action="#" method="post">
<table id = "table2" class ="align-center">

          <tr>
            <th ><center><input type="submit" value="بحث"> </center></th>
          <th> <input type="text" name="staff" placeholder=" ... بحث" style="text-align :right"></th>
<th> <p>  : ادخل اسم الموظف</p></th>
<th>
<select name="jobs">
	<option value="job_title"> المسمى الوظيفي</option>
	<option value="technican"> فني</option>
	<option value="customer_service"> خدمة عملاء</option>
</select>
</th>
</tr>
</table></form>

<p style="font-size:35px;"> الفواتير</p>
          <table>
            <tr style="text-align:center;">
<th> رقم الفاتورة</th>

            </tr>
<?php
	 $staff=filter_input(INPUT_POST,"staff");
 ?>
<p> اسم الموظف :<?php echo $staff ?></p>
<?php
include '../config.php';
$staff=filter_input(INPUT_POST,"staff");
$jobs=$_POST['jobs'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql="SELECT `رقم_الفاتورة` FROM `الفاتورة` WHERE `بريد_خ_ع`=(Select `البريد` FROM `خدمة العملاء` WHERE `الاسم` = '$staff')";
$result=mysql_query($sql);
while($rows = mysql_fetch_assoc($result)){
?>

<tr>
<td><?php echo $rows['رقم_الفاتورة']?></td>

						<?php
					}
						 ?>
					 </tr>
          </table>
					<p style="font-size:35px;"> طلبات الصيانة</p>
					          <table>
					            <tr style="text-align:center;">
					<th> رقم الطلب</th>

					            </tr>
					<?php
						 $staff=filter_input(INPUT_POST,"staff");
					 ?>
					<p> اسم الموظف :<?php echo $staff ?></p>
					<?php
					include '../config.php';
					$staff=filter_input(INPUT_POST,"staff");
					$jobs=$_POST['jobs'];
					mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
switch ($jobs) {
	case 'customer_service':
	$sql="SELECT `رقم_الطلب`FROM `الطلب` WHERE `بريد_خ_ع`=(Select `البريد` FROM `خدمة العملاء` WHERE `الاسم` = '$staff' )";
		break;
	case 'technican':
$sql="SELECT `رقم_الطلب`FROM `طلب الصيانة` WHERE `بريد_الفني`=(SELECT `البريد` FROM `الفني` WHERE `الاسم`= '$staff' )";

		break;
}
$result=mysql_query($sql);
					while($rows = mysql_fetch_assoc($result)){
					?>
					<tr>
					<td><?php echo $rows['رقم_الطلب']?></td>

											<?php
										}
											 ?>
										 </tr>
					          </table>
          </div>

        </section>
      </div>

    </body>

    <script src="assets/js/main.js"></script>
    </html>
