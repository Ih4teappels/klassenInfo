<?php 


	// $connection = "SELECT * FROM klasseninfo";

	// $sqldata = mysqli_query($mysqli,$connection);

	// // $result = $mysqli->query($query);

	// $rows = array();

	// while($r = mysqli_fetch_assoc($sqldata)) {
	// 	$rows = $r;
	// }

	// print json_encode($rows);


	$sth = mysqli_query($mysqli,"SELECT * FROM klasseninfo");
	$rows = array();
	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}
	print json_encode($rows);

?>