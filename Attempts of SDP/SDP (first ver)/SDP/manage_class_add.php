<?php
session_start();
include('connection_database.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Id = $_POST['Id'];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $website_url = $_POST["website_url"];
    $image_url = $_POST["image_url"];

    // Validation and data sanitization can be added here as needed

    // Insert the class data into the database
    $sql = "INSERT INTO classes (name, description, website_url, image_url) VALUES 
            ('$name', '$description', '$website_url', '$image_url')";

    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">
                alert("Class added successfully!");
                window.location = "manage_class.php"; 
              </script>';
        exit();
    } else {
        // Handle the error as needed
        echo "Error: " . mysqli_error($con);
        echo '<script type="text/javascript">
                alert("Error adding class. Please try again.");
                window.location = "manage_class_add.php";
              </script>';
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="manage_class_add.css">
  <title>Add Class</title>
  <link href="/images/workout planner2.png" rel="icon">      
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form Id="classes" name="clases" action="manage_class_add.php" method="POST">
                    <h2>Add Class</h2>
                    <div class="inputbox">
                        <input type="text" name="name" Id="name"  autocomplete="off" required>
                        <label for="">Name</label>
                    </div>          
                    <div class="inputbox">
                        <input type="text" name="description" Id="description"  autocomplete="off" required>
                        <label for="">Description</label>
                    </div>  
                    <div class="inputbox">
                        <input type="website_url" name="website_url" Id="website_url"  autocomplete="off" required>
                        <label for="">Page URL</label>
                    </div>
                    <div class="inputbox">
                        <input type="file" name="image_url" Id="image_url"  autocomplete="off" required>
                    </div>

                    <button type="submit" class="class">Add Class</button><br><br>
                    <p><a href="manage_class.php" class="back">Back</a></p>

                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
