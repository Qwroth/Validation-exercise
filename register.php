







<html>
<head>

<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/myScript.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" />

<img id ="banner" src="banner.gif" alt="Banner Image"/>
<link rel="icon" type="image/png" href="images/favicon.ico">
<title></title>



<script> 
	$(document).ready(function(){
	$(".delete-link")
	.click(function() {
		var r = confirm("are you sure you wish to delete this user?"); 


		if (r==true)
		{
			return true;
		}
		else
		{
			return false; 
		}

	}); 

	$(".modify-link")
	.click(function() {
		var r = confirm("are you sure you wish to modify this user?"); 


		if (r==true)
		{
			return true;
		}
		else
		{
			return false; 
		}

	}); 
}); 
</script>
</head>

<body>



<h1 align ="center">The form has been submitted, no errors!</h1>
<br>
<br>


</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";  
$db = "test"; 
$conn = new mysqli($servername, $username, $password, $db); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


$username = $_POST["form_username"];
$email = $_POST["form_email"];
$dob = $_POST["form_dob"];
$password = $_POST["form_password"];


$sql = 'INSERT INTO users (username, email, dob, password) Values ("' .$username.'", "'.$email.'", "'.$dob.'","'.$password.'" )'; 

$result = $conn->query($sql); 
header('Location: register.php');

}

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	echo '<table class="table">'; 
	echo "<tr>";
	echo "<th>ID</th>"; 
	echo "<th> Username  </th>"; 
	echo "<th> Email </th>"; 
	echo "<th> Date of birth </th>";
	echo "<th> Password</th>";
	echo "<th> Delete</th>";
	echo "<th> Modify</th>";
	echo "</tr>"; 

	while($row = $result->fetch_assoc())
	{
		
		echo "<tr>";
		echo "<td>";
		echo $row["ID"];
		echo "</td>";
		echo "<td>";
		echo $row["username"];
		echo "</td>"; 
		echo "<td>";
		echo $row["email"];
		echo "</td>"; 
		echo "<td>";
		echo $row["dob"];
		echo "</td>"; 
		echo "<td>";
		echo $row["password"];
		echo "</td>"; 
		echo "<td>";
		echo  "<a id='delete-btn'class='delete-link' href='delete.php?id=".$row['ID']."'>Delete</a>";
		

		
		echo "</td>"; 
		echo "<td>";
		echo  "<a id='update-btn'class='modify-link' href='modify.php?id=".$row['ID']." & username=".$row['username']." & password=".$row['password']." & dob=".$row['dob']." & email=".$row['email']."'>Modify</a>";
		echo "</td>"; 
		echo "</tr>"; 

	}

	echo "</table>"; 
}



?>