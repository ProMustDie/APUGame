<?php
    include("connection_database.php");

    $courseid = $_GET['courseid'];

    $sql = "DELETE FROM course WHERE courseid =".$courseid;

    mysqli_query($con,$sql);

    echo "<script>alert('Record deleted!');window.location.href='coursetable.php';</script>";

?>