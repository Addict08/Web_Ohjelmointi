<?php
$tuntipalkka = $_POST["tuntipalkka"] ?? 0;
$tuntimaara = $_POST["tuntimaara"] ?? 0;
$yhteispalkka = $tuntipalkka * $tuntimaara;
echo "Yhteispalkka: " . $yhteispalkka;
$Viikonloppulisa = $_POST["Viikonloppulisa"] ?? 0;
$Viikonloppu_maara = $_POST["Viikonloppu_maara"] ?? 0;
$Viikonloppulisä = $Viikonloppulisa * $Viikonloppu_maara;
echo "Viikonloppu palkka: " . $Viikonloppulisä;
?>