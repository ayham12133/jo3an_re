<?php


$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="productdb";

@$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$con){
    echo 'no connect';
}
else{
    echo 'good connect'; 
}
?>
