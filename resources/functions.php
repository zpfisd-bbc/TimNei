<?php

/*
 * Query um die IP auszulesen
 */
$getIP = "SELECT ip, time FROM count where ip = '127.0.0.1' ORDER BY ID DESC LIMIT 1";

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