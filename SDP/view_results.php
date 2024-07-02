<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="view_results.css" rel ="stylesheet">
    <title>View Results</title>
</head>


<body>
<header>
    <div class="header">
        <div class="logo">
            <a href="SDP/student_main_page.php">
                <img src="logo.png" alt="Logo" width="300px;" height="100px;" margin-buttom="-15px;">
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="SDP/student_main_page.php">Home</a></li>
                <li><a href="SDP/student_quiz/studentui/choosegametype.html">Games</a></li>
                <li><a href="view_results.php">View Result</a></li>
                <li><a href="SDP/library.php">Resources</a></li>
                <li><a href="SDP/class.php">Classes</a></li>
                <li><a href="SDP/service.php">Forum</a></li>
                <li><a href="SDP/chat1/chat/users.php">Chat</a></li>
                <li><a href="SDP/logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    </header>
<?php
session_start();
if (isset($_SESSION['user_id'])) {
    include("SDP/connection_database.php");
} else {
    header('Location: ../../login.php');
    exit;
}

$userID = $_SESSION['user_id'];

$stmt = $con->prepare("SELECT quizzes.name, results.results FROM results JOIN quizzes ON results.quizID = quizzes.quizID WHERE results.userID = ?");
$stmt->bind_param("i", $userID);
$stmt->execute();
$result = $stmt->get_result();
?>

<table id="result" class="common-table" style="border-collapse: collapse;">
    <tr style="height: 50px; font-size: 15px;">
                <th>Quiz Name</th>
                <th>Results</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . "</td>";
    echo "<td>" . htmlspecialchars($row['results'], ENT_QUOTES, 'UTF-8') . "</td>";
    echo "</tr>";

}
?>
</tr>
</body>
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