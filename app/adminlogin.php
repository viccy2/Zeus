<?php
require 'dc.php';
session_start();
$email=$_POST['email'];
$pwd=sha1($_POST['password']);
$_SESSION['school_id'];
$_SESSION['school_email'];

$set = mysqli_query($con,"select * from admin_tb where email='$email' and password='$pwd' and school_id = '$_SESSION[school_id]' and school_mail='$_SESSION[school_email]' ");
$log=true;
while ($row=mysqli_fetch_array($set)) {
	$_SESSION['admin_email'] = $row['email'];
	$_SESSION['admin_id']  = $row['admin_id'];
	$_SESSION['admin_passport']  = $row['adminpassport'];
	$_SESSION['admin_surname']  = $row['surname'];
	$log=false;
}
if ($log) {
	$msg= "invalid email or password";
	include 'school_admin_master_login.php';
}

else{
	header("location:schools_admin_masters_dashboards.php");
}
?>