<?php
session_start();
include('connection_database.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $questionText = $_POST['questionText']; // Corrected to match the input field name
    $tableReference = $_POST["tableReference"]; // Corrected input field name
    $questionOutput = $_POST["questionOutput"];
    $answer = $_POST["answer"];
    $answerOptions = $_POST["answerOptions"];
    // Validation and data sanitization can be added here as needed

    // Insert the class data into the database
    $sql = "INSERT INTO sqlgame (questionText, tableReference, questionOutput, answer, answerOptions) VALUES 
            ('$questionText', '$tableReference', '$questionOutput', '$answer', '$answerOptions')";

    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">
                alert("Question added successfully!");
                window.location = "manage_quiz_sql.php"; 
              </script>';
        exit();
    } else {
        // Handle the error as needed
        echo "Error: " . mysqli_error($con);
        echo '<script type="text/javascript">
                alert("Error adding question. Please try again.");
                window.location = "manage_quiz_sql_add.php";
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
                <form id="sqlgame" name="question" action="manage_quiz_sql_add.php" method="POST">
                    <h2>Add Question</h2>
                    <div class="inputbox">
                        <input type="text" name="questionText" id="questionText" autocomplete="off" required>
                        <label for="">Question Text</label>
                    </div>          
                    <div class="inputbox">
                        <input type="text" name="tableReference" id="tableReference" autocomplete="off" required>
                        <label for="">Table Reference</label>
                    </div>  
                    <div class="inputbox">
                        <input type="text" name="questionOutput" id="questionOutput" autocomplete="off" required>
                        <label for="">Question Output</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="answer" id="answer" autocomplete="off" required>
                        <label for="">Answer</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="answerOptions" id="answerOptions" autocomplete="off" required>
                        <label for="">Answer Options</label>
                    </div>

                    <button type="submit" class="class">Add Question</button><br><br>
                    <p><a href="manage_quiz_sql.php" class="back">Back</a></p>

                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
x