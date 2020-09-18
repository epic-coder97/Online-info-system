<?php
include('../connection.php');

$eid=$_GET['eid'];

$sql=mysqli_query($con,"select * from users where email='$eid' ");
$res=mysqli_fetch_assoc($sql);


if(mysqli_query($con,"delete from users where email='$eid' "))
{
header('location:dashboard.php?option=update_user');
}

?>
