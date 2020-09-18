<?php
$eid=$_GET['eid'];
$sql=mysqli_query($con,"select * from users where email='$eid'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update users set fname='$fname',mname='$mname',lname='$lname',pass='$pass',mobile='$mob',lab='$addr' where email='$eid' ");
header('location:dashboard.php?option=update_user');
}

?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">

	<tr>
		<th>First Name</th>
		<td><input type="text"  name="fname" value="<?php echo $res['fname']; ?>"  class="form-control"/>
		</td>
	</tr>
  <tr>
    <th>Middle Name</th>
    <td><input type="text"  name="mname" value="<?php echo $res['mname']; ?>"  class="form-control"/>
    </td>
  </tr>

  <tr>
    <th>Last Name</th>
    <td><input type="text"  name="lname" value="<?php echo $res['lname']; ?>"  class="form-control"/>
    </td>
  </tr>
  <tr>
    <th>Password</th>
    <td><input type="text"  name="pass" value="<?php echo $res['pass']; ?>"  class="form-control"/>
    </td>
  </tr>

	<tr>
		<th>Mobile</th>
		<td><input type="text" name="mob" value="<?php echo $res['mobile']; ?>"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<th>Lab</th>
		<td><input type="text" name="addr"  value="<?php echo $res['lab']; ?>" class="form-control"/>
		</td>
	</tr>




	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update Room Details" name="update"/>
		</td>
	</tr>
</table>
</form>
