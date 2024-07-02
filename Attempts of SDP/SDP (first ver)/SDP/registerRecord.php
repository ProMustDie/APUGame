<?php
session_start();
include('connection_database.php');

$username = (!empty($_POST["username"])) ? $_POST["username"] : "";
$password = (!empty($_POST["password"])) ? $_POST["password"] : "";
$email = (!empty($_POST["email"])) ? $_POST["email"] : "";
$phone_number = (!empty($_POST["phone_number"])) ? $_POST["phone_number"] : "";
$user_type = (!empty($_POST["user_type"])) ? $_POST["user_type"] : "";

if (!empty($username) && !empty($password) && !empty($email) && !empty($phone_number) && !empty($user_type)) {
    // Validate phone number format
    if (preg_match("/^(6?01)([0-9]{1})([0-9]{7,8})$/", $phone_number)) {
        // Phone number format is correct
        $phone_number = $_POST["phone_number"];

        // Check for duplicate entry
        $query = "SELECT * FROM user_register WHERE username = '$username' OR email = '$email'";
        $result = mysqli_query($con, $query);
        
        if (!$result) {
            echo "Error in query execution: " . mysqli_error($con);
            exit();
        }

        if (mysqli_num_rows($result) > 0) {
            echo '<script type="text/javascript">
                alert("Username or email already exists! Please type again.");
                window.location = "register.php";
                </script>';
            exit();
        } else {
            // Insert the data
            $sql = "INSERT INTO user_register (username, password, email, phone_number, user_type) VALUES 
            ('$username', '$password', '$email', '$phone_number', '$user_type')";
            
            if (mysqli_query($con, $sql)) {
                // Registration successful, redirect to the specified page
                echo '<script type="text/javascript">
                              alert("Registered successfully!");
                              window.location = "manage_user.php";
                              </script>';
                exit();
            } else {
                // Handle the error as per your requirement
                echo "Error: " . mysqli_error($con);
                echo '<script type="text/javascript">
                alert("Try Again!!!");
                window.location = "register.php";
                </script>';
                exit();
            }
        }
    } else {
        echo '<script type="text/javascript">
                alert("Phone number format error! Please type again.");
                window.location = "register.php";
                </script>';
        exit();
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
