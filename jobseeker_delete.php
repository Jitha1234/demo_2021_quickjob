<?php
include('connection/db.php');
$del=$_GET['del'];



$query=mysqli_query($conn,"delete from jobseeker where id='$del'");

if ($query)
{
	echo "<script>alert('Record has been successfully Deleted!!!')</script>";
	header('location:jobseeker.php');
	
}
else
{
	echo "<script>alert('Record has been successfully Deleted!!!')</script>";
}


?>