<?php
session_start();
include('connection_database.php');

$username = (!empty($_POST["username"])) ? $_POST["username"] : "";
$password = (!empty($_POST["password"])) ? $_POST["password"] : "";

if (empty($username) || empty($password)) {
    echo '<script type="text/javascript">
    alert("Username and password are required");
    window.location = "login.html";
    </script>';
    exit();
}

$checkQuery = "SELECT username FROM user_register WHERE username = '$username'";
$checkResult = mysqli_query($con, $checkQuery);

if (!$checkResult) {
    echo "Error checking username: " . mysqli_error($con);
    exit();
}

if (mysqli_num_rows($checkResult) > 0) {
    $checkQuery2 = "SELECT username FROM user_login WHERE username = '$username'";
    $checkResult2 = mysqli_query($con, $checkQuery2);

    if (!$checkResult2) {
        echo "Error checking username in user_login table: " . mysqli_error($con);
        exit();
    }

    if (mysqli_num_rows($checkResult2) > 0) {
        $updateQuery = "UPDATE user_login SET password = '$password' WHERE username = '$username'";
        if (mysqli_query($con, $updateQuery)) {
            echo "Record updated successfully!";
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
    } else {
        $insertQuery = "INSERT INTO user_login (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($con, $insertQuery)) {
            echo "Login successful!";
        } else {
            echo "Error inserting new user: " . mysqli_error($con);
        }
    }

    $sql = "SELECT * FROM user_register WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo "Error retrieving user information: " . mysqli_error($con);
        exit();
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_type = $row["user_type"];

        if ($user_type == "admin") {
            echo '<script type="text/javascript">
            alert("Login successfully as admin");
            window.location = "admin_main_page.php";
            </script>';
            exit();
        } elseif ($user_type == "teacher") {
            echo '<script type="text/javascript">
            alert("Login successfully as teacher");
            window.location = "teacher_main_page.php";
            </script>';
            exit();
        } elseif ($user_type == "parents") {
            echo '<script type="text/javascript">
            alert("Login successfully as parents");
            window.location = "parents_main_page.php";
            </script>';
            exit();
        } elseif ($user_type == "students") {
            echo '<script type="text/javascript">
            alert("Login successfully as student");
            window.location = "student_main_page.php";
            </script>';
            exit();
        }
    } else {
        echo '<script type="text/javascript">
        alert("Incorrect Password");
        window.location = "login.php";
        </script>';
        exit();
    }
} else {
    echo '<script type="text/javascript">
    alert("Username does not exist");
    window.location = "login.php";
    </script>';
    exit();
}

mysqli_close($con);
?>
