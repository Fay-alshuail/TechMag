
<!DOCTYPE HTML>

<html>
	<head>
		<title>إضافة فرع </title>
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
                 <img src="images/pic18.png" width="100" height="100">
               </center>
<h2>إضافة فرع جديد </h2>
                <table id = "table2" class ="align-center">

                <td>

                    <ul>
                    <p> : المدينة <input type="text" name="city" id="city" data-rule="required" data-msg="لو ماعبى التيكست"/> </p>
                    <p> : الوصف <p style=" color:red;"> * الحي-الشارع </p> <input type="text" name="details" id="details" data-rule="required" data-msg=" لو ماعبى التيكست"/> </p>

                  </ul>

                     <div id="map"></div>
                    <script>
                      function initMap() {
                        var uluru = {lat: -25.363, lng: 131.044};
                        var map = new google.maps.Map(document.getElementById('map'), {
                          zoom: 4,
                          center: uluru
                        });
                        var marker = new google.maps.Marker({
                          position: uluru,
                          map: map
                        });
                      }
                    </script>
                    <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABmebxNurA4SnIZoEXtQ3DdHuHVJlsmX0&callback=initMap">
                    </script>
                    <input type="submit" value="حـفـظ"> <input type="button" value="إالغاء">
</td>

                </table>
              </div>



        </section>
      </div>




    </body>
    </html>
