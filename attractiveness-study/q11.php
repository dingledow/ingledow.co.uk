<?php session_start();
$_SESSION['sexnolove'] = $_POST['sexnolove'];

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

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – I can imagine myself being comfortable and enjoying "casual" sex with different partners.
</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />
</head>
<body id="survey" class="agree">
	<div class="progress" style="width: 73.26%;"></div>
<h2>
	11
</h2>
<h1>
	I can imagine myself being comfortable and enjoying "casual" sex with different partners.
</h1>
<form action="q12.php" method="POST">
	<table>
		<tr>
			<td>Strongly disagree</td>
			<td><input type="radio" name="casual" value="1">1</td>
			<td><input type="radio" name="casual" value="2">2</td>
			<td><input type="radio" name="casual" value="3">3</td>
			<td><input type="radio" name="casual" value="4">4</td>
			<td><input type="radio" name="casual" value="5">5</td>
			<td><input type="radio" name="casual" value="6">6</td>
			<td><input type="radio" name="casual" value="7">7</td>
			<td><input type="radio" name="casual" value="8">8</td>
			<td><input type="radio" name="casual" value="9">9</td>
			<td>Strongly agree</td>
		</tr>
	</table>
	<input type="submit" value="Next">
</form>
</body>
</html>