<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Admin Page - Home</title>
    <link rel="stylesheet" href="admin_main_page.css">
    <link rel="stylesheet" href="navbar.css">


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
                <li><a href="chat/chat/users.php">Chat</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    </header>
    <br><br><br><br><br>
        <div class="content">
            <h1>Welcome! Admin</h1>
            <button class="button" onclick="location.href='manage_user.php'">Here to Delete, Update and View</button>
        </div>
    </div>
</body>
</html>