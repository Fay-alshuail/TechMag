
<html>

<style type="text/css">

.body{
  position:absolute;
  top: -20px;
  left: -20px;
  right: 0px;
  bottom: 0px;
  width: auto;
  height: auto;
  background-image: url(images/banner3.jpg);
  background-size: cover;
  -webkit-filter: blur(5px);
  z-index: 0;
}

.grad{
  position: absolute;
  top: -20px;
  left: -20px;
  right: 0px;
  bottom: -140px;
  width: auto;
  height: auto;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
  z-index: 1;
  opacity: 0.7;
}

.header{
  position: absolute;
  top: calc(50% - 35px);
  left: calc(50% - 255px);
  z-index: 2;
}

.box{
  text-align: right;
  position: absolute;
  top: calc(13% - 5px);
  left: calc(35% - 5px);
  height: 613px;
  width: 500px;
  padding: -20px;
  z-index: 2;

}
.text{text-align:right;}
.left{text-align: center;}

.buttonsub{
  background-color:#94bbce;
  color: #FFF;
  text-align: center;
  width:84%;
  border:0;
  padding: 4px 4px;
  border-radius: 4px 4px 4px 4px;
  cursor: pointer;
  margin-top: 5px;
  font-size: 18px;
}
</style>
<head>
  <title>اشتراك</title><meta charset="utf-8" />
  <header id="header" class="alt">
  <table >
  <tr>
  <th style="text-align:center ; width:1em;color:#4f6589; background-color:#abb0b5;"><a href="homepage.html">الصفحة الرئيسية </a></th>
  <th style="text-align:center ;width:1em;color:#4f6589; background-color:#abb0b5;"><a href="prices.php">خطط الإشتراك  </a></th>
  <th style="text-align:center ;width:1em; color:#4f6589; background-color:#abb0b5;"><a href="login.php">تسجيل الدخول  </a></th>
  </tr>
  </table>

  </header>

<link rel="stylesheet" href="css.css" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
		</div>
		<br>
		<div class="box">
      <form method="post" action="formsub.php">
      <div class="contentform">
				<div>
				    <table>
				        <tr>
				            <td></td>
				            <td colspan="2">
				                خطط الاشتراك</td>
				            <td></td>
				        </tr>
				        <tr class="left">
				            <td bgcolor="#85a7d3">
				                Premium</td>
				            <td bgcolor="#c1e1f4">
				                Starter</td>
				            <td bgcolor="#ACCDFF">
				                Free Plan</td>
				            <td bgcolor="#999999">
				            </td>
				        </tr>
				        <tr>
				            <td class="left">
				                غير محدود</td>
				            <td class="left">
				                200</td>
				            <td class="left">
				                50</td>
				            <td class="text">
				                العملاء</td>
				        </tr>
				        <tr>
				            <td  class="left">
				                غير محدود</td>
				            <td class="left">
				                3</td>
				            <td class="left">
				                فرع واحد</td>
				            <td class="text">
				                الفروع</td>
				        </tr>
				        <tr>
				            <td class="left">
				                غير محدود</td>
				            <td class="left">
				                3</td>
				            <td class="left">
				                2</td>
				            <td class="text">
				                حسابات المستخدمين</td>
				        </tr>
				        <tr>
				            <td class="left">
				                غير محدود</td>
				            <td class="left">
				                شهر/70</td>
				            <td class="left">
				                شهر/20</td>
				            <td class="text">
				                الفواتير</td>
				        </tr>
				        <tr>
				            <td class="left">
				                غير محدود</td>
				            <td class="left">
				                شهر/50</td>
				            <td class="left">
				                شهر/30</td>
				            <td class="text">
				                طلبات الصيانة</td>
				        </tr>
				        <tr>
				            <td class="left">
				                صح</td>
				            <td class="left">
				                صح</td>
				            <td class="left">
				                صح</td>
				            <td class="text">
				                المنتجات</td>
				        </tr>
				        <tr>
				            <td class="left">
				                صح</td>
				            <td class="left">صح</td>
				            <td class="left">
				                خطأ</td>
				            <td class="text">
				                نموذج الفاتورة</td>
				        </tr>
				        <tr>
				            <td class="left">
				                <button id="Button2" type="submit" class="buttonsub"/>إشتراك</td>
				            <td class="left">
				                <button id="Button1" type="submit" class="buttonsub"/>إشتراك</td>
				            <td class="text">
				                الخطة الحالية</td>
				        </tr>
                <tr>
                    <td class="text">
                    30$ في الشهر </td>
                    <td class="text">
                    10$ في الشهر</td>
                </tr>
                <tr>
                    <td class="text">
                    360$ في الشهر </td>
                    <td class="text">
                    120$ في الشهر</td>
                </tr>
				    </table>
				    </div>
    </div>
    </form>
		</div>
</body>
</html>
