<?php
$serverName = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signup_db";
$conn = mysqli_connect($serverName, $dbusername, $dbpassword, $dbname)/* or die('the website is down for maintainance')*/;
mysqli_select_db($conn, $dbname) or die(mysql_error());
