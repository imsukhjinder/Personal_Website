<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thanks</title>
      <link rel="stylesheet" href="../assets/css/thank.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body >
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="thankpage">
      <div class="thanksocial">
        <div class="social-buttons">

          <div class="thanktext"><center>
        <div class="animated bounceInLeft" style="font-size:80px;font-weight:bold;">
                  THANK YOU <br><font class="animated bounceInDown"><?php echo strtoupper($_SESSION['name'])."!"; ?></font><br> FOR CONTACTING
                </div>
              <div class="animated flipInX" style="animation-delay:1s;font-size:40px;">
              You can also contact me on following platforms</font>
              </div>
          </div>
           <a href="https://www.facebook.com/sukhjindersingh.vicky.31" class="social-button facebook">
              <i class="fa fa-facebook"></i></a>
            <a href="https://plus.google.com/u/0/100348732735879666436" class="social-button google" target="_blank">
                <i class="fa fa-google-plus"></i></a>
            <a href="https://github.com/imsukhjinder" class="social-button twitter" target="_blank" >
                  <i class="fa fa-github-alt"></i></a>
            <a href="https://www.linkedin.com/in/sukhjinder-singh-webdeveloper/" class="social-button tumblr " target="_blank" >
                    <i class="fa fa-linkedin"></i></a></div>
      </div></center>
      <div class="center"><a class="pushme" href="../index.php"> <span class="inner" style="color:#3b5a98">Go Back</span></a>
          </div>
    </div>
  </body>
</html>
