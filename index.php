<?php
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
  <title>Online Scientists Information System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link href="css/style.css"rel="stylesheet"/>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
body {
  font-family: "Lato", sans-serif;
}
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {background-color: #555555;}
h1{
  color: black;
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
</head> <!--Head Open  Here-->


<body style="margin-top:50px;">
  <?php
      include('Menu Bar.php')
  ?>
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
          <p>URDIP provides value added information services to wide array of clients including start-up companies, SMEs, Research Institutes within and outside CSIR, large Indian Corporate and Multinational Corporations. Its primary clients include R&D, legal, new business development and multi-functional corporate teams. </p><br>
         <button class="button button5"> <a href="about.php"title="About">More information </a></button>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>CSIR Unit for Research and Development of Information Products</p>
      </footer>
    </div>
</div>
 <!--Room Info Start Here-->

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

    <iframe src="child.html" width=295 height=400 frameBorder="0">
  </iframe>
    </div>
  </div>

  <div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
       <br /> <h1>Login/register</h1>
       <br>
       <br>
       <div ><button id="log"  class="w3-button w3-black w3-round-xlarge">Login</button></div>
      <br>
      <br>
      <div ><button id="cre12"  class="w3-button w3-black w3-round-xlarge">Create Account</button></div>

  </div>
</div>


    </div>
</div>
</div>

<?php
  include('Footer.php')
?>
</body>
</html>

<script type="text/javascript">
    document.getElementById("log").onclick = function () {
        location.href = "Login.php";
    };
</script>
<script type="text/javascript">
    document.getElementById("cre12").onclick = function () {
        location.href = "reg_new.php";
    };
