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


<body class="workarea">

<h1 class="heading"> Please enter details below </h1>
<i class="glyphicon glyphicon-cloud"></i>
<div>
<table class="myTable">

<form id="form" action ="register.php" method="post"> 
<tr><td>Chose Username: </td><td><input type="text" id="form_username" name = "form_username" class="form-control"></td><td><span  id="username_error_message" class="error_message"></span></td></tr>
<tr><td>Email Address: </td><td><input type="text" id="form_email" name="form_email" class="form-control" placeholder="example@hotmail.com"></td><td><span  id="email_error_message"class ="error_message"></span></td></tr>
<tr><td>Date of Birth: </td><td><input type="text" id="form_dob" name="form_dob" placeholder= "DD/MM/YYYY"class="form-control"></td><td><span  id="dob_error_message"class="error_message"></span></td></tr>
<tr><td>Password: </td><td><input type="password" id="form_password" name="form_password" class="form-control"></td><td><span  id="password_error_message" class="error_message"></span></td></tr>
<tr><td>Retype Password: </td><td><input type="password" id="form_retype_password" name="form_retype_password" class="form-control"></td><td><span  id="retype_password_error_message" class="error_message"></span></td></tr>
<tr><td> <input type="submit" id="submit_button" value="Submit"class="btn btn-success"> <input type="button" id="clear_button" value="Clear"class="btn btn-warning"></td><td> </td> </tr>







</form>



</table>

</div>



</body>





</html>