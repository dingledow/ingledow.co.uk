<?php session_start();
$_SESSION['casual'] = $_POST['casual'];

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

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – I do not want to have sex with a person until I am sure that we will have a long-term, serious relationship.
</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />
</head>
<body id="survey" class="agree">
	<div class="progress" style="width: 79.92%;"></div>
<h2>
	12
</h2>
<h1>
	I do not want to have sex with a person until I am sure that we will have a long-term, serious relationship.
</h1>
<form action="q13.php" method="POST">
	<table>
		<tr>
			<td>Strongly disagree</td>
			<td><input type="radio" name="nosexuntilltr" value="1">1</td>
			<td><input type="radio" name="nosexuntilltr" value="2">2</td>
			<td><input type="radio" name="nosexuntilltr" value="3">3</td>
			<td><input type="radio" name="nosexuntilltr" value="4">4</td>
			<td><input type="radio" name="nosexuntilltr" value="5">5</td>
			<td><input type="radio" name="nosexuntilltr" value="6">6</td>
			<td><input type="radio" name="nosexuntilltr" value="7">7</td>
			<td><input type="radio" name="nosexuntilltr" value="8">8</td>
			<td><input type="radio" name="nosexuntilltr" value="9">9</td>
			<td>Strongly agree</td>
		</tr>
	</table>
	<input type="submit" value="Next">
</form>
</body>
</html>