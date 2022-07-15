<?php
require 'dc.php';
session_start();
$surname = $_POST['sname'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$password =   sha1($_POST['sname']) ;
$phone =  $_POST['phone'] ;
$action = $_POST['part'];
$dates=$_POST['date'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$class = $_POST['part'];
$_SESSION['newClass']=$class;
$_SESSION['emails']=$email;
$id =$_SESSION['ctid']; 
if($action=='JSS1'){
	$set=mysqli_query($con, "update student_tb set surname = '$surname',firstname= '$firstname', lastname='$lastname',password='$password',parentNumber='$phone',admissionDate='$dates',date='$date',time='$time' where student_id='$id'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	if ($set) {
		echo "<script>alert('successsful')</script>";
		include 'jss1.php';
	}
	else{
		echo mysqli_error($con);
	}
}
if($action=='JSS2'){
	$set=mysqli_query($con, "update student_tb set surname = '$surname',firstname= '$firstname', lastname='$lastname',password='$password',parentNumber='$phone',admissionDate='$dates',date='$date',time='$time' where student_id='$id'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	if ($set) {
		echo "<script>alert('successsful')</script>";
		include 'jss2.php';
	}
	else{
		echo mysqli_error($con);
	}
}
if($action=='JSS3'){
	$set=mysqli_query($con, "update student_tb set surname = '$surname',firstname= '$firstname', lastname='$lastname',password='$password',parentNumber='$phone',admissionDate='$dates',date='$date',time='$time' where student_id='$id'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	if ($set) {
		echo "<script>alert('successsful')</script>";
		include 'jss3.php';
	}
	else{
		echo mysqli_error($con);
	}
}
if($action=='SSS1'){
	$set=mysqli_query($con, "update student_tb set surname = '$surname',firstname= '$firstname', lastname='$lastname',password='$password',parentNumber='$phone',admissionDate='$dates',date='$date',time='$time' where student_id='$id'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	if ($set) {
		echo "<script>alert('successsful')</script>";
		include 'sss1.php';
	}
	else{
		echo mysqli_error($con);
	}
}
if($action=='SSS2'){
	$set=mysqli_query($con, "update student_tb set surname = '$surname',firstname= '$firstname', lastname='$lastname',password='$password',parentNumber='$phone',admissionDate='$dates',date='$date',time='$time' where student_id='$id'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	if ($set) {
		echo "<script>alert('successsful')</script>";
		include 'sss2.php';
	}
	else{
		echo mysqli_error($con);
	}
}
if($action=='SSS3'){
	$set=mysqli_query($con, "update student_tb set surname = '$surname',firstname= '$firstname', lastname='$lastname',password='$password',parentNumber='$phone',admissionDate='$dates',date='$date',time='$time' where student_id='$id'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
	if ($set) {
		echo "<script>alert('successsful')</script>";
		include 'sss3.php';
	}
	else{
		echo mysqli_error($con);
	}
}