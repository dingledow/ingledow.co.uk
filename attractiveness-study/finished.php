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

$_SESSION['age'];
$_SESSION['edu'];
$_SESSION['sex'];
$_SESSION['sex_active'];
$_SESSION['relationship'];
$_SESSION['crtype'];
$_SESSION['rl'];
$_SESSION['contraception'];
$_SESSION['partners'];
$_SESSION['partners2'];
$_SESSION['partners3'];
$_SESSION['sexnolove'];
$_SESSION['casual'];
$_SESSION['nosexuntilltr'];
$_SESSION['fantasiesnor'];
$_SESSION['arousal'];
$_SESSION['sponfant'];
$_SESSION['image1'];
$_SESSION['image2'];
$_SESSION['image3'];
$_SESSION['image4'];
$_SESSION['image5'];
$_SESSION['image6'];
$_SESSION['image7'];
$_SESSION['image8'];
$_SESSION['image9'];


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

session_destroy();

mysqli_close($con);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – Finished</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />
</head>
<body id="survey">
	<div class="progress" style="width: 6.66%;"></div>
<h1>
	Finished
</h1>
<p>
	Thank you for completing the survey!
</p>
</body>
</html>