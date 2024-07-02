<?php
// Include the database connection file
include("connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $databaseid = $_POST['databaseid'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $backimg = $_POST['backimg'];
    $file = $_POST['file'];


    // Update user information in the database
    $query = "UPDATE db SET
              title = '$title',
              description = '$description',
              backimg = '$backimg',
              file = '$file'
              WHERE databaseid = $databaseid";

    $result = mysqli_query($con, $query);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: databasetable.php");
        exit();
    } else {
        echo "Error updating: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
