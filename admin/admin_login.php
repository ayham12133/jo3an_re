<?php
session_start();
if(isset($_POST['log'])){
    
    $username=$_POST["username"];
    $password=$_POST["pass"];
    
    
    require 'connect.php';
    
    $qu="select * from register where Username='$username' and Password='$password'and userType='1'";
    
    if(mysqli_num_rows(mysqli_query($con,$qu))>0){
        $_SESSION['Username']=$username;
        
        header("location:admin_panel.php");
    }else{
        echo '<script>alert("Error in username or password");
              window.location.assign("admin.php");
              </script>';
    }
   
    
        }

?>