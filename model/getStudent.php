<?php

	// Gebruikersnaam, wachtwoord van de database etc ophalen
	require_once '../includes/config.php' ;
	// Maak de database connectie
	require_once '../includes/database.php';

$sth = mysqli_query($mysqli,"SELECT * FROM klasseninfo");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}

echo json_encode($rows);
	