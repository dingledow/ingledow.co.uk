<?php session_start();
$_SESSION['rl'] = $_POST['rl'];

echo $_SESSION['age'];
echo $_SESSION['edu'];
echo $_SESSION['sex'];
echo $_SESSION['relationship'];
echo $_SESSION['crtype'];
echo $_SESSION['rl'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – Are you taking any form of hormonal contraception? </title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />
</head>
<body id="survey">
	<div class="progress" style="width: 40%;"></div>
<h2>
	6
</h2>
<h1>
	Are you taking any form of hormonal contraception? 
</h1>
<p>E.g. contraceptive pill, injection, implant etc.</p>
<form action="q7.php" method="POST">
	<input type="radio" name="contraception" value="yes" class="yes">Yes<br>
	<input type="radio" name="contraception" value="no" class="no">No
	<input type="submit" value="Next">
</form>
</body>
</html>