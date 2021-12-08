<?php

	$office_name = $_GET["office_name"];
	$start_date = $_GET["start_date"];
	$place = $_GET["place"];
	$email = $_GET["email"];
	$number = $_GET["number"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO booking VALUES ( '', '$office_name', '$start_date' , '$place', '$email' , '$number'  )" )

		or die("Can not execute query");



	echo "Record inserted <br>  wait for the furture information"

?>