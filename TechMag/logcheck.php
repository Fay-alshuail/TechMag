<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database="techmag";

// Create connection
$con=mysqli_connect("$servername","$username","$password") ;

if($con)
echo "Connected successfully";

?>
