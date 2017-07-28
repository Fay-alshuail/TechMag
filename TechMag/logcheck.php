<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database="techmag";

// Create connection
$con=mysqli_connect("$servername","$username","$password") ;

if($con)
echo "Connected successfully";

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
