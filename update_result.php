<?php

	$id = $_GET["id"];

	$customerName = $_GET["customerName"];

	$email = $_GET["email"];
	$phone = $_GET["phone"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE booking SET customerName='$customerName', email='$email' , phone='$phone' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br>  customerName= $customerName <br> email = $email  <br> phone = $phone";



	echo "<p><a href=read.php>READ all records</a>";

?>