<?php

	$id = $_GET["id"];
	$office_name = $_GET["office_name"];
	$start_date = $_GET["start_date"];
	$place = $_GET["place"];
	$email = $_GET["email"];
	$number = $_GET["number"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE booking SET office_name='$office_name', start_date='$start_date', place='$place', email='$email', number='$number' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> office_name=$office_name <br> start_date=$start_date <br> place=$place <br> email=$email <br> number=$number";



	echo "<p><a href=hireReq.php>READ all records</a>";

?>