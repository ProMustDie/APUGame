<?php
include ('db_Connection.php');

$sql = "SELECT * FROM sqlgame";
$result = $connection->query($sql);

$questions = array();

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $question = array(
            'questionID' => $row['questionID'],
            'questionText' => $row['questionText'],
            'tableReference' => "<img src='".$row['tableReference']."'>",
            'questionOutput' => "<img src='".$row['questionOutput']."'>",
            'answer' => explode(" ", $row['answer']),
            'answerOptions' => explode (",",$row['answerOptions'])
        );

        $questions[] = $question;
    }
}

echo json_encode($questions);

$connection->close();
?>