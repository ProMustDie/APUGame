<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit MCQ Quiz</title>
</head>
<body>
    <?php
    // Include the database connection file
    include("../connection_database.php");

    // Check if the bank ID is provided in the URL
    if(isset($_GET['questionID'])) {
        $questionID = $_GET['questionID'];

        // Query to fetch bank data by ID from the 'banks' table
        $query = "SELECT * FROM mcq WHERE questionID = $questionID";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // You can use $row['column_name'] to access bank data

            // Display an edit form with existing bank information
            echo '<h1>Edit Quiz</h1><br><hr><br>';
            echo '<form action="manage_quiz_mcq_update.php" method="POST">';
            echo '<input type="hidden" name="questionID" value="' . $row['questionID'] . '">';
            echo '<label for="name">Question:</label>';
            echo '<input type="text" name="question" value="' . $row['question'] . '"><br><br>';
            echo '<label for="name">Answer Options:</label>';
            echo '<input type="text" name="answerOptions" value="' . $row['answerOptions'] . '"><br><br>';
            echo '<label for="Answer">Answer:</label>';
            echo '<input type="text" name="answer" value="' . $row['answer'] . '"><br><br>';
            echo '<input type="hidden" name="quizID" value="' . $row['quizID'] . '">';
            echo '<input type="submit" name="update" value="Update">';
            echo '</form>';
            
        } else {
            echo "Question not found.";
        }
    } else {
        echo "Invalid Question.";
    }
    ?>
</body>
</html>


