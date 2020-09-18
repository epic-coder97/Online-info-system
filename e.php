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
<title>E- Resources </title>
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

  <section>
			<div class="detail">
				<div class="row">
					<div class="twelve columns">
						<!-- Our History-->
						<div class="main">
							<!--h4>Organisational Structure</h4-->
							<h4>E - Resources</h4>

																	<table style="width: 830px; border: 1px solid #DCDCDC; margin-top: 20px;" border="2" cellspacing="0" cellpadding="5">
<tbody>
<tr>
<td class="resources_border"><a href="http://www.sciencedirect.com/science/journal/10759964" target="_blank"><img class="alignnone size-full wp-image-51" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image1.jpg" alt="acs" /></a></td>
<td class="resources_border"><a href="http://www.sciencedirect.com/science/journal/07533969" target="_blank"><img class="alignnone size-full wp-image-52" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image2.jpg" alt="annualreview" /></a></td>
<td class="resources_border"><a href="http://www.sciencedirect.com/science/journal/09608524" target="_blank"><img class="alignnone size-full wp-image-53" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image3.jpg" alt="emerald" /></a></td>
<td class="resources_border_rightlast"><a href="http://www.tandfonline.com/loi/tbbb20#.VcxgwcsVjIU" target="_blank"><img class="alignnone size-full wp-image-53" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image4.jpg" alt="emerald" /></a></td>
</tr>
<tr>
<td class="resources_border"><a href="http://link.springer.com/journal/volumesAndIssues/12229" target="_blank"><img class="alignnone size-full wp-image-55" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image5.jpg" alt="jccc" /></a></td>
<td class="resources_border"><a href="http://www.sciencedirect.com/science/journal/01956671" target="_blank"><img class="alignnone size-full wp-image-56" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image6.jpg" alt="nature" /></a></td>
<td class="resources_border"><a href="https://dl.sciencesocieties.org/publications/cs" target="_blank"><img class="alignnone size-full wp-image-57" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image7.jpg" alt="OUP-logo" /></a></td>
<td class="resources_border_rightlast"> <a href="http://www.currentscience.ac.in/" target="_blank"><img class="alignleft size-full wp-image-3914" src="http://aripune.org/wp-content/uploads/2015/10/cursci.png" alt="cursci" /></a></td>
</tr>
<tr>
<td class="resources_border"><a href="http://dev.biologists.org/" target="_blank"><img class="alignnone size-full wp-image-59" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image8.jpg" alt="niscair" /></a></td>
<td class="resources_border"><a href="http://www.sciencedirect.com/science/journal/18786146" target="_blank"><img class="alignnone size-full wp-image-58" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image9.jpg" alt="rsc_chem" /></a></td>
<td class="resources_border"><a href="http://www.nrcresearchpress.com/journal/gen" target="_blank"><img class="alignnone size-full wp-image-61" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image10.jpg" alt="science-aaas" /></a></td>
<td class="resources_border_rightlast"><a href="http://www.sciencedirect.com/science/journal/00166995" target="_blank"><img class="alignnone size-full wp-image-61" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image11.jpg" alt="science-aaas" /></a></td>
</tr>
<tr>
<td class="resources_border_bottomlast"><a href="http://www.tandfonline.com/loi/ugmb20#.VcxxTcsVjIU" target="_blank"><img class="alignnone size-full wp-image-60" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image12.jpg" alt="scifinder" /></a></td>
<td class="resources_border_bottomlast"><a href="http://pubs.acs.org/journal/jafcau" target="_blank"><img src="http://aripune.org/wp-content/uploads/2015/10/eresources-image13.jpg" alt="springer" /></a></td>
<td class="resources_border_bottomlast"><a href="http://journals.cambridge.org/action/displayJournal?jid=LIC" target="_blank"><img src="http://aripune.org/wp-content/uploads/2015/10/eresources-image14.jpg" alt="t&amp;f" /></a></td>
<td class="resources_border_bottomrightlast"><a href="http://www.micropress.org/microaccess/micropaleontology" target="_blank"><img src="http://aripune.org/wp-content/uploads/2015/10/eresources-image15.jpg" alt="wos" /></a></td>
</tr>
<tr>
<td class="resources_border_bottomlast"><a href="http://www.mycologia.org/" target="_blank"><img src="http://aripune.org/wp-content/uploads/2015/10/eresources-image16.jpg" alt="Wiley" /></a></td>
<td class="resources_border_bottomlast"><a href="http://www.mycotaxon.com/vol-list.html" target="_blank"><img src="http://aripune.org/wp-content/uploads/2015/10/eresources-image17.jpg" alt="springer" /></a></td>
<td class="resources_border_bottomlast"><a href="http://www.nature.com/nature/index.html" target="_blank"><img src="http://aripune.org/wp-content/uploads/2015/10/eresources-image18.jpg" alt="t&amp;f" /></a></td>
<td class="resources_border_bottomrightlast"><a href="http://nopr.niscair.res.in/" target="_blank"><img src="http://aripune.org/wp-content/uploads/2015/10/eresources-image19.jpg" alt="wos" /></a></td>
</tr>
<tr>
<td class="resources_border_bottomlast"><a href="http://onlinelibrary.wiley.com/journal/10.1111/(ISSN)1475-4983" target="_blank"><img class="alignleft size-full wp-image-3916" src="http://aripune.org/wp-content/uploads/2015/10/pale.jpg" alt="pale" /></a></td>
<td class="resources_border_bottomlast"> <a href="http://www.mapress.com/j/pt/"><img class="alignleft size-full wp-image-3938" src="http://aripune.org/wp-content/uploads/2015/10/phyto1.jpg" alt="phyto1" /></a></td>
<td class="resources_border_bottomlast"> <a href="https://www.thieme-connect.com/products/ejournals/journal/10.1055/s-00000058" target="_blank"><img src="http://aripune.org/wp-content/uploads/2015/10/eresources-image20.jpg" alt="Wiley" /></a></td>
<td class="resources_border_bottomrightlast"> <a href="http://www.sciencemag.org/journals" target="_blank"><img class="alignnone size-full wp-image-62" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image21.jpg" alt="springer" /></a></td>
</tr>
<tr>
<td class="resources_border_bottomlast"><a href="http://www.nature.com/scientificamerican/index.html" target="_blank"><img class="alignnone size-full wp-image-63" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image22.jpg" alt="t&amp;f" /></a></td>
<td class="resources_border_bottomlast"><a href="http://www.micropress.org/microaccess/stratigraphy" target="_blank"><img class="alignleft size-full wp-image-3936" src="http://aripune.org/wp-content/uploads/2015/10/stratigraphy1.jpg" alt="stratigraphy" /></a></td>
<td class="resources_border_bottomlast"> <a href="http://link.springer.com/journal/volumesAndIssues/122" target="_blank"><img class="alignnone size-full wp-image-66" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image24.jpg" alt="Wiley" /></a></td>
<td class="resources_border_bottomrightlast"> <a href="http://www.ingentaconnect.com/content/iapt/tax" target="_blank"><img class="alignleft size-full wp-image-3934" src="http://aripune.org/wp-content/uploads/2015/10/taxon.gif" alt="taxon" /></a></td>
</tr>
<tr>
<td class="resources_border_bottomlast"><a href="http://aem.asm.org/" target="_blank"><img class="alignnone size-full wp-image-62" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image25.jpg" alt="springer" /></a></td>
<td class="resources_border_bottomlast"><a href="http://ec.asm.org/" target="_blank"><img class="alignnone size-full wp-image-63" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image26.jpg" alt="t&amp;f" /></a></td>
<td class="resources_border_bottomlast"><a href="http://iai.asm.org/" target="_blank"><img class="alignnone size-full wp-image-64" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image27.jpg" alt="wos" /></a></td>
<td class="resources_border_bottomrightlast"><a href="http://jb.asm.org/" target="_blank"><img class="alignnone size-full wp-image-66" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image28.jpg" alt="Wiley" /></a></td>
</tr>
<tr>
<td class="resources_border_bottomlast"><a href="http://jvi.asm.org/" target="_blank"><img class="alignnone size-full wp-image-62" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image29.jpg" alt="springer" /></a></td>
<td class="resources_border_bottomlast"><a href="http://mbio.asm.org/" target="_blank"><img class="alignnone size-full wp-image-63" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image30.jpg" alt="t&amp;f" /></a></td>
<td class="resources_border_bottomlast"><a href="http://mmbr.asm.org/" target="_blank"><img class="alignnone size-full wp-image-64" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image31.jpg" alt="wos" /></a></td>
<td class="resources_border_bottomrightlast"><a href="http://mcb.asm.org/" target="_blank"><img class="alignnone size-full wp-image-66" src="http://aripune.org/wp-content/uploads/2015/10/eresources-image32.jpg" alt="Wiley" /></a></td>
</tr>
</tbody>
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
