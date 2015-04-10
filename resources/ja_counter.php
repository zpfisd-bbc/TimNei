<?php
include_once 'connection.php';
include_once 'functions.php';


$success = false;
$fail = false;

/*
 * Query "speichern" um Daten einzutragen
 * (ja)
 */
$speichern = "INSERT INTO count (ip, ja, nei, jahr, monat, tag, stunde, minute, sekunde) 
		VALUES ('$ip', 1, 0, '$jahr', '$monat', '$tag', '$stunde', '$minute', '$sekunde')";

if ($totalQ + 1200 >= $total) {
	static $fail = true;
} else {
	echo "GO";
	$conn->query ($speichern);
	$conn->close();
	$success = true;
}

echo $success;
?>