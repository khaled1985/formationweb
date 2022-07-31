<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ims2";
// creating the connection
$connect = mysqli_connect($servername, $username, $password, $dbname);
// checking the connection
if($connect ) {
   echo "Successfully connected";
}
else {
    die("Connection Failed : " );
}


?>