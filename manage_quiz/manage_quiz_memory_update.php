<?php
// Include the database connection file
include("connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $questionID = $_POST['questionID'];
    $cardOne = $_POST['cardOne'];
    $cardTwo = $_POST['cardTwo'];


    // Update user information in the database
    $query = "UPDATE memory SET
              cardOne = '$cardOne',
              cardTwo = '$cardTwo'
              WHERE questionID = $questionID";

    $result = mysqli_query($con, $query);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: manage_quiz_memory.php");
        exit();
    } else {
        echo "Error updating user information: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
