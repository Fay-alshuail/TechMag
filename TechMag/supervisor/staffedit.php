
<!DOCTYPE HTML>

<html>
	<head>
		<title>الموظفين</title>
	<link rel="stylesheet" href="assets/css/supervisor.css" />
		<link rel="stylesheet" href="css.css" />
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-whidth", user-scalable=no, initial-scale=1.0>
    <meta http-equiv="X-UA-Comptible" content="ie=edge">

   </style>
   <script type="text/javascript">
   function showhide(){
   document.getElementById('unjob').style.display="block";
   document.getElementById('shjob').style.display="none";
   document.getElementById('shbranch').style.display="none";
   document.getElementById('unbranch').style.display="block";
   document.getElementById('number1').removeAttribute("readOnly");

   }

   </script>
   }
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
<h2>ابحث باسم الموظف</h2>

<form action="#" method="post">
<table id = "table2" class ="align-center">

          <tr>
            <th ><center><input type="submit" value="بحث"> </center></th>
          <th> <input type="text" name="staff" placeholder=" ... بحث" style="text-align :right"></th>
<th> <p>: ادخل اسم الموظف</p></th>
<th>
<select name="jobs">
	<option value="job_title"> المسمى الوظيفي</option>
	<option value="technican"> فني</option>
	<option value="customer_service"> خدمة عملاء</option>
</select>
</th>
</tr>
</table></form>
<?php
include '../config.php';
$staff=filter_input(INPUT_POST,"staff");
$jobs=$_POST['jobs'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
switch ($jobs) {
case 'customer_service':
$result=mysql_query("SELECT * FROM `خدمة العملاء`WHERE `الاسم` = '$staff'")or die(mysql_error());
break;
case 'technican':
$result=mysql_query("SELECT * FROM `الفني` WHERE `الاسم`= '$staff' ")or die(mysql_error());

break;
}
while($rows=mysql_fetch_array($result))
{
?>

              <table id = "table2" class ="align-center">
              <td>
                <ul>
                  <p> : رقم الجوال 1<input type="text" name="number1" readOnly="true" id="number1"value="<?php echo $rows["الجوال1"];?>" /> </p>
              <p> : رقم الجوال 2<input type="text" name="number2" readOnly="true" id="number2" value="<?php echo $rows["الجوال2"];?>"/> </p>
              <p> : عنوان السكن - المدينة <input type="text"readOnly="true" name="city" id="city" value="<?php echo $rows["عنوان_السكن"];?>"/> </p>
              <p style="display:block;"id="shjob">:  المسمى الوظيفي <input type="text" name="job" readOnly="true" id="job" value="<?php echo $rows["المسمى_الوظيفي"];?>"/> </p>
<p style="display:none;"id="unjob"> :  المسمى الوظيفي
<select name="jobs">
	<option value="job_title"> المسمى الوظيفي</option>
	<option value="technican"> فني</option>
	<option value="customer_service"> خدمة عملاء</option>
</select> </p>
                </ul>

              </td>
              <td>

                  <ul>
                  <p> : الاسم<input type="text" name="name"readOnly="true" id="name" value="<?php echo $rows["الاسم"];?>"/> </p>
                  <p> : رقم الحساب البنكي <input type="text"readOnly="true" name="bank" id="bank" value="<?php echo $rows["رقم_الحساب_البنكي"];?>"/> </p>
                  <p> :  البريد الإلكتروني <input type="email" readOnly="true"name="email" id="email" value="<?php echo $rows["البريد"];?>"/>  </p>
                  <p style="display:block;"id="shbranch"> : الفرع <input type="text" name="branch" readOnly="true"  value="<?php echo $rows["الفرع"];?>"/> </p>
<p style="display:none;"id="unbranch">: الفرع  <select name="branches">
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
</p>

                </ul>
              </td>
            </table>



            <?php
            }
             ?>

          </div>

<table>
<tr>

  <th ><input type="submit" value="حفظ التغييرات" > </th>
    <th><input type="button" value="تـعـديـل " onclick=showhide()></th>
  <th> <input type="button" value="رجوع" onclick="history.go(-1);" style="margin-right:150px;" ></th>


</tr>
</table>

        </section>
      </div>

    </body>

    <script src="assets/js/main.js"></script>
    </html>
