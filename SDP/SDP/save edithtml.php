<?php
// Include the database connection file
include("connection_database.php");

if (isset($_POST['update'])) {
    // Retrieve user data from the form
    $htmlid = $_POST['htmlid'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $backimg = $_POST['backimg'];
    $file = $_POST['file'];


    // Update user information in the database
    $query = "UPDATE html SET
              title = '$title',
              description = '$description',
              backimg = '$backimg',
              file = '$file'
              WHERE htmlid = $htmlid";

    $result = mysqli_query($con, $query);

    if ($result) {
        // Redirect to the user list page after successful update
        header("Location: htmltable.php");
        exit();
    } else {
        echo "Error updating: " . mysqli_error($con);
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
