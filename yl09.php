<?php

// 1. Tervitus
$nimi = "mARiO";
echo "Tere, " . ucfirst(strtolower($nimi)) . "!";
echo "<br>";

// 2. Punktid tähtede vahele
$sona = "stalker";
$tulemus = "";

for ($i = 0; $i < strlen($sona); $i++) {
    $tulemus .= strtoupper($sona[$i]) . ".";
}

echo $tulemus;
echo "<br>";

// 3. Ropud sõnad tärnidega
$tekst = "Sa oled täielik pepu";
echo str_replace("pepu", "****", $tekst);
echo "<br>";

// 4. Emaili tegemine
$eesnimi = "Ülle";
$perenimi = "Doos";

$eesnimi = strtolower($eesnimi);
$perenimi = strtolower($perenimi);

$eesnimi = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), $eesnimi);
$perenimi = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), $perenimi);

$email = $eesnimi . "." . $perenimi . "@hkhk.edu.ee";
echo $email;

?>