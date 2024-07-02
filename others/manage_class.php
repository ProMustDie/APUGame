<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage_class.css">
    <title>View Class</title>
    <style>
        /* Add your CSS styles here, if needed */
    </style>
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
include("connection_database.php");

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM classes WHERE name LIKE '%$search%'";
    $result = mysqli_query($con, $query);
?>

<form action="manage_class.php" method="POST" style="margin-bottom: 20px;"  Id="search_f">
    <label for="search-bar">Search:</label>
    <input type="text" Id="search" name="search" placeholder="Enter Class">
    <input type="submit" value="Search">
</form>

<table id="result" class="common-table" style="border-collapse: collapse;">
    <tr class="search-user" style="height: 75px;">
        <th colspan="4" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Search Results</th>
        <th colspan="1" class="right-align"><a href="manage_class.php" class="button" style="text-decoration: none;">Back</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
        <th>Name</th>
        <th>Description</th>
        <th>Page URL</th>
        <th>Image URL</th>
        <th>Actions</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td>' . $row['website_url'] . '</td>';
        echo '<td>' . $row['image_url'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['Id'] . ')"><img src="edit_button.png" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="manage_class_delete.php?Id=' . $row['Id'] . '"><img src="delete_button.png" alt="Edit" width="25" height="28"></a></td>';
        echo '</tr>';
    }
    ?>

</table>

<?php
} else {
    $result = mysqli_query($con, "SELECT * FROM classes");
?>

<form action="manage_class.php" method="POST" style="margin-bottom: 20px;" Id="search_f">
    <label for="search">Search:</label>
    <input type="text" Id="search" name="search" placeholder="Enter Class">
    <input type="submit" value="Search">
</form>

<table id="register" class="common-table" style="border-collapse: collapse;">
    <tr class="manage-user" style="height: 75px;">
        <th colspan="4" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Manage Class</th>
        <th colspan="1"><a href="manage_class_add.php" class="button" style="text-decoration: none; width: 100px;">Add Class</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
        <th>Name</th>
        <th>Description</th>
        <th>Page URL</th>
        <th>Image URL</th>
        <th>Actions</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td>' . $row['website_url'] . '</td>';
        echo '<td>' . $row['image_url'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['Id'] . ')"><img src="edit_button.png" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="manage_class_delete.php?Id=' . $row['Id'] . '"><img src="delete_button.png" alt="Edit" width="25" height="28"></a></td>';
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
