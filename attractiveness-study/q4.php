<?php session_start();
$_SESSION['edu'] = $_POST['edu'];

echo $_SESSION['age'];
echo $_SESSION['edu'];

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
	<div class="progress" style="width: 26.64%;"></div>
<h2>
	4
</h2>
<h1>
	What is your sexual orientation?
</h1>
<form action="q5.html">
	<input type="radio" name="sex" value="heterosexual">Heterosexual<br>
	<input type="radio" name="sex" value="bisexual">Bisexual<br>
	<input type="radio" name="sex" value="homosexual">Homosexual<br>
	<label for="other">Or, other</label>
	<input id="other" class="other" type="text"></input>
	<input type="submit" value="Next">
</form>
</body>
</html>