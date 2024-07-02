<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }
  
  /* Header Styles */
  .header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    padding: 20px 0;
    margin-top:-1px;
    margin-right: 8px;
  }
  
  header{
    background-color: white;
  }

  .logo{

  }
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }
  .navbar ul {
    list-style: none;
    background: #fff;
    margin-top:15px;
    font-weight: 700;
}

.navbar ul li {
    display: inline-block;
    position: relative;
}

.navbar ul li a {
    display: block;
    padding: 20px 25px;
    color: #000; /* Set text color to black */
    text-decoration: none;
    text-align: center;
    font-size: 20px;
}

.navbar ul li ul.dropdown li {
    display: block;
}

.navbar ul li ul.dropdown {
    width: 100%;
    background: #fff; /* Set background color of dropdown to white */
    position: absolute;
    z-index: 999;
    display: none;
    margin-top: 1px;
}

.navbar ul li a:hover {
    background: #fff;
    color: black;
    text-decoration: none;
}

.navbar ul li:hover ul.dropdown {
    display: block;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar {
    display: flex;
}

  /* Table Styles */
  .common-table {
    width: 80%;
    margin-left: 10%;
    margin-right: 10%;
    font-family: Arial, Helvetica, sans-serif;
    text-align: left;
    border-collapse: collapse;
    margin-top: 5%;
  }
  
  /* Style for the search form */
  form {
    margin-bottom: 20px;    
    margin: 20px 0;
  }
  
  .right-align {
    text-align: right;
  }
  
  
  label {
      font-weight: bold;
  }
  
  #search {
      padding: 5px;
      height: 30px;
      width: 250px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
  }
  
  #search_f{
    margin-bottom: 20px;    
    margin: 20px 0;
    text-align: center;
  }

  input[type="submit"] {
      padding: 5px 10px;
      background-color: #013a8b;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
  }

  /* Hover effect for the search button */
  input[type="submit"]:hover {
    background-color: #5f91f4; /* Change the background color on hover */
  }
  
  
  .common-table th {
    padding: 13px;
    text-align: left;
    padding-top: 12px;
    padding-bottom: 12px;
  }
  
  /* Add this CSS in your <style> section or an external CSS file */
.common-table th, .common-table td {
  width: 150px; /* Adjust the width as per your design */
  white-space: normal;
  word-wrap: break-word;
}

  
  .common-table td,
  .common-table th {
    padding: 13px;
    text-align: left;
    border-bottom: 1px solid #000; /* You can adjust the border color and thickness */
  }
  
  .common-table tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  .common-table tr.manage-user,tr.search-user {
    width: 200px;
    height: 20px;
    text-align: left;
    color: #fff;
    background-color: #013a8b;
  }
  
  /* Button styles */
  /* Button styles */
  
  .button {
    display: inline-block;
    padding: 15px 10px;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .button:hover {
    background-color: #5f91f4; /* Change the background color on hover */
  }
  
  .button1 {
    display: inline-block;
    padding: 15px 10px;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .button1:hover {
    background-color: #5f91f4; /* Change the background color on hover */
  }
  
  
  .space {
    text-decoration: none;
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
  }
  
  .modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 800px;
    position: relative;
  }
  
  /* Define the transition for the input fields */
  .modal-content input[type="text"],
  .modal-content input[type="password"],
  .modal-content input[type="email"],
  .modal-content select#user-type {
      border: none;
      border-bottom: 1px solid #888;
      outline: none;
      width: 100%;
      text-align: left;
      padding: 5px 0;
      font-size: 15px;
      background: transparent;
      cursor: pointer;
      transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Add a transition for border and box-shadow */
  }
  /* Add a line between header and content */
  
  
  /* Define the transition for the select field */
  .modal-content select#user-type {
      transition: border-color 0.3s ease;
  }
  
  /* Add a hover effect to the input fields */
  .modal-content input[type="text"]:hover,
  .modal-content input[type="password"]:hover,
  .modal-content input[type="email"]:hover,
  .modal-content select#user-type:hover {
      border-color: #007bff; /* Change the border color on hover */
  }
  
  /* Add an animation effect when an input field is focused or clicked */
  .modal-content input[type="text"]:focus,
  .modal-content input[type="password"]:focus,
  .modal-content input[type="email"]:focus,
  .modal-content select#user-type:focus {
      border-color: #007bff; /* Change the border color when focused */
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.6); /* Add a box shadow when focused */
  }
  
  /* Add this CSS to align "User Type" label to the left within the modal */
  .modal-content label {
      text-align: left; /* Align labels to the left */
      display: block; /* Ensure labels are on separate lines */
      margin-bottom: 5px; /* Add some spacing between labels and inputs */
      font-size: 15px;
  }
  
  
  .close {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }
  
  .close:hover {
    color: red;
  }
  
  /*footer part*/
  footer {
    background-color: #013a8b;
    color: #fff;
    padding: 20px 0;
    position: relative;
  }

  .footer-content {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }

  .footer-item {
    flex: 1;
    text-align: center;
    margin: 0 20px;
  }

  .footer-item h3 {
    font-size: 20px;
    margin-bottom: 10px;
  }

  .footer-item p {
    font-size: 16px;
    margin: 5px 0;
  }

    </style>
    <title>View Python</title>
    <style>
        /* Add your CSS styles here, if needed */
    </style>
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
    $query = "SELECT * FROM python WHERE title LIKE '%$search%'";
    $result = mysqli_query($con, $query);
