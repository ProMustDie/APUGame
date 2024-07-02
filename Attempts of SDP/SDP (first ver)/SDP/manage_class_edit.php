<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Class</title>
</head>
<body>
    <?php
    // Include the database connection file
    include("connection_database.php");

    // Check if the bank ID is provided in the URL
    if(isset($_GET['Id'])) {
        $Id = $_GET['Id'];

        // Query to fetch bank data by ID from the 'banks' table
        $query = "SELECT * FROM classes WHERE Id = $Id";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // You can use $row['column_name'] to access bank data

            // Display an edit form with existing bank information
            echo '<h1>Edit Bank</h1><br><hr><br>';
            echo '<form action="manage_class_update.php" method="POST">';
            echo '<input type="hidden" name="Id" value="' . $row['Id'] . '">';
            echo '<label for="name">Class:</label>';
            echo '<input type="text" name="name" value="' . $row['name'] . '"><br><br>';
            echo '<label for="name">Description:</label>';
            echo '<input type="text" name="description" value="' . $row['description'] . '"><br><br>';
            echo '<label for="website_url">Website URL:</label>';
            echo '<input type="text" name="website_url" value="' . $row['website_url'] . '"><br><br>';
            echo '<label for="image_url">Image URL:</label>';
            echo '<input type="text" name="image_url" value="' . $row['image_url'] . '"><br><br>';
            echo '<input type="submit" name="update" value="Update">';
            echo '</form>';
        } else {
            echo "Class not found.";
        }
    } else {
        echo "Invalid Class.";
    }
    ?>
</body>
</html>


