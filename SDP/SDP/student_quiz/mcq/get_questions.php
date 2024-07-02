<?php
include ('db_Connection.php');
$quizID = $_GET['quizID'];
$sql = "SELECT * FROM mcq m, quizzes q WHERE m.quizID = $quizID AND q.quizID = $quizID AND q.gametype='mcq'";
$result = $connection->query($sql);

$questions = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $question = array(
            'questionID' => $row['questionID'],
            'question' => $row['question'],
            'answers' => explode(", ", $row['answerOptions']),
            'quizName' => $row['name']
        );

        $questions[] = $question;
    }
}

echo json_encode($questions);

// close the database connection
$connection->close();
?>
