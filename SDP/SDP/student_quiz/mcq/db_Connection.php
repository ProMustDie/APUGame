<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'sdp';

$connection = mysqli_connect($host,$user,$password,$database);

if(!$connection){
    die("Connection error: " . $connection->connect_error);
}
?>