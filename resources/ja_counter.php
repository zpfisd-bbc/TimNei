<?php
$mysqli = new mysqli ( "localhost", "root", "", "timnei", "3307" );

$user_ip = getUserIP();
$ip=getUserIP();
$result ="SELECT `time` FROM `count` WHERE ip='$ip'";

$mysqli->query ( $result );

$speichern = "INSERT INTO `count`(`count`, `ip`) VALUES (1,'".$user_ip."')";

$mysqli->query ( $speichern );

echo $result;




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

