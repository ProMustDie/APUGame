<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>
<body>
    <?php
    // Include the database connection file
    include("connection_database.php");

    // Check if the bank ID is provided in the URL
    if(isset($_GET['courseid'])) {
        $courseid = $_GET['courseid'];

        // Query to fetch bank data by ID from the 'banks' table
        $query = "SELECT * FROM course WHERE courseid = $courseid";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // You can use $row['column_name'] to access bank data

            // Display an edit form with existing bank information
            echo '<h1>Edit Html</h1><br><hr><br>';
            echo '<form action="save edit course.php" method="POST">';
            echo '<input type="hidden" name="courseid" value="' . $row['courseid'] . '">';
            echo '<label for="name">Name:</label>';
            echo '<input type="text" name="name" value="' . $row['name'] . '"><br><br>';
            echo '<label for="name">Description:</label>';
            echo '<input type="text" name="description" value="' . $row['description'] . '"><br><br>';
            echo '<label for="img">Image:</label>';
            echo '<input type="file" name="img" value="' . $row['img'] . '"><br><br>';
            echo '<label for="file">File:</label>';
            echo '<input type="file" name="file" value="' . $row['file'] . '"><br><br>';
            echo '<input type="submit" name="update" value="Update">';
            echo '</form>';
        } else {
            echo "File not found.";
        }
    } else {
        echo "Invalid File.";
    }
    ?>
</body>
</html>


