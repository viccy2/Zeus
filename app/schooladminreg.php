<?php
session_start();
require 'dc.php';
$sname=$_POST['surname'];
$name=$_POST['name'];
$email=$_POST['email'];
$pwd= sha1($_POST['password']);
$phone=$_POST['phone'];
$country=$_POST['country'];
date_default_timezone_get('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileType = $_FILES['fileToUpload']['type'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       // echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ( $target_file > 900000) {
    $msgis="Sorry, your file is too large!!!";

     include'schools_admin_masters.php';
    $uploadOk = 0;
}
// if ($_FILES["fileToUpload"]["size"] > 900000) {
//     $msgis="Sorry, your file is too large!!!";
//     include'schools_admin_masters.php';
//     $uploadOk = 0;
// }

if($imageFileType != 'jpg' and 'png' and 'jpeg' )
{
     $msgit="Sorry, your image type is unknown!!!";
     include'schools_admin_masters.php';
    
   
}
else{
	$in = mysqli_query($con,"insert into admin_tb(school_id,school_mail,surname,name,email,password,contact,country,date,time,adminpassport) values('$_SESSION[school_id]','$_SESSION[school_email]','$sname','$name','$email','$pwd','$phone','$country','$date','$time','$target_file')");
	if ($in) {
         move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		$set=mysqli_query($con,"select * from admin_tb where email='$email'");
		while ($r=mysqli_fetch_array($set)) {
			$_SESSION['admin_id']=$r['admin_id'];
            $_SESSION['admin_email']=$r['email'];
             $_SESSION['admin_passport']=$r['adminpassport'];
		}
		
		$set= "<script>alert('Registration Successfull')</script>";
		header("location:schools_admin_masters_dashboards.php");
	}
    else {
        echo mysqli_error($con);
    }

}

?>