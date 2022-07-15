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
$total=$_POST['total'];
$action = $_POST['part'];
$act = $_POST['par'];

 if ($act=='1st Term') {
   $yes=mysqli_query($con, "select * from student_tb where student_id = '$_SESSION[ctid]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
   while ($let=mysqli_fetch_array($yes)) {
   $lets=$let['email'];
	$_SESSION['studentClass']=$let['class'];
	
}

   if ($action=='C.A Test1') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into sreport_tb(school_id,school_mail,email,student_id,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$lets','$_SESSION[ctid]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='C.A Test2') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into sreport_tb(school_id,school_mail,email,student_id,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$lets','$_SESSION[ctid]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='Exam') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into sreport_tb(school_id,school_mail,email,student_id,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$lets','$_SESSION[ctid]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[studentClass]')");
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
	$_SESSION['studentClass']=$let['class'];
	
}

   if ($action=='C.A Test1') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into sreport_tb(school_id,school_mail,email,student_id,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$lets','$_SESSION[ctid]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='C.A Test2') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into sreport_tb(school_id,school_mail,email,student_id,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$lets','$_SESSION[ctid]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='Exam') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into sreport_tb(school_id,school_mail,email,student_id,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$lets','$_SESSION[ctid]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
 }


 if ($act=='3rd Term') {
   $yes=mysqli_query($con, "select * from student_tb where student_id = '$_SESSION[ctid]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
   while ($let=mysqli_fetch_array($yes)) {
   $lets=$let['email'];
	$_SESSION['studentClass']=$let['class'];

}

   if ($action=='C.A Test1') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into sreport_tb(school_id,school_mail,email,student_id,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$lets','$_SESSION[ctid]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
		header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='C.A Test2') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into sreport_tb(school_id,school_mail,email,student_id,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$lets','$_SESSION[ctid]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
  if ($action=='Exam') {
	echo "<script>alert('successsful')</script>";
	$set=mysqli_query($con, "insert into sreport_tb(school_id,school_mail,email,student_id,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$_SESSION[schools_id]','$_SESSION[schools_email]','$lets','$_SESSION[ctid]','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[studentClass]')");
	if ($set) {
			header("location:index.php");
	}
	else{
		echo mysqli_error($con);
	}
}
 }


// if ($class=='sss2') {
//    $yes=mysqli_query($con, "select * from sss2_tb where student_id = '$_SESSION[ctid]'");
//    while ($let=mysqli_fetch_array($yes)) {
//    $lets=$let['email'];
//    if ($action=='C.A Test1') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into sreport_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[newClass]')");
// 	if ($set) {
// 			header("location:sss2.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//   if ($action=='C.A Test2') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into sreport_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[newClass]')");
// 	if ($set) {
// 		header("location:sss2.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//   if ($action=='Exam') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into sreport_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[newClass]')");
// 	if ($set) {
// 			header("location:sss2.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//    }
//  }
// if ($class=='sss3') {
//    $yes=mysqli_query($con, "select * from sss3_tb where student_id = '$_SESSION[ctid]'");
//    while ($let=mysqli_fetch_array($yes)) {
//    $lets=$let['email'];
//    if ($action=='C.A Test1') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into sreport_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[newClass]')");
// 	if ($set) {
// 		header("location:sss3.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//   if ($action=='C.A Test2') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into sreport_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[newClass]')");
// 	if ($set) {
// 			header("location:sss3.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//   if ($action=='Exam') {
// 	echo "<script>alert('successsful')</script>";
// 	$set=mysqli_query($con, "insert into sreport_tb(email,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,type,total,term,class)values('$lets','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$action','$total','$act','$_SESSION[newClass]')");
// 	if ($set) {
// 			header("location:sss3.php");
// 	}
// 	else{
// 		echo mysqli_error($con);
// 	}
// }
//    }
//  }

?>