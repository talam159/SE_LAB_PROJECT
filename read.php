
<style>
	table{
		border-collapse: collapse;
		width: 100%;
		color: #588c7e;
		font-family: monospace;
		font-size: 20px;
		text-align: left;

	}
	th{
		background-color: #588c7e;
		color: white;
	
	}
	tr:nth-child(even){background-color: #f2f2f2;}
</style>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM booking" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>customerName</th> <th>email</th> <th>phone</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $customerName </td>";
		echo "<td> $email </td>";
		echo "<td> $phone </td>";
		echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$id&customerName=$customerName&email=$email&phone=$phone'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>