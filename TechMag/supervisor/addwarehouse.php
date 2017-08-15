<?php
include '../config.php';


$count=filter_input(INPUT_POST,"count");
$branch=$_POST['branch'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql="INSERT INTO `fixmin`.`المخزن` (`رقم_المخزن`, `الكميات_المتوفرة`, `الفرع`) VALUES (null,'$count', '$branch')";
if (!mysql_query($sql)) {
  echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
}else{
echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";
}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>إضافة مخزن</title>
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
                 <img src="images/pic06.png" width="100" height="100">
               </center>
<h2>إضافة مخزن جديد</h2>
<br>
<form action="#" method="post">                <table id = "table2" class ="align-center">
									<select name="branch">

<?php
include '../config.php';
//query
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sql=("SELECT `الوصف` FROM `الفرع` ");
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>
<option><?php echo $row["الوصف"];?></option>
<?php
}
?>

									 </select>
									 <td>
<p> : بيانات المخزون </p>
                        <ul>
                <br> <p> : الكمية<input type="text" name="count" id="count" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>

<br><input type="submit" value="حفظ "> </form>
                  </ul>
</td>

                </table>
                <table>
<tr>
<th>رقم المخزن </th>
<th>الفرع </th>
<th>الكميات المتوفرة </th>
</tr>
<tr>
<td></td>
<td></td>
</tr>
                </table>
              </div>



        </section>
      </div>

    </body>
    </html>
