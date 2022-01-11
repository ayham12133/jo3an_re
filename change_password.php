<?php
session_start();
require 'connect.php';
if(isset($_SESSION['Password'])){
    
 if(isset($_POST['change'])){
$user=$_SESSION['Username']; 
$old=$_POST['old_pass'];
$new=$_POST['new_pass'];
$pass=$_SESSION['Password'];

if($old==$pass){
$sql="select * from register where Username='$user' and Password='$old'";

$query=mysqli_query($con,$sql); 

if(mysqli_num_rows($query)<0){
        
        echo '<script>alert("Error22");
              window.location.assign("settings.php");
              </script>';
    }else{

   
        $update="UPDATE register SET Password='$new' , cPassword='$new' where Username='$user' and Password='$old'";
        $query2=mysqli_query($con,$update); 
        if($query2){
            echo '<script>alert("Password changed");
              window.location.assign("settings.php");
              </script>';
        }else{
            echo '<script>alert("Error");
              window.location.assign("settings.php");
              </script>';
        }
}
}else{
   echo '<script>alert("Your old password wrong!");
              window.location.assign("settings.php");
              </script>'; 
}
}
}else{
    echo'bye';
}
    
?>