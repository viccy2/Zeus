<?php session_start();
if (isset($_SESSION['email'])) {
require 'dc.php';
$chatid = $_GET['id'];
$_SESSION['did']=$chatid;
$hill=mysqli_query($con, "select * from student_tb where student_id ='$chatid'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($h=mysqli_fetch_array($hill)) {
  $emails=$h['email'];
  $_SESSION['studentEmail']=$emails;
  $_SESSION['studentClass']=$h['class'];
}
?>
<!DOCTYPE html>
  <html>
  <head>
  <title>Report Card</title>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width" initial-scale="1">


  <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
  <script type="text/javascript" src="wowjs/dist/wow.min.js"></script>
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap4/js/jquery-ui.css" />
   <link rel="stylesheet" type="text/css" href="student.css">
       <link rel="shortcut icon" href="images/graduate.png">

     <script type="text/javascript" src="tether/dist/js/tether.js"></script>
     <script type="text/javascript" src="bootstrap4/js/popper.js"></script>
     <script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="bootstrap4/js/bootstrap.min.js"></script>
     
     <script>
        new WOW().init();
     </script>
     <style type="text/css">
     .star{  background: url(images/c5.jpg)   fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    width: 100%;
    
    overflow: hidden;

}
.login-wrap{
  width:100%;
  margin:auto;
  max-width:525px;
  min-height:670px;
  position:relative;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
 background: url()   fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    width: 100%;
    
    overflow: hidden;
}
.login-html{
  width:100%;
  height:100%;
  position:absolute;
  padding:90px 70px 50px 70px;
  background:;
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  -webkit-transform:rotateY(180deg);
          transform:rotateY(180deg);
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
  transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
  display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
  text-transform:uppercase;
  text-align: center;
}
.login-html .tab{
  font-size:22px;
  margin-right:15px;
  padding-bottom:5px;
  margin:0 15px 10px 0;
  display:inline-block;
  border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
  color:#fff;
  border-color:#1161ee;
}
.login-form{
  min-height:345px;
  position:relative;
  -webkit-perspective:1000px;
          perspective:1000px;
  -webkit-transform-style:preserve-3d;
          transform-style:preserve-3d;
          text-align: center;
}
.login-form .group{
  margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
  width:100%;
  color:#fff;
  display:block;
}
.login-form .group .input,
.login-form .group .button{
  border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}   
.login-form .group .label{
  color:#aaa;
  font-size:12px;
}
.login-form .group .button{
  background:#1F2605;
}
.login-form .group label .icon{
  width:15px;
  height:15px;
  border-radius:2px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
  top:6px;
  right:0;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
  color:#fff;
}
.login-form .group .check:checked + label .icon{
  background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
  -webkit-transform:scale(1) rotate(45deg);
          transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
  -webkit-transform:scale(1) rotate(-45deg);
          transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}

.hr{
  height:2px;
  margin:60px 0 50px 0;
  background:#1F2605;
}
.foot-lnk{
  text-align:center;
  margin-top: -70px;
}
     </style>
</head>
<body>
<center>
<div class="star" style="padding-top:-140px;height:150pc;color:#61445C;">
<a href="jss1.php" ><i class="fa fa-arrow-left fa-2x" style="width:40px;float:left;color:#1d52ba"></i></a>
     
   <div class="login-wrap" style="padding-top:-100px; height:150pc;">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
    <div style="color:red;text-align:center;font-size:20px;">
                
      </div>
      <?php
        $set=mysqli_query($con, "select * from jss_students_tb where student_id = '$chatid' and email='$emails'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
      while ($no=mysqli_fetch_array($set)) {
       $sbj1=$no['subject1'];
       $sbj2=$no['subject2'];
       $sbj3=$no['subject3'];
       $sbj4=$no['subject4'];
       $sbj5=$no['subject5'];
       $sbj6=$no['subject6'];
       $sbj7=$no['subject7'];
       $sbj8=$no['subject8'];
       $sbj9=$no['subject9'];
       $sbj10=$no['subject10'];
       $sbj11=$no['subject11'];
       $sbj12=$no['subject12'];
       $sbj13=$no['subject13'];
       $sbj14=$no['subject14'];
       $sbj15=$no['subject15'];
      
      }
      $sets=mysqli_query($con, "select * from total_tb where student_id = '$chatid' and email='$emails'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
      while ($nos=mysqli_fetch_array($sets)) {
       $sbjs1=$nos['subject1'];
       $sbjs2=$nos['subject2'];
       $sbjs3=$nos['subject3'];
       $sbjs4=$nos['subject4'];
       $sbjs5=$nos['subject5'];
       $sbjs6=$nos['subject6'];
       $sbjs7=$nos['subject7'];
       $sbjs8=$nos['subject8'];
       $sbjs9=$nos['subject9'];
       $sbjs10=$nos['subject10'];
       $sbjs11=$nos['subject11'];
       $sbjs12=$nos['subject12'];
       $sbjs13=$nos['subject13'];
       $sbjs14=$nos['subject14'];
       $sbjs15=$nos['subject15'];
      
      }
        
      
      ?>

    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="text-align:center;color:white;">Edit Subject Grades</label>
    <div class="login-form">
     
        <div class="group">
         <form action="gra.php" method="post"> 
          <div class="group">
          
        </div>       
          <select name="par" style="color:white;background-color:#1F2605; border-radius:25px;background:rgba(255,255,255,.1);padding:15px 20px;border:none;width:100%">
         <option>Please Select Examination Term</option>
              <option name="act" value="1st Term">1st Term</option>
              <option name="act" value="2nd Term">2nd Term</option>
              <option name="act" value="3rd Term">3rd Term</option>
              
         </select><br><br>  
        <div class="group">
          
            <p style="color:white"> <?php echo $sbj1 ?><br> <?php echo $sbjs1 ?></p><input id="pass" type="text" class="input" placeholder="Input Score Here" name="scr1" required="true">
        </div>
         <div class="group">
          
             <p style="color:white"> <?php echo $sbj2 ?><br> <?php echo $sbjs2 ?></p><input id="pass" type="text" class="input" placeholder="Input Score Here" name="scr2" required="true">
        </div>
         <div class="group">
          
              <p style="color:white"><?php echo $sbj3 ?><br> <?php echo $sbjs3 ?></p><input id="pass" type="text" class="input" placeholder="Input Score Here" name="scr3" required="true">
        </div>
         <div class="group">
          
            <p style="color:white"> <?php echo $sbj4 ?><br> <?php echo $sbjs4?></p> <input id="pass" type="text" class="input" placeholder="Input Score Here" name="scr4" required="true">
        </div>
         <div class="group">
          
             <p style="color:white"><?php echo $sbj5 ?><br> <?php echo $sbjs5 ?> </p><input id="pass" type="text" class="input" placeholder="Input Score Here" name="scr5" required="true">
        </div>
         <div class="group">
          
             <p style="color:white"><?php echo $sbj6 ?><br> <?php echo $sbjs6 ?></p> <input id="pass" type="text" class="input" placeholder="Input Score Here" name="scr6" required="true">
        </div>
        <div class="group">
          
            <p style="color:white"><?php echo $sbj7 ?><br> <?php echo $sbjs7 ?> </p> <input id="pass" type="text" class="input" data-type="text" placeholder="Input Score Here" name="scr7" required="true">
        </div>
         <div class="group">
          
           <p style="color:white"> <?php echo $sbj8 ?><br> <?php echo $sbjs8 ?> </p> <input id="pass" type="text" class="input" data-type="text" placeholder="Input Score Here" name="scr8" required="true">
        </div>
         <div class="group">
          
            <p style="color:white"><?php echo $sbj9 ?><br> <?php echo $sbjs9 ?> </p> <input id="pass" type="text" class="input" data-type="text" placeholder="Input Score Here" name="scr9" required="true">
        </div>
         <div class="group">
          
           <p style="color:white"> <?php echo $sbj10 ?><br> <?php echo $sbjs10 ?></p>  <input id="pass" type="text" class="input" data-type="text" placeholder="Input Score Here" name="scr10" required="true">
        </div>
         <div class="group">
          
           <p style="color:white"> <?php echo $sbj11 ?><br> <?php echo $sbjs11 ?> </p> <input id="pass" type="text" class="input" data-type="text" placeholder="Input Score Here" name="scr11" required="true">
        </div>
         <div class="group">
          
            <p style="color:white"><?php echo $sbj12 ?><br> <?php echo $sbjs12 ?> </p> <input id="pass" type="text" class="input" data-type="text" placeholder="Input Score Here" name="scr12" required="true">
        </div>
         <div class="group">
          
            <p style="color:white"><?php echo $sbj13 ?> <br> <?php echo $sbjs13?></p> <input id="pass" type="text" class="input" data-type="text" placeholder="Input Score Here" name="scr13" required="true">
        </div>
         <div class="group">
          
            <p style="color:white"><?php echo $sbj14 ?><br> <?php echo $sbjs14 ?></p>  <input id="pass" type="text" class="input" data-type="text" placeholder="Input Score Here" name="scr14" required="true">
        </div>
         <div class="group">
          
           <p style="color:white"> <?php echo $sbj15 ?> <br> <?php echo $sbjs15 ?></p> <input id="pass" type="text" class="input" data-type="text" placeholder="Input Score Here" name="scr15" required="true">
        </div>
         
        <div class="group">
          <input type="submit" class="button" value="Submit" style="background:#1d52ba;">
        </div>
        <div class="hr" style="background:#1d52ba;"></div>
         
</form>
      </div>

  </div>
</div>
</div>
</div>
</div>
</center>
</body>
</html>
<?php
 } 
 else{
 include 'schools_admin_staff_master_login.php';
 }
?>