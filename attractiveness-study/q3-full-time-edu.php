<?php session_start();
$_SESSION['age'] = $_POST['age'];

$_SESSION['age'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – Are you in full time education?</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />
</head>
<body id="survey" class="ft-edu">

<div class="progress" style="width: 20%;"></div>
<h2>
	3
</h2>
<h1>
	Are you in full time education?
</h1>
<form action="q4.php" method="POST">
	<input type="radio" name="edu" value="yes">Yes<br>
	<input type="radio" name="edu" value="no">No
	<input type="submit" value="Next">
</form>
</body>
</html>
