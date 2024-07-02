<?php
include 'dbConnection.php';

$quizID = $_GET['quizID'];
$sql = "SELECT m.cardOne, m.cardTwo FROM memory m, quizzes q WHERE m.quizID= $quizID and q.quizID = $quizID";
$result = $conn->query($sql);

// Prepare response data
$response = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Add both cardOne and cardTwo to the response array
        $response[] = $row['cardOne'];
        $response[] = $row['cardTwo'];
    }
    
    // Shuffle the response array to randomize the order
    shuffle($response);
}

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);

$conn->close();
?>
