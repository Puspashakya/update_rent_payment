<?php
  ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="script.js"></script>
    <title></title>
  
<style>
  
  div.logos{
    width: 99%;
    height: 33%;
  }

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    background: #f2f2f2;
    
  }
  
  @keyframes slide {
    from {
      transform: translateX(0);
    }
    to {
      transform: translateX(-100%);
    }
  }
  
  .logos {
    overflow: hidden;
    padding: 60px 0;
    background: white;
    white-space: nowrap;
    position: relative;
  }
  
  .logos:before,
  .logos:after {
    position: absolute;
    top: 0;
    width: 250px;
    height: 100%;
    content: "";
    z-index: 2;
  }
  
  .logos:before {
    left: 0;
    background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
  }
  
  .logos:after {
    right: 0;
    background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
  }
  
  .logos:hover .logos-slide {
    animation-play-state: paused;
  }
  
  .logos-slide {
    display: inline-block;
    animation: 35s slide infinite linear;
  }
  
  .logos-slide img {
    height: 200px;
    margin: 0 40px;
  }

  







    


</style>

  </head>
  <body>
    <div class="logos">
    <h1 style="margin-top:15px;"> <center>  Welcome to the rent payment system</center> </h1>

      <div class="logos-slide">
        <a href="index1.php"><img src="./logos/1.jpg" /></a>
        <a href="index1.php"><img src="./logos/2.jpg" /></a>
        <a href="index1.php"><img src="./logos/3.jpg" /></a>
        <a href="index1.php"><img src="./logos/4.jpg" /></a>
        <a href="index1.php"><img src="./logos/5.jpg" /></a>
        <a href="index1.php"><img src="./logos/6.jpg" /></a>
        <a href="index1.php"><img src="./logos/7.jpg" /></a>
        <a href="index1.php"><img src="./logos/8.JPG" /></a>
        <a href="index1.php"><img src="./logos/9.JPG" /></a>
        <a href="index1.php"><img src="./logos/11.JPG" /></a>
        <a href="index1.php"><img src="./logos/5.jpg" /></a>
        <a href="index1.php"><img src="./logos/6.jpg" /></a>
        <a href="index1.php"><img src="./logos/7.jpg" /></a>
        
      </div>
    </div>

    
   
        
    <div id="room-feature">
      <h2 style="text-align: center;">Room</h2>
      
      <?php include "img/del/room_feature.php"  ?>
     
    </div>







    <br>
    <br>
    <br>
    <br>
    <br>
    
    
    <div id="feature">
      
      <h2 style="text-align: center;">Near By places</h2>
      <?php include "img/del/feature.php"  ?>
    </div>
     







    <script>
      var copy = document.querySelector(".logos-slide").cloneNode(true);
      document.querySelector(".logos").appendChild(copy);


    let sliderImages = document.querySelectorAll(".slide"),
    arrowLeft = document.querySelector("#arrow-left"),
    arrowRight = document.querySelector("#arrow-right"),
    current = 0;
    
    // Clear all images
    function reset() {
    for (let i = 0; i < sliderImages.length; i++) {
    	sliderImages[i].style.display = "none";
        }
    }
    
    // Initial slide
    function startSlide() {
    reset();
    sliderImages[0].style.display = "block";
    }
    
    // Show previous
    function slideLeft() {
    reset();
    sliderImages[current - 1].style.display = "block";
    current--;
    }
    
    // Show next
    function slideRight() {
    reset();
    sliderImages[current + 1].style.display = "block";
    current++;
    }
    
    // Left arrow click
    arrowLeft.addEventListener("click", function () {
    if (current === 0) {
    	current = sliderImages.length;
    }
    slideLeft();
    });
    
    // Right arrow click
    arrowRight.addEventListener("click", function () {
    if (current === sliderImages.length - 1) {
    	current = -1;
    }
    slideRight();
    });
    
    startSlide();


    




    let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

 

    </script>
    
  </body>
</html>