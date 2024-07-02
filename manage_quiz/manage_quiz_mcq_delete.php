<?php
    include("connection_database.php");

    $questionID = $_GET['questionID'];

    $sql = "DELETE FROM mcq WHERE questionID =".$questionID;

    mysqli_query($con,$sql);

    echo "<script>alert('Record deleted!');window.location.href='manage_quiz_mcq.php';</script>";

?>