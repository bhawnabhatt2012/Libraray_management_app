<!DOCTYPE html>
<html>
<header><br>
<?php 
include "navtag.php";
?><br>
<img src="images\image5.gif" alt="Books <3" width="100%" height="500">
</header>
<head>
<title>Welcome</title>
<style>
body {
    background-color: lightblue;
	background-image: url("images/image1.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
}
h1 {
	font-family: "Georgia", Verdana, Times New Roman;
	text-transform: uppercase;
	color: white;
}
div.inputvalue {
	color: maroon;
	font-family: "Verdana";
	text-transform: uppercase;
}
div.a {
	background: white;
	max-width: 300px;
    border: 3px groove;
    padding: 10px 10px;
    margin: 5px auto;
	border radius: 10px;
}
form {
	margin: 20px auto;
}
footer {
	background-color: E8D4D0;
	margin: 20px auto;
	padding: 5px 5px;
	color: maroon;
	font-family: "Verdana";
	font-size: 10px;
}
</style>
</head>
<body><center>
<br>
<h1 align="center">Welcome to <span style="color:maroon;">Bookaholics!</span></h1>
<br><br>
<div class="a">
<div class="inputvalue">
<br>
<form method="POST" action="check_login.php">
User Name : <br><input type="text" name="username" align="middle"><br></br>
Password  : <br><input type="password" name="password" align="middle" ><br><br>
<input type="submit" value="login" style="background-color:pink;color:maroon;">
</form>
</div>
<form action="registration.php">
<input type="submit" value="register here" style="background-color:pink;color:maroon;">
</form>
</div>

</center>
</body>
<footer>
<p>Website By Divij Bhakoo and Srijita Chandra</p>
<p align="right">Contact Info: bookaholics@gmail.com</p>
</footer>
</html>