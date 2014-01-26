<?php session_start();
$_SESSION['fantasiesnor'] = $_POST['fantasiesnor'];

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

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – How often do you experience sexual arousal when you are in contact with someone you are not in a committed romantic relationship with?
</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />
</head>
<body id="survey">
	<div class="progress" style="width: 93.24%;"></div>
<h2>
	15
</h2>
<h1>
How often do you experience sexual arousal when you are in contact with someone you are not in a committed romantic relationship with?
</h1>
<form action="q15.php" method="POST">
	<input type="radio" name="arousal" value="never">Never<br>
	<input type="radio" name="arousal" value="very seldom">Very seldom<br>
	<input type="radio" name="arousal" value="about once every two or three months">About once every two or three months<br>
	<input type="radio" name="arousal" value="about once a month">About once a month<br>
	<input type="radio" name="arousal" value="about once every two weeks">About once every two weeks<br>
	<input type="radio" name="arousal" value="about once a week">About once a week<br>
	<input type="radio" name="arousal" value="several times per week">Several times per week<br>
	<input type="radio" name="arousal" value="nearly every day">Nearly every day<br>
	<input type="radio" name="arousal" value="at least once a day">At least once a day<br>
	<input type="submit" value="Next">
</form>
</body>
</html>