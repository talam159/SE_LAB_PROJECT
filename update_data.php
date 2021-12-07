<?php
	$student_id = $_GET["student_id"];
	$student_dept = $_GET["student_dept"];
	$student_name = $_GET["student_name"];
	$student_nid = $_GET["student_nid"];
	$student_birth = $_GET["student_birth"];
	$student_address = $_GET["student_address"];
?>



<h1>Update Record</h1>



<form method=get action=update_result.php>


	<input type=hidden name=student_id value='<?php echo $student_id; ?>'> <br>

	Student Dept: <input type=text name=student_dept> <br>
	<p>
	student name: <input type=text name=student_name> <br>
	<p>
	student nid: <input type=number name=student_nid> <br>
	<p>
	student birth: <input type=date name=student_birth> <br>
	<p>
	student address: <input type=text name=student_address> <br>
	<p>
	<input type=submit value=Insert>

</form>