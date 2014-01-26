<?php session_start();
$_SESSION['relationship'] = $_POST['relationship'];

echo $_SESSION['age'];
echo $_SESSION['edu'];
echo $_SESSION['sex'];
echo $_SESSION['sex_active'];
echo $_SESSION['relationship'];

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
<body id="survey" class="characterise-relationship">
	<div class="progress" style="width: 33.33%;"></div>
<h2>
	5.1
</h2>
<h1>
	How would describe your current relationship?
</h1>
<form action="q5b.php" method="POST">
	<input type="radio" name="cr" value="casual">Casual dating partner<br>
	<input type="radio" name="cr" value="long-term">Long term boyfriend/girlfriend<br>
	<input type="radio" name="cr" value="husband-wife">Husband/wife<br>
	<label for="other">Or, other</label>
	<input id="other" name="other_cr" class="other" type="text"></input>
	<input type="submit" value="Next">
</form>
</body>
</html>