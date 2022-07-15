<?php
session_start();
require 'dc.php';
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
$total=$_POST['total'];
$action = $_POST['part'];
$act = $_POST['par'];

if ($act=='1st Term') {
   $yes=mysqli_query($con, "select * from student_tb where student_id = '$_SESSION[ctid]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
   while ($let=mysqli_fetch_array($yes)) {
   $lets=$let['email'];
	$_SESSION['studentClass']=$let['class'];
	echo $_SESSION['studentClass'];
}

   if ($action=='C.A Test1') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into report_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$_SESSION[ctid]','$_SESSION[schools_id]', '$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='C.A Test2') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into report_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$_SESSION[ctid]','$_SESSION[schools_id]', '$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='Exam') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into report_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$_SESSION[ctid]','$_SESSION[schools_id]', '$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
 }




 if ($act=='2nd Term') {
   $yes=mysqli_query($con, "select * from student_tb where student_id = '$_SESSION[ctid]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
   while ($let=mysqli_fetch_array($yes)) {
   $lets=$let['email'];
   if ($action=='C.A Test1') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into report_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$_SESSION[ctid]','$_SESSION[schools_id]', '$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='C.A Test2') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into report_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$_SESSION[ctid]','$_SESSION[schools_id]', '$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='Exam') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into report_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$_SESSION[ctid]','$_SESSION[schools_id]', '$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
   }



 }




 if ($act=='3rd Term') {
   $yes=mysqli_query($con, "select * from student_tb where student_id = '$_SESSION[ctid]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
   while ($let=mysqli_fetch_array($yes)) {
   $lets=$let['email'];
   if ($action=='C.A Test1') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into report_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$_SESSION[ctid]','$_SESSION[schools_id]', '$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='C.A Test2') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into report_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$_SESSION[ctid]','$_SESSION[schools_id]', '$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='Exam') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into report_tb(email,student_id,school_id,school_mail,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$_SESSION[ctid]','$_SESSION[schools_id]', '$_SESSION[schools_email]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
   }
 
}
 					//For JSS2 STUDENTS//	

// if ($class=='jss2') {
//    $yes=mysqli_query($con, "select * from student_tb where student_id = '$_SESSION[ctid]'");
//    while ($let=mysqli_fetch_array($yes)) {
//    $lets=$let['email'];
//    if ($action=='C.A Test1') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into report_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
// 	if ($set) {
// 			header("location:index.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//   if ($action=='C.A Test2') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into report_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
// 	if ($set) {
// 		header("location:index.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//   if ($action=='Exam') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into report_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
// 	if ($set) {
// 			header("location:index.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//    }
//  }
// if ($class=='jss3') {
//    $yes=mysqli_query($con, "select * from jss3_tb where student_id = '$_SESSION[ctid]'");
//    while ($let=mysqli_fetch_array($yes)) {
//    $lets=$let['email'];
//    if ($action=='C.A Test1') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into report_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
// 	if ($set) {
// 		header("location:index.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//   if ($action=='C.A Test2') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into report_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
// 	if ($set) {
// 			header("location:index.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//   if ($action=='Exam') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into report_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','$subject14','$subject15','$action','$total','$act','$_SESSION[studentClass]')");
// 	if ($set) {
// 			header("location:index.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//    }
//  }

 
?>