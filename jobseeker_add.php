<?php
include('connection/db.php');

 $email=$_POST['email'];
 $Password=$_POST['Password'];
 $first_name=$_POST['first_name'];
 $last_name=$_POST['last_name'];
 $dob=$_POST['dob'];
 $mno=$_POST['mno'];


$query=mysqli_query($conn,"insert into jobseeker(email,password,first_name,last_name,dob,mobile_number)
values('$email','$Password','$first_name','$last_name','$dob','$mno')");

//var_dump($query);

if ($query)
{
	echo "Data has been successfully inserted";
}
else
{
    echo "some error please try again";
}	

?>