<?php
//header("refresh:10; Location:project2_loginpage.php");

$center = "center";
echo "<h1 align = $center >Account does not exists </h1>";
echo "<h2 align = $center > Returning to login page ...  </h2>";

header( "refresh:5;url=project2_loginpage.php" );
?>
