<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "supplyManagment";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else 
{}
$sql = "use $dbname";
if ($conn->query($sql) === TRUE) {}
else {
    echo "Error creating table: " . $conn->error;
}
	
?>