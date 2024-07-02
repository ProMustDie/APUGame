<?php
include("../connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $questionID = $_POST['questionID'];
    $question = $_POST['question']; 
    $answerOptions = $_POST['answerOptions'];
    $answer = $_POST['answer'];
    $quizID = $_POST['quizID'];

    // Update user information in the database using prepared statements
    $query = "UPDATE mcq SET question = ?, answerOptions = ?, answer = ? WHERE questionID = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'sssi', $question, $answerOptions, $answer, $questionID);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: manage_quiz_mcq.php?quizID=" . urlencode($quizID));
        exit();
    } else {
        echo "Error updating user information: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
