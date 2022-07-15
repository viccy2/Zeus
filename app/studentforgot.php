
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forgot Password</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
   <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
    <link rel="stylesheet" href="css/mains.css" id="theme-stylesheet">
        <link rel="shortcut icon" href="images/graduate.png">
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner" style="width:100%">  
            <div class="logo text-uppercase"><span></span><strong style="color:#1d52ba;">ZEUS</strong></div>
            <p> (Forgot Password.)</p>
             <?php  
                   if (isset($msg)) {
                     echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                 <strong>Sorry!!!<br></strong>
                  <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                                                        </a>". $msg."</div> "; 
                   }


        ?>
            <form class="text-left form-validate" action="stforgot.php" method="post">
              <div class="form-group-material">
                <input id="register-email" type="email" name="email" required data-msg="Please enter a valid  School email address" class="input-material">
                <label for="register-email" class="label-material"> Email Address</label>
              </div>
               <div class="form-group-material">
                <input id="register-password" type="text" name="surname" required data-msg="Please enter your surname" class="input-material">
                <label for="register-password" class="label-material">Surname</label>
              </div>
              <div class="form-group text-center">
                <input id="register" type="submit" value="Submit" class="btn" style="background-color:#1d52ba;color:white">
              </div>
            </form><small>Already have an account? </small><a href="studentlogin.php" class="signup">login</a>
          </div>
          <div class="copyrights text-center">
            <p>Powered by <a href="#" class="external">VAD</a></p>
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
