<!Doctype html>
<html>
<head>
	<meta name="landingpage" content="landingpage"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link href="styles/distribpage.css" rel="stylesheet" type="text/css"/>
	<title>
		Landing Page
	</title>
</head>
<body>


	<div class="container">
	    <h1>
		Programina's Basic Slideshow
	   </h1>
	</div>


<!--Navigation Menu -->
	<!--<div>
		<ul>
			<li>
			</li>
			<li>
			</li>
			<li>
			</li>
		</ul>
	</div>-->


<!--slideshow-->

 <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/img1.jpg" style="width:100%">
    <div>Caption One</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/img2.jpg" style="width:700px">
    <div>Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/img3.jpg" style="width:700px">
    <div>Caption Three</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div class="container">
<div>
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div>
	What you can produce with HTML and CSS
</div>
</div>

<!--Footer -->
<!--Navigation Menu -->
	<!--<div>
		<ul>
			<li>
			</li>
			<li>
			</li>
			<li>
			</li>
		</ul>
	</div>-->
<!--Search bar-->


<script src="script/script.js"> </script>
</body>
</html>
