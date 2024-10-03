<?php
session_start();	

if(!isset($_SESSION["username"]))
{
	header("location:login:php");
}
$conn=mysqli_connect('localhost','root','','photographyweb');
	
if (isset($_POST['send'])){
	        $name=$_POST['name'];
			$email=$_POST['email'];
			$number=$_POST['number'];
			$location=$_POST['location'];
			$message=$_POST['message'];
	
	$sql = "INSERT INTO contact (name, email, number, location, message) VALUES ('$name','$email','$number','$location','$message')";
	
	
	mysqli_query($conn,$sql);
	header('location:getintouch.php');
	
	
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form </title>
  <link rel="stylesheet" href="getintouch.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<script type="text/javascript">
function myFun(){
alert("your message sent to the Malcolm!!");
}
</script>
	
	
  <div class="wrapper">
    <header >GET IN TOUCH</header>
    <form action="getintouch.php" method="post">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter your email"  required>
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="number" placeholder="Enter your phone"  required>
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="location" placeholder="Enter your location"  required>
          <i class='fas fa-globe'></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message" required></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit" name="send" onclick="myFun()" required>Send Message</button>
        <span></span>
      </div>
    </form>
  </div>

</body>
</html>