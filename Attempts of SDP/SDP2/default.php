<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
  <title>Forum Python</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
  <style>
    /* Add your footer CSS here */
    /* Footer styles */
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

    body {
      background-image: url("image/pythonbackground.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    /* Navigation bar CSS */
    .logo{
    margin-top: -25px;
  }
    header{
    background-color: white;
    width: 100%;
    height: 117px;
  }

  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
} 

  .navbar ul {
    list-style: none;
    background: #fff;
    margin-top: 24px;
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

<body>


<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
          <input type="hidden" id="commentid" name="Rcommentid">
          <div class="form-group">
            <label for="usr">Write your name:</label>
            <input type="text" class="form-control" name="Rname" required>
          </div>
          <div class="form-group">
            <label for="comment">Write your reply:</label>
            <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
          </div>
          <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default" style="margin-top:50px">
    <div class="panel-body">
      <h3>Discussion</h3>
      <hr>
      <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
        <div class="form-group">
          <label for="usr">Write your name:</label>
          <input type="text" placeholder="Please Enter Your Name"class="form-control" name="name" required>
        </div>
        <div class="form-group">
          <label for="comment">Write your question:</label>
          <textarea class="form-control" placeholder="Write Your Questions Here" rows="5" name="msg" required></textarea>
        </div>
        <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
      </form>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <h4>Recent questions</h4>
      <table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
        <tbody id="record">
        </tbody>
      </table>
    </div>
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
</html>
