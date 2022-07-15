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
$subject12= $_POST['scr12'];
$subject13= $_POST['scr13'];
$subject14= $_POST['scr14'];
$subject15= $_POST['scr15'];
$action = $_POST['part'];
$act = $_POST['par'];
$_SESSION['studentEmail'];
// echo $_SESSION['studentEmail'] ;
// echo $_SESSION['did'];
// echo $_SESSION['studentClass'];
if ($act=='1st Term') {
	$set=mysqli_query($con, "insert into total_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,position,term,class)values('$_SESSION[studentEmail]','$_SESSION[did]', '$_SESSION[schools_id]','$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}

if ($act=='2nd Term') {
	$set=mysqli_query($con, "insert into total_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,position,term,class)values('$_SESSION[studentEmail]','$_SESSION[ctid]', '$_SESSION[schools_id]','$_SESSION[schools_email]', '$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
if ($act=='3rd Term') {
	$set=mysqli_query($con, "insert into total_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,position,term,class)values('$_SESSION[studentEmail]','$_SESSION[ctid]', '$_SESSION[schools_id]','$_SESSION[schools_email]', '$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}



// if ($class=='jss2') {
//    $yes=mysqli_query($con, "select * from jss2_tb where student_id = '$_SESSION[did]'");
//    while ($let=mysqli_fetch_array($yes)) {
//    $lets=$let['email'];
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into total_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,grade,term)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$act')");
// 	if ($set) {
// 		header("location:index.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}

 
//    }
//  }
 // if ($class=='jss3') {
 //   $yes=mysqli_query($con, "select * from jss3_tb where student_id = '$_SESSION[did]'");
 //   while ($let=mysqli_fetch_array($yes)) {
 //   $lets=$let['email'];
	// echo "<script>alert('successsful')</script>";
	// $set=mysqli_query($con, "insert into total_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,grade,term)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$act')");
	// if ($set) {
	// 	header("location:index.php");
	// }
	// else{
	// 	echo mysqli_error($con);
	// }

 
 //   }
 // }

?>