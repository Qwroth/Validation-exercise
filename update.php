<?php

$id = $_POST['userID'];
$name = $_POST['form_username'];
$email = $_POST['form_email']; 
$dob = $_POST['form_dob']; 
$pass = $_POST["form_password"]; 

$servername = "localhost";
$username = "root";
$password = "";  
$db = "test"; 
$conn = new mysqli($servername, $username, $password, $db); 

$sql = 'UPDATE users SET username="'.$name.'", email = "'.$email.'", dob= "'.$dob.'", password= "'.$pass.'"   where ID = "'.$id.'"'; 

$result = $conn->query($sql);

header('Location: register.php');

?>