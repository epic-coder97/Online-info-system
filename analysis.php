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
<title>Sophisticated Analysis </title>
</head>
	
<body style="margin-top:50px;">
    <?php
      include('Menu Bar.php')
  ?>
	<div class="sidenav">
  <a href="analysis.php">National Fungal Culture...</a>
  <a href="analysis_1.php">Microbial Collection</a>
  <a href="analysis_2.php">Ajrekar Mycological Herbarium</a>
  <a href="analysis_3.php">Agharkar Herbarium</a>
 </div>
  
 
	
	<div class="main" style="margin-top:100px;">

    <h2 id="headd">National Facility for Culture Collection of Fungi (NFCCI -WDCM 932) </h2>
       
	<p style="text-align: justify;">The MACS collection of microorganisms (MCM) is a well-equipped facility housed at Agharkar Research Institute, Pune having modern facilities for culture preservation, storage and activity check. It was inaugurated in 1981 by Professor V.B.D. Skerman, University of Queensland, Australia, then the president of the World Federation for Culture Collections (WFCC). The culture collection was subsequently recognized by WFCC in 1983-84. It is a specialized culture collection of microorganisms used in biomining processes, metal and microbe interactions and industrial waste treatment. Methanogenic and other anaerobic bacteria as well as alkaliphilic and thermophilic bacteria form an important part of the culture collection. In addition, standard cultures routinely used by microbiology laboratories are also maintained.



 </p>
</div>


		
		<!-- /wrapper -->

		<script type='text/javascript' src='http://aripune.org/wp-includes/js/comment-reply.min.js?ver=4.8.12'></script>
<script type='text/javascript' src='http://aripune.org/wp-content/plugins/wp-gallery-custom-links/wp-gallery-custom-links.js?ver=1.1'></script>
<script type='text/javascript' src='http://aripune.org/wp-includes/js/wp-embed.min.js?ver=4.8.12'></script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>


	<!-- /header -->

	<!-- /sidebar -->
		<!-- sidebar -->

	<!--?php get_template_part('searchform'); ?-->
	
	<!--ul class="vertical-list">
		<!--?php wp_nav_menu(array('theme_location' => 'sidebar-menu')); ?>
	</ul-->
	
	<!--div class="sidebar-widget">
		<!--?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div-->
	

	</body>
</html>
