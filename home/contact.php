<?php
session_start();	

if(!isset($_SESSION["username"]))
{
	header("location:login:php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	  
	 <?php
			$name=$_POST['name'];
			$email=$_POST['email'];
			$number=$_POST['number'];
			$location=$_POST['location'];
			$message=$_POST['message'];
  $conn=mysqli_connect('localhost','root','','photographyweb');
	
            $sql = "INSERT INTO contact (name, email, number, location, message) VALUES ('$name','$email','$number','$location','$message')";
	
mysqli_query($conn,$sql);
	header('location:home.php');
	
	?>
</body>
</html>