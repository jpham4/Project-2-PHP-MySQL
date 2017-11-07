<?php require_once("admin_db_connection.php"); ?>
<html>
<head>
<title>
	Inventory
</title>
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
</body>
</html>
