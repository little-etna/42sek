<?php
// array sa imenima filmova
// nakon čega bi sortirala taj array po naslovima kronološki po abecedi

$array_filmova = array ("Lepotica i Zver", "Brži i žešći", "Poštar uvijek šprica dva put", 
"Brzi i zesci");

//var_dump($array); // VAR_DUMP je mnogo sočna stvar-proučiti VAR_DUMP

//sort($array);
//var_dump($array);

$moje_polje = array ();

foreach ($array_filmova as $film)
{
	$moje_polje[strlen($film)] = $film;
	echo strlen ($film) . " ";
} 

var_dump($moje_polje);

ksort($moje_polje);

var_dump($moje_polje);

$pekijevo_polje = array();

foreach ($moje_polje as $item)
{
	array_push($pekijevo_polje, array_pop($moje_polje));
}

var_dump($pekijevo_polje);

// Imenovanje varijabli je bitno jer je svaki programer mazohist
// U slučaju da zna gdje živiš i ima moment slabosti
// He will find you and execute you

?>
