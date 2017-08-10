<?php
session_start();

//Get username and password from the form.
$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");
$select= ($_POST['users']);
 include 'config.php';
 mysql_query("SET NAMES 'utf8'");
 mysql_query('SET CHARACTER SET utf8');

switch ($select) {
  case 'مشرف':
  $sql =("SELECT * FROM `المشرف` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");

  $result = mysql_query($sql) or die(mysql_error());
  $num = mysql_num_rows($result);


  if ($row = mysql_fetch_assoc($result))
    header('Location: supervisor/supervisorcp.php');

    break;
    case 'خدمة عملاء':
    $sql =("SELECT * FROM `خدمة العملاء` WHERE `البريد` = '$username' AND `الرقم_السري` ='$password'");

    $result = mysql_query($sql) or die(mysql_error());
    $num = mysql_num_rows($result);


    if ($row = mysql_fetch_assoc($result))
      header('Location: customerservice/cs.php');
      break;

      case 'فني':
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
