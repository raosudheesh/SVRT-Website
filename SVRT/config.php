<?php
$servername="localhost";
$username= "root";
$password="";
$db="svrt";
$con=mysqli_connect($servername,$username,$password,$db);

if(!$con){
    echo "Connection not established";
}

?>
