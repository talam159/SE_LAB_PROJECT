<?php

	$id = $_GET["id"];

	// $status = $_GET["status"];
	$status = 'ACCEPTED';

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "UPDATE BOOKING SET status='$status' WHERE id = $id")

		or die("Can not execute query");

	echo "thanks for consider your time<br>";

?>