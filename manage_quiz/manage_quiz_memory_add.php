<?php
session_start();
include('connection_database.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardOne = $_POST["cardOne"];
    $cardTwo = $_POST["cardTwo"];
    // Validation and data sanitization can be added here as needed

    // Insert the class data into the database
    $sql = "INSERT INTO memory (cardOne, cardTwo) VALUES 
            ('$cardOne', '$cardTwo')";

    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">
                alert("Question added successfully!");
                window.location = "manage_quiz_memory.php"; 
              </script>';
        exit();
    } else {
        // Handle the error as needed
        echo "Error: " . mysqli_error($con);
        echo '<script type="text/javascript">
                alert("Error adding question. Please try again.");
                window.location = "manage_quiz_memory_add.php";
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
  <link rel="stylesheet" href="manage_quiz_mcq_add.css">
  <title>Add Question</title>
  <link href="/images/workout planner2.png" rel="icon">      
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form Id="memory" name="question" action="manage_quiz_memory_add.php" method="POST">
                    <h2>Add Question</h2>         
                    <div class="inputbox">
                        <input type="text" name="cardOne" Id="cardOne"  autocomplete="off" required>
                        <label for="">Card One</label>
                    </div>  
                    <div class="inputbox">
                        <input type="text" name="cardTwo" Id="cardTwo"  autocomplete="off" required>
                        <label for="">CardTwo</label>
                    </div>

                    <button type="submit" class="class">Add Question</button><br><br>
                    <p><a href="manage_quiz_memory.php" class="back">Back</a></p>

                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
