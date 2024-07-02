<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit library</title>
<style type="text/css">
    input[type=submit]{
        background-color: #5f91f4;
        color: white;
        width: 200px;
        height: 30px;
        
    }
</style>

</head>
<body>
   

    <?php
    include("connection_database.php");

   
    $id = $_GET['pythonid'];

    
    $result = mysqli_query($con, "SELECT * FROM python WHERE pythonid=$id");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        
    ?>

    <h1>Edit library</h1>
    <form method="POST" action="saveeditpy.php">
        <input type="hidden" name="pythonid" value="<?php echo $row['pythonid']; ?>">
        <br><br>
        <label>Title</label><br>
        <input type="text" name="title" required value="<?php echo $row['title'];?>"><br><br>

        



        <label>Description</label><br>
        <input type="content"  name="description" value="<?php echo $row['description'];?>"><br><br>

        <label>backimg</label><br>
        <input type="file"  name="backimg" value="<?php echo $row['backimg'];?>"><br><br>
        
        
        <label>file</label><br>
        <input type="file"  name="file" value="<?php echo $row['file'];?>"><br><br>
        

          <input type="submit" value="Save">
    </form>

    <?php
    } else {
       
        echo "Record not found.";
    }
    ?>

</body>
</html>
