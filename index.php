<html>

<head>
<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/myScript.js"></script>
</head>



<body>

<h1> Please enter details below </h1>

<table>

<form id="form" action ="register.php"> 
<tr><td>Chose Username: </td><td><input type="text" id="form_username"></td><td><span  id="username_error_message"></span></td></tr>
<tr><td>Email Address: </td><td><input type="text" id="form_email"></td><td><span  id="email_error_message"></span></td></tr>
<tr><td>Date of Birth: </td><td><input type="text" id="form_dob" placeholder= "DD/MM/YYYY"></td><td><span  id="dob_error_message"></span></td></tr>
<tr><td>Password: </td><td><input type="password" id="form_password"></td><td><span  id="password_error_message"></span></td></tr>
<tr><td>Retype Password: </td><td><input type="password" id="form_retype_password"></td><td><span  id="retype_password_error_message"></span></td></tr>
<tr><td> <input type="submit" id="submit_button" value="Submit"></td><td> </td> </tr>
<tr><td> <input type="button" id="clear_button" value="Clear"></td><td> </td> </tr>






</form>



</table>



</body>





</html>