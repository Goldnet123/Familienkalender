<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $date = $_POST["date"] ?? "";
    $event = $_POST["event"] ?? "";

    if (!empty($date) && !empty($event)) {
        $entry = "$date ; $event\n";
        if (file_put_contents("events.txt", $entry, FILE_APPEND)) {
            echo "Erfolg: Ereignis gespeichert!";
        } else {
            echo "Fehler: Konnte nicht in events.txt schreiben!";
        }
    } else {
        echo "Fehler: Ungültige Eingabe!";
    }
} else {
    echo "Fehler: Ungültige Anfrage!";
}
?>
