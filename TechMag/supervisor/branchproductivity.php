
<!DOCTYPE HTML>

<html>
	<head>
		<title>إنتاجية الفروع</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/supervisor.css" />
		<link rel="stylesheet" href="css.css" />
    <style>
      #map {
       height: 400px;
       width: 100%;
      }
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
        <section id="one" class="wrapper style2 spotlights" style="background-color:#bccbe2; color:#253f66;">


              <div class="inner">
                <center>
                 <img src="images/pic19.png" width="100" height="100">
               </center>
<h2>إنتاجية الفروع</h2>
<br>
                <table id = "table2" class ="align-center">
                  <select name="branches">
                    <option value="" style="display:none">الفرع</option>
                <td>

                        <ul>
                  <br>  <p> :عدد الفواتير <input type="text" name="invoiceno" id="invoiceno" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>
                  <br>  <p> : عدد طلبات الصيانة<input type="text" name="requestno" id="requestno" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>
                  <br<  <p> : عدد الموظفين <input type="text" name="staffno" id="staffno" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>

                  </ul>
</td>

                </table>
              </div>



        </section>
      </div>

    </body>
    </html>
