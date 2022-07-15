<?php session_start();
if (isset($_SESSION['emails'] )) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Make Payment</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
   <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
    <link rel="stylesheet" href="css/mains.css" id="theme-stylesheet">
    
    <link rel="shortcut icon" href="images/graduate.png">
  </head>
  <body>
    <?php
    require 'dc.php';
      $set=mysqli_query($con,"select * from fee_tb where email = '$_SESSION[emails]' and school_mail='$_SESSION[schools_email]' and term = '1st Term'");
      while ($t=mysqli_fetch_array($set)) {
       $schfee1=$t['fee1'];
      $schfee2=$t['fee2'];
      }
       $sets=mysqli_query($con,"select * from fee_tb where email = '$_SESSION[emails]' and school_mail='$_SESSION[schools_email]' and term = '2nd Term'");
      while ($t=mysqli_fetch_array($sets)) {
       $schfee3=$t['fee1'];
      $schfee4=$t['fee2'];
      }

       $setss=mysqli_query($con,"select * from fee_tb where email = '$_SESSION[emails]' and school_mail='$_SESSION[schools_email]' and term = '3rd Term'");
      while ($t=mysqli_fetch_array($setss)) {
       $schfee5=$t['fee1'];
      $schfee6=$t['fee2'];
      }
    ?>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
           <a href="dashboard1.php" ><i class="fa fa-arrow-left fa-2x" style="width:40px;float:left;color:<?php echo $_SESSION['color']?>;margin-top:-450px;"></i></a>
          <div class="form-inner" style="width:100%">  
           
            <div class="logo text-uppercase"><span></span><strong style="color:<?php echo $_SESSION['color']?>;">Pay Now!!!</strong></div>
            <p style="color:<?php echo $_SESSION['color']?>font-size:18px"> (Fees.)</p>
            <form class="text-left form-validate" action="#" method="post">

                     <h3 class="text-center" style="color:<?php echo $_SESSION['color']?>"> For 1st Term </h3>
              <div class="form-group-material">
                <label for="register-email" class="label-material" style="color:<?php echo $_SESSION['color']?>">School Fees(Amount): </label> 
                <?php echo "<h3 style=';float:right'> #". $schfee1 ."</h3>" ?>
              </div>
               <div class="form-group-material">
                <label for="register-password" class="label-material" style="color:<?php echo $_SESSION['color']?>">Others: </label>
                <?php echo "<h3 style=';float:right'> #". $schfee2 ."</h3>" ?>
              </div>
              <div class="form-group text-center">
                <input id="register" type="submit" value="make payment" class="btn" style="background-color:<?php echo $_SESSION['color']?>;color:white">
              </div>
            </form>

             <form class="text-left form-validate" action="#" method="post" style="margin-top:100px">

              <h3 class="text-center" style="color:<?php echo $_SESSION['color']?>"> For 2nd Term </h3>
              <div class="form-group-material">
                <label for="register-email" class="label-material" style="color:<?php echo $_SESSION['color']?>">School Fees(Amount): </label> 
                <?php echo "<h3 style=';float:right'> #". $schfee3 ."</h3>" ?>
              </div>
               <div class="form-group-material">
                <label for="register-password" class="label-material" style="color:<?php echo $_SESSION['color']?>">Others: </label>
                <?php echo "<h3 style=';float:right'> #". $schfee4 ."</h3>" ?>
              </div>
              <div class="form-group text-center">
                <input id="register" type="submit" value="make payment" class="btn" style="background-color:<?php echo $_SESSION['color']?>;color:white">
              </div>
            </form>
             <form class="text-left form-validate" action="#" method="post" style="margin-top:100px">

              <h3 class="text-center" style="color: <?php echo $_SESSION['color']?>"> For 3rd Term </h3>
              <div class="form-group-material">
                <label for="register-email" class="label-material" style="color:<?php echo $_SESSION['color']?>">School Fees(Amount): </label> 
                <?php echo "<h3 style=';float:right'> #". $schfee5  ."</h3>" ?>
              </div>
               <div class="form-group-material">
                <label for="register-password" class="label-material" style="color:<?php echo $_SESSION['color']?>">Others:</label>
                <?php echo "<h3 style=';float:right'> #". $schfee6 ."</h3>" ?>
              </div>
              <div class="form-group text-center">
                <input id="register" type="submit" value="make payment" class="btn" style="background-color:<?php echo $_SESSION['color']?>;color:white">
              </div>
            </form>
          </div>
          <div class="copyrights text-center">
            <p>Powered by <a href="#" class="external" style="color: #1d52ba">VAD</a></p>
          </div>
        </div>
      </div>
    </div>
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
 include 'studentlogin.php';
 }
?>