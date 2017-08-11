
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
<h2>إضافةموظف </h2>


            <table>
<tr>
<th>  :  الفرع <select name="branches">
   <option value="all"> جميع الفروع</option>
   <option ></option>
   </select></th>
</tr>
            </table>
<table>
<tr>
  <th> المسمى الوظيفي</th>
<th>اسم الموظف </th>
</tr>
</table>
          </div>

<table>
<tr>
  <!--<th><input type="submit" value="حفظ التغييرات" onclick="visible()"> </th>-->

<th><input type="submit" value="حفظ التغييرات" > </th>
  <th><input type="button" value="إلغاء"></th>
  <th><input type="button" value="تعطيل المستخدم"></th>
</tr>
</table>
<div id="unvisible" hidden="hidden" >
  <table id = "table2" class ="align-center">
  <td>
    <ul>
      <p> : رقم الجوال 1<input type="text" name="number1" id="number1" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
  <p> : رقم الجوال 2<input type="text" name="number2" id="number2" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
  <p> : عنوان السكن - المدينة <input type="text" name="city" id="city" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
  <p>:  المسمى الوظيفي <input type="text" name="bank" id="bank" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>

    </ul>

  </td>
  <td>

      <ul>
      <p> : الاسم<input type="text" name="name" id="name" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
      <p> : رقم الحساب البنكي <input type="text" name="bank" id="bank" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>
      <p> :  البريد الإلكتروني <input type="email" name="email" id="email" data-rule="required" data-msg="لو ماعبى التيكست"/>  </p>
      <p>:  الفرع   <input type="text" name="bank" id="bank" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>
    </ul>
  </td>
</table>
</div>
        </section>
      </div>

    </body>
    <script>
    function visible() {
        document.getElementById('unvisible').removeAttribute("hidden");
    }
    </script>

    <script src="assets/js/main.js"></script>
    </html>
