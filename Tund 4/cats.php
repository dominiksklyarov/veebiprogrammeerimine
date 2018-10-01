<?php
require "functions.php";
  
    // KAS JÄRGMISED VÄLJAD VÕIB JU MITTE KIRJUTADA? MILLEKS NEID IKKA VAJA ON? 
  if (isset($_POST["addCat"])){
  		if (!empty($_POST["name"]) and !empty($_POST["color"]) and !empty($_POST["tail"]) ){

  			$notice = "Sõnum olemas!";
        
        $name = $_POST["name"];
        $color = $_POST["color"];
        $tail = $_POST["tail"];
        addcat($name,$color,$tail);
        echo "<br>";
  			
  			
  		} else
  		{
  			$notice = "Palun täitke väljad!";
  		}
  		echo $notice;
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adding your cat!</title>
</head>
<body>

	<hr>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<textarea name="name" placeholder="Write here your cat name"></textarea><br>
		<textarea name="color" placeholder="What is your cats color?"></textarea><br>
		<textarea name="tail" placeholder="Write here the length of the tail (cm)"></textarea><br>

		<input name="addCat" type="submit" value="Save">

	</form>

</body>
</html>