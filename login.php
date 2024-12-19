<?php
// Wir empfangen den http Header mit Formularfeldern die mit Namen identifiziert werden geändert
$username = $_POST['user'];
$passwort = $_POST['passwort']."\r\n";
$dateinamen = "users.txt";
$userliste = file($dateinamen);
foreach ($userliste as $user) {
    $userdaten = explode(";", $user);
    if ($userdaten[0] == $username AND $userdaten[2] == $passwort) {
        echo "$username eingeloggt";
    }
}
?>