<?php
$conn = new mysqli ( "localhost", "root", "", "timnei", "3306" );

$ip = getUserIP();
/*
 * Query "speichern" um Daten einzutragen
 * (nei)
 */
$speichern = "INSERT INTO count (ip, counter, ja, nei)
VALUES ('$ip', 0, 0, 1)";
$conn->query ($speichern);

function getUserIP() {
	if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
		if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
			$addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
			return trim($addr[0]);
		} else {
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
	}
	else {
		return $_SERVER['REMOTE_ADDR'];
	}
}

$conn->close();
?>