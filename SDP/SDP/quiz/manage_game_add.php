<?php
session_start();
include('../connection_database.php'); // Include your database connection file
$quizID = isset($_GET['quizID']) ? $_GET['quizID'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming the name of the input fields matches the column names in your database
    $question = $_POST['question'];
    $answerOptions = $_POST['answerOptions'];
    $answer = $_POST['answer'];

    $question = mysqli_real_escape_string($con, $question);
    $answerOptions = mysqli_real_escape_string($con, $answerOptions);
    $answer = mysqli_real_escape_string($con, $answer);

    // Prepare the SQL statement
    $sql = "INSERT INTO mcq (question, answerOptions, answer, quizID) VALUES (?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = mysqli_prepare($con, $sql);

    // Bind the parameters to the placeholders
    mysqli_stmt_bind_param($stmt, 'sssi', $question, $answerOptions, $answer, $quizID);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo '<script type="text/javascript">
                alert("Question added successfully!");
                window.location = "manage_quiz_mcq.php?quizID='.$quizID.'"; 
              </script>';
        exit();
    } else {
        // Handle the error as needed
        echo "Error: " . mysqli_error($con);
        echo '<script type="text/javascript">
                alert("Error adding question. Please try again.");
                window.location = "manage_quiz_mcq_add.php?quizID='.$quizID.'";
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
                <form Id="pythonbasics" name="question" action="manage_game_add_direct.php" method="POST">
                    <h2>Add Game Name</h2>
                    <div class="inputbox">
                        <input type="text" name="gameName" Id="gameName"  autocomplete="off" required>
                        <label for="">Game Title</label>
                    </div>         
</br>
                    <div class="inputbox">
                        <input type="text" name="gameType" Id="gameType"  autocomplete="off" required>
                        <label for="">Game Type (MCQ, rearrange, Memory)</br></label>
                    </div>  

                    <button type="submit" class="class">Add Game</button><br><br>
                    <p><a href="manage_game.php" class="back">Back</a></p>

                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
