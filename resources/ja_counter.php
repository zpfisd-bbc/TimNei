<?php
include_once 'connection.php';
include_once 'functions.php';

/*
 * Query "speichern" um Daten einzutragen
 * (ja)
 */
$speichern = "INSERT INTO count (ip, ja, nei, jahr, monat, tag, stunde, minute, sekunde) 
		VALUES ('$ip', 1, 0, '$jahr', '$monat', '$tag', '$stunde', '$minute', '$sekunde')";
$conn->query ($speichern);

$conn->close();
header("Location: /TimNei");
?>