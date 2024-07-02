<?php
// Include the database connection file
include("connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $courseid = $_POST['courseid'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $img = $_POST['img'];
    $file = $_POST['file'];


    // Update user information in the database
    $query = "UPDATE course SET
              name = '$name',
              description = '$description',
              img = '$img',
              file = '$file'
              WHERE courseid = $courseid";

    $result = mysqli_query($con, $query);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: coursetable.php");
        exit();
    } else {
        echo "Error updating: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
