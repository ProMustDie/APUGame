<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        window.history.forward();
    </script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/40c98f609a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form id="login" name="login" action="loginRecord.php" method="POST">
                    <br><h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-sharp"></ion-icon>
                        <input type="text" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" id="password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="forget">
                        <label for="remember">
                            <input type="checkbox" name="remember" id="remember"> Remember Me
                        </label>
                    </div>
                    <button type="submit" class="login">Log in</button>

                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>