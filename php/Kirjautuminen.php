    <?php
// Tarkistetaan onko lomake lähetetty
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $passWord = $_POST['password'];

// Tarkistetaan käyttäjätunnus ja salasana
    if ($user === "admin" && $passWord === "password") {
            // Kirjautuminen onnistui
                echo "Tervetuloa Admin";
                echo "Sinut ohjataan palkkalaskuriin muutaman sekunnin kuluttua...";
            // Ohjataan käyttäjä palkkalaskuriin 2 sekunnin kuluttua
                echo '<meta http-equiv="refresh" content="2;url=palkkalaskuri.php">';
    } if ($user !== 'admin' || $passWord !== 'password')  {
            // Kirjautuminen epäonnistui
                echo "Väärä käyttäjätunnus tai salasana";
    }
    exit();
}
?>