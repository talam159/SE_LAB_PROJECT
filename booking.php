<?php

	$events = $_events["f0"];

	$date = $_date["f0"];

	$place = $_place["f0"];

	$email = $_email["f0"];

	$phone = $_phone["f0"];



	// $f1 = $_GET["f1"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO music VALUES ( '', '$events', '$date', '$place', '$email', '$phone', )" )

		or die("Can not execute query");



	echo " recorded ";
	
	<div class="page">
		<h2> data saved !  </h2>
		<h3>Wait for the confirmation ! </h3>
	</div>
