<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $date = $_POST["date"];
    $event = $_POST["event"];
    
    if (!empty($date) && !empty($event)) {
        $entry = "$date ; $event\n";
        file_put_contents("events.txt", $entry, FILE_APPEND);
        echo "Erfolg";
    } else {
        echo "Fehler: Ungültige Eingabe.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>
