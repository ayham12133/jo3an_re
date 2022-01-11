<?php
session_start();

if(isset($_SESSION['Username'])){
echo '';
}else{
    echo'<script>alert("Error: You Can\'t Browse This Page Directly");
              window.location.assign("index.html");
              </script>';
}

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
            <p class="welcome_container">welcome</p>
                <p class="welcome_container1">to our website</p>
				<div class="container">
					<h2 id="logo"><a href="home.php"> Jo3an </a></h2>
					<img id="open_menu" class="menu_icon show" src="./img/menu.png" >
					<img id="close_menu" class="menu_icon" src="./img/x.png" >
					<nav>
						<a href="#go_to_top" class="menu_link active"> Welcome </a>
						<a href="#about" class="menu_link"> About </a>
						<a href="#menu" class="menu_link"> Menu </a>
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
					<h1 class="highlight"> Discover </h1>
					<h1 class="topic"> our story </h1>
					<p class="symbol"> &#10059; </p>
					<p>We care to provide our coustomers with a unique experience and a unique taste for our burgers and                  drinks, Starting from our first branch in Khalda, Jo3an has 3 new branches inside Amman: Gardens,Abu-nsair and    our most recent branch in Queen rania street, 12 years of hard-work and experience makes it easy for us to 
                       give our customers our best in everything.
                    </p>
					<h2><a href="#"> About us </a></h2>
				</div>
				<div class="img_container">
					<img src="./img/Easy Hamburgers.jpeg" title="burgers" alt="burgers"> 
				</div>
			</section>
			
			<section class="divider"> 
					
			</section>
			
			<section id="menu" class="breakpoint"> 
				<div class="img_container">
					<img class="align_end" src="./img/the-burgery-home-scaled.jpg" title="Burgers" alt="burger"> 
					<img class="align_end" src="./img/orange1.jpeg" title="Juice" alt="orange juice">
					<img class="align_start" src="./img/menu1.jpg" title="Fresh salad" alt="Salad">
					<img class="align_start" src="./img/chicken1.jpeg" title="chicken" alt="chicken burger">
				</div>
				<div class="content">
					<h1 class="highlight"> Discover </h1>
					<h1 class="topic"> Our menu </h1>
					<p class="symbol"> &#10059; </p>
					<p>A variety of delicious burgers and refreshing drinks can be found in our menu, in addition to our vegan options for our special coustomers.</p>
					<h2><a href="menu.php"> View full menu </a></h2>
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