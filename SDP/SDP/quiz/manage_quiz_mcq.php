<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage_quiz_mcq.css">
    <title>Manage MCQ</title>
</head>
<body>
<header>
    <div class="header">
        <div class="logo">
            <a href="teacher_main_page.php">
                <img src="logo.png" alt="Logo" width="300px;" height="100px;" margin-buttom="-15px;">
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="../teacher_main_page.php">Home</a></li>
                <li><a href="manage_game.php">Manage Game</a></li>
                <li><a href="../../view_result_teacher.php">View Result</a></li>
                <li>
                    <a>Manage Resources ▾</a>
                    <ul class="dropdown">
                        <li><a href="../coursetable.php">Manage Course</a></li>
                        <li><a href="../pythontable.php">Manage Python</a></li>
                        <li><a href="../databasetable.php">Manage Database</a></li>
                        <li><a href="../htmltable.php">Manage HTML</a></li>
                    </ul>
                </li>
                <li><a href="../manage_class.php">Manage Classes</a></li>
                <li><a href="#">Chat</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    </header><br><br>

<?php
include("../connection_database.php");
$quizID = $_GET['quizID'];

    $result = mysqli_query($con, "SELECT * FROM mcq WHERE quizID = $quizID");

    // Check for query execution errors
    if (!$result) {
        die('Query failed: ' . mysqli_error($con));
    }
?>

<table id="quizzes" class="common-table" style="border-collapse: collapse;">
    <tr class="manage-user" style="height: 75px;">
        <th colspan="2" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Manage MCQ Quiz</th>
        <th colspan="1"><a href="manage_quiz_mcq_add.php?quizID=<?php echo $quizID ?>" class="button" style="text-decoration: none; ">Add Questions</a></th>
        <th colspan="1" class="right-align"><a href="../quiz/manage_game.php" class="button" style="text-decoration: none;">Back</a></th>
 
    </tr>
    <tr style="height: 50px; font-size: 15px;">
        <th>Question</th>
        <th>Answer Options</th>
        <th>Answer</th>
        <th>Actions</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['question'] . '</td>';
        echo '<td>' . $row['answerOptions'] . '</td>';
        echo '<td>' . $row['answer'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['questionID'] . ')"><img src="edit_button.png" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="manage_quiz_mcq_delete.php?questionID=' . $row['questionID'] . '&quizID='. $quizID .'"><img src="delete_button.png" alt="Edit" width="25" height="28"></a></td>';
        echo '</tr>';
    }echo '</tr>';
    ?>
</table>

<?php

?>

<!-- Modal for editing user -->
<div id="editUserModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <div id="editUserContent"></div>
    </div>
</div>

<script>
    function openEditModal(questionID) {
    // Ensure modal and edit content containers exist in your HTML
    var modal = document.getElementById('editUserModal');
    var editUserContent = document.getElementById('editUserContent');
    var closeModal = document.getElementById('closeModal'); // Ensure this button exists inside the modal

    // Validate if the modal and editUserContent elements are found
    if (!modal || !editUserContent) {
        console.error('Modal or edit content container not found.');
        return; // Stop the function if elements are not found
    }

    // AJAX request to fetch the edit form
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) { // Check if the request is complete
            if (xhr.status === 200) { // Check if the request was successful
                editUserContent.innerHTML = xhr.responseText; // Update modal content
                modal.style.display = 'block'; // Show the modal
            } else {
                console.error('Failed to fetch edit content. Status:', xhr.status);
            }
        }
    };
    xhr.open('GET', 'manage_quiz_mcq_edit.php?questionID=' + questionID, true);
    xhr.send();

    
    if (!closeModal._isListenerAttached) {
        closeModal.onclick = function () {
            modal.style.display = 'none';
        };
        closeModal._isListenerAttached = true; 
    }
}

</script>
</body><br><br><br><br><br><br><br><br>

<footer>
  <div class="footer-content">
      <div class="footer-item">
          <h3>APU Web Solution Sdn.Bhd</h3>
          <p>A responsible IT team in develop web design and software.</p>
      </div>
      <div class="footer-item">
          <h3>Contact</h3>
          <p>Phone: +6012 345678</p>
          <p>Email: apuwebsolution@gmail.com</p>
          <p>Address: APU, Technology Park, Bukit Jalil</p>
      </div>
  </div>
</footer>
</html>
