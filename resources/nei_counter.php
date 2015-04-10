<?php
include_once 'connection.php';
include_once 'functions.php';


$success = false;
$fail = false;

/*
 * Query "speichern" um Daten einzutragen
 * (nei)
 */
$speichern = "INSERT INTO count (ip, ja, nei, jahr, monat, tag, stunde, minute, sekunde) 
		VALUES ('$ip', 0, 1, '$jahr', '$monat', '$tag', '$stunde', '$minute', '$sekunde')";

if ($totalQ + 1200 >= $total) {
	$fail = true;
} elseif ($totalQ + 300 <= $total) {
 	$conn->query ($speichern);
 	$conn->close();
 	$success = true;
}

header("Location: /TimNei");
?>