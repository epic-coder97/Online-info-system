<?php 
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html>
<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 200px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>
    

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="pi.html" class="w3-bar-item w3-button">Personal Information</a>
  <a href="je.html" class="w3-bar-item w3-button">Job Experience</a>
  <a href="pt.html" class="w3-bar-item w3-button">Publication Table</a>
  <a href="ph.html" class="w3-bar-item w3-button">Position in URDIP</a>
  <a href="ad.html" class="w3-bar-item w3-button">Address and contact</a>
  <a href="home_final(analysis).html" class="w3-bar-item w3-button">Sophisticated Analytics</a>
 
   <a href="Library.html" class="w3-bar-item w3-button">Library</a>
   <a href="photo.html" class="w3-bar-item w3-button">PhotoGallery</a>
   <a href="Annual1.html" class="w3-bar-item w3-button">AnuualReport</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
  
</nav>

 

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
    
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
    
  <div class="w3-center">
     
  <h4 style="color: black "><b>WELCOME</b></h4>
       <image src="download2.png"  height="150" width="180" hspace="40" style="vertical-align:middle"> </image> 
  <h1 class="w3-xxxlarge w3-animate-bottom">Online Scientist Information System</h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">About US</button>
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4>About Us.</h4>
        <h5>CSIR-URDIP </h5>
      </header>
      <div class="w3-padding">
        <p>India's Council of Scientific and Industrial Research (CSIR) has a specialized service Unit for Research and Development of Information Products (URDIP) which is involved in the pre-research and pre-development phase of the research projects, by providing intellectual property and techno-commercial information services.</p>
        <p>URDIP provides value added information services to wide array of clients including start-up companies, SMEs, Research Institutes within and outside CSIR, large Indian Corporate and Multinational Corporations. Its primary clients include R&D, legal, new business development and multi-functional corporate teams. <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>CSIR Unit for Research and Development of Information Products</p>
      </footer>
    </div>
</div>

<!-- Navigation-->
<div class="w3-bar w3-theme">

  <a href="Home_jah.html" class="w3-bar-item w3-button w3-padding-16"><b>Research</b></a>
 
<  
  
  <a href="ad.html" class="w3-bar-item w3-button w3-padding-16"><b>Address and contact</b></a>
  <a href="home_final(analysis).html" class="w3-bar-item w3-button w3-padding-16"><b>Sophisticated Analytics</b></a>

  <a href="Library.html" class="w3-bar-item w3-button w3-padding-16"><b>Library</b></a>
   <a href="photo.html" class="w3-bar-item w3-button w3-padding-16"><b>PhotoGallery</b></a>
   <a href="Annual1.html" class="w3-bar-item w3-button w3-padding-16"><b>AnuualReport</b></a>

    


</div>
<!-- Navigation ends-->    

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Search Bar</h3><br>
  
  <iframe src="filter1.php" width=500 height=400 frameBorder=0>
</iframe>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <br>
  
  <iframe src="child.html" width=395 height=400 frameBorder="0">
</iframe>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Login/Register</h3><br>
  
  <iframe src="login.php" width=300 height=300 frameBorder="0">
  </iframe>
  </div>
</div>
</div>


<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>© Copyright 2020 CSIR-URDIP, Pune-411008, Maharashtra, India.</h3>
  
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <p>Remember to check out our  <a href="https://www.facebook.com/urdip.csir" class="w3-btn w3-theme-light" target="_blank">Facebook</a>
    <a href="https://twitter.com/patinformatics" class="w3-btn w3-theme-light" target="_blank">Twitter</a>
      <a href="https://www.linkedin.com/company/urdip/" class="w3-btn w3-theme-light" target="_blank">Linkedin</a></p>
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