?>

<form action="pythontable.php" method="POST" style="margin-bottom: 20px;"  Id="search_f">
    <label for="search-bar">Search:</label>
    <input type="text" Id="search" name="search" placeholder="Enter File">
    <input type="submit" value="Search">
</form>

<table id="result" class="common-table" style="border-collapse: collapse;">
    <tr class="search-user" style="height: 75px;">
        <th colspan="4" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Search Results</th>
        <th colspan="1" class="right-align"><a href="pythontable.php" class="button" style="text-decoration: none;">Back</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
        <th>Title</th>
        <th>Description</th>
        <th>Background Image</th>
        <th>File</th>
        <th>Actions</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td>' . (strlen($row['backimg']) > 30 ? substr($row['backimg'], 0, 30) . '...' : $row['backimg']) . '</td>';
        echo '<td>' . $row['file'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['pythonid'] . ')"><img src="edit_button.png" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="pythondelete.php?pythonid=' . $row['pythonid'] . '"><img src="delete_button.png" alt="Edit" width="25" height="28"></a></td>';
        echo '</tr>';
    }
    ?>
</table>

<?php
} else {
    $result = mysqli_query($con, "SELECT * FROM python");
?>

<form action="pythontable.php" method="POST" style="margin-bottom: 20px;" Id="search_f">
    <label for="search">Search:</label>
    <input type="text" Id="search" name="search" placeholder="Enter Class">
    <input type="submit" value="Search">
</form>

<table id="register" class="common-table" style="border-collapse: collapse;">
    <tr class="manage-user" style="height: 75px;">
        <th colspan="4" style="font-size:30px; padding-top: 0; padding-bottom: 0; ">Manage Python Chapter</th>
        <th colspan="1"><a href="uploadpython.php" class="button" style="text-decoration: none; width: 100px;">Add Chp</a></th>
    </tr>
    <tr style="height: 50px; font-size: 15px;">
        <th>Title</th>
        <th>Description</th>
        <th>Background Image</th>
        <th>File</th>
        <th>Actions</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td>' . (strlen($row['backimg']) > 30 ? substr($row['backimg'], 0, 30) . '...' : $row['backimg']) . '</td>';
        echo '<td>' . $row['file'] . '</td>';
        echo '<td><a href="#" onclick="openEditModal(' . $row['pythonid'] . ')"><img src="edit.png" alt="Edit" width="40" height="30"></a><span class="space">&nbsp&nbsp;</span>';
        echo '<a onclick="return confirm(\'Delete this record?\')" href="delete.php?pythonid=' . $row['pythonid'] . '"><img src="delete.png" alt="Edit" width="25" height="28"></a></td>';
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
    function openEditModal(pythonid) {
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
        xhr.open('GET', 'edit.php?pythonid=' + pythonid, true);
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
