<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'sdp';

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection error: " . $conn->connect_error);
}
?>