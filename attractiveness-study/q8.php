<?php session_start();
$_SESSION['partners'] = $_POST['partners'];

echo $_SESSION['age'];
echo $_SESSION['edu'];
echo $_SESSION['sex'];
echo $_SESSION['relationship'];
echo $_SESSION['crtype'];
echo $_SESSION['rl'];
echo $_SESSION['contraception'];
echo $_SESSION['partners'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – With how many different partners have you had sexual intercourse on one and only one occasion?</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />
</head>
<body id="survey">
	<div class="progress" style="width: 53.28%;"></div>
<h2>
	8
</h2>
<h1>
	With how many different partners have you had sexual intercourse on one and only one occasion?
</h1>
<form action="q9.php" method="POST">
	<input type="radio" name="partners2" value="0">0<br>
	<input type="radio" name="partners2" value="1">1<br>
	<input type="radio" name="partners2" value="2">2<br>
	<input type="radio" name="partners2" value="3">3<br>
	<input type="radio" name="partners2" value="4">4<br>
	<input type="radio" name="partners2" value="5-6">5 – 6<br>
	<input type="radio" name="partners2" value="7-9">7 – 9<br>
	<input type="radio" name="partners2" value="10-19">10 – 19<br>
	<input type="radio" name="partners2" value="20plus">20 or more<br>
	<input type="submit" value="Next">
</form>
</body>
</html>