<?php
include 'db_Connection.php';

$formQuestion = $_POST["questionID"];
$optionSelected = $_POST["options"];
$score = $_POST["score"];
$questionIndex = $_POST["CurrentquestionID"];

##making a statetment to get answer of questionid
$rightAnswer = "SELECT answer from pythonBasics where questionID = '$formQuestion'";


##executing the statement to get answer(but its metadata so need to extract again)
$result = $connection->query($rightAnswer);

##fetching data
$row = $result ->fetch_assoc();
$correctAnswer = $row['answer'];


if($optionSelected == $correctAnswer){
    $score++;
    $questionIndex++;
    Header("location:mcq.php?correct=true&question=$questionIndex");
}
else{
    echo $optionSelected;
    echo $correctAnswer;
    header("location:mcq.php?correct=false&question=$questionIndex");
}
?>
