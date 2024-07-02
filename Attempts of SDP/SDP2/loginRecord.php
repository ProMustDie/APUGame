<?php
session_start();
include('connection_database.php');


$email = (!empty($_POST["email"])) ? $_POST["email"] : "";
$password = (!empty($_POST["password"])) ? $_POST["password"] : "";

if (empty($email) || empty($password)) {
    echo '<script type="text/javascript">
    alert("Email and password are required");
    window.location = "login.php";
    </script>';
    exit();
}

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Error retrieving user information: " . mysqli_error($con);
    exit();
}

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $user_type = $row["user_type"];

    // Set session variables
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_type'] = $user_type;

    // Redirect based on user type
    switch ($user_type) {
        case 'admin':
            header("location: admin_main_page.php");
            break;
        case 'teacher':
            header("location: teacher_main_page.php");
            break;
        case 'parent':
            header("location: parent_main_page.php");
            break;
        case 'student':
            header("location: student_main_page.php");
            break;
        default:
            echo '<script type="text/javascript">
            alert("Invalid user type");
            window.location = "login.php";
            </script>';
            exit();
    }
} else {
    echo '<script type="text/javascript">
    alert("Incorrect Email or Password");
    window.location = "login.php";
    </script>';
    exit();
}

mysqli_close($con);
?>
