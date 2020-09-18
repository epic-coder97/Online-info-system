<?php
session_start();

error_reporting(1);
?>
<!--Menu Bar Close Here-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="csir_logo.png"/width="160px"height="40px"style="margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"title="Home">Home</a></li>
       <!-- <li><a href="about.php"title="About">About </a></li>-->
		    <li><a href="image gallery.php"title="Gallery">Gallery </a></li>
          <li><a href="analysis.php"title="Sophisticated Analysis ">Sophisticated Analysis </a></li>
          <li><a href="library.php"title="Library">Library </a></li>
          <li><a href="#"title="Gallery">Anual Report </a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="research.php"title="Gallery">Research<span class="caret"></span> </a>
            <ul class="dropdown-menu">
                <li><a href="research.php">Biodiversity and Palaeobiology</a></li>
                <li><a href="bioe.php">Bioenergy</a></li>
                <li><a href="biop.php">Bioprospecting</a></li>
            </ul>
          </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

        <?php
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="logout.php">Logout</a></li>
        	</ul>
        </li>
        <?PHP } else
		{
		?>
		<li><a href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
        </li>
		<?php
		} ?>

      </ul>
    </div>
  </div>
</nav>

<!--Menu Bar Close Here-->
