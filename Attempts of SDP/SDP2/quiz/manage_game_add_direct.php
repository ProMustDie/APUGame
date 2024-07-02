<?php
include '../connection_database.php'

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gameName = $_POST['gameName'];
    $gameType = $_POST['gameType'];

    $gameName = mysqli_real_escape_string($con, $gameName);
    $gameType = mysqli_real_escape_string($con, $gameType)
    
    $sql = "INSERT VALUES INTO quizzes (gametype, name, Id) 
    VALUES (?,?,?)"

    $stmt = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($stmt, 'sssi', $gameType, $gameName, $ID);

    
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo '<script type="text/javascript">
                alert("Question added successfully!");
                window.location = "manage_game.php"; 
              </script>';
        exit();
    } else {
        // Handle the error as needed
        echo "Error: " . mysqli_error($con);
        echo '<script type="text/javascript">
                alert("Error adding question. Please try again.");
                window.location = "manage_game.php";
              </script>';
        exit();
    }

}
