<?php
session_start();

$login_user = $_POST["Username"];
$login_pass = $_POST["Password"];
$login_clearance;
$eval_clearance;


$host ='localhost';
$user = 'root';
$pass ='';
$db = "project2";

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully \r\n";

// Get the table 
$sql = "SELECT id,username, password, clearance FROM login";


$result = $conn->query($sql);
$checked = 0;

//$row = $result->fetch_assoc();

while($row = $result->fetch_assoc()) {
	if($row["username"] == $login_user && $row["password"]){
		$checked = 1;
		$eval_clearance = $row["clearance"];
		break;
	}       
}
// Check to get the clearance level that the 
if($checked == 1){
	if($eval_clearance == 0){
		$login_clearance = "Admin";
	}
	else if($eval_clearance == 1){
		$login_clearance = "Employee";
	}
	else if($eval_clearance == 2){
		$login_clearance = "Guest";
	}

	$_SESSION['username'] = $login_user;
	$_SESSION['clearance'] = $login_clearance;
	header("Location:welcome.php");
}else{
	header("Location:NoAccount.php");
}








?>