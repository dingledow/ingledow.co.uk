<?php session_start();
$_SESSION['image2'] = $_POST['image2'];

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
$_SESSION['sexnolove'];
$_SESSION['casual'];
$_SESSION['nosexuntilltr'];
$_SESSION['fantasiesnor'];
$_SESSION['arousal'];
$_SESSION['sponfant'];
$_SESSION['image1'];
$_SESSION['image2'];

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

 $(function() {
 	$("img.4").css("display","inline");
    $( "#slider" ).slider({
      value:4,
      min: 1,
      max: 7,
      step: 1,
      slide: function( event, ui ) {
 
      		var rangevalue = ui.value
    		console.log(rangevalue);

        if (rangevalue == 1) {
			$("img.1").css("display","inline"),
			$("img.2, img.3, img.4, img.5, img.6, img.7").css("display","none");
			$( "#amount" ).val(1);
		}
		if (rangevalue == 2) {
			$("img.2").css("display","inline");
			$("img.1, img.3, img.4, img.5, img.6, img.7").css("display","none");
			$( "#amount" ).val(2);
		}
		if (rangevalue == 3) {
			$("img.3").css("display","inline");
			$("img.1, img.2, img.4, img.5, img.6, img.7").css("display","none");
			$( "#amount" ).val(3);
		}
		if (rangevalue == 4) {
			$("img.4").css("display","inline");
			$("img.1, img.2, img.3, img.5, img.6, img.7").css("display","none");
			$( "#amount" ).val(4);
		}
		if (rangevalue == 5) {
			$("img.5").css("display","inline");
			$("img.1, img.2, img.3, img.4, img.6, img.7").css("display","none");
			$( "#amount" ).val(5);
		}
		if (rangevalue == 6) {
			$("img.6").css("display","inline");
			$("img.1, img.2, img.3, img.4, img.5, img.7").css("display","none");
			$( "#amount" ).val(6);
		}
		if (rangevalue == 7) {
			$("img.7").css("display","inline");
			$("img.1, img.2, img.3, img.4, img.5, img.6").css("display","none");
			$( "#amount" ).val(7);
		}


      }
    });
});

</script>

<link rel="stylesheet" href="slider-style.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

</head>

<body id="survey" class="image">
	<div class="progress" style="width: 76%;"></div>
<h2>
	19
</h2>
<h1>
Please move the slider to select the image you find most attractive.
</h1>
<p>
	<img class="image 1" src="image3/1.jpg" />
	<img class="image 2" src="image3/2.jpg" />
	<img class="image 3" src="image3/3.jpg" />
	<img class="image 4" src="image3/4.jpg" />
	<img class="image 5" src="image3/5.jpg" />
	<img class="image 6" src="image3/6.jpg" />
	<img class="image 7" src="image3/7.jpg" />
</p>
<div id="slider"></div>
<form action="q19.php" method="POST">
	<input type="text" id="amount" name="image3">
	<input type="submit" value="Next">
</form>
</body>
</html>