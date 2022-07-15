<?php session_start();
require "dc.php";
$pwd =sha1($_POST['password']);
 $_SESSION['classes'];
 $_SESSION['emails'];

	$edit=mysqli_query($con, "select * from student_tb where email = '$_SESSION[emails]'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
 while ($sqi=mysqli_fetch_array($edit)) {
 $tes=$sqi['password'];
}

if ($pwd==$tes) {
  echo "<script>alert('Successful')</script>";
 include 'reset.php';
}
else{
   echo "<script>alert('Wrong Password')</script>";
   include 'set.php';

}











?>