<?php

$mysqli = new mysqli('localhost', 'fox', 'tierone', 'sltwo');

if ($mysqli->connect_errno) {   
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}


	for ($i = 1; $i < 27; $i++) {
		echo "Querying for charid: " . $i;

		$sql = "SELECT g.id as gif_id, a.id as attack_id from attacks as a INNER JOIN gifs as g ON g.dataid = a.id WHERE a.gameid=0 AND a.charid=$i AND g.typeid=1";
		

		
		if (!$result = $mysqli->query($sql)) {
		  die('Invalid query: ' . $mysqli->error);
		}



		foreach ($result as $row) {
			print_r($row);
		    $gifid = $row["gif_id"];
		    $attackid = $row["attack_id"];

		    
		    $sql = "UPDATE attacks SET gif_id=$gifid WHERE id=$attackid";
		   
		    if (!$result = $mysqli->query($sql)) {
			  die('Invalid query: ' . $mysqli->error);
			} 
		}

		/*
		SELECT *, a.id as attack_id from attacks as a
		  	INNER JOIN gifs as g ON g.dataid = a.id
		    WHERE a.gameid=0 AND a.charid=:charid AND g.typeid=1
		*/
	}

?>