<?php
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($save))
{


      $sql="insert into address_1(postal_addr_o,	ph_o,	fax_o,	res_addr_p,	postal_addr_p,	state_p, city_p, pin_p,	std_p,	ph_p,	res_addt_l,	postal_addr_l	,state_l,	city_l,	pin_l	,std_l,	ph_l	,per_mob,	emailid, web	) values('$PA','$PHO','$FO','$RAP','$PP','$SP','$CP','$PCP','$SCP','$PHP','$RAL','$PL','$SL','$CL','$PCL','$SCL','$PHL','$mob','$eid','$weblink')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>";
   header('location:address.php');
   }

}
?>

<?php
// define variables and set to empty values
 $websiteErr = "";
 $weblink = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
<style>
.error {color: #FF0000;}
</style>
<body style="margin-top:50px;">
  <?php
include('Menu Bar.php');
  ?>
<div class="container-fluid"style="background-color:#4286f4;color:#000;"> <!-- Primary Id-->
  <div class="container">
    <div class="row">
      <center><h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Address and Contact details</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4>Postal Address (Official) :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="PA" class="form-control"placeholder="Enter Your Name"required>
          </div>
        </div>
            <div class="form-group">

            <div class="control-label col-sm-5"><h4>Phone (offocial)</h4></div>
          <div class="col-sm-7">
              <input type="text" name="PHO" class="form-control"placeholder="Enter Your Middle Name"required>
          </div>
            </div>
            <div class="form-group">
            <div class="control-label col-sm-5"><h4>Fax (official) :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="FO" class="form-control"placeholder="Enter Your last Name"required>
          </div>
        </div>


        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Residential Address(permanent) :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="RAP" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>


        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Postal Address  :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="PP" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>State :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="SP" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>City :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="CP" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>Pin Code :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="PCP" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>STD Code :</h4></div>
          <div class="col-sm-7">
              <input  type="number" name="SCP" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>Phone :</h4></div>
          <div class="col-sm-7">
              <input type="number" name="PHP" class="form-control"required>
          </div>
        </div>

            <input type="checkbox" name="billingtoo" onclick="FillBilling(this.form)">
            <em>Check this box if permanant Address and local Address are the same.</em>


             <div class="form-group">
            <div class="control-label col-sm-5"><h4>Residential Address(Local) :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="RAL" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>


        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Postal Address  :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="PL" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>State :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="SL" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>City :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="CL" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>Pin Code :</h4></div>
          <div class="col-sm-7">
              <input type="number" name="PCL" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>STD Code :</h4></div>
          <div class="col-sm-7">
              <input type="number" name="SCL" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>Phone :</h4></div>
          <div class="col-sm-7">
              <input type="number" name="PHL" class="form-control"required>
          </div>
        </div>

            <div class="form-group">
            <div class="control-label col-sm-5"><h4>Personal Mobile number :</h4></div>
          <div class="col-sm-7">
              <input type="number" name="mob" class="form-control"required>
          </div>
        </div>



            <div class="form-group">
            <div class="control-label col-sm-5"><h4>personal website link :</h4></div>
          <div class="col-sm-7">
              <input type="text"  name="weblink" class="form-control"required>
              <span class="error"><?php echo $websiteErr;?></span>
          </div>
        </div>

            <div class="row">
            <div class="col-sm-6"style="text-align:right;"><br>
            <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'Baloo Bhai', cursive;height:40px;"/>
          </div>
          </div>

            <br>
            <br>



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

<script>
function FillBilling(f) {
  if(f.billingtoo.checked == true) {
      f.RAL.value = f.RAP.value;
      f.PL.value = f.PP.value;
    f.SL.value = f.SP.value;
      f.CL.value = f.CP.value;
    f.PCL.value = f.PCP.value;
      f.SCL.value = f.SCP.value;
    f.PHL.value = f.PHP.value;

  }
}
</script>
