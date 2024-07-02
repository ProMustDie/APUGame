<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
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
  
 
        header{
    background-color: white;
    width: 100%;
    height: 117px;
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


        .wrappers{
    
            border-radius: 4px;
            width: 100%;



        }
        

        .carousels {
            width: 1000px;
            height: 500px;
            margin: 0 auto;
            margin-top: 20px;
            border-radius: 16px;
            overflow: hidden;
          
    
            position: relative;
        }
    
        .carousels .wrappers {
            width: 100%;
            height: 100%;
    
            position: relative;
            left: 0;
    
            display: flex;
    
            transition: all 1s;

        }
    
        .carousels .wrappers a {
            width: 100%;
            height: 100%;
    
            flex-shrink: 0;
        }
    
        .carousels .wrappers a img {
            width: 100%;
            height: 100%;
    
            object-fit: cover;
        }
    
        .carousels .shift .btn {

            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto 0;
        }
        .carousels .shift .btn {
            z-index: 1;
    


            background-color: #5f91f4;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 8px;
            font-size: 40px;
            font-weight: bold;
            line-height: 50px;
            text-align: center;
            cursor: pointer;
            user-select: none;
            opacity: 0.5;
        }
        .carousels .shift .left {
            left: 20px;
        }
        .carousels .shift .right {
            right: 20px;
        }
    
        .carousels .bottom {
            position: absolute;
    
            bottom: 20px;
    
            
            left: 0;
            right: 0;
            margin: 0 auto;
    

            width: max-content;
    
            display: flex;
 
            gap: 10px;
        }
    
        .carousels .bottom .indicator {
            height: 5px;
            width: 40px;
    
            background-color: #5f91f4;
    
            opacity: 0.5;
            cursor: pointer;
        }
    
        .carousels:hover .bottom .indicator {
            opacity: 1;
        }
        .carousels:hover .shift .btn {
            opacity: 1;
        }

        @media (max-width:820px){
            .slider{
                width: 600px;
                height: 375px;
            }
            .slider .slide .detail{
                padding: 10px 25px;
            }

            .slider .slide .detail h2{
                font-size: 35px;
            }
            .slider .slide .detail p{
                width: 70%;
                font-size: 15px;
            }
            .slider .navi{
                bottom: 25px;
            }
            .slider .navi .btn{
                width: 10px;
                height: 10px;
                margin: 8px;
            }
        }
.wrapper {
  width: 1400px;
 
  height: 400px;
  position: relative;
  background-color: #013a8b;
}

.carousel{
    overflow: hidden;
}
.wrapper .carousel{
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: calc((100% / 3) - 12px);
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  gap: 16px;
  border-radius: 8px;
  scroll-behavior: smooth;
  scrollbar-width: none;

}
.carousel::-webkit-scrollbar {
  display: none;
}
.carousel.no-transition {
  scroll-behavior: auto;
}
.carousel.dragging {
  scroll-snap-type: none;
  scroll-behavior: auto;
}
.carousel.dragging .card {
  cursor: grab;
  user-select: none;
}
.carousel :where(.card, .img) {
  display: flex;
  justify-content: center;
  align-items: center;
}
.carousel .card {
  scroll-snap-align: start;
  height: 342px;
  list-style: none;
  background: #fff;
  cursor: pointer;
  padding-bottom: 15px;
  flex-direction: column;
  border-radius: 8px;
  min-width: 300px;
}

.carousel .card .img {
    display: flex;
    justify-content: center;
    align-items: center;
  background: #013a8b;
  height: 148px;
  width: 148px;
  
}
.card .img img {
  width: 140px;
  height: 140px;
  
  object-fit: cover;
  border: 4px solid #fff;
}
.carousel .card h2 {
  font-weight: 500;
  font-size: 1.56rem;
  margin: 30px 0 5px;
}
.carousel .card span {
  color: black;
  font-size: 1.31rem;
}
@media screen and (max-width: 900px) {
  .wrapper .carousel {
    grid-auto-columns: calc((100% / 2) - 9px);
  }
}
@media screen and (max-width: 600px) {
  .wrapper .carousel {
    grid-auto-columns: 100%;
  }
}@media screen and (max-width: 1068px) {
    .blog-post {
        max-width: 80rem;
    }
    .post-img {
        max-width: 30rem;
        min-width: 30rem;
    }
}
            footer {
  background-color: #013a8b;
  color: #fff;
  padding: 20px 0;
  width: 100%;
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

 .button {
  
    background-color: #013a8b;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .button:hover{
    background-color:#5f91f4;
  }
h1{
    color: white;
}  
    
    </style>
    <title>Library</title>
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
    </header><br><br>
<body>
<div class="container">
    <div class="carousels">
        <div class="wrappers">
            <?php
            include("connection_database.php");
            $sql = "SELECT * FROM course";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($result)){
                echo '<a href="">';
                echo '<img src="' . $row['img'] . '"/>';
                echo '</a>';
            }
            ?>
        </div>
        <div class="shift">
<div class="btn left" onclick="leftShift()">&lt;</div>
<div class="btn right" onclick="rightShift()">&gt;</div>

        </div>
        <div class="bottom"></div>
    </div>
</div>
    
<br><br><br><br><br><br><br><br><br><br><br>
<h1>Python</h1>
<br><br>

<div class="wrapper">

<ul class="carousel">
<?php

 include("connection_database.php");
            $sql = "SELECT * FROM python";
            $result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)){
echo '<li class="card">';
echo '<div class="img">';
echo '<img src="' . $row['backimg'] . '" alt="img" draggable="false" />';
echo '</div>';
echo '<h2>' . $row['title'] . '</h2>';
echo '<span>' . $row['description'] . '</span>';
echo'<a href="pythonlayout.php?id='.$row['pythonid'].'" class="button">Read More</a>';

echo '</li>';
}
?>
</ul>

