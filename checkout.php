<?php
session_start();
include ("cartDb.php");
require_once ("component1.php");

$name="";
$price=0;
$name1="";
$price1=0;
$name2="";
$price2=0;
$user=$_SESSION['Username'];

$item;
$total;

$db = new CreateDb("Productdb", "Producttb");
$db2 = new CreateDb("Productdb", "Producttb2");
$db3 = new CreateDb("Productdb", "Producttb3");
if(isset($_POST['checkout'])){
    if (isset($_SESSION['cart'])){
        
    $address=$_POST["address"]; 
    $build=$_POST["build"];
    $phone=$_POST["phone"];
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        $result2=$db2->getData();
                        $result3=$db3->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    checkOut( $row['product_name'],$row['product_price'], $row['id']);
                                   
                                   $name=$name.'<br>'.$row['product_name'];
                                   $price=$price+$row['product_price'];
                                    
                                }
                            }
                        }while ($row = mysqli_fetch_assoc($result2)){
                           foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    checkOut( $row['product_name'],$row['product_price'], $row['id']);
                                    
                                     $name1=$name1.'<br>'.$row['product_name'];
                                   $price1=$price1+$row['product_price'];
                                     
                            } 
                        }
   
                        }while ($row = mysqli_fetch_assoc($result3)){
                           foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    checkOut( $row['product_name'],$row['product_price'], $row['id']);
                                    
                                     $name2=$name2.'<br>'.$row['product_name'];
                                   $price2=$price2+$row['product_price'];
                                     
                            } 
                        }
   
                        }
        $item=$name.$name1.$name2;
        $total=$price+$price1+$price2;
        $host="localhost";
$dbuser="root";
$dbpass="";
$dbname="productdb";

@$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$con){
    echo 'no connect';
}
else{
    echo '';  
    
}
        
        if($total>0){
        $insert="INSERT INTO orders(item_name,price,user_name,address,build_No,phone) values ('$item','$total','$user','$address','$build','$phone')";
        
       $res=mysqli_query($con , $insert);
    
}else{
    echo'<script>alert("No Items In The Cart");
    window.location.assign("menu.php");</script>';
}

   
}
}


$_SESSION['cart']=[];
?>

<!doctype html>
<html lang="en">
<head>

 
    
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    <title>Cart</title>

    <link rel="stylesheet" href="css/cartstyle.css">   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    

    
</head>
<body class="bg-light">

    
    <header id="go_to_top">
			<div class="gradient">
				<div class="container">
					<h2 id="logo"><a href="home.php"> Jo3an </a></h2>
					<img id="open_menu" class="menu_icon show"  src="./img/menu.png" >
					<img id="close_menu" class="menu_icon" src="./img/x.png" >
					<nav>
						<a href="home.php" class="text-decoration-none text-white"> Welcome </a>
						<a href="home.php" class="text-decoration-none text-white" > About </a>
						<a href="menu.php" class="text-decoration-none text-white" class="active"> Menu </a>
                        <a href="yourOrder.php" class="">Orders</a>
						<a href="contact.php" class=""> Contact </a>
                        <a class="cart" class="text-decoration-none text-white" href="cart.php"> <i class="fas fa-shopping-cart text-white text-decoration-none"></i><?php

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
                                <a href="settings.php" class="text-decoration-none text-white">Settings</a>
                                <a href="log_out.php" class="text-decoration-none text-white">Logout</a>
                            </div>
                        </div>
					</nav>
				</div>
            </div>
		</header>
    
     
    <div class="thanks">
    <h1 class="msg">Thank you <?php echo $user?> for order from JO3AN</h1>
        <a href="home.php"><button class="back">Back to home</button></a>
    </div>
    
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
           
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
    <script src="homescript.js"></script>
    </body>
</html>
<style>
@media all and (max-width: 771px) {
	
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