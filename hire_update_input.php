<?php

$id = $_GET["id"];
$office_name = $_GET["office_name"];
$start_date = $_GET["start_date"];
$place = $_GET["place"];
$email = $_GET["email"];
$salary = $_GET["salary"];

?>

<h1>Update Record</h1>

<form method=get action=hire_update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	Office Name: <input type=text name=office_name value='<?php echo $office_name; ?>'>

	<p>
	Start Date: <input type=date name=start_date value='<?php echo $start_date; ?>'>

	<p>	
	Place: <input type=text name=place value='<?php echo $place; ?>'>

	<p>	

	Email: <input type=email name=email value='<?php echo $email; ?>'>

	<p>
	Salary: <input type=number name=salary value='<?php echo $salary; ?>'>

	<p>	

	<input type=submit value=Update>

</form>