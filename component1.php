
<?php

function component($productname,$productprice,$productimg,$productid,$product_desc){
    $element="<link rel=\"stylesheet\" href=\"css/burgersStyle.css\">
    <div class=\"ayham\">
            <form action=\"burgers.php\" method=\"post\">
                <div>
                <div>
                <img src=\"./img/$productimg\" alt=\"img 1\">
                </div>
                <div class=\"desc3\">
                <h5>$productname</h5>
                <p><small>$product_desc</small></p>
                    <h5>
                    <p>Price: $productprice.00$</p>
                    
    
                    <button type=\"submit\" class=\"btn\"  name=\"add\">ADD TO CART <i class=\"fas fa-shopping-cart\"></i></button>
                    
                    <input type=\"hidden\" name=\"product_id\" value =\"$productid\">
                    
                </div>
                
                </div>
                </form>
                
            </div>  
            
    ";
    
    echo $element;
}
function component1($productname,$productprice,$productimg,$productid,$product_desc){
    $element="<link rel=\"stylesheet\" href=\"css/burgersStyle.css\">
    <div class=\"ayham\">
            <form action=\"salads.php\" method=\"post\">
                <div>
                <div>
                <img src=\"./img/$productimg\" alt=\"img 1\">
                </div>
                <div class=\"desc3\">
                <h5>$productname</h5>
                <p><small>$product_desc</small></p>
                    <h5>
                    <span >$productprice.00$</span>
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
function component4($productname,$productprice,$productimg,$productid,$product_desc){
    
    $element="<link rel=\"stylesheet\" href=\"css/burgersStyle.css\">
    <div class=\"ayham\">
            <form action=\"Drinks.php\" method=\"post\">
                <div>
                <div>
                <img src=\"./img/$productimg\" alt=\"img 1\">
                </div>
                <div class=\"desc3\">
                <h5>$productname</h5>
                <p><small>$product_desc</small></p>
                    <h5>
                    <span >$productprice.00$</span>
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
    <link rel=\"stylesheet\" href=\"css/cartsyle.css\">
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"ord\">
                        <div class=\"order \">
                            <div class=\"pimg \">
                            <div class=\"order1 \">
                                <h5 class=\"pname pt-2\">$productname</h5>
                                
                                <h5 class=\"price\" id=\"price\">$$productprice</h5>
                                
                                <button type=\"submit\" class=\"btn \" name=\"remove\">Remove</button>
                            </div>
                                <img src=./img/$productimg alt=\"Image1\" class=\"image\">
                                
                            </div>
                            
                            
                            </div>
                    </div>
                </form>
                
               
    
    ";
    
    echo  $element;
   
}



function cartData($productname, $productprice, $productid){
    $element = "
    <link rel=\"stylesheet\" href=\"css/cartsyle.css\">
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"ord\">
                        <div class=\"order \">
                            <div class=\"pimg \">
                            <div class=\"order1 \">
                                <h5 class=\"pname pt-2\">$productname</h5>
                                
                                <h5 class=\"price\">$$productprice</h5>
                                
                                
                            </div>
                                
                                
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </form>
                
               
    
    ";
    
    echo  $element;
}


function checkOut($productname, $productprice, $productid){
    $element = "
    <link rel=\"stylesheet\" href=\"css/cartsyle.css\">
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
    $element="<link rel=\"stylesheet\" href=\"css/burgersStyle.css\">
    <link rel=\"stylesheet\" href=\"orders.css\">
    <div class=\"ayham\">
                <div>
                <div>
                <h3 class=\"i_name\">items<br><br></h3>
                <h5 class=\"items\">$productname
                <h5 class=\"totalprice\">
                    <div class=\"p_name\">total price<br><br></div>$totalprice
                    </h5>
                    </h5>
                    
                </div>
                
                </div>
                
            </div>  
            
    ";
    
    echo $element;
}
function component5(){
    $element="<link rel=\"stylesheet\" href=\"css/burgersStyle.css\">
    <link rel=\"stylesheet\" href=\"orders.css\">
    <div class=\"no1\">
                <div class=\"no1\">
                <h3 class=\"nothing\">You Don't Have Any Order<br><br></h3>
                <a href=\"menu.php\"><button class=\"btn5\">Order Now!</button></a>
                
                    
            
                
                </div>
                
            </div>  
            
    ";
    
    echo $element;
}