
<?php
require("constants.php");
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "sasuken27.";
$dbName = "incorem";


$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die(mysqli_error());
	mysqli_select_db($conn,$dbName) or die("Cannot select DB");
	
	?>