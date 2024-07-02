<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage_class.css">
    <title>View Game</title>
</head>


<header>
    <div class="header">
        <div class="logo">
            <a href="teacher_main_page.php">
                <img src="logo.png" alt="Logo" width="300px;" height="100px;" margin-buttom="-15px;">
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="teacher_main_page.php">Home</a></li>
                <li>
                    <a>Manage Games ▾</a>
                    <ul class="dropdown">
                        <li><a href="">Manage MCQ</a></li>
                        <li><a href="">Manage Memory</a></li>
                        <li><a href="">Manage Database</a></li>
                        <li><a href="">Manage HTML</a></li>
                    </ul>
                </li>
                <li>
                    <a>Manage Resources ▾</a>
                    <ul class="dropdown">
                        <li><a href="coursetable.php">Manage Course</a></li>
                        <li><a href="pythontable.php">Manage Python</a></li>
                        <li><a href="databasetable.php">Manage Database</a></li>
                        <li><a href="htmltable.php">Manage HTML</a></li>
                    </ul>
                </li>
                <li><a href="manage_class.php">Manage Classes</a></li>
                <li><a href="#">Chat</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    </header><br><br>
<body>
<?php
include("connection_database.php");

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM quizzes q INNER JOIN user_register u ON q.Id = u.Id WHERE name LIKE '%$search%'";
    $result = $con->query($sql);
?>

<form action="manage_game.php" method="POST" style="margin-bottom: 20px;"  Id="search_f">
    <label for="search-bar">Search:</label>
    <input type="text" Id="search" name="search" placeholder="Enter Game">
    <input type="submit" value="Search">
</form>

<table id="result" class="common-table" style="border-collapse: collapse;">
    <tr class="search-user" style="height: 75px;">
        <th colspan="3" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Search Results</th>
        <th colspan="1" class="right-align"><a href="manage_game.php" class="button" style="text-decoration: none;">Back</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
                <th>Created By</th>
                <th>Quiz Name</th>
                <th>Game Type</th>
                <th>Action</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['gametype'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['quizID'] . ')"><img src="edit_button.png" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="manage_game_delete.php?quizID=' . $row['quizID'] . '"><img src="delete_button.png" alt="Edit" width="25" height="28"></a></td>';
        echo '</tr>';
    }
    ?>
</table>

<?php
} else { $sql = "SELECT * FROM quizzes q INNER JOIN user_register u ON q.Id = u.Id";
    $result = $con->query($sql);    

?>

<form action="manage_game.php" method="POST" style="margin-bottom: 20px;" Id="search_f">
    <label for="search">Search:</label>
    <input type="text" Id="search" name="search" placeholder="Enter Games">
    <input type="submit" value="Search">
</form>

<table id="register" class="common-table" style="border-collapse: collapse;">
    <tr class="manage-user" style="height: 75px;">
        <th colspan="3" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Manage Games</th>
        <th colspan="1"><a href="manage_game_add.php" class="button" style="text-decoration: none; width: 100px;">Add Games</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
                <th>Created By</th>
                <th>Quiz Name</th>
                <th>Game Type</th>
                <th>Action</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['gametype'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['quizID'] . ')"><img src="edit_button.png" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="manage_game_delete.php?quizID=' . $row['quizID'] . '"><img src="delete_button.png" alt="Edit" width="25" height="28"></a></td>';
        echo '</tr>';
    }
    ?>
</table>
</table>
<?php
}
?>

<!-- Modal for editing user -->
<div id="editUserModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <div id="editUserContent"></div>
    </div>
</div>

<script>
    function openEditModal(Id) {
        // Get the modal and modal content elements
        var modal = document.getElementById('editUserModal');
        var editUserContent = document.getElementById('editUserContent');

        // Make an AJAX request to load the user_edit.php content
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                editUserContent.innerHTML = xhr.responseText;
                modal.style.display = 'block';
            }
        };
        xhr.open('GET', 'manage_class_edit.php?Id=' + Id, true);
        xhr.send();

        // Close the modal when the close button is clicked
        document.getElementById('closeModal').onclick = function () {
            modal.style.display = 'none';
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