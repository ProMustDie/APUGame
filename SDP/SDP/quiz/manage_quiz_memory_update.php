<?php
// Include the database connection file
include("../connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $questionID = $_POST['questionID'];
    $cardOne = $_POST['cardOne'];
    $cardTwo = $_POST['cardTwo'];
    $quizID = $_POST['quizID'];


    // Update user information in the database
    $query = "UPDATE memory SET cardOne = ?, cardTwo = ? WHERE questionID = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'ssi', $cardOne, $cardTwo, $questionID);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: manage_quiz_memory.php?quizID=" . urlencode($quizID));
        exit();
    } else {
        echo "Error updating user information: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
