<?php
include("connection_database.php");
$id = $_GET['databaseid'];
$sql = "DELETE FROM db WHERE databaseid=".$id;
mysqli_query($con,$sql);
echo "<script>alert('Record deleted!');window.location.href='databasetable.php';</script>";

?>

