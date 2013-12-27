<?php
	define ('DB_HOST', $_SERVER["DB1_HOST"]);
	define ('DB_USER', $_SERVER["DB1_USER"]);
	define ('DB_PASSWORD', $_SERVER["DB1_PASS"]);
	define ('DB_NAME', $_SERVER["DB1_NAME"]);
	define ('DB_PORT', $_SERVER["DB1_PORT"]);

	$db = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);

	$query = $db->prepare("
		SELECT ID, guid
		FROM wp_posts
	");

	$query->execute();

	$results = $query-fetchAll(PDO::FETCH_OBJ);

	echo json_encode($results);
?>