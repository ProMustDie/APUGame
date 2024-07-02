<?php
    include("connection_database.php");

    $htmlid = $_GET['htmlid'];

    $sql = "DELETE FROM html WHERE htmlid =".$htmlid;

    mysqli_query($con,$sql);

    echo "<script>alert('Record deleted!');window.location.href='htmltable.php';</script>";

?>