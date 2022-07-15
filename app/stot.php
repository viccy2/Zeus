<?php
session_start();
require 'dc.php';
$_SESSION['did'];
$subject1 = $_POST['scr1'];
$subject2 = $_POST['scr2'];
$subject3 = $_POST['scr3'];
$subject4 = $_POST['scr4'];
$subject5 = $_POST['scr5'];
$subject6= $_POST['scr6'];
$subject7= $_POST['scr7'];
$subject8= $_POST['scr8'];
$subject9= $_POST['scr9'];
$subject10= $_POST['scr10'];
$subject11= $_POST['scr11'];
$action = $_POST['part'];
$act = $_POST['par'];
$_SESSION['studentEmail'];
$yes=mysqli_query($con, "select * from student_tb where student_id = '$_SESSION[ctid]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
   while ($let=mysqli_fetch_array($yes)) {
   $lets=$let['email'];
	}
if ($act=='1st Term') {
	$set=mysqli_query($con, "insert into stotal_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,grade,term,class)values(	'$lets','$_SESSION[ctid]', '$_SESSION[schools_id]','$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:sss1.php");
	}
	else{
		echo mysqli_error($con);
	}
}

if ($act=='2nd Term') {
	$set=mysqli_query($con, "insert into stotal_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,grade,term,class)values(	'$lets','$_SESSION[ctid]', '$_SESSION[schools_id]','$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:sss1.php");
	}
	else{
		echo mysqli_error($con);
	}
}
if ($act=='3rd Term') {
$set=mysqli_query($con, "insert into stotal_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,grade,term,class)values(	'$lets','$_SESSION[ctid]', '$_SESSION[schools_id]','$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:sss1.php");
	}
	else{
		echo mysqli_error($con);
	}
}


?>