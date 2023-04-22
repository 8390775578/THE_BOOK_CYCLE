<?php

$server="localhost";
$username="root";
$password="";
$database="user1";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
    echo "you are now connected to the database ";
}else{
    echo "you are not connected to the database ";
}
  
?>