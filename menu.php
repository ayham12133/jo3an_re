<?php
session_start();
if(isset($_SESSION['Username'])){
echo '';
}else{
    echo'<script>alert("Error: You Can\'t Browse This Page Directly");
              window.location.assign("index.html");
              </script>';
}
require_once ("cartDb.php");
$db = new CreateDb("Productdb", "categories");
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Jo3an </title>
		<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="css/newhome.css">
	</head>
	<body>
		<header id="go_to_top">
			<div class="gradient">
                <p class="welcome_container">Our Menu</p>
				<div class="container">
					<h2 id="logo"><a href="home.php"> Jo3an </a></h2>
					<img id="open_menu" class="menu_icon show" src="./img/menu.png" >
					<img id="close_menu" class="menu_icon" src="./img/x.png" >
					<nav>
						<a href="home.php"> Welcome </a>
						<a href="home.php" > About </a>
						<a href="" class="active"> Menu </a>
                        <a href="yourOrder.php" class="">Orders</a>
						<a href="contact.php" class=""> Contact </a>
                        <div class="dropdown">
                            <span>profile</span>
                            <div class="dropdown-content">
                                <a href="settings.php">Settings</a>
                                <a href="log_out.php">Logout</a>
                            </div>
                        </div>
					</nav>
				</div>
            </div>
		</header>
		
		<main>
            
			<section id="about" class="breakpoint">
				<div class="content">
					<h1 class="topic"> Burger menu </h1>
					<p class="symbol"> &#10059; </p>
					<p>Discover a tast that you will remind forever.
                    </p>
					<h2><a href="burgers.php"> Discover More </a></h2>
				</div>
				<div class="img_container">
					<img src="./img/the-burgery-home-scaled.jpg" title="burger" alt="Burger"> 
				</div>
			</section>
			
			<section class="divider"> 
					
			</section>
			
			<section id="about" class="breakpoint"> 
				<div class="content">
					<h1 class="topic"> Salad menu </h1>
					<p class="symbol"> &#10059; </p>
					<p>For healthy food freaks, gym rats and people on diet we present our special salads.</p>
					<h2><a href="salads.php"> Discover More </a></h2>
				</div>
                <div class="img_container">
					<img src="./img/menu1.jpg" title="Salads" alt="Salad"> 
				</div>
			</section>
            
         <section class="divider"> 
                
            </section>
            
            <section id="about" class="breakpoint"> 
				<div class="content">
					<h1 class="topic"> Drinks menu </h1>
					<p class="symbol"> &#10059; </p>
					<p>Refreshing drinks for all seasons.</p>
					<h2><a href="Drinks.php"> Discover More </a></h2>
				</div>
                <div class="img_container">
					<img src="./img/orange.jpeg" title="Orange" alt="Orange Juice"> 
				</div>
			</section>
						
		</main>
		
		<footer>
			<div id="top"> 
				<a href="#go_to_top" class="menu_link">
					<p id="arrow"> &lsaquo; </p>
					<p>  Top </p>
				</a>
			</div>
			<div id="info" class="breakpoint">
				<div id="locations">
					<h2> Locations </h2>
					<div  class="address_container">
						<div class="address1">
							<p> wasfi al-tal street </p>
							<p> khalda-Amman-Jordan </p>
						</div>
						<div class="address2">
							<p> Gardens street  </p>
							<p> Amman-jordan</p>
						</div>
                        <div class="address3">
							<p> Queen Rania street  </p>
							<p> Amman-jordan</p>
						</div>
                        <div class="address4">
							<p> Abu-Nsair  </p>
							<p> Amman-jordan</p>
						</div>
					</div>
				</div>
				
				<div id="hours">
					<h2> Hours </h2>
					<div class="open_container">
						<div class="open">
							<p> Monday - Thursday </p>
							<p> 5:30pm - 10:00pm </p>
						</div>	
						<div class="open">
							<p> Friday & Saturday </p>
							<p> 5:30pm - 11:00pm </p>
						</div>
						<div class="open">
							<p> Available for private </p>
							<p> events on Sunday </p>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright_container">
				<div id="copyright">
						<div> 
							<p> Copyright 2021 &copy; Handcrafted with love by Ayham & Ahmad</p>
							<p> Coded with love by Ayham Tradat 2021 &copy; </p>
						</div>
						<div>
							<p> Permissions and Copyright <span class="dot"> &middot; </span> Contact The Team </p>
						</div>			
				</div>
			</div>	
		</footer>
		
		<script src="homescript.js"> </script>
	</body>
</html>