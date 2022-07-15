<?php
session_start();
require 'dc.php';
$_SESSION['did'];
$fee1 = $_POST['firstfee'];
$fee2 = $_POST['secondfee'];
$act = $_POST['par'];
$_SESSION['studentEmail'];
// echo $_SESSION['studentEmail'] ;
// echo $_SESSION['did'];
// echo $_SESSION['studentClass'];
if ($act=='1st Term') {
	$set=mysqli_query($con, "insert into fee_tb(email,student_id,school_id,school_mail,fee1,fee2,term,class)values('$_SESSION[studentEmail]','$_SESSION[did]', '$_SESSION[schools_id]','$_SESSION[schools_email]','$fee1','$fee2','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}

if ($act=='2nd Term') {
$set=mysqli_query($con, "insert into fee_tb(email,student_id,school_id,school_mail,fee1,fee2,term,class)values('$_SESSION[studentEmail]','$_SESSION[did]', '$_SESSION[schools_id]','$_SESSION[schools_email]','$fee1','$fee2','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
if ($act=='3rd Term') {
	$set=mysqli_query($con, "insert into fee_tb(email,student_id,school_id,school_mail,fee1,fee2,term,class)values('$_SESSION[studentEmail]','$_SESSION[did]', '$_SESSION[schools_id]','$_SESSION[schools_email]','$fee1','$fee2','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}


?>