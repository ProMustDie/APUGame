<?php
include 'db_Connection.php'
session_start();
$_SESSION['Id'] = 3
if (isset($_SESSION['Id'])) {
    $userID = $_SESSION['Id'] }
    else {
        header('Location: login.php');
        exit;
    }

    $score = isset($_POST['score']) ? (int)$_POST['score'] : 0;
    $quizID = isset($_POST['quizID']) ? (int)$_POST['quizID'] : 0;
    
    // Prepare SQL to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO results (quizID, userID, results) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $quizID, $userID, $score); // "ii" means two integers: userId and score
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Result recorded successfully";
    } else {
        echo "Error: " . $stmt->error;
    }*/

$conn -> close();
?>