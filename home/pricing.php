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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
                        <li><a href = "home.php">Home</a></li>
						
                        <li><a href = "gallery.php" >Gallery</a></li>
						<li><a href = "blog.php">Blog</a></li>
					    <li><a href = "about.php">About</a></li>
						<li><a href = "pricing.php" class="active">Pricing</a></li>
                        
						
                    </ul>
					
					 <a href = "getintouch.php" class = "btn">Get in touch</a>
				
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
                    <h2>I'm Malcolm Lismore</h2>
                    <h3>Photographer | Traveller</h3>
                    <blockquote>
                        "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It remembers little things, long after you have forgotten everything."
                        <span>-Aaron Siskind</span>
                    </blockquote>
                </div>

                <div class = "social-icons">
                    <ul>
                        <li>
                            <a href = "#"><i class = "fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- end of header -->
		<section class="section-one">
		<section class = "pricing">
		<h1 class ="heading">Our Pricing</h1>
			<div class="box-container">
				<div class="box">
			  <h3>BASIC PLAN</h3>
				  <div class="price">$250/-</div>
					  <div class="list">
						<p><i class="fas fa-check"></i> photography</p>
						<p><i class="fas fa-check"></i> bride makeup</p>
						<p><i class="fas fa-check"></i> wedding ceremony</p>
						<p><i class="fas fa-check"></i> meals & drinks</p>
						<p><i class="fas fa-check"></i> guest invitations</p>
					  </div>
				  <a href="contact.php" class="btn">choose</a>
				</div>
				
				
				
				
		<div class="box">
			  <h3>	PREMIUM PLAN</h3>
				  <div class="price">$650/-</div>
					  <div class="list">
						<p><i class="fas fa-check"></i> photography</p>
						<p><i class="fas fa-check"></i> bride makeup</p>
						<p><i class="fas fa-check"></i> wedding ceremony</p>
						<p><i class="fas fa-check"></i> meals & drinks</p>
						<p><i class="fas fa-check"></i> guest invitations</p>
					  </div>
				  <a href="contact.php" class="btn" center>choose</a>
				</div>
				
				
				
		<div class="box">
			  <h3>ULTIMATE PLAN</h3>
				  <div class="price">$1250/-</div>
					  <div class="list">
						<p><i class="fas fa-check"></i> photography</p>
						<p><i class="fas fa-check"></i> bride makeup</p>
						<p><i class="fas fa-check"></i> wedding ceremony</p>
						<p><i class="fas fa-check"></i> meals & drinks</p>
						<p><i class="fas fa-check"></i> guest invitations</p>
					  </div>
				  <a href="contact.php" class="btn">choose</a>
				</div>
				
				
				
			</section>
		
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container container">
                <div>
                    <h2>MALCOLMLISMORE</h2>
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
            <p>&copy; Copyright MALCOLMLISMORE . SIMPLE AND NICE TEMPALTE</p>
        </footer>
        <!-- end of footer -->
        

        <script src="script.js"></script>
    </body>
</html>
