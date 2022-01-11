<?php
session_start();
if(isset($_POST['add_pro'])){
    
    $product_name=$_POST["product_name"];
    $product_price=$_POST["product_price"];
    $product_img=$_POST["product_img"];
    $table_name=$_POST["table_name"];
    $product_desc=$_POST["product_desc"];
    require 'connect.php';
    
    {
        
        $insert="insert into $table_name(product_name,product_price,product_image,_desc)  values( '$product_name' , '$product_price' , '$product_img','$product_desc')";
        
        $query2=mysqli_query($con , $insert);
    
        if($query2){
            
            
            
            echo '<script>alert("Successfully ");window.location.assign("admin_panel.php");
            </script>';
        
    }else{
          echo '<script>alert("error ");window.location.assign("admin_panel.php");
            </script>';  
        }

    
}
   
    
        }

?>