<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_issm";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('cannot connect to the server'); 
mysqli_select_db($con,$dbname) or die('database selection problem');
?>