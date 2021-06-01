<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}


</style>



</head>

<body>
<section class="main_para">
	
	<div class="header" >
		<div class="inner_header">
			<div class="logo_container">
								<a href="index.php">
<br>
				<h1>Swami <span>Vivekananda</span></h1>
			</div>

			<ul class="navigation">



				    <a href="index.php"><li>Home</li></a>
				    <a href="about.php"><li>About</li></a>
					<a href="blog.php"><li>Blog</li></a>
					<a href="gallary.php"><li>Gallary</li></a>
					<a href="quotes.php"><li>Quotes</li></a>
					<a href="contact.php"><li>Contact</li></a>
			</ul>
		</div>
	    </div>
<br><br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/vijay.png" style="width:100%">
  <div class="text">विवेकानन्द शिला स्मारक - एक भारत विजयी भारत</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/vijay1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/vijay2.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
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
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>


<br>
<br><br><br>
<br>




<div class="row">
  <div class="column">
    <img src="images/Bhuvaneshwari-Devi-1841-1911.jpg" alt="Snow" style="width:100%; height: 620px">
    <caption>Bhuvaneshwari-Devi-1841-1911</caption>
  </div>
  <div class="column">
    <img src="images/swami10.jpg" alt="Forest" style="width:100%; height: 620px">
    <caption>Swami vivekananda in madrass</caption>
  </div>
  <div class="column">
    <img src="images/swami7.jpg" alt="Mountains" style="width:100%; height: 620px">
    <caption>मुम्बई में गेटवे ऑफ़ इन्डिया के निकट स्थित स्वामी विवेकानन्द</caption>
  </div>
</div>

<br><br>
<div class="row">
  <div class="column">
    <img src="images/swami8.jpg" alt="Snow" style="width:100%; height: 300px">
    <caption>वेलूर मठ स्थित स्वामी विवेकानन्द मन्दिर</caption>
  </div>
  <div class="column">
    <img src="images/swami9.jpg" alt="Forest" style="width:100%; height: 300px">
    <caption>वेलूर मठ स्थित स्वामी विवेकानन्द मन्दिर</caption>
  </div>
  <div class="column">
    <img src="images/swami6.jpg" alt="Mountains" style="width:100%; height: 300px">
    <caption>स्वामी विवेकानन्द शिकागो के विश्व धर्म परिषद् में बैठे हुए</caption>
  </div>
</div>

<br><br>
<div class="row">
  <div class="column">
    <img src="images/swami12.jpg" alt="Snow" style="width:100%; height: 420px">
    <caption>वेलूर मठ स्थित स्वामी विवेकानन्द मन्दिर</caption>
  </div>
  <div class="column">
    <img src="images/swami13.jpg" alt="Forest" style="width:100%; height: 420px">
    <caption>स्वामी विवेकानन्द</caption>
  </div>
  <div class="column">
    <img src="images/swami14.jpg" alt="Mountains" style="width:100%; height: 420px">
    <caption>स्वामी विवेकानन्द</caption>
  </div>
</div>

<br><br>
<div class="row">
  <div class="column">
    <img src="images/swami15.jpg" alt="Snow" style="width:100%; height: 620px">
    <caption>स्वामी विवेकानन्द</caption>
  </div>
  <div class="column">
    <img src="images/swami16.jpg" alt="Forest" style="width:100%; height: 620px">
    <caption>स्वामी विवेकानन्द</caption>
  </div>
  <div class="column">
    <img src="images/swami17.jpg" alt="Mountains" style="width:100%; height: 620px">
    <caption>स्वामी विवेकानन्द</caption>
  </div>
</div>

<br><br>
<div class="row">
  <div class="column">
    <img src="images/swami18.jpg" alt="Snow" style="width:100%; height: 620px">
    <caption>स्वामी विवेकानन्द</caption>
  </div>
  <div class="column">
    <img src="images/swami19.jpg" alt="Forest" style="width:100%; height: 620px">
    <caption>स्वामी विवेकानन्द</caption>
  </div>
  <div class="column">
    <img src="images/swamiji_room.jpg" alt="Forest" style="width:100%; height: 620px">
    <caption>The Bed Room of Swami Vivekananda at Belur Math</caption>
  </div>
</div>
<br><br>
<div class="row">
  <div class="column">
    <img src="images/sister1.jpg" alt="Snow" style="width:100%; height: 620px">
    <caption>भगिनी निवेदिता</caption>
  </div>
  <div class="column">
    <img src="images/sister2.jpeg" alt="Forest" style="width:100%; height: 620px">
    <caption>भगिनी निवेदिता</caption>
  </div>
  <div class="column">
    <img src="images/sister3.jpg" alt="Forest" style="width:100%; height: 620px">
    <caption>भगिनी निवेदिता</caption>
  </div>
</div>
<br><br><br>

<figure>
<p align="center">
<img src="images/sister5.png">
<figcaption>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
सिस्टर निवेदिता की मृत्यु</figcaption>
</p>
</figure>



<br><br><br>
<br>
<br>





























<p align="center" style="font-size: 35px;">Fear is death, fear is sin, fear is hell, fear is unrighteousness, <br>
	fear is wrong life. All the negative thoughts and ideas that are in the world <br>
	 have proceeded from this evil spirit of fear.
</p>

<p align="right" style="font-size: 36px">Swami Vivekananda</p>
<br><br>


<figure>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="images/childhood.jpg">
<figcaption>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspChildhood picture</figcaption>
</figure>























<br><br>

</section>



<div class="footer">
<br><br>

                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="blog.php">Blog</a>
          <a href="gallary.php">Gallary</a>
          <a href="quotes.php">Quotes</a>
          <a href="contact.php">Contact</a>


          <br><br><br>

                             
                             Poddar College Technology Management, <br>
                             Near SP Office
                             Krishna Nagar <br>
                             Bharatpur

                              <br> <br>

           abc@gmail.com




<br><br><br><br><br><br><br><br><br>
Created by Yash Sharma Industries
<br><br>



</div>
</div>


</body>




</html>