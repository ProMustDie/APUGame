<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ</title>
    <link rel="stylesheet" type="text/css" href="mcq.css">
    <?php
    include 'db_Connection.php';
    $score = 0;
    $questionIndex=1;
    $questionIdex=!empty($_GET['questionIndex'])?$_GET['questionIndex']:NULL;
    echo $questionIdex;
    $sql = "SELECT * from pythonBasics where questionID='$questionIndex'";
    $result = $connection->query($sql)
    ?>
    
    <div class="app">
        <h1>Python Quiz</h1>
        <div class="quiz">
        <?php
        if ($result ->num_rows > 0 ){
            $row = $result->fetch_assoc();
            $qID = $row['questionID'];
            $question = $row['question'];
            $answerOptions = explode(",",$row['answerOptions']);
            $rightAnswer = $row['answer'];
        }
        ?>
        <h2 id="question"><?= $question?></h2>
            <div id="answers" class="answer-buttons">
            <form action='validation.php' method='post'>
            <?php
            foreach($answerOptions as $options){
                ?>
            <!--<button class='answerbtns'><?php ##echo($options)?><button>-->
                <input type='radio' name='options' value = "<?php echo($options)?>" ><?php echo($options)?></input>
                <input type='hidden' name = 'questionID' value = "<?php echo($qID)?>"></input>
                <input type='hidden' name = 'CurrentquestionID' value = "<?php echo($questionIndex)?>"></input>
                <input type='hidden' name = 'score' value = "<?php echo($score)?>"></input>
                <?php }?>
            </div>
            <input type="submit" value="Check Answer">
            <button>Next</button>
        </div>
    </div>
    
    <!--<script src="mcqgamerevised.js"></script>>


    
</body>
</html>