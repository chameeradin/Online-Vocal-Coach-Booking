<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include_once "vendor/PHPMailer/src/PHPMailer.php";
include_once "vendor/PHPMailer/src/Exception.php";
include_once "vendor/PHPMailer/src/SMTP.php";

require 'vendor/autoload.php';
if(isset($_POST['sendEmail'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    try {
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host = 'Your Mail Host Address'; //enter your mail server address
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'Your user name'; //enter your mailserver username
        $mail->Password = 'Your password'; //enter your mailserver password
        $mail->Port = 465;
        
        
        $mail->isMail();
        $mail->From = $email;
        $mail->AddAddress('Your mail address'); //enter your recieved mail address
        $mail->Subject = "Resume For Become a Coach";
        $mail->IsHTML(true);
        $mail->Body = "<b>" . $name . "</b><br><br>" . $message;
        $mail->AddAttachment($_FILES['attachFile']['tmp_name'], $_FILES['attachFile']['name']);
        $mail->addReplyTo($email);
        $mail->Send();
        
        header("Location: https://www.vocalresults.com/coach.php?success=1");
        
        }
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
}
?>