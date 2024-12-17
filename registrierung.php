<?php
// Wir empfangen den http Header mit Formularfeldern die mit Namen identifiziert werden
$username = $_POST['user'];
$emailadresse = $_POST['email'];
$passwort = $_POST['passwort'];
// csv Datei mit alle registrierten Personen
// Aus drei mach eins
$userdaten = array($username, $emailadresse, $passwort);
// csv Zeile erstellen inkl. Zeilenende
$userzeile = implode(";", $userdaten)."\r\n";
// Speichern
$dateinamen = "users.txt";
file_put_contents($dateinamen, $userzeile, FILE_APPEND);
echo "$userzeile gespeichert";
?>