<?php session_start();

$_SESSION['sex_active'] = $_POST['sex_active'];

$_SESSION['age'];
$_SESSION['edu'];
$_SESSION['sex'];
$_SESSION['sex_active'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – Are you in a relationship?</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />

<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script>
$(document).ready(function() {

	$('input:radio').change(function(){
	    if ($(this).val() == 'yes') {
	       $('form').attr("action", "q5a.php");
	       console.log('yes');
	    } else if ($(this).val() == 'no') {
	    	$('form').attr("action", "q6.php");
	    	console.log('no');
	    }
	});

});
</script>

</head>
<body id="survey" class="relationship">
	<div class="progress" style="width: 24%;"></div>
<h2>
	6
</h2>
<h1>
	Are you in a relationship?
</h1>
<form action="" method="POST">
	<input type="radio" name="relationship" value="yes" class="yes">Yes<br>
	<input type="radio" name="relationship" value="no" class="no">No
	<input type="submit" value="Next">
</form>
</body>
</html>