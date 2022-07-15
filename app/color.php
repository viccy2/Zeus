<?php session_start();
if (isset($_SESSION['emails'])) {
?>
<!DOCTYPE html>
  <html>
  <head>
  <title> Change Theme</title>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width" initial-scale="1">


  <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
  <script type="text/javascript" src="wowjs/dist/wow.min.js"></script>
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap4/js/jquery-ui.css" />
   <link rel="stylesheet" type="text/css" href="student.css">
    <link rel="shortcut icon" href="images/graduate.png">
     <link rel="stylesheet" href="csss/datapicker/datepicker3.css">

      <link rel="stylesheet" href="csss/colorpicker/colorpicker.css">
     <script type="text/javascript" src="tether/dist/js/tether.js"></script>
     <script type="text/javascript" src="bootstrap4/js/popper.js"></script>
     <script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="bootstrap4/js/bootstrap.min.js"></script>
     
     <script>
        new WOW().init();
     </script>
     <style type="text/css">
     .star{  background: url(images/dawn.jpg)   fixed;
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
 background:#1d52ba;;
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
background:#1d52ba;;
}
.foot-lnk{
  text-align:center;
  margin-top: -70px;
}
     </style>
</head>
<body>
   <script>
            function save(){
            var a=document.getElementById('palette1').value;
            alert('successful');
          }
          </script>
<center>
<div class="star" style="padding-top:-140px;height:42pc;color:#61445C;">
<a href="dashboard1.php" ><i class="fa fa-arrow-left fa-2x" style="width:40px;float:left;color:<?php echo $_SESSION['color']?>"></i></a>
     
   <div class="login-wrap" style="margin-top:80px;">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
    <?php 
        
            if (isset($msgit)) {
              echo "<div class='alert alert-danger'>"."<marquee>".$msgit."</marquee>"."</div>";
              
            }
          ?>
           <?php 
            if (isset($msgis)) {
              echo "<div class='alert alert-danger'>"."<marquee>".$msgis."</marquee>"."</div>";
            }
          ?>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="text-align:center;color:white;">Change Display Picture</label>
    <div class="login-form">
     
        <div class="group">
         <form action="colors.php" method="post">   
        <div class="group">
          
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="colorpicker-inner ts-forms" style="height:50px">
                                            <div class="tsbox">
                                                <label class="label" style="color:<?php echo $_SESSION['color']?>;font-size: 18px">Choose Platform Color</label>
                                                <center>
                                          <label class="color-group" for="palette1" style="margin-top:50px">
                                          <input type="text" placeholder="" id="palette1" name='color' class="btn" hidden="true">

                                                    </label>
                                                  </center>

                                            </div>
                                        </div>
                                    </div> 
        </div>
        <div class="group">
          <input type="submit" class="button" value="Save" style="margin-top: 100px;background-color:<?php echo $_SESSION['color']?>" onclick="save()">
        </div>
        <div class="hr" style="background-color:<?php echo $_SESSION['color']?>"></div>
        
</form>
      </div>

  </div>
</div>
</div>
</div>
</div>
</center>
  <script src="jss/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap jss
    ============================================ -->
    <script src="jss/bootstrap.min.js"></script>
    <!-- wow jss
    ============================================ -->
    <script src="jss/wow.min.js"></script>
    <!-- price-slider jss
    ============================================ -->
    <script src="jss/jquery-price-slider.js"></script>
    <!-- meanmenu jss
    ============================================ -->
    <script src="jss/jquery.meanmenu.js"></script>
    <!-- owl.carousel jss
    ============================================ -->
    <script src="jss/owl.carousel.min.js"></script>
    <!-- sticky jss
    ============================================ -->
    <script src="jss/jquery.sticky.js"></script>
    <!-- scrollUp jss
    ============================================ -->
    <script src="jss/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar jss
    ============================================ -->
    <script src="jss/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="jss/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu jss
    ============================================ -->
    <script src="jss/metisMenu/metisMenu.min.js"></script>
    <script src="jss/metisMenu/metisMenu-active.js"></script>
    <!-- touchspin jss
    ============================================ -->
    <script src="jss/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="jss/touchspin/touchspin-active.js"></script>
    <!-- colorpicker jss
    ============================================ -->
    <script src="jss/colorpicker/jquery.spectrum.min.js"></script>
    <script src="jss/colorpicker/color-picker-active.js"></script>
    <!-- datapicker jss
    ============================================ -->
    <script src="jss/datapicker/bootstrap-datepicker.js"></script>
    <script src="jss/datapicker/datepicker-active.js"></script>
    <!-- input-mask jss
    ============================================ -->
    <script src="jss/input-mask/jasny-bootstrap.min.js"></script>
    <!-- chosen jss
    ============================================ -->
    <script src="jss/chosen/chosen.jquery.js"></script>
    <script src="jss/chosen/chosen-active.js"></script>
    <!-- select2 jss
    ============================================ -->
    <script src="jss/select2/select2.full.min.js"></script>
    <script src="jss/select2/select2-active.js"></script>
    <!-- ionRangeSlider jss
    ============================================ -->
    <script src="jss/ionRangeSlider/ion.rangeSlider.min.js"></script>
    <script src="jss/ionRangeSlider/ion.rangeSlider.active.js"></script>
    <!-- rangle-slider jss
    ============================================ -->
    <script src="jss/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="jss/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="jss/rangle-slider/rangle-active.js"></script>
    <!-- knob jss
    ============================================ -->
    <script src="jss/knob/jquery.knob.js"></script>
    <script src="jss/knob/knob-active.js"></script>
    <!-- tab jss
    ============================================ -->
    <script src="jss/tab.js"></script>
    <!-- plugins jss
    ============================================ -->
    <script src="jss/plugins.js"></script>
    <!-- main jss
    ============================================ -->
    <script src="jss/main.js"></script>
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