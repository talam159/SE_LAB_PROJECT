<?php

	$id = $_GET["id"];
	$customerName = $_GET["customerName"];
	$email = $_GET["email"];
	$phone = $_GET["phone"];

?>
<style>
	form{
		border-collapse: collapse;
		width: 100%;
		color: #588c7e;
		font-family: monospace;
		font-size: 30px;
		text-align: left;

	}
	h1{
		color: #588c7e;
	}
	input{
		height: 50px;
		width: 350px;
		font-size: 20px;
		
		
		
</style>


<h1>Update  show Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	customerNmae: <input type=text name=customerName value='<?php echo $customerName; ?>'>

	<p>

	email: <input type=text name=email value='<?php echo $email; ?>'>

	<p>
	phone: <input type=text name=phone value='<?php echo $phone; ?>'>

	<input type=submit value=Update>

</form>