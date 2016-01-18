<?php 

	// Gebruikersnaam, wachtwoord van de database etc ophalen
	require_once '../includes/config.php' ;
	// Maak de database connectie
	require_once '../includes/database.php';


	// include '../models/get_klas.php';
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/top3.css">
</head>
<body>

	<div id="top3">
		<p style="font-weight: bolder;">Top 3</p><select>
			<option>Kleinste leerlingen</option>
			<option>Langste leerlingen</option>
			<option>Oudste leerlingen</option>
			<option>Jongste leerlingen</option>
		</select>
	</div>

</body>
</html>