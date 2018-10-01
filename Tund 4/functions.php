<?php  
require("../../../vpconfig.php");
echo $GLOBALS["serverHost"];
echo $GLOBALS["serverUsername"];
echo $GLOBALS["serverPassword"];
$database = "if18_dominik_sk_1";

function saveAMsg($msg){
	echo "WORKING";
	$notice = ""; /*see peaks olema teade, mille antakse kui salvestatakse midagi*/
	
	/*loome ühenduse andmebaasiserveriga */
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);

	/*Valmistame ette SQL päringu
	STATEMENT */ $stmt = $mysqli->prepare("INSERT INTO vpamsg (message) VALUES(?)");
	echo $mysqli->error; /*igaksjuhuks kontroll */
	$stmt->bind_param("ssi", $msg);  /*bind ehk seostama
	s - string, i - integrer, d - decimal*/
	if($stmt->execute()) {
	$notice = 'Sõnum: "' .$msg .'" on salvestatud!';}	
	else {
	$notice = "Sõnumi salvestamisel tekkis viga: " .$stmt->error;
	}
	

	$mysqli->close();
	$mysqlcon->close();
}


/* KODUNE
ÜLESANNE */

	function addcat($name,$color,$tail) {

	$notice = ""; // teade antakse salvestamise kohta. Milleks seda kasutada??

	$mysqlcon = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);

	$sqlquery = $mysqlcon->prepare("INSERT INTO damn (name,color,tail) VALUES(?,?,?)");
	echo $mysqlcon->error;
	$sqlquery->bind_param("ssi", $name,$color,$tail);

	if($sqlquery->execute()) {
		$notice = 'Saved.' .$color ."kiisu" .$name ."salvestati andmebaasi, tema sabapikkuseks on " .$tail ."cm.";
		
		} else {
				$notice = 'Salvestamisel tekkis tõrge: ' .$sqlquery->error;
			}

			$sqlquery->close();
			$mysqlcon->close();

	}
?>