<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="ui.css">
  <title>Game Menu</title>
</head>
<body>
  
  <div class="app">
  <a href="../studentui/choosegametype.html" class="back"><-Back</a>
  <h1>Your Games</h1>
  <table>
    <thead>
      <tr>
        <td>Created By</td>
        <td>Quiz Name</td>
        <td>Game Type</td>
      </tr>
    </thead>
    <tbody>
      <?php 
      include '../memorygame/dbConnection.php';
      
if (isset($_GET['button'])) {
  $button = $_GET['button'];
  
  // Do something based on the button value
  switch ($button) {
      case 'MCQ':
          $sql = "SELECT * FROM quizzes q ,user_register u  WHERE q.gametype='MCQ' AND q.Id=u.Id";
          break;
      case 'Memory Game':
          $sql = "SELECT * FROM quizzes q ,user_register u WHERE q.gametype='memory' AND q.Id=u.Id ";
          break;
      case 'Rearranging the Words':
          $sql = "SELECT * FROM quizzes q ,user_register u WHERE q.gametype='rearrange' AND q.Id=u.Id ";
          break;
      default:
          echo "Invalid button value.";
          break;
  };
}
 
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($button === "MCQ") {
                echo "<tr onclick='redirectToMCQ(" . $row['quizID'] . ")'>";
            } else if ($button === "Memory Game") {
                echo "<tr onclick='redirectToMemory(" . $row['quizID'] . ")'>";
            } else {
                echo "<tr onclick='redirectToRearrange(" . $row['quizID'] . ")'>";
            }
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["gametype"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>0 results</td></tr>";
    }
      ?>
    </tbody>
  </table>

  </div>
  <script>
    function redirectToMCQ(quizID){
      window.location.href = "../mcq/mcq.php?quizID=" + quizID;
    }
    function redirectToMemory(quizID){
      window.location.href = "../memorygame/memorygame.php?quizID=" + quizID;
    }
    function redirectToRearrange(quizID){
      window.location.href = "../rearrange words/rearrange.php?quizID=" + quizID;
    }
  </script>
</body>
</html>