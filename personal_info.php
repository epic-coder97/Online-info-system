<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($save))
{
$que="update personal_info set DOB='$date1',marital='$mar',CV='$CV1' where email='$eid'";
mysqli_query($con,$que);
$msg= "<h3 style='color:blue'>Profile Updated successfully</h3>";
       header('location:profile.php'); 

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
      <center><h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Personal Information</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
         
     

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Marital Status :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="mar"value="Married"required><b>Married</b>&emsp;
              <input type="radio" name="mar"value="Unmarried"required><b>Unmarried</b>&emsp;
          </div>
          </div>

          <!--<div class="form-group">
            <div class="control-label col-sm-5"><h4>Country :</h4></div>
          <div class="col-sm-7">
            <select name="countr" class="form-control"required>
              <option>India</option>
              <option>Pakistan</option>
              <option>China</option>
            </select>
        </div>
        </div>-->
                
      
        
        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Date Of Birth :</h4></div>
          <div class="col-sm-7">
              <input type="date" name="date1" class="form-control"required placeholder="yyyy-mm-dd">
          </div>
        </div>     

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">CV :</h4></div>
          <div class="col-sm-7">
              <input type="file" name="CV1"accept=".xlsx,.xls,.doc, .docx,.txt,.pdf"required>
          </div>
          <div class="row">
            <div class="col-sm-6"style="text-align:right;"><br>
            <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'Baloo Bhai', cursive;height:40px;"/>
                <br>
                                <br>

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
