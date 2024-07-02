<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage_user.css">
    <title>Manage User</title>
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
    </header><br><br>
<body>
<?php
include("connection_database.php");

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM user_register WHERE username LIKE '%$search%' OR email LIKE '%$search%'";
    $result = mysqli_query($con, $query);

    // Check for query execution errors
    if (!$result) {
        die('Query failed: ' . mysqli_error($con));
    }
?>

<form action="manage_user.php" method="POST" style="margin-bottom: 20px;" id="search_f">
    <label for="search-bar">Search:</label>
    <input type="text" id="search" name="search" placeholder="Enter username or email">
    <input type="submit" value="Search">
</form>

<table id="result" class="common-table" style="border-collapse: collapse;">
    <tr class="search-user" style="height: 75px;">
        <th colspan="5" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Search Results</th>
        <th colspan="1" class="right-align"><a href="manage_user.php" class="button" style="text-decoration: none;">Back</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>User Type</th>
        <th>Actions</th>
    </tr>
    
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['password'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['phone_number'] . '</td>';
        echo '<td>' . $row['user_type'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['Id'] . ')"><img src="edit_button.jpg" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="manage_user_delete.php?Id=' . $row['Id'] . '"><img src="delete_button.jpg" alt="Edit" width="25" height="28"></a></td>';
        echo '</tr>';
    }
    ?>
</table>

<?php
} else {
    $result = mysqli_query($con, "SELECT * FROM user_register");

    // Check for query execution errors
    if (!$result) {
        die('Query failed: ' . mysqli_error($con));
    }
?>

<form action="manage_user.php" method="POST" style="margin-bottom: 20px;" id="search_f">
    <label for="search">Search:</label>
    <input type="text" id="search" name="search" placeholder="Enter username or email">
    <input type="submit" value="Search">
</form>

<table id="user_register" class="common-table" style="border-collapse: collapse;">
    <tr class="manage-user" style="height: 75px;">
        <th colspan="5" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Manage User</th>
        <th><a href="register.php" class="button" style="text-decoration: none; margin-left:-16px; ">Add user</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>User Type</th>
        <th>Actions</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['password'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['phone_number'] . '</td>';
        echo '<td>' . $row['user_type'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['Id'] . ')"><img src="edit_button.jpg" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="manage_user_delete.php?Id=' . $row['Id'] . '"><img src="delete_button.jpg" alt="Edit" width="25" height="28"></a></td>';
        echo '</tr>';
    }
    ?>
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
    function openEditModal(userId) {
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
        xhr.open('GET', 'manage_user_edit.php?Id=' + userId, true);
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
