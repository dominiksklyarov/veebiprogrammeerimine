<?php
	echo "Siin on minu esimene PHP";
	$name = "Dominik";
	$surname = "Sklyarov";
	$todayDate = date("d.m.y");
	$hourNow = date("H");
	$partOfDay ="";
	if ($hourNow < 8) {
		$partOfDay = "Varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16) {
		$partOfDay = "kooliaeg";
	}
	if ($hourNow >= 16) {
		$partOfDay = "vabaaeg";
	}


?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title>Dominik Sklyarov
	</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>
<body>

<div class="container">
	<h1>
		<?php 

		echo $name ." " .$surname;

		?></h1>

	<p> No idea what I need this text for </p>
	<?php
	echo "<p>Tänane kuupäev on: " .$todayDate ."</p> \n";
	
	echo "<p>Hetkel on kell " .date("H:i:s") .", käes on " .$partOfDay .".</p> \n";
	?>

	<p><a href="http://dominiksklyarov.com" style="color:red">Welcome to my site</a></p>

	<p><a href="https://www.instagram.com/dominiksklyarov" style="color:red">Follow me on instagram</a></p>

	<p><a href="https://www.facebook.com/dominiksklyarov" style="color:red">Add me on facebook</a></p>
	<p> or you can add me on <a href="https://www.snapchat.com/add/dominiksklyarov" style="color:#FFCC33"> snapchat </a> </p>

<a href="http://www.dominiksklyarov.com"><img src="http://dominiksklyarov.com/wp-content/uploads/2018/08/IMG_4781.jpg" alt="dominiksklyarov.us" width="50%" height="50%"></a> <!-- touch this and I'll find you. To use this picture, contact me. -->

</div>
</body>

</html>
