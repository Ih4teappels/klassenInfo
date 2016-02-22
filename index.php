<?php 

	// Gebruikersnaam, wachtwoord van de database etc ophalen
	require_once 'includes/config.php' ;
	// Maak de database connectie
	require_once 'includes/database.php';
	include 'views/header.html';
	include 'views/rad.html';
	include 'views/top3.html';
	include 'views/eyecolour.html';
//	include 'models/get_klas.php';
	include 'views/footer.html';
?>

<html>
<head>
	<title></title>
</head>
<body>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
	<script src="app/models/StudentsModel.js"></script>
	<script src="app/views/RandomStudentView.js"></script>
	<script src="app/app.js"></script>
	<script src="js/util/HttpRequest.js"></script>
	<script src="js/main.js"></script>

</body>

</html>