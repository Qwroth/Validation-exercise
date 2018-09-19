<?php
$servername = "localhost";
$username = "root";
$password = "";  
$db = "test"; 
$conn = new mysqli($servername, $username, $password, $db); 

$username = $_GET['username'];

$sql = 'SELECT * FROM users WHERE username = "'.$username.'"';

$result = $conn->query($sql);

if($result->num_rows > 0) {
	echo "User already exists";
} else {
	echo "user not found";
}



?>