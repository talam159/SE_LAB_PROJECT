<style>
	p{
		
		color: black;
		font-family: monospace;
		font-size: 30px;
		text-align: left;

	}
	
		
		
</style>

<?php

	$customerName = $_GET["customerName"];
    $email = $_GET["email"];
	$phone = $_GET["phone"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO booking VALUES ( '', '$customerName', '$email','$phone' )" )

		or die("Can not execute query");



	echo "<p>Record inserted:<br> customerName = $customerName <br> email = $email <br> phone = $phone </p>";



	echo "<p><a href=read.php>Read All  Details</a></P>";

?>