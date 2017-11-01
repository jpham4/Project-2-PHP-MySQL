<!DOCTYPE html>
<html>
<head>
	<h1 align="center"> Project2</h1>
	<title></title>
	<style type="text/css">
		
		table {
    width: 200px;
    margin-left: auto;
    margin-right: auto;
    margin-top: auto;
    margin-bottom: auto;
	}

	.wrapper{
		text-align: center;
	}

	button{
		position: absolute;
		top: 50%;
		
	}

	</style>
</head>
<body>
	<form method="post" action="login.php">
	<table >
		<tr>
			<td><label> Username</label></td>
			<td><input type="text" name="Username"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="text" name="Password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="Submit"></td>
			<td><input type="reset" name="Reset"> </td>
		</tr>
		<tr>

		</tr>


	</table>
	</form>


	<div>
		
<p align="center">
	
	<input type="button" value="Create New Account" onclick="window.location.href='register.php'" />

</p>



	</div>
	

	
    

</body>
</html>