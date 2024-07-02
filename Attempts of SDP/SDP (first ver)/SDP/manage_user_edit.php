<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <?php
    // Include the database connection file
    include("connection_database.php");

    // Check if the user ID is provided in the URL
    if(isset($_GET['Id'])) {
        $userId = $_GET['Id'];

        // Query to fetch user data by ID from the 'register' table
        $query = "SELECT * FROM user_register WHERE Id = " . mysqli_real_escape_string($con, $userId);
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // You can use $row['column_name'] to access user data

            // Display an edit form with existing user information
            echo '<h1>Edit User</h1><br><hr><br>';
            echo '<form action="manage_user_update.php" method="POST">';
            echo '<input type="hidden" name="userId" value="' . $row['Id'] . '">';
            echo '<label for="username">Username:</label>';
            echo '<input type="text" name="username" value="' . $row['username'] . '"><br><br>';
            echo '<label for="password">Password:</label>';
            echo '<input type="password" name="password" value="' . $row['password'] . '"><br><br>';
            echo '<label for="email">Email:</label>';
            echo '<input type="email" name="email" value="' . $row['email'] . '"><br><br>';
            echo '<label for="phone_number">Phone Number:</label>';
            echo '<input type="text" name="phone_number" value="' . $row['phone_number'] . '"><br><br>';
            echo '<label for="user_type">User Type:</label>';
            echo '<select name="user_type" id="user_type">';
            
            // Define an array of user types
            $userTypes = array('admin', 'teacher', 'students','parents'); // Add more user types as needed

            // Loop through the user types and generate options
            foreach ($userTypes as $type) {
                echo '<option value="' . $type . '"';
                
                // Check if the user's existing user type matches the option
                if ($row['user_type'] == $type) {
                    echo ' selected';
                }
                
                echo '>' . ucfirst($type) . '</option>'; // Capitalize the first letter of each user type
            }
            
            echo '</select><br><br><br><br><br>';
            echo '<input type="submit" name="update" value="Update" class="submitbtn">';
            echo '</form>';
        } else {
            echo "User not found.";
        }
    } else {
        echo "Invalid user ID.";
    }
    ?>
</body>
</html>
