<?php
session_start();
if (isset($_SESSION['user_id'])) {
    include 'db_Connection.php'; // Include database connection file
} else {
    header('Location: ../../login.php');
    exit;
}

$userID = $_SESSION['user_id'];
$score = isset($_POST['score']) ? intval($_POST['score']) : 0;
$quizID = isset($_POST['quizID']) ? intval($_POST['quizID']) : 0;
    

$stmt = $connection->prepare("INSERT INTO results (quizID, userID, results) VALUES (?, ?, ?)");
if (!$stmt) {
    echo "Error preparing statement: " . $connection->error;
    $connection->close();
    exit;
}


$stmt->bind_param("iii", $quizID, $userID, $score);

if ($stmt->execute()) {
    echo "Results added succeessfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close(); 
$connection->close(); 
?>
