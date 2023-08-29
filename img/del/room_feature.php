<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Slideshow container */
div.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  height: 33%
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.text {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 100px;
  text-align: center;
}
.slideshow-container:hover .text {
  opacity: 1;
}
.slideshow-container{
  margin: auto;
  width: 800px;
  height: 300px;
}
.slideshow-container img{
  width: 100%;
  height: 100%;
}



</style>
</head>
<body>

<div class="slideshow-container">

        <div class="mySlides">
          
          <img src="./logos/1.jpg"> 
          <div class="text"><h3>Bright room <br> Rs: 4500(only room) <br> 3rd floor </h3></div>
        </div>

        <div class="mySlides">
          
          <img src="./logos/2.jpg">
          <div class="text"><h3>Bright room with balcony <br> Rs: 5500(only room) <br> 2nd floor</h3></div>
        </div>

        <div class="mySlides">
          
          <img src="./logos/3.jpg">
          <div class="text"><h3> Bright room with wide space <br> Rs: 5000 <br> Ground floor</h3></div>
        </div>

        <div class="mySlides">
          
          <img src="./logos/4.jpg">
          <div class="text"><h3>Beatiful room for 3 member family <br> Rs: 4000 <br> Second floor</h3></div>
        </div>
        <div class="mySlides">
          
          <img src="./logos/5.jpg">
          <div class="text"><h3>Wide room for 4 member family <br> Rs: 4500 <br> Third floor</h3></div>
        </div>
        <div class="mySlides">
          
          <img src="./logos/6.jpg">
          <div class="text"><h3>Good room <br>Rs: 4000 <br> Second floor </h3></div>
        </div>
        <div class="mySlides">
          
          <img src="./logos/7.jpg">
          <div class="text"><h3>Beautiful room with balcony <br> Rs: 5500 <br> Second floor</h3></div>
        </div>


        <a class="prev" onclick="plusSlides1(-1)">❮</a>
        <a class="next" onclick="plusSlides1(1)">❯</a>

</div>
<br>


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides1(n) {
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
