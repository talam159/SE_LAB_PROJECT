<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM student" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>student_dept</th> <th>student_birth</th> <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $student_dept </td>";
		echo "<td> $student_birth </td>";
		echo "<td> <a href = 'delete.php?student_id=$student_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?student_id=$student_id&student_dept=$student_dept&student_name=$student_name&student_nid=$student_nid&student_birth=$student_birth&student_address=$student_address'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>