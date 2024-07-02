<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>View Discussion Database</title>
<link rel="stylesheet" href="staffview.css">
</head>
<header>
    <div class="header">
        <div class="logo">
            <a href="admin_main_page.php">
                <img src="logo.png" alt="Logo" width="300px;" height="100px;" margin-buttom="-15px;">
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="admin_main_page.php">Home</a></li>
                <li><a href="manage_user.php">Manage User</a></li>
                <li>
                    <a>Manage Forum ▾</a>
                    <ul class="dropdown">
                        <li><a href="staffviewhtml.php">Manage HTML</a></li>
                        <li><a href="staffviewpython.php">Manage Python</a></li>
                        <li><a href="staffviewdatabase.php">Manage Database</a></li>
                        <li><a href="staffviewothers.php">Manage OTHERS</a></li>
                    </ul>
                </li>
                <li><a href="#">Chat</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    </header>

<br><br><br><br><br>
<?php
// Include the database connection file
include("conn.php");

try {
    // Create a PDO connection
    $pdo = new PDO('mysql:host=localhost;dbname=sdp', 'root', '');

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve data from the database
    $stmt = $pdo->query("SELECT * FROM discussiondatabase");

    ?>

    <table id="register" class="common-table" style="border-collapse: collapse;">
    <tr class="manage-user" style="height: 75px;">
        <th colspan="5" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Manage Database User</th>
        
        
    </tr>
    <tr style="height: 50px; font-size: 15px;">
    <th>Comment ID</th>
    <th>student</th>
    <th>post</th>
    <th>date</th>
    <th>Delete</th>
    </tr>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';

        echo '<td>';
        echo $row["parent_comment"];
        echo '</td>';

        echo '<td>';
        echo $row["student"];
        echo '</td>';

        echo '<td>';
        echo $row["post"];
        echo '</td>';

        echo '<td>';
        echo $row["date"];
        echo '</td>';

        echo '<td><a onclick="return confirm(\'Delete this record?\')" href="deleteforumdatabase.php?id='.$row['id'].'"><img src="image/bin.png" alt="Delete" style="width:20px;height:20px;"></a></td>';

        echo '</tr>';
    }
    ?>
    </table>
    <?php
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
</body>
<br><br><br><br><br><br><br><br>
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
