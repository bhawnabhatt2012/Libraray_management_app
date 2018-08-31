<!DOCTYPE html>
<html>
<header><br>
<?php 
include "navtag.php";
?></header>
<head>
<title>Registation Page</title>
<style>
body {
	background-image: url("images/image3.jpg");
	background-attachment: fixed;
}
p {
	font-family: "Georgia";
}
form {
  color: maroon;
  max-width: 300px;
  margin: 20px auto;
  padding: 40px 40px;
  padding-bottom: 70px;
  background: lightblue;
  border-radius: 10px;
}
table {
	color: maroon;
}
button {
background: blue;
color: white;
}
</style>
</head>
<body><center><br><br>
<form method="POST" action="register_table.php">
<p>Sign Up!</p>
<table>
<tr><td>User Name :</td><td><input type="text" name="username"></td></tr><br>
<tr><td>Email ID : </td><td><input type="text" name="email"></td></tr><br>
<tr><td>Mobile Number :</td><td><input type="text" name="mobileno"></td></tr>
<tr><td>Gender :</td><td><input type="radio" name="gender" value="Male" checked>Male
					 <br><input type="radio" name="gender" value="Female" checked>Female<br></td></tr>
<tr><td>Date Of Birth :</td><td><input type="date" name="dob"></td></tr>
<tr><td>Password  :</td><td><input type="password" name="password"></td></tr><br>
</table><br>
<button>Submit</button>
</form>
</center>
<body>
</html>