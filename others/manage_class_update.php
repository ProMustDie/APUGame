<?php
// Include the database connection file
include("connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $Id = $_POST['Id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $website_url = $_POST['website_url'];
    $image_url = $_POST['image_url'];


    // Update user information in the database
    $query = "UPDATE classes SET
              name = '$name',
              description = '$description',
              website_url = '$website_url',
              image_url = '$image_url'
              WHERE Id = $Id";

    $result = mysqli_query($con, $query);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: manage_class.php");
        exit();
    } else {
        echo "Error updating user information: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
