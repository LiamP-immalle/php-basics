<?php

$woord = "quotering";
$punten = 0;

// gebruik een switch-case-statement binnen een for-loop om

for($x =0; $x < strlen($woord); $x++){
	switch($woord[$x]){
		case "q":
		    $punten += 10;
		    break;
		case "u":
		    $punten += 4;
		    break;
		case "o":
		    $punten += 1;
		    break;
		case "t":
		    $punten += 2;
		    break;
		case "e":
		    $punten += 1;
		    break;
		case "r":
		    $punten += 2;
		    break;
		case "i":
		    $punten += 1;
		    break;
		case "n":
		    $punten += 1;
		    break;
		case "g":
		    $punten += 3;
		    break;
	}
}

// te itereren over een woord en de Scrabble-punten ervan te berekenen

echo "Hier u punten bing bing $punten!!!";

// Q 10 punten
// U 4 punten
// O 1 punt
// T 2 punten
// E 1 punt
// R 2 punten
// I 1 punt
// N 1 punt
// G 3 punten


?>
