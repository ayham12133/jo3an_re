<?php
session_start();
require 'connect.php';

$user=$_SESSION['Username']; 
$name=$_POST['n_name'];
 if(isset($_POST['cha_name'])){
$sql="select * from register where Username='$user'";
$query=mysqli_query($con,$sql); 
if(mysqli_num_rows($query)<0){
        
        echo '<script>alert("Error");
              window.location.assign("settings.php");
              </script>';
    }else{
    $sql2="select * from register where Username='$name'";
    $check=mysqli_query($con,$sql2);
    if(mysqli_num_rows($check)<=0){
    $update="UPDATE register  SET Username='$name' where Username='$user'";
    $update2="UPDATE orders SET user_name='$name' where user_name='$user'";
    $update3="UPDATE contact SET Username='$name' where Username='$user'";
        $query4=mysqli_query($con,$update3);
        $query3=mysqli_query($con,$update2);
        $query2=mysqli_query($con,$update); 
        if($query2){
            echo '<script>alert("Username changed...pleas log in again");
              window.location.assign("log_out.php");
              </script>';
        }else{
            echo '<script>alert("Error");
              window.location.assign("settings.php");
              </script>';
        }
}else{
        echo'<script>alert("Username already exists...please try another name");
              window.location.assign("settings.php");
              </script>';
    }
 }
 }
?>