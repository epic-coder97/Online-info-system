<?php
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($update))
{
$que="update Users set fname='$fname',pass='$pass',mobile='$mob',lab='$add' where email='$eid'";
mysqli_query($con,$que);
$msg= "<h3 style='color:blue'>Profile Updated successfully</h3>";
}
?>
<!--  $update is the name of the input button-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>profile update</title>
  <meta charset="utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<style>

    div.c {
  position: absolute;
  right: 70px;
  width: 200px;
  height: 120px;
}

    </style>
<body style="margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
 <?php
     $sql= mysqli_query($con,"select * from users where email='$eid' ");
     $result=mysqli_fetch_assoc($sql);
?>
<div class="container-fluid"id="primary"><!--Primary Id-->
  <center><h1 style="background-color:#ed2553;border-radius:50px;font-family: 'Baloo Bhai', cursive;box-shadow:5px 5px 9px blue;text-shadow:2px 2px#000;display:inline-block;">User Profile</h1></center><br>
  <div class="container">
    <div class="row">
	<center><?php  echo $msg; ?></center>
                 <div class="c"><h3>Please fill information for all the forms</h3></div><br>
        <br><br>
        <br><br>
        <br>

    <div class="c">
         <div ><button id="pi"  class="w3-button w3-black w3-round-xlarge">personal Information</button></div>
        <br>
        <br>
        <div ><button id="ad"  class="w3-button w3-black w3-round-xlarge">Address and Contact Information</button></div>
        <br>
        <br>
        <div ><button id="pt"  class="w3-button w3-black w3-round-xlarge">publication table</button></div>
        <br>
        <br>
        <div ><button id="pos"  class="w3-button w3-black w3-round-xlarge">Position(s) held in URDIP</button></div>
        <br>
        <br>
        <div ><button id="je"  class="w3-button w3-black w3-round-xlarge">Job Experience </button></div>
    </div>


     <form class="form-horizontal" method="post">
       <div class="col-sm-6">
          <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="name" value="<?php echo $result['fname']; ?>"class="form-control"/>
          </div>
        </div>
      </div>

      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Email-Id:</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['email']; ?>"class="form-control"/readonly="readonly">
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Password:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="pass" value="<?php echo $result['pass']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Mobile:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="mob" value="<?php echo $result['mobile']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Lab:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="add" value="<?php echo $result['lab']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Gender:</h4></div>
                <div class="col-sm-8">
                 <strong><?php echo $result['gender']; ?></strong>
          </div>
        </div>
      </div>



      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-5"></div>
                <div class="col-sm-7	">
                 <input type="submit" value="Update Profile" name="update" class="btn btn-primary"/>
          </div>
        </div>
      </div>

    </div>
<!--User Profile Update Query-->
        </form>
      </div>
   </div>
 </div>

<?php
include('Footer.php')
?>
</body>
</html>

<script type="text/javascript">
    document.getElementById("pi").onclick = function () {
        location.href = "personal_info.php";
    };
</script>
<script type="text/javascript">
    document.getElementById("ad").onclick = function () {
        location.href = "address.php";
    };
</script>
<script type="text/javascript">
    document.getElementById("pt").onclick = function () {
        location.href = "pt.php";
    };
</script>

<script type="text/javascript">
    document.getElementById("pos").onclick = function () {
        location.href = "pos.php";
    };
</script>

<script type="text/javascript">
    document.getElementById("je").onclick = function () {
        location.href = "je.php";
    };
</script>
