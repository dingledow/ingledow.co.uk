<?php
$con=mysqli_connect("localhost","root","*qRF+sM9WGoUhg6?[2YyP3Jk:v4G/pwA4NDY8d)aM,8)6tM6L,","alex");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO survey (age)
VALUES
('$_POST[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>
