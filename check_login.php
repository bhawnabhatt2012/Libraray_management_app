<html>
<head>
<link rel="stylesheet" type="text/css" href="cssfiles/mystyle.css">
</head>
<body>
<?php
	include 'config.php';
	$uname=$_POST["username"];
	$pwd=$_POST["password"];
	$sql="SELECT * FROM registration_details WHERE username='$uname' AND password='$pwd'";
	if($result=$conn->query($sql)){
		$count=$result->num_rows;
		if($count==1){
			header("location:loginsuccess.php");
		}
		else{
			echo "<h2>Username and Password invalid</h2>";
			echo "<h3>Redirecting in 3 seconds...</h3>";
			header('Refresh: 3; URL=login.php');
		}
		
		ob_flush();
		$conn->close();
	}
?>
</body>
</html>
