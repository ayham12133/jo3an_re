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
<html>
    <head>
        
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Jo3an </title>
		<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    
        
        <link rel="stylesheet" href="css/burgersStyle.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        
            
     
    </head>
    <body>
        <header id="go_to_top">
			<div class="gradient">
				<div class="container">
					<h2 id="logo"><a href="home.php"> Jo3an </a></h2>
					<img id="open_menu" class="menu_icon show" src="./img/menu.png" >
					<img id="close_menu" class="menu_icon" src="./img/x.png" >
					<nav>
						<a href="home.php"> Welcome </a>
						<a href="home.php" > About </a>
						<a href="menu.php" class="active"> Menu </a>
                        <a href="yourOrder.php" class="">Orders</a>
						<a href="contact.php" class=""> Contact </a>
                        <a class="cart" href="cart.php"> <i class="fas fa-shopping-cart"></i><?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\">0</span>";
                        }

                        ?></a> 
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
        <form method="post" action="checkout.php" name="myform" onsubmit="return validation() && validation2()">
            
        <div class="orderform">
                    
                    <input type="text" name="address" placeholder="address" id="addr"  class="in" required /><br>
                    
                    <input type="build" placeholder="Build No" id="cPassword" name="build" class="in" required /><br>
            <input  type="text" placeholder="Phone Number" id="phone" name="phone" class="in" required /><br>
            <button type="submit" name="checkout" class="btn3" >checkout</button>
                </div>
        
        </form>
        <script>
        var build=document.forms['myform']['build'];
          var letters=/^[0-9]*$/;  
            function validation(){
                
                if(build.value=='' || build.value==null){
                    alert("Wrong!")
                    return false;
                    
                }else if(build.value.length<1){
                        alert("Build No. Must Be At Least 1 Number...!");
                        return false;
                    }else if(!build.value.match(letters)){
                    alert("Wrong!..Build No. Must Contain only numbers");
                    return false;
                }
                return true;
            }
        
        </script>
        <script>
        var phone=document.forms['myform']['phone'];
          var letters=/^[0-9]*$/;  
            function validation2(){
                
                if(phone.value=='' || phone.value==null){
                    alert("Wrong!")
                    return false;
                    
                }else if(phone.value.length!=10){
                        alert("Phone No. Must Be exactly 10 Numbers...!");
                        return false;
                    }else if(!phone.value.match(letters)){
                    alert("Wrong!..Phone No. Must Contain only numbers");
                    return false;
                }
                return true;
            }
        
        </script>
        <script src="homescript.js"></script>
    </body>
</html>

<style>@media all and (max-width: 772px) {
	
	nav {
		display: none;
        
	}
	
	#open_menu.show, #close_menu.show {
		display: block;
		z-index: 5;
        
	}
	
	#logo {
		z-index: 5;
	}
	
	.container.show_menu {
		width: 100%;
		height: 100vh;
		/* we need these for when the page is in the welcome section, where the fixed_menu class is no longer active */
		padding: 10px 40px;
		position: fixed;
		top: 0;
		z-index: 5;
		/* resetting the following ones */
		transition: none;
		border-bottom: none;
		background-color: rgba(0, 0, 0, .9);
		align-items: flex-start;
	}
	
	nav.show_menu { 
		position: absolute;
		height: 100vh;
		width: 100vw;
		display: flex;
		flex-flow: column nowrap;
		justify-content: center;
		align-items: center;
		/* because the parent container has some padding, we need to get it out */
		margin: -10px 0 0 -40px;		
	}
	
	nav.show_menu a {
		margin-bottom: 10px;
	}
	
	nav.show_menu a:nth-of-type(5) {
		margin-right: 10px;
	}
    
}   
</style>