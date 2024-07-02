<?php
// Include the database connection file
include("connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $questionID = $_POST['questionID'];
    $name = $_POST['question'];
    $answerOptions = $_POST['answerOptions'];
    $answer = $_POST['answer'];


    // Update user information in the database
    $query = "UPDATE mcq SET
              question = '$name',
              answerOptions = '$answerOptions',
              answer = '$answer'
              WHERE questionID = $questionID";

    $result = mysqli_query($con, $query);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: manage_quiz_mcq.php");
        exit();
    } else {
        echo "Error updating user information: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
