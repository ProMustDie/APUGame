<?php
    include("connection_database.php");

    $Id = $_GET['Id'];

    $sql = "DELETE FROM classes WHERE Id =".$Id;

    mysqli_query($con,$sql);

    echo "<script>alert('Record deleted!');window.location.href='manage_class.php';</script>";

?>