<!DOCTYPE html>
<html>
<head>
	<title>Slider Demo</title>
	<link rel="stylesheet" type="text/css" href="./css/jquery.bxslider.css">
</head>
<body>


<ul class="bxslider" id="slider">
  <li><img src="./images/Penguins.jpg" title="Images of some penguins" /></li>
  <li><img src="./images/Koala.jpg" title="image of koala" /></li>
  <li><img src="./images/Jellyfish.jpg" title="title for jelly fish" /></li>
</ul>


</body>
</html>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/jquery.bxslider.min.js"></script>

<script type="text/javascript">
		
	var slider =	$("#slider").bxSlider({
								mode:'fade',
								captions:true
							});

</script>
