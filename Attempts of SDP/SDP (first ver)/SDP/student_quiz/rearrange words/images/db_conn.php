<?php

$host = 'localhost';
$user = "root";
$password = "";
$database = "python";

$connection = mysqli_connect($host,$user,$password,$database);

if(!$connection){
   echo "Connection failed!";
   exit();
}
?>