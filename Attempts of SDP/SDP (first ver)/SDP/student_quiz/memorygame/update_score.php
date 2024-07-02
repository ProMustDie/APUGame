<?php
include 'dbConnection.php';

$score = $_POST['score'];

$sql = "UPDATE score SET score = '$score' WHERE id = 1"; // Assuming your score table has an ID of 1
if ($conn->query($sql) === TRUE) {
    echo "Score updated successfully";
} else {
    echo "Error updating score: " . $conn->error;
}

$conn->close();
?>
