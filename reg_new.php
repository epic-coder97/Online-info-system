<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from users where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";
  }
  else
  {

      $sql="insert into users(fname,mname,lname,email,pass,mobile,lab,gender,designation,regdate,pic) values('$fname','$mname','$lname','$email','$Passw','$mobi','$lab','$gend','$Des','$date1','$pict')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>";
   header('location:Login.php');
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
      <center><h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Create New Account?</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4>First Name :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="fname" class="form-control"placeholder="Enter Your Name"required>
          </div>
        </div>
            <div class="form-group">

            <div class="control-label col-sm-5"><h4>Middle Name :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mname" class="form-control"placeholder="Enter Your Middle Name"required>
          </div>
            </div>
            <div class="form-group">
            <div class="control-label col-sm-5"><h4>Last Name :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="lname" class="form-control"placeholder="Enter Your last Name"required>
          </div>
        </div>


        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Email-Id:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="email" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>


        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Password :</h4></div>
          <div class="col-sm-7">
              <input type="password" name="Passw" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Mobile No:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

      <!--  <div class="form-group">
            <div class="control-label col-sm-5"><h4>Lab name :</h4></div>
          <div class="col-sm-7">
              <textarea  name="lab" class="form-control"required></textarea>
          </div>
        </div>-->

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Gender :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="gend"value="male"required><b>Male</b>&emsp;
              <input type="radio" name="gend"value="Female"required><b>Female</b>&emsp;
              <input type="radio" name="gend"value="other"required><b>Other</b>
          </div>
          </div>

          <div class="form-group">
            <div class="control-label col-sm-5"><h4>Lab name :</h4></div>
          <div class="col-sm-7">
            <select name="lab" class="form-control"required>
              <option>A</option>
              <option>B</option>
              <option>C</option>
              <option>D</option>
              <option>E</option>
              <option>F</option>
              <option>G</option>
              <option>H</option>
              <option>I</option>
              <option>J</option>
              <option>K</option>
              <option>L</option>

            </select>
        </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Designation :</h4></div>
          <div class="col-sm-7">
              <textarea  name="Des" class="form-control"required></textarea>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Registration Date :</h4></div>
          <div class="col-sm-7">
              <input type="date" name="date1" class="form-control"required placeholder="yyyy-mm-dd">
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">profile pic :</h4></div>
          <div class="col-sm-7">
              <input type="file" name="pict"accept="image/*"required>
          </div>
          <div class="row">
            <div class="col-sm-6"style="text-align:right;"><br>
            <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'Baloo Bhai', cursive;height:40px;"/>
          </div>
          </div>
          </div>
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
