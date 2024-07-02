<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="class.css">
 <title>Class</title>
</head>
<header>
    <div class="header">
        <div class="logo">
            <a href="student_main_page.php">
                <img src="logo.png" alt="Logo" width="300px;" height="100px;" margin-buttom="-15px;">
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="student_main_page.php">Home</a></li>
                <li><a href="student_quiz/studentui/choosegametype.html">Games</a></li>
                <li><a href="../view_results.php">View Result</a></li>
                <li><a href="library.php">Resources</a></li>
                <li><a href="class.php">Classes</a></li>
                <li><a href="service.php">Forum</a></li>
                <li><a href="chat1/chat/users.php">Chat</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    </header>
<body><br> 
  <div class="header1">
        <p>Find Out a Video!</p>
        <div class="searchbar">
          <input type="text" Id="searchInput" placeholder="Search for a video...">
        </div>

    </div>
</div>
<br><br><br>


<div class="main">
<div class="holder">
<?php
include("connection_database.php");
$sql = "SELECT * FROM classes";
$result = mysqli_query($con, $sql);
if (!$result) {
    die('SQL Error: ' . mysqli_error($con));
}

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo '<div class="box">';
        echo '<div class="card">';
        echo '<div class="card-front">';
        echo '<div class="Img">';
        echo '<img src="' . $row['image_url'] . '" width="320px" height="220px">';
        echo '</div>';
        echo '</div>';
        echo '<div class="card-back">';
        echo '<div class="content">';
        echo '<p class="name">' . $row['name'] . '</p>';
        echo '<p class="description">' . $row['description'] . '</p>';
        echo '<div class="btn">';
        echo '<a href="' . $row['website_url'] . '">Find Out More!</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
    }
} else {
    echo 'No class yet!';
}

// Close the database connection
mysqli_close($con);
?>
</div>
</div>
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

<script>
// Get the input element and bank suggestion containers
const searchInput = document.getElementById('searchInput');
const bankContainers = document.querySelectorAll('.box');

// Add an event listener to the search input
searchInput.addEventListener('input', () => {
  const searchValue = searchInput.value.toLowerCase();

  // Loop through all bank containers
  bankContainers.forEach((container) => {
    const name = container.querySelector('.name').textContent.toLowerCase();
    // ^ Use .name instead of name here

    // Show/hide the container based on the search input
    if (name.includes(searchValue)) {
      container.style.display = 'block';
    } else {
      container.style.display = 'none';
    }
  });
});

</script>


</body>
</html>