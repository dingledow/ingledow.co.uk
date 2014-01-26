<?php session_start();
$_SESSION['arousal'] = $_POST['arousal'];

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

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – In everyday life, how often do you have spontaneous fantasies about having sex with someone you have just met?
</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />
</head>
<body id="survey">
	<div class="progress" style="width: 100%;"></div>
<h2>
	15
</h2>
<h1>
In everyday life, how often do you have spontaneous fantasies about having sex with someone you have just met?
</h1>
<form action="q16.php" method="POST">
	<input type="radio" name="sponfant" value="never">Never<br>
	<input type="radio" name="sponfant" value="very seldom">Very seldom<br>
	<input type="radio" name="sponfant" value="about once every two or three months">About once every two or three months<br>
	<input type="radio" name="sponfant" value="about once a month">About once a month<br>
	<input type="radio" name="sponfant" value="about once every two weeks">About once every two weeks<br>
	<input type="radio" name="sponfant" value="about once a week">About once a week<br>
	<input type="radio" name="sponfant" value="several times per week">Several times per week<br>
	<input type="radio" name="sponfant" value="nearly every day">Nearly every day<br>
	<input type="radio" name="sponfant" value="at least once a day">At least once a day<br>
	<input type="submit" value="Next">
</form>
</body>
</html>
