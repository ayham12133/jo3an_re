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
require_once ("component1.php");

$db = new CreateDb("Productdb", "Producttb");
$db2 = new CreateDb("Productdb", "Producttb2");
$db3 = new CreateDb("Productdb", "Producttb3");
if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}
?>

<!doctype html>
<html lang="en">
<head>

 <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" href="css/cartstyle.css"> 
    

    

    
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

<div class="container-fluid">
    <div class="row px-5">
       <div class="col-md-7">
            <div class="shopping-cart">
                
    
            <div class="ayham">
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        $result2=$db2->getData();
                        $result3=$db3->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                    
                                    
                                    
                                }
                                
                            }
                        }while ($row = mysqli_fetch_assoc($result2)){
                           foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                 
                                    
                                    
                                }
                            } 
                        }while ($row = mysqli_fetch_assoc($result3)){
                           foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                    
                                }
                               
                            } 
                        }
                    }else{
                        echo "<br><br><br><h1 class=\"cart1\"><center>Cart is Empty</center></h1>";
                    }

                ?>
            </div>
        </div>
    </div>       
        <div  class="det" >

            <div class="pdet">
                <h4 class="Price">PRICE DETAILS</h4>
                <hr>
                <div class=" price-details">
                    <div class="oreder-det">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h4>Price ($count items)</h4>";
                            }else{
                                echo "<h4>Price (0 items)</h4>";
                            }
                        ?>
                        <h4>Delivery Charges</h4> 
                        <hr>
                        <h4>Amount Payable</h4>
                    </div>
                    <div class="">
                        <h4 class="total-price">$<?php echo $total; ?></h4>
                        <h4 class="free">FREE</h4>
                        <hr>
                        <h4 class="total">$<?php
                            echo $total;
                            ?></h4>
                  
                        
                        <a href="checkoutpage.php"><button class="btn">check out</button></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
           
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="homescript.js"></script>
    
</body>
</html>
