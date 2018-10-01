<?php

	require("functions.php");

if (isset($_POST["submitMessage"])){
	if (!empty($_POST["message"])) {

		$notice = "Sõnum olemas!";
		$msg=$_POST["message"];
		saveAMsg($msg);
		$msg = $_POST["message"];
	}

	else {
		$notice = "PLEASE WRITE YOUR TEXT";
	}
	echo $notice;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>
	  Sõnumi lisamine
	</title>
  </head>
  <body>
    <h1>
	  Sõnumi lisamine
	</h1>
	<p>See leht on valminud <a href="http://www.dominiksklyarov.com" target="_blank">Dominiku</a> õppetöö raames ja ei oma mingisugust väärtuslikku infot.</p>
	<hr>
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  <label>Sõnum (max 250 tähemärki):</label>
	  <textarea rows="4" cols="64" placeholder="Write your text here" name="message"></textarea><br>

	  <input name="submitMessage" type="submit" value="save message">
	</form>
	
	<?php
	  if (isset($_POST["firstName"])){
		echo "<br><p>Olete elanud järgnevatel aastatel:</p>";
		echo "<ul> \n";
		for ($i = $_POST["birtYear"]; $i <= date("Y"); $i ++){
		  echo "<li>" . $i ."</li> \n";
	    }
		
		echo "</ul> \n";
	  }
	?>
	
  </body>
</html>