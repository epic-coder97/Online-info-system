<?php
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from job_exp where email='$eid' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";
  }
  else
  {

      $sql="insert into job_exp(emailid, org, job_pro, desig, to_date, from_date, addr) values('$eid','$noo','$jp','$des','$td','$fd','$app')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>";
   header('location:profile.php');
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body style="margin-top:50px;">
  <?php
include('Menu Bar.php');
  ?>
<div class="container-fluid"style="background-color:#4286f4;color:#000;"> <!-- Primary Id-->
  <div class="container">
    <div class="row">
      <center><h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Job Experience table</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">




        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Name of organization :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="noo" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>


        <div class="form-group">
            <div class="control-label col-sm-5"><h4>	Job Profile    :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="jp" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>	Designation:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="des" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>	To date:</h4></div>
          <div class="col-sm-7">
              <input type="date"  name="td" class="form-control"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>	From Date:</h4></div>
          <div class="col-sm-7">
              <input type="date"  name="fd" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>Address andn Place of posting :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="app" class="form-control"required>
          </div>
        </div>



        <div class="row">
        <div class="col-sm-6"style="text-align:right;"><br>
        <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'Baloo Bhai', cursive;height:40px;"/>
      </div>
      </div>
      <br />
      <br/>



           </form>
        </div>
      </div>
        <div class="col-sm-4">
        </div>
    </div>
  </div>
<?php
    include('Footer.php')
?>
 </body>
</html>
