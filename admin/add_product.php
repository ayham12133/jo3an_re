<?php

if(isset($_SESSION['Username'])){
echo '';
}else{
    echo'<script>alert("Error: You Can\'t Browse This Page Directly");
              window.location.assign("admin.php");
              </script>';
}



?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="add_pro">
    
    <form method="POST" class="add_forms"  action="_manageAddProduct.php">
    <div>
                    <input type="text" placeholder="product name" id="product_name" name="product_name" class="pro_" required><br>
                    <input type="text" name="product_price" placeholder="Product Price" id="product_price" class="pro_" required><br>
                    <input type="text" placeholder="Product Image" id="product_img" name="product_img"
                           class="pro_" required><br>
        <input type="text" placeholder="Product Description" id="product_desc" name="product_desc"><br>
        <input type="text" name="table_name" placeholder="Categorie" id="categ" class="pro_"><br>
        <div>
                 <input type="submit" value="Add product" name="add_pro" id="addButn" class="addbtn" >
                </div>
        </div>
    </form>


</div>