<?php

session_start();
session_unset();
header('location:admin_login.php');


include('connection/db.php');
$query=mysqli_query($conn,"select * from admin_login where admin_email='{$_SESSION['email']}' ");
if ($query)
{
header('location:http://localhost:8080/job_portal/');	
	
}
else
{
	
	
}
?>