

<!DOCTYPE HTML>

<html>
	<head>
		<title>إضافة قطعة غيار جديدة</title>
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
<h2>إضافة قطعة غيار جديدة</h2>
<br>
<p>: اختر رقم المخزن</p>
<form action="#" method="post">                <table id = "table2" class ="align-center">
									<select name="stockno">

<?php
include '../config.php';
//query
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$sql=("SELECT `رقم_المخزن` FROM `المخزن` ");
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>
<option><?php echo $row["رقم_المخزن"];?></option>
<?php
}
?>

									 </select>
									 <td>

                        <ul>
                <br> <p> : اسم القطعة<input type="text" name="exname" id="exname" > </p>
                <br> <p> : السعر<input type="text" name="exprice" id="exprice" > </p>

<br><input type="submit" value="حفظ "> </form>
                  </ul>
</td>

                </table>
                <table>
<tr>
<th><center> سعر القطعة</center></th>
<th><center>اسم القطعة</center></th>
<th><center>رقم المخزن </center></th>
</tr>
<tr>
  <?php
  $sql="SELECT *
FROM `قطع الغيار`
 ";

	$result=mysql_query($sql);
	while($rows = mysql_fetch_assoc($result))
	{
												?>
<td><center><?php echo $rows['سعر_القطعة']; ?></center></td>
<td><center><?php echo $rows['اسم_القطعة']; ?></center></td>
<td><center><?php echo $rows['رقم_المخزن']; ?></center></td>
</tr>
<?php
               }

               ?>

                </table>
              </div>



        </section>
      </div>

    </body>
    </html>
    <?php
    include '../config.php';


$exprice=filter_input(INPUT_POST,"exprice");
$exname=filter_input(INPUT_POST,"exname");

    $stockno=$_POST['stockno'];
    mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
    $sql=" INSERT INTO `fixmin`.`قطع الغيار` (
`اسم_القطعة` ,
`سعر_القطعة` ,
`رقم_المخزن`
)
VALUES (
'$exname','$exprice','$stockno'
)";


    if (!mysql_query($sql)) {
      echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
    }else{
    echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";
    }
    ?>
