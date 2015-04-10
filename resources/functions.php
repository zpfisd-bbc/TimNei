<?php
include_once 'connection.php';

$success = false;
$fail = false;

$ip = getUserIP ();

/*
 * Query um die IP auszulesen
 */
$getLastEntry = "SELECT ip, jahr, monat, tag, stunde, minute, sekunde FROM count where ip = '$ip' ORDER BY ID DESC LIMIT 1";

$resultsL = $conn->query ( $getLastEntry );
$resultsL = $resultsL->fetch_array ();

$jahr = date ( "y" );
$monat = date ( "m" );
$tag = date ( "d" );
$stunde = date ( "h" );
$minute = date ( "i" );
$sekunde = date ( "s" );

$total = $jahr * 12 * 30 * 24 * 60 * 60 + $monat * 30 * 24 * 60 * 60 + $tag * 24 * 60 * 60 + $stunde * 60 * 60 + $minute * 60 + $sekunde;
$totalQ = $resultsL["jahr"] * 12 * 30 * 24 * 60 * 60 + $resultsL["monat"] * 30 * 24 * 60 * 60 + $resultsL["tag"] * 24 * 60 * 60 + $resultsL["stunde"] * 60 * 60 + $resultsL["minute"] * 60 + $resultsL["sekunde"];

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
	if (array_key_exists ( 'HTTP_X_FORWARDED_FOR', $_SERVER ) && ! empty ( $_SERVER ['HTTP_X_FORWARDED_FOR'] )) {
		if (strpos ( $_SERVER ['HTTP_X_FORWARDED_FOR'], ',' ) > 0) {
			$addr = explode ( ",", $_SERVER ['HTTP_X_FORWARDED_FOR'] );
			return trim ( $addr [0] );
		} else {
			return $_SERVER ['HTTP_X_FORWARDED_FOR'];
		}
	} else {
		return $_SERVER ['REMOTE_ADDR'];
	}
}
?>