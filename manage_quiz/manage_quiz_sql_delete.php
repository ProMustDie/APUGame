<?php
    include("connection_database.php");

    $questionID = $_GET['questionID'];

    $sql = "DELETE FROM sqlgame WHERE questionID =".$questionID;

    mysqli_query($con,$sql);

    echo "<script>alert('Record deleted!');window.location.href='manage_quiz_sql.php';</script>";

?>