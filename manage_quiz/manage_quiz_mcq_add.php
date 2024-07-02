<?php
session_start();
include('connection_database.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = $_POST['name']; // Corrected to match the input field name
    $answerOptions = $_POST["answerOptions"];
    $answer = $_POST["answer"];
    // Validation and data sanitization can be added here as needed

    // Insert the class data into the database
    $sql = "INSERT INTO mcq (question, answerOptions, answer) VALUES 
            ('$question', '$answerOptions', '$answer')";

    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">
                alert("Question added successfully!");
                window.location = "manage_quiz_mcq.php"; 
              </script>';
        exit();
    } else {
        // Handle the error as needed
        echo "Error: " . mysqli_error($con);
        echo '<script type="text/javascript">
                alert("Error adding question. Please try again.");
                window.location = "manage_quiz_mcq_add.php";
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
                <form Id="pythonbasics" name="question" action="manage_quiz_mcq_add.php" method="POST">
                    <h2>Add Question</h2>
                    <div class="inputbox">
                        <input type="text" name="name" Id="name"  autocomplete="off" required>
                        <label for="">Question</label>
                    </div>          
                    <div class="inputbox">
                        <input type="text" name="answerOptions" Id="answerOptions"  autocomplete="off" required>
                        <label for="">Answer Options</label>
                    </div>  
                    <div class="inputbox">
                        <input type="text" name="answer" Id="answer"  autocomplete="off" required>
                        <label for="">Answer</label>
                    </div>

                    <button type="submit" class="class">Add Question</button><br><br>
                    <p><a href="manage_quiz_mcq.php" class="back">Back</a></p>

                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>