
<?php

function component($productname,$productprice,$productimg,$productid){
    $element="<link rel=\"stylesheet\" href=\"burgersStyle.css\">
    <div class=\"ayham\">
            <form action=\"burgers.php\" method=\"post\">
                <div>
                <div>
                <img src=\"$productimg\" alt=\"img 1\">
                </div>
                <div>
                <h5>$productname</h5>
                
                    <h5>
                    <span id=\"price\" >$productprice</span>
                    </h5>
                    
    
                    <button type=\"submit\" class=\"btn\"  name=\"add\">ADD TO CART <i class=\"fas fa-shopping-cart\"></i></button>
                    
                    <input type=\"hidden\" name=\"product_id\" value =\"$productid\">
                    
                </div>
                
                </div>
                </form>
                
            </div>  
            
    ";
    
    echo $element;
}
function component1($productname,$productprice,$productimg,$productid){
    $element="<link rel=\"stylesheet\" href=\"burgersStyle.css\">
    <div class=\"ayham\">
            <form action=\"salads.php\" method=\"post\">
                <div>
                <div>
                <img src=\"$productimg\" alt=\"img 1\">
                </div>
                <div>
                <h5>$productname</h5>
                
                    <h5>
                    <span >$productprice</span>
                    </h5>
                    
                    <button type=\"submit\" class=\"btn\"  name=\"add1\">ADD TO CART <i class=\"fas fa-shopping-cart\"></i></button>
                    
                    <input type=\"hidden\" name=\"product_id\" value =\"$productid\">
                    
                </div>
                
                </div>
                </form>
                
            </div>  
            
    ";
    
    echo $element; 
}
function component4($productname,$productprice,$productimg,$productid){
    
    $element="<link rel=\"stylesheet\" href=\"burgersStyle.css\">
    <div class=\"ayham\">
            <form action=\"Drinks.php\" method=\"post\">
                <div>
                <div>
                <img src=\"$productimg\" alt=\"img 1\">
                </div>
                <div>
                <h5>$productname</h5>
                
                    <h5>
                    <span >$productprice</span>
                    </h5>
                    
                    <button type=\"submit\" class=\"btn\"  name=\"add1\">ADD TO CART <i class=\"fas fa-shopping-cart\"></i></button>
                    
                    <input type=\"hidden\" name=\"product_id\" value =\"$productid\">
                    
                </div>
                
                </div>
                </form>
                
            </div>  
            
    ";
    
    echo $element; 
}

function cartElement($productimg, $productname, $productprice, $productid){
    
    $element = "
    <link rel=\"stylesheet\" href=\"cartsyle.css\">
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"ord\">
                        <div class=\"order \">
                            <div class=\"pimg \">
                            <div class=\"order1 \">
                                <h5 class=\"pname pt-2\">$productname</h5>
                                
                                <h5 class=\"price\" id=\"price\">$$productprice</h5>
                                
                                <button type=\"submit\" class=\"btn \" name=\"remove\">Remove</button>
                            </div>
                                <img src=$productimg alt=\"Image1\" class=\"image\">
                                
                            </div>
                            
                            <div class=\"num\">
                                
                                    <button type=\"button\" class=\"btn1 minus-btn disabled\" id=\"sub\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" id=\"qtyBox\" class=\"txt\">
                                    <button type=\"button\" class=\"btn1 plus-btn\" id=\"add\"><i class=\"fas 
                                    fa-plus\"></i></button>
    
                            </div>
                            </div>
                    </div>
                </form>
                
               
    
    ";
    
    echo  $element;
   
}

function quant($productid){
    
    if($productid){
       
    $quant="
    <script type=\"text/javascript\">
                        
 
		let addBtn = document.querySelector('#add');
		let subBtn = document.querySelector('#sub');
		let qty = document.querySelector('#qtyBox');
		
		addBtn.addEventListener('click',()=>{
			qty.value = parseInt(qty.value) + 1;
		});

		subBtn.addEventListener('click',()=>{
			if (qty.value <= 0) {
				qty.value = 0;
			}
			else{
				qty.value = parseInt(qty.value) - 1;
			}
		});




	</script>";
        
        echo $quant;
    }else{
        echo "hi";
    }
    
}

function cartData($productname, $productprice, $productid){
    $element = "
    <link rel=\"stylesheet\" href=\"cartsyle.css\">
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"ord\">
                        <div class=\"order \">
                            <div class=\"pimg \">
                            <div class=\"order1 \">
                                <h5 class=\"pname pt-2\">$productname</h5>
                                
                                <h5 class=\"price\">$$productprice</h5>
                                
                                
                            </div>
                                
                                
                            </div>
                            
                            <div class=\"num\">
                                
                            </div>
                            
                        </div>
                    </div>
                </form>
                
               
    
    ";
    
    echo  $element;
}


function checkOut($productname, $productprice, $productid){
    $element = "
    <link rel=\"stylesheet\" href=\"cartsyle.css\">
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"ord\">
                        <div class=\"order \">
                            <div class=\"pimg \">
                            <div class=\"order1 \">
                                <h5 class=\"pname pt-2\">$productname</h5>
                                
                                <h5 class=\"price\">$$productprice</h5>
                                
                                
                            </div>
                                
                                
                            </div>
                            
                            <div class=\"num\">
                                
                            </div>
                        </div>
                    </div>
                </form>
                
               
    
    ";
  
    require_once('cartDb.php');
    $host="localhost";
$dbuser="root";
$dbpass="";
$dbname="productdb";

@$conn=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$conn){
    echo 'no connect';
}
else{
    echo ''; 
}
    
    $sql="insert into orders (address)  values( '$productname' )";
   
    mysqli_query($conn,$sql);
    
}

/*--------------------orders----------------------------*/

function component3($productname,$totalprice){
    $element="<link rel=\"stylesheet\" href=\"burgersStyle.css\">
    <link rel=\"stylesheet\" href=\"orders.css\">
    <div class=\"ayham\">
                <div>
                <div>
                <h3 class=\"name\">items<br><br></h3>
                <h5 class=\"items\">$productname 
                <h5 class=\"totalprice\">
                    <div class=\"name\">total price<br><br></div>$totalprice
                    </h5>
                    </h5>
                    
                </div>
                
                </div>
                
            </div>  
            
    ";
    
    echo $element;
}