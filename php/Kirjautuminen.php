<?php
// Tarkistetaan onko lomake lähetetty
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['admin'];
    $passWord = $_POST['Kissa123'];
        // Tarkistetaan käyttäjätunnus ja salasana
        if ($user === "admin" && $passWord === "Kissa123") {
            // Kirjautuminen onnistui
            echo "<p>Tervetuloa Admin</p>";
            echo "<p>Sinut ohjataan palkkalaskuriin muutaman sekunnin kuluttua...</p>";
            // Ohjataan käyttäjä palkkalaskuriin 2 sekunnin kuluttua
            echo '<meta http-equiv="refresh" content="2;url=palkkalaskuri.php">';
        }
        // Tarkistetaan, jos käyttäjätunnus tai salasana on väärä
        if ($user !== "admin" || $passWord !== "Kissa123") {
            echo "Väärä käyttäjätunnus tai salasana";
        }   
        exit();
    }
?>