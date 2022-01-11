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
				<div class="container">
					<h2 id="logo"><a href="home.php"> Jo3an </a></h2>
					<img id="open_menu" class="menu_icon show" src="./img/menu.png" >
					<img id="close_menu" class="menu_icon" src="./img/x.png" >
					<nav>
						<a href="home.php" class=""> Welcome </a>
						<a href="home.php" class=""> About </a>
						<a href="menu.php" class=""> Menu </a>
                        <a href="yourOrder.php" class="">Orders</a>
						<a href="contact.php" class="active"> Contact </a>
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
        
        <form method="post" action="contact_manage.php" id="settingsForm" name="myform" onsubmit="return validation()">
        <textarea placeholder="your message" name="massage" id="msg" cols="40" 
       rows="5"></textarea>
        
        <input type="submit" value="Send message" name="send_m" class="send">
        </form>
        <script>
        var massage=document.forms['myform']['massage'];
          //var letters=/^[a-zA-Z ]*$/;  
            function validation(){
                
                if(massage.value=='' || massage.value==null){
                    alert("Wrong!")
                    return false;
                }else if(!massage.value.match(letters)){
                    alert("Wrong!");
                    return false;
                }
                return true;
            }
        
        </script>
        <script src="homescript.js"> </script>
	</body>
</html>