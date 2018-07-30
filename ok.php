<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{

$servername = "localhost";
$username = "root";
$password = "";  
$db = "test"; 
$conn = new mysqli($servername, $username, $password, $db); 

$username = $_POST["username"];
$password = $_POST["password"];


$sql = 'SELECT * FROM users WHERE username= " ' . $username . ' " AND password = " ' . $password . ' " '  ;
$result = $conn->query($sql);

if($result->num_rows >0)
{
	header('Location: addUser.php');
	
}


}

?>




<html>
<head>
<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/myScript.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheets/myStyle.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" />
<link rel="icon" type="image/png" href="images/favicon.ico">
<img id ="banner" src="banner.gif" alt="Banner Image"/>


</head>



<body>
<h1 align="center">LOGIN</h1>
<br>

<form align="center" action="ok.php" method="post">
Username: <input type="textbox" id="username" name="username"><br>
<br>
Password: <input type="password" id="password" name ="password"><br>
<br>
<input type ="submit" value="login" class="btn">


</form>


</body>




</html>

