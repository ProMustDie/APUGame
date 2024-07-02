
<?php


include 'dbConnection.php';
$quizID = $_GET['quizID'];
// Get the content of the two selected cards from the AJAX request
$cardOneContent = $_GET['cardOneContent'];
$cardTwoContent = $_GET['cardTwoContent'];

// Construct the SQL query to check if the two cards belong to the same row
$sql = "SELECT COUNT(*) AS match_count FROM memory WHERE (cardOne = '$cardOneContent' AND cardTwo = '$cardTwoContent' AND quizID = $quizID ) OR (cardOne = '$cardTwoContent' AND cardTwo = '$cardOneContent' AND quizID = $quizID)";

$result = $conn->query($sql);

// Check if there is a match
$response = array();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $matchCount = $row['match_count'];
    
    // If matchCount is 1, the cards belong to the same row, otherwise they don't
    $response['isMatch'] = ($matchCount == 1) ? true : false;
} else {
    $response['isMatch'] = false;
}

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);

// Close database connection
$conn->close();

?>