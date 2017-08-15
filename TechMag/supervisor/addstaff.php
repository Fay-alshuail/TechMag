
<!DOCTYPE HTML>

<html>
	<head>
		<title>إضافة موظف</title>
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
<h2>إضافةموظف </h2>
<form method="post" action="#">

            <table id = "table2" class ="align-center">
            <td>
              <ul>
                <p> : رقم الجوال 1<input type="text" name="number1" id="number1" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
            <p> : رقم الجوال 2<input type="text" name="number2" id="number2" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
            <p> : عنوان السكن - المدينة <input type="text" name="city" id="city" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>

          :  المسمى الوظيفي     <select name="job">
          <option value="customer_service" >خدمة عملاء </option>
          <option  value="technican" > فني</option>
          </select>
<br><center><input type="submit" value="حفظ"> </center>
              </ul>

            </td>
            <td>

                <ul>
                <p> : الاسم<input type="text" name="name" id="name" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
								  <p> : الرقم السري <input type="text" name="password1" id="fonction" data-rule="required" value ="<?php echo randomPassword(); ?>"  data-msg="لو ماعبى التيكست"/></p>
                <p> : رقم الحساب البنكي <input type="text" name="bank" id="bank" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>
                <p> :  البريد الإلكتروني <input type="email" name="email" id="email" data-rule="required" data-msg="لو ماعبى التيكست"/>  </p>
              :  الفرع  <select name="branches">
							  <option value="allbranches" name ="allbranches"> جميع الفروع</option>
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
<br><center><input type="button" value="إلغاء"> </center>
                </ul>
              </td>
            </table>
					</form>
          </div>

        </section>
      </div>

    </body>

    <script src="assets/js/main.js"></script>
    </html>
		<?php
		function randomPassword() {
		    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		    $pass = array(); //remember to declare $pass as an array
		    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		    for ($i = 0; $i < 8; $i++) {
		        $n = rand(0, $alphaLength);
		        $pass[] = $alphabet[$n];
		    }
		    return implode($pass); //turn the array into a string
		}

		 ?>

		<?php
		include '../config.php';


		$name=filter_input(INPUT_POST,"name");
		$number1=filter_input(INPUT_POST,"number1");
		$number2=filter_input(INPUT_POST,"number2");
		$city=filter_input(INPUT_POST,"city");
		$bank=filter_input(INPUT_POST,"bank");
		$email=filter_input(INPUT_POST,"email");
		$password=filter_input(INPUT_POST,"password1");
		$job=$_POST['job'];
		$branch=$_POST['branches'];
		mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
		switch ($job) {
		case 'technican':
		$sql="INSERT INTO `fixmin`.`الفني` (`الاسم`, `الجوال1`, `الجوال2`, `البريد`, `رقم_الحساب_البنكي`, `المسمى_الوظيفي`, `عنوان_السكن`, `الفرع`, `الرقم_السري`)
		VALUES ('$name', '$number1','$number2', '$email', '$bank', '$jobs', '$city', '$branch', '$password')";
		break;

		case 'customer_service':
		$sql="INSERT INTO `fixmin`.`خدمة العملاء` (`الاسم`, `الجوال1`, `الجوال2`, `البريد`, `رقم_الحساب_البنكي`, `المسمى_الوظيفي`, `عنوان_السكن`, `الفرع`, `الرقم_السري`)
				VALUES ('$name', '$number1', '$number2', '$email', '$bank', '$jobs', '$city', '$branch', '$password')";
	break;
}
		if (!mysql_query($sql)) {
		  echo "<script type='text/javascript'>alert('لم يتم ادخال البيانات بشكل صحيح');</script>";
		} else {
		echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";
}
		?>
