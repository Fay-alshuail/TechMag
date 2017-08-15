<?php
// php code for the results
include '../config.php';
if(isset($_POST['submit'])){
$selected_val = $_POST['branches'];

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
switch ($selected_val) {
	case 'جميع الفروع':
	$result = mysql_query("SELECT * FROM `الفاتورة`") or die(mysql_error());
	$result1=mysql_query("SELECT * FROM `طلب الصيانة` ") or die(mysql_error());
	$num = mysql_num_rows($result);
$num1 = mysql_num_rows($result1);
		break;

	default:
	$result = mysql_query("SELECT * FROM `الفاتورة` WHERE `وصف_الفرع` = '$selected_val' ") or die(mysql_error());
$result1=mysql_query("SELECT * FROM `طلب الصيانة` WHERE `وصف_الفرع` = '$selected_val' ") or die(mysql_error());
	$num = mysql_num_rows($result);
	$num1 = mysql_num_rows($result1);

		break;
}

}
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>إنتاجية الفروع</title>
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
        <section id="one" class="wrapper style2 spotlights" style="background-color:#bccbe2; color:#253f66;">


              <div class="inner">
                <center>
                 <img src="images/pic02.png" width="100" height="100">
               </center>
<h2>مراقبة الفروع</h2>
<br>
                <table id = "table2" class ="align-center">
									<form action="#" method="post">
									<select name="branches">
										<option value="جميع الفروع" >جميع الفروع </option>
									<?php // retrive the branches from db
									include '../config.php';
									//query
									mysql_query("SET NAMES 'utf8'");
									mysql_query('SET CHARACTER SET utf8');
									$sql=("SELECT * FROM `الفرع` ");
									$result=mysql_query($sql);
									while($row=mysql_fetch_array($result))
									{
									?>
									<!-- showing the options-->

									<option value="<?php echo $row["الوصف"];?>"><?php echo $row["الوصف"];?></option>
									<?php
									}
									?>

									 </select>
                <td>

                        <ul>
													<p> <input type="submit" name="submit" value="بحث"></p>
<p ><?php echo $selected_val ?></p>
                  <br>  <p> :عدد الفواتير <input type="text" name="invoiceno" id="invoiceno" value =<?php echo $num?>> </p>
                  <br>  <p> : عدد طلبات الصيانة<input type="text" name="requestno" id="requestno" value =<?php echo $num1?>> </p>

                  </ul>
</td>
</form>
                </table>
              </div>



        </section>
      </div>

    </body>
    </html>
