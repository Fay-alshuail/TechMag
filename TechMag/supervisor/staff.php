
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
             <img src="images/pic22.png" width="100" height="100">
           </center>
<h2>الموظفين</h2>

<form action="#" method="post">
            <table>
<tr>
	<th> <input type="submit" value="التعديل على الموظفين " onclick="location.href='staffedit.php';"></th>
	<th><input type="submit" value="بحث"></th>
<th>
	<select name="branches">
		<option value="جميع الفروع" name ="allbranches"> جميع الفروع</option>

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
</th>
</tr>
            </table></form>
						<?php
						include '../config.php';
						$branches=$_POST['branches'];
						mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

						?>
						<p>فرع : <?php echo $branches?></p>
<table>

<tr>
  <th> المسمى الوظيفي</th>
<th>اسم الموظف </th>
</tr>


<?php
switch ($branches) {
	case 'جميع الفروع':
		?>
		<tr>
			<?php
			$sql="SELECT `المسمى_الوظيفي` , `الاسم`
			FROM `الفني`
			";
			$result=mysql_query($sql);
			while($rows = mysql_fetch_assoc($result))
			{
				                    ?>
		<td> <?php echo $rows['المسمى_الوظيفي']; ?></td>
		<td> <?php echo $rows['الاسم']; ?></td>
		</tr>
		<?php
									 }
									 ?>


													<tr>
														<?php
														$sql="SELECT `المسمى_الوظيفي` , `الاسم`
														FROM `خدمة العملاء`
														";
														$result=mysql_query($sql);
														while($rows = mysql_fetch_assoc($result))
														{
															                    ?>
													<td> <?php echo $rows['المسمى_الوظيفي']; ?></td>
													<td> <?php echo $rows['الاسم']; ?></td>

													<?php
																				 }
																				 ?>

																								</tr>
																								<?php
		break;

	default:
	?>
<tr>
	<?php
	$sql="SELECT `المسمى_الوظيفي` , `الاسم`
	FROM `الفني`
	WHERE `الفرع` ='$branches'
	";
	$result=mysql_query($sql);
	while($rows = mysql_fetch_assoc($result))
	{
		                    ?>
<td> <?php echo $rows['المسمى_الوظيفي']; ?></td>
<td> <?php echo $rows['الاسم']; ?></td>
<?php
							 }
							 ?>

											</tr>
											<tr>
												<?php
												$sql="SELECT `المسمى_الوظيفي` , `الاسم`
												FROM `خدمة العملاء`
												WHERE `الفرع` ='$branches'
												";
												$result=mysql_query($sql);
												while($rows = mysql_fetch_assoc($result))
												{
													                    ?>
											<td> <?php echo $rows['المسمى_الوظيفي']; ?></td>
											<td> <?php echo $rows['الاسم']; ?></td>

											<?php
																		 }
																		 ?>

																						</tr>
																						<?php 		break;
																						}
?>
</table>
          </div>

<table>
<tr>

  <th><input type="button" value="رجوع" onclick="history.go(-1);"></th>
</tr>
</table>

        </section>
      </div>

    </body>

    <script src="assets/js/main.js"></script>
    </html>
