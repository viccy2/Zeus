<?php session_start();
if (isset($_SESSION['email'])) {
require 'dc.php';
$chatid = $_GET['id'];
$_SESSION['did']=$chatid;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CA.1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
 
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/mains.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
       <link rel="shortcut icon" href="images/graduate.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="sss1.php">Back</a></li>
         
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">C.A Test1(<?php echo  $_SESSION['stotal'];?> %)</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from student_tb where student_id='$chatid'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($resul=mysqli_fetch_array($result)) {
  $ema=$resul['email'];
}
$use = mysqli_query($con, "select * from sss_students_tb where email = '$ema'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($no=mysqli_fetch_array($use)) {
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
  
      }
     

echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th style='color:#1F2605;'>$sbj1</th>
                          <th style='color:#1F2605;'>$sbj2</th>
                          <th style='color:#1F2605;'>$sbj3</th>
                          <th style='color:#1F2605;'>$sbj4</th>
                          <th style='color:#1F2605;'>$sbj5</th>
                          <th style='color:#1F2605;'>$sbj6</th>
                          <th style='color:#1F2605;'>$sbj7</th>
                          <th style='color:#1F2605;'>$sbj8</th>
                          <th style='color:#1F2605;'>$sbj9</th>
                          <th style='color:#1F2605;'>$sbj10</th>
                          <th style='color:#1F2605;'>$sbj11</th>
                          
                           <th style='color:#1F2605;'>term</th>


                        </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
                 $test=mysqli_query($con, "select * from sreport_tb where email='$ema'and type='C.A Test1'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($r = mysqli_fetch_array($test)) {
  $id = $r ['student_id'];
         $sb1=$r['subject1'];
        $sb2=$r['subject2'];
       $sb3=$r['subject3'];
       $sb4=$r['subject4'];
       $sb5=$r['subject5'];
       $sb6=$r['subject6'];
       $sb7=$r['subject7'];
       $sb8=$r['subject8'];
       $sb9=$r['subject9'];
       $sb10=$r['subject10'];
       $sb11=$r['subject11'];
        $_SESSION['stotal']=$r['total'];
      
        $term=$r['term'];
  
  
  echo "<tr><td>".$id."</td><td>".$sb1."</td><td>".$sb2."</td><td>".$sb3."</td><td>".$sb4."</td><td>".$sb5."</td><td>".$sb6."</td><td>".$sb7."</td><td>".$sb8."</td><td>".$sb9."</td><td>".$sb10."</td><td>".$sb11."</td><td>".$term."</td></td>
  </tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
         
          
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">C.A Test2(<?php echo $_SESSION['stotalss']; ?>%)</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from student_tb where student_id='$chatid'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($resul=mysqli_fetch_array($result)) {
  $ema=$resul['email'];
}
$use = mysqli_query($con, "select * from sss_students_tb where email = '$ema'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($no=mysqli_fetch_array($use)) {
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
      
      }
     

echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th style='color:#1F2605;'>$sbj1</th>
                          <th style='color:#1F2605;'>$sbj2</th>
                          <th style='color:#1F2605;'>$sbj3</th>
                          <th style='color:#1F2605;'>$sbj4</th>
                          <th style='color:#1F2605;'>$sbj5</th>
                          <th style='color:#1F2605;'>$sbj6</th>
                          <th style='color:#1F2605;'>$sbj7</th>
                          <th style='color:#1F2605;'>$sbj8</th>
                          <th style='color:#1F2605;'>$sbj9</th>
                          <th style='color:#1F2605;'>$sbj10</th>
                          <th style='color:#1F2605;'>$sbj11</th>
                         
                          <th style='color:#1F2605;'>term</th>



                        </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
                 $test=mysqli_query($con, "select * from sreport_tb where email='$ema'and type='C.A Test2'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($r = mysqli_fetch_array($test)) {
  $id = $r ['student_id'];
         $sb1=$r['subject1'];
        $sb2=$r['subject2'];
       $sb3=$r['subject3'];
       $sb4=$r['subject4'];
       $sb5=$r['subject5'];
       $sb6=$r['subject6'];
       $sb7=$r['subject7'];
       $sb8=$r['subject8'];
       $sb9=$r['subject9'];
       $sb10=$r['subject10'];
       $sb11=$r['subject11'];
      $term=$r['term'];
       $_SESSION['stotalss']=$r['total'];
  
  
  echo "<tr><td>".$id."</td><td>".$sb1."</td><td>".$sb2."</td><td>".$sb3."</td><td>".$sb4."</td><td>".$sb5."</td><td>".$sb6."</td><td>".$sb7."</td><td>".$sb8."</td><td>".$sb9."</td><td>".$sb10."</td><td>".$sb11."</td><td>".$term."</td></td>
  </tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>

          
           
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Examination(<?php echo  $_SESSION['stotals']; ?>%)</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from student_tb where student_id='$chatid'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($resul=mysqli_fetch_array($result)) {
  $ema=$resul['email'];
}
$use = mysqli_query($con, "select * from sss_students_tb where email = '$ema'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($no=mysqli_fetch_array($use)) {
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
    
      }
     

echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th style='color:#1F2605;'>$sbj1</th>
                          <th style='color:#1F2605;'>$sbj2</th>
                          <th style='color:#1F2605;'>$sbj3</th>
                          <th style='color:#1F2605;'>$sbj4</th>
                          <th style='color:#1F2605;'>$sbj5</th>
                          <th style='color:#1F2605;'>$sbj6</th>
                          <th style='color:#1F2605;'>$sbj7</th>
                          <th style='color:#1F2605;'>$sbj8</th>
                          <th style='color:#1F2605;'>$sbj9</th>
                          <th style='color:#1F2605;'>$sbj10</th>
                          <th style='color:#1F2605;'>$sbj11</th>
                         
                          <th style='color:#1F2605;'>term</th>


                        </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
                 $tests=mysqli_query($con, "select * from sreport_tb where email='$ema'and type='Exam'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($r = mysqli_fetch_array($tests)) {
  $id = $r ['student_id'];
         $sb1=$r['subject1'];
        $sb2=$r['subject2'];
       $sb3=$r['subject3'];
       $sb4=$r['subject4'];
       $sb5=$r['subject5'];
       $sb6=$r['subject6'];
       $sb7=$r['subject7'];
       $sb8=$r['subject8'];
       $sb9=$r['subject9'];
       $sb10=$r['subject10'];
       $sb11=$r['subject11'];
       $term=$r['term'];
       $_SESSION['stotals']=$r['total'];
  
  
  echo "<tr><td>".$id."</td><td>".$sb1."</td><td>".$sb2."</td><td>".$sb3."</td><td>".$sb4."</td><td>".$sb5."</td><td>".$sb6."</td><td>".$sb7."</td><td>".$sb8."</td><td>".$sb9."</td><td>".$sb10."</td><td>".$sb11."</td><td>".$term."</td></td>
  </tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
          
            
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Total Result(100%)</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from student_tb where student_id='$chatid'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($resul=mysqli_fetch_array($result)) {
  $ema=$resul['email'];
}
$use = mysqli_query($con, "select * from sss_students_tb where email = '$ema'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($no=mysqli_fetch_array($use)) {
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
     
      }
     

echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th style='color:#1F2605;'>$sbj1</th>
                          <th style='color:#1F2605;'>$sbj2</th>
                          <th style='color:#1F2605;'>$sbj3</th>
                          <th style='color:#1F2605;'>$sbj4</th>
                          <th style='color:#1F2605;'>$sbj5</th>
                          <th style='color:#1F2605;'>$sbj6</th>
                          <th style='color:#1F2605;'>$sbj7</th>
                          <th style='color:#1F2605;'>$sbj8</th>
                          <th style='color:#1F2605;'>$sbj9</th>
                          <th style='color:#1F2605;'>$sbj10</th>
                          <th style='color:#1F2605;'>$sbj11</th>
                         
                          <th style='color:#1F2605;'>term</th>


                        </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
                 $test=mysqli_query($con, "select * from stotal_tb where email='$ema'and school_id = '$_SESSION[schools_id]' and school_mail='$_SESSION[schools_email]'");
while ($r = mysqli_fetch_array($test)) {
  $id = $r ['stotal_id'];
         $sb1=$r['subject1'];
        $sb2=$r['subject2'];
       $sb3=$r['subject3'];
       $sb4=$r['subject4'];
       $sb5=$r['subject5'];
       $sb6=$r['subject6'];
       $sb7=$r['subject7'];
       $sb8=$r['subject8'];
       $sb9=$r['subject9'];
       $sb10=$r['subject10'];
       $sb11=$r['subject11'];
     
        $term=$r['term'];
  
  
  echo "<tr><td>".$id."</td><td>".$sb1."</td><td>".$sb2."</td><td>".$sb3."</td><td>".$sb4."</td><td>".$sb5."</td><td>".$sb6."</td><td>".$sb7."</td><td>".$sb8."</td><td>".$sb9."</td><td>".$sb10."</td><td>".$sb11."</td><td>".$term."</td></td>
  </tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            

      </section>
  
     
    </div>
    </form>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
<?php
 } 
 else{
 include 'schools_admin_staff_master_login.php';
 }
?>