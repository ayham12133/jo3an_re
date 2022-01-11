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
						<a href="contact.php" class=""> Contact </a>
                        <div class="dropdown">
                            <span>profile</span>
                            <div class="dropdown-content">
                                <a href="settings.php" class="menu_link active" >Settings</a>
                                <a href="log_out.php">Logout</a>
                            </div>
                        </div>
					</nav>
				</div>
            </div>
		</header>
        
        <div id="formContainer">
            <form method="POST" action="change_password.php" id="settingsForm" name="myform" onsubmit="return validation()">
                <p class="change"><u><b>Change Your Password</b></u></p>
                <input type="password" id="pWord" placeholder="your password" name="old_pass" required><br>
                <input type="password" id="pWord" placeholder="new password" name="new_pass" required>
                <br>
                <input type="submit" value="Save" name="change" id="sButn" class="in"/>
            </form>
            <script>
        var new_pass=document.forms['myform']['new_pass'];
          var letters=/^[a-zA-Z0-9]*$/;  
            function validation(){
                
                if(new_pass.value==''||new_pass.value==null){
                    alert("Wrong!")
                    return false;
                    
                }else if(new_pass.value.length<6){
                        alert("Password Must Be At Least 6 Characters...!");
                        return false;
                    }else if(!new_pass.value.match(letters)){
                    alert("Wrong!..Password Must Contain only alphabets or numbers");
                    return false;
                }
                return true;
            }
        
        </script>
        </div>  
        <div>
        <form method="POST" action="change_name.php" id="nameForm" name="myform1" onsubmit="return validation1()">
                <p class="change"><u><b>Change Your Name</b></u></p>
                <input type="text" id="pWord" placeholder="new name" name="n_name" required><br>
                
                <input type="submit" value="Save" name="cha_name" id="sButn" class="in"/>
            </form>   
            <script>
        var n_name=document.forms['myform1']['n_name'];
          var letters=/^[a-zA-Z0-9]*$/;  
            function validation1(){
                
                 if(n_name.value.length<4){
                        alert("Username Must Be At Least 4 Characters...!");
                        return false;
                    }else if(!n_name.value.match(letters)){
                    alert("Wrong!..Username Must Contain only alphabets or numbers");
                    return false;
                }
                return true;
            }
        
        </script>
        </div>
        
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
           
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="homescript.js"></script>
    </body>
</html>