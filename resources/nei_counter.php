<?php
include_once 'connection.php';
include_once 'functions.php';

/*
 * Query "speichern" um Daten einzutragen
 * (nei)
 */
$speichern = "INSERT INTO count (ip, counter, ja, nei)
		VALUES ('$ip', 0, 0, 1)";
$conn->query ($speichern);

$conn->close();
header("Location: /TimNei");
?>