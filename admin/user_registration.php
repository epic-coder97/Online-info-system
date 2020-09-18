<table class="table table-bordered table-striped table-hover">
	<h1>User Registration</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>First Name</th>
		<th>Middle Name</th>

		<th>Last Name</th>

		<th>Email</th>
		<th>Password</th>
		<th>Mobile</th>
		<th>lab</th>
		<th>Gender</th>
		<th>Registration Date</th>
		<th>Designation</th>
		<th>Pictrure</th>
	</tr>
	<?php
$i=1;
$sql=mysqli_query($con,"select * from users");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['fname']; ?></td>
		<td><?php echo $res['mname']; ?></td>

		<td><?php echo $res['lname']; ?></td>

		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['pass']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['lab']; ?></td>
		<td><?php echo $res['gender']; ?></td>
		<td><?php echo $res['designation']; ?></td>
		<td><?php echo $res['regdate']; ?></td>

		<td><?php echo $res['pic']; ?></td>
	</td>
	</tr>
<?php
}
?>
