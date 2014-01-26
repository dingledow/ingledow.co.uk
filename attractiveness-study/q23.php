<?php session_start();
$_SESSION['image7'] = $_POST['image7'];

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
echo $_SESSION['casual'];
echo $_SESSION['nosexuntilltr'];
echo $_SESSION['fantasiesnor'];
echo $_SESSION['arousal'];
echo $_SESSION['sponfant'];
echo $_SESSION['image1'];
echo $_SESSION['image2'];
echo $_SESSION['image3'];
echo $_SESSION['image4'];
echo $_SESSION['image5'];
echo $_SESSION['image6'];
echo $_SESSION['image7'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for HTML5 (experimental) for Mac OS X https://github.com/w3c/tidy-html5/tree/c63cc39" />
<meta charset="UTF-8" />
<title>Attractiveness Study – 
</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7777472/762142/css/fonts.css" />

<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script>
$(document).ready(function() {
	$("img.4").css("display","inline");
	$(".range").change(function () {
		var rangevalue = $(".range").val();
		console.log(rangevalue);
		if (rangevalue == 1) {
			$("img.1").css("display","inline"),
			$("img.2, img.3, img.4, img.5, img.6, img.7").css("display","none");
		}
		if (rangevalue == 2) {
			$("img.2").css("display","inline");
			$("img.1, img.3, img.4, img.5, img.6, img.7").css("display","none");
		}
		if (rangevalue == 3) {
			$("img.3").css("display","inline");
			$("img.1, img.2, img.4, img.5, img.6, img.7").css("display","none");
		}
		if (rangevalue == 4) {
			$("img.4").css("display","inline");
			$("img.1, img.2, img.3, img.5, img.6, img.7").css("display","none");
		}
		if (rangevalue == 5) {
			$("img.5").css("display","inline");
			$("img.1, img.2, img.3, img.4, img.6, img.7").css("display","none");
		}
		if (rangevalue == 6) {
			$("img.6").css("display","inline");
			$("img.1, img.2, img.3, img.4, img.5, img.7").css("display","none");
		}
		if (rangevalue == 7) {
			$("img.7").css("display","inline");
			$("img.1, img.2, img.3, img.4, img.5, img.6").css("display","none");
		}
	});

});
</script>

</head>

<body id="survey" class="image">
	<div class="progress" style="width: 100%;"></div>
<h2>
	23
</h2>
<h1>
Which image
</h1>
<p>Use the slider to pick...</p>
<p>
	<img class="image 1" src="image8/1.jpg" />
	<img class="image 2" src="image8/2.jpg" />
	<img class="image 3" src="image8/3.jpg" />
	<img class="image 4" src="image8/4.jpg" />
	<img class="image 5" src="image8/5.jpg" />
	<img class="image 6" src="image8/6.jpg" />
	<img class="image 7" src="image8/7.jpg" />
</p>
<form action="q24.php" method="POST">
	<input type="range" min="1" max="7" value="4" step="1" name="image8" class="range"/>
	<input type="submit" value="Next">
</form>
</body>
</html>