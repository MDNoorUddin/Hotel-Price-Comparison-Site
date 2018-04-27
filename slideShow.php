<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {height:400px ; width: 70%}

/* Slideshow container */
.slideshow-container {
  
  position:absolute;
    top: 100px;
  margin: auto;
  width: 100%;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container" align="center">

<div class="mySlides fade">
  <div class="numbertext">1 / 16</div>
  <img src="30441829_610575185970010_6674871918107033600_n.jpg" style="max-width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 16</div>
  <img src="30414919_908125189396328_4002116127743279104_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 16</div>
  <img src="30226797_961766717321068_4298143527394607104_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 16</div>
  <img src="29597323_1743941648986280_2040447849273022452_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 16</div>
  <img src="29572754_1232106450256465_652611509295272014_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 16</div>
  <img src="27545445_1822116867859765_3164760408548266062_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 16</div>
  <img src="23905543_1663257833749310_5575750429327615314_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 16</div>
  <img src="17424723_632731186920461_3158918528869368188_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>



<div class="mySlides fade">
  <div class="numbertext">9 / 16</div>
  <img src="22279915_317821232015493_1106232288791537885_n.jpg" style="max-width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">10 / 16</div>
  <img src="30706553_187157408587877_6455268977542168576_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">11 / 16</div>
  <img src="Sylhet.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">12 / 16</div>
  <img src="29133214_144302306391192_6302689173430075392_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">13 / 16</div>
  <img src="29595507_2082751708432070_6699978256074156631_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">14 / 16</div>
  <img src="27657200_793652314153820_803490895922688274_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">15 / 16</div>
  <img src="new..-495x400.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">16 / 16</div>
  <img src="19702363_1974142382867445_3987967682401343751_n.jpg" style="max-width:100%">
  <div class="text">Caption Two</div>
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>  
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>  
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

</body>
</html> 
