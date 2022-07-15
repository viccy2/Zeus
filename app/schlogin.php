<?php
require 'dc.php';
session_start();
$email=$_POST['email'];
$set = mysqli_query($con,"select * from school_tb where email='$email'");
$log=true;
$_SESSION['school_email']=$email;
while ($row=mysqli_fetch_array($set)) {
$_SESSION['school_id']=$row['school_id'];
$_SESSION['school_passport']=$row['schpassport'];
$_SESSION['school_name']=$row['name'];
    $log=false;

}

if ($log) {
	$msg="Invalid email or password";
	include 'schools_admin_masters_login.php';
}
else{
	
	header("location:school_admin_master_login.php");
}


?>