<?php
session_start();

require 'connect.php';
if(isset($_POST['send_m'])){
$massage=$_POST['massage'];
$user=$_SESSION['Username'];

$select="select emails  from register where Username='$user'";
$sql1=mysqli_query($con,$select);
$row=$sql1->fetch_assoc();
$result=$row['emails'];
if($sql1){
$insert="insert into contact (Username,massages,emails)  values( '$user','$massage','$result')";

$sql=mysqli_query($con,$insert);

if(!$sql){
    echo '<script>alert("Error");
              window.location.assign("contact.php");
              </script>';
}else{
    echo'<script>alert("Tank you...your message sent");
              window.location.assign("contact.php");
              </script>';
}  
}
else{echo"Error2";}
}
?>