<?php
    

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "photographyweb";
	
	session_start();

    $data = mysqli_connect($host, $user, $password, $db);
    if ($data === false) {
        die("connection error");
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        
        
        if(isset($_POST["username"]) && isset($_POST["password"])) {
            
            $username = $_POST["username"];
            $password = $_POST["password"]; 
            $sql = "select * from login where username='".$username."' AND password='".$password."'";

            $result = mysqli_query($data, $sql);
            $row = mysqli_fetch_array($result);
			
			
			
			$count = mysqli_num_rows($result);

            
            if($count == 1) {
                $_SESSION["username"] = $username; 
                header("location:adminhome.php"); 
            } else {
                $error = "Username or Password is invalid";
                echo $error;
            }

          
        } else {
            echo "username or password field is not set";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form </title>
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="login.php" method="POST">
      <h1>Login</h1>
      <div class="input-box">
  <input type="text" name="username" placeholder="Username" required> 
  <i class='bx bxs-user'></i>
</div>
<div class="input-box">
  <input type="password" name="password" placeholder="Password" required> 
  <i class='bx bxs-lock-alt'></i>
</div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
		
				<div class="btn">
			  <input type="submit" value="Login">
			</div>
      
      <div class="register-link">
        <p>Dont have an account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
