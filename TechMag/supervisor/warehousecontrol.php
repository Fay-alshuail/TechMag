
<!DOCTYPE HTML>

<html>
	<head>
		<title>مراقبة المخازن</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
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
        <section id="one" class="wrapper style2 spotlights" style="background-color:#8bb5c4; color:#4a5859;">


              <div class="inner">
                <center>
                 <img src="images/pic05.png" width="100" height="100">
               </center>
<h2>مراقبة المخازن </h2>
<br>
<form action="#" method="post">
                <table id = "table2" class ="align-center">

                          <tr>
                            <th ><center><input type="submit" value="بحث"> </center></th>
                          <th> <input type="text" name="warehouseno" placeholder=" ... بحث" style="text-align :right"></th>
<th> <p>  : ادخل رقم المخزن</p></th>
</tr>
</table>
<?php
include '../config.php';
$warehouseno=$_POST['warehouseno'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql="SELECT * FROM `المخزن`  WHERE `رقم_المخزن`= $warehouseno";
$result=mysql_query($sql);
?>
<table>
<tr>
    <th>الكميات المتوفرة</th>
		<th>الفرع</th>
  <th>رقم المخزن</th>
</tr>
<?php
while($rows = mysql_fetch_assoc($result))
{
	                    ?>
<p> مخزن رقم :<?php echo $warehouseno ?></p>
<tr>
<td><?php echo $rows['الكميات_المتوفرة']; ?></td>
<td><?php echo $rows['الفرع']; ?></td>
<td><?php echo $rows['رقم_المخزن']; ?></td>

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
