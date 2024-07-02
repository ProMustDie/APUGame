<?php

include 'db_Connection.php';
$quizID = $_GET['quizID'];
$sql = "SELECT * FROM sqlgame s, quizzes q WHERE s.quizID = $quizID AND q.quizID = $quizID AND q.gametype='rearrange'";
$result = $connection->query($sql);

$questions = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $answer = explode(" ", $row['answer']);
        $confuseWords = explode(" ", $row['answerOptions']);
        $sentence = array_merge($answer, $confuseWords);
        shuffle($sentence);
        
        $question = array(
            'questionID' => $row['questionID'],
            'question' => $row['questionText'],
            'answers' => $sentence,
            'quizName' => $row['name']
        );

        $questions[] = $question;
    }
}

echo json_encode($questions);
// close the database connection
$connection->close();
?>
