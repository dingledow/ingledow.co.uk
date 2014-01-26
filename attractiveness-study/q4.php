<?php session_start();
$_SESSION['edu'] = $_POST['edu'];

$_SESSION['age'];
$_SESSION['edu'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – What is your sexual orientation?</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />

<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script>
$(document).ready(function() {
	$("input[type=text]").focus(function() {
		$("input[type=radio]").prop('checked', false);
	});
});
</script>
</head>
<body id="survey" class="sex">
	<div class="progress" style="width: 16%;"></div>
<h2>
	4
</h2>
<h1>
	What is your sexual orientation?
</h1>
<form action="q4-1.php" method="POST">
	<input type="radio" name="sex" value="hetero">Heterosexual<br>
	<input type="radio" name="sex" value="bi">Bisexual<br>
	<input type="radio" name="sex" value="homo">Homosexual<br>
	<label for="other">Or, other</label>
	<input id="other" name="other_sex" class="other" type="text"></input>
	<input type="submit" value="Next">
</form>
</body>
</html>
