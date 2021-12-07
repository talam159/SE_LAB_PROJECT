
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
		margin-top: 20px;
		
		
		
</style>

<h1>Create Record</h1>



<form method=get action=create_result.php>

	customerName: <input type=text name=customerName> <br>

	<p>

	email: <input type=text name=email> <br>

	<p>
	phone: <input type=text name=phone> <br>

	<input type=submit value=Insert>

</form>