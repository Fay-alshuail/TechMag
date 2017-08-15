<?php
include '../config.php';


$city=filter_input(INPUT_POST,"city");
$details=filter_input(INPUT_POST,"details");
$map="riyadh";
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql="INSERT INTO `fixmin`.`الفرع` (`المدينة`, `الوصف`) VALUES ('$city', '$details')";
if (!mysql_query($sql)) {
  echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
}
echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>إضافة فرع </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>


		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
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
                 <img src="images/pic18.png" width="100" height="100">
               </center>
<h2>إضافة فرع جديد </h2>

<form action="#" method="post">
                <table id = "table2" class ="align-center">

                <td>

                    <ul>
                    <p> : المدينة <input type="text" name="city" id="city" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
                    <p> : الوصف <p style=" color:red;"> * الحي-الشارع </p> <input type="text" name="details" id="details" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>

                  </ul>


                    <input type="submit" value="حـفـظ"> <input type="button" value="إالغاء"   onclick="history.go(-1);" />
</td>

                </table>

							</form>
              </div>



        </section>
      </div>




    </body>
    </html>
