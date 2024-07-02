<?php
    include("../connection_database.php");

    $questionID = $_GET['questionID'];
    $quizID = $_GET['quizID'];

    $sql = "DELETE FROM memory WHERE questionID =".$questionID;

    mysqli_query($con,$sql);

    echo "<script>alert('Record deleted!');window.location.href='manage_quiz_memory.php?quizID=$quizID';</script>";

?>