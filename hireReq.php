<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM booking" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>Office Name</th> <th>Start Date</th> <th>Place</th> <th>Email</th> <th>Salary</th> <th>Delete</th> <th>Update</th>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $office_name </td>";
		echo "<td> $start_date </td>";
		echo "<td> $place </td>";
		echo "<td> $email </td>";
		echo "<td> $salary </td>";
		echo "<td> <a href = 'hire_delete.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$id'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
?>