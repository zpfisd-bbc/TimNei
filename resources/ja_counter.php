<?php
include_once 'connection.php';
include_once 'functions.php';

/*
 * Query "speichern" um Daten einzutragen
 * (ja)
 */
$speichern = "INSERT INTO count (ip, counter, ja, nei) 
		VALUES ('$ip', 0, 1, 0)";
$conn->query ($speichern);

$conn->close();
header("Location: /TimNei");
?>