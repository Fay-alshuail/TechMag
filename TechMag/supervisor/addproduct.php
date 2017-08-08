
<!DOCTYPE HTML>

<html>
	<head>
		<title>مراقبة الفروع</title>
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
            <td>
              <ul>
              :  المخزن <select name="branches">
                  <option value="" style="display:none"></option></select>
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
                <p> :  الكمية<input type="email" name="count" id="count" data-rule="required" data-msg="لو ماعبى التيكست"/>  </p>
                <p> : التصنيف<input type="email" name="catagory" id="catagory" data-rule="required" data-msg="لو ماعبى التيكست"/>  </p>
<br><center><input type="button" value="إلغاء"> </center>
                </ul>
              </td>
            </table>
          </div>

        </section>
      </div>

    </body>

    <script src="assets/js/main.js"></script>
    </html>
