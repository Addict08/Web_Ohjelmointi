<?php
// Haetaan lomakkeelta tulevat tiedot
$tuntipalkka = (float) ($_POST["tuntipalkka"] ?? 0);
$tuntimaara = (float) ($_POST["tuntimaara"] ?? 0);
$viikonloppulisa = (float) ($_POST["viikonloppulisa"] ?? 0);
$viikonloppu_maara = (float) ($_POST["viikonloppu_maara"] ?? 0);

// Lasketaan
$yhteispalkka = $tuntipalkka * $tuntimaara;
$viikonloppupalkka = $viikonloppulisa * $viikonloppu_maara;
$kokonaispalkka = $yhteispalkka + $viikonloppupalkka;

// Tulostus
echo "Yhteispalkka (arki): " . $yhteispalkka . " €<br>";
echo "Viikonloppupalkka: " . $viikonloppupalkka . " €<br>";
?>
