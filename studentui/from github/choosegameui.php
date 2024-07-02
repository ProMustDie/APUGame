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
  <p a href="choosegametype. class="back"><-Back</p>
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
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr onclick='redirectToPage(" . $row['Id'] . ")'>";
              echo "<td>" . $row["Id"] . "</td>";
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
    function redirectToPage(Id){
      window.location.href = "mcq.php?Id=" + Id;
    }
  </script>
</body>
</html>