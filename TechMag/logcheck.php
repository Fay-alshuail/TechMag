<?php
include 'config.php';
session_start();



//Get username and password from the form.
$username = $_POST['username'];
$password = $_POST['password'];
$selectOption = $_POST['users'];
$message = " خطأ في اسم المستخدم أو الرقم السري أو نوع الدخول";
$_SESSION['username_s']=$username;


 mysql_query("SET NAMES 'utf8'");
 mysql_query('SET CHARACTER SET utf8');

switch ($selectOption) {
  case 'supervisor':
  $sql =("SELECT * FROM `المشرف` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");

  $result = mysql_query($sql) or die(mysql_error());
  $num = mysql_num_rows($result);


  if ($row = mysql_fetch_assoc($result))
    header('Location: supervisor/supervisorcp.php');

    else  {
echo "<script type='text/javascript'>alert('$message');</script>";
}
    break;
    case 'customer_service':
    $sql =("SELECT * FROM `خدمة العملاء` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");

    $result = mysql_query($sql) or die(mysql_error());
    $num = mysql_num_rows($result);


    if ($row = mysql_fetch_assoc($result))
      header('Location: customerservice/cs.php');
      else  {
        echo "<script type='text/javascript'>alert('$message');</script>";
}
      break;

      case 'technican':
      $sql =("SELECT * FROM `الفني` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");

      $result = mysql_query($sql) or die(mysql_error());
      $num = mysql_num_rows($result);


      if ($row = mysql_fetch_assoc($result))
        header('Location:technican/tech.php');
        else  {
          echo "<script type='text/javascript'>alert('$message');</script>";}
       break;
  default:

  echo "<script type='text/javascript'>alert('$message');</script>";


    break;
}

?>
