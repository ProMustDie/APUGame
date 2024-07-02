<?php
    include("connection_database.php");

    $pythonid = $_GET['pythonid'];

    $sql = "DELETE FROM python WHERE pythonid =".$pythonid;

    mysqli_query($con,$sql);

    echo "<script>alert('Record deleted!');window.location.href='pythontable.php';</script>";

?>