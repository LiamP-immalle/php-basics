<?php

// Maak een Array met 3 namen van medeleerlingen.

$leerlingen = array("Wout", "Sander", "Kenzo");


// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.

for($x = 0; $x < count($leerlingen); $x++){
	echo $leerlingen[$x];
	echo "<br>";
}

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.

echo "<ol>";
for($x = 0; $x < count($leerlingen); $x++){
	echo "<li>$leerlingen[$x]</li>";
	echo "<br>";
}
echo "</ol>";

$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.

for($x = 0; $x < strlen($naam); $x++){
	echo $naam[$x];
	echo "<br>";
}

?>
