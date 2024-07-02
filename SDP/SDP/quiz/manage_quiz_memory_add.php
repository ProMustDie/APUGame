<?php
session_start();
include('../connection_database.php'); 
$quizID = isset($_GET['quizID']) ? $_GET['quizID'] : ''; // Ensure $quizID is set


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $questionID = $_POST['questionID'];
    $cardOne = $_POST["cardOne"];
    $cardTwo = $_POST["cardTwo"];
   
    $sql = "INSERT INTO memory (questionID,cardOne, cardTwo, quizID) VALUES 
            ('$questionID','$cardOne', '$cardTwo','$quizID')";
            
    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">
                alert("Question added successfully!");
                window.location.href = "manage_quiz_memory.php?quizID='.$quizID.'"; 
              </script>';
        exit();
    } else {
        // Handle the error as needed
        echo "Error: " . mysqli_error($con);
        echo '<script type="text/javascript">
                alert("Error adding question. Please try again.");
                window.location.href = "manage_quiz_memory_add.php?quizID='.$quizID.'";
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
            <form id="memory" name="question" action="manage_quiz_memory_add.php?quizID=<?php echo htmlspecialchars($quizID); ?>" method="POST">
                    <h2>Add Question</h2>  
                    <div class="inputbox">
                        <input type="text" name="cardOne" id="cardOne" autocomplete="off" required>
                        <label for="">Card One</label>
                    </div>  
                    <div class="inputbox">
                        <input type="text" name="cardTwo" id="cardTwo" autocomplete="off" required>
                        <label for="">Card Two</label>
                    </div>

                    <button type="submit" class="class">Add Question</button><br><br>
                    <!-- Correctly pass quizID in the Back link -->
                    <p><a href="manage_quiz_memory.php?quizID=<?php echo htmlspecialchars($quizID); ?>" class="back">Back</a></p>
                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
