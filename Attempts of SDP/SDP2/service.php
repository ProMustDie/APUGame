<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    
    <!-- Linking Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap">

    <!-- Inline CSS Styles -->
    <style>
        *{
            font-family: Arial, sans-serif;
            margin:0; padding:0;
            box-sizing: border-box;
            outline: none; border:none;
            text-decoration: none;
            text-transform: capitalize;
            transition: .2s linear;
        }
        
        
  header{
    background-color: white;
    width: 100%;
    height: 117px;
  }

  .navbar ul {
    list-style: none;
    background: #fff;
    margin-top: 15px;
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
    text-align: center;
    background: #fff; /* Set background color of dropdown to white */
    position: absolute;
    z-index: 999;
    display: none;
    margin-top: 1px;
}

.navbar ul li a:hover {
    background: #013a8b;
    color: white;
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
        


         body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            padding: 30px;
            background-image:url(backgroundimage.jpeg);
            background-size: contain;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            min-height: 100vh;
            object-fit: cover;
            justify-content: center;
            flex-direction: column; 
            margin: 0;
        padding: 0;
        min-height: 100vh;
        }

        .container {
        background-size: cover; /
        background-repeat: no-repeat; 
        padding: 15px 9%;
        height: 100%;
        width: 100%; 
        padding-bottom: 100px;
        }


        .container .heading{
            text-align: center;
            padding-bottom: 15px;
            color:#fff;
            text-shadow: 0 5px 10px rgba(0,0,0,.2);
            font-size: 50px;
        }

        .container .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap:15px;
        }

        .container .box-container .box{
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
            border-radius: 5px;
            background: #fff;
            text-align: center;
            padding:30px 20px;
        }

        .container .box-container .box img{
            height: 80px;
        }

        .container .box-container .box h3{
            color:#444;
            font-size: 22px;
            padding:10px 0;
        }

        .container .box-container .box p{
            color:#777;
            font-size: 15px;
            line-height: 1.8;
        }

        .container .box-container .box .btn{
            margin-top: 10px;
            display: inline-block;
            background:#333;
            color:#fff;
            font-size: 17px;
            border-radius: 5px;
            padding: 8px 25px;
        }

        .container .box-container .box .btn:hover{
            letter-spacing: 1px;
        }

        .container .box-container .box:hover{
            box-shadow: 0 10px 15px rgba(0,0,0,.3);
            transform: scale(1.03);
        }

        @media (max-width:768px){
            .container{
                padding:20px;
            }
        }
        footer {
            width: 100%;
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
    </header><br><br>

<body>
<div class="container">

    <h1 class="heading">Discussion page</h1><br><br>

    <div class="box-container">

        <div class="box">
            <img src="image/icon-1.png" alt="">
            <h3>HTML 5</h3>
            <p>Any question regarding HTML?</p>
            <a href="default2.php" class="btn">click here!</a>
        </div>

        
        <div class="box">
            <img src="image/python.png" alt="">
            <h3>Python</h3>
            <p>Any question regarding Phyton?</p>
            <a href="default.php" class="btn">click here!</a>
        </div>

        <div class="box">
            <img src="image/database.png" alt="">
            <h3>Database</h3>
            <p>Any question regarding Database?</p>
            <a href="default3.php" class="btn">click here!</a>
        </div>

         <div class="box">
            <img src="image/others.png" alt="">
            <h3>Others</h3>
            <p>Others</p>
            <a href="default4.php" class="btn">click here!</a>
        </div>

        <div class="box">
            <img src="image/others.png" alt="">
            <h3>Others</h3>
            <p>Others</p>
            <a href="default4.php" class="btn">click here!</a>
        </div>

    </div>

</div>
</body>
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