</div>

<br><br><br><br><br><br><br>

<h1>Database</h1>

<br><br>
<div class="wrapper">

<ul class="carousel">
<?php

 include("connection_database.php");
            $sql = "SELECT * FROM db";
            $result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)){
echo '<li class="card">';
echo '<div class="img">';
echo '<img src="' . $row['backimg'] . '" alt="img" draggable="false" />';
echo '</div>';
echo '<h2>' . $row['title'] . '</h2>';
echo '<span>' . $row['description'] . '</span>';
echo'<a href="databaselayout.php?id='.$row['databaseid'].'" class="button">Read More</a>';
echo '</li>';
}
?>
</ul>

</div>
<br><br><br><br><br><br><br>
<h1>HTML</h1>
<br><br>

<div class="wrapper">

<ul class="carousel">
<?php

 include("connection_database.php");
            $sql = "SELECT * FROM html";
            $result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)){
echo '<li class="card">';
echo '<div class="img">';
echo '<img src="' . $row['backimg'] . '" alt="img" draggable="false" />';
echo '</div>';
echo '<h2>' . $row['title'] . '</h2>';
echo '<span>' . $row['description'] . '</span>';
echo'<a href="htmllayout.php?id='.$row['htmlid'].'" class="button">Read More</a>';

echo '</li>';
}
?>
</ul>

</div>




</div>
<br><br><br><br><br><br><br>
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
   
    let index = 0

    let imageCount = document.querySelectorAll(
        ".carousels .wrappers img"
    ).length

    const bottom = document.querySelector(".carousels .bottom")
    for (let i = 0; i < imageCount; i++) {

        const indicator = document.createElement("div")
        indicator.classList.add("indicator")
        indicator.onclick = () => setIndex(i)

        bottom.append(indicator)
    }

    function createAuto() {
        return setInterval(() => {
            index++
            refresh()
        }, 3000)
    }

 
    let autoTimer = createAuto()

    function refresh() {
        if (index < 0) {

            index = imageCount - 1
        } else if (index >= imageCount) {

            index = 0
        }


        let carousel = document.querySelector(".carousels")


        let width = getComputedStyle(carousel).width
        width = Number(width.slice(0, -2))

        carousel.querySelector(".wrappers").style.left =
            index * width * -1 + "px"
    }

    let refreshWrapper = (func) => {
    
        return function (...args) {
            let result = func(...args)
            refresh()

            clearInterval(autoTimer)
            autoTimer = createAuto()
            return result
        }
    }

    let leftShift = refreshWrapper(() => {
        index--;
        refresh();
    });

    let rightShift = refreshWrapper(() => {
        index++;
        refresh();
    });

    let setIndex = refreshWrapper((idx) => {
        index = idx
    })

    refresh()



</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const carousels = document.querySelectorAll(".carousel");
    
    let timeoutIds = [];

    const handleCarousel = (carousel, index) => {
        const wrapper = carousel.closest(".wrapper");
        const carouselChildrens = [...carousel.children];

        let isDragging = false,
            isAutoPlay = true,
            startX, startScrollLeft;

        const dragStart = (e) => {
            isDragging = true;
            carousel.classList.add("dragging");
            startX = e.pageX;
            startScrollLeft = carousel.scrollLeft;
        };

        const dragging = (e) => {
            if (!isDragging) return;
            carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
        };

        const dragStop = () => {
            isDragging = false;
            carousel.classList.remove("dragging");
        };

        const infiniteScroll = () => {
            if (carousel.scrollLeft === 0) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
                carousel.classList.remove("no-transition");
            } else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = carousel.offsetWidth;
                carousel.classList.remove("no-transition");
            }

            clearTimeout(timeoutIds[index]);
            if (!wrapper.matches(":hover")) autoPlay(carousel, index);
        };

        const autoPlay = () => {
            if (window.innerWidth < 800 || !isAutoPlay) return;
            timeoutIds[index] = setTimeout(() => {
                carousel.scrollLeft += carousel.offsetWidth;
                autoPlay();
            }, 2500);
        };

        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("mousemove", dragging);
        document.addEventListener("mouseup", dragStop);
        carousel.addEventListener("scroll", infiniteScroll);
        wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutIds[index]));
        wrapper.addEventListener("mouseleave", () => autoPlay());

        autoPlay();
    };

    carousels.forEach((carousel, index) => {
        handleCarousel(carousel, index);
    });


});
</script>




</body>
</html> 