<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Student Page - Home</title>
    <link rel="stylesheet" href="student_main_page.css">
    <style>
        /* Add this CSS */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar {
            display: flex;
        }
    </style>
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
                <li><a href="#">View Result</a></li>
                <li><a href="library.php">Resources</a></li>
                <li><a href="class.php">Classes</a></li>
                <li><a href="service.php">Forum</a></li>
                <li><a href="chat1/chat/users.php">Chat</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    </header>
    <br><br><br><br><br>
<body>
    <div class="content">
        <h1>Welcome! Students</h1>
        <button class="button" onclick="location.href='student_quiz/studentui/choosegametype.html'">Play Games</button>
    </div>
</body><br><br><br><br><br><br><br><br><br><br>
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
