<?php
session_start();

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

  require_once ('vendor/PHPMailer/src/PHPMailer.php');
  require_once ('vendor/PHPMailer/src/Exception.php');
  require_once ('vendor/PHPMailer/src/SMTP.php');
  require_once('vendor/autoload.php');
  
  if(isset($_SESSION['id'])){
        
        $id = $_SESSION["id"];
        $package = $_SESSION["package"];
        $name = $_SESSION["name"];
        $amount = $_SESSION["amount"];
        $email = $_SESSION["email"];
        $status = $_SESSION["status"];
    
  
  
  
  
  
  // Mailing to Customer and Coach


    try {
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host = 'Your Mail Host Address';//enter your mail server address
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'Your user name';//enter your mailserver username
        $mail->Password = 'Your password';//enter your mailserver password
        $mail->Port = 465;

        $mail->isMail();
        $mail -> setFrom('Your mail address');//enter your recived mail address
        $mail -> addAddress($email);
        $mail -> IsHTML(true);
        $mail -> Subject = ("Paid Successfully. Payment Id is" . $id);
        $mail -> Body = ("<b>". $name. "</b> is selected " . $package . " for Vocal coaching. <br> Paid for it " . sprintf('%.2f', $amount / 100) . "$ . Payment is " . $status . " .  Thank you!");
        $mail -> addCC("Your mail address");//enter your reply recived mail address
        
        $mail ->send(); 
        
        $_SESSION["info"] =  "successfully send";
    }
    catch(Exception $e){
        
        $_SESSION["info"] = "Mail isn't success. Mailer Error: {$mail->ErrorInfo}";
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <title>VOCAL RESULTS</title>
</head>
<body style="background-color:#99ffcc;">
  <div class="container mt-4">
    <h2 class="text-success text-center">Thank you for purchasing <?php echo $package; ?></h2>
    <hr>
    <p class="text-center text-primary">Your transaction ID is <?php echo $id; ?></p>
    <p class="text-center"> Email  <?php echo $_SESSION["info"];  ?> to you mail address</p>
    <p class="text-center"><a href="index.php" class="btn btn-primary mt-2">Go Back</a></p>
  </div>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v6.0'
      });
    };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat"
    attribution=setup_tool
    page_id="your facebook page id"
    theme_color="#a695c7">
  </div>
</body>
<?php
    session_destroy();
?>
</html>