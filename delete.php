<?php

	$id = $_GET["id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM booking WHERE id=$id" )

		or die("Can not execute query");

	echo "thanks for consider your time<br>";

?>