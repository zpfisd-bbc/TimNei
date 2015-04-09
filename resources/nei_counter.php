<?php
include_once 'connection.php';
include_once 'functions.php';

/*
 * Query "speichern" um Daten einzutragen
 * (nei)
 */
$speichern = "INSERT INTO count (ip, ja, nei, jahr, monat, tag, stunde, minute, sekunde) 
		VALUES ('$ip', 0, 1, '$jahr', '$monat', '$tag', '$stunde', '$minute', '$sekunde')";
$conn->query ($speichern);

$conn->close();
header("Location: /TimNei");
?>