<?php

echo '<script type="text/javascript" language="javascript" src="javascripts/myScript.js"></script>'; 
echo '<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>'; 

echo '<script>
	$(function() {
	
		$("#login-error").hide();
		
	});
	</script>
	';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{

echo '<script>
	$(function() {
	
		$("#login-error").hide();
		
	});
	</script>
	';

$servername = "localhost";
$username = "root";
$password = "";  
$db = "test"; 
$conn = new mysqli($servername, $username, $password, $db); 

$username = $_POST["username"];
$password = $_POST["password"]; 


$sql = 'SELECT * FROM users WHERE username= "'.$username.'" AND password = "'.$password.'"';
//$sql = 'INSERT INTO users (username,password) Values ("admin", "adminadmin")';
//$sql = 'SELECT * FROM users WHERE username = "admin" AND password ="adminadmin"'; 
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	
	echo '<script>
	$(function() {
	
		$("#login-error").hide();
		
	});
	</script>
	';
	header('Location: addUser.php');
	die; 
}
else
{
	echo '<script>
	$(function() {
	
		$("#login-error").show();
		
	});
	</script>
	';
}



}

?>

<html>
<head>
<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/myScript.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/login.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheets/myStyle.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" />
<link rel="icon" type="image/png" href="images/favicon.ico">
<img id ="banner" src="banner.gif" alt="Banner Image"/>

</head>


<body>
<h1 align="center"id="login-heading">LOGIN</h1>
<br>
<form align="center" action="k.php" method="post">
Username: <input type="textbox" id="username" name="username"><br>
<br>
Password: <input type="password" id="password" name ="password"><br>
<br>
<p class="error_message" id="login-error">Incorrect login details </p>
<input type ="submit" value="login" class="btn" id="login-btn">


</form>


</body>




</html>

