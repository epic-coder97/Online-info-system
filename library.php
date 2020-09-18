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
<title>LIBRARY COLLECTION </title>
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
<br />
<br/>
<h2><b>Library Collection</b></h2>
	<p>The Library and Information Centre of URDIP is one of the key reference and information centre for researchers in life sciences. It is primarily meant for the use of its research staff and students. However, it is regularly used and consulted by many research workers, teaching staff of various colleges and universities. The Library had a modest beginning starting with the generous donation of entire collection of books, rare back volumes, periodicals and reference works especially in German by Prof. S.P.Agharkar. Since then books, periodicals and other reading material have been continuously added. At present, it is a well equipped state-of-the-art information technology facility for print as well electronic resources.

An important feature of the Library is the availability of the complete set of Biological Abstracts since the publication of the first issue till the year 2000. The Library has â€˜Ekaswa-Aâ€™ and â€˜Ekaswa-Bâ€™ in CD-ROM format, which gives information on Indian patents. The Library is in process of providing an online access to database on foreign patents. The Library subscribes to scientific databases for accessing latest scientific literature. An on-line access has been provided to Web to Science, Selected Science Direct Collections, and CAB databases e.g. Soybean Abstracts. It also subscribes to various foreign and Indian periodicals in print format. The collection of books and bound volumes exceeds 27,000. The Library also has a unique collection of geological maps, atlases, microfilms/ microfisches. It is also a depository of publications, theses, and annual reports of the Institute. The Library is in the process of digitalizing collection of reprints, annual reports and theses of the Institute. The Library has developed databases of books, bound volumes of periodicals and ARI-MACS publications.
The library catalogue is available online through Web OPAC for ARI Library users.



 </p>
</div>

</body>
</html>
