
<!DOCTYPE html>
<html >

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>

  <meta charset="UTF-8">
  <title>تسجيل الدخول</title>
	<link rel="stylesheet" href="assets/css/main.css" />
	<header id="header" class="alt">

		<div id="nav2">
		<nav id="nav">
			<ul>
				<li><a href="homepage.html">الصفحة الرئيسية </a></li>
				<li><a href="prices.php">خطط الإشتراك  </a></li>
				<li><a href="login.php">تسجيل الدخول  </a></li>
			</ul>
		</nav>
	</div>
	</header>

	<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <style>
    @import url(https://fonts.googleapis.com/css?family=Changa);

      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);


body {
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;

}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: 100%;
	height: 100%;
	background-image: url("images/banner3.jpg");
	background-size: cover;
  -webkit-filter: blur(10px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: 101.5%;
	height: 103%;
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

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
	text-align: right;


}
select,
.login input[type=text]{
	width: 300px;
	height: 50px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color:#4f6589;
	font-family: changa, sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	text-align: right;

}

.login input[type=password]{
	width: 300px;
	height: 50px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #4f6589;
	font-family: changa, sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
	text-align: right;
}

.login input[type=submit]{
	width: 300px;
	height: 55px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: changa, sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}
select,
.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Fix<span>Min</span></div>
		</div>
		<br>
		<div class="login">

      <form action="" method="post">
<select id="users"name ="users">
  <option>نوع الدخول</option>
<option  id ="supervisor">مشرف</option>
<option  id ="customer_service">خدمة عملاء</option>
<option  id ="technican">فني</option>


</select><br>
<br>
				<input type="text" placeholder="اسم المستخدم" name="username"><br>
				<input type="password" placeholder="الرقم السري " name="password"><br>
        <input type="submit" onClick="return validateForm()" value="تسجيل الدخول">

			</form>
		</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
<?php
session_start();

//Get username and password from the form.
$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");
 include 'config.php';
 mysql_query("SET NAMES 'utf8'");
 mysql_query('SET CHARACTER SET utf8');

switch ($select) {
  case 'supervisor':
  $sql =("SELECT * FROM `المشرف` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");

  $result = mysql_query($sql) or die(mysql_error());
  $num = mysql_num_rows($result);


  if ($row = mysql_fetch_assoc($result))
    header('Location: supervisor/supervisorcp.php');

    break;
    case 'customer_service':
    $sql =("SELECT * FROM `خدمة العملاء` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");

    $result = mysql_query($sql) or die(mysql_error());
    $num = mysql_num_rows($result);


    if ($row = mysql_fetch_assoc($result))
      header('Location: customerservice/cs.php');
      break;

      case 'technican':
      $sql =("SELECT * FROM `الفني` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");

      $result = mysql_query($sql) or die(mysql_error());
      $num = mysql_num_rows($result);


      if ($row = mysql_fetch_assoc($result))
        header('Location:technican/technicancp.php');
       break;
  default:
  echo '<script language="javascript" >';
  echo 'alert("خطأ في اسم المستخدم أو الرقم السري ")';
  echo '</script>';

    break;
}

?>
