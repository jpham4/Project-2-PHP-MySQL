
<?php

session_start();

$host ='localhost';
$user = 'root';
$pass ='';
$db = "project2";

$center = "center";

$username = $_SESSION['username'];
$level_clear = $_SESSION['clearance'];

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


echo "<h1 align = $center > Welcome, $username </h1>";
echo "<h2 align = $center > Clearance Level : $level_clear  </h2>";


?>