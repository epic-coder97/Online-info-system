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

	mysqli_query($con,"insert into users(fname,mname,lname,email,pass,mobile,lab,gender,designation,regdate,pic) values('$fname','$mname','$lname','$email','$Passw','$mobi','$lab','$gend','$Des','$date1','$pict')");
	echo "Rooms added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">


	<tr>
		<th>First name</th>
		<td><input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<th>middle name</th>
		<td><input type="text" name="type"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<th>last name</th>
		<td><input type="text" name="price"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<th>email</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>

	<tr>
		<th>password</th>
		<td><input type="file" name="img"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Room Details" name="add"/>
		</td>
	</tr>
</table>
</form>
