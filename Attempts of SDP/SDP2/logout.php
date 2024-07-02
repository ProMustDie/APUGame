<?php
session_start(); // Start the session

// Include config and log out user
include_once "chat/chat/config.php";
unset($_SESSION['user_id']); // Unset user_id session variable
// Redirect to login page after logout
header("location: login.php");
exit(); // Terminate script after redirection
?>
