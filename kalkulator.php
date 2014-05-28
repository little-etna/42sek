<?php
// Ovo je naš kalkulator

$kolichina_podataka = 700; // mjerna jedinica je MB
$brzina_prijenosa = 4 * 1024; // mjerna jedinica su kbps

$transformacija_megabajta_u_kilobajte = 1024; // jedna mega ima 1024 kilobajta
$transformacija_bitova_u_bajtova = 8;

$vrijeme_potrebno_za_download; // Ovo je podatak koji tražimo ;)

/**
 * 
 * vrijeme potrebno za download je jednako količini podataka podijeljeno
 * sa brzinom prijenosa.
 * 
 * */

$vrijeme_potrebno_za_download = 
($kolichina_podataka * $transformacija_megabajta_u_kilobajte) / 
($brzina_prijenosa / $transformacija_bitova_u_bajtova);

echo "Vrijeme potrebno za dawnload je: " . $vrijeme_potrebno_za_download / 60 . " minuta."
?>
