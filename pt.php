<?php
include('connection.php');
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($save))
{
  $sql="insert into publication(emailid, sci_j, ref_j, pub_title, yop, imf, auth, pub_id) values('$eid','$sj','$rd','$tp','$py','$iff','$la','$pmi')";
   if(mysqli_query($con,$sql))

   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>";
   header('location:profile.php');
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
      <center><h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Publication table</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">




        <div class="form-group">
            <div class="control-label col-sm-5"><h4>	Scientific Journal :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="sj" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>


        <div class="form-group">
            <div class="control-label col-sm-5"><h4>	Reference Details of Journal  :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="rd" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>	Title of Publication :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="tp" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Publication Year :</h4></div>
          <div class="col-sm-7">
              <input  name="py" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>Impact Factor :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="iff" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>List of Authors :</h4></div>
          <div class="col-sm-7">
              <input  type="text" name="la" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>PubMed Id :</h4></div>
          <div class="col-sm-7">
              <input type="number" name="pmi" class="form-control"required>
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
