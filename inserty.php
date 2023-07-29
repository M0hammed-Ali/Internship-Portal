<html>
<body>
<?php
$con = mysqli_connect("localhost","root","","db_issm");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysqli_select_db($con,"db_issm");

 
$sql="INSERT INTO fill_details (company_name, first_name, last_name,email,gender,file)
VALUES
( '$_POST[company_name]','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[gender]','$_POST[file]')";
 
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysql_error());
  }
header('location:file_uploading/index.php');
 
mysql_close($con)
?>
</body>
</html>
 