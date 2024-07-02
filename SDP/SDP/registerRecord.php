<?php
session_start();
include('connection_database.php');

$username = (!empty($_POST["username"])) ? $_POST["username"] : "";
$password = (!empty($_POST["password"])) ? $_POST["password"] : "";
$email = (!empty($_POST["email"])) ? $_POST["email"] : "";
$user_type = (!empty($_POST["user_type"])) ? $_POST["user_type"] : "";

// Check if all fields are filled
if (!empty($username) && !empty($password) && !empty($email) && !empty($user_type)) {
    // Check for duplicate entry
    $query = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (!$result) {
        echo "Error in query execution: " . mysqli_error($con);
        exit();
    }

    // Check if username or email already exists
    if (mysqli_num_rows($result) > 0) {
        echo '<script type="text/javascript">
            alert("Username or email already exists! Please choose different ones.");
            window.location = "register.php";
            </script>';
        exit();
    } else {
        // Insert user data into the database
        $sql = "INSERT INTO users (username, password, email, status, user_type) VALUES (?, ?, ?, 'active', ?)";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "ssss", $username, $password, $email, $user_type);
        mysqli_stmt_execute($stmt);

        // Check if insertion was successful
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo '<script type="text/javascript">
                alert("Registered successfully!");
                window.location = "manage_user.php";
                </script>';
            exit();
        } else {
            echo "Error: Failed to register user.";
        }
    }
} else {
    echo '<script type="text/javascript">
        alert("All fields are required!");
        window.location = "register.php";
        </script>';
    exit();
}

mysqli_close($con);
?>
