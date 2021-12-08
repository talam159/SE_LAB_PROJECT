<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM booking" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>office_name</th> <th>start_date</th> <th>place</th> <th>email</th> <th>number</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $office_name </td>";
		echo "<td> $start_date </td>";
		echo "<td> $place </td>";
		echo "<td> $email </td>";
		echo "<td> $number </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
?>