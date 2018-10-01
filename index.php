<?php
	echo "Sa sattusid .php veebikale!";
	$name = "Dominik";
	$surname = "Sklyarov";
	$dirToRead = "../../../../~rinde/veebiprogrammeerimine2018s/pics/";
	$allFiles = array_slice(scandir($dirToRead), 2);
	var_dump($_POST);

	if (isset($_POST["fName"])) {
		$name = $_POST["fName"];
	}

	if (isset($_POST["sName"])) {
		$surname = $_POST["sName"];
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

		?>
		
	</h1>

	<p> No idea what I need this text for </p>
	

	<p><a href="http://dominiksklyarov.com" style="color:red">Welcome to my site</a></p>

	<p><a href="https://www.instagram.com/dominiksklyarov" style="color:red">Follow me on instagram</a></p>

	<p><a href="https://www.facebook.com/dominiksklyarov" style="color:red">Add me on facebook</a></p>
	<p> or you can add me on <a href="https://www.snapchat.com/add/dominiksklyarov" style="color:#FFCC33"> snapchat </a> </p>

<a href="http://www.dominiksklyarov.com"><img src="http://dominiksklyarov.com/wp-content/uploads/2018/08/IMG_4781.jpg" alt="dominiksklyarov.us" width="50%" height="50%"></a> <!-- touch this and I'll find you. To use this picture, contact me. -->

<?php  

echo '<img src = " ' .$dirToRead .$allFiles[1] .'" alt="picture"><br>';

?>

<hr>

<form method="POST">
	<label>First name:</label>
	<input type="text" name="fName" value=""><br>
	<label>Second name:</label>
	<input type="text" name="sName"><br>
	<label>Birth year:</label>
	<input type="number" name="byear" min="1924" max="2003" value="1998"><br>
	<input type="submit" value="SUBMIT INFORMATION" name="submitdata">
</form>

<?php  

	if (isset($_POST["submitdata"])) {
		echo "<p> Olete elanud järgmistel aastatel: </p>";
		echo "<ul> \n";
		for ($i = $_POST["byear"]; $i <= date("Y"); $i ++) {
			echo "<li>" . $i ." </li> \n";
		}

	}

?>
</div>
</body>

</html>
