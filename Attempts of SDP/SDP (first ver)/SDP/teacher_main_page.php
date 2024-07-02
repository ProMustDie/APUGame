<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Teacher Page - Home</title>
    <link rel="stylesheet" href="teacher_main_page.css">
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
    </header>
    <br><br><br><br><br>
<body>
    <div class="content">
        <h1>Welcome! Teacher</h1>
        <button class="button" onclick="location.href='pythontable.php'">Here to Delete, Update and View</button>
    </div>
</body>

</html>
