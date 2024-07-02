<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit SQL Quiz</title>
</head>
<body>
    <?php
    // Include the database connection file
    include("../connection_database.php");

    // Check if the bank ID is provided in the URL
    if(isset($_GET['questionID'])) {
        $questionID = $_GET['questionID'];

        // Query to fetch bank data by ID from the 'banks' table
        $query = "SELECT * FROM sqlgame WHERE questionID = $questionID";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // You can use $row['column_name'] to access bank data

            // Display an edit form with existing bank information
            echo '<h1>Edit Quiz</h1><br><hr><br>';
            echo '<form action="manage_quiz_sql_update.php" method="POST">';
            echo '<input type="hidden" name="questionID" value="' . htmlspecialchars($row['questionID']) . '">';
            echo '<label for="name">Question Text:</label>';
            echo '<input type="text" name="questionText" value="' . htmlspecialchars($row['questionText']) . '"><br><br>';
            echo '<label for="name">Answer:</label>';
            echo '<input type="text" name="answer" value="' . htmlspecialchars($row['answer']) . '"><br><br>';
            echo '<label for="name">Answer Options:</label>';
            echo '<input type="text" name="answerOptions" value="' . htmlspecialchars($row['answerOptions']) . '"><br><br>';
            echo '<input type="hidden" name="quizID" value="' . htmlspecialchars($row['quizID']) . '">';
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


