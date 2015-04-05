<?php
$conn = new mysqli ( "localhost", "root", "", "timnei", "3306" );

$user_ip = getUserIP();
$ip=getUserIP();

//$result ="SELECT 'time' FROM 'count' WHERE ip='$ip'";
//$mysqli->query ( $result );

/*
 * Query "speichern" um Daten einzutragen
 * (ja)
 */
$speichern = "INSERT INTO count (ip, counter, ja, nei) 
		VALUES ('$ip', 0, 1, 0)";
$conn->query ($speichern);

/*
 * Query "getNei" um Anzahl Nei abzufragen
 */
$getNei = "SELECT counter FROM count 
		WHERE nei = 1 order by id desc limit 1";
$conn->query ($getNei);

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