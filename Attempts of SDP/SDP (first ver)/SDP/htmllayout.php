<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
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
header {
            text-align: center;
            padding: 20px 0;
            width: 100%;
        }

 a{
    text-decoration: none;
 }
 .logo{
    margin-top: -20px;
  }
.header-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-align: center;
  padding: 20px 0;
  margin-top: -20px;
}


header{
    background-color: white;
    width: 100%;
    height: 117px;
  }

  .navbar ul {
    list-style: none;
    background: #fff;
    margin-top: -5px;
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

.container {
    width: 96%;
    max-width: 120rem;
    margin: 0 auto; 
}
.hero{

    max-width: 80rem;
    height: 40rem;
    background: no-repeat center center/cover; 
    margin: 5rem auto;
}



main{
    max-width: 100%;
    max-width: 70rem;
    background-color:#1266be;
    margin: 0 auto;
    padding: 3rem;
    border-radius: 1.5rem;
    margin-top: -15rem;
}
main h2{
    color: white;
    text-align: center;
    font-size: 3rem;
    font-weight: 600;
    letter-spacing: 5px;
}
main a{
     display: inline-block;
    font-size: 1.5rem;
    padding: 0.3rem 1.5rem;
    background-color: #5f91f4; /* New background color */
    border-radius: 8px; /* Adjust border-radius */
    color: white; /* Text color */
    text-decoration: none; /* Remove default underline */
    transition: background-color 0.4s ease; 
}

main .profile-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 3rem;
}
main .profile-container .profile{
    display: flex;
    justify-content: center;
    align-items: center;
}
main .profile-container .profile .img-container{
    width: 6rem;
    height: 6rem;
    
    border-radius: 0.5rem;

}
main .profile-container .profile .text{
    margin: 0 1rem;
    font-size: 1.2rem;
    color: white;
    font-weight: 400;
    letter-spacing: 1px;
}
.btn{
    display: inline-block;
    font-size: 1.2rem;
    padding: 0.3rem 1.5rem;
    background-color: #2D7145;
    border-radius: 5px;
    color: white;
}
main p{
    color: white;
    margin: 1rem 0;
}


main .content .content-img-container {
    width: 100%;
    max-height: 35rem;
    overflow: hidden; /* Hide any content that exceeds the container's height */
}

main .content .content-img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}


main .profile-container .profile .img-container img {
    width: 100%; /* Ensure the image takes the full width of the container */
    height: 100%; /* Ensure the image takes the full height of the container */
    border-radius: 0.5rem; /* Keep the border-radius consistent */
    object-fit: cover; /* Crop or expand the image to cover the container */
}

.article-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px; /* Adjust the gap between articles as needed */
}

.article{
    width: 100%;
    background-color: #f5f5f5;
    margin: 5rem 0;
    padding: 5rem 0;
}
.article .heading{
    text-align: center;
    width: 100%;
    position: relative;

}


.cards{
    display: flex;
    justify-content: space-between;
    margin: 4rem auto;
    gap: 5rem;


}
.cards .card-container{
    cursor: pointer;
    transition: all 0.4s ease;
}

.cards .card-container .img-holder{
    width: 100%;
   height: 24rem;
    position: relative;
   
  
}

.cards .card-container .img-holder a{
    font-size: 1.2rem;
    padding: 0.3rem 1.5rem;
    display: inline-block;
    color: #2D7145;
    font-weight: 400;
    position: absolute;
    bottom: 5%;
    right: 5%;
    transition: all 0.4s ease;
    background-color: white;


}
.cards .card-container:hover{
    transform: translate(-1rem);
}
.cards .card-container:hover a{
    background-color: #2D7145;
    color: white;
}
.cards .card-container .card-text{
    background-color: white;
    padding: 2rem;
    box-shadow: 0 0 0.3rem grey;

}

.article .button{
    margin: 0 auto;
    text-align: center;
}
.article .btn{
    font-size: 1.4rem;
    letter-spacing: 1px;
    font-weight: 200;
    border-radius:none;
    padding: 0.5rem 3rem ;
}
.wrapper {
   
  width: 1400px;
 
  height: 400px;
  position: relative;
  background-color: #013a8b;

    max-width: 1400px; /* Set the maximum width */
    margin: 0 auto; /* Center the carousel horizontally */
}
.wrapper i {
  top: 50%;
  height: 50px;
  width: 50px;
  cursor: pointer;
  font-size: 1.25rem;
  position: absolute;
  text-align: center;
  line-height: 50px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 3px 6px rgba(0,0,0,0.23);
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.85);
}
.wrapper i:first-child{
  left: -22px;
}
.wrapper i:last-child{
  right: -22px;
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
  background: #5f91f4;
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
  color: white;
  font-size: 1.31rem;
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
    
    background-color: #5f91f4;
    color: white;
    padding: 10px 20px;
    text-align: center;

    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  h1{
    color: white;
}  

    </style>
    <title>HTML</title>
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
                <li><a href="student_main_page.php">Home</a></li>
                <li><a href="student_quiz/studentui/choosegametype.html">Games</a></li>
                <li><a href="library.php">Resources</a></li>
                <li><a href="class.php">Classes</a></li>
                <li><a href="service.php">Forum</a></li>
                <li><a href="#">Chat</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    </header>

<?php
    include("connection_database.php");
    $id = $_GET['id']; //get id value from url
    $sql = "SELECT * FROM html WHERE htmlid='$id'";

    $result = mysqli_query($con, $sql);
    if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

while ($row = mysqli_fetch_array($result)) { 
    echo'<div class="container">';
        echo'<div class="hero" style="background-image:url('. $row['backimg'] . ')">';
            
        echo'</div>';


 
echo'<main>';
    echo'<h2>' . $row['title'] . '</h2>';

    echo'<div class="content">';
       
       echo'<p>' .$row['description'] .' </p>';

echo '<a href="' . $row['file'] . '">Read more</a>';


        
        
       

        
         
            
        echo'</div>';

       



    echo'</div>';

echo'</main>';
 echo'</div>';
 }
?>
<br><br><br><br>
<h1>HTML</h1>
<br><br>

<div class="wrapper">
<i id="left" class="fa-solid fa-angle-left">Left</i>
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
<i id="right" class="fa-solid fa-angle-right">Right</i>
</div>
<br><br><br>
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
document.addEventListener('DOMContentLoaded', function () {
    const carousels = document.querySelectorAll(".carousel");
    const arrowBtns = document.querySelectorAll(".wrapper i");
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

    arrowBtns[0].addEventListener("click", () => {
        const currentCarousel = document.querySelector(".carousel:not(.dragging)");
        if (currentCarousel) {
            const index = Array.from(carousels).indexOf(currentCarousel);
            currentCarousel.scrollLeft -= currentCarousel.offsetWidth;
            clearTimeout(timeoutIds[index]);
        }
    });

    arrowBtns[1].addEventListener("click", () => {
        const currentCarousel = document.querySelector(".carousel:not(.dragging)");
        if (currentCarousel) {
            const index = Array.from(carousels).indexOf(currentCarousel);
            currentCarousel.scrollLeft += currentCarousel.offsetWidth;
            clearTimeout(timeoutIds[index]);
        }
    });
});
</script>
</body>
</html>