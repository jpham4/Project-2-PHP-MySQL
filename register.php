
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
form { 
	margin: 0 auto; 
	width:300px;
}

#td1{

	height: 100%;
	width: 100%;
	display: table;
}

#td2{

	vertical-align: middle;
	display: table-cell;
	height: 100%;
}
#tbl{

	margin: 0 auto;
	
}
</style>
<body>
	<p align="center">

		<form method="post" action="register_back.php" >
		<table id="tbl"  >
			<tr>
				<td><label> Username: </label></td>
				<td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td><label> Password: </label></td>
				<td><input type="text" name="password" /></td>
			</tr>
			<tr>
				<td><label> Clearance Code: </label></td>
				<td><input type="text" name="code" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Create new Account" /></td>
			</tr>
		</table>
		</form>
	
	</p>

</body>
</html>

