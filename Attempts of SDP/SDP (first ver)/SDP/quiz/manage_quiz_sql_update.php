<?php
// Include the database connection file
include("../connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $questionID = $_POST['questionID'];
    $questionText = $_POST['questionText'];
    $answer = $_POST['answer'];
    $answerOptions = $_POST['answerOptions'];
    $quizID = $_POST['quizID'];

    // Update user information in the database using prepared statements
    $query = "UPDATE sqlgame SET
              questionText = ?,
              answer = ?,
              answerOptions = ?
              WHERE questionID = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($con, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssi", $questionText, $answer, $answerOptions, $questionID);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: manage_quiz_sql.php?quizID=" . urlencode($quizID));
        exit();
    } else {
        echo "Error updating user information: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
