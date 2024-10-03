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
                        <li><a href = "home.php" class = "active">Home</a></li>						
                        <li><a href = "gallery.php">Gallery</a></li>
						<li><a href = "blog.php">Blog</a></li>
						<li><a href = "about.php">About</a></li>
						<li><a href = "pricing.php">Pricing</a></li>      
						
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
                            <a href = "#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class="fab fa-instagram"></i></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- end of header -->

        <!-- main -->
        <section class = "section-one">
            <div class = "container">
                <div class = "sec-one-left">
                    <!-- image here -->
                    <div>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos suscipit ut aliquid ab illo. Repellat nam molestias repellendus perspiciatis blanditiis.</p>
                        <a href = "#" class = "btn">view all</a>
                    </div>
                </div>

                <div class = "sec-one-right">
                    <div class = "work-content">
                        <h3>AMAZING TEAM WORK WITH PROFESSIONAL PHOTOGRAPHER</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ducimus laboriosam facilis repudiandae neque minus in corrupti consequatur illum placeat nam libero adipisci quidem doloribus, numquam eius delectus quaerat omnis illo earum necessitatibus natus soluta deserunt iusto. Modi, soluta quos.</p>
                        <a href = "#" class = "btn">view all</a>
                    </div>
                    <div class = "work-imgs">
                        <div class = "work-img-1">
                            <!--image here-->
                        </div>
                        <div class = "work-img-2">
                            <!-- image here -->
                        </div>
                    </div>
                    <h3>"Taking an image, freezing a moment, reveals how rich reality truly is."</h3>
                </div>
            </div>
        </section>

        <section class = "section-two">
            <div class = "container">
                <h2>FOLLOW ON INSTAGRAM</h2>
                <span>@malcolmlismore_photographer</span>
                <div class = "insta-imgs">
                    <div>
                        <img src = "img/insta7.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src = "img/insta8.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src = "img/insta2.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src = "img/insta9.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
