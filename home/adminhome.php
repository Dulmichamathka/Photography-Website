<?php
session_start();	

if(!isset($_SESSION["username"]))
{
	header("location:login:php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Malcolm Lismore</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="home.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
		<style>
			
			
		.btn{
    background: var(--darkGreen);
    border: none;
    display: block;
    width: 500px;
    text-align: center;
    color: var(--darkGreen);
    text-transform: uppercase;
    background: transparent;
    font-size: 15px;
	
    padding: 12px;
    border: 2px solid var(--darkGreen);
    border-radius: 25px;
    margin: 15px 0;
    transition: var(--transition);
}
.btn:hover{
    background: var(--darkGreen);
    color: #fff;
}
			.b1{width:150px;align: center;
			}						
		
		</style>
    </head>

    <body>
        
        <!-- header -->
        <header class = "header">
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    <span class = "brand-name">
                        MALCOLMLISMORE
                    </span>
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
                </div>

                <!-- navigation menu -->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "home.php" class = "active">Home</a></li>
						
                        <li><a href = "gallery.php">Gallery</a></li>
						<li><a href = "blog.php">Blog</a></li>
						<li><a href = "about.php">About</a></li>
						<li><a href = "pricing.php">Pricing</a></li>
                        
						
                    </ul>
					
					<a href = "getintouch.php" class = "btn  b1" width=150px text-alighn:150px>GET IN TOUCH</a>
				
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>

            <div class = "container about">
                <div class = "about-content">
                    <div class = "about-img flex">
                        <img src = "img/R.jpeg" alt = "photographer img">
                    </div>
                    <h2>My Profile</h2>
                    <h3>Photographer | Traveller</h3>
                   <a href = "addphoto.php" class = "btn ">ADD PHOTOES</a>
					
					<a href = "seeenquires.php" class = "btn">SEE ENQUIRES</a>
					
					
                </div>
				

               
            </div>
        </header>
        <!-- end of header -->

        <!-- main -->
        
        <!-- end of main -->


        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container container">
                <div>
                    <h2>MALCOLM LISMORE</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati sapiente minima itaque nam modi libero optio vitae animi, praesentium quis commodi fugit quasi nostrum nihil veniam nisi suscipit cumque ducimus error doloribus est voluptatum at? Et aut mollitia quia.</p>
                </div>
                <div>
                    <h3>Free Subscription!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, facere eius! Ipsam laborum modi, cumque dolor incidunt animi nam magni.</p>

                    <div class = "subs">
                        <i class = "fas fa-envelope"></i>
                        <input type = "email" id = "email" placeholder="Email Address">
                        <button type = "submit">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <p>&copy; Copyright MALCOLMLISMORE</p>
        </footer>
        <!-- end of footer -->
        

        <script src="script.js"></script>
    </body>
</html>
