<?php
session_start();
require 'dc.php';
$surname = $_POST['sname'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$town=$_POST['town'];
$state=$_POST['state'];
$country=$_POST['country'];
date_default_timezone_set('Africa/Lagos');
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

     include'stedit.php';
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 900000) {
    $msgis="Sorry, your file is too large!!!";
    include'stedit.php';
    $uploadOk = 0;
}

if($imageFileType != 'jpg' and 'png' and 'jpeg' )
{
     $msgit="Sorry, your image type is unknown!!!";
     include'stedit.php';
    
   
}
else{
$save = mysqli_query($con,"update staffs_tb set surname='$surname',firstname='$firstname',lastname='$lastname',phone='$phone',address='$address',state='$state',town='$town',country='$country',passport='$target_file',date='$date',time='$time'");
if ($save) {
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
	echo "<script>alert('successsful')</script>";
    $met=mysqli_query($con, "select * from staffs_tb where email='$_SESSION[email]'and school_id = '$_SESSION[school_id]' and school_mail='$_SESSION[school_email]'");
    while ($r=mysqli_fetch_array($met)) {
        $_SESSION['passpor']=$r['passport'];
    }
	header("location:staffinfo.php");
}
}


?>