<?php
    include("connection_database.php");

    $user_id = $_GET['user_id'];

    $sql = "DELETE FROM users WHERE user_id =".$user_id;

    mysqli_query($con,$sql);

    echo "<script>alert('Record deleted!');window.location.href='manage_user.php';</script>";

?>




