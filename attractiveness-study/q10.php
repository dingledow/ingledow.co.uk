<?php session_start();
$_SESSION['partners3'] = $_POST['partners3'];

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

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – Sex without love is OK?
</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />
</head>
<body id="survey" class="agree">
	<div class="progress" style="width: 66.66%;"></div>
<h2>
	11
</h2>
<h1>
	Sex without love is OK?
</h1>
<form action="q11.php" method="POST">
	<table>
		<tr>
			<td>Strongly disagree</td>
			<td><input type="radio" name="sexnolove" value="1">1</td>
			<td><input type="radio" name="sexnolove" value="2">2</td>
			<td><input type="radio" name="sexnolove" value="3">3</td>
			<td><input type="radio" name="sexnolove" value="4">4</td>
			<td><input type="radio" name="sexnolove" value="5">5</td>
			<td><input type="radio" name="sexnolove" value="6">6</td>
			<td><input type="radio" name="sexnolove" value="7">7</td>
			<td><input type="radio" name="sexnolove" value="8">8</td>
			<td><input type="radio" name="sexnolove" value="9">9</td>
			<td>Strongly agree</td>
		</tr>
	</table>
	<input type="submit" value="Next">
</form>
</body>
</html>