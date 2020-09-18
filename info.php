<?php
session_start();
error_reporting(1);
include('connection.php');
?>

<!doctype html>
<html lang="en-US" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link href="css/style.css"rel="stylesheet"/>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>

	<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 100px;
  left: 0;
  background-color: #92a8d1;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
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

@media screen and (max-height: 400px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
      #headd{
          font: bold;
      }
</style>
<meta charset="ISO-8859-1">
<title>INFORMATION Technology  </title>
</head>

<body style="margin-top:50px;">
    <?php
      include('Menu Bar.php')
  ?>
	<div class="sidenav">
  <a href="Library.php">Library Collection</a>
  <a href="info.php">Information Technology</a>
  <a href="services_1.php">Information Services</a>
  <a href="#">NK-RC</a>
  <a href="e.php">E-Resources</a>

  <a href="i.php">iThenticate Service</a>

</div>




  <!--<div class="subnav">
    <button class="subnavbtn">Reasearch<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="bio.html">Biodiversity and Palaeobiology</a>
      <a href="bioe.html">Bioenergy</a>
      <a href="biop.html">Bioprospecting</a>

    </div>
  </div>-->


<div class="main">

  <h2>Information Technology</h2>
  																	<p The main objective of Library and Information Centre is to strengthen its documentation and information dissemination services with the help of computer. The use of computers in Library started in the year 1991 with the aim to develop various bibliographic databases useful to the scientists. The E-mail service was set up in the year 1995 to facilitate and expedite scientific communication. Subsequently, the Internet facility was set up in the year 1999 to provide access to scientific literature available on the internet. The website of the Institute (www.aripune.org) was developed and launched in the same year. It is maintained by the library. Broadband connection of 1 Mbps bandwidth has been set up in the year 2006 to provide faster access to Internet. Computer systems are installed in the reading hall of the library to provide broadband internet facility.</span></p>
  <p  Droid Sans,helvetica,sans-serif;">The computerization of Library started in the year 1991. Presently, there are dedicated computers to carry each function of the Library separately. All the computers in the Library are connected to form internal library network, which is also a part of main LAN of the institute. Windows version of the library software is available to provide a web-based platform. The library catalogue is available online through Web OPAC and most of the routine library activities are computerized. The barcode system is routinely use in the Library for issuing and receiving of books.</span></p>
  <table>
  <tr>
  <td>Important Links. <span style="color: #ff0000;">Intranet users only </span></td>
  </tr>
  <tr>
  <td>J-Gate@NKRC, e-journal discovery and access  gateway is now available at your desktop.
   </td>
  <td><a style="text-decoration: none; color: #0000ff;" href="http://www.jgateplus.com " target="_blank">ARI Library e-journals   J-Gate@NKRC</a></td>
  </tr>
  <tr>
  <td> ARI Library Web OPAC Catalogue <span style="color: #ff0000;"></span>
  </td>
  <td><a style="text-decoration: none;" href="http://lib-iproxy/w27/" target="_blank"> ARI  Library Online Catalogue</a></td>
  </tr>
  <tr>
  <td>National Union Catalogue of Scientific Serials in India (NUCSSI) </a>
  </td>
  <td>
  <a style="text-decoration: none; color: #0000ff;" href="http://124.124.221.23/default.aspx
  " target="_blank">NUCSSI</a></td>
  </tr>
  <tr>
  <td>You can view current Google Scholar Citation Indices of Agharkar Research Institute
  </td>
  <td><a style="text-decoration: none; color: #0000ff;" href="http://scholar.google.co.in/citations?user=2RPMtTIAAAAJ&amp;hl=en" target="_blank">Google Scholar Citation </a></td>
  </tr>
  </table>
  																</div>
  					</div>
  				</div>
  			</div>
  		</section>
  		<!-- /section -->
  	</main>

  </body>
  </html>
