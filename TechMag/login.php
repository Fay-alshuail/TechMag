
<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Random Login Form</title>
	<link rel="stylesheet" href="assets/css/main.css" />
	<header id="header" class="alt">
		<div id="nav2">
		<nav id="nav">
			<ul>
				<li><a href="homepage.html">الصفحة الرئيسية </a></li>
				<li><a href="generic.html">خطط الإشتراك  </a></li>
				<li><a href="login.html">تسجيل الدخول  </a></li>
			</ul>
		</nav>
	</div>
	</header>

	<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <style>

      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
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
	width: 101%;
	height: 102%;
	background-image: url("images/banner.jpg");
	background-size: cover;
	-webkit-filter: blur(5px);
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

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	text-align: right;

}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
	text-align: right;
}

.login input[type=button]{
	width: 250px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
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
			<div>Tech<span>Mag</span></div>
		</div>
		<br>
		<div class="login">
			<form action = "login.php" method ="post">
				<input type="text" placeholder="اسم المستخدم" name="user_name"><br>
				<input type="password" placeholder="الرقم السري " name="password"><br>
				<input type="submit"  value="تسجيل الدخول" >
			</form>
		</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>




</body>
</html>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";

    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");

    $dbname = "fixmin";

    mysql_select_db($dbname);

    $query = "SELECT الايميل FROM المشرف WHERE الايميل = '$username' AND الجوال1 = '$password'";

    $result = mysql_query($query) or die ("Failed Query of " . $query);


    while($row = mysql_fetch_assoc($result))
    {
            $_SESSION["user"] = $username;
    }
}
?>
