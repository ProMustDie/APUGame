<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'python';

$con = mysqli_connect($host,$user,$password,$database);

if(!$con){
    die("Connection error: " . $con->connect_error);
}
?>