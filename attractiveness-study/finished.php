<?php

session_start();
$_SESSION['image9'] = $_POST['image9'];

$age = $_SESSION['age'];
$ft_edu = $_SESSION['edu'];
$orientation = $_SESSION['sex'];
$sex_active = $_SESSION['sex_active'];
$relationship = $_SESSION['relationship'];
$relationship_type = $_SESSION['crtype'];
$relationship_length = $_SESSION['rl'];
$contraception = $_SESSION['contraception'];
$no_partners = $_SESSION['partners'];
$onenightstand = $_SESSION['partners2'];
$casualpartners = $_SESSION['partners3'];
$sexnolove = $_SESSION['sexnolove'];
$like_casual_sex = $_SESSION['casual'];
$nosexuntil_lt = $_SESSION['nosexuntilltr'];
$fantasies_strangers = $_SESSION['fantasiesnor'];
$arousal = $_SESSION['arousal'];
$fantasies = $_SESSION['sponfant'];
$image1 = $_SESSION['image1'];
$image2 = $_SESSION['image2'];
$image3 = $_SESSION['image3'];
$image4 = $_SESSION['image4'];
$image5 = $_SESSION['image5'];
$image6 = $_SESSION['image6'];
$image7 = $_SESSION['image7'];
$image8 = $_SESSION['image8'];
$image9 = $_SESSION['image9'];

echo $_SESSION['age'];
echo $_SESSION['edu'];
echo $_SESSION['sex'];
echo $_SESSION['sex_active'];
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

$sql="INSERT INTO survey (age, ft_edu, orientation, sex_active, relationship, relationship_type, relationship_length, contraception, no_partners, onenightstand, casualpartners, sexnolove, like_casual_sex, nosexuntil_lt, fantasies_strangers, arousal, fantasies, image1, image2, image3, image4, image5, image6, image7, image8, image9)
VALUES
('$age', '$ft_edu', '$orientation', '$sex_active', '$relationship', '$relationship_type', '$relationship_length', '$contraception', '$no_partners', '$onenightstand', '$casualpartners', '$sexnolove', '$like_casual_sex', '$nosexuntil_lt', '$fantasies_strangers', '$arousal', '$fantasies', '$image1', '$image2', '$image3', '$image4', '$image5', '$image6', '$image7', '$image8', '$image9')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

echo "FINISHED!";

session_destroy();

mysqli_close($con);
?>
