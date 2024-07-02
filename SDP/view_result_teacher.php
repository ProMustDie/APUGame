<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view_result_teacher.css">
    <title>View Result</title>
</head>


<header>
    <div class="header">
        <div class="logo">
            <a href="SDP/teacher_main_page.php">
                <img src="logo.png" alt="Logo" width="300px;" height="100px;" margin-buttom="-15px;">
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="SDP/teacher_main_page.php">Home</a></li>
                <li><a href="SDP/quiz/manage_game.php">Manage Game</a></li>
                <li><a href="view_result_teacher.php">View Result</a></li>
                <li>
                    <a>Manage Resources ▾</a>
                    <ul class="dropdown">
                        <li><a href="SDP/coursetable.php">Manage Course</a></li>
                        <li><a href="SDP/pythontable.php">Manage Python</a></li>
                        <li><a href="SDP/databasetable.php">Manage Database</a></li>
                        <li><a href="SDP/htmltable.php">Manage HTML</a></li>
                    </ul>
                </li>
                <li><a href="SDP/manage_class.php">Manage Classes</a></li>
                <li><a href="SDP/chat2/chat/users.php">Chat</a></li>
                <li><a href="SDP/logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    </header><br><br>
<body>
<?php
include("SDP/connection_database.php");
session_start();


$stmt = $con->prepare("SELECT users.username, results.results, quizzes.name FROM results INNER JOIN quizzes ON results.quizID = quizzes.quizID INNER JOIN users ON users.user_id = results.userID WHERE users.user_type = 'student'");
$stmt->execute();
$result = $stmt->get_result();
?>

<table id="result" class="common-table" style="border-collapse: collapse;">
    <tr class="search-user" style="height: 75px;">
        <th colspan="4" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Search Results</th>
        <th colspan="1" class="right-align"><a href="manage_class.php" class="button" style="text-decoration: none;">Back</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
        <th>Student Name</th>
        <th>Quiz Name</th>
        <th>Results</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['results'] . '</td>';
        echo '</tr>';
    }
    ?>
</table>


<!-- Modal for editing user -->
<div id="editUserModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <div id="editUserContent"></div>
    </div>
</div>



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




