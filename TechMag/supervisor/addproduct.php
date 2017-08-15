<?php

include '../config.php';
if(isset($_POST['submit'])){

$saleprice=filter_input(INPUT_POST,"saleprice");
$taxrate=filter_input(INPUT_POST,"taxrate");
$barcode=filter_input(INPUT_POST,"barcode");
$productname=filter_input(INPUT_POST,"productname");
$purprice=filter_input(INPUT_POST,"purprice");
$count=filter_input(INPUT_POST,"count");
$catagory=filter_input(INPUT_POST,"catagory");
$selected = $_POST['warehouse'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql="INSERT INTO `fixmin`.`المنتج` (`الباركود`, `اسم_المنتج`, `التصنيف`, `الكمية`, `سعر_الشراء`, `سعر_البيع`, `نسبة_المعدل`, `رقم_المخزن`)
VALUES ('$barcode', '$productname', '$catagory', '$count', '$purprice', '$saleprice', '$taxrate', '$selected')";
if (!mysql_query($sql)) {
echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
}else {
echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";

}
}

 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>إضافة منتج</title>
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
        <section id="one" class="wrapper style2 spotlights" style="background-color:#8bb5c4; color:#4a5859;">

          <div class="inner">
            <center>
             <img src="images/pic21.png" width="100" height="100">
           </center>
<h2>إضافة منتج </h2>
            <table id = "table2" class ="align-center">
							<form action="#" method="post">
            <td>
              <ul>
              :  المخزن <select name="warehouse">

								<?php
								include '../config.php';
								//query
								mysql_query("SET NAMES 'utf8'");
								mysql_query('SET CHARACTER SET utf8');
								$sql=("SELECT `رقم_المخزن`FROM `المخزن`");
								$result=mysql_query($sql);
								while($row=mysql_fetch_array($result))
								{
								?>
								<option><?php echo $row["رقم_المخزن"];?></option>
								<?php
								}
								?>

																	 </select>
            <p> : سعر البيع<input type="text" name="saleprice" id="saleprice" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
            <p> : (معدل الضريبة (*بالنسبة المئوية<input type="text" name="taxrate" id="taxrate" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
            <p> : (ISSN)الباركود<input type="text" name="barcode" id="barcode" data-rule="required" data-msg="لو ماعبى التيكست"/>  </p>
<br><center><input type="submit" value="حفظ"> </center>
              </ul>

            </td>
            <td>

                <ul>
                <p> : اسم المنتج<input type="text" name="productname" id="productname" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
                <p> : سعر الشراء<input type="text" name="purprice" id="purprice" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>
                <p> :  الكمية<input type="text" name="count" id="count" data-rule="required" data-msg="لو ماعبى التيكست"/>  </p>
                <p> : التصنيف<input type="text" name="catagory" id="catagory" data-rule="required" data-msg="لو ماعبى التيكست"/>  </p>
<br><center><input type="button" value="إلغاء" onclick="history.go(-1);" /> </center>
                </ul>
              </td>
						</form>
            </table>
          </div>

        </section>
      </div>

    </body>

    <script src="assets/js/main.js"></script>
    </html>
		<?php

		include '../config.php';


		$saleprice=filter_input(INPUT_POST,"saleprice");
		$taxrate=filter_input(INPUT_POST,"taxrate");
		$barcode=filter_input(INPUT_POST,"barcode");
		$productname=filter_input(INPUT_POST,"productname");
		$purprice=filter_input(INPUT_POST,"purprice");
		$count=filter_input(INPUT_POST,"count");
		$catagory=filter_input(INPUT_POST,"catagory");
$selected = $_POST['warehouse'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql="INSERT INTO `fixmin`.`المنتج` (`الباركود`, `اسم_المنتج`, `التصنيف`, `الكمية`, `سعر_الشراء`, `سعر_البيع`, `نسبة_المعدل`, `رقم_المخزن`)
VALUES ('$barcode', '$productname', '$catagory', '$count', '$purprice', '$saleprice', '$taxrate', '$selected');";
if (!mysql_query($sql)) {
  echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
}
else
{
echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";
}
		 ?>
