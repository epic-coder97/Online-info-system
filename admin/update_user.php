<script>
	function delUser(eid)
	{
		if(confirm("You want to delete this user ?"))
		{
		window.location.href='delete_user.php?eid='+eid;
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Update or delete user datails</h1><hr>
	<tr>
	<!--<td colspan="8"><a href="dashboard.php?option=add_user" class="btn btn-primary">Add new user</a></td>-->
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>First Name</th>
		<th>Middle Name</th>

		<th>Last Name</th>

		<th>Email</th>
		<th>Password</th>
		<th>Mobile</th>
		<th>lab</th>
		<th>Gender</th>
		<th>Designation</th>
		<th>Registration Date</th>

		<th>Pictrure</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php
$i=1;
$sql=mysqli_query($con,"select * from users");
while($res=mysqli_fetch_assoc($sql))
{
	$eid=$res['email'];


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



		<td><a href="dashboard.php?option=edit_user&eid=<?php echo $eid; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>


		<td><a href="#" onclick="delUser('<?php echo $eid; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>
<?php
}
?>

</table>
