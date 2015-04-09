<?php
include_once 'connection.php';

$ip = getUserIP();

$jahr = date("y");
$monat = date("m");
$tag = date("d");
$stunde = date("h");
$minute = date("i");
$sekunde = date("s");

/*
 * Query um die IP auszulesen
 */
$getLastEntry = "SELECT ip, time FROM count where ip = '$ip' ORDER BY ID DESC LIMIT 1";

/*
 * Query um Anzahl NEI aus DB auszulesen
 */
$getNei = "SELECT count(nei) from count where nei = 1";

/*
 * Query um Anzahl JA aus DB auszulesen
 */
$getJa = "SELECT count(ja) from count where ja = 1";

/**
 * Funktion um die IP des aktuellen Besuchers zu ermitteln
 */
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

function validator() {
	$resultsL = $conn->query($getLastEntry);
	$resultsL = $resultsL->fetch_array();
	
	if ($ip == $resultsL) {
	}
}
?>