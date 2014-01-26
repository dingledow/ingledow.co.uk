<?php

session_start();
$_SESSION['image9'] = $_POST['image9'];

echo $_SESSION['age'];
echo $_SESSION['edu'];
echo $_SESSION['sex'];
echo $_SESSION['relationship'];
echo $_SESSION['crtype'];
echo $_SESSION['rl'];
echo $_SESSION['contraception'];
echo $_SESSION['partners'];
echo $_SESSION['partners2'];
echo $_SESSION['partners3'];
echo $_SESSION['sexnolove'];
echo $_SESSION['casual'];
echo $_SESSION['nosexuntilltr'];
echo $_SESSION['fantasiesnor'];
echo $_SESSION['arousal'];
echo $_SESSION['sponfant'];
echo $_SESSION['image1'];
echo $_SESSION['image2'];
echo $_SESSION['image3'];
echo $_SESSION['image4'];
echo $_SESSION['image5'];
echo $_SESSION['image6'];
echo $_SESSION['image7'];
echo $_SESSION['image8'];
echo $_SESSION['image9'];


$con=mysqli_connect("localhost","alex","reejavlea","alex");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO survey (age)
VALUES
('$_SESSION[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

echo "FINISHED!";

mysqli_close($con);
?>
