<?php session_start();

$_SESSION['crtype'] = $_POST['cr'] . '' . $_POST['other_cr'];

$_SESSION['age'];
$_SESSION['edu'];
$_SESSION['sex'];
$_SESSION['sex_active'];
$_SESSION['relationship'];
$_SESSION['crtype'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – How long have you been involved in your current relationship?</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />

</head>
<body id="survey" class="characterise-relationship">
	<div class="progress" style="width: 24%;"></div>
<h2>
	6.2
</h2>
<h1>
	How long have you been involved in your current relationship?
</h1>
<form action="q6.php" method="POST">
	<input type="radio" name="rl" value="less-than-6-weeks">Less than 6 weeks<br>
	<input type="radio" name="rl" value="6weeks-6months">6 weeks – 6 months<br>
	<input type="radio" name="rl" value="More than 6 months but less than one year">More than 6 months but less than one year<br>
	<input type="radio" name="rl" value="More than one year">More than one year<br>
	<input type="submit" value="Next">
</form>
</body>
</html>