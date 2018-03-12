<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Handling</title>
  </head>
<style media="screen">
  body{
    margin: 0px;
  }
      .hero {
      background-color: #0040C1;
      position: relative;
      height: 100vh;
      overflow: hidden;
      font-family: 'Montserrat', sans-serif;
      }

      .hero__title {
      color: #fff;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
      font-size: 50px;
      z-index: 1;
      }

      .cube {
      position: absolute;
      top: 80vh;
      left: 45vw;
      width: 10px;
      height: 10px;
      border: solid 1px #003298;
      -webkit-transform-origin: top left;
              transform-origin: top left;
      -webkit-transform: scale(0) rotate(0deg) translate(-50%, -50%);
              transform: scale(0) rotate(0deg) translate(-50%, -50%);
      -webkit-animation: cube 1s ease-in forwards infinite;
              animation: cube 1s ease-in forwards infinite;
      }
      .cube:nth-child(2n) {
      border-color: #0051f4;
      }
      .cube:nth-child(2) {
      -webkit-animation-delay: 2s;
              animation-delay: 2s;
      left: 25vw;
      top: 40vh;
      }
      .cube:nth-child(3) {
      -webkit-animation-delay: 4s;
              animation-delay: 4s;
      left: 75vw;
      top: 50vh;
      }
      .cube:nth-child(4) {
      -webkit-animation-delay: 6s;
              animation-delay: 6s;
      left: 90vw;
      top: 10vh;
      }
      .cube:nth-child(5) {
      -webkit-animation-delay: 8s;
              animation-delay: 8s;
      left: 10vw;
      top: 85vh;
      }
      .cube:nth-child(6) {
      -webkit-animation-delay: 10s;
              animation-delay: 10s;
      left: 50vw;
      top: 10vh;
      }

      @-webkit-keyframes cube {
      from {
        -webkit-transform: scale(0) rotate(0deg) translate(-50%, -50%);
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
        opacity: 1;
      }
      to {
        -webkit-transform: scale(20) rotate(960deg) translate(-50%, -50%);
                transform: scale(20) rotate(960deg) translate(-50%, -50%);
        opacity: 0;
      }}

      @keyframes cube {
      from {
        -webkit-transform: scale(0) rotate(0deg) translate(-50%, -50%);
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
        opacity: 1;
      }
      to {
        -webkit-transform: scale(20) rotate(960deg) translate(-50%, -50%);
                transform: scale(20) rotate(960deg) translate(-50%, -50%);
        opacity: 0;
      }}
  </style>
  <body>
    <div class="hero">
    <div class="hero__title" id="er">Processing Request...</div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>

  <?php
    function has_header_injection($str)
   {  return preg_match("/[\r\n]/", $str);  }

    $valid = "true";
    if (isset($_POST['contact_submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = $_POST['phone'];
        $msg = $_POST['message'];
        $errormsg =" ";
        /* Validations Start */
        if(has_header_injection($name) || has_header_injection($email) || has_header_injection($phone) || has_header_injection($msg))
          { die();}
        if(!$name || !$email || !$phone || !$msg )
              {
                $valid = "false";
                $errormsg = "Please fill all fields";
              }
              elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                  $valid = "false";
                  $errormsg = "Name can have only Alphabets and space ";
              }
              elseif (!preg_match("/^[0-9]*$/",$phone)) {
                  $valid = "false";
                  $errormsg = "Phone no. can have only numbers";
              }
              elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $valid = "false";
                  $errormsg = "Invalid Email Format";
              }
              elseif (preg_match("/<script>/",$msg)) {
                  $valid = "false";
                  $errormsg = "Writing script is prohibited in my site";
              }
              elseif (preg_match("/php/",$msg)) {
                  $valid = "false";
                  $errormsg = "Writing php is prohibited in my site please use P.H.P";
              }
              echo "<h1 style='color:white;'>$errormsg </h1><br>";
        /* Validations End */
    if ($valid == "true") {
            // Add the recipient email to a variable
             $to	= "sukhjindersinghmca@gmail.com";
             // Create a subject
             $subject = "$name sent a message via your contact form";
             // Construct the message
             $message = "Name: $name\r\n";
             $message .= "Email: $email\r\n\r\n";
             $message .= "Contact: $phone\r\n";
             $message .= "Message:\r\n$msg";
             $message = wordwrap($message, 72); // Keep the message neat n' tidy

             // Send the email!
             mail($to, $subject, $message, 'From: mywebsite@sukhsingh.in');
               $_SESSION['name']=$name;
          echo '<script>window.location="thank.php"</script>';
        }
    }
 ?>
 </div>
</body>
</html>
