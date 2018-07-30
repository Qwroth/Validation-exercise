<?php

$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";  
$db = "test"; 
$conn = new mysqli($servername, $username, $password, $db); 

$sql = 'DELETE FROM users WHERE ID ="'. $id .'"'; 

$result = $conn->query($sql);

header('Location: register.php');

?>