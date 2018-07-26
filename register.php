
<html>
<head>

<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/script.js"></script>

<title>Form Validation in jQuery</title>
</head>

<body>






<h1>The form has been submitted, no errors!</h1>



</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";  
$db = "test"; 
$conn = new mysqli($servername, $username, $password, $db); 




$sql = "SELECT * FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	echo "<table>"; 
	echo "<tr>";
	echo "<th>ID</th>"; 
	echo "<th> Username  </th>"; 
	echo "<th> Email </th>"; 
	echo "<th> Date of birth </th>";
	echo "<th> Password</th>";
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
		echo "</tr>"; 

	}

	echo "</table>"; 
}



?>