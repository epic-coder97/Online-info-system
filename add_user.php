<?php
if(isset($add))
{
	$sql=mysqli_query($con,"select * from users where email='$email'");
	if(mysqli_num_rows($sql))
	{
	echo "this room is already added";
	}
	else
	{
	mysqli_query($con,"insert into users values(fname,mname,lname,email,pass,mobile,lab,gender,designation,regdate,pic) values('$fname','$mname','$lname','$email','$Passw','$mobi','$lab','$gend','$Des','$date1','$pict')";
	echo "Rooms added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">


  <tr>
    <th>First name</th>
    <td><input type="text" name="fname"  class="form-control"/>
    </td>
  </tr>

  <tr>
		<th>Middle Name</th>
		<td><input type="text" name="mname"  class="form-control"/>
		</td>
	</tr>

  <tr>
		<th>last name</th>
		<td><input type="text" name="lname"  class="form-control"/>
		</td>
	</tr>

  <tr>
		<th>Email</th>
		<td><input type="text" name="email"  class="form-control"/>
		</td>
	</tr>

  <tr>
		<th>Password</th>
		<td><input type="text" name="Passw"  class="form-control"/>
		</td>
	</tr>

  <tr>
		<th>Mobile</th>
		<td><input type="text" name="email"  class="form-control"/>
		</td>
	</tr>

  <tr>
		<th>Lab</th>
		<td><input type="text" name="email"  class="form-control"/>
		</td>
	</tr>

  <tr>
		<th>Gender</th>
		<td><input type="radio" name="gend"value="male"required><b>Male</b>&emsp;
    <input type="radio" name="gend"value="Female"required><b>Female</b>&emsp;
		</td>
	</tr>


	<tr>
		<th>Designation</th>
		<td><input type="text" name="Des"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<th>Registration Date</th>
		<td><input type="date" name="date1"  class="form-control"/>
		</td>
	</tr>



	<tr>
		<th>Profile Pic</th>
		<td><input type="file" name="pict"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Room Details" name="add"/>
		</td>
	</tr>
</table>
</form>
