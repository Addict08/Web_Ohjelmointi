<?php
$tuntipalkka = $_POST["tuntipalkka"] ?? 0;
$tuntimaara = $_POST["tuntimaara"] ?? 0;
$yhteispalkka = $tuntipalkka * $tuntimaara;
echo "Yhteispalkka: " . $yhteispalkka;
$Viikonloppulisa = $_POST["viikonloppulisa"] ?? 0;
$Viikonloppu_maara = $_POST["viikonloppu_maara"] ?? 0;
$Viikonlisa_maara = $viikonloppulisa * $viikonloppu_maara;
echo "Viikonloppulisä: " . $Viikonlisa_maara;
?>