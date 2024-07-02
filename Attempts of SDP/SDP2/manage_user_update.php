<?php
// Include the database connection file
include("connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $user_id = $_POST['user_id'];
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $newEmail = $_POST['email'];
    $newUserType = $_POST['user_type'];

    // Update user information in the database
    $query = "UPDATE users SET
              username = '$newUsername',
              password = '$newPassword',
              email = '$newEmail',
              user_type = '$newUserType'
              WHERE user_id = $user_id";

    $result = mysqli_query($con, $query);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: manage_user.php");
        exit();
    } else {
        echo "Error updating user information: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
