<!-- ** CSS ** -->
<link rel="stylesheet" type="text/css" href="../css/theme.css" />

<?php
include_once 'connection.php';
include_once 'functions.php';

/*
 * Query "speichern" um Daten einzutragen
 * (nei)
 */
$speichern = "INSERT INTO count (ip, ja, nei, jahr, monat, tag, stunde, minute, sekunde) 
		VALUES ('$ip', 0, 1, '$jahr', '$monat', '$tag', '$stunde', '$minute', '$sekunde')";

if ($totalQ + 300 >= $total) {
} elseif ($totalQ + 300 <= $total) {
	$conn->query ( $speichern );
	$conn->close ();
}

if ($totalQ + 300 >= $total) {
	?>
	<div class="alert alert-dismissible alert-danger alertTim">
		<button type="button" class="close" data-dismiss="alert">x</button>
		<strong>Oh nei!</strong> <a href="#" class="alert-link">Wart 5 Minute
		</a> und probiers nomal!
	</div>
	<?php
} else {
	?>
	<div class="alert alert-dismissible alert-success alertTim">
		<button type="button" class="close" data-dismiss="alert">x</button>
		<strong>Yey!</strong> Du hesh erfolgrich<a href="#"
			class="alert-link"> abgstumme.</a>.
	</div>
	<?php
}

header ( 'Refresh: 5; URL=/timnei' );
?>