<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="register.css">
  <title>Register</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form id="register" name="register" action="registerRecord.php" method="POST" enctype="multipart/form-data">
                    <h2>Add User</h2>
                    <div class="inputbox">
                        <input type="text" name="username" id="username"  autocomplete="off" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" id="password"  autocomplete="off" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="email" id="email" autocomplete="off" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <select id="user_type" name="user_type" required>
                            <option value="admin">Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="parent">Parent</option>
                        </select>

                    </div>

                    <button type="submit" class="register">Add User</button><br><br>
                    <p><a href="manage_user.php" class="back">Back</a></p>

                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
