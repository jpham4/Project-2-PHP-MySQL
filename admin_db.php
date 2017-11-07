<?php require_once("admin_db_connection.php"); ?>
<?php
	$db_link = db_connect("schowdhury13");
	$query = "SELECT * FROM mainInventory";
	$result = mysql_query($query)
		or die("SQL Query failed");

	$fields = mysql_list_fields("schowdhury13", "mainInventory");
	$num_columns = mysql_num_fields($fields);

echo '<table border="1">', "\n";
echo "<tr>\n";
for($i = 0; $i < $num_columns; $i++)
{
	echo "<th>", mysql_field_name($fields, $i),
		"</th>\n";
}
echo "</tr>\n";
while($num_rows = mysql_fetch_assoc($result))
{
	echo "<tr>\n";
	foreach ($num_rows as $col_value)
	{
		echo "<td>$col_value</td>\n";
	}
	echo "</tr>\n";
}
echo "</table>\n";

mysql_free_result($result);
mysql_close($db_link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administration Database</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom CSS for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>

<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="project2welcome.php">Project 2 PHP/MySQL</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExampleDefault">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="project2welcome.php">Welcome <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_db.php">Inventory</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Login</strong></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li class="nav-item dropdown hidden-md-down">
                            <div class="row">
                                <div class="col-md-12">
                                    Login
                                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="clearance">Clearance</label>
                                            <input type="number" class="form-control" id="clearance" placeholder="Clearance" required>
                                        </div>
                                        <div class="form-group">
                                            <a href="welcome.php" type="submit" class="btn btn-primary btn-block">Sign in</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="bottom text-center">
                                    New here ? <a href="register.php"><b>Join Us</b></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="register.php" class="btn btn-primary" role="button"><strong>Sign Up</strong></a></li>
            </ul>
        </div>
    </nav>
</div>

</body>
</html>
