<?php
include '../memorygame/dbConnection.php';

if (isset($_GET['button'])) {
    $button = $_GET['button'];
    
    // Do something based on the button value
    switch ($button) {
        case 'MCQ':
            $sql = "SELECT * FROM quizzes WHERE gametype='MCQ'";
            break;
        case 'Memory Game':
            $sql = "SELECT * FROM quizzes WHERE gametype='Memory Game'";
            break;
        case 'Rearranging the Words':
            $sql = "SELECT * FROM quizzes WHERE gametype='Rearranging the Words'";
            break;
        default:
            echo "Invalid button value.";
            break;
    }}


    include 'choosegameui.php'

   

?>
