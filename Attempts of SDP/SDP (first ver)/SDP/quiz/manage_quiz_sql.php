<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage_quiz_mcq.css">
    <title>Manage Rearrange Games</title>
</head>
<body>
<header>
    <div class="header-content">
        <div class="logo">
            <a href="admin_main_page.php" target="_blank">
                <img src="logo.jpg" alt="Logo">
            </a>
        </div>

        <div class="header-nav">
            <ul>
                <li><a href="admin_main_page.php">Home</a></li>
                <li><a href="latest new staff.php">Manage Latest News</a></li>
                <li><a href="articletable.php">Manage Article</a></li>
                <li><a href="manage_user.php">Manage User</a></li>
                <li><a href="manage_bank_suggestion.php">Manage Bank Suggestion</a></li>
                <li><a href="staffview.php">Manage Community</a></li>
                <li><a href="latest new customer.php">User Page</a></li>
            </ul>
        </div>
    </div>
</header>

<?php
include("../connection_database.php");
$quizID = $_GET['quizID'];

    $result = mysqli_query($con, "SELECT * FROM sqlgame WHERE quizID = $quizID");

    // Check for query execution errors
    if (!$result) {
        die('Query failed: ' . mysqli_error($con));
    }
?>
<table id="sqlgame" class="common-table" style="border-collapse: collapse;">
    <tr class="manage-user" style="height: 75px;">
        <th colspan="5" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Manage SQL Quiz</th>
        <th colspan="1"><a href="manage_quiz_sql_add.php?quizID=<?php echo $quizID ?>" class="button" style="text-decoration: none; ">Add Questions</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
        <th>Question Text</th>
        <th>Answer</th>
        <th>Answer Options</th>
        <th>Actions</th>
    </tr>
    
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['questionText'] . '</td>';
        echo '<td>' . $row['answer'] . '</td>';
        echo '<td>' . $row['answerOptions'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['questionID'] . ')"><img src="edit_button.jpg" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="manage_quiz_sql_delete.php?questionID=' . $row['questionID'] . '&quizID='. $quizID .'"><img src="delete_button.jpg" alt="Edit" width="25" height="28"></a></td>';
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
    xhr.open('GET', 'manage_quiz_sql_edit.php?questionID=' + questionID, true);
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
