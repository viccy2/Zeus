<?php
require 'dc.php';
session_start();
$email=$_POST['email'];
$set = mysqli_query($con,"select * from school_tb where email='$email'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
$log=true;
$_SESSION['schools_email']=$email;
while ($row=mysqli_fetch_array($set)) {
$_SESSION['schools_id']=$row['school_id'];
$_SESSION['school_passport']=$row['schpassport'];
$_SESSION['schools_name']=$row['name'];
    $log=false;

}

if ($log) {
	$msg="Invalid email or password";
	include 'schools_admin_staff_master_login.php';
}
else{
	
	header("location:schools_admin_staff_login.php");
}


?>