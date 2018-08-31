<?php 
	extract($_POST);
	$mysqli = new mysqli('localhost', 'root', '', 'bookaholicsdb');

	if($mysqli->connect_errno > 0){
   		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	
$query = "INSERT INTO registration_details VALUES('$username','$email','$mobileno','$gender','$dob','$password')";

	$insert_row = $mysqli->query($query);

	if($insert_row){
		 header("location:reg_success.php");
	}
	else{
   		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
     ?>
