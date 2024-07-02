<?php
// Include the database connection file
include("connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $userId = $_POST['userId'];
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $newEmail = $_POST['email'];
    $newPhoneNumber = $_POST['phone_number'];
    $newUserType = $_POST['user_type'];

    // Update user information in the database
    $query = "UPDATE user_register SET
              username = '$newUsername',
              password = '$newPassword',
              email = '$newEmail',
              phone_number = '$newPhoneNumber',
              user_type = '$newUserType'
              WHERE Id = $userId";

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
